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
      <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-13" viewBox="0 0 40 40">
        <path d="M26.804 29.01c-2.832 2.34-6.465 3.746-10.426 3.746C7.333 32.756 0 25.424 0 16.378 0 7.333 7.333 0 16.378 0c9.046 0 16.378 7.333 16.378 16.378 0 3.96-1.406 7.594-3.746 10.426l10.534 10.534c.607.607.61 1.59-.004 2.202-.61.61-1.597.61-2.202.004L26.804 29.01zm-10.426.627c7.323 0 13.26-5.936 13.26-13.26 0-7.32-5.937-13.257-13.26-13.257C9.056 3.12 3.12 9.056 3.12 16.378c0 7.323 5.936 13.26 13.258 13.26z"
        fill-rule="evenodd" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-3" viewBox="0 0 20 20">
        <path d="M8.114 10L.944 2.83 0 1.885 1.886 0l.943.943L10 8.113l7.17-7.17.944-.943L20 1.886l-.943.943-7.17 7.17 7.17 7.17.943.944L18.114 20l-.943-.943-7.17-7.17-7.17 7.17-.944.943L0 18.114l.943-.943L8.113 10z" fill-rule="evenodd" />
      </symbol>
    </svg>
    <form  action="#" novalidate="novalidate" class="searchbox sbx-custom">
      <div role="search" class="sbx-custom__wrapper">
        <input id="search-query" type="search" name="search" placeholder="Search..." autocomplete="off" required="required" class="sbx-custom__input">
        <button type="submit" title="Submit your search query." class="sbx-custom__submit">
          <svg role="img" aria-label="Search">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-search-13"></use>
          </svg>
        </button>
        <button type="reset" title="Clear the search query." class="sbx-custom__reset">
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
