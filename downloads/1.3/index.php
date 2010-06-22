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

$xslDoc = new DOMDocument();
$xslDoc->load( "_index.xsl" );

$xmlDoc = new DOMDocument();
$xmlDoc->load( "builds.xml" );

$proc = new XSLTProcessor();
$proc->importStylesheet( $xslDoc );
$html = $proc->transformToXML( $xmlDoc );

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
