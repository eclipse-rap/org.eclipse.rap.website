<?php
/*******************************************************************************
 * Copyright (c) 2009 EclipseSource and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
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
    $milestone = '';
    if( !$this->release ) {
      $milestone = $this->milestone;
    }
    
    $page_header = '<div id="maincontent">'
                 . '<div id="midcolumn">'
                 . '<h1>RAP ' . $this->version . ' ' . $milestone 
                 . ' - New and Noteworthy</h1>';
    
    $page_header .= $this->header;
    $page_header .= <<<EOHTML
<p><ul>
EOHTML;
    $page_header .= <<<EOHTML
</ul></p>
EOHTML;
    return $page_header;
  }
  
  function setContent() {
    $page_content = "";
    foreach( $this->categories as $item ) {
      // Category items
      foreach( $this->noteworthy->entry as $entry ) {
        if(    $entry[ 'category' ] == $item
            && (    ( $entry[ 'milestone' ] == $this->milestone ) 
                 || $this->release ) ) 
        {
          $page_content .= "<h2>{$entry -> title}</h2>";
          $page_content .= "<div class='noteworthy'>{$entry -> description}</div>";
        }
      }
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