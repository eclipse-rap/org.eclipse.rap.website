<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.3 M1 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that will be available in the
      milestone build M1 (August 07<sup>th</sup> 2009).
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
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.3+M1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>
    <!--
    <p><ul>
      <li><a href="#RWT">RWT</a></li>
    </ul></p>
    -->
    
    <hr />

    <a name="RWT"></a>
    <h2>RWT</h2>
    <table>

      <tr valign="top" align="left">
        <td width="20%">
          <b>CSS Gradients and Rounded Borders</b>
        </td>
        <td width="80%">
          <p>
            The RAP theming now supports gradients and rounded borders for many
            widgets.
            Both features are implemented using vector graphics (SVG/VML) on the
            client-side.
            Of course, this works with all browsers supported by RAP.
            <br/>
            <img style="margin: 10px 10px 0px;" src="GradientsAndRoundedBorders.png" />
          </p>
          <p>
            For gradients we followed the CSS syntax
            <a href="http://webkit.org/blog/175/introducing-css-gradients/">implemented by Safari</a>,
            as there is no official CSS syntax around.
            Beside a start color and an end color, you can also define any
            number of intermediate steps.
            Currently, only vertical linear gradients are supported.
          </p>
          <pre>
  background-image: gradient(
    linear, left top, left bottom,
    from( #ffffff ),
    color-stop( 48%, #f0f0f0 ),
    color-stop( 52%, #e0e0e0 ),
    to( #cccccc )
  );
          </pre>
          <p>
            For rounded borders, we followed the approach outlined in the
            <a href="http://www.w3.org/TR/css3-background/#the-border-radius">CSS Backgrounds and Borders Module</a>.
            You can set rounded borders using the <code>border-radius</code>
            property, even a different radius for every corner is possible.
          </p>
          <pre>
  border: 2px solid #005092;
  border-radius: 6px;
          </pre>
        <td/>
      </tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>New API added</b></td>
        <td width="80%">
          This will make it easier for the community to reuse existing code or
          to utilize new features.
          Here is a list of API methods added in this milestone:
          <br />
          <ul>
            <li><code>ActionFactory#RESET_PERSPECTIVE</code></li>
            <li><code>Combo#getSelection()</code></li>
            <li><code>Composite#setLayoutDeferred( boolean )</code></li>
            <li><code>CTabFolder#setUnselectedImageVisible( boolean )</code></li>
            <li><code>Display#getSystemCursor( int )</code></li>
            <li><code>List#getTopIndex</code> and List#setTopIndex</code></li>
            <li><code>List#showSelection()</code></li>
            <li><code>ProgressBar#setState()</code></li>
            <li><code>Spinner#getText()</code>,
              <code>Spinner#getTextLimit()</code> and
              <code>Spinner#setTextLimit( int )</code></li>
            <li><code>SWT.TOOL</code> style flag for <code>Shell</code></li>
            <li><code>ToolBar#getItem( Point )</code></li>
          </ul>
        <td/>
      </tr>
      
      <tr valign="top" align="left">
        <td width="20%">
          <b>Help Events</b>
        </td>
        <td width="80%">
          It is now possible to attach help listeners to controls and menus. 
          These events are generated when help is requested for a control or
          menu, typically when the user presses F1.
        <td/>
      </tr>

    </table>

    <hr />

<!--
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_13M1.php">New for RAP 1.3 M1</a></li>
    </ul>
-->
    
    <p>&nbsp;</p>

</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
