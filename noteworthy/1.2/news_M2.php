<?php 
include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.2 M2 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that are available in the 
      milestone build M2 (October 8, 2008)
      <!-- Meanwhile, all features listed here can be obtained from
      <a href="/rap/source/">CVS HEAD</a>
      -->
      which is now available for 
      <a href="http://www.eclipse.org/rap/downloads/">download</a>.
    </p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.2+M2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
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
          <b>JavaScript Compression</b>
        </td>
        <td width="80%">
            The new implementation of Javascript compression is now available. It 
            is enabled by default, when you use the "Standard" client-side 
            library variant.
          <p>
            <img src="images/RuntimeConfig.png" />
          </p>
            To disable Javascript compression switch to the "Debug" library variant,
            which sets the system property <code>org.eclipse.rwt.clientLibraryVariant</code> 
            to <code>DEBUG</code> for the VM that is being launched.
          <p>
            The total size of the index page was reduced by more than 20%.</p>
          <p>
            For more information please also read the comments on
            <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=247791">
            this bug</a>.</p>
          <p />
        <td/>
      </tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Cursor Support</b></td>
        <td width="80%">
          The <code>Control</code> cursor support is now available. It is fully 
          implemented in the following widgets:
	      <ul>
	        <li><code>Button</code></li>
	        <li><code>Label</code></li>
	        <li><code>CLabel</code></li>
	        <li><code>List</code></li>
	        <li><code>Composite</code></li>
	        <li><code>Canvas</code></li>
	        <li><code>Combo</code></li>
	        <li><code>Text</code></li>
	        <li><code>Spinner</code></li>
	        <li><code>Scale</code></li>
	      </ul>
	      <br />  
          To obtain an instance of <code>org.eclipse.swt.graphics.Cursor</code>, 
          you should use code like this:
          <br/><br/>
          <code>Cursor cursor = Graphics.getCursor( SWT.CURSOR_CROSS );
            <br/>
            control.setCursor( cursor );</code>
	      <br />  
          <img src="images/RAPCustomCursor.png" />
	      <br />  
          As with all resources in RWT, the <code>Cursor</code> instances are 
          shared among sessions. That's why, there is no <code>Cursor#dispose()</code>
          method available.
          <p />
        <td/>
      </tr>
      
      <tr valign="top" align="left">
        <td width="20%">
          <b>Scale Widget</b></td>
        <td width="80%">
          Now there exists a <code>Scale</code> widget that works much the 
          same as in SWT.
          <p>
            <img src="images/RAPScale.png" /></p>
          <p />
        <td/>
      </tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>DateTime Widget</b></td>
        <td width="80%">
          The long awaited <code>DateTime</code> widget is now available. Using
          the style flags <code>SWT.DATE</code>, <code>SWT.TIME</code>, 
          <code>SWT.CALENDAR</code> and <code>SWT.SHORT</code>, <code>SWT.MEDIUM</code>, 
          <code>SWT.LONG</code> you can switch the widget mode. Additionally 
          the <code>DateTime</code> widget goes by the locale from 
          <code>RWT#getLocale()</code> to display the day and month names in 
          your preferred language.
          <p>
            <img src="images/RAPDateTime.png" />
          </p>
          <p />
        <td/>
      </tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>ExpandBar Widget</b></td>
        <td width="80%">
          RWT provides an <code>ExpandBar</code> control. It can be used to 
          represent a category or group of elements.
          You may have a look at the <code>org.eclipse.rap.demo.controls.ExpandBarTab</code>
          class in the demo plug-in to see how to use it. 
          <p>
            <img src="images/RAPExpandBar.png" /></p>
          <p />
        <td/>
      </tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>MessageBox</b></td>
        <td width="80%">
	      With a standard SWT <code>MessageBox</code> you can display a message
	      dialog without using JFace.
	      <p>
	        <img src="images/RAPMessageBox.png" /></p>
	      The same style flag combinations like in SWT are available:
	      <ul>
	        <li><code>SWT.OK</code></li>
	        <li><code>SWT.OK | SWT.CANCEL</code></li>
	        <li><code>SWT.YES | SWT.NO</code></li>
	        <li><code>SWT.YES | SWT.NO | SWT.CANCEL</code></li>
	        <li><code>SWT.RETRY | SWT.CANCEL</code></li>
	        <li><code>SWT.ABORT | SWT.RETRY | SWT.IGNORE</code></li>
          </ul>  
          <p />
        <td/>
      </tr>
      
    </table>
    
    <hr />

<!--
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_M2.php">New for RAP 1.2 M2 (October 8, 2008)</a></li>
    </ul>
-->
    
    <p>&nbsp;</p>

</div>
</div>

EOHTML;

# Generate the web page
$navPosition = array( "documentation", "noteworthy" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );
?>
