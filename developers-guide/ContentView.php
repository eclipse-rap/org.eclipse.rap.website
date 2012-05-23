<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/DevGuideUtils.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/_lib/urlnormalizer/URLNormalizer.php';

class ContentView {

  private static $htmlFile;

  private function __construct() {}

  public static function create( $htmlFilePath ) {
    self::$htmlFile = new SplFileObject( DevGuideUtils::ROOT_URL . '/help/html/' . $htmlFilePath );
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
        if( !DevGuideUtils::containsString( $url, 'http://' ) && !self::isBookmark( $url ) ) {
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
    if( substr( $url, 0, 5 ) === '/help' ) {
      $result = str_replace( '/help', 'http://help.eclipse.org', $url );
    } else if( DevGuideUtils::containsString( $url, '.html' ) ) {
      $normalizedUrl = self::normalizeUrl( self::$htmlFile -> getPath() . '/' . $url );
      $searchString = DevGuideUtils::ROOT_URL . '/help/html/';
      $result = '?topic=' . str_replace( $searchString, '', $normalizedUrl );
    } else {
      $result = $url;
    }
    return $result;
  }

  private static function rewriteImageUrls( $htmlDocument ) {
    $images = $htmlDocument -> getElementsByTagName( 'img' );
    foreach( $images as $image ) {
      $url = $image -> getAttribute( 'src' );
      if( !DevGuideUtils::containsString( $url, 'http://' ) ) {
        $image -> setAttribute( 'src', self::$htmlFile -> getPath() . '/' . $url );
      }
    }
  }

  private static function normalizeUrl( $url ) {
    $normalizer = new URLNormalizer( $url );
    return $normalizer -> normalize();
  }

}

?>
