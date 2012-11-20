<?php

class DevGuideUtils {

  const ROOT_URL = 'http://git.eclipse.org/c/rap/org.eclipse.rap.tools.git/plain/bundles/org.eclipse.rap.help';
  const URL_POSTFIX = '?h=streams/1.5-maintenance';
  const VERSION = '1.5';
  const API_URL = 'http://help.eclipse.org/juno/topic/org.eclipse.rap.help/help/html';

  public static $versions = array(
    '1.5' => array(
      'postfix' => '?h=streams/1.5-maintenance',
      'api' =>'http://help.eclipse.org/juno/topic/org.eclipse.rap.help/help/html'
    )
  );

  private function __construct() {}

}

?>