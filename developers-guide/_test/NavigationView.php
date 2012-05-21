<?php

class NavigationView {

  private static $rootUrl;

  private function __construct() {}

  public static function render( $rootUrl ) {
    self::$rootUrl = $rootUrl;
    echo '<ul id="dev-guide-nav">';
    $xmlIterator = new SimpleXMLIterator( $rootUrl . '/help/toc.xml', null, true );
    self::createNavigationFromXml( $xmlIterator );
    echo '</ul>';
  }

  private static function createNavigationFromXml( $xmlIterator ) {
    foreach( $xmlIterator as $element ) {
      $label = $element[ 'label' ];
      if( $label != 'Legal' && $label != 'Reference' && $label != 'Introduction' ) {
        $hasChildren = $element -> count() > 0 ? true : false;
        if( $hasChildren ) {
          echo '<li class="category-group"><span><span class="arrow"></span>' . $label . '</span><ul>';
          self::createNavigationFromXml( $element );
          echo '</ul></li>';
        } else if( isset( $element[ 'href' ] ) ) {
          $url = $element[ 'href' ];
          $active = self::pathsIdentical( self::$rootUrl . '/' . $url, $_GET[ 'topic' ] ) ? 'class="active"' : '';
          echo '<li><a ' . $active . ' href="devguide.php?topic=' . self::$rootUrl . '/' . $url .'">' . $label . '</a></li>';
        }
      }
    }
  }

  private static function pathsIdentical( $path1, $path2 ) {
    $path1Components = parse_url( $path1 );
    $path2Components = parse_url( $path2 );
    return $path1Components[ 'path' ] == $path2Components[ 'path' ];
  }

}

?>