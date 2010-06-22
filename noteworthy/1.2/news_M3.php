<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.2 M3 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that are available in the
      milestone build M3 (November 19, 2008),
      <!--
      Meanwhile, all features listed here can be obtained from
      <a href="/rap/source/">CVS HEAD</a>
      -->
      which is now available for 
      <a href="http://www.eclipse.org/rap/downloads/">download</a>.
    </p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.2+M3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>
    
    <p><ul>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#JFace">JFace</a></li>
      <li><a href="#Tooling">Tooling</a></li>
    </ul></p>

    <hr />

    <a name="RWT"></a>
    <h2>RWT</h2>
    <table>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Generic CSS Theming Engine</b></td>
        <td width="80%">
          With a new, entirely CSS-based theming infrastructure, RWT can now
          render styles defined in CSS theme files directly.
          CSS themes are no longer translated to properties internally and are
          thus fully supported now.
          As an example, for widgets that support the <code>:hover</code> state,
          it is now possible to change <em>any</em> property on mouseover,
          which has not been possible before:
          <pre><code style="color: #0000ff">
  Button[PUSH]:hover {
    font: bold 12px Helvetica;
    color: white;
    background-color: #1695d4;
    border: 2px solid #9dd0ea;
  }
          </code</pre>
          This change is an important foundation for the further improvement
          of the themeability of RWT widgets.
          Theming based on property files is still supported in this milestone,
          but it will be discontinued in M4.
        <td/>
      </tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Improvement of Session Startup Performance</b>
        </td>
        <td width="80%">
            The current version provides improvements regarding the session
            startup performance. First the creating of the startup page is less
            CPU intensive. Second the javascript library content is not embbeded
            in the startup page anymore. It is delivered separately. As the
            library content doesn't change after server start it can be zipped
            once and buffered. This reduces CPU usage significantly. The library
            is stored in the browser's cache and need not to be reloaded on
            subsequent application visits.
        <td/>
      </tr>
    </table>

    <hr />

    <a name="JFace"></a>
    <h2>JFace</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Cell Editors</b>
        </td>
        <td width="80%">
          With the implementation of JFace cell editors, including all the
          necessary event handling, RAP can now offer editing support for JFace
          viewers.
          There's still one tough issue remaining, that relates to the way the
          Firefox browser handles key events.
          However, the API is available and cell editors are basically working.
          <p>
            <img src="images/RAPTableCellEditor.png" />
          </p>
        <td/>
      </tr>
    </table>

    <hr />

    <a name="Tooling"></a>
    <h2>Tooling</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Launch without opening browser</b>
        </td>
        <td width="80%">
          The RAP launcher now allows to disable the startup of a browser on
          every launch. This comes in handy when working with fixed ports and
          an external browser.
          <p>
            <img src="images/RAPLauncherOpenBrowser.png" />
          </p>
        <td/>
      </tr>
    </table>
    
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_M2.php">New for RAP 1.2 M2 (October 8, 2008)</a></li>
    </ul>
    
    <p>&nbsp;</p>

</div>
</div>

EOHTML;

# Generate the web page
generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
