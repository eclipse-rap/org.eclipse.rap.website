<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );

$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include( $App->getProjectCommon() );

$pageTitle = "RAP - 1.4 Downloads";
$pageKeywords = "ajax, rap, eclipse rap, 1.4, downloads";
$pageAuthor = "Ralf Sternberg";

$html = xslt( 'builds.xml', '_index.xsl' );

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
