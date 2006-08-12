<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Initial revision: Jochen Krause
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "Rich Ajax Platform (RAP) Project";
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
		<h2>What is RAP?</h2>
		<p> The RAP project aims to enable developers to build rich, AJAX-enabled Web applications by using the Eclipse development model, plug-ins and a Java-only API.</p>
			<h2>Scope </h2>
			<p>The objectives of the RAP project are:</p>
			
			<ul>
			  <li><b>Enable the development of Rich Internet Applications that are based on
			    the Eclipse Plugin architecture.</b> The Eclipse OSGi framework (Equinox)
			    can run inside of a Web application. This has been demonstrated by several
			    parties, and a subproject of the Equinox project has already been
			    established (see <a href="http://www.eclipse.org/equinox/incubator/server/">http://www.eclipse.org/equinox/incubator/server/</a>)</li>
			  <li><b>Enable AJAX UI development based on a Java component library. </b>For
			    enabling UI development based on a Java component library the project has
			    received a contribution from Innoopract (W4Toolkit), which provides a rich
			    set of UI components, event-driven program control, a generic mechanism for
			    updating arbitrary UI elements of a web UI based on AJAX, and a lifecycle
			    handling comparable to the one used in Java Server Faces. Furthermore the
			    component library offers a mechanism for browser detection and can adapt to
			    the capabilities of browsers by using rendering kits (NoScript, Script,
			    AJAX).</li>
			  <li><b>Provide a Web Workbench similar to the Eclipse platform workbench: </b>
			    <ul>
			      <li>provides selection service (with session scope),</li>
			      <li>provides extension points for action sets, workbench parts,
			        perspectives, preference pages, etc.,</li>
			      <li>enables plug-ins to contribute to workbench parts provided by other
			        plug-ins (e.g. action contributions)</li>
			    </ul>
			  </li>
			  <li>The RAP API will be aligned with the Eclipse platform API as much as possible</li>
			</ul>


		<div class="homeitem">
			<h3>Meet the RAP team</h3>
			<ul>
				<li><a href="http://eclipseworld.net/thursday_am.htm">EclipseWorld Conference, Boston, Sept 6-8</a><span><br>Tutorial: Web 2.0 the Eclipse Way With The Rich AJAX Platform</span></li>
				<li><a href="http://www.ajaxworldconference.com">AJAXWORLD Conference, Santa Clara, Oct 2-4</a><span><br>Rich Ajax Platform (RAP) - Web 2.0 the Eclipse Way </span></li>
				<li><a href="http://www.eclipsecon.org/summiteurope2006/">Eclipse Summit Europe, Esslingen, Germany, Oct 11-12</a><span><br>RAP - Rich Ajax Platform - Overview and future directions</span></li>
			</ul>
		</div>
		<hr class="clearer" />
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Project links</h6>
			<ul>
				<li><a href="http://dev.eclipse.org/mhonarc/lists/rap-dev/maillist.html">Mailing list</a></li>
				<li><a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.rap">Newsgroup</a></li>
				<li><a href="https://dev.eclipse.org/mailman/listinfo/rap-dev">Subscribe to mailing list</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/RAP">Project planning</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>RAP in the news</h6>
			<ul>
				<li><a href="http://jax-award.de/jax_award/gewinner_en.php">RAP wins european innovation award</a></li>
				<li><a href="http://www.eweek.com/article2/0,1895,1939964,00.asp">eweek - new ajax project for eclipse</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
