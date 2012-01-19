<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  require_once( $_SERVER['DOCUMENT_ROOT'] . "/rap/_Builds.php" );

  $builds = new Builds( "builds.xml" );
  if( $builds->hasError() ) {
    echo '<div class="error">There was a problem loading the build data for this site.</div>';
  }

  $title = "RAP - " . $builds->getVersion() . " Downloads";
  $navPosition = array( "download", "achive" );
  printHeader( $title, $navPosition );

  function getBuildTypeHeader( $type ) {
    if( $type === "milestone build" ) {
      return "Milestone Builds";
    }
    if( $type === "release candidate" ) {
      return "Release Candidates";
    }
    if( $type === "release" ) {
      return "Release";
    }
    if( $type === "service release" ) {
      return "Service Releases";
    }
  }

?>

<div id="midcolumn">

  <h1>RAP <?= $builds->getVersion() ?></h1>

  <p>
    Release Date: <?= formatDate( $builds->findBuild( "R" )->getPublishDate() ); ?>
<? if( $builds->getSimultaneousRelease() ) { ?>
      - together with Eclipse <?= $builds->getSimultaneousRelease(); ?>
<? } ?>
    <br/>
    <a href="/rap/noteworthy/<?= $releaseBuild[ "news" ] ?>">New &amp; Noteworthy</a>
  </p>

  <h2>Features</h2>

  <h3>RAP Tooling</h3>

  <p>
    <?= $builds->getDescription( "tooling" ) ?>
  </p>

  <p>
    Software Site:
    <img src="/rap/images/site.gif"/>
    <?= $builds->getUpdateSite( "tooling" ) ?>
  </p>

  <h3>RAP Runtime</h3>

  <p>
    <?= $builds->getDescription( "runtime" ) ?>
  </p>

  <p>
    Software Site:
    <img src="/rap/images/site.gif"/>
    <?= $builds->getUpdateSite( "runtime" ) ?>
  </p>

  <h2>Builds</h2>

  <table class="builds">

<? $lastType = NULL; ?>
<? foreach( $builds->getPreviousBuilds( '' ) as $build ) { ?>
<?   if( $lastType != $build->getType() ) { ?>

      <tr><td colspan="3"><h3><?= getBuildTypeHeader( $build->getType() ) ?></h3></td></tr>

<?   } ?>
<?   $lastType = $build->getType(); ?>

    <tr>
      <td class="build-header">
        <strong><?= $build->getName() ?></strong>
      </td>
      <td>
        <?= formatDate( $build->getPublishDate() ) ?>
      </td>

<?   if( $build->isCompleted() ) { ?>

      <td>
        <a href="/rap/noteworthy/<?= $build->getNews() ?>">New &amp; Noteworthy</a>
      </td>
      <td>
        <a href="<?= $downloadPath . $build->getZipFile( "tooling" ) ?>">
          <img src="/rap/images/zip.gif"/> Tooling
        </a>
      </td>
      <td>
        <a href="<?= $downloadPath . $build->getZipFile( "runtime" ) ?>">
          <img src="/rap/images/zip.gif"/> Runtime
        </a>
      </td>

<?   } else { ?>

      <td colspan="3">
        <em>planned</em>
      </td>

<? } ?>

    </tr>

<? } ?>

  </table>

</div>

<div id="rightcolumn">
  <?php includeSidebar( "eclipse.php" ) ?>
  <?php includeSidebar( "rap-feed.php" ) ?>
  <?php includeSidebar( "contributors.php" ) ?>
</div>

<?php
  printFooter();
?>
