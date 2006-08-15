<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Initial revision: Frank Appel
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - CVS";
$pageKeywords	= "AJAX, rap, w4t, eclipse rap";
$pageAuthor		= "Frank Appel";

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
<p>Please follow the subsequent steps to get your copy of the current RAP development state:</p>
<ul><li>
<h4>Step 1:</h4>
<p>To check out the sources connect to the following repository:</p>
<p>
host: dev.eclipse.org<br>
repository: /cvsroot/technology<br>
method: pserver<br>
username: anonymous<br>
password: blank<br>
</p>
<p>Check out the subcomponent <code>org.eclipse.rap.w4t</code>.</p>
</li>

<li>
<h4>Step 2:</h4>
<p>You also need to check out the component
<code>org.eclipse.equinox.servlet.api</code> available at the following repository:</p>
<p>
host: dev.eclipse.org<br>
repository: /cvsroot/eclipse<br>
method: pserver<br>
username: anonymous<br>
password: blank<br>
</p>
</li>

<li>
<h4>Step 3:</h4>
<p>There are still a few files of the Innoopract code contribution in approval state.
Therefore the <code>org.eclipse.rap.w4t</code> project will not compile. Those missing
files can be downloaded
<a href="http://www.w4teclipse.com/w4teclipse/patch/org.eclipse.w4t.rap-patch.zip">here</a>.
Extract the archive into the project's root folder. After a refresh the error markers 
should vanish.</p>
</li>
</ul>
</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
