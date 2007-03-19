<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Initial revision: Jochen Krause
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - Downloads";
$pageKeywords	= "AJAX, rap, w4t, eclipse rap";
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
    <div class="homeitem3col">
			<h3>RAP Update Site</h3>
			<ul>
				<li>RAP 1.0M2 for Eclipse 3.2 / 3.3: <b>http://download.eclipse.org/technology/rap/update-site/</b>
       		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap_site_1.0.0.M2.zip">&nbsp;[zipped update site]</a>
          <br />
          <a href="http://wiki.eclipse.org/index.php/Rap10M2_News">New and Noteworthy</a>
	      </li>
				<li>RAP 1.0M1 for Eclipse 3.2 / 3.3: <b>http://download.eclipse.org/technology/rap/update-site/</b>
	        		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap_site_1.0.0.M1.zip">&nbsp;[zipped update site]</a>
	      </li>
			</ul>
		</div>
	<div id="rightcolumn">
		<div class="sideitem">
		  <img src="http://www.eclipse.org/images/gazoo-incubation.jpg" alt="Project is in incubation">
		</div>
  </div>
</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
