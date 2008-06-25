<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these.
$pageTitle 		= "Rich Ajax Platform (RAP)";
$pageKeywords	= "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor		= "Jochen Krause";

$html = <<<EOHTML
<div id="maincontent">
  <div id="midcolumn">

  <p align="center">
    <img src="images/screens.png" width="600" height="295" border="0"/>
  </p>
  <table width="100%" border="0">    
    <tr>
        <td width="30%" valign="top">
          <table border="0">
          <tr>
            <td width="20"></td>
            <td>
              <a href="demos.php">
                <img border="0" src="images/icon_demo.png"/>
              </a>
            </td>
            <td>
              <table border="0">
                <tr>
                  <td><font size="+1"><a href="demos.php">Demos</a></font></td>
                </tr>
                <tr>
                  <td>See some demos here</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td width="20"></td>
            <td>
              <a href="downloads/">
                <img border="0" src="images/icon_archive.gif"/>
              </a>
            </td>
            <td>
              <table border="0">
                <tr>
                  <td>
                    <font size="+1"><a href="downloads/">Downloads</a></font>
                  </td>
                </tr>
                <tr>
                  <td>Get the latest RAP release</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td width="20"></td>
            <td>
              <a href="gettingstarted.php">
                <img border="0" src="images/gettingstarted.png"/>
              </a>
            </td>
            <td>
              <table border="0">
                <tr>
                  <td>
                    <font size="+1"><a href="gettingstarted.php">Get started</a></font>
                  </td>
                </tr>
                <tr>
                  <td>Learn how to get started</td>
                </tr>
              </table>
            </td>
          </tr>          
          </table>
        </td>
        
        <td colspan="2" width="55%" valign="bottom">
          The RAP project enables developers to build rich, Ajax-enabled 
          Web applications by using the Eclipse development model, plug-ins 
          with the well known Eclipse workbench extenstion points, JFace, and a 
          widget toolkit with SWT API (using <a href="http://qooxdoo.org">
          qooxdoo</a> for the client-side presentation). The project has 
          graduated from incubation and released its 1.0 release.
        <br />
        <br />
        <a href="about.php">Learn more ...</a>
        </td>
      </tr>
  </table>
  </div>

 <div id="rightcolumn">
  <div style="margin-right:10px">
  
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
     <h6>RAP webinar</h6>
     <ul>
      <li>
        <a href="http://live.eclipse.org/node/450" target="_blank">
        RAP webinar, Feb 13</a>
        <span><br />50 minutes of slides and demos</span>
      </li>
    </div>

  
    <div class="sideitem">
     <h6>Meet the RAP Team</h6>
     <ul>
      <li>
        <a href="http://www.java-forum-stuttgart.de/abstracts.html#B7" 
          target="_blank">
        Java Forum Stuttgart 2008, July 3rd</a>
        <span><br />Erfahrungsbericht über die Anwendungsentwicklung mit Eclipse RAP</span>
      </li>
      <li>
        <a href="http://wiki.eclipse.org/Eclipse_DemoCamps_2008_-_Ganymede_Edition/Karlsruhe" 
          target="_blank">
        Ganymede DemoCamp, Karlsruhe, June 26th</a>
        <span><br />Neuerungen in Eclipse Ganymede: die Rich Ajax Platform</span>
      </li>
      <li>
        <a href="http://wiki.eclipse.org/Eclipse_DemoCamps_2008_-_Ganymede_Edition/Portland" 
          target="_blank">
        Ganymede DemoCamp, Portland, June 24th</a>
        <span><br />Java-based web-apps with Eclipse RAP</span>
      </li>
      <li>
        <a href="http://www.andrena.de/Entwicklertag/2008/Programm/" 
          target="_blank">
        Entwicklertag, Karlsruhe, May 7</a>
        <span><br />RAP 1.1 and single sourcing for RCP/RAP</span>
      </li>
      <li>
        <a href="http://www.eclipsist.org/eclipsist/2008/speech.do?page=frank_appel_s01" 
          target="_blank">
        EclipseIST, Istanbul, April 29</a>
        <span><br />RAP - Eclipse style development for the web</span>
      </li>
      <li>
        <a href="http://it-republik.de/jaxenter/jax/sessions.php?language=de&tid=762#session-18" 
          target="_blank">
        JAX, Wiesbaden, April 24</a>
        <span><br />RAP 1.1 and single sourcing for RCP/RAP</span>
      </li>
    </div>
    
  </div>  
 </div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
