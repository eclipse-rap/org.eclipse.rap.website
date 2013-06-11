<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  require_once( $_SERVER['DOCUMENT_ROOT'] . "/rap/_Builds.php" );

  $buildName = isset( $_GET[ 'build' ] ) ? $_GET[ 'build' ] : "R";

  $builds = new Builds( "2.0" );

  $build = $builds->findBuild( $buildName );
  if( !$build ) {
    header( "HTTP/1.1 404 Not Found" );
    exit( "Unknown build id" );
  }

  $title = "RAP " . $build->getName() . " - New and Noteworthy";
  $navPosition = array( "documentation", "noteworthy" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1><?php echo $title ?></h1>

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

  <h2>Bugfixes</h2>

  <p>
    <a href="<?= createBuglistUrl( $build->getTargetMilestones() ) ?>">This list</a>
    shows all bugs that have been fixed for this <?php echo strtolower( $build->getType() ); ?>.
  </p>

<? if( $buildName !== "R" && substr( $buildName, 0, 2 ) !== "SR" ) { ?>
  <h2>Previous Builds</h2>

  <p>
    The above features are just the ones that are new since the last milestone build.
    Summaries for earlier builds:
  </p>
  <ul>
<? foreach( $builds->getPreviousBuilds( $build->getShortName() ) as $prevBuild ) { ?>
    <li>
      <a href="./?build=<?php echo $prevBuild->getShortName(); ?>">News for RAP <?php echo $prevBuild->getName(); ?></a>
    </li>
<? } ?>
  </ul>
<? } ?>

</div>

<div id="rightcolumn">
  <? includeSidebar( "migrationguide.php" ) ?>
  <? includeSidebar( "releases.php" ) ?>
</div>

<?
  printFooter();
?>
