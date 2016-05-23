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

  <div id="rap-search-box">
    <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
      <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-1" viewBox="0 0 40 40">
        <path d="M27.6 29.15c-1.99 1.643-4.543 2.63-7.326 2.63-6.355 0-11.507-5.15-11.507-11.506 0-6.355 5.152-11.507 11.507-11.507 6.355 0 11.507 5.152 11.507 11.507 0 2.783-.987 5.335-2.63 7.325l7.392 7.392c.43.43.436 1.124.005 1.555-.428.428-1.122.428-1.555-.005L27.6 29.15zm-7.326.44c5.145 0 9.315-4.17 9.315-9.316 0-5.145-4.17-9.315-9.316-9.315-5.145 0-9.315 4.17-9.315 9.314 0 5.145 4.17 9.315 9.314 9.315zm16.813.81C38.982 27.292 40 23.72 40 20 40 8.954 31.046 0 20 0S0 8.954 0 20s8.954 20 20 20c3.76 0 7.37-1.04 10.5-2.974.514-.32.674-.994.355-1.51-.318-.514-.993-.673-1.508-.355C26.56 36.884 23.35 37.81 20 37.81c-9.835 0-17.808-7.973-17.808-17.808S10.165 2.192 20 2.192 37.808 10.165 37.808 20c0 3.314-.905 6.492-2.593 9.26-.315.515-.15 1.19.365 1.505.517.315 1.19.152 1.507-.365z"
        fill-rule="evenodd" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-3" viewBox="0 0 20 20">
        <path d="M8.114 10L.944 2.83 0 1.885 1.886 0l.943.943L10 8.113l7.17-7.17.944-.943L20 1.886l-.943.943-7.17 7.17 7.17 7.17.943.944L18.114 20l-.943-.943-7.17-7.17-7.17 7.17-.944.943L0 18.114l.943-.943L8.113 10z" fill-rule="evenodd" />
      </symbol>
    </svg>
    <form id="sbx-form" action="#" novalidate="novalidate" class="searchbox sbx-custom">
      <div role="search" class="sbx-custom__wrapper">
        <input id="search-query" type="search" name="search" placeholder="Search..." autocomplete="off" required="required" class="sbx-custom__input">
        <button type="submit" title="Submit your search query." class="sbx-custom__submit">
          <svg role="img" aria-label="Search">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-search-1"></use>
          </svg>
        </button>
        <button type="button" id="sbx-remove" title="Clear the search query." class="sbx-custom__reset">
          <svg role="img" aria-label="Reset">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-clear-3"></use>
          </svg>
        </button>
      </div>
    </form>
  </div>

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
