<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );
$App = new App();
$Nav = new Nav();
$Menu = new Menu();

include( $App->getProjectCommon() );

$pageTitle = "Rich Ajax Platform (RAP)";
$pageKeywords = "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "Jochen Krause";

$html = file_get_contents( '_index.html' );

$Nav = null; // delete right side navigation

$App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/rap/rap-big-header.css"/>' );
$App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/rap/rap-posts.css"/>' );

# What is RAP Screencast
$App->AddExtraHtmlHeader( '<script type="text/javascript" src="http://w3.eclipsesource.com/www/js/rap/jquery.zrssfeed.min.js"></script>' );

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
