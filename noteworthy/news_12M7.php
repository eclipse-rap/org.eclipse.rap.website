<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.2 M7 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that will be available in the
      milestone build M7 (May 11<sup>th</sup>, 2009).
      Meanwhile, all features listed here can be obtained from
      <a href="http://www.eclipse.org/rap/cvs.php">CVS HEAD</a>
    </p>
    <!--
    <p>Here are some of the more noteworthy things that are available in this
      milestone build which is now available for
      <a href="http://www.eclipse.org/rap/downloads">download</a>.
    </p>
    -->
    
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.2+M7&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>

    <p><ul>
      <li><a href="#RWT">RWT</a></li>
<!--
      <li><a href="#Forms">Forms</a></li>
      <li><a href="#Workbench">Workbench</a></li>
-->
    </ul></p>

    <a name="RWT"></a>
    <h2>RWT</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Table improvements</b></td>
        <td width="80%">
          The Table widget has received a lot of bugfixes and improvements
          during this milestone.
          Fonts, backgrounds and foreground colors are now supported properly
          for the entire table, for table items and also for single cells.
          Unnessesary scroll bars are not drawn anymore.
          Together with alternating row colors and cell padding, which had
          already been added in M6, the table fits much better into modern
          web applications.
          Moreover, we added some significant performance improvements.
          <p><img src="TableImprovements.png" /></p>
        <td/>
      </tr>
    </table>

<!--
    <p>&nbsp;</p>

    <a name="Workbench"></a>
    <h2>Workbench</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>[ title dummy ]</b></td>
        <td width="80%">
          [ content dummy ]
        <td/>
      </tr>
    </table>
-->
      
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_12M6.php">New for RAP 1.2 M6 (March 23, 2009)</a></li>
      <li><a href="news_12M5.php">New for RAP 1.2 M5 (February 16, 2009)</a></li>
      <li><a href="news_12M4.php">New for RAP 1.2 M4 (January 12, 2009)</a></li>
      <li><a href="news_12M3.php">New for RAP 1.2 M3 (November 19, 2008)</a></li>
      <li><a href="news_12M2.php">New for RAP 1.2 M2 (October 8, 2008)</a></li>
    </ul>
    
    <p>&nbsp;</p>

</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
