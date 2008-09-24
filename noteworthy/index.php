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
      <li><strong>RAP 1.2 M2 Milestone Build</strong>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things that will be available in the 
          respective milestone builds towards version 1.2.
          <ul>
            <li><a href="news_12M2.php">M2 (October 8, 2008)</a></li>
          </ul>
          All features listed there can also be obtained from
          <a href="http://www.eclipse.org/rap/downloads/cvs.php">CVS HEAD</a>.
        </p>        
      </li>
      <li><a href="relnotes111.php">RAP 1.1.1 Service Release</a>
        <p style="margin-top: 5px">
          A summary of the improvements in the 1.1.1 service release (September 
          23, 2008) which is available for 
          <a href="http://www.eclipse.org/rap/downloads/archive.php">download</a>.
        </p>        
      </li>
      <li><a href="news_11.php">RAP 1.1 Release</a>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things available in the second 
          release build (June 25, 2008) which is available for 
          <a href="http://www.eclipse.org/rap/downloads/index.php">download</a>.
        </p>        
      </li>
      <li><a href="relnotes101.php">RAP 1.0.1 Service Release</a>
        <p style="margin-top: 5px">
          A summary of the improvements in the 1.0.1 service release (December 
          7, 2007) which is available for 
          <a href="http://www.eclipse.org/rap/downloads/archive.php">download</a>.
        </p>        
      </li>
      <li><a href="news_10.php">RAP 1.0 Release</a>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things available in the first 
          release build (October 10, 2007) which is available for 
          <a href="http://www.eclipse.org/rap/downloads/archive.php">download</a>.
        </p>        
      </li>
    </ul>
  </div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
