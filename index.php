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

# What is RAP Screencast
$App->AddExtraHtmlHeader( '<script type="text/javascript">swfobject.embedSWF("http://vimeo.com/moogaloop.swf?clip_id=12737525&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=ffffff&amp;fullscreen=1", "screencast", "600", "375", "9.0.0");</script>' );

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
