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
        <ul class="second-level-nav">
        	<li><a href="/rap/demos/">Online Demos</a></li>
        	<li><a href="/rap/users/">Who uses RAP?</a></li>
        </ul>
      </li>
      <li>
        <a id="rap-button-download" href="/rap/downloads/">
          <h3>Download</h3>
        </a>
        <ul class="second-level-nav">
        	<li><a href="/rap/downloads/">Download RAP</a></li>
        	<li><a href="/rap/noteworthy/">New & Noteworthy</a></li>
        </ul>
      </li>
      <li>
        <a id="rap-button-help" href="/rap/support/">
          <h3>Get Help</h3>
        </a>
       <ul class="second-level-nav">
       		<li>
          	<a href="/rap/support/">
            	Support
          	</a>
        	</li>
        	<li>
          	<a href="/rap/getting-started/">
            	Getting Started
          	</a>
        	</li>
        	<li>
        		<a href="/rap/support/professional-services/">
            	Professional Services
          	</a>
        	</li>
        </ul>
      </li>
      <li>
      	 <a id="rap-button-contribute" href="/rap/getting-involved/">
          <h3>Contribute</h3>
        </a>
        <ul class="second-level-nav">
        	<li>
        		<a href="/rap/getting-involved/">
        			Getting Involved
        		</a>
      		</li>
        	<li>
        		<a href="/rap/bugs/">
        			Bugs
        		</a>
      		</li>
      		<li>
        		<a href="/rap/incubator/">
        			Incubator
        		</a>
      		</li>
      		<li>
        		<a href="/rap/source/">
        			Source Code
        		</a>
      		</li>
        </ul>
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
  $links = "";
  if( $topLevel === "help" ) {
    $links = createHelpLinks();
  }
  else if( $topLevel === "home" ) {
    $links = createAboutLink();
  }
  return $head . $links . $foot;
}

function createHelpLinks() {
  $html = <<<EOHTML
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

function createAboutLink() {
  $html = <<<EOHTML
    <li>
  		<a href="projects/project.php?id=rt.rap">
      	<h4>About this Project</h4>
    	</a>
  	</li>
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
