<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.2 M5 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that will be available in the
      milestone build M5 (February 16, 2009).
      Meanwhile, all features listed here can be obtained from
      <a href="http://www.eclipse.org/rap/cvs.php">CVS HEAD</a>
    <!--
    </p>
    <p>Here are some of the more noteworthy things that are available in this 
      milestone build which is now available for 
      <a href="http://www.eclipse.org/rap/downloads">download</a>.
    </p>
    -->
    
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.2+M5&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>

    <p><ul>
      <li><a href="#Common">Common</a></li>
      <li><a href="#RWT">RWT</a></li>
    </ul></p>
    
    <p>&nbsp;</p>
    <hr />

    <a name="Common"></a>
    <h2>Common</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>com.ibm.icu.base</b></td>
        <td width="80%">
          <a href="http://icu-project.org/">ICU4J</a> is a set of Java libraries 
          that provides comprehensive support for Unicode, software globalization,
          and internationalization. These libraries are packaged in the plug-in 
          com.ibm.icu (about 3MB in size)
          <p>Several plug-ins like Workbench, Forms, and JFace Databinding make
            use of these libraries and so do the respective RAP apdoptions.</p>
          <p>As of this milestone, RAP uses the
            <a href="http://wiki.eclipse.org/index.php/ICU4J#Replacement_Plug-in">
              Replacement Plug-in com.ibm.icu.base</a> 
            (about 100KB in size) in order to reduce the overall size of the 
            target platform by almost 3MB.</p>
          <p>
            Since all dependencies on ICU4J are expressed by <code>Import-Package</code>
            declarations, the replacement plug-in can be easily "re-replaced" 
            if necessary.
            </p>  
        <td/>
      </tr>
    </table>
    
    <p>&nbsp;</p>
    <hr />

    <a name="RWT"></a>
    <h2>RWT</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>ColorDialog</b></td>
        <td width="80%">
          SWT's ColorDialog has been implemented for RWT.
          <br />
<pre><code>
ColorDialog dialog = new ColorDialog( shell );
RGB result = dialog.open();
</code></pre>
          <img src="color-dialog.png"/>
        <td/>
      </tr>
    </table>
    
    <p>&nbsp;</p>
    <hr />

    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_12M4.php">New for RAP 1.2 M4 (January 12, 2008)</a></li>
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