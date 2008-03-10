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
      milestone build M3 (April 7, 2008). All features documented here can be 
      obtained from <a href="../cvs.php">CVS HEAD</a>.</p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=RAP&target_milestone=1.1+M3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>
    <!--
    <p><ul>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#RAP_JFace">JFace and Workbench</a></li>
    </ul></p>
    -->

    <!--
    
      Consider a section with a list of minor enhancements/fixes.
      Currently there are:
      - CENTER / RIGHT alignment for Text
      - Label returns correct preferred size for empty texts
      - Support for progress bar in wizards
        
    -->
	
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
	
    <a name="Workbench"></a>
    <h2>Workbench</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Support for activities</b></td>
        <td width="80%">
          The RAP Workbench now supports the <code>org.eclipse.ui.activities</code> 
          and <code>org.eclipse.ui.activitySupport</code> extension points. You 
          can control the visibility of views, editors, perspectives, menu and 
          toolbar items using activities and trigger points. See the extension 
          point documentation for details.
          <p><img src="activities.png" /></p>        
        <td/>
      </tr>
      
      <tr valign="top" align="left">
        <td width="20%">
          <b>RAP HttpContext</b></td>
        <td width="80%">
          The RAP servlet now uses its own HttpContext implementation. This
          enables other servlets to map to that context too. This enables the
          possibility to share the same session instances between those
          servlets and the RAP servlet for data exchange. 
          <p><img src="httpcontext.png" /></p>        
        <td/>
      </tr>
    </table>

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
