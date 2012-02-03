<?php

function createHeaderAndNavigation( $navPosition ) {
  $html =   createMainNavigation( $navPosition[ 0 ] )
          . createHeaderBar( $navPosition[ 0 ] )
          . createJavaScript( $navPosition[ 0 ], $navPosition[ 1 ] );
  return $html;
}

function createMainNavigation( $navPos ) {
  foreach( array( "demos", "download", "help", "contribute" ) as $entry ) {
    $classes[ $entry ] = $navPos === $entry ? " class=\"active\"" : "";
  }
  $html = <<<EOHTML
<div id="header">
  <a href="/rap/"><div id="rap-logo"></div></a>
  <div id="navigation">
    <ul>
      <li${classes["demos"]}>
        <a href="/rap/demos/">Demos</a>
        <ul class="second-level-nav">
          <li><a href="/rap/demos/">Online Demos</a></li>
          <li><a href="/rap/users/">Who uses RAP?</a></li>
        </ul>
      </li>
      <li${classes["download"]}>
        <a id="rap-button-download" href="/rap/downloads/">Download</a>
        <ul class="second-level-nav">
          <li><a href="/rap/downloads/">Download RAP</a></li>
          <li><a href="/rap/noteworthy/">New and Noteworthy</a></li>
        </ul>
      </li>
      <li${classes["help"]}>
        <a id="rap-button-help" href="/rap/support/">Get Help</a>
        <ul class="second-level-nav">
          <li> <a href="/rap/documentation/"> Documentation </a> </li>
          <li> <a href="/rap/support/"> Support </a> </li>
          <li> <a href="/rap/getting-started/"> Getting Started </a> </li>
          <li> <a href="/rap/support/professional-services/"> Professional Services </a> </li>
        </ul>
      </li>
      <li${classes["contribute"]}>
        <a id="rap-button-contribute" href="/rap/getting-involved/">Contribute</a>
        <ul class="second-level-nav">
          <li> <a href="/rap/getting-involved/"> Getting Involved </a> </li>
          <li> <a href="/rap/bugs/"> Bugs </a> </li>
          <li> <a href="/rap/incubator/"> Incubator </a> </li>
          <li> <a href="/rap/source/"> Source Code </a> </li>
        </ul>
      </li>
    </ul>
    <div class="stop"></div>
  </div>
</div>
EOHTML;
  return $html;
}

function createHeaderBar( $topLevel ) {
  $headerBar = '<div id="nav-bar">'
             . '<div id="breadcrumb-container">'
             . createBreadcrumbMenu()
             . createAdditionalLinks( $topLevel )
             . '<div class="antifloat"></div>'
             . '</div>'
             . '</div>';
  return $headerBar;
}

function createBreadcrumbMenu() {
  $pathElements = extractRequestPathElements();
  $breadcrumbEntries = createLinkURLMap( $pathElements );
  $breadcrumb = '<ul id="breadcrumb">';
  $breadcrumb .= '<li><a href="http://eclipse.org/">eclipse.org</a></li>';
  foreach( $breadcrumbEntries as $linkName => $linkURL  ) {
    $breadcrumb .= '<li><a href="' . $linkURL . '">' . $linkName . '</a></li>';
  }
  $breadcrumb .= '</ul>';
  return $breadcrumb;
}

function extractRequestPathElements() {
  $requestURL = $_SERVER[ 'REQUEST_URI' ];
  $requestURL = preg_replace( "|^/(.*?)/?$|", "\\1", $requestURL );
  return explode( "/", $requestURL );
}

function createLinkURLMap( $pathElements ) {
  $linkURLMap = array();
  $pathElementsLength = count( $pathElements );
  for( $i = 0; $i < $pathElementsLength; $i++ ) {
    $linkName = filterPathElement( $pathElements[ $i ] );
    $linkURLMap[ $linkName ] = createLinkURL( $pathElements, $i );
  }
  return $linkURLMap;
}

function filterPathElement( $pathElement ) {
  $result = preg_replace( "!(\.php|\.html*)?$!", "", $pathElement );
  $result = preg_replace( "!(news_)?!", "", $result );
  $result = preg_replace( "!(\?build=)?!", "", $result );
  $result = str_replace( "_", " ", $result);
  return $result;
}

function createLinkURL( $pathElements, $pathLength ) {
  $linkURL = '';
  for( $i = 0; $i <= $pathLength; $i++ ) {
    $linkURL .= '/' . $pathElements[ $i ];
  }
  return $linkURL;
}

function createAdditionalLinks( $topLevel ) {
  $linklist = '';
  if( $topLevel === "help" ) {
    $linklist .= createHelpLinks();
  }
  else if( $topLevel === "home" ) {
    $linklist .= createAboutLink();
  }
  return $linklist;
}

function createHelpLinks() {
  $html = <<<EOHTML
  <ul id="links">
    <li>
      <a id="rap-nav-getting-started" href="http://wiki.eclipse.org/RAP/FAQ">
        FAQ
      </a>
    </li>
    <li>
      <a id="rap-nav-getting-started" href="http://wiki.eclipse.org/RAP">
        Wiki
      </a>
    </li>
  </ul>
EOHTML;
  return $html;
}

function createAboutLink() {
  $html = <<<EOHTML
  <ul id="links">
    <li>
      <a href="http://eclipse.org/projects/project.php?id=rt.rap">
        About this Project
      </a>
    </li>
  </ul>
EOHTML;
  return $html;
}

function createJavaScript( $topLevel, $secondLevel ) {
  $html = <<<EOHTML
<script type="text/javascript">
  $( "#rap-button-$topLevel" ).addClass( "active" ).siblings().removeClass( "active" );
</script>
EOHTML;
  return $html;
}

?>
