<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Getting Started";
	$pageKeywords	= "RAP, Eclipse";
	$pageAuthor		= "Jochen Krause";
		
	include("_sideCommon.php");
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<!--	<div align="center"><h1>$pageTitle</h1></div> -->
		         
        <div class="homeitem3col">

<h3>How do I write a Hello World Workbench with RAP?</h3>
<p><strong>1. Create a new project</strong></p>
</a>
<p>Create a new Project by right-clicking in the package explorer and select 
  <strong>New &gt; Project</strong>. In the upcoming "New Project"-wizard, 
  select <strong>Plug-in Project</strong> from the section 
  <strong>Plug-in Development</strong>.</p>
 
<p><strong>2. Create four Classes</strong></p>
<p> First you should create a package <code>org.eclipse.rap.helloworld</code> 
  (or another package name to your liking) to contain your source files. Using 
  the default package is generally not recommended.</p>
<p>You need to create four classes in your package. 
<ol>
  <li><strong>A <code>HelloWorldWorkbench</code> class implementing 
    <code>IEntryPoint</code> to provide an entry point to your HelloWorld 
    application.</strong>

<p> The HelloWorldWorkbench is responsible for the entry point of the 
  application and for creating the UI. Therefore it must implement the 
  interface <code>IEntryPoint</code> with <code>createUI()</code> as the 
  only method. 
</p>
<p>Example code: 
<pre></code>
package org.eclipse.rap.helloworld;
  
import org.eclipse.rap.rwt.lifecycle.IEntryPoint;
import org.eclipse.rap.rwt.widgets.Display;
import org.eclipse.rap.ui.PlatformUI;

public class HelloWorldWorkbench implements IEntryPoint {
  
  public Display createUI() {
    Display result = PlatformUI.createDisplay();
    PlatformUI.createAndRunWorkbench( result, new HelloWorldWorkbenchAdvisor() );
    return result;
  }
}
</code></pre>
</p></li>
  

<li><strong>A view <code>HelloWorldView</code> extending the class 
  <code>ViewPart</code>.</strong>

<p>The HelloWorldView is responsible for creating the view to display the output
  of your application. The class needs to extend <code>ViewPart</code> and 
  provide an implementation for the method <code>createPartControl()</code>.
  In <code>createPartControl</code> you create and add the components you want 
  in your view. 
</p>
<p>Example code:
<pre></code>
package org.eclipse.rap.helloworld;

import org.eclipse.rap.rwt.RWT;
import org.eclipse.rap.rwt.widgets.Composite;
import org.eclipse.rap.rwt.widgets.Label;
import org.eclipse.rap.ui.part.ViewPart;

public class HelloWorldView extends ViewPart {

  public void createPartControl( Composite parent ) {
    Label label = new Label ( parent, RWT.NONE );
    label.setText( "Hello RAP World" );
    label.setSize( 80, 20 );
  }
}
</code></pre>
</p></li>
  
<li><strong>A <code>Perspective</code> implementing <code>IPerspectiveFactory</code>.
</strong>
<p>The Perspective is responsible for defining the layout of your UI. Therefore 
  you need to implement <code>createInitialLayout()</code> to set the layout 
  of your UI and add the views (only one view in the HelloWorld application). 
  Please note that you need to specify the <strong>id</strong> of your view, 
  which needs to be distinguished from the class name. 
  </p>
<p>Example code:
<pre><code>
package org.eclipse.rap.helloworld;

import org.eclipse.rap.ui.IFolderLayout;
import org.eclipse.rap.ui.IPageLayout;
import org.eclipse.rap.ui.IPerspectiveFactory;

public class Perspective implements IPerspectiveFactory {
  
  public void createInitialLayout( IPageLayout layout ) {
    String editorArea = layout.getEditorArea();
    layout.setEditorAreaVisible( false );
    IFolderLayout left = layout.createFolder( "left",
                                              IPageLayout.LEFT,
                                              0.25f,
                                              editorArea );
    left.addView( "org.eclipse.rap.helloworld.helloWorldView" );
  }
}

</code></pre></p></li>

<li><strong>A workbench advisor <code>HelloWorldWorkbenchAdvisor</code> extending 
  the <code>WorkbenchAdvisor</code> class.</strong>

<p>The WorkbenchAdvisor is necessary to provide the id of the perspective 
  to the workbench. Therefore you need to implement the only method 
  <code>getInitialWindowPerspectiveId()</code> to return the id of your 
  perspective. Once again you need to use the <strong>id</strong> of your 
  perspective as return value, not the <strong>class name</strong>.<p/>
<p>Example code:
<pre><code>
package org.eclipse.rap.helloworld;

import org.eclipse.rap.ui.entrypoint.WorkbenchAdvisor;

public class HelloWorldWorkbenchAdvisor extends WorkbenchAdvisor {

  public String getInitialWindowPerspectiveId() {
    return "org.eclipse.rap.helloworld.perspective";
  }
}
</code></pre>
</p></li>
<br/>
</ol>

<h2>Now it's time to start the HelloWorld application</h2>

  
<p>To start your HelloWorld application, select <strong>Run...</strong> from 
  the Run menu or use the <strong>Run</strong> icon <img src="../../images/run.gif"/> 
  in your toolbar. 
  You need to create a <strong>New Launch configuration</strong> as an 
  <strong>Equinox OSGi Framework</strong> and ensure that the following plug-ins 
  are activated
<ul>
  <li>org.eclipse.osgi</li>
  <li>javax.servlet</li>
  <li>org.apache.commons.logging</li>  
  <li>org.eclipse.core.commands</li>
  <li>org.eclipse.core.contenttype</li>
  <li>org.eclipse.core.jobs</li>
  <li>org.eclipse.core.runtime</li>
  <li>org.eclipse.core.runtime.compatibility.registry</li>
  <li>org.eclipse.equinox.common</li>
  <li>org.eclipse.equinox.http.jetty</li>
  <li>org.eclipse.equinox.http.registry</li>
  <li>org.eclipse.equinox.http.servlet</li>
  <li>org.eclipse.equinox.preferences</li>
  <li>org.eclipse.equinox.registry</li>
  <li>org.eclipse.osgi.services</li>
  <li>org.eclipse.rap.demo</li>
  <li>org.eclipse.rap.jface</li>
  <li>org.eclipse.rap.rwt</li>
  <li>org.eclipse.rap.ui.workbench</li>
  <li>org.eclipse.rap.w4t</li>
  <li>org.mortbay.jetty</li>
</ul>
  Click <strong>Run</strong> to start the application. You may want to configure the TCP-port your demo application will listen to. 
  This is done opening the <strong>Arguments</strong> tab and passing 
  <strong>-Dorg.osgi.service.http.port=10080</strong> as an argument to the 
  Java Virtual Machine (VM), where 10080 is the (arbitrarily chosen) port your 
  application will listen to. This is particularly important if the default 
  port 80 is already taken by some other application (e.g. your Web Server ...) 
  or in an environment where you are not allowed to access privileged ports 
  (e.g. as a non-admin user on some OS).
 </p>

<p>To see your RAP HelloWorld in action, please start your browser and enter 
  the URL <strong>http://localhost/rap</strong>.</p>
		</div> 
		<p>&nbsp;</p>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
