<?php
/*******************************************************************************
 * Copyright (c) 2009 EclipseSource and others. All rights reserved.
 * This program and the accompanying materials are made available under the
 * terms of the Eclipse Public License v1.0 which accompanies this distribution, 
 * and is available at http://www.eclipse.org/legal/epl-v10.html
 ******************************************************************************/

class Noteworthy {
	
  private $html;
  private $noteworthy;
  private $version;
  private $milestone;
  private $release = false; // Whether this is a release version
  private $header;
  private $footer;
  private $categories = array();
  
  function Noteworthy( $url, $milestone, $header, $footer ) {
  	$this->noteworthy = simplexml_load_file( $url );
  	$this->version = $this->noteworthy[ 'version' ];
  	$this->milestone = $milestone;
    // This is a release version, if $milestone is empty ('')
  	if( $this->milestone == '' ) {
  	  $this->release = true;
  	}
  	$this->header = $header;
  	$this->footer = $footer;
  	foreach( $this->noteworthy->entry as $entry ) {
  	  if( ( $entry[ 'milestone' ] == $this->milestone ) || $this->release ) {
  	    $this->categories[] = ( string )$entry[ 'category' ];
  	  }
  	}
  	$this->categories = array_unique( $this->categories );
  	$page_header = $this->setHeader();
  	$page_content = $this->setContent();
  	$page_footer = $this->setFooter();
  	$this->html = $page_header.$page_content.$page_footer;
  }
  
  function getHtml() {
  	return $this->html;
  }
  
  function setHeader() {
  	$page_header = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
<h1>RAP 
EOHTML;
    $page_header .= $this->version;
    if( !$this->release ) {
      $page_header .= " ";
      $page_header .= $this->milestone;
    }
    $page_header .= <<<EOHTML
 - New and Noteworthy</h1>
EOHTML;
    $page_header .= $this->header;
    // Hyperlinks to all categories in the milestone / release
    $page_header .= <<<EOHTML
<p><ul>
EOHTML;
    foreach( $this->categories as $item ) {
      $page_header .= <<<EOHTML
<li><a href="#
EOHTML;
      $page_header .= $item;
      $page_header .= <<<EOHTML
">
EOHTML;
      $page_header .= $item;
      $page_header .= <<<EOHTML
</a></li>
EOHTML;
    }
    $page_header .= <<<EOHTML
</ul></p>
<p>&nbsp;</p>
EOHTML;
  	return $page_header;
  }
  
  function setContent() {
  	$page_content = "";
  	foreach( $this->categories as $item ) {
      // Category title
  	  $page_content .= <<<EOHTML
<a name="
EOHTML;
      $page_content .= $item;
  	  $page_content .= <<<EOHTML
"></a>
<h2>
EOHTML;
      $page_content .= $item;
  	  $page_content .= <<<EOHTML
</h2>
EOHTML;
      $page_content .= <<<EOHTML
<table>
EOHTML;
      // Category items
  	  foreach( $this->noteworthy->entry as $entry ) {
  	  	if(    $entry[ 'category' ] == $item
  	  	    && (    ( $entry[ 'milestone' ] == $this->milestone ) 
  	  	         || $this->release ) ) 
  	  	{
          $page_content .= <<<EOHTML
<tr valign="top" align="left">
<td width="20%">
<b>
EOHTML;
          $page_content .= $entry->title;
          $page_content .= <<<EOHTML
</b>
</td>
EOHTML;
          $page_content .= <<<EOHTML
<td width="80%">
EOHTML;
          $page_content .= $entry->description;
          $page_content .= <<<EOHTML
<td/>
</tr>
<p>&nbsp;</p>
EOHTML;
  	  	}
  	  }
  	  $page_content .= <<<EOHTML
</table>
EOHTML;
  	}
  	return $page_content;
  }
  
  function setFooter() {
    $page_footer = $this->footer;
    $page_footer .= <<<EOHTML
<p>&nbsp;</p>
</div>
</div>
EOHTML;
  	return $page_footer;
  }
}

?>