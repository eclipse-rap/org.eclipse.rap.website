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
<h3>CVS checkout</h3>

<p>Assuming you're using <em>Eclipse</em>, the easiest way to get everything you 
need is to "import" a team project set. The project set file is available
<a href="resources/rap.psf">here</a>. After you've downloaded the file, choose 
<em>File</em> -> <em>Import</em> from the menu of your <em>Eclipse IDE</em>, 
which opens a dialog. Select <em>Team</em> -> <em>Team Project Set</em> and
click <em>next</em>. Enter the path to the file you've just downloaded,
click <em>finish</em> and the checkout of the necessary projects will start.</p>

<p>In addition to the baisc RAP components that are included in the above 
mentioned project set, there are also <strong>RAP Forms</strong> and 
<strong>RAP Databinding</strong> available.
These components can also be obtained directly from CVS. The <strong>Forms</strong>
component only consist of the <strong>org.eclipse.rap/org.eclipse.rap.ui.foms
</strong> project. To use <strong>RAP Databinding</strong>, the following three 
projects are necessary:
<ul>
  <li><strong>org.eclipse.rap/org.eclipse.rap.core.databinding</strong></li>
  <li><strong>org.eclipse.rap/org.eclipse.rap.core.databinding.jface</strong></li>
  <li><strong>org.eclipse.rap/org.eclipse.rap.jface.databinding</strong></li>
  <li><strong>org.eclipse.rap/org.eclipse.rap.demo.databinding</strong> (optional)</li>
</ul>
If you are new to Eclipse, this 
<a href="http://wiki.eclipse.org/index.php/CVS_Howto#Anonymous_CVS">document</a> 
may help with accessing the Eclipse CVS. The <strong>org.eclipse.rap</strong>
module is located in the <strong>/cvsroot/technology</strong> repository.
</p>


<p>We are maintaining a 
  <a href="http://wiki.eclipse.org/index.php/Rap10M6_News">New and Noteworthy</a>
  in sync with the development progress in CVS to ease adoption of new features
  for you.</p>

<h3>Demo Launch</h3>

<p>The team project set includes bundles that put together an 
<em>Http Service</em> environment which is the simplest way 
to set up a development runtime. For more information see
<a href="http://www.eclipse.org/equinox/server/http_in_equinox.php">Embedding an HTTP server in Equinox</a>.
</p>

<p>To launch the <em>RAP-Demo</em> open the <em>Run</em> wizard by selecting
<em>Run</em>/<em>Run</em> from the IDE's menu. In the wizard choose 
<em>Equinox OSGi Framework</em> -> <em>RAP-Demo</em> and
after that click <em>run</em>. Some messages in the console view should indicate that
the http service was started at port 9090 (ensure that no other service 
uses port 9090 or change the port settings with the VM-argument 
<em>-Dorg.osgi.service.http.port=&lt;port&gt;</em>).
Open a Browser and type <em>http://localhost:9090/rap</em> (or
<em>http://localhost:&lt;port&gt;/rap</em> in case you changed the port)
to access the RAP demo application.</p>
<p />
</div>
EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
