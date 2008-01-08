<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP Project - New and Noteworthy";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.1 M1 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things available in the milestone
      build M1 (Januar 7, 2008) which is now available for 
      <a href="http://www.eclipse.org/rap/downloads.php">download</a>. 
    </p>
    <ul>
    <!--
      <li><a href="#RAP_Common">RAP Common</a></li>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#RAP_JFace">JFace</a></li>
      <li><a href="#Workbench">Workbench</a></li>
    -->
    </ul>
    

<a name="Common"></a>
<h2>Common</h2>
<table>
  <tr valign="top" align="left">
    <td width="20%">
      <b>Eclipse 3.4</b></td>
    <td width="80%">
      The target download is now available for Eclipse 3.3 and 3.4. 
    <td/>
  </tr>
</table>

<hr />

<a name="RWT"></a>
<h2>RWT</h2>
<table>
  <tr valign="top" align="left">
    <td width="20%">
      <b>Support for Custom Widget Id's</b></td>
    <td width="80%">
      In RWT, each widget has an automatically generated, unique <em>widget 
      id</em> that associates the server-side object with its client-side 
      representation.
      <br />
      In order to use automated UI tests, now the generated id can be 
      overridden programmatically. With code like this:
      <pre>
  Button button = new ...
  button.setData( WidgetUtil.CUSTOM_WIDGET_ID, "org.sample.LoginDialog#okButton" );
      </pre>
      and the system property <code>org.eclipse.rwt.enableUITests</code> turned
      on, the button can always be identified by its custom id. The test 
      scenario can remain unchanged even if the UI changes.  
      <br />
      <br />
      See <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=204859">this
      bug</a> and the JavaDoc for <code>WidgetUtil#CUSTOM_WIDGET_ID</code> and
      <code>WidgetUtil#ENABLE_UI_TESTS</code> for further information.
    <td/>
  </tr>
  
  <!-- horizontal space between entries -->
  <tr>
    <td>&nbsp</td><td>&nbsp</td>
  </tr>
  
  <tr valign="top" align="left">
    <td width="20%">
      <b>Browser#execute()</b></td>
    <td width="80%">
      The <code>org.eclipse.swt.browser.Browser#execute(String)</code> method 
      was implemented. This method allows to execute a script containing 
      JavaScript commands.
      <br />
      <img style="margin:5px" src="browser-exec.jpeg" />
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
