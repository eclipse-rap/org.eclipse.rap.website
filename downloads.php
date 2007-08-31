<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Initial revision: Jochen Krause
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - Downloads";
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


	<div id="rightcolumn">
    <!--
    <div class="sideitem">
      <img src="http://www.eclipse.org/images/gazoo-incubation.jpg" alt="Project is in incubation">
    </div>
    -->
    <div class="sideitem">
      <h6>Incubation</h6><p>
      <div align="center">
        <a href="/projects/what-is-incubation.php">
          <img align="center" src="/images/egg-incubation.png" border="0"/>
        </a>
      </div>
      <div align="center">  
        This project is in the 
        <a href="/projects/dev_process/validation-phase.php">Incubation Phase</a>
      </div>
    </div>    
  </div>


<div id="midcolumn">
		<h1>$pageTitle</h1>

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
      <h3>Milestone Target Platforms</h3>
      <ul>
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
          See <a href="gettingstarted.php">here</a> for a guide on how to get 
          started.
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

    <div class="homeitem3col">
			<h3>Milestone Update Sites (only available for M1 - M3)</h3>
			<ul>
				<li>RAP 1.0M3 for Eclipse 3.2 / 3.3: <b>http://download.eclipse.org/technology/rap/update-site/</b>
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap_site_1.0.0.M3.zip">&nbsp;[zipped update site]</a>
          <br />
          <a href="http://wiki.eclipse.org/index.php/Rap10M3_News">New and Noteworthy</a>
	      </li>
				<li>RAP 1.0M2 for Eclipse 3.2 / 3.3:
       		<a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap_site_1.0.0.M2.zip">&nbsp;[zipped update site]</a>
          <br />
          <a href="http://wiki.eclipse.org/index.php/Rap10M2_News">New and Noteworthy</a>
	      </li>
				<li>RAP 1.0M1 for Eclipse 3.2 / 3.3:
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap_site_1.0.0.M1.zip">&nbsp;[zipped update site]</a>
	      </li>
			</ul>
		</div>

</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
