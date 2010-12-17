<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );

$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include( $App->getProjectCommon() );

$pageTitle = "RAP - 1.2 Downloads";
$pageKeywords = "ajax, rap, eclipse rap, 1.2, downloads";
$pageAuthor = "Ralf Sternberg";

$html = <<<EOHTML

<div id="midcolumn">
  <h1>RAP 1.2</h1>

  <p>
    Released June 2009 together with Eclipse Galileo.
    Two service releases are available, no further releases planned.
  </p>

  <h3>Tooling</h3>

  <p>
    For use with Eclipse 3.4 and 3.5.
  </p>

  <ul>
    <li>
      RAP 1.2.2 service release
      <a href="/rap/noteworthy/relnotes122.php">Release Notes</a>
      <br />
      <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.2/rap-tooling-1.2.2-R-20100126-1129.zip">
        rap-tooling-1.2.2-R-20100126-1129.zip
      </a>
    </li>

    <li>
      RAP 1.2 release
      <a href="/rap/noteworthy/1.2/">New &amp; Noteworthy</a>
      <br />
      <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.2/rap-tooling-1.2.0-R-20090616-1439.zip">
        rap-tooling-1.2.0-R-20090616-1439.zip
      </a>
    </li>
  </ul>

  <h3>Runtime</h3>

  <p>
    Based on Eclipse 3.5.
  </p>

  <ul>
    <li>
      RAP 1.2.2 service release
      <a href="/rap/noteworthy/relnotes122.php">Release Notes</a>
      <br />
      <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.2/rap-runtime-1.2.2-R-20100126-1119.zip">
        rap-runtime-1.2.2-R-20100126-1119.zip
      </a>
    </li>

    <li>
      RAP 1.2.1 service release
      <a href="/rap/noteworthy/relnotes121.php">Release Notes</a>
      <br />
      <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.2/rap-runtime-1.2.1-R-20090813-1453.zip">
        rap-runtime-1.2.1-R-20090813-1453.zip
      </a>
    </li>

    <li>
      RAP 1.2 release
      <a href="/rap/noteworthy/1.2/">New &amp; Noteworthy</a>
      <br />
      <a href="http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.2/rap-runtime-1.2.0-R-20090616-1425.zip">
        rap-runtime-1.2.0-R-20090616-1425.zip
      </a>
    </li>

    <li>
      RAP 1.2 RC4 build
      <a href="/rap/noteworthy/1.2/news_RC.php">
        New &amp; Noteworthy
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.2/rap-runtime-1.2.0-RC4-20090609-1255.zip">
        rap-runtime-1.2.0-RC3-20090602-1139.zip
      </a>
    </li>

    <li>
      RAP 1.2 RC3 build
      <a href="/rap/noteworthy/1.2/news_RC.php">
        New &amp; Noteworthy
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.2/rap-runtime-1.2.0-RC3-20090602-1139.zip">
        rap-runtime-1.2.0-RC3-20090602-1139.zip
      </a>
    </li>

    <li>
      RAP 1.2 RC2 build
      <a href="/rap/noteworthy/1.2/news_RC.php">
        New &amp; Noteworthy
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.2/rap-runtime-1.2.0-RC2-20090526-1306.zip">
        rap-runtime-1.2.0-RC2-20090526-1306.zip
      </a>
    </li>

    <li>
      RAP 1.2 RC1 build
      <a href="/rap/noteworthy/1.2/news_RC.php">
        New &amp; Noteworthy
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.2/rap-runtime-1.2.0-RC1-20090519-1552.zip">
       rap-runtime-1.2.0-RC1-20090519-1552.zip
      </a>
    </li>

    <li>
      RAP 1.2 M7 milestone build
      <a href="/rap/noteworthy/1.2/news_M7.php">
        New &amp; Noteworthy
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.2/rap-runtime-1.2.0-M7-20090505-1445.zip">
        rap-runtime-1.2.0-M6-20090505-1445.zip
      </a>
    </li>

    <li>
      RAP 1.2 M6 milestone build
      <a href="/rap/noteworthy/1.2/news_M6.php">
        New &amp; Noteworthy
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.2/rap-runtime-1.2.0-M6-20090319-1159.zip">
        rap-runtime-1.2.0-M6-20090319-1159.zip
      </a>
    </li>

    <li>
      RAP 1.2 M5 milestone build
      <a href="/rap/noteworthy/1.2/news_M5.php">
        New &amp; Noteworthy
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.2/rap-runtime-1.2.0-M5-20090210-1243.zip">
        rap-runtime-1.2.0-M5-20090210-1243.zip
      </a>
    </li>

    <li>
      RAP 1.2 M4 milestone build
      <a href="/rap/noteworthy/1.2/news_M4.php">
        New &amp; Noteworthy
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.2/rap-1.2.0-M4-target-3.5-20081223-1131.zip">
        rap-1.2.0-M4-target-3.5-20081223-1131.zip
      </a>
    </li>

    <li>
      RAP 1.2 M3 milestone build
      <a href="/rap/noteworthy/1.2/news_M3.php">
        New &amp; Noteworthy
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.2/rap-1.2.0-M3-target-3.5-20081118-1809.zip">
        rap-1.2.0-M3-target-3.5-20081118-1809.zip
      </a>
    </li>

    <li>
      RAP 1.2 M2 milestone build
      <a href="/rap/noteworthy/1.2/news_M2.php">
        New &amp; Noteworthy
      </a>
      <br />
      <a href="http://archive.eclipse.org/rt/rap/1.2/rap-1.2.0-M2-target-3.5-20081002-1417.zip">
        rap-1.2.0-M2-target-3.5-20081002-1417.zip
      </a>
    </li>
  </ul>
</div>

<div id="rightcolumn">
  {SIDEBAR:ARCHIVE}
</div>
EOHTML;

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
