<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP Project - New and Noteworthy";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.1 M4 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that will be available in the 
      milestone build M4 (May 6, 2008). All features documented here can be 
      obtained from <a href="../cvs.php">CVS HEAD</a>.</p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=RAP&target_milestone=1.1+M4&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>
    <p><ul>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#Workbench">Workbench</a></li>
    </ul></p>

    <hr />

	<a name="RWT"></a>
	<h2>RWT</h2>
	<table>
	  <tr valign="top" align="left">
	    <td width="20%">
	      <b>Theming</b></td>
	    <td width="80%">
          <b>Support for theme files in CSS format</b>
          <br />
          RAP supports theme files in CSS syntax now. CSS theme files for 
          RAP must be valid
          <a href="http://www.w3.org/TR/CSS21/">CSS 2.1</a> files, except for
          a couple of RAP specific properties and pseudo classes.
          <p>The following is an example for a simple CSS theme file:
          <pre>
  * {
    <span style="color:blue;">backgound-color</span>: <span style="color:#568c28;">white</span>;
  }
  
  Button<span style="color:#96154f;">[PUSH]</span>, Button<span style="color:#96154f;">[TOGGLE]</span> {
    <span style="color:blue;">border</span>: <span style="color:#568c28;">2px solid blue</span>;
    <span style="color:blue;">color</span>: <span style="color:#568c28;">rgb( 17, 23, 103 )</span>;
    <span style="color:blue;">background-color</span>: <span style="color:#568c28;">#f9f9f9</span>;
  }
  
  Button<span style="color:#96154f;">[PUSH]:hover</span>, Button<span style="color:#96154f;">[TOGGLE]:hover</span> {
    <span style="color:blue;">background-color</span>: <span style="color:#568c28;">white</span>;
  }
          </pre>
          </p>
          <p>The support for the new syntax is just the first step towards a more
            flexible theming.
            Internally, the theming engine is still based on the old properties.
            As an effect, only a subset of the flexibility provided by CSS is
            already supported.
            For more information on the topic, have a look at the RAP Help.
          </p>
          <p>Developers are encouraged to write CSS theme files now.
            The old property-based theme files are still supported but considered
            deprecated.
          </p>
        <td/>
	  </tr>
	  
	</table>
	
    <hr />

    <a name="Workbench"></a>
    <h2>Workbench</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b></b></td>
        <td width="80%">
        <td/>
      </tr>
    </table>

	<hr />

    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
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
