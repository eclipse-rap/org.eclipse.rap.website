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
  Here's a list of noteworthy things that have changed in the
  release candiate builds for 1.4.
</p>

<h2>RC1</h2>
<p>
  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=RAP&target_milestone=1.4+RC1&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&query_format=advanced">
  This list</a> shows all bugs that were fixed in the RC1 build which is now available for
  <a href="http://www.eclipse.org/rap/downloads/">download</a>.
</p>

<h2>RC2</h2>
<p>
  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=RAP&target_milestone=1.4+RC2&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&query_format=advanced">
  This list</a> shows all bugs that were fixed in the RC1 build which is now available for
  <a href="http://www.eclipse.org/rap/downloads/">download</a>.
</p>

EOHTML;

$footer = <<<EOHTML
<p>
  The above features are just the ones that are new since the last
  stable build. Summaries for earlier builds:
</p>
<ul>
  <li><a href="news_M1.php">News for RAP 1.4 M1</a></li>
  <li><a href="news_M2.php">News for RAP 1.4 M2</a></li>
  <li><a href="news_M3.php">News for RAP 1.4 M3</a></li>
  <li><a href="news_M4.php">News for RAP 1.4 M4</a></li>
  <li><a href="news_M5.php">News for RAP 1.4 M5</a></li>
  <li><a href="news_M6.php">News for RAP 1.4 M6</a></li>
  <li><a href="news_M7.php">News for RAP 1.4 M7</a></li>
</ul>
EOHTML;

$news = new Noteworthy( 'news_14.xml', 'RC', $header, $footer );
$html = $news->getHtml();

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
