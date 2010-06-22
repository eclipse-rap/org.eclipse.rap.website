<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );

$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include( $App->getProjectCommon() );

$pageTitle = "RAP Project - 1.1 Downloads";
$pageKeywords = "ajax, rap, eclipse rap, 1.1, downloads";
$pageAuthor = "Ralf Sternberg";

$html = <<<EOHTML

<div id="midcolumn">
  <h1>RAP 1.1</h1>

  <p>
    Released June 2008 together with Eclipse Ganymede.
    Two service releases are available.
  </p>

  <h3>Runtime</h3>

  <p>
    Based on Eclipse 3.4.
  </p>

  <ul>
    <li>RAP 1.1.2 Service Release, based on Eclipse 3.4&nbsp;&nbsp;
      <a href="http://www.eclipse.org/rap/noteworthy/relnotes112.php">
        Release Notes
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.1/rap-1.1.2-SR2-target-3.4-20090218-1212.zip">
        rap-1.1.2-SR2-target-3.4-20090218-1212.zip
      </a>
    </li>

    <li>RAP 1.1.1 Service Release, based on Eclipse 3.4&nbsp;&nbsp;
      <a href="http://www.eclipse.org/rap/noteworthy/relnotes111.php">
        Release Notes
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.1/rap-1.1.1-SR1-target-3.4-20080917-1625.zip">
        rap-1.1.1-SR1-target-3.4-20080917-1625.zip
      </a>
    </li>

    <li>RAP 1.1 Release, based on Eclipse 3.4&nbsp;&nbsp;
      <a href="http://www.eclipse.org/rap/noteworthy/1.1/">
        New &amp; Noteworthy
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.1/rap-1.1.0-R-target-3.4-20080613-1055.zip">
        rap-1.1.0-R-target-3.4-20080613-1055.zip
      </a>
    </li>
  </ul>

</div>
EOHTML;

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
