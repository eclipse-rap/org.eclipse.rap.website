<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );
$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include( $App->getProjectCommon() );

require_once( "../Noteworthy.class.php" );

$pageTitle = "RAP Project - New and Noteworthy";
$pageKeywords = "Ajax, rap, eclipse rap";
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

$footer = <<<EOHTML
<p>
  The above list aggregates the new features from all milestones.
  Here are the separate builds:
</p>
<ul>
  <li><a href="news_M1.php">New for RAP 1.4 M1</a></li>
  <li><a href="news_M2.php">New for RAP 1.4 M2</a></li>
</ul>
EOHTML;

$news = new Noteworthy( 'news_14.xml', '', $header, $footer );
$html = $news->getHtml();

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
