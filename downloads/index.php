<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - Downloads";
$pageKeywords	= "AJAX, rap, eclipse rap";
$pageAuthor		= "Jochen Krause";

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

<div id="midcolumn">
    <h1>Downloads</h1>

    <div class="homeitem3col">
      <h3>Tooling Update Site</h3>
      <p style="margin: 10px">
        This is the most convenient way to get RAP. The update site contains 
        the target platform that is also available as a separate download, 
        bundled with useful tools, documentation and examples.
        See the <a href="../gettingstarted.php">getting started</a> guide 
        for a detailed description on how to install RAP using the update site. 
      </p>
      <p style="margin: 10px"><b>1.2 M4 Milestone Build</b></p>
      <p style="margin: 10px 10px 10px 20px">
        The update site is
        <br />
        <b>http://download.eclipse.org/rt/rap/1.2/update</b>
        <br />
        <br />
        We also provide a zipped version for download:
        <br />
        <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.2/tooling/rap-sdk-1.2.0-M4-site-20081223-1242.zip">
          <img src="../images/icon_save.gif" alt="Update Site Zip"/>
          &nbsp;&nbsp;
          rap-sdk-1.2.0-M4-site-20081223-1242.zip
        </a>
        for use with Eclipse 3.3, 3.4 and 3.5
      </p>
      <p style="margin: 10px"><b>1.1.1 Service Release</b></p>
      <p style="margin: 10px 10px 10px 20px">
        The update site is
        <br />
        <b>http://download.eclipse.org/rt/rap/update-site</b>
        <br />
        <br />
        We also provide zipped versions for download
        <br />
        <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/rap-sdk-1.1.1-SR1-site-20080917-1637.zip">
          <img src="../images/icon_save.gif" alt="Update Site Zip"/>
          &nbsp;&nbsp;
          rap-sdk-1.1.1-SR1-site-20080917-1637.zip
        </a>
        for use with Eclipse 3.3 and 3.4
      </p>
    </div>  
      
    <div class="homeitem3col">
      <h3>Target Platform</h3>
      <p style="margin: 10px">
        Since RCP and RAP bundles within the same instance do not work, we
        provide target platforms for download.
      </p>
      <p style="margin: 10px">
      After downloading, extract the file in a convenient location, say <code>
      c:\\target</code> and start Eclipse. Open <b>Window &gt; Preferences</b>, 
      go to the <b>Plug-in Development &gt; Target Platform</b> preference page, 
      set the <b>Location</b> to the eclipse sub-directory of the extracted archive
      (e.g. <code>c:\\target\\eclipse</code>). Finally click <b>Reload</b>. You 
      should see the just downloaded plug-ins appear in the <b>Plug-ins</b> list.
      </p>
      <p style="margin: 10px">
      Note: if doing this with a workspace that already contains projects that
      depend on the target, you may get compile errors. Restarting Eclipse and/or
      doing a clean build will help.
      </p>
      <p style="margin: 10px"><b>1.2 M4 Milestone Build</b></p>
      <p style="margin: 10px 10px 10px 20px">
        <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.2/target/rap-1.2.0-M4-target-3.5-20081223-1131.zip">
          <img src="../images/icon_save.gif" />
          &nbsp;&nbsp;
          rap-1.2.0-M4-target-3.5-20081223-1131.zip
        </a>
        based on Eclipse 3.5 &nbsp;&nbsp;
        <a href="../noteworthy/news_12M4.php">New &amp; Noteworthy</a>
      </p>
      <p style="margin: 10px"><b>1.1.1 Service Release</b></p>
      <p style="margin: 10px 10px 10px 20px">
        <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/rap-1.1.1-SR1-target-3.4-20080917-1625.zip">
          <img src="../images/icon_save.gif" />
          &nbsp;&nbsp;
          rap-1.1.1-SR1-target-3.4-20080917-1625.zip
        </a>
        based on Eclipse 3.4 &nbsp;&nbsp;
        <a href="../noteworthy/relnotes111.php">Release Notes</a>
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
