<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP Project - New and Noteworthy";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.1 M1 - New and Noteworthy</h1>
    <p>
      Here are some of the more noteworthy things that will be available in 
      milestone build M1 (Januar 7, 2008) and meanwhile serves to document
      the development progress.    
      <br />
      All features documented here can be obtained from 
      <a href="../cvs.php">CVS HEAD</a>.             
    </p>
    <ul>
    <!--
      <li><a href="#RAP_Common">RAP Common</a></li>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#RAP_JFace">JFace</a></li>
      <li><a href="#Workbench">Workbench</a></li>
    -->
    </ul>
    

<a name="RWT"></a>
<h2>RWT</h2>
<table>
  <tr valign="top" align="left">
    <td width="20%">
      <b>Browser#execute()</b></td>
    <td width="80%">
      The <code>Browser#execute(String)</code> method was implemented. This 
      method allows to execute a script containing JavaScript commands.
      <br />
      <img src="browser-exec.jpeg" />
      <br />
      Please read the JavaDoc for further details.
    <td/>
  </tr>
</table>

<hr />

</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
