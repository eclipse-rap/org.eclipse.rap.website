<?php                                                             require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");  $App  = new App();  $Nav  = new Nav();  $Menu   = new Menu();   include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

  #*****************************************************************************
  # Initial revision: Frank Appel
  #****************************************************************************

  #
  # Begin: page-specific settings.  Change these. 
$pageTitle    = "RAP Project - CVS";
$pageKeywords = "AJAX, rap, w4t, eclipse rap";
$pageAuthor   = "Frank Appel";

  # Paste your HTML content between the EOHTML markers! 
$html = <<<EOHTML


<div id="midcolumn">
  <h1>CVS</h1>

  <div class="homeitem3col">
    <h3>Browse CVS</h3>
    <p style="margin:10px">
      You can browse the sources online with 
      <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.rap/?root=RT_Project">
      this web interface</a>.
    </p>
  
    <h3>CVS Checkout</h3>
  
    <p style="margin:10px">
      All projects can be found in the <code>org.eclipse.rap</code> module of 
      the <code>:pserver:dev.eclipse.org:/cvsroot/rt</code> repository.
    <p/>
    <p style="margin:10px">
      For easier consumption, we provide 
      <a href="http://help.eclipse.org/ganymede/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/tasks-cvs-project-set.htm">Team Project Sets</a>
      that contain pointers to the relevant RAP projects from the CVS repository.
    <p/>
    <p style="margin:10px">
      The project sets are created under the assumption that your target 
      platform points to the most recent RAP target build that can be obtained 
      from the <a href="downloads/index.php">downloads page</a>. Other setups
      may also work but are not supported. 
     </p>
     <p style="margin:10px">
      After you have downloaded the file, 
      <ol>
        <li>From the <strong>File</strong> menu, choose <strong>Import</strong>.
        This will open the <strong>Import dialog</strong>.</li>
        <li>In the this dialog, choose <strong>Team &gt; Team Project Set</strong>
        and click <strong>Next</strong>.</li>
        <li>Browse for or type in the name of the file containing the project set 
        and click Finish.</li>
        <li>The projects contained in the project set will be fetched from the 
        repository.</li>
      </ol>
    </p>
    
    <p style="margin:10px">
      <strong>Available Team Project Set(s)</strong>
      <ul>
        <li>
          <a href="resources/rap.psf">
            <img src="images/icon_save.gif" />&nbsp;&nbsp;RAP User Team Project Set
          </a>
          <br />
          Contains all the projects necessary to develop applications based on 
          RAP. Individual components (e.g. from the <a href="sandbox.php">Sandbox</a>)
          can also be obtained 
          <a href="http://wiki.eclipse.org/index.php/CVS_Howto#Anonymous_CVS">directly from CVS.</a>
        </li>
      </ul>
    </p>
    
    <p style="margin:10px">
      <strong>Note:</strong> these project sets specify anonymous pserver access. 
      If that does not work for you see the <strong>CVS and firewalls</strong> 
      section in the
      <a href="http://wiki.eclipse.org/CVS_Howto#CVS_and_firewalls">CVS Howto</a>.
    </p>    
  
    <p style="margin:10px">
      We are maintaining a <a href="noteworthy/index.php">
      New and Noteworthy</a> in sync with the development progress in CVS to 
      ease adoption of new features for you.
    </p>
  </div>
</div>
EOHTML;


  # Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
