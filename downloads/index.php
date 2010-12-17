<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );

$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include( $App->getProjectCommon() );

$pageTitle = "RAP - Downloads";
$pageKeywords = "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "The RAP Team";

// --- TO BE CHANGED WITH EVERY RELEASE ---

$stableBuilds = simplexml_load_file( "./1.4/builds.xml" );
$releaseBuilds = simplexml_load_file( "./1.3/builds.xml" );

$stableBuild = $stableBuilds->completed->build[0];
$releaseBuild = $releaseBuilds->completed->build[0];

$downloadUrl = "http://www.eclipse.org/downloads/download.php?file=/rt/rap/";
$newsUrl = "../noteworthy/";

// ---

function getBuildName( $build ) {
  $result = $build[ "name" ];
  if( $build[ "type" ] == "M" ) {
    $result .= " Milestone Build";
  } else if( $build[ "type" ] == "RC" ) {
    $result .= " Release Candidate";
  } else if( $build[ "type" ] == "R" ) {
    $result .= " Release";
  } else if( $build[ "type" ] == "SR" ) {
    $result .= " Service Release";
  }
  return $result;
}

function getBuildDate( $build ) {
  $months = array( "January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December" );
  $date = date_parse_from_format( "Y-m-d", $build[ "buildDate" ] );
  return $months[ $date[ "month" ] - 1 ] . " " . $date["day"] . ", " . $date[ "year" ];
}

$vars = array();

$vars[ "STABLE_RUNTIME_DESCRIPTION" ] = $stableBuilds[ "runtimeDesc" ];
$vars[ "STABLE_TOOLING_DESCRIPTION" ] = $stableBuilds[ "toolingDesc" ];
$vars[ "RELEASE_RUNTIME_DESCRIPTION" ] = $releaseBuilds[ "runtimeDesc" ];
$vars[ "RELEASE_TOOLING_DESCRIPTION" ] = $releaseBuilds[ "toolingDesc" ];
$vars[ "STABLE_NAME" ] = getBuildName( $stableBuild );
$vars[ "RELEASE_NAME" ] = getBuildName( $releaseBuild );
$vars[ "STABLE_DATE" ] = getBuildDate( $stableBuild );
$vars[ "RELEASE_DATE" ] = getBuildDate( $releaseBuild );
$vars[ "STABLE_NOTEWORTHY_URL" ] = $newsUrl . $stableBuild[ "news" ];
$vars[ "RELEASE_NOTEWORTHY_URL" ] = $newsUrl . $releaseBuild[ "news" ];
$vars[ "STABLE_RUNTIME_ZIP" ] = $stableBuild[ "runtimeZip" ];
$vars[ "STABLE_TOOLING_ZIP" ] = $stableBuild[ "toolingZip" ];
$vars[ "RELEASE_RUNTIME_ZIP" ] = $releaseBuild[ "runtimeZip" ];
$vars[ "RELEASE_TOOLING_ZIP" ] = $releaseBuild[ "toolingZip" ];
$vars[ "STABLE_RUNTIME_DOWNLOAD_URL" ] = $downloadUrl . $stableBuilds[ "downloadPath" ] . $stableBuild[ "runtimeZip" ];
$vars[ "STABLE_TOOLING_DOWNLOAD_URL" ] = $downloadUrl . $stableBuilds[ "downloadPath" ] . $stableBuild[ "toolingZip" ];
$vars[ "RELEASE_RUNTIME_DOWNLOAD_URL" ] = $downloadUrl . $releaseBuilds[ "downloadPath" ] . $releaseBuild[ "runtimeZip" ];
$vars[ "RELEASE_TOOLING_DOWNLOAD_URL" ] = $downloadUrl . $releaseBuilds[ "downloadPath" ] . $releaseBuild[ "toolingZip" ];
$vars[ "STABLE_RUNTIME_UPDATE_SITE" ] = $stableBuilds[ "runtimeSite" ];
$vars[ "STABLE_TOOLING_UPDATE_SITE" ] = $stableBuilds[ "toolingSite" ];
$vars[ "RELEASE_RUNTIME_UPDATE_SITE" ] = $releaseBuilds[ "runtimeSite" ];
$vars[ "RELEASE_TOOLING_UPDATE_SITE" ] = $releaseBuilds[ "toolingSite" ];

$html = file_get_contents( '_index.html' );
foreach( $vars as $key => $value ) {
  $html = str_replace( "{" . $key . "}", $value, $html );
}

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
