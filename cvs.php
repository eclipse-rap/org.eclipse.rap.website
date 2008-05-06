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
    <h3>CVS Checkout</h3>
  
    <p style="margin:10px">
      We provide a 
      <a href="http://help.eclipse.org/help33/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/tasks-cvs-project-set.htm">Team Project Set</a>
      that contains pointers to the relevant RAP projects from the CVS repository.
    <p/>
    <p>
      The project set was created under the assumption that your target 
      platform points to the most recent RAP target build that can be obtained 
      from the <a href="downloads/index.php">downloads page</a>. Other setups
      may also work but are not supported. 
     </p>
     <p>
      After you have downloaded the file, 
      <ol>
        <li>From the <strong>File</strong> menu, choose <strong>Import</strong>.
        This will open the <strong>Import dialog</strong>.</li>
        <li>In the Import dialog, choose <strong>Team &gt; Team Project Set</strong>
        and click <strong>Next</strong>.</li>
        <li>Browse for or type in the name of the file containing the project set 
        and click Finish.</li>
        <li>The projects contained in the project set will be fetched from the 
        repository.</li>
      </ol>
      <!--
      Assuming you are using <em>Eclipse</em>, the easiest way to get everything 
      you need is to "import" the team project set denoted below. After you have
      downloaded the file, choose <strong>File</strong> &gt; 
      <strong>Import</strong> from the main menu, which opens a dialog. Select 
      <strong>Team</strong> &gt; <strong>Team Project Set</strong> and click 
      <strong>>Next</strong>. Enter the path to the file you have just downloaded, 
      click <strong>Finish</strong> and the checkout of the necessary projects 
      will start.
      -->
    </p>
    
  <p>
    <ul>
      <li>
        <a href="resources/rap.psf">
          <img src="images/icon_save.gif" />&nbsp;RAP Team Project Set
        </a>
      </li>
    </ul>
    </p>    
  
    <p style="margin:10px">
      The above mentioned project set contains all the projects provided by 
      RAP. Individual components can also be obtained directly from CVS.
    </p>
  
    <p style="margin:10px">
      If you are new to Eclipse, this 
      <a href="http://wiki.eclipse.org/index.php/CVS_Howto#Anonymous_CVS">
      document</a> may help with accessing the Eclipse CVS. The 
      <strong>org.eclipse.rap</strong> module is located in the 
      <strong>/cvsroot/technology</strong> repository.
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
