<?php

  $xslDoc = new DOMDocument();
  $xslDoc->load("book.xsl");

  $xmlDoc = new DOMDocument();
  $xmlDoc->load("book.xml");

  $proc = new XSLTProcessor();
  $proc->importStylesheet($xslDoc);
  echo $proc->transformToXML($xmlDoc);

?>
