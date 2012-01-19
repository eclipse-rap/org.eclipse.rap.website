<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  require_once( $_SERVER['DOCUMENT_ROOT'] . "/rap/_Builds.php" );

  $title = "RAP - Downloads";
  $navPosition = array( "download", "index" );
  printHeader( $title, $navPosition );

  // --- TO BE CHANGED WITH EVERY RELEASE ---

  $releaseBuilds = simplexml_load_file( "./1.4/builds.xml" );

  $stableBuilds = new Builds( "./1.5/builds.xml" );
  if( $stableBuilds->hasError() ) {
    echo '<div class="error">There was a problem loading the build data for this site.</div>';
  }

  $stableBuild = $stableBuilds->getLastCompletedBuild();
  $releaseBuild = $releaseBuilds->completed->build[0];

  $downloadUrl = "http://www.eclipse.org/downloads/download.php?file=/rt/rap/";
  $newsUrl = "../noteworthy/";

  // ---

  function getBuildName( $build ) {
    $result = $build[ "name" ];
    if( $build[ "type" ] == "M" ) {
      $result .= " Milestone Build";
    } else if( $build[ "type" ] == "RC" ) {
      $result .= " Release Candidate";
    } else if( $build[ "type" ] == "R" ) {
      $result .= " Release";
    } else if( $build[ "type" ] == "SR" ) {
      $result .= " Service Release";
    } else {
      $result .= $build[ "type" ];
    }
    return $result;
  }

  function getReleaseNotesLink( $build, $newsUrl ) {
    $result = "";
    if( $build[ "relnotes" ] != "" ) {
      $result = " <a href=\"" . $newsUrl . $build[ "relnotes" ] . "\">Release Notes</a>";
    }
    return $result;
  }

  $STABLE_RUNTIME_DESCRIPTION = $stableBuilds->getDescription( "runtime" );
  $STABLE_TOOLING_DESCRIPTION = $stableBuilds->getDescription( "tooling" );
  $RELEASE_RUNTIME_DESCRIPTION = $releaseBuilds[ "runtimeDesc" ];
  $RELEASE_TOOLING_DESCRIPTION = $releaseBuilds[ "toolingDesc" ];
  $STABLE_NAME = $stableBuild->getName() . ' ' . $stableBuild->getType();
  $RELEASE_NAME = getBuildName( $releaseBuild );
  $STABLE_DATE = formatDate( $stableBuild->getPublishDate() );
  $RELEASE_DATE = formatDate( $releaseBuild[ "publishDate" ] );
  $STABLE_NOTEWORTHY_URL = $newsUrl . $stableBuild->getNews();
  $RELEASE_NOTEWORTHY_URL = $newsUrl . $releaseBuild[ "news" ];
  $RELEASE_NOTES_LINK = getReleaseNotesLink( $releaseBuild, $newsUrl );
  $STABLE_RUNTIME_ZIP = $stableBuild->getZipFile( "runtime" );
  $STABLE_TOOLING_ZIP = $stableBuild->getZipFile( "tooling" );
  $RELEASE_RUNTIME_ZIP = $releaseBuild[ "runtimeZip" ];
  $RELEASE_TOOLING_ZIP = $releaseBuild[ "toolingZip" ];
  $STABLE_RUNTIME_DOWNLOAD_URL = $downloadUrl . $stableBuilds->getDownloadPath() . $stableBuild->getZipFile( "runtime" );
  $STABLE_TOOLING_DOWNLOAD_URL = $downloadUrl . $stableBuilds->getDownloadPath() . $stableBuild->getZipFile( "tooling" );
  $RELEASE_RUNTIME_DOWNLOAD_URL = $downloadUrl . $releaseBuilds[ "downloadPath" ] . $releaseBuild[ "runtimeZip" ];
  $RELEASE_TOOLING_DOWNLOAD_URL = $downloadUrl . $releaseBuilds[ "downloadPath" ] . $releaseBuild[ "toolingZip" ];
  $STABLE_RUNTIME_UPDATE_SITE = $stableBuilds->getUpdateSite( "runtime" );
  $STABLE_TOOLING_UPDATE_SITE = $stableBuilds->getUpdateSite( "tooling" );
  $RELEASE_RUNTIME_UPDATE_SITE = $releaseBuilds[ "runtimeSite" ];
  $RELEASE_TOOLING_UPDATE_SITE = $releaseBuilds[ "toolingSite" ];

