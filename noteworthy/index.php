<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP - New and Noteworthy";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "The RAP Team";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
    <h1>RAP New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things available in the respective 
      builds.</p>
    <ul>
      <li><a href="1.4/">RAP 1.4 Release</a>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things available in the RAP 1.4
          release build which will be available on June 22<sup>nd</sup>, 2011).
        </p>
      </li>
      <li><a href="1.3/">RAP 1.3 Release</a>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things available in the RAP 1.3
          release build (June 23<sup>th</sup>, 2010) which is available for 
          <a href="/rap/downloads/">download</a>.
        </p>
      </li>
      <li><a href="relnotes122.php">RAP 1.2.2 Service Release</a>
        <p style="margin-top: 5px">          
          A summary of the improvements in the 1.2.2 service release 
          (February 26<sup>th</sup>, 2010) which is availble for
          <a href="/rap/downloads/1.2/">download</a>.
        </p>
      </li>
      <li><a href="relnotes121.php">RAP 1.2.1 Service Release</a>
        <p style="margin-top: 5px">
          A summary of the improvements in the 1.2.1 service release 
          (September 25<sup>th</sup>, 2009) which is availble for
          <a href="/rap/downloads/1.2/">download</a>.
        </p>
      </li>
      <li><a href="1.2/">RAP 1.2 Release</a>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things available in the RAP 1.2
          release build (June 24<sup>th</sup>, 2009) which is available for 
          <a href="/rap/downloads/1.2/">download</a>.
        </p>
      </li>
      <li><a href="relnotes112.php">RAP 1.1.2 Service Release</a>
        <p style="margin-top: 5px">
          A summary of the improvements in the 1.1.2 service release (February
          25, 2009) which is available for 
          <a href="/rap/downloads/1.1/">download</a>.
        </p>
      </li>
      <li><a href="relnotes111.php">RAP 1.1.1 Service Release</a>
        <p style="margin-top: 5px">
          A summary of the improvements in the 1.1.1 service release (September 
          23, 2008) which is available for 
          <a href="/rap/downloads/1.1/">download</a>.
        </p>
      </li>
      <li><a href="1.1/">RAP 1.1 Release</a>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things available in the second 
          release build (June 25, 2008) which is available for 
          <a href="/rap/downloads/1.1/">download</a>.
        </p>
      </li>
      <li><a href="relnotes101.php">RAP 1.0.1 Service Release</a>
        <p style="margin-top: 5px">
          A summary of the improvements in the 1.0.1 service release (December 
          7, 2007) which is available for 
          <a href="/rap/downloads/1.0/">download</a>.
        </p>
      </li>
      <li><a href="1.0/">RAP 1.0 Release</a>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things available in the first 
          release build (October 10, 2007) which is available for 
          <a href="/rap/downloads/1.0/">download</a>.
        </p>
      </li>
    </ul>
  </div>
</div>

EOHTML;

# Generate the web page
generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
