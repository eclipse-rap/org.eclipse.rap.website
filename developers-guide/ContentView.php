<?php

class ContentView {

  private static $htmlFileInfo;

  private function __construct() {}

  public static function render( $htmlFilePath ) {
    self::$htmlFileInfo = new SplFileObject( $htmlFilePath );
    echo '<div id="dev-guide-content" >';
    echo self::processHtmlFileContent();
    echo '</div>';
  }

  private static function processHtmlFileContent() {
    $htmlDocument = new DOMDocument();
    $htmlDocument -> loadHTMLFile( self::$htmlFileInfo -> getPathname() );
    self::rewriteLinkUrls( $htmlDocument );
    self::rewriteImageUrls( $htmlDocument );
    return $htmlDocument -> saveXML( $htmlDocument -> getElementsByTagName( 'body') -> item( 0 ) );
  }

  private static function rewriteLinkUrls( $htmlDocument ) {
    $links = $htmlDocument -> getElementsByTagName( 'a' );
    foreach( $links as $link ) {
      $url = $link -> getAttribute( 'href' );
      if( !self::containsString( $url, 'http://' ) && !self::isBookmark( $url ) ) {
        $link -> setAttribute( 'href', self::rewriteLinkUrl( $url ) );
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
      $result = '?topic=' . self::$htmlFileInfo -> getPath() . '/' . $url;
    }
    return $result;
  }

  private static function rewriteImageUrls( $htmlDocument ) {
    $images = $htmlDocument -> getElementsByTagName( 'img' );
    foreach( $images as $image ) {
      $url = $image -> getAttribute( 'src' );
      if( !self::containsString( $url, 'http://' ) ) {
        $image -> setAttribute( 'src', self::$htmlFileInfo -> getPath() . '/' . $url );
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