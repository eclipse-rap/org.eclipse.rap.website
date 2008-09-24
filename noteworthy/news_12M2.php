<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.2 M2 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that will be available in the 
      milestone build M2 (October 8, 2008).
      Meanwhile from all features listed here can be obtained from
      <a href="http://www.eclipse.org/rap/cvs.php">CVS HEAD</a>
      <!--
       which is now available for 
      <a href="http://www.eclipse.org/rap/downloads">download</a>.
      -->
    </p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=RAP&target_milestone=1.2+M2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
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
            The new implementation of Javascript compression is now avaiable. It 
            is enabled by default, when you use the "Standard" client-side 
            library variant.
          <p>
            <img src="RuntimeConfig.png" />
          </p>
            To disable Javascript compression switch to the "Debug" library variant,
            which sets the system property <code>org.eclipse.rwt.clientLibraryVariant</code> 
            to <code>DEBUG</code> for the VM that is being launched.
          <p>
            The total size of the index.html was reduced from 1.069 MB to 862 kB, 
            which is more than 200 kB reduction or 20%.</p>
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
            you should use a code like this:
            <br/><br/>
            <code>Cursor cursor = Graphics.getCursor( SWT.HAND );<br/>
              control.setCursor( cursor );</code>
          <p>
            <img src="RAPCustomCursor.png" />
          </p>
            As with all resources in RWT, the <code>Cursor</code> instances are 
            shared among sessions. That's why, there is no <code>Cursor#dispose()</code>
            method available.
          <p />
        <td/>
      </tr>
      
    </table>
    
    <hr />

    <a name="Workbench"></a>
    <h2>Workbench</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Eclipse 3.4 Adoption</b></td>
        <td width="80%">
          The RAP counterparts of JFace, Workbench, Forms and Databinding
          have been migrated to the 3.4 code base.
          <p>During this effort, we tried to achieve feature completeness as
          far as possible to get a clear picture of what is needed to enable
          single sourcing of the RAP and RCP Workbench in the future.</p>
          <p>Here are some of the more noteworthy things that are now available:
          </p>
          <ul>
            <li><strong>Presentation</strong>
              <p>The workbench demo comes with a presentation sketch that makes use
              of the newly adopted presentation support.
              Launch the demo and use <strong>Window</strong> >
              <strong>Preferences</strong> > <strong>Demo Prefernce Page</strong>
              to switch between the available presentations. After that, you need
              to reload the browser page in order to see the changes.</p>
              <img src="presentation.png" />
              <p />
            </li>
            <li><strong>Preference Pages</strong>
              <p>Support for preference pages is now available.
              Note that in order to keep preference settings session scoped,
              you need to initialize the PreferenceStore of the page with
              a suitable PreferenceStore.
              <code>AbstractUIPlugin#getPreferenceStore()</code> returns
              such an implementation.</p>
              <img src="prefPage.png" />
              <p />
            </li>
            <li><strong>IMemento for workbench state persistence</strong>
              <p>The save and restore mechanism must be activated like shown
              in the snippet below.
            <pre>
public class DemoWorkbenchAdvisor extends WorkbenchAdvisor {

  public void initialize( IWorkbenchConfigurer configurer ) {
    getWorkbenchConfigurer().setSaveAndRestore( true );
    super.initialize( configurer );
  }

[...]
            </pre>
            </li>
          </ul>
          </p>
          <p><strong>Please note</strong> due to the complexity of this transition
            there may still exist some problems, in particular with the newly
            introduced functionality. Within the upcoming
            <a href="http://wiki.eclipse.org/RAP/Ramp_down_Ganymede">RC development cycles</a>
            we will focus on bug fixes.
            Please feel encouraged to try out the current milestone and provide
            us with feedback.
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
          <b>RAP JUnit</b></td>
        <td width="80%">
          RAP provides an equivalent to the "PDE JUnit Tests" to allow to run
          tests that require an OSGi environment up and running.
          <p>The snippet below shows how a RAP JUnit test case looks like.
          To compile such a test, the containing plug-in needs a dependency on
          <code>org.eclipse.rap.junit</code>. This allows to use the RAPTestCase
          that provides UI-Updates during the tests. If you don't want to
          see UI-updates during the test runs, you can directly use org.junit.TestCase
          instead.
          In order to run a test, choose <strong>Run As</strong> > <strong>RAP JUnit Test</strong>
          from the editors' context menu.
          <pre>
public class RapJUnitTest extends RAPTestCase {
  public void testOpenView() {
    try {
      IWorkbenchPage page = getPage();
      page.showView( "org.eclipse.rap.demo.DemoTreeViewPartI" );
    } catch( PartInitException e ) {
      e.printStackTrace();
    }
    assertEquals( 1, getPage().getViewReferences().length );

    getPage().hideView( getPage().getViewReferences()[ 0 ] );
    assertEquals( 0, getPage().getViewReferences().length );
  }

  private IWorkbenchPage getPage() {
    IWorkbench workbench = PlatformUI.getWorkbench();
    IWorkbenchWindow window = workbench.getActiveWorkbenchWindow();
    return window.getActivePage();
  }
}
          </pre>
          </p>
          <p>RAP JUnit supports only the 3.x Test Runner at the moment.</p>
        <td/>
      </tr>
    </table>

    <hr />

    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_11M3.php">New for RAP 1.1 M3 (April 7, 2008)</a></li>
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
