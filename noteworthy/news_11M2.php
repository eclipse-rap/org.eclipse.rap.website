<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP Project - New and Noteworthy";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.1 M2 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things available in the milestone
      build M2 (February 20, 2008) which is now available for 
      <a href="http://www.eclipse.org/rap/downloads.php">download</a>. 
    </p>
    <!--
    <ul>
      <li><a href="#RAP_Common">RAP Common</a></li>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#RAP_JFace">JFace</a></li>
      <li><a href="#Workbench">Workbench</a></li>
    </ul>
    -->
	
	<a name="RWT"></a>
	<h2>RWT</h2>
	<table>
	  <tr valign="top" align="left">
	    <td width="20%">
	      <b>Table</b></td>
	    <td width="80%">
	      The table widget now supports keyboard navigation. Using the
	      <code>Up</code>, <code>Down</code>, <code>Home</code>,
	      <code>End</code>, <code>PageUp</code> and <code>PageDown</code> 
	      keys works as expected.
	    <td/>
	  </tr>
	</table>
	
	<hr />
	
	<a name="RAP_JFace"></a>
	<h2>JFace</h2>
	<table>
	  <tr valign="top" align="left">
	    <td width="20%">
	      <b>Image decorators</b></td>
	    <td width="80%">
	    ... placeholder text ... 
	    <td/>
	  </tr>
	</table>
	
</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
