<?php   
include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, w4t, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.1 M4 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that will be available in the 
      milestone build M4 (May 6, 2008) which is now available for 
      <a href="http://www.eclipse.org/rap/downloads/">download</a>.
    </p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=RAP&target_milestone=1.1+M4&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>
    <p><ul>
      <li><a href="#General">General</a></li>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#Workbench">Workbench</a></li>
      <li><a href="#Tooling">Tooling</a></li>
    </ul></p>

    <hr />

    <a name="General"></a>
    <h2>General</h2>
    <table>

      <tr valign="top" align="left">
        <td width="20%">
          <b>CVS Reorganization</b>
        </td>
        <td width="80%">
            Since the number of RAP projects has increased in the past,
            we decided to reorganize the structure of our source code repository
            to make it more concise.
            Thus we started to introduce different subfolders.
            Besides the <code>sandbox</code> there's now a new folder called
            <code>runtime</code> which contains the projects
            <code>jface</code>,
            <code>jface.databinding</code>,
            <code>ui</code>,
            <code>forms</code>,
            <code>views</code>, and
            <code>workbench</code>
            which has been adopted to the Eclipse 3.4 code page.
            If you work against CVS, you have to replace the old versions of
            these projects with those from the runtime folder.
          <p>
            The CVS reorganization is an ongoing effort and is scheduled to be
            finished with the RAP 1.1 release.
            If you want to stay tuned, you can set yourself CC to
            <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=201257">bug #201257</a>.
            The updated team project set provided
            <a href="/rap/source/">here</a> contains all
            projects you need for RAP development.
          </p>
        <td/>
      </tr>
    </table>

    <hr />
    
    <a name="RWT"></a>
    <h2>RWT</h2>
    <table>

      <tr valign="top" align="left">
        <td width="20%">
          <b>RWT Split-up</b>
        </td>
        <td width="80%">
            RWT has been split into a host bundle and qooxdoo 0.7 fragment.
            This was done to enable us to start working on the upcoming
            qooxdoo 0.8 version.
            This split-up will also allow interested parties to develop other
            client-side implementations for RAP in the future.
          </p>
            Developers who work against CVS have to check out the fragment
            <code>org.eclipse.rap.rwt.q07</code> and include it in their launch
            configurations.
          </p>
          <p><strong>Note</strong>: Customize your build process so that
            the <code>org.eclipse.rap.rwt.q07</code> fragment is included.
            Ensure also that it's listed under the <code>osgi.bundles</code>
            property in your config.ini but doesn't get started.
          </p>
          <p />
        <td/>
      </tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Theming</b></td>
        <td width="80%">
          <b>Support for theme files in CSS format</b>
          <br />
          RAP supports theme files in CSS syntax now. CSS theme files for 
          RAP must be valid
          <a href="http://www.w3.org/TR/CSS21/">CSS 2.1</a> files, except for
          a couple of RAP specific properties and pseudo classes.
          <p>The following is an example for a simple CSS theme file:
          <pre>
  * {
    <span style="color:blue;">backgound-color</span>: <span style="color:#568c28;">white</span>;
  }
  
  Button<span style="color:#96154f;">[PUSH]</span>, Button<span style="color:#96154f;">[TOGGLE]</span> {
    <span style="color:blue;">border</span>: <span style="color:#568c28;">2px solid blue</span>;
    <span style="color:blue;">color</span>: <span style="color:#568c28;">rgb( 17, 23, 103 )</span>;
    <span style="color:blue;">background-color</span>: <span style="color:#568c28;">#f9f9f9</span>;
  }
  
  Button<span style="color:#96154f;">[PUSH]:hover</span>, Button<span style="color:#96154f;">[TOGGLE]:hover</span> {
    <span style="color:blue;">background-color</span>: <span style="color:#568c28;">white</span>;
  }
          </pre>
          </p>
          <p>The support for the new syntax is just the first step towards a more
            flexible theming.
            Internally, the theming engine is still based on the old properties.
            As an effect, only a subset of the flexibility provided by CSS is
            already supported.
            For more information on the topic, have a look at the RAP Help.
          </p>
          <p>Developers are encouraged to write CSS theme files now.
            The old property-based theme files are still supported but considered
            deprecated.
          </p>
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
              <img src="images/presentation.png" />
              <p />
            </li>
            <li><strong>Preference Pages</strong>
              <p>Support for preference pages is now available.
              Note that in order to keep preference settings session scoped,
              you need to initialize the PreferenceStore of the page with
              a suitable PreferenceStore.
              <code>AbstractUIPlugin#getPreferenceStore()</code> returns
              such an implementation.</p>
              <img src="images/prefPage.png" />
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
      <li><a href="news_M3.php">New for RAP 1.1 M3 (April 7, 2008)</a></li>
      <li><a href="news_M2.php">New for RAP 1.1 M2 (February 20, 2008)</a></li>
      <li><a href="news_M1.php">New for RAP 1.1 M1 (January 7, 2008)</a></li>
    </ul>
    
    <p>&nbsp;</p>

</div>
</div>

EOHTML;

$navPosition = array( "download", "noteworthy" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );

?>
