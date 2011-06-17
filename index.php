<?php

include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$pageTitle = "Rich Ajax Platform (RAP)";
$pageKeywords = "ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "The RAP Team";

$html = file_get_contents( '_index.html' );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
