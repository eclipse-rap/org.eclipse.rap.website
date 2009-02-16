<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.2 M6 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that will be available in the
      milestone build M6 (March 23<sup>rd</sup>, 2009).
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
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.2+M6&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>

    <p><ul>
      <!-- <li><a href="#Common">Common</a></li> -->
      <li><a href="#RWT">RWT</a></li>
    </ul></p>
        
    <p>&nbsp;</p>
    <hr />

    <a name="RWT"></a>
    <h2>RWT</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>New API added</b></td>
        <td width="80%">
          During this milestone we concentrated on supporting new APIs. This will
          make it easier for the community to reuse existing code or to utilize
          new features.
          Here is a list of APIs added during this milestone:
          <br />
          <ul>
            <li>CTabFolder#getItem( Point )</li>
            <li>DateTime#setDate( int, int, int )</li>
            <li>DateTimesetDate( int, int, int )</li>
            <li>Display#getData()</li>
            <li>Display#getData( String )</li>
            <li>Display#setData( Object )</li>
            <li>Display#setData( String, Object )</li>
            <li>RowLayout.center</li>
            <li>SashForm#getSashWidth()</li>
            <li>SashForm#setMaximizedControl( Control )</li>
            <li>SashForm#setSashWidth( int )</li>
            <li>Spinner#addSelectionListener( SelectionListener )</li>
            <li>Spinner#removeSelectionListener( SelectionListener )</li>
            <li>TabItem#setToolTipText( String )</li>
            <li>ToolItem#setDisabledImage( Image )</li>
            <li>TypedEvent.display</li>
          </ul>
          <p>&nbsp;</p>
        <td/>
      </tr>
    </table>
      
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
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
