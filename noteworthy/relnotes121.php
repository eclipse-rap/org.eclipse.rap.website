<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - 1.0.1 Release Notes";
$pageKeywords   = "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor		= "Rüdiger Herrmann";

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

<div id="midcolumn">
  <h1>1.2.1 Service Release Notes</h1>
  <p>
  As with every service release the main aspect is to provide bug fixes which 
  didn't get into the 1.2 release. The list below shows all bugs that were
  fixed in this service release. 
  </p>
  <p>
  The service release will be availble on September 25<sup>th</sup>, 2009. 
  In the meanwhile the changes can be obtained from 
  <a href="http://www.eclipse.org/rap/cvs.php">CVS</a> in branch 
  <code>v12_Maintenance</code>.
  <!--
  The service release is now available for
  <a href="http://www.eclipse.org/rap/downloads">download</a>.
  -->
  </p>
	  
  <table cellspacing="10px">
    <tr valign="top" align="left">
	  <td width="20%">
	    <a href="">[ bug id ]</a>
	  </td>
	  <td width="80%">
	    [ bug summary ]
      </td>
    </tr>
  </table>
  
</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
