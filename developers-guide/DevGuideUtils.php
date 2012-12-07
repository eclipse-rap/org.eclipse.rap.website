<?php

class DevGuideUtils {

  const CURRENT_VERSION = '1.5';
  const MASTER_VERSION = '2.0';

  public static $versions = array(
    '1.4' => array(
      'rootUrl' => 'http://git.eclipse.org/c/rap/org.eclipse.rap.tools.git/plain/bundles/org.eclipse.rap.help',
      'postfix' => '?h=streams/1.4-maintenance',
      'api' =>'http://help.eclipse.org/indigo/topic/org.eclipse.rap.help/help/html'
    ),
    '1.5' => array(
      'rootUrl' => 'http://git.eclipse.org/c/rap/org.eclipse.rap.tools.git/plain/bundles/org.eclipse.rap.help',
      'postfix' => '?h=streams/1.5-maintenance',
      'api' =>'http://help.eclipse.org/juno/topic/org.eclipse.rap.help/help/html'
    ),
    '2.0' => array(
      'rootUrl' => 'http://git.eclipse.org/c/rap/org.eclipse.rap.tools.git/plain/bundles/org.eclipse.rap.doc',
      'postfix' => '',
      'api' =>'http://help.eclipse.org/juno/topic/org.eclipse.rap.help/help/html' // TODO [tb] : update to Kepler when possible
    )
  );

  private function __construct() {}

}

?>