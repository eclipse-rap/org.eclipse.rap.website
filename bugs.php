<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "RAP Project - Bugs";
	$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
	$pageAuthor		= "Jochen Krause";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
  <div id="midcolumn">

    <h1>Bugs</h1>

    <p>The best way to report a problem or request a new feature in RAP
      is to use the Bugzilla system. Here are some useful links to get you
      started:</p>

    <div class="homeitem3col">
      <h3>Bugzilla Links</h3>
      <ul>
        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=RAP&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=nowords&keywords=plan&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
          Show all open bug reports</a>
        </li>
        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=RAP&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
          Show open enhancement requests</a>
        </li>
        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?field0-0-0=votes;columnlist=votes%2Cbug_severity%2Cpriority%2Cshort_desc;classification=RT;query_format=advanced;bug_status=UNCONFIRMED;bug_status=NEW;bug_status=ASSIGNED;bug_status=REOPENED;type0-0-0=greaterthan;value0-0-0=0;product=RAP">
          Show most voted bugs</a>
        </li>
        <li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=RAP&rep_platform=All&op_sys=all">
          Report a new bug or enhancement</a>
          <br />
          Please search for duplicates first. For defects provide details on
          how to reproduce. For enhancements please outline a use case.
          <br />
          Further information on how to write bug reports can be found in the
          <a href="http://wiki.eclipse.org/RAP_Bug_Reporting_Howto">RAP Bug Reporting Howto</a>
        </li>
      </ul>
    </div>
    <hr class="clearer" />
  </div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
