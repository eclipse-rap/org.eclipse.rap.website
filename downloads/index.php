<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "RAP Project - Downloads";
$pageKeywords   = "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor		= "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML

<div id="midcolumn">

  <h1>Downloads</h1>

  <div class="homeitem3col">
    <p>
      The most convenient way to get RAP is the <strong>Eclipse for
      RCP and RAP Developers</strong> package from the
      <a href="http://eclipse.org/downloads/?tab=developer">Helios Development 
        Builds download page</a>.
      This IDE already includes everything you need to develop RCP and RAP
      applications.
    </p>
    <p>
      <a href="http://eclipse.org/downloads/?tab=developer">
        <img src="../images/rcp-epp.png"/>
      </a>
    </p>
  </div>

  <div class="homeitem3col">
    <h3>RAP Tooling</h3>
    <p style="margin: 10px">
      The RAP Tooling contains useful tools, templates and documentation for RAP
      developers.
      It also installs the RAP target platform which is included.
      See the <a href="../gettingstarted.php">Getting Started Guide</a>
      for a description on how to install RAP and build your first RAP
      application.
    </p>

    <p style="margin: 10px"><b>1.3 RC2 Build</b></p>
    <p style="margin: 10px 10px 10px 20px">
      The latest 1.3 release candidate build, for use with Eclipse 3.5 and 3.6.
      <br />
        <a href="../noteworthy/news_13RC.php">New &amp; Noteworthy</a>
      <br />
      <br />
      The update site is
      <br />
      <b>http://download.eclipse.org/rt/rap/1.3/tooling</b>
      <br />
      <br />
      We also provide a zipped version for download:
      <br />
        <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.3/rap-tooling-1.3.0-RC2-20100523-2330.zip">
        <img src="../images/icon_save.gif" />
        &nbsp;&nbsp;
          rap-tooling-1.3.0-RC2-20100523-2330.zip
      </a>
    </p>

    <p style="margin: 10px"><b>1.2.2 Service Release</b></p>
    <p style="margin: 10px 10px 10px 20px">
      The latest stable version, for use with Eclipse 3.4 and 3.5.
      <br />
      <a href="../noteworthy/news_12.php">New &amp; Noteworthy</a>,
      <a href="../noteworthy/relnotes122.php">Service Release Notes</a>
      <br />
      <br />
      The update site is
      <br />
      <b>http://download.eclipse.org/rt/rap/1.2/update</b>
      <br />
    </p>

  </div>

  <div class="homeitem3col">
    <h3>RAP Runtime (Target Components)</h3>
    <p style="margin: 10px">
      This contains the RAP runtime, including sources and a simple demo
      application. Note that this is already included in the RAP Tooling.
      <br />
      To develop RAP applications you need to set the RAP runtime as your
      target platform. See the <a href="runtime-install.php">Target
      Installation</a> page for a description on how to work with the target
      platform.
    </p>
    <p style="border: 2px solid red; margin: 5px; padding: 5px;">
      This a target platform, do not try to install it into the Eclipse IDE!
    </p>

    <p style="margin: 10px"><b>1.3 RC2 Build</b></p>
    <p style="margin: 10px 10px 10px 20px">
      The latest release candidate build, based on Eclipse 3.6.
      <br />
        <a href="../noteworthy/news_13RC.php">New &amp; Noteworthy</a>
      <br />
      <br />
      The update site is
      <br />
      <b>http://download.eclipse.org/rt/rap/1.3/runtime</b>
      <br />
      <br />
      We also provide a zipped version for download:
      <br />
        <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.3/rap-runtime-1.3.0-RC2-20100523-2301.zip">
        <img src="../images/icon_save.gif" />
        &nbsp;&nbsp;
           rap-runtime-1.3.0-RC2-20100523-2301.zip
      </a>
    </p>

    <p style="margin: 10px"><b>1.2.2 Service Release</b></p>
    <p style="margin: 10px 10px 10px 20px">
      The latest stable version, based on Eclipse 3.5.
      <br />
      <a href="../noteworthy/news_12.php">New &amp; Noteworthy</a>,
      <a href="../noteworthy/relnotes122.php">Service Release Notes</a>
      <br />
      <br />
      The update site is
      <br />
      <b>http://download.eclipse.org/rt/rap/1.2/runtime-update</b>
      <br />
      <br />
      We also provide a zipped version for download:
      <br />
      <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.2/target/rap-runtime-1.2.2-R-20100126-1119.zip">
        <img src="../images/icon_save.gif" />
        &nbsp;&nbsp;
        rap-runtime-1.2.2-R-20100126-1119.zip
      </a>
    </p>
  </div>

  <div class="homeitem3col" style="width:95%; border:none; margin-left:0px">
     <table>
       <tr>
         <td>
           <a href="archive.php">
             <img src="../images/icon_archive.gif">
           </a>
         </td>
         <td>
           <table>
             <tr>
               <td>
                 <a style="font:16px Verdana, Arial, Helvetica, sans-serif; font-weight:bold"
                   href="archive.php">
                   Archives and other builds
                 </a>
               </td>
             </tr>
             <tr>
               <td>Older RAP versions and archived builds</td>
             </tr>
           </table>
         </td>
       </tr>
     </table>
  </div>

</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
