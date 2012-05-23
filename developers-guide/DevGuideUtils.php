<?php

class DevGuideUtils {

  const ROOT_URL = 'http://git.eclipse.org/c/rap/org.eclipse.rap.tools.git/plain/bundles/org.eclipse.rap.help';

  private function __construct() {}

  public static function containsString( $haystack, $needle ) {
    return strpos( $haystack, $needle ) === false ? false : true;
  }

}

?>