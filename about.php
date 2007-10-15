<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Rich Ajax Platform (RAP) Project";
	$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
	$pageAuthor		= "Jochen Krause";
	
	# Paste your HTML content between the EOHTML markers!	
	include("_sideMylarIs.php");
	include("_sideFeedback.php");
	include("_sidePhase.php");
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div class="homeitem3col">
			<h3>What is RAP?</h3>
			<ul>
				<li>
					The RAP project enables developers to build rich, Ajax-enabled Web 
					applications by using the Eclipse development model, plug-ins with the well 
					known Eclipse workbench extension points and a widget toolkit with SWT API (plus JFace).
				</li>
				<li>
					Version 1.0 has been released
					The RAP project has graduated from incubation and released version 1.0 of RAP. 
					You can download the RAP tools / runtime from the download section on the left.
					A user guide is part of the RAP tools and can also be accessed online from the 
					infocenter link.
				</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>RAP Architecture</h3>
			<p align="center">
			  <img src="images/about/architecture.png" alt="architecture" />
			</p>
			<p style="margin:10px">RAP is very similar to Eclipse RCP, but instead of being executed on a desktop computer
			RAP is run on a server and clients can access the application with standard browsers.
			This is mainly achieved by providing a special implementation of SWT (a subset of SWT API).
			</p>
		</div>

		<div class="homeitem3col">
			<h3>Tooling for RAP</h3>
			<p align="center">
  			<img src="images/tooling.png" alt="tooling" />
			</p>
			<p style="margin:10px">RAP takes advantage of the award winning Java Development tools and the Plug-in Development
			tools provided by Eclipse.org. As applications are developed as bundles (plug-ins) and 
			entirely in Java everything from development to launching, debugging and exporting to 
			standard .war files works right out of the Eclipse IDE. 
		</div>

	</div> 
</div>
 <div id="rightcolumn">
  <div class="sideitem">
  <h6>Active Contributors</h6>
   <ul>
    <li>
      <a href="http://innoopract.com" target="_blank">Innoopract</a>
    </li>
    <li>
      <a href="http://oneandone.com" target="_blank">1&1</a>
    </li>
    <li>
      <a href="http://www.cas.de/English/Home.asp" target="_blank">CAS</a>
    </li>
   </ul>
  </div>
 </div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
