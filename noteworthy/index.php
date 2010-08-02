<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );

$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include( $App->getProjectCommon() );

$pageTitle = "RAP - New and Noteworthy";
$pageKeywords = "Ajax, rap, w4t, eclipse rap";
$pageAuthor = "The RAP Team";

$html = <<<EOHTML
<div id="maincontent">

  <div id="midcolumn">

    <h1>RAP New and Noteworthy</h1>

    <p>
      Here are some of the more noteworthy things available in the respective 
      builds.
    </p>

    <ul>
      <li>
        <a href="1.4/">RAP 1.4 Milestones</a>
        <p style="margin-top: 5px">
          Listed are the noteworthy things available in the milestone builds
          for RAP 1.4, which will be available on June 22<sup>nd</sup>, 2011.
        </p>
      </li>
      <li>
        <a href="1.3/">RAP 1.3 Release</a>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things available in the RAP 1.3
          release build (June 23<sup>th</sup>, 2010) which is available for 
          <a href="/rap/downloads/">download</a>.
        </p>
      </li>
      <li>
        <a href="relnotes122.php">RAP 1.2.2 Service Release</a>
        <p style="margin-top: 5px">          
          A summary of the improvements in the 1.2.2 service release 
          (February 26<sup>th</sup>, 2010) which is availble for
          <a href="/rap/downloads/1.2/">download</a>.
        </p>
      </li>
      <li>
        <a href="relnotes121.php">RAP 1.2.1 Service Release</a>
        <p style="margin-top: 5px">
          A summary of the improvements in the 1.2.1 service release 
          (September 25<sup>th</sup>, 2009) which is availble for
          <a href="/rap/downloads/1.2/">download</a>.
        </p>
      </li>
      <li>
        <a href="1.2/">RAP 1.2 Release</a>
        <p style="margin-top: 5px">
          Listed are the more noteworthy things available in the RAP 1.2
          release build (June 24<sup>th</sup>, 2009) which is available for 
          <a href="/rap/downloads/1.2/">download</a>.
        </p>
      </li>
    </ul>
  </div>

  <div id="rightcolumn">
    <div class="sideitem">
      <h6>RAP Archives</h6>
      <ul>
        <li>
          <a href="/rap/downloads/1.3/">RAP 1.3 (2010)</a>
        </li>
        <li>
          <a href="/rap/downloads/1.2/">RAP 1.2 (2009)</a>
        </li>
        <li>
          <a href="/rap/downloads/1.1/">RAP 1.1 (2008)</a>
        </li>
        <li>
          <a href="/rap/downloads/1.0/">RAP 1.0 (2007)</a>
        </li>
      </ul>
    </div>
    </div>

</div>
EOHTML;

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
