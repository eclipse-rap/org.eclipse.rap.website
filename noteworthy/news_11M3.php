<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP Project - New and Noteworthy";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.1 M3 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that will be available in the 
      milestone build M3 (April 5, 2008). All features documented here can be 
      obtained from <a href="../cvs.php">CVS HEAD</a>.</p>
    <!--
    <p>
    <ul>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#RAP_JFace">JFace and Workbench</a></li>
    </ul>
    -->
	</p>
	
	<!--
	<a name="RWT"></a>
	<h2>RWT</h2>
	<table>
	  <tr valign="top" align="left">
	    <td width="20%">
	      <b>xxx</b></td>
	    <td width="80%">
	    <td/>
	  </tr>
	  <tr valign="top" align="left">
	    <td width="20%">
	      <b>yyy</b></td>
	    <td width="80%">
	    <td/>
	  </tr>
	</table>
	-->
	
	<hr />
	
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
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
