<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
$pageTitle 		= "RAP Project - Runtime SDK Installation";
$pageKeywords   = "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor		= "Jochen Krause";

	# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML

<div id="midcolumn">
    <h1>Runtime SDK Installation</h1>

    <div class="homeitem3col">
      <p style="margin: 10px">
        RAP applications need to be compiled against the RAP Runtime SDK. To
        do so, the SDK needs to be set as the target platform in Eclipse.
        This can either be done by the <a href="../gettingstarted.php">RAP 
        Tooling</a> or manually.
        <ol>
          <li>Open <b>Window &gt; Preferences</b> and go to the <b>Plug-in 
            Development &gt; Target Platform</b> preference page.       
          </li>
          <li>Add a new target definition and initialize it with "nothing".</li>
          <li>On the next page, click <b>Add</b>, choose <b>Software Site</b> </li>
          <li>On the following page, enter the RAP repository 
            (http://download.eclipse.org/rt/rap/1.2/runtime-update) in the 
            <b>Work with</b> field and press enter.</li>
          <li>Select target to install from the list below.</li> 
          <li>Make sure the checkbox <b>Include required software</b> is <b>not 
            checked</b>.</li>
          <li>Click <b>Finish</b>. After the download is completed, click <b>Finish</b> 
            again to save the new target definition.</li>
          <li>Activate the new target on the target platform preference page.</li> 
        </ol>
      </p>
      <p style="margin: 10px">
        Note: if doing this with a workspace that already contains projects that
        depend on the target, you may get compile errors. Restarting Eclipse and/or
        doing a clean build will help.
      </p>
      </p>
    </div>

</div> <!-- midcolumn -->

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
