<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these.
$pageTitle 		= "Rich Ajax Platform (RAP) Project";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

$html = <<<EOHTML
<div id="container">
<div id="midcolumn" style="width:80%">
  <table width="100%" border="0" cellpadding="5">
    <tr>
      <td colspan="2"><div align="center"><img src="../images/rap_start.png" alt="Platzhalter" width="420" height="161" border=0></div></td>
    </tr>
    <tr>
      <td><table border="0" cellpadding="5">
          <tr>
            <td width=20></td>
            <td><a href="/rap/newsite/community"><img border=0 src="images/community.jpg"></a></td>
            <td><table border="0" cellpadding="0">
                <tr>
                  <td><font size=+1><a href="/rap/newsite/demos">Demos</a></font></td>
                </tr>
                <tr>
                  <td>See some demos here</td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td width=20></td>
            <td><a href="/rap/newsite/downloads"><img border=0 src="images/downloads.gif"></a></td>
            <td><table border="0" cellpadding="0">
                <tr>
                  <td><font size=+1><a href="/rap/newsite/downloads">Downloads</a></font></td>
                </tr>
                <tr>
                  <td>Get the latest RAP release</td>
                </tr>
              </table></td>
          </tr>
        </table></td>
      <td valign="top">The RAP project aims to enable developers to build rich, Ajax-enabled Web applications by using the Eclipse development model, plug-ins with the well known Eclipse workbench extenstion points and a widget toolkit with SWT API (plus JFace). The project is in the validation phase.</td>
    </tr>
  </table>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
