<?php
include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

require_once( "../Noteworthy.class.php" );

$pageTitle = "RAP Project - New and Noteworthy";
$pageKeywords = "Ajax, rap, eclipse rap";
$pageAuthor = "Ruediger Herrmann";

$header = <<<EOHTML
<p>
  Here are some of the more noteworthy things that are available with RAP
  1.3 (June 23<sup>rd</sup>, 2010).
  <!--
  which is now available for 
  <a href="http://www.eclipse.org/rap/downloads/">download</a>
  -->
</p>
<p>
  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;bug_status=RESOLVED;bug_status=VERIFIED;bug_status=CLOSED;target_milestone=1.3%20M1;target_milestone=1.3%20M2;target_milestone=1.3%20M3;target_milestone=1.3%20M4;target_milestone=1.3%20M5;target_milestone=1.3%20M6;target_milestone=1.3%20M7;target_milestone=1.3%20RC1;target_milestone=1.3%20RC2;target_milestone=1.3%20RC3;target_milestone=1.3;product=RAP;classification=RT">
  This list</a> shows all bugs that were fixed.
</p>
EOHTML;

$footer = "";

$news = new Noteworthy( 'news_13-final.xml', '', $header, $footer );
$html = $news->getHtml();

$navPosition = array( "download", "noteworthy" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );

?>
