<?php

$NAV_ENTRIES = array(

  "home" => array(
    "sub-entries" => array(

      "about-project" => array(
        "label" => "About this project",
        "url" => "http://eclipse.org/projects/project.php?id=rt.rap"
      ),
      "incubator" => array(
        "label" => "Incubator",
        "url" => "/rap/incubator/"
      )
    )
  ),

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
      )
    )
  )

);

  $nav_logo_deco_class = $PAGE_NAV_POSITION[ 0 ] === 'home' ? 'class="active"' : '';
  $nav_home_link_style = $PAGE_NAV_POSITION[ 0 ] === 'home' ? 'style="display:none;"' : '';
?>

<div id="header">

  <div <?= $nav_logo_deco_class ?> id="rap-logo-deco"></div>
  <a href="/rap/"><div id="rap-logo"></div></a>

  <div id="navigation">
    <ul>

<?
  // top level
  foreach( $NAV_ENTRIES as $navId => $navData ) {
    if( $navData[ 'label' ] ) {
      $active = $navId === $PAGE_NAV_POSITION[ 0 ] ? 'class="active"' : '';
      echo "<li $active><a href=\"{$navData[ 'url' ]}\">{$navData[ 'label' ]}</a></li>";
    }
  }
?>

    </ul>
    <div class="stop"></div>
  </div>
</div>

<div id="nav-bar">
  <div id="nav-container">
    <ul <?= $nav_home_link_style ?> id="nav-home">
      <li>
        <a href="/rap/">&lt; Home</a>
      </li>
    </ul>
    <ul id="nav">

<?
  // second level
  $nav_secondLevelEntries = $NAV_ENTRIES[ $PAGE_NAV_POSITION[ 0 ] ][ 'sub-entries' ];
  foreach( $nav_secondLevelEntries as $navId => $navData ) {
    $active = $navId === $PAGE_NAV_POSITION[ 1 ] ? ' class="active"' : '';
    echo "<li><a {$active} href=\"{$navData[ 'url' ]}\">{$navData[ 'label' ]}</a></li>";
  }
?>

    </ul>
    <div class="antifloat"></div>
  </div>
</div>
