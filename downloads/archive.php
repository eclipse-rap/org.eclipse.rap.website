<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - Archived Downloads";
$pageKeywords	= "AJAX, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

<div id="midcolumn">
		<h1>Archived Downloads</h1>

    <p> 
    Since RCP and RAP bundles within the same instance do not work, we are only 
    able to provide target platforms for download.
    This is because RAP now uses the same namespace as RCP.
    </p>
    <p>After downloading, extract the file in a convenient location, say <code>
    c:\\target</code> and start Eclipse (if not yet running). Open <b>Window &gt; 
    Preferences</b>, go to 
    the <b>Plug-in Development &gt; Target Platform</b> preference page, set the
    <b>Location</b> to the eclipse sub-directory of the extracted archive (e.g.
    <code>c:\\target\\eclipse</code>). Finally click <b>Reload</b>. You should see
    the just downloaded plug-ins appear in the plug-ins list.
    </p>
    <p>Note: if doing this with a workspace that already contains projects that
    depend on the target, you may get compile errors. Restartiung Eclipse and/or
    doing a clean build will help.
    </p>
    <div class="homeitem3col">
      <h3>Milestone and Release Target Platforms</h3>
      <ul>
        <li>RAP 1.0 Final for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-R-target-3.2-20071010-2241.zip">
            rap-1.0-R-target-3.2-20071010-2241.zip
          </a>
          <br />
          RAP 1.0 Final for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-R-target-3.3-20071010-2241.zip">
            rap-1.0-R-target-3.3-20071010-2241.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy">
            New and Noteworthy
          </a>
          <br />
        </li>
        <li>RAP 1.0 RC1 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-RC1-incubation-target-3.2-20070928-1625.zip">
            rap-1.0-RC1-incubation-target-3.2-20070928-1625.zip
          </a>
          <br />
          RAP 1.0 RC1 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-RC1-incubation-target-3.3-20070928-1625.zip">
            rap-1.0-RC1-incubation-target-3.3-20070928-1625.zip
          </a>
          <br />
          <a href="http://wiki.eclipse.org/index.php/Rap10RC1_News">
            New and Noteworthy
          </a>
          <br />
        </li>
        <li>RAP 1.0M6 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-M6-incubation-target-3.2-20070817-1525.zip">
            rap-1.0-M6-incubation-target-3.2-20070817-1525.zip
          </a>
          <br />
          RAP 1.0M6 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-M6-incubation-target-3.3-20070817-1525.zip">
            rap-1.0-M6-incubation-target-3.3-20070817-1525.zip
          </a>
          <br />
          <a href="http://wiki.eclipse.org/index.php/Rap10M6_News">
            New and Noteworthy
          </a>
          <br />
        </li>
        <li>RAP 1.0M5 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-M5-incubation-target-3.2-20070713-1906.zip">
            rap-1.0-M5-incubation-target-3.2-20070713-1906.zip
          </a>
          <br />
          RAP 1.0M5 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-M5-incubation-target-3.3-20070713-1906.zip">
            rap-1.0-M5-incubation-target-3.3-20070713-1906.zip
          </a>
          <br />
          <a href="http://wiki.eclipse.org/index.php/Rap10M5_News">
            New and Noteworthy
          </a>
          <br />
        </li>
        <li>RAP 1.0M4 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-M4-incubation-target-3.2-200706081830.zip">
            rap-1.0-M4-incubation-target-3.2-200706081830.zip
          </a>
          <br />
          RAP 1.0M4 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-M4-incubation-target-3.3-200706081830.zip">
            rap-1.0-M4-incubation-target-3.3-200706081830.zip
          </a>
          <br />
          <a href="http://wiki.eclipse.org/index.php/Rap10M4_News">
            New and Noteworthy
          </a>
          <br />
        </li>
      </ul>
    </div>
    
    <div class="homeitem3col">
      <h3>Integration Build Target Platforms</h3>
      <ul>
      
        <li>RAP 1.0.1 I-20071109 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0.1-I-target-3.2-20071109-1244.zip">
            rap-1.0.1-I-target-3.2-20071109-1244.zip
          </a>
          <br />
          RAP 1.0.1 I-20071109 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0.1-I-target-3.3-20071109-1244.zip">
            rap-1.0.1-I-target-3.3-20071109-1244.zip
          </a>
        </li>
        
        <li>RAP 1.0 I-20070921 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.2-20070921-1419.zip">
            rap-1.0-I-incubation-target-3.2-20070921-1419.zip
          </a>
          <br />
          RAP 1.0 I-20070921 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.3-20070921-1419.zip">
            rap-1.0-I-incubation-target-3.3-20070921-1419.zip
          </a>
        </li>
        <li>RAP 1.0 I-20070921 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0.1-I-target-3.2-20071109-1244.zip">
            rap-1.0.1-I-target-3.2-20071109-1244.zip
          </a>
          <br />
          RAP 1.0 I-20070921 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.3-20070921-1419.zip">
            rap-1.0-I-incubation-target-3.3-20070921-1419.zip
          </a>
        </li>
        <li>RAP 1.0 I-20070914 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.2-20070914-1831.zip">
            rap-1.0-I-incubation-target-3.2-20070914-1831.zip
          </a>
          <br />
          RAP 1.0 I-20070914 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.3-20070914-1831.zip">
            rap-1.0-I-incubation-target-3.3-20070914-1831.zip
          </a>
        </li>
        <li>RAP 1.0 I-20070907 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.2-20070907-1456.zip">
            rap-1.0-I-incubation-target-3.2-20070907-1456.zip
          </a>
          <br />
          RAP 1.0 I-20070907 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.3-20070907-1456.zip">
            rap-1.0-I-incubation-target-3.3-20070907-1456.zip
          </a>
        </li>
        <li>RAP 1.0 I-20070831 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.2-20070831-1725.zip">
            rap-1.0-I-incubation-target-3.2-20070831-1725.zip
          </a>
          <br />
          RAP 1.0 I-20070831 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.3-20070831-1725.zip">
            rap-1.0-I-incubation-target-3.3-20070831-1725.zip
          </a>
        </li>
        <li>RAP 1.0 I-20070824 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.2-20070824-1323.zip">
            rap-1.0-I-incubation-target-3.2-20070824-1323.zip
          </a>
          <br />
          RAP 1.0 I-20070824 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.3-20070824-1323.zip">
            rap-1.0-I-incubation-target-3.3-20070824-1323.zip
          </a>
        </li>
        <li>RAP 1.0 I-20070810 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.2-20070810-1109.zip">
            rap-1.0-I-incubation-target-3.2-20070810-1109.zip
          </a>
          <br />
          RAP 1.0 I-20070810 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.3-20070810-1109.zip">
            rap-1.0-I-incubation-target-3.3-20070810-1109.zip
          </a>
        </li>
        <li>RAP 1.0 I-20070803 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.2-20070803-1640.zip">
            rap-1.0-I-incubation-target-3.2-20070803-1640.zip
          </a>
          <br />
          RAP 1.0 I-20070803 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.3-20070803-1640.zip">
            rap-1.0-I-incubation-target-3.3-20070803-1640.zip
          </a>
        </li>
        <li>RAP 1.0 I-20070727 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.2-20070727-1457.zip">
            rap-1.0-I-incubation-target-3.2-20070727-1457.zip
          </a>
          <br />
          RAP 1.0 I-20070727 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.3-20070727-1457.zip">
            rap-1.0-I-incubation-target-3.3-20070727-1457.zip
          </a>
        </li>
        <li>RAP 1.0 I-20070720 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.2-20070720-1623.zip">
            rap-1.0-I-incubation-target-3.2-20070720-1623.zip
          </a>
          <br />
          RAP 1.0 I-20070720 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-I-incubation-target-3.3-20070720-1623.zip">
            rap-1.0-I-incubation-target-3.3-20070720-1623.zip
          </a>
        </li>
      </ul>
    </div>
</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
