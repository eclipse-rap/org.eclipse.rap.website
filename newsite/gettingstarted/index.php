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


<h3>Getting Started</h3>

<p>
The easiest was to get involved with RAP is to install it from the update-site 
using the Eclipse Update Manager. This requires the following steps:
<ul>
  <li>With Eclipse up and running, select the Help->Software Updates->Find and
      Install menu option.</li>
  <li>Click on the Search for new features to install radio button and then 
      click Next.</li>
  <li>Click on the New Remote Site button, the New Update Site dialog will
      appear.</li>
  <li>Enter a name for the udpate site, such as "RAP Update Site" and then enter
      the URL http://download.eclipse.org/technology/rap/update-site, click OK
      to create the new update site entry.</li>
  <li>The entry you just created now appears in the update site list and is
      selected. Ensure it is the only site selected and click Finish.</li>
  <li>The update manager will now connect to the site and display the feature
      available on the site. Check the update site and click Next to continue
      the selection process.</li>
  <li>Accept the terms in the license agreement and click the Next button.</li>
  <li>A list with the feature to install will be displayed. Click Finish to 
      start the installation process.</li>
  <li>The feature and plug-ins will now be downloaded from the site and
      installed locally. Note that you may be prompted to confirm if it is ok
      to install unsigned jar files.</li>
  <li>Confirm the following prompt to restart Eclipse.</li>
</ul>
<p>

</p>
After Eclipse restarts, a welcome page is displayed. Select the RAP section
and choose the target installation action on the following page. In the
upcomming dialog confirm the default values, which starts the target
installation process.
</p>

<p>After the installation finished you are prepared to work with RAP.
For your first steps you may read the
<a href="http://help.eclipse.org/help33/index.jsp?topic=/org.eclipse.rap.help/help/html/getting-started/examples.html">RAP Examples</a>
topic and/or the other chapters of the getting started section.
</p>
 
</div>
</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
