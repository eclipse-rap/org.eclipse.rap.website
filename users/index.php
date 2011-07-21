<?php

include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$pageTitle = "Who uses RAP?";
$pageKeywords = "ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "The RAP Team";

$html = file_get_contents( '_index.html' );

$navPosition = array( "demos", "rap-users" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );

?>
