<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "Rich Ajax Platform (RAP) Project";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<div class="homeitem3col">
			<h3>Current articles, blogs, slides and more</h3>
		    <ul>
				<li>
		            <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=204737" target="_blank">
		           	Community: RAP Creation Review Votes</a> eclipse.org, Oct 10, 2007 - "+2 Simply a awesome project!"
	            </li>
				<li>
		            <a href="http://www.eclipse.org/projects/slides/rap_creation_review.pdf" target="_blank">
		           	Slides: Creation Review Slides</a> eclipse.org, Oct 3, 2007
	            </li>
	            <li>
		            <a href="http://www.innoopract.com/fileadmin/user_upload/Dokumente/Web-enabled_RCP_Applications_with_the_Rich_Ajax_Platform_pdf.pdf" target="_blank">
		           	Article: RCP goes Web 2.0</a> September 28, 2007
	            </li>
				<li>
		            <a href="http://www.podtech.net/home/4204/innoopract-on-eclipse-eclipse-rap-osgi-and-component-coding-sponsored-development-in-open-source" target="_blank">
		           	Podcast: Innoopract CEO on RAP, Eclipse Distributions, OSGi and more</a> September 24, 2007
	            </li>
	            <li>
		            <a href="http://eclipsenuggets.blogspot.com/2007/09/see-how-you-can-make-rcp-application.html" target="_blank">
		           	Blog / Video: See how you can make an RCP Application run in your browser</a> Sept 11, 2007, Elias Volanakis 
	            </li>
	            <li>
		            <a href="http://mea-bloga.blogspot.com/2007/09/web-development-revisited.html" target="_blank">
		           	Blog: Web development revisited</a> Sept 6, 2007, Chris Aniszczyk 
	            </li>	            
				<li>
		            <a href="http://www.eweek.com/article2/0,1759,2100984,00.asp" target="_blank">
		           	Article: Innoopract - The Company Behind RAP</a> eweek, March 6, 2007
	            </li>
	            <li>
		            <a href="http://eclipsezilla.eclipsecon.org/php/attachment.php?bugid=3833" target="_blank">
		           	Slides: eclipse rich ajax platform (RAP)</a> EclipseCon, March 2007, 
	            </li>
	            <li>
		            <img src="images/jax.png"/>
		            <a href="http://jax-award.de/jax_award06/gewinner_en.php" target="_blank">
		           	Community: RAP wins european innovation award</a> JAX, 2006
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
