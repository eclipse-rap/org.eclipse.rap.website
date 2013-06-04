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
    self::$path = substr( $htmlFilePath, 0, strpos( $htmlFilePath, "/" ) );
    if( self::$path == '' ) {
      self::$path = '.';
    }
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
    $split = explode( "#", $url );
    $path = $split[ 0 ];
    if( self::startsWith( $path, '/help' ) ) {
      $result = str_replace( '/help', 'http://help.eclipse.org', $path );
    } else if( self::startsWith( $path, '../reference' ) ) {
      $result = self::$paths[ 'apiUrl' ] .  substr ( $path, 13 );
    } else if( containsString( $path, '.html' ) ) {
      $normalizedUrl = self::normalizeUrl( '/' . self::$path . '/' . $path );
      $result = '?topic=' . trim( $normalizedUrl, "/" ) . '&amp;version=' . self::$version;
    } else {
      $result = $path;
    }
    if( count( $split ) > 1 ) {
      $result .= '#' . $split[ 1 ];
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
