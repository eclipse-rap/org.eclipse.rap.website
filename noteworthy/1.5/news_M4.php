<?php
include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

require_once( "../Noteworthy.class.php" );

$pageTitle = "RAP Project - New and Noteworthy";
$pageKeywords = "ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "The RAP Team";

$header = <<<EOHTML
<p>
  Here's a list of the most noteworthy things in the
  milestone build 1.5 M4 which is available
  for <a href="http://www.eclipse.org/rap/downloads/">download</a> from December 16, 2011 on.
  Before general availability of this milestone build, all changes described here can be 
  explored with the most recent <a href="http://www.eclipse.org/rap/downloads/">nightly build</a>.
</p>
<p>
  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=RAP&target_milestone=1.5+M4&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&query_format=advanced">
  This list</a> shows all bugs that were fixed during this milestone.
</p>
EOHTML;

$footer = <<<EOHTML
<p>
  The above features are just the ones that are new since the last
  milestone build. Summaries for earlier builds:
</p>
<ul>
  <li><a href="news_M1.php">News for RAP 1.5 M1</a></li>
  <li><a href="news_M2.php">News for RAP 1.5 M2</a></li>
  <li><a href="news_M3.php">News for RAP 1.5 M3</a></li>
</ul>
EOHTML;

$news = new Noteworthy( 'news_15.xml', 'M4', $header, $footer );
$html = $news->getHtml();

$navPosition = array( "download", "noteworthy" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );

?>