?>

<div id="midcolumn">

  <h1>Downloads</h1>

  <p>
    The most convenient way to get RAP is the Eclipse package <em>for
    RCP and RAP Developers</em> from the
    <a href="http://www.eclipse.org/downloads/">Indigo
    download page</a>.
    This IDE includes everything you need to develop RCP and RAP
    applications.
  </p>
  <p>
    <div class="download-button">
      <a style="text-decoration: none;" href="http://www.eclipse.org/downloads/">
        <div style="margin: 0pt 5px;">
          <span class="download-icon" style="position: relative; top: -30px;"></span>
          <img src="../images/epp-download.png" alt="Eclipse for RCP and RAP Developers"/>
        </div>
      </a>
    </div>
  </p>

  <h3>RAP Tooling</h3>

  <p>
    The RAP Tooling contains useful tools, templates and documentation for RAP
    developers.
    It also installs the RAP target platform which is included.
    <a href="/rap/getting-started/">Learn</a> how to install RAP and build
    your first RAP application.
  </p>

  <div class="expand-head">
    <div class="expand-link download-button">
      <span class="download-icon"></span>
      <span>latest stable build</span>
    </div>
    <div class="expand-link download-button">
      <span class="download-icon"></span>
      <span>latest release</span></span>
    </div>
    <div class="expand-link download-button">
      <span class="download-icon"></span>
      <span>nightly build</span></span>
    </div>
  </div>

  <div class="expand-body">
    <!-- Tooling Latest Stable Build -->
    <div class="expand-item">
      <strong><?php echo $STABLE_NAME ?></strong>
      <p>
        <?php echo $STABLE_TOOLING_DESCRIPTION ?>
        <br/>
        Published: <?php echo $STABLE_DATE ?>
        <br/>
        <a href="<?php echo $STABLE_NOTEWORTHY_URL ?>">New &amp; Noteworthy</a>
      </p>
      <p class="download-row">
        <img src="/rap/images/site.gif" />
        Software site:
        <strong><?php echo $STABLE_TOOLING_UPDATE_SITE ?></strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" />
        Zipped version:
        <a href="<?php echo $STABLE_TOOLING_DOWNLOAD_URL ?>"><?php echo $STABLE_TOOLING_ZIP ?></a>
      </p>
    </div>

    <!-- Tooling Latest Release -->
    <div class="expand-item">
      <strong><?php echo $RELEASE_NAME ?></strong>
      <p>
        <?php echo $RELEASE_TOOLING_DESCRIPTION ?>
        <br/>
        Published: <?php echo $RELEASE_DATE ?>
        <br/>
        <a href="<?php echo $RELEASE_NOTEWORTHY_URL ?>">New &amp; Noteworthy</a>
        <?php echo $RELEASE_NOTES_LINK ?>
      </p>

      <p class="download-row">
        <img src="/rap/images/site.gif" />
        Software site:
        <strong><?php echo $RELEASE_TOOLING_UPDATE_SITE ?></strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" />
        Zipped version:
        <a href="<?php echo $RELEASE_TOOLING_DOWNLOAD_URL ?>"><?php echo $RELEASE_TOOLING_ZIP ?></a>
      </p>
    </div>

    <!-- Tooling Nightly -->
    <div class="expand-item">
      <strong>Nightly Build</strong>
      <p>
        <?php echo $STABLE_TOOLING_DESCRIPTION ?>
        <br/>
        Published: daily
      </p>

      <p class="download-row">
        <img src="/rap/images/site.gif" />
        Software site:
        <strong>http://download.eclipse.org/rt/rap/nightly/tooling/</strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" />
        Zipped version:
        <a href="https://hudson.eclipse.org/hudson/job/rap-tooling/lastStableBuild/">download from Hudson</a>
      </p>
    </div>
  </div>

  <h3>RAP Runtime (Target Components)</h3>

  <p>
    This contains the RAP runtime, including sources and a simple demo
    application. Note that this is already included in the RAP Tooling.
  </p>
  <p>
    To develop RAP applications you need to set the RAP runtime as your
    target platform.
    <a href="/rap/getting-started/runtime-install/">Learn</a> how to work with the target
    platform.
  </p>

  <p style="border-left: 3px solid #dd0000; padding: 2px 5px; color: #dd0000; font-weight: bold;">
    This is a target platform, do not try to install it into the Eclipse IDE!
  </p>

  <div class="expand-head">
    <div class="expand-link download-button">
      <span class="download-icon"></span>
      <span>latest stable build</span>
    </div>
    <div class="expand-link download-button">
      <span><span class="download-icon"></span>
      <span>latest release</span></span>
    </div>
    <div class="expand-link download-button">
      <span><span class="download-icon"></span>
      <span>nightly build</span></span>
    </div>
  </div>

  <div class="expand-body">

    <!-- Runtime Latest Stable Build -->
    <div class="expand-item">
      <strong><?php echo $STABLE_NAME ?></strong>
      <p>
        <?php echo $STABLE_RUNTIME_DESCRIPTION ?>
        <br/>
        Published: <?php echo $STABLE_DATE ?>
        <br/>
        <a href="<?php echo $STABLE_NOTEWORTHY_URL ?>">New &amp; Noteworthy</a>
      </p>
      <p class="download-row">
        <img src="/rap/images/site.gif" />
        Software site:
        <strong><?php echo $STABLE_RUNTIME_UPDATE_SITE ?></strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" />
        Zipped version:
        <a href="<?php echo $STABLE_RUNTIME_DOWNLOAD_URL ?>"><?php echo $STABLE_RUNTIME_ZIP ?></a>
      </p>
    </div>

    <!-- Runtime Latest Release -->
    <div class="expand-item">
      <strong><?php echo $RELEASE_NAME ?></strong>
      <p>
        <?php echo $RELEASE_RUNTIME_DESCRIPTION ?>
        <br/>
        Published: <?php echo $RELEASE_DATE ?>
        <br/>
        <a href="<?php echo $RELEASE_NOTEWORTHY_URL ?>">New &amp; Noteworthy</a>
        <?php echo $RELEASE_NOTES_LINK ?>
      </p>

      <p class="download-row">
        <img src="/rap/images/site.gif" />
        Software site:
        <strong><?php echo $RELEASE_RUNTIME_UPDATE_SITE ?></strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" />
        Zipped version:
        <a href="<?php echo $RELEASE_RUNTIME_DOWNLOAD_URL ?>"><?php echo $RELEASE_RUNTIME_ZIP ?></a>
      </p>
    </div>

    <!-- Runtime Nightly Build -->
    <div class="expand-item">
      <strong>Nightly Build</strong>
      <p>
        <?php echo $STABLE_RUNTIME_DESCRIPTION ?>
        <br/>
        Published: daily
        <br/>
      </p>
      <p class="download-row">
        <img src="/rap/images/site.gif" />
        Software site:
        <strong>http://download.eclipse.org/rt/rap/nightly/runtime/</strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" />
        Zipped version:
        <a href="https://hudson.eclipse.org/hudson/job/rap-runtime/lastStableBuild/">download from Hudson</a>
      </p>
    </div>
  </div>

</div>

<div id="rightcolumn">

  <?php includeSidebar( "eclipse.php" ) ?>
  <?php includeSidebar( "arrivals.php" ) ?>
  <?php includeSidebar( "archives.php" ) ?>

</div>

<?php

  printFooter();

?>
