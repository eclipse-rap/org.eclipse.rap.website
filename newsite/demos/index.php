<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "Rich Ajax Platform (RAP) Project";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML

<div id="container">
  <div id="midcolumn">
    <h1 class="style3">Rich Ajax Platform (RAP) Project</h1>
    <p>&nbsp;</p>
    <div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
      <table width="750" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="250"><a href="http://rap.eclipse.org/controlsdemo/controls" target="_blank"><img src="../../controls1.png" alt="controls" style="border: 1px solid #666;"/></a></td>
          <td width="500" valign="top"><h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">RWT Controls Demo</h2>
            <p>RAP offers an UI concept (workbench) analogical to RCP that combines repeating complex programming tasks into predefined components.</p></td>
        </tr>
      </table>
    </div>
    <div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
      <table width="750" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="250"><a href="http://rap.eclipse.org/rapdemo/workbench" target="_blank"><img src="../../webworkbench1.png" alt="workbench" style="border: 1px solid #666;"/></a></td>
          <td width="500" valign="top"><h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">RAP Workbench Demo</h2>
              <p> <a href="http://rap.innoopract.com/rapdemo/rap">See a workbench demo online</a>. </p></td>
        </tr>
      </table>
    </div>
    <div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
      <table width="750" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="250"><a href="http://rap.eclipse.org/maildemo/rap?startup=maildemo" target="_blank"><img src="../../maildemo1.png" alt="maildemo" style="border: 1px solid #666;"/></a></td>
          <td width="500" valign="top"><h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">RAP (RCP) maildemo</h2>
          <p><a href="http://rap.eclipse.org/rapdemo/maildemo" target="_blank">See the RAP (RCP) maildemo online</a></p></td>
        </tr>
      </table>
    </div>
    <p>&nbsp;</p>
    </p>
    <h2>Third Party demos based on RAP</h2>
    <table width="800" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td colspan="2"><h2>Eclipse Discovery</h2></td>
      </tr>
      <tr>
        <td width="464" valign="top"><img src="../../discovery.png" alt="discovery" style="border: 1px solid #666;"/></td>
        <td width="301" valign="top"><ul>
            <li>Choose from the entire Eclipse.org portfolio</li>
            <li>Add your favorite 3rd party plugins</li>
            <li>Get all in a single file download</li>
            <li>Get Eclipse 3.3 Europa</li>
          </ul>
          <p>Access the entire eclipse.org portfolio plus a large selection of the most important open-source plugins, tested for compatibility and consistency.</p></td>
      </tr>
    </table>
    <hr class="clearer" />
  </div>
</div>

	
EOHTML;


# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>