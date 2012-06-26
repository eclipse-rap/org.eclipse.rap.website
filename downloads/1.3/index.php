<?php

include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$pageTitle = "RAP - 1.3 Downloads";
$pageKeywords = "ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "The RAP Team";

function xslt( $xmlFile, $xslFile ) {
  $xslDoc = new DOMDocument();
  $xslDoc->load( $xslFile );
  $xmlDoc = new DOMDocument();
  $xmlDoc->load( $xmlFile );
  $proc = new XSLTProcessor();
  $proc->importStylesheet( $xslDoc );
  return $proc->transformToXML( $xmlDoc );
}

$html = xslt( 'builds.xml', '_index.xsl' );

$navPosition = array( "download", "downloads" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );

?>
