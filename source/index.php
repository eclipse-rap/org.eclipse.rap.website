<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );

$App = new App();
$Menu = new Menu();
$Nav = new Nav();
include( $App->getProjectCommon() );

$pageTitle = "RAP - Source Code";
$pageKeywords = "Ajax, rap, w4t, eclipse rap";
$pageAuthor = "Jochen Krause";

$html = file_get_contents( '_index.html' );
generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
