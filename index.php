<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Initial revision: Jochen Krause
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "Rich Ajax Platform (RAP) Project";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>What is RAP?</h2>
		<p> The RAP project aims to enable developers to build rich, Ajax-enabled Web applications 
        by using the Eclipse development model, plug-ins with the well known Eclipse workbench
        extenstion points and a widget toolkit with SWT API (plus JFace). The project is in 
        the <a href="http://www.eclipse.org/projects/dev_process/validation-phase.php" target="_blank">validation phase</a>.
    </p>
		<h2>M6 has been released</h2>
		<p>We have released our sixth milestone build of RAP 
		    (<a href="http://eclipse.org/rap/downloads.php">Download</a>,
		<a href="http://wiki.eclipse.org/index.php/Rap10M6_News" target="_blank">New 
		and Noteworthy</a>).<br/> 
		We also offer a <a href="http://wiki.eclipse.org/index.php/Rap10RC1_News" 
		target="_blank">Sneak Preview</a> of the New and Noteworthy for the upcoming 
		M6 release. 
		</p>
    <p>
    <a href="http://rap.innoopract.com/rapdemo/rap" target="_blank">See a workbench demo online</a>.
    </p>
    <p>
    A core component of RAP is the RAP Widget Toolkit, which offers SWT API to the largest extend possible (for the web). See a demo <a href="http://rap.innoopract.com/rapdemo/rap?w4t_startup=controls" target="_blank">RWT widget demo</a>.
    </p>
    <p><a href="http://rap.innoopract.com/rapdemo/rap?w4t_startup=controls" target="_blank">
      <img src="resources/webworkbench.png" alt="A demo webworkbench"></a>
    </p>
    <p><img src="resources/workbench_pde.png" alt="Webworkbench plugin.xml">
    <br>
    <p><img src="resources/viewpart.png" alt="A ViewPart implementation">    
    <ul>
      <li><a href="http://eclipse.org/rap/downloads.php">Download the latest milestone build</a></li>
    </ul>


    </p>
    </p>
			<h2>Project Scope</h2>
			<p>The objectives of the RAP project are:</p>
			
			  <p><b>Enable the development of Rich Internet Applications that are based on
			    the Eclipse Plugin architecture.</b> The Eclipse OSGi framework (Equinox)
			    can run inside of a Web application. This has been demonstrated by several
			    parties, and a subproject of the Equinox project has already been
			    established (see <a href="http://www.eclipse.org/equinox/incubator/server/" target="_blank">http://www.eclipse.org/equinox/incubator/server/</a>)</p>
			  <p><b>Enable Ajax UI development based on a Java component library with SWT api. </b>For
			    enabling UI development based on a Java component library the project has
			    received an initial code contribution from Innoopract (W4Toolkit). <b>NEW:</b> Based on the
			    infrastructure provided by this code contributions we have implemented a first
			    version of a new widget toolkit with SWT api, called RWT. More info on RWT can be
			    found here: <a href="http://wiki.eclipse.org/index.php/RWTOverview" target="_blank">
			    http://wiki.eclipse.org/index.php/RWTOverview</a>. RWT is using a sophisiticated JavaScript
			    framework for client side rendering: <a href="http://qooxdoo.org" target="_blank">qooxdoo</a>.</p>
			  <p><b>Provide a Web Workbench similar to the Eclipse platform workbench: </b>
			    <ul>
			      <li>provides selection service (with session scope),</li>
			      <li>provides extension points for action sets, workbench parts,
			        perspectives, preference pages, etc.,</li>
			      <li>enables plug-ins to contribute to workbench parts provided by other
			        plug-ins (e.g. action contributions)</li>
			    </ul>
			  </p>
			  <p>The RAP API will be aligned with the Eclipse platform API as much as possible</p>


		<hr class="clearer" />
	</div>
	<div id="rightcolumn">
    <!--
    <div class="sideitem">
      <img src="http://www.eclipse.org/images/gazoo-incubation.jpg" alt="Project is in incubation">
    </div>
	  -->
    <div class="sideitem">
      <h6>Incubation</h6><p>
      <div align="center">
        <a href="/projects/what-is-incubation.php">
          <img align="center" src="/images/egg-incubation.png" border="0"/>
        </a>
      </div>
      <div align="center">  
        This project is in the 
        <a href="/projects/dev_process/validation-phase.php">Incubation Phase</a>
      </div>
    </div>		
		<div class="sideitem">
			<h6>RAP in the news</h6>
			<ul>
				<li><a href="http://jax-award.de/jax_award/gewinner_en.php" target="_blank">RAP wins european innovation award</a></li>
				<li><a href="http://www.eweek.com/article2/0,1895,1939964,00.asp" target="_blank">eweek - new Ajax project for eclipse</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Meet the RAP team</h6>
			<ul>
        <li><a href="http://www.eclipsecon.org/summiteurope2007/index.php?page=detail/&id=29" target="_blank">Eclipse Summit Europe, Ludwigsburg, October 10-11</a><span><br>RCP goes Web 2.0 - The Rich Ajax Platform (RAP)</span></li>				
        <li><a href="http://www.eclipsecon.org/2007/index.php?page=sub/&area=directors-choice" target="_blank">EclipseCon 2007, Santa Clara, March 5-8</a><span><br>RAP - Eclipse style development for the web</span></li>
				<li><a href="http://eclipseforumeurope.com/konferenzen/efe07/overview_sessions_eng.php?track=3#session-ewd1" target="_blank">Eclipse Forum Europe, Wiesbaden, Germany, April 23-27</a><span><br>Building Ajax applications with the Eclipse Rich Ajax Platform</span></li>
			</ul>
		</div>

	</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
