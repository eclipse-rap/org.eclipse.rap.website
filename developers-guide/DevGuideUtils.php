<?php

class DevGuideUtils {

  const CURRENT_VERSION = '3.1';
  const MASTER_VERSION = '3.1';

  public static $versions = array(
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
    ),
    '3.0' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.0/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.0/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.1' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.1/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.1/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    )
  );

  private function __construct() {}

}

?>
