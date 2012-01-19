<?php
/*******************************************************************************
 * Copyright (c) 2012 EclipseSource and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 ******************************************************************************/

class Builds {

  private $builds;
  private $error;

  function Builds( $xmlFile ) {
    $this->builds = simplexml_load_file( $xmlFile );
    $this->error = $this->builds ? NULL : "Error reading file $xmlFile";
  }

  function hasError() {
    return $this->error ? TRUE : FALSE;
  }

  function findBuild( $buildName ) {
    $result = NULL;
    if( $buildName ) {
      $selectedBuilds = $this->builds->xpath( "/builds/build[@shortname = '" . $buildName . "']" );
      if( count( $selectedBuilds ) === 1 ) {
        $result = new Build( $this, $selectedBuilds[ 0 ] );
      }
    }
    return $result;
  }

  function getLastCompletedBuild() {
    $result = NULL;
    $selectedBuilds = $this->builds->xpath( "/builds/build[@status = 'completed']" );
    if( count( $selectedBuilds ) > 0 ) {
      $result = new Build( $this, end( $selectedBuilds ) );
    }
    return $result;
  }

  function getPreviousBuilds( $buildName ) {
    $result = array();
    foreach( $this->builds->build as $build ) {
      if( $build[ "shortname" ] == $buildName ) {
        break;
      }
      $result[] = new Build( $this, $build );
    }
    return $result;
  }

  function getVersion() {
    return (string) $this->builds[ "version" ];
  }

  function getDownloadPath() {
    return (string) $this->builds[ "downloadPath" ];
  }

  function getSimultaneousRelease() {
    return (string) $this->builds[ "simultaneousRelease" ];
  }

  function getUpdateSite( $feature ) {
    if( $feature === "runtime" || $feature === "tooling" ) {
      return (string) $this->builds[ $feature . "Site" ];
    }
    return NULL;
  }

  function getDescription( $feature ) {
    if( $feature === "runtime" || $feature === "tooling" ) {
      return (string) $this->builds[ $feature . "Desc" ];
    }
    return NULL;
  }

}

class Build {

  private $parent;
  private $build;

  function Build( $parent, $element ) {
    $this->parent = $parent;
    $this->build = $element;
  }

  function getName() {
    return (string) $this->build[ "name" ];
  }

  function getShortName() {
    return (string) $this->build[ "shortname" ];
  }

  function isCompleted() {
    return ( (string) $this->build[ "status" ] ) === "completed";
  }

  function getPublishDate() {
    return (string) $this->build[ "publishDate" ];
  }

  function getNews() {
    return (string) $this->build[ "news" ];
  }

  function getReleaseNotes() {
    return (string) $this->build[ "relnotes" ];
  }

  function getZipfile( $feature ) {
    if( $feature === "runtime" || $feature === "tooling" ) {
      return (string) $this->build[ $feature . "Zip" ];
    }
    return NULL;
  }

  function getType() {
    $result = NULL;
    if( $this->build[ "type" ] == "M" ) {
      $result = "milestone build";
    } else if( $this->build[ "type" ] == "RC" ) {
      $result = "release candidate";
    } else if( $this->build[ "type" ] == "R" ) {
      $result = "release";
    } else if( $this->build[ "type" ] == "SR" ) {
      $result = "service release";
    }
    return $result;
  }

  function getTargetMilestones() {
    $result;
    if( $this->build[ "type" ] == "R" ) {
      $result = array();
      foreach( $this->parent->getPreviousBuilds( "R" ) as $build ) {
        $result[] = $build->getName();
      }
      $result[] = $this->build[ "name" ];
    } else {
      $result = $this->build[ "name" ];
    }
    return $result;
  }

}

?>
