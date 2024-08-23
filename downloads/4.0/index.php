<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  require_once( $_SERVER['DOCUMENT_ROOT'] . "/rap/_Builds.php" );

  $builds = new Builds( "4.0" );

  $title = "RAP - " . $builds->getVersion() . " Downloads";
  $navPosition = array( "download", "downloads" );
  printHeader( $title, $navPosition );

  function getBuildTypeHeader( $type ) {
    if( $type === "Release" ) {
      return $type;
    }
    return $type . "s";
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
    <a href="/rap/noteworthy/<?= $builds->findBuild( "R" )->getNews() ?>">New &amp; Noteworthy</a>
  </p>

  <h2>Features</h2>

  <h3>RAP (Runtime)</h3>

  <p>
    <?= $builds->getDescription( "runtime" ) ?>
  </p>

  <p>
    Software Site:
    <img src="/rap/images/site.gif" alt="site" />
    <?= $builds->getUpdateSite( "runtime" ) ?>
  </p>

  <h3>RAP E4 (Runtime)</h3>

  <p>
    <?= $builds->getDescription( "runtime4" ) ?>
  </p>

  <p>
    Software Site:
    <img src="/rap/images/site.gif" alt="site" />
    <?= $builds->getUpdateSite( "runtime4" ) ?>
  </p>

  <h3>RAP Tools</h3>

  <p>
    <?= $builds->getDescription( "tools" ) ?>
  </p>

  <p>
    Software Site:
    <img src="/rap/images/site.gif" alt="site" />
    <?= $builds->getUpdateSite( "tools" ) ?>
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
        <a href="<?= $build->getZipFileUrl( "runtime" ) ?>">
          <img src="/rap/images/zip.gif" alt="zip" /> RAP
        </a>
      </td>
      <td>
        <a href="<?= $build->getZipFileUrl( "runtime4" ) ?>">
          <img src="/rap/images/zip.gif" alt="zip" /> RAP E4
        </a>
      </td>
      <td>
        <a href="<?= $build->getZipFileUrl( "tools" ) ?>">
          <img src="/rap/images/zip.gif" alt="zip" /> RAP Tools
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
  <?php includeSidebar( "rap-feed.php" ) ?>
  <?php includeSidebar( "contributors.php" ) ?>
</div>

<?php
  printFooter();
?>
