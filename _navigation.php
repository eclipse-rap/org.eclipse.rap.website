<?php

$NAV_ENTRIES = array(

  "home" => array(
    "sub-entries" => array(
      "incubator" => array(
        "label" => "Incubator",
        "url" => "/rap/incubator/"
      ),
      "about-project" => array(
        "label" => "<span class='nav-redirect'>About this project</span>",
        "url" => "http://projects.eclipse.org/projects/rt.rap"
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
      "source" => array(
        "label" => "Source Code",
        "url" => "/rap/source/"
      ),
      "incubator" => array(
        "label" => "<span class='nav-redirect'>Add-Ons</span>",
        "url" => "/rap/incubator/"
      ),
      "noteworthy" => array(
        "label" => "<span class='nav-redirect'>New and Noteworthy</span>",
        "url" => "/rap/noteworthy/"
      )
    )
  ),

  "documentation" => array(
    "label" => "Documentation",
    "url" => "/rap/documentation/",
    "sub-entries" => array(
      "overview" => array(
        "label" => "Overview",
        "url" => "/rap/documentation/"
      ),
      "developers-guide" => array(
        "label" => "Developer's Guide",
        "url" => "/rap/developers-guide/"
      ),
      "noteworthy" => array(
        "label" => "New and Noteworthy",
        "url" => "/rap/noteworthy/"
      ),
      "articles" => array(
        "label" => "Articles",
        "url" => "/rap/articles/"
      )
    )
  ),

  "community" => array(
    "label" => "Community",
    "url" => "/rap/getting-involved/",
    "sub-entries" => array(
      "getting-involved" => array(
        "label" => "Getting Involved",
        "url" => "/rap/getting-involved/"
      ),
      "forum" => array(
        "label" => "<span class='nav-redirect'>Forum</span>",
        "url" => "http://www.eclipse.org/forums/eclipse.technology.rap"
      ),
      "bugs" => array(
        "label" => "Bugs",
        "url" => "/rap/bugs/"
      ),
      "support" => array(
        "label" => "Support",
        "url" => "/rap/support/"
      )
    )
  )

);

  $nav_logo_deco_class = $PAGE_NAV_POSITION[ 0 ] === 'home' ? 'class="active"' : '';
  $nav_home_link_style = $PAGE_NAV_POSITION[ 0 ] === 'home' ? 'style="display:none;"' : '';
?>

<div id="header">

  <div <?= $nav_logo_deco_class ?> id="rap-logo-deco"></div>
  <a href="/rap/"><span id="rap-logo"></span></a>

  <div id="navigation">
    <ul>

<?
  // top level
  foreach( $NAV_ENTRIES as $navId => $navData ) {
    if( array_key_exists( 'label', $navData ) ) {
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
    <div class="stop"></div>
  </div>
</div>
