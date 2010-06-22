<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, w4t, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.1 New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things available in 
      RAP 1.1 (June 25, 2008) which is now available for 
      <a href="http://www.eclipse.org/rap/downloads/archive.php">download</a>.
    </p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc=;bug_file_loc_type=allwordssubstr;bug_id=;bug_status=RESOLVED;bug_status=VERIFIED;bug_status=CLOSED;bugidtype=include;chfieldfrom=;chfieldto=Now;chfieldvalue=;classification=Technology;email1=;email2=;emailtype1=substring;emailtype2=substring;field-1-0-0=classification;field-1-1-0=product;field-1-2-0=target_milestone;field-1-3-0=bug_status;field0-0-0=noop;keywords=;keywords_type=allwords;long_desc=;long_desc_type=allwordssubstr;product=RAP;query_format=advanced;remaction=;short_desc=;short_desc_type=allwordssubstr;status_whiteboard=;status_whiteboard_type=allwordssubstr;target_milestone=1.1%20M1;target_milestone=1.1%20M2;target_milestone=1.1%20M3;target_milestone=1.1%20M4;target_milestone=1.1%20RC1;target_milestone=1.1%20RC2;target_milestone=1.1%20RC3;target_milestone=1.1%20RC4;target_milestone=1.1;type-1-0-0=anyexact;type-1-1-0=anyexact;type-1-2-0=anyexact;type-1-3-0=anyexact;type0-0-0=noop;value-1-0-0=Technology;value-1-1-0=RAP;value-1-2-0=1.1%20M1%2C1.1%20M2%2C1.1%20M3%2C1.1%20M4%2C1.1%20RC1%2C1.1%20RC2%2C1.1%20RC3%2C1.1%20RC4%2C1.1;value-1-3-0=RESOLVED%2CVERIFIED%2CCLOSED;value0-0-0=;votes=;query_based_on=">
      This list</a> shows all bugs that were fixed. 
    </p>
    <p><ul>
      <li><a href="#General">General</a></li>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#Workbench">JFace and Workbench</a></li>
      <li><a href="#Tooling">Tooling</a></li>
    </ul></p>

    <!-- horizontal space between entries -->
    <tr><td>&nbsp</td><td>&nbsp</td></tr>

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
          <p>
            Besides the <code>sandbox</code> there's now a new folder called
            <code>runtime</code> which contains the projects
            <ul>
              <li><code>org.eclipse.rap.jface</code>,</li>
              <li><code>org.eclipse.rap.jface.databinding</code>,</li>
              <li><code>org.eclipse.rap.ui</code>,</li>
              <li><code>org.eclipse.rap.ui.forms</code>,</li>
              <li><code>org.eclipse.rap.ui.views</code>, and</li>
              <li><code>org.eclipse.rap.ui.workbench</code></li>
            </ul>
            which have been adopted to the Eclipse 3.4 code base.
            If you work against CVS, you have to replace the old versions of
            these projects with those from the runtime folder.
          </p>
          <p>
            The CVS reorganization is an ongoing effort and is scheduled to be
            finished shortly after the RAP 1.1 release.
            If you want to stay tuned, you can set yourself CC to
            <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=201257">bug #201257</a>.
          </p>
          <p>
            The team project sets provided 
            <a href="/rap/source/">here</a> are in sync
            with the current CVS structure.
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
          <b>Support for Custom Widget Id's</b></td>
        <td width="80%">
          In RWT, each widget has an automatically generated, unique <em>widget 
          id</em> that associates the server-side object with its client-side 
          representation.
          <br />
          In order to use automated UI tests, now the generated id can be 
          overridden programmatically. With code like this:
          <pre>
  Button button = new ...
  button.setData( WidgetUtil.CUSTOM_WIDGET_ID,
                  "org.sample.LoginDialog#okButton" );
          </pre>
          and the system property <code>org.eclipse.rwt.enableUITests</code> turned
          on, the button can always be identified by its custom id. The test 
          scenario can remain unchanged even if the UI changes.  
          <br />
          <br />
          See <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=204859">this
          bug</a> and the JavaDoc for <code>WidgetUtil#CUSTOM_WIDGET_ID</code> and
          <code>WidgetUtil#ENABLE_UI_TESTS</code> for further information.
        <td/>
      </tr>

	  <!-- horizontal space between entries -->
	  <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
         <b>Browser#execute()</b></td>
         <td width="80%">
          The <code>org.eclipse.swt.browser.Browser#execute(String)</code> method 
          was implemented. This method allows to execute a script containing 
          JavaScript commands.
          <br />
          <img style="margin:5px" src="images/browser-exec.jpeg" />
          <br />
          Please read the <a href="http://help.eclipse.org/ganymede/index.jsp?topic=/org.eclipse.rap.help/help/html/reference/api/org/eclipse/swt/browser/Browser.html#execute(java.lang.String)">JavaDoc</a>
          for further details.
        <td/>
      </tr>
	
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Display#readAndDispatch()</b></td>
        <td width="80%">
          To more closely align with SWT and solve the problems with the
          existing mechanism for blocking UI operations, RWT new provides
          <code>Display#readAndDispatch()</code> and <code>Display#sleep()</code>.
          <p>The new implementation now strictly follows the apartment threading 
            model. This means that the life cycle is handled by a single thread, 
            spanning the lifetime of a session. As a result, all phase listeners 
            and application code are executed on this thread.
            Note, that the readAndDispatch() loop runs in the process action phase,
            however this is generally transparent to the application developer.</p>   
          <p>Please be aware that this comes at the cost of a small API break.
            The <code>IEntryPoint#createUI</code> method changed its signature 
            from <code>Display create()</code> to <code>int createUI</code>.
            A typical entry point that creates a workbench would now look like 
            this:
          <pre><code>
  public class MyApplication implements IEntryPoint {
    public int createUI() {
      Display display = PlatformUI.createDisplay();
      WorkbenchAdvisor advisor = new MyWorkbenchAdvisor();
      return PlatformUI.createAndRunWorkbench( display, advisor )
    }
  }
          </pre></code>
          </p>
          <p>If you are using RWT directly, you also need to code the typical
          event loop in your entry point:
          <pre><code>
  public class MyEntryPoint implements IEntryPoint {
    public int createUI() {
      Display display = new Display();
      Shell shell = new Shell( display );
      shell.setSize( 560, 420 );
      // ... populate shell here ...
      shell.layout();
      shell.open();
      while( !shell.isDisposed() ) {
        if( !display.readAndDispatch() ) {
          display.sleep();
        }
      }
      return 0;
    }
  }
          </pre></code>
          </p>
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Table keyboard navigation</b></td>
        <td width="80%">
          The table widget now supports keyboard navigation. Using the
          <code>Up</code>, <code>Down</code>, <code>Home</code>,
          <code>End</code>, <code>PageUp</code> and <code>PageDown</code> 
          keys works as expected.
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>UI Styling API</b></td>
        <td width="80%">
          <b>Support for background images</b>
            <br />
            The methods <code>Control#get/setBackgroundImage()</code> allow to 
            set background images on almost all controls.
            <br />
            <img src="images/ShellBgImage.png" />
          <p><b>Support for transparency</b>
            <br />
            The methods <code>Composite#get/setBackgroundMode()</code> are now 
            available. Setting the background mode of a control to 
            <code>SWT.INHERIT_DEFAULT</code> lets all labels, links, checkboxes
            etc. on this composite inherit its background color and image.
            <br />
            <img src="images/BackgroundMode.png" />
            </p>
          <p><b>Semi-transparent Shells</b>
            <br />
            Thanks to the SWT 3.4 method <code>get/setAlpha()</code>, Shells 
            can now be semi-transparent. This feature is also useful to place 
            a shading layer below a modal dialog window as seen on some Web 
            2.0 sites.
            <br />
            <img src="images/AlphaShell.png" />
            </p>
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Theming Variants</b></td>
        <td width="80%">
          It is now possible to define variants of widget types that can be 
          styled separately. As an example, an application that uses <code>PUSH</code> 
          buttons in a special side bar can define a variant "side-button" and 
          apply a different styling to these buttons. This styling only 
          applies to the buttons belonging to the variant and does not 
          affect any other PUSH buttons in the application.
          <p>The variant is set using the widget user data 
            (<code>Widget#setData()</code>), so the code remains 100% SWT 
            compatible.
            <br />
            <img src="images/ButtonVariant.png" />
          </p>      
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>ISettingStore</b></td>
        <td width="80%">
            There is a new subsystem in RWT that allows to persist user-specific
            settings:
            <p><code>RWT.getSettingStore().setAttribute( "myAttribute", "myValue" );</code>.</p>
            The setting store allows to restore settings made in a previous
            session:
            <p><code>RWT.getSettingStore().getAttribute( "myAttribute" );</code>.</p>
            The setting store uses browser cookies to identify the settings of 
            previous sessions.
            <br>
            It is also possible to load specific settings 
            independently from cookies:
            <p><code>RWT.getSettingStore().loadById( "myId" )</code>.</p>
            This is for example useful in case that certain settings should only
            be available after the user has gone through an authentication
            process.
            <br>
            Note that the setting store subsystem is used by the new
            <code>ScopedPreferenceStore</code> implementation of the workbench.
            <p>See API documentation for more information.</p>
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Mouse Events</b></td>
        <td width="80%">
          RWT now has support for <code>MouseEvent</code>s. Calling 
          <code>addMouseListener</code> on a Control will notify you about
          <code>mouseUp</code>, <code>mouseDown</code> and
          <code>mouseDoubleClick</code> events.
          <p>Please be aware that, despite the complete API, there are still some 
          limitations that will be addressed in the future.</p>
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

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

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

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
    <h2>JFace and Workbench</h2>
    <table>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Image Decorator Support</b></td>
        <td width="80%">
          <img src="images/image-decorator.gif"/>
          <p>JFace now contains class <code>org.eclipse.jface.viewers.DecorationOverlayIcon</code>
            that supports the creation of image overlays for decoration
            (<code>org.eclipse.jface.resource.CompositeImageDescriptor</code> 
            is now fully functional).</p>
          <p>The workbench now provides the extension point 
            <code>org.eclipse.ui.decorators</code> which allows to add 
            decorations declaratively based on enablements.
            <br />
            Example:
            <br />
            <img src="images/decorator-extension.gif" /></p>  
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Support for activities</b></td>
        <td width="80%">
          The RAP Workbench now supports the <code>org.eclipse.ui.activities</code> 
          and <code>org.eclipse.ui.activitySupport</code> extension points. You 
          can control the visibility of views, editors, perspectives, menu and 
          toolbar items using activities and trigger points. See the extension 
          point documentation for details.
          <p><img src="images/activities.png" /></p>        
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>RAP HttpContext</b></td>
        <td width="80%">
          The RAP servlet now uses its own HttpContext implementation. This
          allows other servlets to map to that context too. This enables the
          possibility to share the same session instances between those
          servlets and the RAP servlet for data exchange. 
          <p><img src="images/httpcontext.png" /></p>        
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>ScopedPreferenceStore</b></td>
        <td width="80%">
          The RAP workbench provides now 
          <code>org.eclipse.ui.preferences.ScopedPreferenceStore</code> that
          allows to read and set user-specific preferences using the 
          preference mechanism provided by <code>org.eclipse.core.runtime</code>.
          The base of the storage mechanism is a subsystem of RWT represented
          by <code>org.eclipse.rwt.service.ISettingStore</code>.
          The session aware
          <code>org.eclipse.jface.preference.IPreferenceStore</code> can be
          retrieved using the method
          <code>org.eclipse.ui.plugin.AbstractUIPlugin.getPreferenceStore</code>.
          <p>See API documentation for more information.</p>
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Import-/Export Wizards</b></td>
        <td width="80%">
          RAP supports now Import- and Exportwizards by providing
          the extension points <code>importWizards</code> and
          <code>exportWizards</code>. See also <code>ActionFactory.IMPORT</code>
          and <code>ActionFactory.EXPORT</code> for opening the import-/export
          wizard. 
          <p><img src="images/import_wizard.png" /></p>        
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

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
          <code>org.eclipse.rap.junit</code>. This allows to use the 
          <code>RAPTestCase</code> that provides UI-Updates during the tests. 
          If you don't want to see UI-updates during the test runs, you can 
          directly use <code>org.junit.TestCase</code> instead.</p>
          <p>In order to run a test, choose <strong>Run As</strong> &gt; 
          <strong>RAP JUnit Test</strong> from the editors' context menu.
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

</div>
</div>

EOHTML;

# Generate the web page
generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
