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

    <p>Since RCP and RAP bundles within the same instance do not work, we provide 
      target platforms for download.
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
      <h3>Milestone Builds and Release Target Platforms</h3>
      <ul>
        <li>RAP 1.1 RC3 for Eclipse 3.4
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.1.0-RC3-target-3.4-20080603-1107.zip">
            rap-1.1.0-RC3-target-3.4-20080603-1107.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_11RC.php">
            New &amp; Noteworthy
          </a>
        </li>

        <li>RAP 1.1 RC2 for Eclipse 3.4
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.1.0-RC2-target-3.4-20080527-1108.zip">
            rap-1.1.0-RC2-target-3.4-20080527-1108.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_11RC.php">
            New &amp; Noteworthy
          </a>
        </li>
        <li>RAP 1.1 RC1 for Eclipse 3.4
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.1.0-RC1-target-3.4-20080520-1049.zip">
            rap-1.1.0-RC1-target-3.4-20080520-1049.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_11RC.php">
            New &amp; Noteworthy
          </a>
        </li>
        <li>RAP 1.1 M4 for Eclipse 3.4
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.1.0-M4-target-3.4-20080506-1758.zip">
            rap-1.1.0-M4-target-3.4-20080506-1758.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_11M4.php">
            New &amp; Noteworthy
          </a>
        </li>
        <li>RAP 1.1 M3 for Eclipse 3.3
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.1.0-M3-target-3.3-20080407-1124.zip">
            rap-1.1.0-M3-target-3.3-20080407-1124.zip
          </a>
          <br />
          RAP 1.1 M3 for Eclipse 3.4
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.1.0-M3-target-3.4-20080407-1124.zip">
            rap-1.1.0-M3-target-3.4-20080407-1124.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_11M3.php">
            New  Noteworthy
          </a>
        </li>
        <li>RAP 1.1 M2 for Eclipse 3.3
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.1.0-M2-target-3.3-20080220-1610.zip">
            rap-1.1.0-M2-target-3.3-20080220-1610.zip
          </a>
          <br />
          RAP 1.1 M2 for Eclipse 3.4
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.1.0-M2-target-3.4-20080220-1610.zip">
            rap-1.1.0-M2-target-3.4-20080220-1610.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_11M2.php">
            New &amp; Noteworthy
          </a>
          <br />
        </li>
        <li>RAP 1.1 M1 for Eclipse 3.3
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.1.0-M1-target-3.3-20080107-1025.zip">
            rap-1.1.0-M1-target-3.3-20080107-1025.zip
          </a>
          <br />
          RAP 1.1 M1 for Eclipse 3.4
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.1.0-M1-target-3.4-20080107-1025.zip">
            rap-1.1.0-M1-target-3.4-20080107-1025.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_11M1.php">
            New &amp; Noteworthy
          </a>
          <br />
        </li>
        <li>RAP 1.0.1 Service Release for Eclipse 3.2
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0.1-R-target-3.2-20071207-1851.zip">
            rap-1.0.1-R-target-3.2-20071207-1851.zip
          </a>
          <br />
          RAP 1.0.1 Service Release for Eclipse 3.3
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0.1-R-target-3.3-20071207-1851.zip">
            rap-1.0.1-R-target-3.3-20071207-1851.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_10.php">
            New &amp; Noteworthy
          </a>
          <br />
        </li>
        <li>RAP 1.0 Final for Eclipse 3.2
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0.0-R-target-3.2-20071010-2241.zip">
            rap-1.0.0-R-target-3.2-20071010-2241.zip
          </a>
          <br />
          RAP 1.0 Final for Eclipse 3.3
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0.0-R-target-3.3-20071010-2241.zip">
            rap-1.0.0-R-target-3.3-20071010-2241.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_10.php">
            New &amp; Noteworthy
          </a>
          <br />
        </li>
        <li>RAP 1.0 RC1 for Eclipse 3.2
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0-RC1-incubation-target-3.2-20070928-1625.zip">
            rap-1.0-RC1-incubation-target-3.2-20070928-1625.zip
          </a>
          <br />
          RAP 1.0 RC1 for Eclipse 3.3
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0-RC1-incubation-target-3.3-20070928-1625.zip">
            rap-1.0-RC1-incubation-target-3.3-20070928-1625.zip
          </a>
          <br />
          <a href="http://wiki.eclipse.org/index.php/Rap10RC1_News">
            New &amp; Noteworthy
          </a>
          <br />
        </li>
        <li>RAP 1.0M6 for Eclipse 3.2
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0-M6-incubation-target-3.2-20070817-1525.zip">
            rap-1.0-M6-incubation-target-3.2-20070817-1525.zip
          </a>
          <br />
          RAP 1.0M6 for Eclipse 3.3
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0-M6-incubation-target-3.3-20070817-1525.zip">
            rap-1.0-M6-incubation-target-3.3-20070817-1525.zip
          </a>
          <br />
          <a href="http://wiki.eclipse.org/index.php/Rap10M6_News">
            New &amp; Noteworthy
          </a>
          <br />
        </li>
        <li>RAP 1.0M5 for Eclipse 3.2
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0-M5-incubation-target-3.2-20070713-1906.zip">
            rap-1.0-M5-incubation-target-3.2-20070713-1906.zip
          </a>
          <br />
          RAP 1.0M5 for Eclipse 3.3
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0-M5-incubation-target-3.3-20070713-1906.zip">
            rap-1.0-M5-incubation-target-3.3-20070713-1906.zip
          </a>
          <br />
          <a href="http://wiki.eclipse.org/index.php/Rap10M5_News">
            New &amp; Noteworthy
          </a>
          <br />
        </li>
        <li>RAP 1.0M4 for Eclipse 3.2
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0-M4-incubation-target-3.2-200706081830.zip">
            rap-1.0-M4-incubation-target-3.2-200706081830.zip
          </a>
          <br />
          RAP 1.0M4 for Eclipse 3.3
          <a href="http:/archive.eclipse.org/downloads/technology/rap/rap-1.0-M4-incubation-target-3.3-200706081830.zip">
            rap-1.0-M4-incubation-target-3.3-200706081830.zip
          </a>
          <br />
          <a href="http://wiki.eclipse.org/index.php/Rap10M4_News">
            New &amp; Noteworthy
          </a>
          <br />
        </li>
      </ul>
    </div>
    
    <div class="homeitem3col">
      <h3>Integration Build Target Platforms</h3>
      <ul>
      </ul>
    </div>
</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
