<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Rich Ajax Platform (RAP) Project";
	$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
	$pageAuthor		= "Jochen Krause";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div class="homeitem3col">
			<h3>Current articles</h3>
		</div>
		
		<div class="homeitem3col">
			<h3>Current blogs</h3>
		</div>
		
		<div class="homeitem3col">
			<h3>Current slides</h3>
		</div>
			
		<div class="homeitem3col">
			<h3>Selected presentations</h3>
		</div>
		
		<div class="homeitem3col">
			<h3>Other</h3>
		</div>
		</div>
</div>
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
