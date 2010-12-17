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

$vars = array();

// TO CHANGE WITH EVERY NEW STABLE BUILD

$vars[ "STABLE_NAME" ] = "1.4 M4 Milestone Build";
$vars[ "STABLE_DATE" ] = "December 14, 2010";
$vars[ "STABLE_NOTEWORTHY_URL" ] = "../noteworthy/1.4/news_M4.php";
$vars[ "STABLE_RUNTIME_ZIP" ] = "rap-runtime-1.4.0-M4-20101214-0912.zip";
$vars[ "STABLE_TOOLING_ZIP" ] = "rap-tooling-1.4.0-M4-20101214-0934.zip";

// TO CHANGE WITH EVERY RELEASE / SERVICE RELEASE

$vars[ "RELEASE_NAME" ] = "1.3.1 Service Release";
$vars[ "RELEASE_DATE" ] = "September 24, 2010";
$vars[ "RELEASE_NOTEWORTHY_URL" ] = "../noteworthy/1.3/";
$vars[ "RELEASE_RUNTIME_ZIP" ] = "rap-runtime-1.3.1-R-20100915-2301.zip";
$vars[ "RELEASE_TOOLING_ZIP" ] = "rap-tooling-1.3.1-R-20100916-0013.zip";

// TO CHANGE WITH EVERY RELEASE

$vars[ "STABLE_TOOLING_DESCRIPTION" ] = "The latest milestone build, for use with Eclipse 3.6 and 3.7.";
$vars[ "STABLE_RUNTIME_DESCRIPTION" ] = "The latest milestone build, based on Eclipse 3.7.";
$vars[ "STABLE_RUNTIME_UPDATE_SITE" ] = "http://download.eclipse.org/rt/rap/1.4/runtime";
$vars[ "STABLE_TOOLING_UPDATE_SITE" ] = "http://download.eclipse.org/rt/rap/1.4/tooling";
$vars[ "STABLE_RUNTIME_DOWNLOAD_URL" ] = "http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.4/" . $vars[ "STABLE_RUNTIME_ZIP" ];
$vars[ "STABLE_TOOLING_DOWNLOAD_URL" ] = "http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.4/" . $vars[ "STABLE_TOOLING_ZIP" ];

$vars[ "RELEASE_TOOLING_DESCRIPTION" ] = "The latest release, for use with Eclipse 3.5 and 3.6.";
$vars[ "RELEASE_RUNTIME_DESCRIPTION" ] = "The latest release, based on Eclipse 3.6.";
$vars[ "RELEASE_RUNTIME_UPDATE_SITE" ] = "http://download.eclipse.org/rt/rap/1.3/runtime";
$vars[ "RELEASE_TOOLING_UPDATE_SITE" ] = "http://download.eclipse.org/rt/rap/1.3/tooling";
$vars[ "RELEASE_RUNTIME_DOWNLOAD_URL" ] = "http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.3/" . $vars[ "RELEASE_RUNTIME_ZIP" ];
$vars[ "RELEASE_TOOLING_DOWNLOAD_URL" ] = "http://www.eclipse.org/downloads/download.php?file=/rt/rap/1.3/" . $vars[ "RELEASE_TOOLING_ZIP" ];

$html = file_get_contents( '_index.html' );
foreach( $vars as $key => $value ) {
  $html = str_replace( "{" . $key . "}", $value, $html );
}

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
