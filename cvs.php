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
<p class="bar">CVS checkout:</p>

<p>Assuming you're using <em>Eclipse</em>, the easiest way to get everything you 
need is to "import" a team project set. The project set file is available
<a href="resources/rap.psf">here</a>. After you've downloaded the file, choose 
<em>File</em> -> <em>Import</em> from the menu of your <em>Eclipse IDE</em>, 
which opens a dialog. Select <em>Team</em> -> <em>Team Project Set</em> and
click <em>next</em>. Enter the path to the file you've just downloaded,
click <em>finish</em> and the checkout of the necessary projects will start.</p>

<p><strong>Note:</strong> The project <em>org.eclipse.rap.rwt</em>
will not compile due to a missing library. This library contains a build
version of the javascript GUI framework <em>Qooxdoo</em>
(<a href="http://qooxdoo.org">qooxdoo.org</a>). It is not yet integrated
into <em>CVS</em>, since the current qooxdoo license is not compatible with 
<em>EPL</em>. But the license changes are under way and till then you can 
get a copy of the library from
<a href="http://w4teclipse.com:8080/w4content/qooxdoo-0.6.5.jar">here</a>.</p>


<p class="bar">Demo Launch:</p>

<p>The team project set includes bundles that put together an 
<em>Http Service</em> environment which is the simplest way 
to set up a development runtime. For more information see
<a href="http://www.eclipse.org/equinox/server/http_in_equinox.php">Embedding an HTTP server in Equinox</a>.
</p>

<p>To launch the <em>RAP-Demo</em> open the <em>Run</em> wizard by selecting
<em>Run</em>/<em>Run</em> from the IDE's menu. In the wizard choose 
<em>Equinox OSGi Framework</em> -> <em>RAP-Demo</em> and
after that click <em>run</em>. Some messages in the console view should indicate that
the http service was started at port 80 (ensure that no other service 
uses port 80 or change the port settings with the VM-argument 
<em>-Dorg.osgi.service.http.port=&lt;port&gt;</em>).
Open a Browser and type <em>http://localhost/rap</em> (or
<em>http://localhost:&lt;port&gt;/rap</em> in case you changed the port)
to access the RAP demo application.</p>
<p />
</div>
EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
