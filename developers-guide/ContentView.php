<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/DevGuideUtils.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/_lib/urlnormalizer/URLNormalizer.php';

class ContentView {

  private static $htmlFile;
  private static $path;
  private static $paths;
  private static $version;

  private function __construct() {}

  public static function create( $htmlFilePath, $version ) {
    self::$path = strstr( $htmlFilePath, "/", true );
    self::$version = $version;
    self::$paths = DevGuideUtils::$versions[ self::$version ];
    self::$htmlFile = new SplFileObject( self::$paths[ 'rootUrl' ] . self::$paths[ 'topicPath' ] . $htmlFilePath );
    return self::processHtmlFileContent();
  }

  private static function processHtmlFileContent() {
    $result = '';
    $htmlDocument = new DOMDocument();
    $htmlDocument -> loadHTMLFile( self::$htmlFile -> getPathname() );
    self::rewriteLinkUrls( $htmlDocument );
    self::rewriteImageUrls( $htmlDocument );
    $bodyChildNodes = $htmlDocument -> getElementsByTagName( 'body' ) -> item( 0 ) -> childNodes;
    for( $i = 0; $i < $bodyChildNodes -> length; $i++ ) {
      $result .= $htmlDocument -> saveXML( $bodyChildNodes -> item( $i ), LIBXML_NOEMPTYTAG );
    }
    return $result;
  }

  private static function rewriteLinkUrls( $htmlDocument ) {
    $links = $htmlDocument -> getElementsByTagName( 'a' );
    foreach( $links as $link ) {
      if( $link -> hasAttribute( 'href' ) ) {
        $url = $link -> getAttribute( 'href' );
        if( !containsString( $url, 'http://' ) && !self::isBookmark( $url ) ) {
          $link -> setAttribute( 'href', self::rewriteLinkUrl( $url ) );
        }
      }
    }
  }

  private static function isBookmark( $url ) {
    return preg_match( '|^#.*|', $url ) === 1 ? true : false;
  }

  private static function rewriteLinkUrl( $url ) {
    $result = '';
    if( self::startsWith( $url, '/help' ) ) {
      $result = str_replace( '/help', 'http://help.eclipse.org', $url );
    } else if( self::startsWith( $url, '../reference' ) ) {
      $result = self::$paths[ 'rootUrl' ] . self::$paths[ 'topicPath' ] . trim( $url, "./" );
    } else if( containsString( $url, '.html' ) ) {
      $normalizedUrl = self::normalizeUrl( '/' . self::$path . '/' . $url );
      $result = '?topic=' . trim( $normalizedUrl, "/" ) . '&version=' . self::$version;
    } else {
      $result = $url;
    }
    return $result;
  }

  private static function rewriteImageUrls( $htmlDocument ) {
    $images = $htmlDocument -> getElementsByTagName( 'img' );
    foreach( $images as $image ) {
      $url = $image -> getAttribute( 'src' );
      if( !containsString( $url, 'http://' ) ) {
        $image -> setAttribute( 'src', self::$paths[ 'rootUrl' ] . self::$paths[ 'topicPath' ] . self::$path . '/' . $url );
      }
    }
  }

  private static function normalizeUrl( $url ) {
    $normalizer = new URLNormalizer( $url );
    return $normalizer -> normalize();
  }

  private static function startsWith( $haystack, $needle ) {
    return !strncmp( $haystack, $needle, strlen( $needle ) );
  }

}

?>
