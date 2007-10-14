<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these.
$pageTitle 		= "Rich Ajax Platform (RAP)";
$pageKeywords	= "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor		= "Jochen Krause";

$html = <<<EOHTML
<div id="maincontent">
  <div id="midcolumn">
  <h1>$pageTitle</h1>

  <table width="100%" border="0">
      <tr>
    <td colspan="2" align="center"><img src="../images/screens.png" alt="RAP" width="583" height="272" border="0"/></td>
      <td width="15%" rowspan="2" valign="top">
      </td>
    </tr>
      <tr>
        <td width="30%" valign="top"><table border="0">
          <tr>
            <td width="20"></td>
            <td><a href="/rap/newsite/community"><img border="0" src="images/community.jpg"/></a></td>
            <td><table border="0">
                <tr>
                  <td><font size="+1"><a href="/rap/newsite/demos">Demos</a></font></td>
                </tr>
                <tr>
                  <td>See some demos here</td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td width="20"></td>
            <td><a href="/rap/newsite/downloads"><img border="0" src="images/downloads.gif"/></a></td>
            <td><table border="0">
                <tr>
                  <td><font size="+1"><a href="/rap/newsite/downloads">Downloads</a></font></td>
                </tr>
                <tr>
                  <td>Get the latest RAP release</td>
                </tr>
              </table></td>
          </tr>
        </table></td>
        <td width="55%" valign="top">The RAP project aims to enable developers to build rich, Ajax-enabled Web applications by using the Eclipse development model, plug-ins with the well known Eclipse workbench extenstion points and a widget toolkit with SWT API (plus JFace). The project is in the validation phase.</td>
      </tr>
  </table>
  </div>

 <div id="rightcolumn">
  <div class="sideitem">
  <h6>Active Contributors</h6>
   <ul>
    <li>
      <a href="http://innoopract.com" target="_blank">Innoopract</a>
    </li>
    <li>
      <a href="http://oneandone.com" target="_blank">1&1</a>
    </li>
    <li>
      <a href="http://www.cas.de/English/Home.asp" target="_blank">CAS</a>
    </li>
   </ul>
  </div>

  <div class="sideitem">
   <h6>Meet the RAP team</h6>
   <ul>
    <li>
      <a href="http://jax.de/konferenzen/wjax07/sessions.php?language=de&tid=637" target="_blank">
      W-JAX, Munich, November 5-9 (German)</a>
      <span><br>
      RCP goes Web 2.0</span>
    </li>
    <li>
      <a href="http://www.eclipsecon.org/summiteurope2007/index.php?page=detail/&id=29" target="_blank">
      Eclipse Summit Europe, Ludwigsburg, October 10-11</a>
      <span><br>
      RCP goes Web 2.0 - The Rich Ajax Platform (RAP)</span>
    </li>
    <li>
      <a href="http://www.eclipsecon.org/2007/index.php?page=sub/&area=directors-choice" target="_blank">
      EclipseCon 2007, Santa Clara, March 5-8</a>
      <span><br>
      RAP - Eclipse style development for the web</span>
    </li>
    <li>
      <a href="http://eclipseforumeurope.com/konferenzen/efe07/overview_sessions_eng.php?track=3#session-ewd1" target="_blank">
      Eclipse Forum Europe, Wiesbaden, Germany, April 23-27</a>
      <span><br />
      Building Ajax applications with the Eclipse Rich Ajax Platform</span>
    </li>
  </div>
 </div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
