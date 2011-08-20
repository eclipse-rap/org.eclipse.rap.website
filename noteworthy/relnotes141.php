<?php

include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$pageTitle = "RAP Project - 1.4.1 Service Release Notes";
$pageKeywords = "rap, ajax, eclipse, equinox, eclipse rap, equinox rap";
$pageAuthor = "The RAP Team";

$html = <<<EOHTML

<div id="midcolumn">
  <h1>1.4.1 Service Release</h1>
  <p>
    RAP 1.4.1 is a service release to fix serious defects present in the
    <a href="/rap/noteworthy/1.4/">RAP 1.4 release</a>.
  </p>
  <p>
    The following bugzilla query lists all defects that have been fixed in this
    service release:
    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=RT&product=RAP&status_whiteboard_type=allwordssubstr&status_whiteboard=sr141&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED">
    Bugs fixed in the 1.4.1 release</a>.
  </p>
  <!--p>
    The service is available for <a href="/downloads/1.4/">download</a>.
  </p-->
</div>

EOHTML;

# Generate the web page
$navPosition = array( "download", "noteworthy" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );

?>
