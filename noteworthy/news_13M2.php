<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.3 M2 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that are available in the 
      milestone build M2 (October 8, 2009)
      Meanwhile, all features listed here can be obtained from the
      <a href="http://www.eclipse.org/rap/cvs.php">source code repository</a>
      <!--
      which is now available for 
      <a href="http://www.eclipse.org/rap/downloads">download</a>.
      -->
    </p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.3+M2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>

    <p><ul>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#Workbench">JFace / Workbench</a></li>
      <li><a href="#Design">Look &amp; Feel</a></li>
    </ul></p>
    
    <p>&nbsp;</p>

    <a name="RWT"></a>
    <h2>RWT</h2>
    <table>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Infrastructure for client-side unit tests</b>
        </td>
        <td width="80%">
          The new Javascript-Testrunner enables developers to write client-side 
          tests for their custom-widgets using a JUnit-like syntax. The 
          TestRunner also includes tools to simulate client-server communication 
          and user-interactions. A simple test-case might look like this:
<pre><code>
qx.Class.define( "com.example.widgets.tests.CustomWidgetTest", {
  extend : qx.core.Object,
  members : {
    testText : function() {
      var widget = new com.example.widgets.CustomWidget();
      widget.setText( "Hello World!" );
      assertEquals( "Hello World!", widget.getText() );
    }
  }
} );
</code></pre>
          <p>If any assert fails, the TestRunner will inform the developer via 
            its very simple UI and freeze Qooxdoo to ease debugging.
            <br />
            The project is located in the <a href="../cvs.php">RAP CVS</a>
            under <code>runtime.rwt.test/org.eclipse.rap.rwt.q07.jstest</code>. 
          </p>   
        <td/>
      </tr>
      
      <tr valign="top" align="left">
        <td width="20%">
          <b>DateTime DROP_DOWN</b>
        </td>
        <td width="80%">
          The DateTime widget now supports the <code>SWT.DROP_DOWN</code> style.
<pre><code>
DateTime dateTime = new DateTime( parent, SWT.DATE | SWT.DROP_DOWN );
</code></pre>
          <p><img src="RAPDateTimeDropDown.png" style="margin-top:10px" /></p>
          <p>The appearance of the drop-down button can be changed with CSS in 
            the same way like in Combo.</p>
        <td/>
      </tr> 
      
      <tr valign="top" align="left">
        <td width="20%">
          <b>Compression Turned Off by Default</b>
        </td>
        <td width="80%">
          Until now, responses sent by RAP were compressed using gzip. When 
          running on Tomcat, this could lead to character garbage being delivered 
          to the browser (see 
          <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=259977">bug 
          259977</a>).
          <br />
          Therefore we decided to turn off compression in RAP by default 
          (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=285669">bug 
          285669</a>).
          Beside the issue in Tomcat, compression is a task that should rather 
          be done by the servlet container to give administrators better control 
          over the setup.
          <br />
          Compression can be turned on by specifying the VM argument 
          <code>org.eclipse.rwt.compression=true</code>. This is the default
          setting for newly created launch configurations.
        <td/>
      </tr> 
      
    </table>
    
    <p>&nbsp;</p>

    <a name="Workbench"></a>
    <h2>JFace / Workbench</h2>
    <table>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Layout Override Mechanism</b>
        </td>
        <td width="80%">
          To customize an existing RAP design was not possible without touching 
          the providing bundle. Therefore we introduce a new mechanism to make it 
          much easier for adding or replacing own contributions to a design.<br/>          
          The mechanism makes it possible to replace existing LayoutSets. 
          Therefore LayoutSet elements from the 
          <code>org.eclipse.rap.ui.layouts</code> extension point got a new 
          optional attribute called overridesId. To override a single LayoutSet 
          a developer has to create a new extension of 
          <code>org.eclipse.rap.ui.layouts</code> and give it the same id as the 
          Layout which contains the LayoutSet to override. After this he just 
          has to declare a new LayoutSet element and set the overridesId to the 
          original one. <br/>
          <img src="LayoutSetOverridding.png" alt="Overriding LayoutSets"
          	title="Screenshot taken from org.eclipse.rap.examples"/>
          <br/>
          It's important to use the same identifiers for images, fonts, colors 
          and positions within the <code>ILayoutSetInitializer</code>.                
          <p>&nbsp;</p> 
        <td/>
      </tr>
      
      <tr valign="top" align="left">
        <td width="20%">
          <b>Tooltips for TableViewer</b>
        </td>
        <td width="80%">
          The <code>TableViewer</code> can now display tooltips for its content.
          It can be activated by calling 
          <code>ColumnViewerToolTipSupport#enableFor()</code>. 
          Afterwards you need to override 
          <code>CellLabelProvider#getToolTipText(Object)</code> and have it 
          return the respective tooltip text. Other tooltip-related methods
          (<code>getToolTipBackgroundColor</code>, etc.) are not supported.   
          <br />
          <img src="TableViewerToolTip.jpeg" />
        <td/>
      </tr>
      
    </table>
    
    <p>&nbsp;</p>

    <a name="Design"></a>
    <h2>Look &amp; Feel</h2>
    <table>

      <tr valign="top" align="left">
        <td width="20%">
          <b>New Configuration Dialog</b>
        </td>
        <td width="80%">
          To provide a more consistent design we replaced the configuration 
          dialog of the Business design with a more lightweight implementation.
          Additionally we added an effect called 
          <a href="http://en.wikipedia.org/wiki/Lightbox_(JavaScript)">Lightbox</a>
          which occurs when the dialog is open. To improve the usability of
          the design we also have disabled the configuration button if a view
          has no actions or viewmenu.          
          <img src="ConfigurationDialog.png" alt="ConfigurationDialog" 
          title="New RAP Business design configuration dialog"/>      
        <td/>
      </tr>

      
    </table>
    
    <p>&nbsp;</p>
    
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_13M2.php">New for RAP 1.3 M1 (August 21<sup>st</sup> 2009)</a></li>
    </ul>
    
    <p>&nbsp;</p>

</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
