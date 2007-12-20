<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP Project - New and Noteworthy";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
    <h1>RAP New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things available in the respective 
      builds.</p>
    <ul>
      <li><a href="index_11M1.php">RAP 1.1 M1</a>
        <p style="margin-top: 5px">
          Lists some of the more noteworthy things that will be available in 
          milestone build M1 (Januar 7, 2008) and meanwhile serves to document
          the development progress.    
          <br />
          All features documented here can be obtained from 
          <a href="../cvs.php">CVS HEAD</a>.             
        </p>
      </li>
      <li><a href="index_10.php">RAP Release 1.0</a>
        <p style="margin-top: 5px">
          Listed are some of the more noteworthy things available in the first 
          release build (October 10, 2007) which is available for 
          <a href="http://www.eclipse.org/rap/downloads.php">download</a>.
        </p>        
      </li>
    </ul>
  </div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
