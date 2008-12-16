<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.2 M4 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that are available in the
      milestone build M3 (January 12, 2009).
      Meanwhile, all features listed here can be obtained from
      <a href="http://www.eclipse.org/rap/cvs.php">CVS HEAD</a>
      <!--
      which is now available for 
      <a href="http://www.eclipse.org/rap/downloads">download</a>.
      -->
    </p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.2+M4&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>

<!--    
    <p><ul>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#JFace">JFace</a></li>
      <li><a href="#Tooling">Tooling</a></li>
    </ul></p>

    <hr />
-->

    <a name="RWT"></a>
    <h2>RWT</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Slider widget</b></td>
        <td width="80%">
          Now there exists a Scale widget that works much the same as in SWT.
          A Slider represents a range of selectable continues values. The range 
          can be specified by the Slider#setMinimum() and Slider#setMaximum() 
          methods of the Slider class. You can get the selection value by using 
          the Slider#getSelection() method.
          <p>
            <img src="RAPSlider.png" />
          </p>
        <td/>
      </tr>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Theming</b></td>
        <td width="80%">
          Since the new theming infrastructure is now in place, we worked on
          making more aspects of widgets themeable.
          The list below details out which aspects can now be altered.
          <ul>
            <li>The background image of <code>Button</code>s can be altered</li>
            <li>This CSS code defines a <em>handle</em> for the <code>Sash</code>
              widget.
              <br />
<pre>
Sash-Handle:horizontal {
  <span style="color:blue;">background-image</span>: url( <span style="color:#568c28;">"/theme1/icons/sash/h_handle.gif"</span> );
}
Sash-Handle:vertical {  
  <span style="color:blue;">background-image</span>: url( <span style="color:#568c28;">"/theme1/icons/sash/v_handle.gif"</span> );
}</pre>         
            </li>
            <li>
              The border style as well as the appearance of the drop-down button of a 
              Combo widget can be changed like shown below.
              <br />
<pre>
Combo {
  <span style="color:blue;">border</span>: <span style="color:#568c28;">1px solid #1695d4</span>;
}

Combo-Button { 
  <span style="color:blue;">background-image</span>: url( <span style="color:#568c28;">"/theme1/icons/combo/down.gif"</span> );
  <span style="color:blue;">background-color</span>: <span style="color:#568c28;">#9dd0ea</span>;
}</pre>             
            </li>
            <li>
              The handle image of <code>Coolbar</code>s
            </li>
            <li>
              The various buttons of the <code>DateTime</code>, <code>ExpandBar</code>
              and <code>Spinner</code> widget.
            </li>
            <li>
              The border color of the <code>CTabFolder</code>.
            </li>
            <li>
              The radio, check box and cascade images of <code>Menu</code>s
            </li>
            <li>
              The check box images of the <code>Tree</code> and <code>Table</code> 
              widget.
            </li>
          </ul>
        <td/>
      </tr>
    </table>

    <hr />
        
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
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
