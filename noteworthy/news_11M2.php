<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
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
      <a href="http://www.eclipse.org/rap/downloads.php">download</a>. 
    </p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=RAP&target_milestone=1.1+M2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>
    <ul>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#RAP_JFace">JFace</a></li>
      <!--
      <li><a href="#RAP_Workbench">Workbench</a></li>
      -->
    </ul>
	
	<a name="RWT"></a>
	<h2>RWT</h2>
	<table>
	  <tr valign="top" align="left">
	    <td width="20%">
	      <b>Display#readAndDispatch()</b></td>
	    <td width="80%">
	      To more closely align with SWT and solve the problems with the
	      existing mechanism for blocking UI operations, RWT new provides
	      <code>Display#readAndDispatch()</code> and <code>Display#sleep()</code>.
	      <br />
	      Please be aware that this comes at the cost of a small API break.
	      The IEntryPoint#createUI method changed its signature from 
	      <code>Display create()</code> to <code>int createUI</code>.
	      A typical entry point that creates a workbench would now look like 
	      this:
	      <pre><code>
  public class MyApplication implements IEntryPoint {
    public int createUI() {
      Display display = PlatformUI.createDisplay();
      WorbenchAdvisor advisor = new MyWorbenchAdvisor();
      int result = PlatformUI.createAndRunWorkbench( display, avisor )
      return result;
    }
  }
	      </pre></code>
	      If you are using RWT directly, you also need to code the typical
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
	<h2>JFace</h2>
	<table>
	  <tr valign="top" align="left">
	    <td width="20%">
	      <b>Image decorators</b></td>
	    <td width="80%">
	    ... placeholder text ... 
	    <td/>
	  </tr>
	</table>
	
	<hr />
	
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_11M1.php">New for RAP 1.1 M1 (January 7, 2008)</a></li>
    </ul>
	
</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
