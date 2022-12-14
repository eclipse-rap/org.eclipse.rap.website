<?php  								
include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$pageTitle 		= "RAP Project - New and Noteworthy";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.1 M2 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things available in the milestone
      build M2 (February 20, 2008) which is now available for 
      <a href="http://www.eclipse.org/rap/downloads/">download</a>. 
    </p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=RAP&target_milestone=1.1+M2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>
    <ul>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#RAP_JFace">JFace and Workbench</a></li>
    </ul>
	
	<a name="RWT"></a>
	<h2>RWT</h2>
	<table>
	  <tr valign="top" align="left">
	    <td width="20%">
	      <b>Display#readAndDispatch()</b></td>
	    <td width="80%">
	      <p>To more closely align with SWT and solve the problems with the
	      existing mechanism for blocking UI operations, RWT new provides
	      <code>Display#readAndDispatch()</code> and <code>Display#sleep()</code>.
          </p>
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
	</table>
	
	<hr />
	
	<a name="RAP_JFace"></a>
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
	</table>
	
	<hr />
	
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_M1.php">New for RAP 1.1 M1 (January 7, 2008)</a></li>
    </ul>
    
    <p>&nbsp;</p>
	
</div>
</div>

EOHTML;

$navPosition = array( "download", "noteworthy" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );

?>
