<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.3 M3 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that are available in the 
      milestone build M3 (November 13<sup>th</sup>, 2009)
      Meanwhile, all features listed here can be obtained from the
      <a href="http://www.eclipse.org/rap/cvs.php">source code repository</a>
      <!--
      which is now available for 
      <a href="http://www.eclipse.org/rap/downloads">download</a>.
      -->
    </p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.3+M3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>

<!--
    <p><ul>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#Workbench">JFace / Workbench</a></li>
      <li><a href="#Design">Look &amp; Feel</a></li>
    </ul></p>
    
    <p>&nbsp;</p>
-->

    <a name="RWT"></a>
    <h2>RWT</h2>
    <table>

      <tr valign="top" align="left">
        <td width="20%">
          <b>New API added</b></td>
        <td width="80%">
          Here is a list of API methods added in this milestone:
          <br />
          <ul>            
            <li><code>Display#addListener()</code> and 
              <code>Display#removeListener()</code> which allow to register for 
              <code>SWT.Close</code> and <code>SWT.Dispose</code> events.
              </li>
            <li><code>Display#disposeExec()</code></li>
            <li><code>Display#close()</code></li>
          </ul>
        <td/>
      </tr> 

      <tr valign="top" align="left">
        <td width="20%">
          <b>Non-shared SWT Resources</b></td>
        <td width="80%">
          Constructors for the following resources were implemented
          <ul>
          <li><code>Cursor</code></li>
          <li><code>Color</code></li>
          <li><code>Font</code></li>
          </ul>
          The factory methods (<code>Graphics#get*</code>) are still the 
          recommended way for dealing with resources in RWT. 
          If, single-sourcing is desired, and the extra memory is justifible, 
          using resource-constructors might be considered.
          <br />
          With this change, also <code>dispose()</code> and 
          <code>isDisposed()</code> were introduced. 
          Even though this method exists for all resources (shared and non-shared)
          it is considered an error to disposed of factory-created (shared) 
          resources and an <code>IllegalStateException</code> is thrown in this 
          case.
        <td/>
      </tr> 
      
    </table>
    
    <p>&nbsp;</p>
    
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_13M2.php">New for RAP 1.3 M2</a></li>
      <li><a href="news_13M1.php">New for RAP 1.3 M1</a></li>
    </ul>
    
    <p>&nbsp;</p>

</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
