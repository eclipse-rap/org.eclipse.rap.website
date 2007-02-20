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
        <div class="homeitem3col">

<h3>How do I get my first web workbench with RAP?</h3>
<p><strong>Install the latest RAP build from the downloads page.</strong></p>

<h3>Demo Application</h3>

<p>The RAP project comes with two example applications demonstrating the 
  features and capabilities of RAP.</p>
<p>The first application provides a workbench very closely aligned to the RCP 
  workbench. The second demo shows what control widgets there are and that 
  they behave very similar to the SWT widgets.</p>

<p>To access and run these demo applications, please open the Plug-Ins view 
  (e.g. through the Plug-in Development perspective). Select the plugin named 
  <strong>org.eclipse.rap.demo</strong> which contains both demo applications, 
  right-click on this plugin and select <strong>Import as &gt; source project
  </strong>.
  This demo will then appear with all source files into your workspace / Package 
  Explorer. The demo also provides a ready-to use Launch configuration.</p>

<p>This is the plugin.xml of the demo project, showing how the workbench is 
   build by views and perspectives.</p>
   
   <img src="resources/workbench_pde.png"/>
   

<p>To run the demo, select <strong>Run</strong>. In the upcoming Launch 
  configuration wizard, select <strong>Rich AJAX Platform Demo</strong> from 
  the section <strong>Equinox OSGi Framework</strong>.</p>

<p><strong>Important note for Eclipse 3.3:</strong><br/>
  If you are using Eclipse 3.3. already, you need to start the 
  <strong>org.eclipse.equinox.app</strong> plugin with your rap demo. To do 
  so, switch to the <strong>Plug-ins</strong> tab of your Launch configuration 
  wizard and select to include the <strong>org.eclipse.equinox.app</strong> 
  plug-in.</p>

<p>You may want to configure the TCP-port your demo application will listen to. 
  This is done opening the <strong>Arguments</strong> tab and passing 
  <strong>-Dorg.osgi.service.http.port=10080</strong> as an argument to the 
  Java Virtual Machine (VM), where 10080 is the (arbitrarily chosen) port your 
  application will listen to. This is particularly important if the default 
  port 80 is already taken by some other application (e.g. your Web Server ...) 
  or in an environment where you are not allowed to access privileged ports 
  (e.g. as a non-admin user on some OS).</p>
  
<img src="resources/hello-world-params.png"/>
  
<p>To actually start your demo, click the <strong>Run</strong> button. The 
  correct startup should display in the Eclipse Console through a message 
  saying <code style="color:red">INFO: Started SocketListener on 0.0.0.0:&lt;port&gt;.</code> 
  If an error shows up, please make sure all other instances are stopped and 
  then retry with another port.</p>

<p>Now that the rap demo application is running, you can access it using any 
  browser. Please enter the URL <b><i>http://localhost:&lt;port&gt;/rap</i></b>.
</p>

<p>The rap demo application defines two entry points. The default is the 
  workbench demo. You can now select the controls-demo by explicitly passing a
  parameter in the url like this: <br/>
<b>http://localhost:&lt;port&gt;/rap?w4t_startup=controls</b></p>
    
<p>The controls demo will show you all the widgets that come with RWT and 
  how they work just like SWT in a browser.</p>

<p>Have fun with your RAP demo and enjoy experimenting with your own projects, 
  and please let us know how you like it. If you have any questions, comments 
  or remarks, please also don't hesitate contacting the RAP Team through 
  the RAP newsgroup. We will appreciate any feedback.</p>
</div>
</div>
</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
