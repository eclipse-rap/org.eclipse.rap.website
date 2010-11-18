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
  Here's a list of the most noteworthy things that will be available in the
  milestone build 1.4 M4 (December 2010).
  <!--
    which is now available
    for <a href="http://www.eclipse.org/rap/downloads/">download</a>.
  -->
</p>
<p>
  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=RAP&target_milestone=1.4+M4&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&query_format=advanced">
  This list</a> shows all bugs that were fixed during this milestone.
</p>
EOHTML;

$footer = <<<EOHTML
<p>
  The above features are just the ones that are new since the last 
  milestone build. Summaries for earlier builds:
</p>
<ul>
  <li><a href="news_M1.php">New for RAP 1.4 M1</a></li>
  <li><a href="news_M2.php">New for RAP 1.4 M2</a></li>
  <li><a href="news_M3.php">New for RAP 1.4 M3</a></li>
</ul>
EOHTML;

$news = new Noteworthy( 'news_14.xml', 'M4', $header, $footer );
$html = $news->getHtml();

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
