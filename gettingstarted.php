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


<h3>Demo Application</h3>

<p>The RAP project comes with two example applications demonstrating the 
  features and capabilities of RAP.</p>
<p>The first application provides a workbench very closely aligned to the RCP 
  workbench. The second demo shows what widgets there are and that 
  they behave very similar to the SWT widgets.</p>

<p>To access and run these demo applications, please open the Plug-ins view 
  (e.g. through the Plug-in Development perspective). Select the plug-in named 
  <strong>org.eclipse.rap.demo</strong> which contains both demo applications, 
  right-click on this plug-in and select <strong>Import as &gt; Source Project
  </strong>.
  This plug-in will then appear with all source files in your workspace. The 
  demo also provides a ready-to-use launch configuration.</p>

<p>In order to successfully launch the demo, there are two things to note</p>
  <ul><li>Even though importing the demo project as source succeeds, the 
    plug-in can only be run if You installed the <strong>SDK release</strong>.
    When using the Update-Manager to get RAP, please make sure that the 
    <strong>Rich Ajax Platform SDK</strong> component is also checked as shown 
    below.<br />
    <img src="resources/demo-app-sdk.png"/></li>
  <li><strong>If you are using Eclipse 3.3</strong> already, you need to start 
    the <code>org.eclipse.equinox.app</code> plug-in with your rap demo. To do 
    so, switch to the <strong>Plug-ins</strong> tab of your Launch Configuration 
    and select to include the <strong>org.eclipse.equinox.app</strong> plug-in.
  </li></ul>
  
<p>To run the demo, select <strong>Run &gt; Run...</strong> from the main menu.
  In the upcoming Launch Configuration Dialog, select <strong>Rich Ajax Platform 
  Demo</strong> from the section <strong>Equinox OSGi Framework</strong>.</p>

<p>You may want to configure the TCP-port your demo application will listen to. 
  This is done opening the <strong>Arguments</strong> page and passing 
  <strong>-Dorg.osgi.service.http.port=10080</strong> as an argument to the 
  Java Virtual Machine (VM), where 10080 is the (arbitrarily chosen) port your 
  application will listen to. This is particularly important if the default 
  port 80 is already taken by some other application (e.g. your web server) 
  or in an environment where you are not allowed to access privileged ports 
  (e.g. as a non-admin user on some operating systems).</p>
  
<img src="resources/demo-app-params.png"/>
  
<p>To actually start your demo, click the <strong>Run</strong> button. The 
  correct startup should display in the Eclipse Console through a message 
  saying <code style="color:red">INFO: Started SocketListener on 
  0.0.0.0:&lt;port&gt;.</code> If an error shows up, please make sure all other 
  instances are stopped and then retry with another port.</p>

<p>Now that the RAP demo application is running, you can access it using any 
  browser. Please enter the URL <strong>http://localhost:&lt;port&gt;/rap</strong>.
  <p>

<p>The rap demo application defines two entry points. The default is the 
  workbench demo. You can now select the controls-demo by explicitly passing a
  parameter in the url like this: 
  <strong>http://localhost:&lt;port&gt;/rap?w4t_startup=controls</strong>.
  The controls demo will show you all the widgets that come with RWT and 
  how they work just like SWT in a browser.</p>

<p>Have fun with your RAP demo and enjoy experimenting with your own projects, 
  and please let us know how you like it. If you have any questions, comments 
  or remarks, please also don't hesitate contacting the RAP Team through 
  <a href="http://eclipse.org/rap">the project web site</a>. We will appreciate 
  any feedback.</p>

</div>
</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
