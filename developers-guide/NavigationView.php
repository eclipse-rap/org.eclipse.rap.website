<?php

class NavigationView {

  private function __construct() {}

  public static function render( $filePath, $navigationType = null ) {
    echo '<ul>';
    $xmlIterator = new SimpleXMLIterator( $filePath, null, true );
    self::createNavigationFromXml( $xmlIterator );
    echo '</ul>';
  }

  private static function createNavigationFromXml( $xmlIterator ) {
    foreach( $xmlIterator as $element ) {
      if( $element[ 'label' ] != 'Legal' && $element[ 'label' ] != 'Reference' ) {
        $hasChildren = $element -> count() > 0 ? true : false;
        if( $hasChildren ) {
          echo '<li class="category-group"><span>' . $element[ 'label' ] . '</span><ul>';
          self::createNavigationFromXml( $element );
          echo '</ul></li>';
        } else if( $element[ 'href' ] ) {
          $url = str_replace( 'help/', '', $element[ 'href' ] );
          $active = self::pathsIdentical( $url, $_GET[ 'topic' ] ) ? 'class="active"' : '';
          echo '<li><a ' . $active . ' href="devguide.php?topic=' . $url .'">' . $element[ 'label' ] . '</a></li>';
        }
      }
    }
  }

  private static function pathsIdentical( $path1, $path2 ) {
    return realpath( $path1 ) === realpath( $path2 );
  }

}

?>