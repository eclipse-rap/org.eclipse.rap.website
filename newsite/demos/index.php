<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Rich Ajax Platform (RAP) Project";
	$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
	$pageAuthor		= "Jochen Krause";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="container">
  <div id="midcolumn">
    <h1>Rich Ajax Platform (RAP) Project</h1>
    <p>&nbsp;</p>
    <table width="800" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td width="352"><img src="controls.png" alt="controls" width="352" height="268" /></td>
        <td width="413" valign="top"><h2 align="left">RWT Controls Demo</h2>
          <p>RAP offers an UI concept (workbench) analogical to RCP that combines repeating complex programming tasks into predefined components.</p></td>
      </tr>
      <tr>
        <td><img src="webworkbench.png" alt="workbench" width="352" height="324" /></td>
        <td valign="top"><h2>RAP Workbench Demo</h2>
          <p> <a href="http://rap.innoopract.com/rapdemo/rap">See a workbench demo online</a>. </p></td>
      </tr>
      <tr>
        <td><img src="maildemo.png" alt="maildemo" width="343" height="268" /></td>
        <td valign="top"><h2>RAP (RCP) maildemo</h2>
          <p><a href="http://rap.eclipse.org/rapdemo/maildemo" target="_blank">See the RAP (RCP) maildemo online</a></p></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    </p>
    <h2>Third Party demos based on RAP</h2>
    <table width="800" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td colspan="2"><h2>Eclipse Discovery</h2></td>
      </tr>
      <tr>
        <td width="464" valign="top"><img src="discovery.png" alt="discovery" width="464" height="400" /></td>
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