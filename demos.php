<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP Project - Demos";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

# NOTE: When changing this files' name, also update rap.eclipse.org/rap which
#       redirects to this page.

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="midcolumn">
<h1>Demos</h1>
<p>Enjoy the demos below.
  <!--
  <strong>Please be aware that the demos are run on 
  a vserver at eclipse.org that is managed by the project team only</strong>, 
  and not a high performance server supervised by sysadmins.
  -->
  Please post a message on the <a href="support.php">newsgroup</a> if you notice
  problems with the demo apps that are not from third parties.
</p>

<div style="margin: 10px 0px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 495px;">
  <a href="http://rap.eclipsesource.com/rapdemo/examples" target="_blank">
    <img src="images/demos/examples.png" style="border: 1px solid #666;" align="left" vspace="10" hspace="10" width="1250px" height="190px"/>
  </a>
  <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
    RAP Examples
  </h2>
  <p>
    <a href="http://rap.eclipsesource.com/rapdemo/examples" target="_blank">
      See the examples online
    </a>
  </p>
  <p>
    This application shows samples of the widgets available in RAP.
    Please note that it does not yet represent the complete widget set,
    but only a small selection.
  </p>
  <br clear="all">
</div>

<!--div style="margin: 10px 0px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 720px;">
  <table width="720" border="0" cellspacing="10" cellpadding="5">
    <tr>
      <td width="250">
        <a href="http://rap.eclipsesource.com/rapdemo/examples" target="_blank">
          <img src="images/demos/examples.png" style="border: 1px solid #666;"/>
        </a>
      </td>
      <td width="465" valign="top">
        <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
          RAP Examples
        </h2>
        <p>
          <a href="http://rap.eclipsesource.com/rapdemo/examples" target="_blank">
            See the examples online
          </a>
        </p>
        <p>This application shows samples of the widgets available in RAP.
        Please note that it does not yet represent the complete widget set,
        but only a small selection.
        </p>
      </td>
    </tr>
  </table>
</div-->

<div style="margin: 10px 0px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 720px;">
  <table width="720" border="0" cellspacing="10" cellpadding="5">
    <tr>
      <td width="250">
        <a href="http://rap.eclipsesource.com/rapdemo/rms" target="_blank">
          <img src="images/demos/webworkbench1.png" style="border: 1px solid #666;"/>
        </a>
      </td>
      <td width="465" valign="top">
        <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
          RAP Workbench Demo
        </h2>
        <p>
          <a href="http://rap.eclipsesource.com/rapdemo/rms" target="_blank">
            See a workbench demo online
          </a>
        </p>
        <p>This application shows a simple project management system, that 
        is build on top of RAP. Though it is not meant to be production 
        ready it shows a good bunch of the framework's possibilities.</p>
        <p>
        To demonstrate the NLS support, translations for 
        <a href="http://rap.eclipsesource.com/rapdemo/rms?locale=en" target="_blank">English</a>, 
        <a href="http://rap.eclipsesource.com/rapdemo/rms?locale=de" target="_blank">German</a> and 
        <a href="http://rap.eclipsesource.com/rapdemo/rms?locale=zh" target="_blank">Chinese</a> 
        are available. The latter requires your browser to support East 
        Asian languages.</p> 
        <p>Please note, the example data will be reset regularly.</p>
      </td>
    </tr>
  </table>
</div>

<p>&nbsp;</p>

<h1>Third Party applications based on RAP</h1>
<div style="margin: 10px 0px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 720px;">
  <table width="720" border="0" cellspacing="10" cellpadding="5">
  <tr>
    <td width="250" valign="top">
      <a href="http://ondemand.yoxos.com/geteclipse/start" target="_blank">
        <img src="images/demos/ondemand1.png" style="border: 1px solid #666;"/>
      </a>
    </td>
    <td width="465" valign="top">
      <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
        Yoxos On Demand
      </h2>        	
      <p>
        <a href="http://ondemand.yoxos.com/geteclipse/start" target="_blank">
          Free Eclipse downloads and updates
        </a>
      </p>
      <ul>
    	<li>Choose from the entire Eclipse.org portfolio</li>
        <li>Add your favorite 3rd party plugins</li>
        <li>Get all in a single file download</li>
        <li>Get Eclipse 3.4 Ganymede</li>
      </ul>
      <p>Access the entire eclipse.org portfolio plus a large selection of 
      the most important open-source plugins, tested for compatibility and 
      consistency.</p>
    </td>
  </tr>
  </table>
</div>

<div style="margin: 10px 0px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 720px;">
  <table width="720" border="0" cellspacing="10" cellpadding="5">
  <tr>
    <td width="250" valign="top">
      <a href="http://www.cas-pia.de/en/try.html" target="_blank">
        <img src="images/demos/pia.png" style="border: 1px solid #666;"/>
      </a>
    </td>
    <td width="465" valign="top">
      <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
        CAS PIA
      </h2>         
      <p>
        <a href="http://www.cas-pia.de/en/try.html" target="_blank">
          See CAS PIA guest account
        </a>
      </p>
      <p>A really powerful relationship management system based on RAP with a
      great look&feel. It provides</p>
      <ul>
        <li>Contact management</li>
        <li>Calendar</li>
        <li>Document management</li>
        <li>and many more feature...</li>
      </ul>
      <p>
      Click <i>Guest access</i> to launch the application.
      </p>
    </td>
  </tr>
  </table>
</div>

<hr class="clearer" />
<p>If you would like to get your application listed on this page please send an email 
to <a href="https://dev.eclipse.org/mailman/listinfo/rap-dev">rap-dev@eclipse.org</a>
 or to one of the committers.
</p>

</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>