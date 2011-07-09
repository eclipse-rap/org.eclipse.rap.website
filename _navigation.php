<?php

function createRapNavigation( $navPosition ) {
  $html =   createTopLevelNavigation()
          . createSecondLevelNavigation( $navPosition[ 0 ] )
          . createJavaScript( $navPosition[ 0 ], $navPosition[ 1 ] );
  return $html;
}

function createTopLevelNavigation() {
  $html = <<<EOHTML
<div id="big-header">
  <a href="/rap/"><div id="rap-logo"></div></a>
  <div id="rap-big-buttons">
    <ul>
      <li>
        <a id="rap-button-demos" href="/rap/demos/">
          <h3>Demos</h3>
        </a>
      </li>
      <li>
        <a id="rap-button-download" href="/rap/downloads/">
          <h3>Download</h3>
        </a>
      </li>
      <li>
        <a id="rap-button-documentation" href="/rap/documentation/">
          <h3>Documentation</h3>
        </a>
      </li>
      <li>
        <a id="rap-button-support" href="/rap/support/">
          <h3>Support</h3>
        </a>
      </li>
      <li>
        <a id="rap-button-contribute" href="/rap/getting-involved/">
          <h3>Contribute</h3>
        </a>
      </li>
    </ul>
    <div class="stop"></div>
  </div>
</div>
EOHTML;
  return $html;
}

function createSecondLevelNavigation( $topLevel ) {
  $head = <<<EOHTML
<div id="nav-bar">
  <ul>
EOHTML;
  $foot = <<<EOHTML
  </ul>
  <div class="stop"></div>
</div>
EOHTML;
  switch( $topLevel ) {
    case "demos":
      $main = createSecondLevelContentForDemos();
      break;
    case "download":
      $main = createSecondLevelContentForDownload();
      break;
    case "documentation":
      $main = createSecondLevelContentForDocumentation();
      break;
    case "support":
      $main = createSecondLevelContentForSupport();
      break;
    case "contribute":
      $main = createSecondLevelContentForContribute();
      break;
    default:
      $main = createSecondLevelContentForMain();
      break;
  }
  return $head . $main . $foot;
}

function createSecondLevelContentForMain() {
  $html = <<<EOHTML
    <li>
      <a id="rap-nav-noteworthy" href="/projects/project_summary.php?projectid=rt.rap">
        <h4>About this project</h4>
      </a>
    </li>
EOHTML;
  return $html;
}

function createSecondLevelContentForDemos() {
  $html = <<<EOHTML
    <li><h4>&nbsp;</h4></li>
EOHTML;
  return $html;
}

function createSecondLevelContentForDownload() {
  $html = <<<EOHTML
    <li>
      <a id="rap-nav-noteworthy" href="/rap/noteworthy/">
        <h4>New &amp; Noteworthy</h4>
      </a>
    </li>
    <li>
      <a id="rap-nav-incubator" href="/rap/incubator/">
        <h4>Incubator</h4>
      </a>
    </li>
EOHTML;
  return $html;
}

function createSecondLevelContentForDocumentation() {
  $html = <<<EOHTML
    <li>
      <a id="rap-nav-getting-started" href="/rap/getting-started/">
        <h4>Get Started</h4>
      </a>
    </li>
    <li>
      <a id="rap-nav-getting-started" href="http://wiki.eclipse.org/RAP/FAQ">
        <h4>FAQ</h4>
      </a>
    </li>
    <li>
      <a id="rap-nav-getting-started" href="http://wiki.eclipse.org/RAP">
        <h4>Wiki</h4>
      </a>
    </li>
EOHTML;
  return $html;
}

function createSecondLevelContentForSupport() {
  $html = <<<EOHTML
    <li>
      <a id="rap-nav-professional" href="/rap/support/professional-services/">
        <h4>Professional Services</h4>
      </a>
    </li>
EOHTML;
  return $html;
}

function createSecondLevelContentForContribute() {
  $html = <<<EOHTML
    <li>
      <a id="rap-nav-bugs" href="/rap/bugs/">
        <h4>Bugs</h4>
      </a>
    </li>
    <li>
      <a id="rap-nav-source" href="/rap/source/">
        <h4>Source Code</h4>
      </a>
    </li>
EOHTML;
  return $html;
}

function createJavaScript( $topLevel, $secondLevel ) {
  $html = <<<EOHTML

<script type="text/javascript">
  $( "#rap-button-$topLevel" ).addClass( "active" ).siblings().removeClass( "active" );
  $( "#rap-nav-$secondLevel" ).addClass( "active" ).siblings().removeClass( "active" );
</script>

EOHTML;
    
  return $html;
}

?>
