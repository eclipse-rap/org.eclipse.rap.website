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
      <h3>RAP Tooling</h3>
      <p style="margin: 10px">
        This is the most convenient way to get RAP. The RAP Tooling contains 
        useful tools, templates and documentation. It also installs the RAP
        Runtime SDK which is included.
        See the <a href="../gettingstarted.php">getting started</a> guide
        for a description on how to install RAP and build your first RAP 
        application.
      </p>

      <p style="margin: 10px"><b>1.3 M2 Build</b></p>
      <p style="margin: 10px 10px 10px 20px">
        The latest 1.3 milestone build, for use with Eclipse 3.5 and 3.6.
        <br />
        <a href="../noteworthy/news_13M2.php">New &amp; Noteworthy</a>
        <br />
        <br />
        The update site is
        <br />
        <b>http://download.eclipse.org/rt/rap/1.3/tooling</b>
      </p>

      <p style="margin: 10px"><b>1.2.1 Service Release</b></p>
      <p style="margin: 10px 10px 10px 20px">
        The latest stable version, for use with Eclipse 3.4 and 3.5.
        <br />
        <a href="../noteworthy/news_12.php">New &amp; Noteworthy</a>,
        <a href="../noteworthy/relnotes121.php">Service Release Notes</a>
        <br />
        <br />
        The update site is
        <br />
        <b>http://download.eclipse.org/rt/rap/1.2/update</b>
        <br />
      </p>
      
      <!--
      <p style="margin: 10px"><b>1.1.2 Service Release</b></p>
      <p style="margin: 10px 10px 10px 20px">
        The update site is
        <br />
        <b>http://download.eclipse.org/rt/rap/update-site</b>
        <br />
        <br />
        We also provide zipped versions for download
        <br />
        <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/rap-sdk-1.1.2-SR2-site-20090218-1359.zip">
          <img src="../images/icon_save.gif" alt="Update Site Zip"/>
          &nbsp;&nbsp;
          rap-sdk-1.1.2-SR2-site-20090218-1359.zip
        </a>
        for use with Eclipse 3.3 and 3.4
      </p>
      -->
      
    </div>

    <div class="homeitem3col">
      <h3>RAP Runtime SDK</h3>
      <p style="margin: 10px">
        This contains the RAP runtime, including sources and a simple demo 
        application. Note that this is already included in the RAP Tooling.
        <br />
        To develop RAP applications you need to set the RAP Runtime SDK as your
        target platform. See the <a href="runtime-install.php">Runtime SDK 
        Installation</a> page for a description on how to work with the target 
        platform.
        <br />
        The RAP Runtime SDK is a target platform, do not try to install it into 
        the Eclipse IDE.        
      </p>

      <p style="margin: 10px"><b>1.3 M2 Build</b></p>
      <p style="margin: 10px 10px 10px 20px">
        The latest milestone build, based on Eclipse 3.6.
        <br />
        <a href="../noteworthy/news_13M2.php">New &amp; Noteworthy</a>
        <br />
        <br />
        The update site is
        <br />
        <b>http://download.eclipse.org/rt/rap/1.3/runtime</b>
        <br />
        <br />
        We also provide a zipped version for download:
        <br />
        <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.3/rap-runtime-1.3.0-M2-20090929-1121.zip">
          <img src="../images/icon_save.gif" />
          &nbsp;&nbsp;
           rap-runtime-1.3.0-M2-20090929-1121.zip 
        </a>
      </p>

      <p style="margin: 10px"><b>1.2.1 Service Release</b></p>
      <p style="margin: 10px 10px 10px 20px">
        The latest stable version, based on Eclipse 3.5.
        <br />
        <a href="../noteworthy/news_12.php">New &amp; Noteworthy</a>,
        <a href="../noteworthy/relnotes121.php">Service Release Notes</a>
        <br />
        <br />
        The update site is
        <br />
        <b>http://download.eclipse.org/rt/rap/1.2/runtime-update</b>
        <br />
        <br />
        We also provide a zipped version for download:
        <br />
        <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.2/target/rap-runtime-1.2.1-R-20090813-1453.zip">
          <img src="../images/icon_save.gif" />
          &nbsp;&nbsp;
          rap-runtime-1.2.1-R-20090813-1453.zip
        </a>
      </p>
      
      <!-- 
      <p style="margin: 10px"><b>1.1.2 Service Release</b></p>
      <p style="margin: 10px 10px 10px 20px">
        <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/rap-1.1.2-SR2-target-3.4-20090218-1212.zip">
          <img src="../images/icon_save.gif" />
          &nbsp;&nbsp;
          rap-1.1.2-SR2-target-3.4-20090218-1212.zip
        </a>
        based on Eclipse 3.4 &nbsp;&nbsp;
        <a href="../noteworthy/relnotes112.php">Release Notes</a>
      </p>
      -->
      
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
               <td>RAP 1.1 and older versions</td>
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
