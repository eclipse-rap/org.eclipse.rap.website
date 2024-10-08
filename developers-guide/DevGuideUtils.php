<?php

class DevGuideUtils {

  const CURRENT_VERSION = '4.0';
  const MASTER_VERSION = '4.0';

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
    ),
    '3.2' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.2/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.2/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.3' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.3/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.3/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.4' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.4/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.4/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.5' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.5/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.5/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.6' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.6/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.6/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.7' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.7/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.7/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.8' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.8/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.8/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.9' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.9/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.9/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.10' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.10/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.10/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.11' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.11/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.11/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.12' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.12/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.12/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.13' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.13/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.13/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.14' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.14/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.14/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.15' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.15/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.15/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.16' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.16/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.16/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.17' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.17/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.17/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.18' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.18/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.18/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.19' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.19/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.19/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.20' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.20/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.20/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.21' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.21/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.21/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.22' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.22/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.22/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.23' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.23/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.23/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.24' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.24/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.24/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.25' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.25/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.25/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.26' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.26/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.26/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.27' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.27/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.27/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.28' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.28/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.28/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '3.29' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/3.29/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/3.29/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    ),
    '4.0' => array(
      'rootUrl' => 'http://download.eclipse.org/rt/rap/doc/4.0/',
      'apiUrl' => 'http://download.eclipse.org/rt/rap/doc/4.0/guide/reference/',
      'tocPath' => 'guide/toc.xml',
      'topicPath' => 'guide/articles/'
    )
  );

  private function __construct() {}

}

?>
