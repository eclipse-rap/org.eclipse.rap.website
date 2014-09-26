<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  require_once( $_SERVER['DOCUMENT_ROOT'] . "/rap/_Builds.php" );

  $title = "RAP - Downloads";
  $navPosition = array( "download", "downloads" );
  printHeader( $title, $navPosition );

  // --- TO BE CHANGED WITH EVERY RELEASE ---

  $releaseBuilds = new Builds( "2.3" );
  $stableBuilds = new Builds( "3.0" );

  // ---

  $stableBuild = $stableBuilds->getLastCompletedBuild();
  $releaseBuild = $releaseBuilds->getLastCompletedReleaseBuild();

  $newsUrl = "../noteworthy/";

  $STABLE_RUNTIME_DESCRIPTION = $stableBuilds->getDescription( "runtime" );
  $STABLE_TOOLING_DESCRIPTION = $stableBuilds->getDescription( "tools" );
  $STABLE_NAME = $stableBuild->getName() . ' ' . $stableBuild->getType();
  $STABLE_DATE = formatDate( $stableBuild->getPublishDate() );
  $STABLE_NOTEWORTHY_URL = $newsUrl . $stableBuild->getNews();
  $STABLE_RUNTIME_ZIP = $stableBuild->getZipFile( "runtime" );
  $STABLE_TOOLING_ZIP = $stableBuild->getZipFile( "tools" );
  $STABLE_RUNTIME_ZIP_URL = $stableBuild->getZipFileUrl( "runtime" );
  $STABLE_TOOLING_ZIP_URL = $stableBuild->getZipFileUrl( "tools" );
  $STABLE_RUNTIME_UPDATE_SITE = $stableBuilds->getUpdateSite( "runtime" );
  $STABLE_TOOLING_UPDATE_SITE = $stableBuilds->getUpdateSite( "tools" );

  $RELEASE_RUNTIME_DESCRIPTION = $releaseBuilds->getDescription( "runtime" );
  $RELEASE_TOOLING_DESCRIPTION = $releaseBuilds->getDescription( "tools" );
  $RELEASE_NAME = $releaseBuild->getName() . ' ' . $releaseBuild->getType();
  $RELEASE_DATE = formatDate( $releaseBuild->getPublishDate() );
  $RELEASE_NOTEWORTHY_URL = $newsUrl . $releaseBuild->getNews();
  $RELEASE_NOTES_URL = $releaseBuild->getReleaseNotes() ? $newsUrl . $releaseBuild->getReleaseNotes() : "";
  $RELEASE_RUNTIME_ZIP = $releaseBuild->getZipFile( "runtime" );
  $RELEASE_TOOLING_ZIP = $releaseBuild->getZipFile( "tools" );
  $RELEASE_RUNTIME_ZIP_URL = $releaseBuild->getZipFileUrl( "runtime" );
  $RELEASE_TOOLING_ZIP_URL = $releaseBuild->getZipFileUrl( "tools" );
  $RELEASE_RUNTIME_UPDATE_SITE = $releaseBuilds->getUpdateSite( "runtime" );
  $RELEASE_TOOLING_UPDATE_SITE = $releaseBuilds->getUpdateSite( "tools" );

?>

