<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - Downloads";
$pageKeywords	= "AJAX, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

<div id="midcolumn">
		<h1>$pageTitle</h1>

    <div class="homeitem3col">
      <h3>1.0 Release - Tooling Update Site</h3>
      <p>
      bla, bla
      </p>
      <ul>
        <li>Eclipse 3.3
          <br />
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-sdk-1.0-R-site-3.3-200710091107.zip">
            <img src="download.gif" title="Update Site Zip" alt="Update Site Zip"/>
          </a>
          <b>http://download.eclipse.org/technology/rap/update-site/</b>
        </li>
      </ul>
    </div>  
      
    <div class="homeitem3col">
      <h3>1.0 Release - Target Platform</h3>
      <p>
      Since RCP and RAP bundles within the same instance do not work, we provide 
      target platforms for download. This is because RAP uses the same namespace 
      as RCP.
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
      <ul>
        <li>RAP 1.0 for Eclipse 3.2
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-R-target-3.2-20071008-1834.zip">
            <img src="download.gif" />
            rap-1.0-R-target-3.2-20071008-1834.zip
          </a>
          <br />
          RAP 1.0 for Eclipse 3.3
          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/rap/rap-1.0-R-target-3.3-20071008-1834.zip">
            <img src="download.gif" />
            rap-1.0-R-target-3.3-20071008-1834.zip
          </a>
          <br />
          See <a href="gettingstarted.php">here</a> for a guide on how to get 
          started.
        </li>
      </ul>
    </div>
    
   <div class="homeitem3col" style="width:95%; border:none; margin-left:0px">
     <table>
       <tr>
         <td>
           <img border=0 src="/mylyn/images/archives.gif"></a>
         </td>
         <td>
           <table>
             <tr>
               <td>
                 <h3><a href="/mylyn/builds">Archives and other builds</a></h3>
               </td>
               <td>RAP 1.0 RC1 older versions, Sandbox</td> 
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
