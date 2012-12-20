<?php

class NavigationView {

  private static $introductionCount = 0;

  private function __construct() {}

  public static function create( $version ) {
    $paths = DevGuideUtils::$versions[ $version ];
    $filePath = $paths[ 'rootUrl' ] . $paths[ 'tocPath' ];
    $result = '<ul id="dev-guide-nav">';
    $xmlIterator = new SimpleXMLIterator( $filePath, null, true );
    $result .= self::createNavigationFromXml( $xmlIterator, $version );
    $result .= '</ul>';
    return $result;
  }

  private static function createNavigationFromXml( $xmlIterator, $version ) {
    $result = '';
    $topicPath = DevGuideUtils::$versions[ $version ][ 'topicPath' ];
    foreach( $xmlIterator as $element ) {
      $label = $element[ 'label' ];
      if( !self::navEntryIsExcluded( $label ) ) {
        $hasChildren = $element -> count() > 0 ? true : false;
        if( $hasChildren ) {
          $result .= '<li class="category-group"><span><span class="arrow"></span>' . $label . '</span><ul>';
          $result .= self::createNavigationFromXml( $element, $version );
          $result .= '</ul></li>';
        } else if( isset( $element[ 'href' ] ) ) {
          $url = str_replace( $topicPath, '', $element[ 'href' ] );
          $active = '';
          if( isset( $_GET[ 'topic' ] ) ) {
            $active = $url === $_GET[ 'topic' ] ? 'class="active"' : '';
          }
          $result .=   '<li><a '
                     . $active
                     . ' href="devguide.php?topic='
                     . $url
                     . '&version='
                     . $version
                     . '">'
                     . $label
                     . '</a></li>';
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