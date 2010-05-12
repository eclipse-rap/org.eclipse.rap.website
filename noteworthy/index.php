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
      <li><strong>RAP 1.3 Milestone Builds</strong>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things that will be available in the 
          respective milestone builds towards version 1.3 (June 23<sup>rd</sup> 
          2010).
          <ul>
            <li><a href="news_13RC.php">Release Candidates</a></li>
            <li><a href="news_13M7.php">M7 (May 4<sup>th</sup>, 2010)</a></li>
            <li><a href="news_13M6.php">M6 (March 19<sup>th</sup>, 2010)</a></li>
            <li><a href="news_13M5.php">M5 (February 5<sup>th</sup>, 2010)</a></li>
            <li><a href="news_13M4.php">M4 (December 18<sup>th</sup>, 2009)</a></li>
            <li><a href="news_13M3.php">M3 (November 13<sup>th</sup>, 2009)</a></li>
            <li><a href="news_13M2.php">M2 (October 2<sup>nd</sup>, 2009)</a></li>
            <li><a href="news_13M1.php">M1 (August 21<sup>st</sup>, 2009)</a></li>
          </ul>
          <p />        
          All features listed there can also be obtained from
          <a href="http://www.eclipse.org/rap/cvs.php">CVS HEAD</a>.
        </p>
        <p />        
      </li>
      <li><a href="relnotes122.php">RAP 1.2.2 Service Release</a>
        <p style="margin-top: 5px">          
          A summary of the improvements in the 1.2.2 service release 
          (February 26<sup>th</sup>, 2010) which is availble for
          <a href="http://www.eclipse.org/rap/downloads/archive.php">download</a>.
        </p>        
      </li>
      <li><a href="relnotes121.php">RAP 1.2.1 Service Release</a>
        <p style="margin-top: 5px">
          A summary of the improvements in the 1.2.1 service release 
          (September 25<sup>th</sup>, 2009) which is availble for
          <a href="http://www.eclipse.org/rap/downloads/archive.php">download</a>.
        </p>        
      </li>
      <li><a href="news_12.php">RAP 1.2 Release</a>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things available in the RAP 1.2
          release build (June 24<sup>th</sup>, 2009) which is available for 
          <a href="http://www.eclipse.org/rap/downloads/index.php">download</a>.
        </p>        
      </li>
      <li><a href="relnotes112.php">RAP 1.1.2 Service Release</a>
        <p style="margin-top: 5px">
          A summary of the improvements in the 1.1.2 service release (February
          25, 2009) which is available for 
          <a href="http://www.eclipse.org/rap/downloads/archive.php">download</a>.
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
          <a href="http://www.eclipse.org/rap/downloads/archive.php">download</a>.
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
