<?php
include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

require_once( "../Noteworthy.class.php" );

$pageTitle = "RAP Project - New and Noteworthy";
$pageKeywords = "ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "The RAP Team";

$header = <<<EOHTML
<p>
  Here's a list of the most noteworthy things in the
  milestone build 1.4 M1 which is available
  for <a href="http://www.eclipse.org/rap/downloads/">download</a>.
</p>
<p>
  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=RAP&target_milestone=1.4+M1&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&query_format=advanced">
  This list</a> shows all bugs that were fixed during this milestone.
</p>
EOHTML;

$footer = <<<EOHTML
EOHTML;

$news = new Noteworthy( 'news_14.xml', 'M1', $header, $footer );
$html = $news->getHtml();

$navPosition = array( "documentation", "noteworthy" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );

?>
