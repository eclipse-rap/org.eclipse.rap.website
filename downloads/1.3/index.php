<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );

$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include( $App->getProjectCommon() );

$pageTitle = "RAP - 1.3 Downloads";
$pageKeywords = "ajax, rap, eclipse rap, 1.3, downloads";
$pageAuthor = "Ralf Sternberg";

$t0 = microtime( true );
$html = xslt( 'builds.xml', '_index.xsl' );
$t1 = microtime( true );
$html .= "<!-- xslt real time: " . ( $t1 - $t0 ) . "-->";

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
