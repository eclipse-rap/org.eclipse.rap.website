<?php

include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$PAGE_TITLE = "RAP - 1.3 Downloads";
$PAGE_NAV_POSITION = array( "download", "downloads" );

printHeader();

function xslt( $xmlFile, $xslFile ) {
  $xslDoc = new DOMDocument();
  $xslDoc->load( $xslFile );
  $xmlDoc = new DOMDocument();
  $xmlDoc->load( $xmlFile );
  $proc = new XSLTProcessor();
  $proc->importStylesheet( $xslDoc );
  return $proc->transformToXML( $xmlDoc );
}

echo xslt( 'builds.xml', '_index.xsl' );

printFooter();

?>
