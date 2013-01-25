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

  private static function createNavigationFromXml( $xmlIterator, $version, $depth = 0 ) {
    $result = '';
    foreach( $xmlIterator as $element ) {
      $label = $element[ 'label' ];
      if( !self::navEntryIsExcluded( $label ) ) {
        $hasChildren = $element -> count() > 0 ? true : false;
        if( $hasChildren && $depth == 0 ) {
          $result .= '<li class="category-group"><span><span class="arrow"></span>' . $label . '</span><ul>';
          $result .= self::createNavigationFromXml( $element, $version, $depth + 1 );
          $result .= '</ul></li>';
        } else {
          $url = self::createLinkUrl( self::getHref( $element ), $version );
          $result .= self::createLinkItem( $url, $label );
        }
      }
    }
    return $result;
  }

  private static function getHref( $element ) {
    $result;
    if( $element[ 'href' ] ) {
      $result = $element[ 'href' ];
    } else if( $element->link[ 0 ] ) {
      $toc = $element->link[ 0 ][ 'toc' ];
      $result = str_replace( 'toc.xml', 'index.html', $toc );
    }
    return $result;
  }

  private static function createLinkUrl( $href, $version ) {
    $topicPath = DevGuideUtils::$versions[ $version ][ 'topicPath' ];
    $apiUrl = DevGuideUtils::$versions[ $version ][ 'apiUrl' ];
    $topicUrl = str_replace( $topicPath, '', $href );
    if( self::startsWith( $topicUrl, 'reference/' ) ) {
      $url = $apiUrl . substr( $topicUrl, 10 );
    } else {
      $url = 'devguide.php?topic=' . $topicUrl . '&version=' . $version;
    }
    return $url;
  }

  private static function createLinkItem( $url, $label ) {
    $active = '';
    $style = self::createLinkStyle( $url );
    if( isset( $_GET[ 'topic' ] ) ) {
      $active = $url === $_GET[ 'topic' ] ? ' class="active"' : '';
    }
    $result =   '<li><a'
               . $active
               . $style
               . ' href="'
               . $url
               . '">'
               . $label
               . '</a></li>';
    return $result;
  }

  private static function createLinkStyle( $url ) {
    $result = '';
    if( self::startsWith( $url, 'http' ) ) {
      $result = ' style="padding-right:13px;background:url(../images/external.png) center right no-repeat"';
    }
    return $result;
  }

  private static function navEntryIsExcluded( $navEntry ) {
    $result = false;
    switch( $navEntry ) {
      case 'Legal':
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

  private static function startsWith( $haystack, $needle ) {
    return !strncmp( $haystack, $needle, strlen( $needle ) );
  }

}

?>