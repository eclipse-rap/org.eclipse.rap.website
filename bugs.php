<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );
$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include( $App->getProjectCommon() );

$pageTitle = "RAP Project - Bugs";
$pageKeywords = "Ajax, rap, w4t, eclipse rap";
$pageAuthor = "Jochen Krause";

$html = <<<EOHTML
<div id="maincontent">
  <div id="midcolumn">

    <h1>Bugs</h1>

    <p>
      The best way to report a problem or to request a new feature in RAP
      is to use the Eclipse Bugzilla system.
      Here are some useful links to get you started:
    </p>

    <div class="homeitem3col">
      <h4>Find existing bug reports</h4>
      <ul>
        <li>
          <a href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc_type=allwordssubstr&bug_severity=enhancement&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bugidtype=include&columnlist=bug_status%2Cshort_desc&product=RAP&query_format=advanced&order=bug_id">
          All open bug reports and enhancement requests</a>
        </li>
        <li>
          <a href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc_type=allwordssubstr&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bugidtype=include&columnlist=bug_status%2Cshort_desc&product=RAP&query_format=advanced&order=bug_id">
          All open enhancement requests</a>
        </li>
        <li>
          <a href="https://bugs.eclipse.org/bugs/query.cgi?query_format=advanced&classification=RT&product=RAP">
          Bugzilla search form</a>
        </li>
      </ul>

      <h4>Report a new bug or enhancement request</h4>
      <ul>
        <li>
          <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=RAP&rep_platform=All&op_sys=all">
          Bugzilla bug report form</a>
        </li>
      </ul>
      <p style="margin:5px 0">
        Please search for duplicates first. For defects provide details on
        how to reproduce. For enhancements please outline a use case.
      </p>
      <p style="margin:5px 0">
        Further information on how to write bug reports can be found in the
        <a href="http://wiki.eclipse.org/RAP_Bug_Reporting_Howto">RAP Bug Reporting Howto</a>.
      </p>
    </div>
    <hr class="clearer" />
  </div>
</div>
EOHTML;

generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
