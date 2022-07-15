<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  require_once( $_SERVER['DOCUMENT_ROOT'] . "/rap/_Builds.php" );

  $buildName = isset( $_GET[ 'build' ] ) ? $_GET[ 'build' ] : "R";

  $builds = new Builds( "3.22" );

  $build = $builds->findBuild( $buildName );
  if( !$build ) {
    header( "HTTP/1.1 404 Not Found" );
    exit( "Unknown build id" );
  }

  $PAGE_TITLE = "RAP " . $build->getName() . " - New and Noteworthy";
  $PAGE_NAV_POSITION = array( "documentation", "noteworthy" );

  printHeader();

?>

<div id="midcolumn">

  <h1><?= $PAGE_TITLE ?></h1>

  <p>
    Here's a list of the most noteworthy things in the RAP
    <?= $build->getName() ?> <?= strtolower( $build->getType() ) ?>
<? if( $build->isCompleted() ) { ?>
      which is available for <a href="http://www.eclipse.org/rap/downloads/">download</a>
      since <?php echo formatDate( $build->getPublishDate() ) ?>.
<? } else { ?>
      which will be available for <a href="http://www.eclipse.org/rap/downloads/">download</a>
      on <?php echo formatDate( $build->getPublishDate() ) ?>.
      In the meantime, all changes described here are available in the most recent
      <a href="http://www.eclipse.org/rap/downloads/">nightly build</a>.
<? } ?>
  </p>

<? include( "_news-${buildName}.html" ); ?>

  <h2>Issues fixed</h2>

  <ul>
    <li>
      List of all <a href="<?= $builds->getGithubIssuesUrl( "runtime" ) ?>">issues fixed in
      RAP Runtime <?= $builds->getVersion() ?></a>.
    </li>
    <li>
      List of all <a href="<?= $builds->getGithubIssuesUrl( "tools" ) ?>">issues fixed in
      RAP Tools <?= $builds->getVersion() ?></a>.
    </li>
  </ul>

</div>

<div id="rightcolumn">
  <? includeSidebar( "migrationguide.php" ) ?>
  <? includeSidebar( "releases.php" ) ?>
</div>

<?
  printFooter();
?>
