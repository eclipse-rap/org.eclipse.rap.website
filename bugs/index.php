<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Bugs";
  $navPosition = array( "contribute", "bugs" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Bugs</h1>

  <p>
    Bugs and feature requests for RAP are tracked in the the Eclipse Bugzilla.
  </p>

  <h2>Find existing bug reports</h2>

  <ul>
    <li>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc_type=allwordssubstr&amp;bug_severity=blocker&amp;bug_severity=critical&amp;bug_severity=major&amp;bug_severity=normal&amp;bug_severity=minor&amp;bug_severity=trivial&amp;bug_severity=enhancement&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;bugidtype=include&amp;columnlist=bug_status%2Cshort_desc&amp;product=RAP&amp;query_format=advanced&amp;order=bug_id">
      All open bug reports and enhancement requests</a>
    </li>
    <li>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc_type=allwordssubstr&amp;bug_severity=enhancement&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;bugidtype=include&amp;columnlist=bug_status%2Cshort_desc&amp;product=RAP&amp;query_format=advanced&amp;order=bug_id">
      All open enhancement requests</a>
    </li>
    <li>
      <a href="https://bugs.eclipse.org/bugs/query.cgi?query_format=advanced&amp;classification=RT&amp;product=RAP">
      Bugzilla search form</a>
    </li>
  </ul>

  <h2>Report a new bug or enhancement request</h2>

  <p>
    Reporting a bug takes only a few minutes. Start here:
  </p>

  <ul>
    <li>
      <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=RAP&amp;rep_platform=All&amp;op_sys=all">
      Bugzilla bug report form</a>
    </li>
  </ul>

  <h3>Write good bug reports</h3>
  <p>
    Choose a short and concise title and include the following information in the description:
  </p>
  <ul>
    <li>your environment (operating system, browser type and version, RAP version)</li>
    <li>the steps to reproduce the behavior described</li>
    <li>the expected outcome / solution, or for enhancement requests, your use case</li>
  </ul>
  <p>
    If the reported problem is not obvious, a <em>simple snippet</em> may be helpful for us
    to reproduce the issue.
    If you report some visual misbehavior, a <em>screenshot</em> helps us understand your problem.
    Remember that we don't have your exact desktop environment and browser.
  </p>

  <h3>Only one problem per bug, please!</h3>
  <p>
    Even if issues appear related, every problem deserves its own bug.
  </p>

  <h3>Is it a bug?</h3>
  <p>
    If you're not sure if a certain behavior in RAP is really a bug, you can ask on the
    <a href="http://www.eclipse.org/forums/eclipse.technology.rap">RAP forum</a>
    before. If the issue is related to RAP's implementation of Eclipse APIs like SWT or JFace, you
    should try your snippet in SWT and see as it works as expected there.
  </p>

  <h3>References</h3>
  <ul>
    <li><a href="http://wiki.eclipse.org/Bug_Reporting_FAQ">Eclipse Bug Reporting FAQ</a></li>
    <li><a href="http://wiki.eclipse.org/FAQ_How_do_I_report_a_bug_in_Eclipse%3F">FAQ: How do I report a bug in Eclipse?</a></li>
  </ul>

</div>

<div id="rightcolumn">
</div>

<?php
  printFooter();
?>
