<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Bugs";
  $navPosition = array( "contribute", "bugs" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Bugs</h1>

  <p>
    The best way to report a problem or to request a new feature in RAP
    is to use the Eclipse Bugzilla system.
    Here are some useful links to get you started:
  </p>

  <h2>Find existing bug reports</h2>

  <ul>
    <li>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc_type=allwordssubstr&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bugidtype=include&columnlist=bug_status%2Cshort_desc&product=RAP&query_format=advanced&order=bug_id">
      All open bug reports and enhancement requests</a>
    </li>
    <li>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc_type=allwordssubstr&bug_severity=enhancement&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bugidtype=include&columnlist=bug_status%2Cshort_desc&product=RAP&query_format=advanced&order=bug_id">
      All open enhancement requests</a>
    </li>
    <li>
      <a href="https://bugs.eclipse.org/bugs/query.cgi?query_format=advanced&classification=RT&product=RAP">
      Bugzilla search form</a>
    </li>
  </ul>

  <h2>Report a new bug or enhancement request</h2>

  <ul>
    <li>
      <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=RAP&rep_platform=All&op_sys=all">
      Bugzilla bug report form</a>
    </li>
  </ul>

  <p>
    Please search for duplicates first. For defects provide details on how to reproduce.
    For enhancements please outline a use case.
  </p>
  <p>
    Further information on how to write bug reports can be found in the
    <a href="http://wiki.eclipse.org/RAP_Bug_Reporting_Howto">RAP Bug Reporting Howto</a>.
  </p>

</div>

<div id="rightcolumn">

  <?php includeSidebar( "eclipse.php" ) ?>

</div>

<?php

  printFooter();

?>
