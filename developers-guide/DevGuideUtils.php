<?php

class DevGuideUtils {

  const ROOT_URL = 'http://git.eclipse.org/c/rap/org.eclipse.rap.tools.git/plain/bundles/org.eclipse.rap.help';
  const CURRENT_VERSION = '1.5';
  const MASTER_VERSION = '2.0';

  public static $versions = array(
    '1.4' => array(
      'postfix' => '?h=streams/1.4-maintenance',
      'api' =>'http://help.eclipse.org/indigo/topic/org.eclipse.rap.help/help/html'
    ),
    '1.5' => array(
      'postfix' => '?h=streams/1.5-maintenance',
      'api' =>'http://help.eclipse.org/juno/topic/org.eclipse.rap.help/help/html'
    ),
    '2.0' => array(
      'postfix' => '',
      'api' =>'http://help.eclipse.org/juno/topic/org.eclipse.rap.help/help/html' // TODO [tb] : update to Kepler when possible
    )
  );

  private function __construct() {}

}

?>