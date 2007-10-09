<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "Rich Ajax Platform (RAP) Project";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<p> There is a component called "sandbox" in RAP, that we created to "make
		interesting /promising developments visible and accessible for the
		complete community". We would like to make you a committer for the
		sandbox component right away, and if you are o.k. with this proposal
		then we will start the necessary voting.</p>	
	</div>
</div>
EOHTML;


# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
