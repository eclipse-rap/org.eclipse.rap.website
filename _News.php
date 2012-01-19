<?php
/*******************************************************************************
 * Copyright (c) 2012 EclipseSource and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 ******************************************************************************/

class News {

  private $news;
  private $error;

  function News( $xmlFile ) {
    $this->news = simplexml_load_file( $xmlFile );
    $this->error = $this->news ? NULL : "Error reading file $xmlFile";
    $this->categories = array();
  }

  function hasError() {
    return $this->error ? TRUE : FALSE;
  }

  function getCategories( $buildName ) {
    $result = array();
    foreach( $this->news->entry as $entry ) {
      if( $buildName == 'R' || ( $entry[ 'milestone' ] == $buildName ) ) {
        $result[] = ( string )$entry[ 'category' ];
      }
    }
    $result = array_unique( $result );
    return $result;
  }

  function getEntries( $category, $buildName ) {
    $result = array();
    foreach( $this->news->entry as $entry ) {
      if(    $entry[ 'category' ] == $category
          && ( $buildName == 'R' || ( $entry[ 'milestone' ] == $buildName ) ) )
      {
        $result[] = $entry;
      }
    }
    return $result;
  }

}

?>
