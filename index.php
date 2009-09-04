<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these.
$pageTitle 		= "Rich Ajax Platform (RAP)";
$pageKeywords	= "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor		= "Jochen Krause";

$html = <<<EOHTML
<div id="maincontent">
  <div id="midcolumn">
  <h1>Eclipse Rich Ajax Platform Home</h1>
    <p align="center">
      <img src="images/screens.png" width="500" height="248" border="0"/>
    </p>  
      The RAP project enables developers to build rich, Ajax-enabled 
      Web applications by using the Eclipse development model, plug-ins 
      with the well known Eclipse workbench extension points, JFace, and a 
      widget toolkit with SWT API (using <a href="http://qooxdoo.org">
      qooxdoo</a> for the client-side presentation). The project is part
      of the <a href="http://wiki.eclipse.org/Galileo">Galileo</a> release 
      train and has released its version 1.2.
    <br />
    <br />
    <a href="about.php">Learn more ...</a>
  </div>

 <div id="rightcolumn">
  <div style="margin-right:10px">
  
    <div class="sideitem">
    <h6>Active Contributors</h6>
     <ul>
      <li>
        <a href="http://eclipsesource.com" target="_blank">EclipseSource</a>
      </li>
      <li>
        <a href="http://oneandone.com" target="_blank">1&1</a>
      </li>
      <li>
        <a href="http://www.cas.de/English/Home.asp" target="_blank">CAS</a>
      </li>
      <li>
        <a href="http://www.uid.com" target="_blank">UID</a>
      </li>
     </ul>
    </div>

    <div class="sideitem">
      <h6>Upcoming events</h6>
     <ul>
       <li>
         <a href="http://www.eclipse.org/community/e4webinar/abstracts.php" 
            target="_blank">
            E4 Webinars</a>
         <span><br />August 26<sup>th</sup> 2009</span>
       </li>
      <li>
        <a href="http://www.eclipsecon.org/summiteurope2009/" 
           target="_blank">
           Eclipse Summit Europe 2009</a>
         <span><br />October 27<sup>th</sup>-29<sup>th</sup> 2009</span>
       </li>
     </ul>
    </div>
    
    <div class="sideitem">
     <h6>Quicklinks</h6>
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
         </tr>
       </table>
    </div>
  </div>  
 </div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
