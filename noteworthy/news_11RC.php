<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP Project - New and Noteworthy";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.1 Release Candidates - New and Noteworthy</h1>

    <h2>RC1</h2>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=RAP&target_milestone=1.1+RC1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed in the RC1 build 
      (May 20, 2008) which is now available for 
      <a href="http://www.eclipse.org/rap/downloads.php">download</a>.
    </p>

	<hr />

    <h2>RC2</h2>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=RAP&target_milestone=1.1+RC2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed in the RC2 build 
      (May 27, 2008) which can be obtained from 
      <a href="http://www.eclipse.org/rap/cvs.php">CVS HEAD</a>.
    </p>

	<hr />

    <p>The above notes are just the ones that are new since the last 
    build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_11M4.php">New for RAP 1.1 M4 (May 6, 2008)</a></li>
      <li><a href="news_11M3.php">New for RAP 1.1 M3 (April 7, 2008)</a></li>
      <li><a href="news_11M2.php">New for RAP 1.1 M2 (February 20, 2008)</a></li>
      <li><a href="news_11M1.php">New for RAP 1.1 M1 (January 7, 2008)</a></li>
    </ul>
    
    <p>&nbsp;</p>
	
</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
