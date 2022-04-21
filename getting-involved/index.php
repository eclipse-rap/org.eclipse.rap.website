<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Getting Involved";
  $navPosition = array( "community", "getting-involved" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Getting involved with RAP development</h1>

  <p>
    You are invited to contribute to RAP. This includes:
  </p>
  <ul>
    <!-- share findings in the newsgroup -->
    <li>
      <strong>Write a valuable bug report.</strong>
      If you've found a defect in RAP, please don't keep it to yourself.
      Every environment is a bit different, and you may be the first one to notice the problem.
      So please, <a href="../bugs/">file a new bug</a> to let us know!
    </li>
    <li>
      <strong>Provide a fix.</strong>
      If you're familiar with the <a href="../source/">souce code</a> and know how to fix a problem,
      please consider to contribute your fix.
      We use the <a href="https://docs.github.com/en/pull-requests">GitHub pull requests</a> for all
      incoming code changes so you can easily push your commit for review.
    </li>
    <li>
      <strong>Contribute a custom component.</strong>
      If you wrote a custom component for RAP that might be useful to others, please consider to
      contribute it back.
      The
      <a href="/rap/incubator/">Incubator</a> might be a suitable place to host it.
      Please contact us on the
      <a href="http://dev.eclipse.org/mhonarc/lists/rap-dev/">developer mailing list</a>
      if you'd like to share your code.
    </li>
  </ul>

  <h2>Developer resources</h2>

  <ul>
    <li>
      As a contributor, you should work with the latest
      <a href="/rap/source/">source code</a>.
    </li>
    <!-- Tests -->
    <li>
      Please take a minute to read over our
      <a href="http://wiki.eclipse.org/RAP/CodingStandards">Coding Standards</a>.
    </li>
    <li>
      Development-related questions are discussed on the
      <a href="https://dev.eclipse.org/mailman/listinfo/rap-dev">rap-dev</a>
      mailing list.
    </li>
  </ul>

</div>

<div id="rightcolumn">
  <?php includeSidebar( "contributors.php" ) ?>
</div>

<?php
  printFooter( $title, $navPosition );
?>
