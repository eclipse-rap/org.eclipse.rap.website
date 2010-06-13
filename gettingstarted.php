<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "RAP Project - Getting Started";
	$pageKeywords	= "RAP, Eclipse";
	$pageAuthor		= "Jochen Krause";	
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">


<h1>Getting Started</h1>

<h2>Getting started screencasts</h2>
<p>Check out those excellent screencasts (external) to get started with RAP
 - both for installation and creating your first project:
 <a href="http://www.thescreencast.com/2007/10/first-look-at-eclipse-rich-ajax.html"
    target="_blank">Eclipse RAP getting started screencasts</a>
 </p>
 <p>
 <table border="0" width="100%">
 <tr>
 <td align="center">
 <a href="http://www.thescreencast.com/2007/10/first-look-at-eclipse-rich-ajax.html"
    target="_blank"><img src="images/gettingstarted/install_screencast.png"/></a>
 </td>
 <td align="center">
 <a href="http://www.thescreencast.com/2007/10/first-look-at-eclipse-rich-ajax.html"
    target="_blank"><img src="images/gettingstarted/create_application_screencast.png"/></a>
 </td>
 </tr>
 </table>
</p>


<h2>Getting started instructions</h2>
<p>The easiest was to get involved with RAP is to install it from a software 
  repository. This requires the following steps:
</p>

<p><strong>For Eclipse 3.5 or later...</strong>
<ul style="margin-left:10px">
  <li>With Eclipse up and running, select the <strong>Help</strong> &gt; 
      <strong>Install New Software ...</strong> menu entry.</li>
  <li>Enter enter the RAP Update Site URL 
    <strong>http://download.eclipse.org/rt/rap/1.2/update</strong>.
    into the <strong>Work with</strong> field and press Enter.
  <li>After a short while, an entry labelled <em>Rich Ajax Platform</em> appears 
    in the list below. Select its check box and click <strong>Next</strong>.
    </li>
  <li>On the the next page you may review the installation details.</li>
  <li>Accept the terms in the license agreement and click the 
      <strong>Finish</strong> button.</li>
  <li>The feature and plug-ins will now be downloaded from the repository and
      installed locally. Note that you may be prompted to confirm if it is ok
      to install unsigned jar files.</li>
  <li>Confirm the following prompt to restart Eclipse.</li>
</ul>
</p>

<p>After Eclipse restarts, a welcome page is displayed. Select the <strong>Rich 
Ajax Platform (RAP)</strong> section and choose <strong>Install Target 
Platform</strong> on the following page. In the upcoming dialog confirm the 
default values, which starts the target installation process.
</p>

<p>After the installation finished you are prepared to work with RAP.
For your first steps you may read the
<a href="http://help.eclipse.org/ganymede/index.jsp?topic=/org.eclipse.rap.help/help/html/getting-started/examples.html">RAP Examples</a>
topic and/or the other chapters of the getting started section.
</p>

</div>
</div>
EOHTML;


	# Generate the web page
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
