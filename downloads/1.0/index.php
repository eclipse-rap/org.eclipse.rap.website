<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );

$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include( $App->getProjectCommon() );

$pageTitle = "RAP - 1.0 Downloads";
$pageKeywords = "ajax, rap, eclipse rap, 1.0, downloads";
$pageAuthor = "Ralf Sternberg";

$html = <<<EOHTML

<div id="midcolumn">
  <h1>RAP 1.0</h1>

  <p>
    Released October 2007.
    One service release is available.
  </p>

  <h3>Runtime</h3>

  <p>
    Based on Eclipse 3.2 / 3.3.
  </p>

  <ul>
    <li>
      RAP 1.0.1 Service Release
      <a href="http://www.eclipse.org/rap/noteworthy/relnotes101.php">
        Release Notes
      </a>
      <br />
      based on Eclipse 3.2:
      <a href="http://archive.eclipse.org/rt/rap/1.0/rap-1.0.1-R-target-3.2-20071207-1851.zip">
        rap-1.0.1-R-target-3.2-20071207-1851.zip
      </a>
      <br />
      based on Eclipse 3.3:
      <a href="http://archive.eclipse.org/rt/rap/1.0/rap-1.0.1-R-target-3.3-20071207-1851.zip">
        rap-1.0.1-R-target-3.3-20071207-1851.zip
      </a>
    </li>

    <li>
      RAP 1.0 Final
      <a href="http://www.eclipse.org/rap/noteworthy/1.0/">
        New &amp; Noteworthy
      </a>
      <br />
      based on Eclipse 3.2:
      <a href="http://archive.eclipse.org/rt/rap/1.0/rap-1.0.0-R-target-3.2-20071010-2241.zip">
        rap-1.0.0-R-target-3.2-20071010-2241.zip
      </a>
      <br />
      based on Eclipse 3.3
      <a href="http://archive.eclipse.org/rt/rap/1.0/rap-1.0.0-R-target-3.3-20071010-2241.zip">
        rap-1.0.0-R-target-3.3-20071010-2241.zip
      </a>
    </li>
  </ul>

</div>

<!--
<div id="rightcolumn">
  {SIDEBAR:ARCHIVE}
</div>
-->
EOHTML;

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
