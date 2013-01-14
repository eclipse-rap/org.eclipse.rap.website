<?php

class DevGuideUtils {

  const CURRENT_VERSION = '1.5';
  const MASTER_VERSION = '2.0';

  public static $versions = array(
    '1.4' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/1.4/',
      'tocPath' => 'help/toc.xml',
      'topicPath' => 'help/html/'
    ),
    '1.5' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/1.5/',
      'tocPath' => 'help/toc.xml',
      'topicPath' => 'help/html/'
    ),
    '2.0' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/2.0/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    )
  );

  private function __construct() {}

}

?>