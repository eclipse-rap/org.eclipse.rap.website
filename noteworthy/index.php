<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "RAP - New and Noteworthy";
  $navPosition = array( "download", "noteworthy" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>New and Noteworthy</h1>

  <p>
    For each milestone build we provide a summary of new features, changes and bugfixes in our
    New and Noteworthy summary.
  </p>

  <h3>Current development stream</h3>

  <ul>
    <li>
      <a href="1.5/news_M4.php">RAP 1.5 M4 milestone build</a>, published December 16, 2011.
    </li>
    <li>
      <a href="1.5/news_M3.php">RAP 1.5 M3 milestone build</a>, published November 11, 2011.
    </li>
    <li>
      <a href="1.5/news_M2.php">RAP 1.5 M2 milestone build</a>, published October 30, 2011.
    </li>
    <li>
      <a href="1.5/news_M1.php">RAP 1.5 M1 milestone build</a>, published August 22, 2011.
    </li>
  </ul>

  <h3>Latest release</h3>

  <ul>
    <li>
      <a href="1.4/">RAP 1.4 release</a>, published June 22, 2011.
    </li>
  </ul>

  <p>
    For previous builds, visit our <a href="/rap/downloads">download pages</a>.
  </p>

</div>

<div id="rightcolumn">
  <?php includeSidebar( "archives.php" ) ?>
</div>

<?php
  printFooter();
?>
