<?php

$navigationStructure = array(

  "demos" => array(
    "label" => "Demos",
  	"url" => "/rap/demos/",
  	"sub-entries" => array(
  	  "demos" => array(
  	    "label" => "Demos",
  	    "url" => "/rap/demos/"
  	  ),
  	  "built-on-rap" => array(
  	    "label" => "Built on RAP",
  	    "url" => "/rap/users/"
  	  )
  	)
  ),

  "download" => array(
    "label" => "Download",
    "url" => "/rap/downloads/",
    "sub-entries" => array(
      "downloads" => array(
        "label" => "Download RAP",
        "url" => "/rap/downloads/"
      ),
      "noteworthy" => array(
        "label" => "New and Noteworthy",
        "url" => "/rap/noteworthy/"
      )
    )
  ),

  "help" => array(
    "label" => "Get Help",
    "url" => "/rap/support/",
    "sub-entries" => array(
      "support" => array(
        "label" => "Get Help",
        "url" => "/rap/support/"
      ),
      "getting-started" => array(
        "label" => "Getting Started",
        "url" => "/rap/getting-started/"
      ),
      "developers-guide" => array(
        "label" => "Developer's Guide",
        "url" => "/rap/developers-guide/"
      ),
      "articles" => array(
        "label" => "Articles",
        "url" => "/rap/articles/"
      ),
      "professional-services" => array(
        "label" => "Professional Services",
        "url" => "/rap/support/professional-services/"
      )
    )
  ),

  "contribute" => array(
    "label" => "Contribute",
    "url" => "/rap/getting-involved/",
    "sub-entries" => array(
      "getting-involved" => array(
        "label" => "Getting Involved",
        "url" => "/rap/getting-involved/"
      ),
      "bugs" => array(
        "label" => "Bugs",
        "url" => "/rap/bugs/"
      ),
      "source" => array(
        "label" => "Source Code",
        "url" => "/rap/source/"
      ),
      "incubator" => array(
        "label" => "Incubator",
        "url" => "/rap/incubator"
      )
    )
  )

);

function createHeaderAndNavigation( $navPosition ) {
  $result = '<div id="header"><a href="/rap/"><div id="rap-logo"></div></a>'
          . createMainNavigation( $navPosition[ 0 ], $navPosition[ 1 ] )
          . '</div>'
          . createHeaderBar( $navPosition[ 0 ], $navPosition[ 1 ] );
  return $result;
}

function createMainNavigation( $topLevelPos ) {
  $result = '<div id="navigation"><ul>';
  $navEntries = $GLOBALS[ 'navigationStructure' ];
  foreach( $navEntries as $navId => $navData ) {
    $active = $navId === $topLevelPos ? 'class="active"' : '';
    $result .= "<li $active><a href=\"{$navData[ 'url' ]}\">{$navData[ 'label' ]}</a></li>";
  }
  $result .= '</ul><div class="stop"></div></div>';
  return $result;
}

function createHeaderBar( $topLevelId, $secondLevelId ) {
  $headerBar = '<div id="nav-bar">'
             . '<div id="nav-container">'
             . createHeaderBarNavigation( $topLevelId, $secondLevelId )
             . '<div class="antifloat"></div>'
             . '</div>'
             . '</div>';
  return $headerBar;
}

function createHeaderBarNavigation( $topLevelId, $secondLevelId ) {
  $result = '<ul id="nav">';
  if( $topLevelId === 'home' ) {
    $result .= '<li><a class="blue" href="http://eclipse.org/projects/project.php?id=rt.rap">About this project</a></li>';
    $result .= '<li><a class="blue" href="/rap/incubator">Incubator</a></li>';
  } else {
    $secondLevelEntries = $GLOBALS[ 'navigationStructure' ][ $topLevelId ][ 'sub-entries' ];
    foreach( $secondLevelEntries as $navId => $navData ) {
      $active = $navId === $secondLevelId ? 'class="active"' : '';
      $result .= "<li><a $active href=\"{$navData[ 'url' ]}\">{$navData[ 'label' ]}</a></li>";
    }
  }
  $result .= '</ul>';
  return $result;
}

?>