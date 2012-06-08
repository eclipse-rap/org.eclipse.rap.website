<?php

class NavigationView {

  private static $introductionCount = 0;

  private function __construct() {}

  public static function create( $filePath ) {
    $result = '<ul id="dev-guide-nav">';
    $xmlIterator = new SimpleXMLIterator( $filePath, null, true );
    $result .= self::createNavigationFromXml( $xmlIterator );
    $result .= '</ul>';
    return $result;
  }

  private static function createNavigationFromXml( $xmlIterator ) {
    $result = '';
    foreach( $xmlIterator as $element ) {
      $label = $element[ 'label' ];
      if( !self::navEntryIsExcluded( $label ) ) {
        $hasChildren = $element -> count() > 0 ? true : false;
        if( $hasChildren ) {
          $result .= '<li class="category-group"><span><span class="arrow"></span>' . $label . '</span><ul>';
          $result .= self::createNavigationFromXml( $element );
          $result .= '</ul></li>';
        } else if( isset( $element[ 'href' ] ) ) {
          $url = str_replace( 'help/html/', '', $element[ 'href' ] );
          $active = '';
          if( isset( $_GET[ 'topic' ] ) ) {
            $active = $url === $_GET[ 'topic' ] ? 'class="active"' : '';
          }
          $result .= '<li><a ' . $active . ' href="devguide.php?topic=' . $url .'">' . $label . '</a></li>';
        }
      }
    }
    return $result;
  }

  private static function navEntryIsExcluded( $navEntry ) {
    $result = false;
    switch( $navEntry ) {
      case 'Legal':
        $result = true;
        break;
      case 'Reference':
        $result = true;
        break;
      case 'Introduction':
        if( self::$introductionCount < 1 ) {
          self::$introductionCount++;
          $result = true;
          break;
        }
    }
    return $result;
  }

}

?>