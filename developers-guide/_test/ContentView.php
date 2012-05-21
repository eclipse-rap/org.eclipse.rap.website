<?php

class ContentView {

  private static $htmlFile;

  private function __construct() {}

  public static function create( $htmlFilePath ) {
    self::$htmlFile = new SplFileObject( $htmlFilePath );
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
        if( !self::containsString( $url, 'http://' ) && !self::isBookmark( $url ) ) {
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
    } else {
      $result = '?topic=' . self::$htmlFile -> getPath() . '/' . $url;
    }
    return $result;
  }

  private static function rewriteImageUrls( $htmlDocument ) {
    $images = $htmlDocument -> getElementsByTagName( 'img' );
    foreach( $images as $image ) {
      $url = $image -> getAttribute( 'src' );
      if( !self::containsString( $url, 'http://' ) ) {
        $image -> setAttribute( 'src', self::$htmlFile -> getPath() . '/' . $url );
      }
    }
  }

  private static function containsString( $haystack, $needle ) {
    $result = true;
    if( strpos( $haystack, $needle ) === false ) {
      $result = false;
    }
    return $result;
  }

}

?>
