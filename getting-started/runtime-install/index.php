<?php

include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$pageTitle = "RAP - Target Installation";
$pageKeywords = "ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "The RAP Team";

# Getting Started Screencast
$App->AddExtraHtmlHeader( '<script type="text/javascript">swfobject.embedSWF("http://vimeo.com/moogaloop.swf?clip_id=12737558&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=ffffff&amp;fullscreen=1", "screencast", "600", "375", "9.0.0");</script>' );

$html = file_get_contents( '_index.html' );

$navPosition = array( "documentation", "getting-started" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );

?>
