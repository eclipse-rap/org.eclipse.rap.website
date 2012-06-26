<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "RAP - New and Noteworthy";
  $navPosition = array( "download", "noteworthy" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>New and Noteworthy</h1>

  <p>
    For each milestone build we provide a summary of new features, notable changes and a list of
    bugfixes on a <em>New and Noteworthy</em> page.
  </p>

  <h3>Current development stream</h3>

  <ul>
    <li>
      <a href="1.5/">RAP 1.5 release</a>, will be published June 27, 2012.
    </li>
    <li>
      <a href="1.5/?build=RC1">RAP 1.5 RC1 milestone build</a>, published May 25, 2012.
    </li>
    <li>
      <a href="1.5/?build=M7">RAP 1.5 M7 milestone build</a>, published May 11, 2012.
    </li>
    <li>
      <a href="1.5/?build=M6">RAP 1.5 M6 milestone build</a>, published March 23, 2012.
    </li>
    <li>
      <a href="1.5/?build=M5">RAP 1.5 M5 milestone build</a>, published February 03, 2012.
    </li>
    <li>
      <a href="1.5/?build=M4">RAP 1.5 M4 milestone build</a>, published December 16, 2011.
    </li>
    <li>
      <a href="1.5/?build=M3">RAP 1.5 M3 milestone build</a>, published November 11, 2011.
    </li>
    <li>
      <a href="1.5/?build=M2">RAP 1.5 M2 milestone build</a>, published October 30, 2011.
    </li>
    <li>
      <a href="1.5/?build=M1">RAP 1.5 M1 milestone build</a>, published August 22, 2011.
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
  <?php includeSidebar( "releases.php" ) ?>
</div>

<?php
  printFooter();
?>
