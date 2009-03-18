<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "RAP Project - Single Sourcing";
	$pageKeywords	= "RAP, Eclipse, single sourcing";
	$pageAuthor		= "Benjamin Muskalla";
		
	include("_sideCommon.php");
		
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">


<h1>Single Sourcing</h1>

<h2>Getting started screencasts</h2>
<p>
  Application vendors are increasingly required to provide both desktop and web
  clients for their customers. But desktop and web applications are  based on
  very different technologies which generally demand different programming
  paradigms and skills that make it impossible to reuse code. Specialized
  development skills and implementing the same functionality more than once
  increases the cost of production without in fact, adding new value to the
  application.
</p>
<p>
  The Rich Ajax Platform (RAP) was designed to tackle exactly these problems for
  the Eclipse world. RAP allows Java and Eclipse developers to reuse their
  existing skills through a Java-based development model for web-clients.
  Furthermore, RAP maximizes code reuse by including the largest-possible
  web-enabled subset of the Rich Client Platform (Eclipse's technology on the
  desktop).
</p>

<h2>Webinar</h2>
<p>
  The easiest was to get involved with single sourcing is to watch the webinar:
  
  Webinar: Single-Sourcing Techniques for RAP and RCP, Oct 23, 2008, Frank Appel
  <br />
  <a href="http://download.innoopract.com/rap/webinar/Single_Sourcing_RAP_RCP_en.pdf">
    PDF Slides
  </a>
  &nbsp;&nbsp;
  <a href="http://download.innoopract.com/rap/webinar/Single_Sourcing_RAP_RCP_examples.zip">
    Code examples
  </a>
  &nbsp;&nbsp;
  <a href="http://download.innoopract.com/rap/webinar/Single_Sourcing_RAP_RCP_en.mp4">
    MP4 Recording
  </a>
  &nbsp;&nbsp;
  <a href="http://download.innoopract.com/rap/webinar/Single_Sourcing_RAP_RCP_en.wmv">
    WMV Recording
  </a>
  &nbsp;&nbsp;(~ 60 Minutes)
</p>

<h2>Single Sourcing guide</h2>
<p>
  In order to develop fully single-sourced bundles for Eclipse RCP and RAP it is
  necessary to follow certain practices. This paper describes different patterns
  and refactorings to allow single sourcing of applications for both runtime
  platforms. All of these patterns have been discovered during single sourcing
  various applications in the Eclipse.org runtime space and tooling space.
  <br />
  Paper: <a href="">Patterns for Single-Sourcing RCP and RAP applications</a>,
  Apr 03, 2009, Benjamin Muskalla
</p>

</div>
</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