<div id="midcolumn">

  <h1>Downloads</h1>

  <p>
    If you are new to RAP, please take a look at the <q>Getting Started</q>
    section of the <a href="/rap/developers-guide/">Developers Guide</a> before downloading.
  </p>

  <h2>RAP (Target Components)</h2>

  <p>
    To develop RAP applications you need to set a target platform that contains RAP.
    We provide a target platform that contains RAP, Equinox, Jetty, and everything you need to
    run a RAP application.
    <a href="/rap/developers-guide/devguide.php?topic=target-install.html">Learn</a> how to work with the target
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
      <span class="download-icon"></span>
      <span>latest release</span>
    </div>
    <div class="expand-link download-button">
      <span class="download-icon"></span>
      <span>nightly build</span>
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
        <img src="/rap/images/site.gif" alt="site" />
        Software site:
        <strong><?php echo $STABLE_RUNTIME_UPDATE_SITE ?></strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" alt="zip" />
        Zipped version:
        <a href="<?php echo $STABLE_RUNTIME_ZIP_URL ?>"><?php echo $STABLE_RUNTIME_ZIP ?></a>
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
        <? if( $RELEASE_NOTES_URL ) { ?>
          <a href="<?php echo $RELEASE_NOTES_URL ?>">Release Notes</a>
        <? } ?>
      </p>

      <p class="download-row">
        <img src="/rap/images/site.gif" alt="site" />
        Software site:
        <strong><?php echo $RELEASE_RUNTIME_UPDATE_SITE ?></strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" alt="zip" />
        Zipped version:
        <a href="<?php echo $RELEASE_RUNTIME_ZIP_URL ?>"><?php echo $RELEASE_RUNTIME_ZIP ?></a>
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
        <img src="/rap/images/site.gif" alt="site" />
        Software site:
        <strong>http://download.eclipse.org/rt/rap/nightly/runtime/</strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" alt="zip" />
        Zipped version:
        <a href="https://hudson.eclipse.org/rap/job/rap-head-runtime/lastStableBuild/">download from Hudson</a>
      </p>
    </div>
  </div>

  <h2>RAP Tools</h2>
  <p>
    Contains useful tools, templates and documentation for RAP developers.
    It comes with a target installer for the latest RAP target platform.
    <a href="/rap/developers-guide/devguide.php?topic=setup-ide.html">Learn</a> how to install RAP and build
    your first RAP application.
  </p>

  <h3>Download an Eclipse IDE package with RAP Tools included</h3>
  <p>
    The most convenient way to get the RAP Tools is using the Eclipse package <em>for
    RCP and RAP Developers</em> from the
    <a href="http://www.eclipse.org/downloads/">Eclipse download page</a>.
    This IDE includes everything you need to develop RCP and RAP
    applications.
  </p>
  <div class="download-button">
    <a style="text-decoration: none;" href="http://www.eclipse.org/downloads/">
      <span style="margin: 0pt 5px; display: block;">
        <span class="download-icon" style="position: relative; top: -30px;"></span>
        <img src="../images/epp-download.png" alt="Eclipse for RCP and RAP Developers"/>
      </span>
    </a>
  </div>

  <h3>Install RAP Tools separately</h3>
  <p>
    Alternatively, you can install the RAP Tools into your IDE from an online or a zipped software
    repository.
  </p>

  <div class="expand-head">
    <div class="expand-link download-button">
      <span class="download-icon"></span>
      <span>latest stable build</span>
    </div>
    <div class="expand-link download-button">
      <span class="download-icon"></span>
      <span>latest release</span>
    </div>
    <div class="expand-link download-button">
      <span class="download-icon"></span>
      <span>nightly build</span>
    </div>
  </div>

  <div class="expand-body">
    <!-- Tools Latest Stable Build -->
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
        <img src="/rap/images/site.gif" alt="site" />
        Software site:
        <strong><?php echo $STABLE_TOOLING_UPDATE_SITE ?></strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" alt="zip" />
        Zipped version:
        <a href="<?php echo $STABLE_TOOLING_ZIP_URL ?>"><?php echo $STABLE_TOOLING_ZIP ?></a>
      </p>
    </div>

    <!-- Tools Latest Release -->
    <div class="expand-item">
      <strong><?php echo $RELEASE_NAME ?></strong>
      <p>
        <?php echo $RELEASE_TOOLING_DESCRIPTION ?>
        <br/>
        Published: <?php echo $RELEASE_DATE ?>
        <br/>
        <a href="<?php echo $RELEASE_NOTEWORTHY_URL ?>">New &amp; Noteworthy</a>
        <? if( $RELEASE_NOTES_URL ) { ?>
          <a href="<?php echo $RELEASE_NOTES_URL ?>">Release Notes</a>
        <? } ?>
      </p>

      <p class="download-row">
        <img src="/rap/images/site.gif" alt="site" />
        Software site:
        <strong><?php echo $RELEASE_TOOLING_UPDATE_SITE ?></strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" alt="zip" />
        Zipped version:
        <a href="<?php echo $RELEASE_TOOLING_ZIP_URL ?>"><?php echo $RELEASE_TOOLING_ZIP ?></a>
      </p>
    </div>

    <!-- Tools Nightly -->
    <div class="expand-item">
      <strong>Nightly Build</strong>
      <p>
        <?php echo $STABLE_TOOLING_DESCRIPTION ?>
        <br/>
        Published: daily
      </p>

      <p class="download-row">
        <img src="/rap/images/site.gif" alt="site" />
        Software site:
        <strong>http://download.eclipse.org/rt/rap/nightly/tooling/</strong>
      </p>
      <p class="download-row">
        <img src="/rap/images/zip.gif" alt="zip" />
        Zipped version:
        <a href="https://hudson.eclipse.org/rap/job/rap-head-tools/lastStableBuild/">download from Hudson</a>
      </p>
    </div>
  </div>

  <h2>Source Code</h2>
  <p>
    Both the tools and the runtime have source bundles included, so you can browse the code in your
    IDE.
    If you want to check out the source code from git, see <a href="/rap/source/">this page</a>.
  </p>

</div>

<div id="rightcolumn">
  <?php includeSidebar( "arrivals.php" ) ?>
  <?php includeSidebar( "releases.php" ) ?>
</div>

<?php
  printFooter();
?>
