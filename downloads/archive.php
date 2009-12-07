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

    <p>Back to the <a href="index.php">RAP Downloads Page</a>.</p>

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
	  depend on the target, you may get compile errors. Restarting Eclipse and/or
	  doing a clean build will help.
	</p>
	<div class="homeitem3col">
	  <h3>RAP Runtime SDK Builds</h3>
	  <ul>

	    <li>RAP 1.3 M2 milestone build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.3/rap-runtime-1.3.0-M2-20090929-1121.zip">
            rap-runtime-1.3.0-M2-20090929-1121.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_13M2.php">
            New &amp; Noteworthy
          </a>
        </li>

	    <li>RAP 1.3 M1 milestone build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.3/rap-runtime-1.3.0-M1-20090817-1725.zip">
            rap-runtime-1.3.0-M1-20090817-1725.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_13M1.php">
            New &amp; Noteworthy
          </a>
        </li>

        <li>RAP 1.2 release, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-runtime-1.2.0-R-20090616-1425.zip">
            rap-runtime-1.2.0-R-20090616-1425.zip
          </a>
          <br />
          <a href="../noteworthy/news_12.php">New &amp; Noteworthy</a>
        </li>

        <li>RAP 1.2 RC4 build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-runtime-1.2.0-RC4-20090609-1255.zip">
            rap-runtime-1.2.0-RC3-20090602-1139.zip
          </a>
          <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_12RC.php">
            New &amp; Noteworthy
          </a>
        </li>

	    <li>RAP 1.2 RC3 build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-runtime-1.2.0-RC3-20090602-1139.zip">
            rap-runtime-1.2.0-RC3-20090602-1139.zip
         </a>
        <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_12RC.php">
            New &amp; Noteworthy
          </a>
        </li>

	    <li>RAP 1.2 RC2 build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-runtime-1.2.0-RC2-20090526-1306.zip">
            rap-runtime-1.2.0-RC2-20090526-1306.zip
          </a>
        <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_12RC.php">
            New &amp; Noteworthy
          </a>
        </li>

	    <li>RAP 1.2 RC1 build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-runtime-1.2.0-RC1-20090519-1552.zip">
           rap-runtime-1.2.0-RC1-20090519-1552.zip
          </a>
        <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_12RC.php">
            New &amp; Noteworthy
          </a>
        </li>

	    <li>RAP 1.2 M7 milestone build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-runtime-1.2.0-M7-20090505-1445.zip">
            rap-runtime-1.2.0-M6-20090505-1445.zip
          </a>
        <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_12M7.php">
            New &amp; Noteworthy
          </a>
        </li>

	    <li>RAP 1.2 M6 milestone build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/target/rap-runtime-1.2.0-M6-20090319-1159.zip">
            rap-runtime-1.2.0-M6-20090319-1159.zip
          </a>
        <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_12M6.php">
            New &amp; Noteworthy
          </a>
        </li>

	    <li>RAP 1.2 M5 milestone build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-runtime-1.2.0-M5-20090210-1243.zip">
            rap-runtime-1.2.0-M5-20090210-1243.zip
          </a>
        <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_12M5.php">
            New &amp; Noteworthy
          </a>
        </li>

	    <li>RAP 1.2 M4 milestone build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.2.0-M4-target-3.5-20081223-1131.zip">
            rap-1.2.0-M4-target-3.5-20081223-1131.zip
          </a>
        <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_12M4.php">
            New &amp; Noteworthy
          </a>
        </li>

        <li>RAP 1.2 M3 milestone build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.2.0-M3-target-3.5-20081118-1809.zip">
            rap-1.2.0-M3-target-3.5-20081118-1809.zip
          </a>
	      <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_12M3.php">
            New &amp; Noteworthy
          </a>
        </li>

        <li>RAP 1.2 M2 milestone build, based on Eclipse 3.5&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/target/rap-1.2.0-M2-target-3.5-20081002-1417.zip">
            rap-1.2.0-M2-target-3.5-20081002-1417.zip
          </a>
	      <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_12M2.php">
            New &amp; Noteworthy
          </a>
        </li>

        <li>RAP 1.1.2 Service Release, based on Eclipse 3.4&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.2-SR2-target-3.4-20090218-1212.zip">
            rap-1.1.2-SR2-target-3.4-20090218-1212.zip
          </a>
	      <br />
          <a href="http://www.eclipse.org/rap/noteworthy/relnotes112.php">
            Release Notes
          </a>
        </li>
        <li>RAP 1.1.1 Service Release, based on Eclipse 3.4&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.1-SR1-target-3.4-20080917-1625.zip">
            rap-1.1.1-SR1-target-3.4-20080917-1625.zip
          </a>
	      <br />
          <a href="http://www.eclipse.org/rap/noteworthy/relnotes111.php">
            Release Notes
          </a>
        </li>
        <li>RAP 1.1 Release, based on Eclipse 3.4&nbsp;&nbsp;
          <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.0-R-target-3.4-20080613-1055.zip">
            rap-1.1.0-R-target-3.4-20080613-1055.zip
          </a>
	      <br />
          <a href="http://www.eclipse.org/rap/noteworthy/news_11.php">
            New &amp; Noteworthy
          </a>
        </li>
	    <li>RAP 1.1 RC3, based on Eclipse 3.4&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.0-RC3-target-3.4-20080603-1107.zip">
	        rap-1.1.0-RC3-target-3.4-20080603-1107.zip
	      </a>
	      <br />
	      <a href="http://www.eclipse.org/rap/noteworthy/news_11RC.php">
	        New &amp; Noteworthy
	      </a>
	    </li>
	    <li>RAP 1.1 RC2, based on Eclipse 3.4&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.0-RC2-target-3.4-20080527-1108.zip">
	        rap-1.1.0-RC2-target-3.4-20080527-1108.zip
	      </a>
	      <br />
	      <a href="http://www.eclipse.org/rap/noteworthy/news_11RC.php">
	        New &amp; Noteworthy
	      </a>
	    </li>
	    <li>RAP 1.1 RC1, based on Eclipse 3.4&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.0-RC1-target-3.4-20080520-1049.zip">
	        rap-1.1.0-RC1-target-3.4-20080520-1049.zip
	      </a>
	      <br />
	      <a href="http://www.eclipse.org/rap/noteworthy/news_11RC.php">
	        New &amp; Noteworthy
	      </a>
	    </li>
	    <li>RAP 1.1 M4, based on Eclipse 3.4&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.0-M4-target-3.4-20080506-1758.zip">
	        rap-1.1.0-M4-target-3.4-20080506-1758.zip
	      </a>
	      <br />
	      <a href="http://www.eclipse.org/rap/noteworthy/news_11M4.php">
	        New &amp; Noteworthy
	      </a>
	    </li>
	    <li>RAP 1.1 M3, based on Eclipse 3.3&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.0-M3-target-3.3-20080407-1124.zip">
	        rap-1.1.0-M3-target-3.3-20080407-1124.zip
	      </a>
	      <br />
	      RAP 1.1 M3, based on Eclipse 3.4&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.0-M3-target-3.4-20080407-1124.zip">
	        rap-1.1.0-M3-target-3.4-20080407-1124.zip
	      </a>
	      <br />
	      <a href="http://www.eclipse.org/rap/noteworthy/news_11M3.php">
	        New  Noteworthy
	      </a>
	    </li>
	    <li>RAP 1.1 M2, based on Eclipse 3.3&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.0-M2-target-3.3-20080220-1610.zip">
	        rap-1.1.0-M2-target-3.3-20080220-1610.zip
	      </a>
	      <br />
	      RAP 1.1 M2, based on Eclipse 3.4&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.0-M2-target-3.4-20080220-1610.zip">
	        rap-1.1.0-M2-target-3.4-20080220-1610.zip
	      </a>
	      <br />
	      <a href="http://www.eclipse.org/rap/noteworthy/news_11M2.php">
	        New &amp; Noteworthy
	      </a>
	      <br />
	    </li>
	    <li>RAP 1.1 M1, based on Eclipse 3.3&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.0-M1-target-3.3-20080107-1025.zip">
	        rap-1.1.0-M1-target-3.3-20080107-1025.zip
	      </a>
	      <br />
	      RAP 1.1 M1, based on Eclipse 3.4&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.0-M1-target-3.4-20080107-1025.zip">
	        rap-1.1.0-M1-target-3.4-20080107-1025.zip
	      </a>
	      <br />
	      <a href="http://www.eclipse.org/rap/noteworthy/news_11M1.php">
	        New &amp; Noteworthy
	      </a>
	      <br />
	    </li>
	    <li>RAP 1.0.1 Service Release, based on Eclipse 3.2&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.0.1-R-target-3.2-20071207-1851.zip">
	        rap-1.0.1-R-target-3.2-20071207-1851.zip
	      </a>
	      <br />
	      RAP 1.0.1 Service Release, based on Eclipse 3.3&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.0.1-R-target-3.3-20071207-1851.zip">
	        rap-1.0.1-R-target-3.3-20071207-1851.zip
	      </a>
	      <br />
	      <a href="http://www.eclipse.org/rap/noteworthy/relnotes101.php">
	        Release Notes
	      </a>
	      <br />
	    </li>
	    <li>RAP 1.0 Final, based on Eclipse 3.2&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.0.0-R-target-3.2-20071010-2241.zip">
	        rap-1.0.0-R-target-3.2-20071010-2241.zip
	      </a>
	      <br />
	      RAP 1.0 Final, based on Eclipse 3.3&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.0.0-R-target-3.3-20071010-2241.zip">
	        rap-1.0.0-R-target-3.3-20071010-2241.zip
	      </a>
	      <br />
	      <a href="http://www.eclipse.org/rap/noteworthy/news_10.php">
	        New &amp; Noteworthy
	      </a>
	      <br />
	    </li>
	    <li>RAP 1.1.1 Service Release, based on Eclipse 3.4&nbsp;&nbsp;
	      <a href="http://archive.eclipse.org/rt/rap/downloads/rap-1.1.1-SR1-target-3.4-20080917-1625.zip">
	        rap-1.1.1-SR1-target-3.4-20080917-1625.zip
	      </a>
	      <br />
	      <a href="http://www.eclipse.org/rap/noteworthy/news_11.php">
	        New &amp; Noteworthy
	      </a>
	      <br />
	    </li>
	  </ul>
	</div>
</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
