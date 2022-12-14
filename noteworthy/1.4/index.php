<?php
include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

require_once( "../Noteworthy.class.php" );

$pageTitle = "RAP Project - New and Noteworthy";
$pageKeywords = "ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "The RAP Team";

$header = <<<EOHTML
<p>
  Here's a list of the most noteworthy things that will be available with
  RAP 1.4 (June 22, 2011).
  <!--
    which is now available
    for <a href="http://www.eclipse.org/rap/downloads/">download</a>.
  -->
</p>
<p>
  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;bug_status=RESOLVED;bug_status=VERIFIED;bug_status=CLOSED;target_milestone=1.4%20M1;target_milestone=1.4%20M2;target_milestone=1.4%20M3;target_milestone=1.4%20M4;target_milestone=1.4%20M5;target_milestone=1.4%20M6;target_milestone=1.4%20M7;target_milestone=1.4%20RC1;target_milestone=1.4%20RC2;target_milestone=1.4%20RC3;target_milestone=1.4;product=RAP;classification=RT">
  This list</a> shows all bugs that were fixed for this release so far.
</p>
EOHTML;

$footer = "";

$news = new Noteworthy( 'news_14-final.xml', '', $header, $footer );
$html = $news->getHtml();

$navPosition = array( "documentation", "noteworthy" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );

?>
