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
					The RAP project aims to enable developers to build rich, Ajax-enabled Web 
					applications by using the Eclipse development model, plug-ins with the well 
					known Eclipse workbench extenstion points and a widget toolkit with SWT API (plus JFace). 
					The project is in the validation phase.
				</li>
				<li>
					RC1 has been released
					We have released the Release Candidate 1 build of RAP
				</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Legal</h3>
			<ul>
				<li>License:</li>
			</ul>
			<ul>
				<li>Project IP log</li>
			</ul>
		</div>
	</div> 
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
