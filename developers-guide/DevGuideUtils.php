<?php

class DevGuideUtils {

  const CURRENT_VERSION = '2.0';
  const MASTER_VERSION = '2.1';

  public static $versions = array(
    '1.5' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/1.5/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/1.5/help/html/reference/',
      'tocPath' => 'help/toc.xml',
      'topicPath' => 'help/html/'
    ),
    '2.0' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/2.0/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/2.0/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '2.1' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/2.1/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/2.1/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    )
  );

  private function __construct() {}

}

?>