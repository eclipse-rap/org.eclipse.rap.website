<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );

$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include( $App->getProjectCommon() );

# Begin: page-specific settings.  Change these.
$pageTitle = "RAP - Target Installation";
$pageKeywords = "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "Jochen Krause";

# Getting Started Screencast
$App->AddExtraHtmlHeader( '<script type="text/javascript">swfobject.embedSWF("http://vimeo.com/moogaloop.swf?clip_id=12737558&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=ffffff&amp;fullscreen=1", "screencast", "600", "375", "9.0.0");</script>' );

$html = file_get_contents( '_index.html' );
generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
