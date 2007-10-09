<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "Rich Ajax Platform (RAP) Project";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div class="homeitem3col">
			<h3>Current articles, blogs, slides and presentations</h3>
		    <ul>
				<li>
		            <a href="http://www.eweek.com/article2/0,1759,2100984,00.asp">
		           	Innoopract: The Company Behind RAP</a> October 01, 2007
	            </li>
	            <li>
		            <a href="http://www.innoopract.com/fileadmin/user_upload/Dokumente/Web-enabled_RCP_Applications_with_the_Rich_Ajax_Platform_pdf.pdf">
		           	RCP goes Web 2.0</a> September 28, 2007
	            </li>
				<li>
		            <a href="http://www.podtech.net/home/4204/innoopract-on-eclipse-eclipse-rap-osgi-and-component-coding-sponsored-development-in-open-source">
		           	Podcast: Innoopract CEO on Eclipse Distributions, Ajax, OSGi and more</a> September 24, 2007
	            </li>
				<li>
		            <a href="http://jax-award.de/jax_award06/gewinner_en.php">
		           	RAP wins european innovation award</a> JAX, 2006
		           	<img src="../../images/jax.png" align="right"/> 
	            </li>
	            <li>
		            <a href="http://eclipsezilla.eclipsecon.org/php/attachment.php?bugid=3833">
		           	eclipse rich ajax platform (RAP)</a> slides EclipseCon 2007
	            </li>
	            <li>
		            <a href="http://eclipsenuggets.blogspot.com/2007/09/see-how-you-can-make-rcp-application.html">
		           	See how you can make an RCP Application run in your browser</a> blog, Elias Volanakis 
	            </li>
	            <li>
		            <a href="http://mea-bloga.blogspot.com/2007/09/web-development-revisited.html">
		           	Web development revisited</a> blog, Chris Aniszczyk 
	            </li>
	            <li>
		            <a href="http://eclipse-magazin.de/itr/ausgaben/psecom,id,366,nodeid,228.html">
		           	RCP im Zeitalter vom Web 2.0 </a> eclipse Magazin, Volume 12, Benjamin Muskalla und Ralf Sternberg 
	            </li>
	          </ul> 
		</div>
	</div>
</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
