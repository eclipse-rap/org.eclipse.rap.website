<?php

class DevGuideUtils {

  const CURRENT_VERSION = '2.2';
  const MASTER_VERSION = '2.3';

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
    '2.2' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/2.2/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/2.2/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '2.3' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/2.3/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/2.3/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    )
  );

  private function __construct() {}

}

?>