<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - 1.2.1 Release Notes";
$pageKeywords   = "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor		= "R�diger Herrmann";

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

<div id="midcolumn">
  <h1>1.2.1 Service Release Notes</h1>
  <p>
  As with every service release the main aspect is to provide bug fixes which 
  didn't get into the <a href="news_12.php">1.2 release</a>. 
  </p>
  <p>
  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=sr121&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
  This list</a> shows all bugs that were fixed in this service release.
  </p>
  <p>
  <!-- 
  The service release will be availble on September 25<sup>th</sup>, 2009. 
  In the meanwhile the changes can be obtained from 
  <a href="/rap/source/">CVS</a> in branch 
  <code>v12_Maintenance</code>.
  -->
  The service release is now available for
  <a href="http://www.eclipse.org/rap/downloads/">download</a>.
  </p>
</div>

EOHTML;


	# Generate the web page
generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
