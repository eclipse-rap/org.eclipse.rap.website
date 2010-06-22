<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );

$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include( $App->getProjectCommon() );

# Begin: page-specific settings.  Change these.
$pageTitle = "RAP - Support";
$pageKeywords = "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "Jochen Krause";

$html = file_get_contents( '_index.html' );
generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
