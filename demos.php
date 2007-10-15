<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "Rich Ajax Platform (RAP) Project";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="midcolumn">
<h1>RAP Demos</h1>
<p>Enjoy the demos below. <strong>Please be aware that the demos are run on a vserver 
  at eclipse.org that is managed by the project team only</strong>, and not a high 
  performance server supervised by sysadmins. Please make a post on the newsgroup 
  (linked from the menu on the left) if there are problems with the demo apps that 
  are not from third parties.</p>
  
<div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
  <table width="750" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td width="250">
        <a href="http://rap.eclipse.org/rapdemo/rms" target="_blank">
          <img src="images/webworkbench1.png" style="border: 1px solid #666;"/>
        </a>
      </td>
      <td width="500" valign="top">
        <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
          RAP Workbench Demo
        </h2>
        <p>
          <a href="http://rap.eclipse.org/rapdemo/rms" target="_blank">
            See a workbench demo online
          </a>
        </p>
        <p>
          <a href="http://rap.innoopract.com/rapdemo/rms" target="_blank">
            (Alternative Server)
          </a>
        </p>
        <p>This application shows a simple project management system, that 
        is build on top of RAP. Though it is not meant to be production 
        ready it shows a good bunch of the framework's possibilities.</p>
      </td>
    </tr>
  </table>
</div>

<div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
  <table width="750" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td width="250">
          <a href="http://rap.eclipse.org/maildemo/rap?startup=maildemo" target="_blank">
            <img src="images/maildemo1.png" style="border: 1px solid #666;"/>
          </a>
      </td>
      <td width="500" valign="top">
        <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
          RAP (RCP) Mail Demo
        </h2>
        <p>
          <a href="http://rap.eclipse.org/maildemo/rap?startup=maildemo" target="_blank">
            See the RAP (RCP) Mail Demo online
          </a>
        </p>
        <p>With very few changes the well-known RCP Mail Template can be 
        converted to RAP.</p>
      </td>
    </tr>
  </table>
</div>

<div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
  <table width="750" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td width="250">
        <a href="http://rap.eclipse.org/controlsdemo/controls" target="_blank">
          <img src="images/controls1.png" style="border: 1px solid #666;"/>
        </a>
      </td>
      <td width="500" valign="top">
        <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
          RWT Controls Demo
        </h2>
        <p> 
          <a href="http://rap.eclipse.org/controlsdemo/controls" target="_blank">
            See a RWT controls demo online
          </a>
        </p>
        <p>This demo shows what widgets there are in RWT and that they 
        behave very similar to the SWT widgets.</p>
      </td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>

<h1>Third Party demos based on RAP</h1>
<div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
  <table width="750" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="250" valign="top">
      <a href="http://eclipsediscovery.yoxos.com/discovery/rap" target="_blank">
        <img src="images/discovery1.png" style="border: 1px solid #666;"/>
      </a>
    </td>
    <td width="500" valign="top">
      <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
        Eclipse Discovery
      </h2>        	
      <p>
        <a href="http://eclipsediscovery.yoxos.com/discovery/rap" target="_blank">
          See discovery online
        </a>
      </p>
      <ul>
    	<li>Choose from the entire Eclipse.org portfolio</li>
        <li>Add your favorite 3rd party plugins</li>
        <li>Get all in a single file download</li>
        <li>Get Eclipse 3.3 Europa</li>
      </ul>
      <p>Access the entire eclipse.org portfolio plus a large selection of 
      the most important open-source plugins, tested for compatibility and 
      consistency.</p>
    </td>
  </tr>
  </table>
</div>
<hr class="clearer" />
<p>If you would like to get your application listed on this page please send an email 
to rap-dev@eclipse.org or to one of the committers.
</p>

</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>