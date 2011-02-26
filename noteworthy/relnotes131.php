<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );
$App = new App();
$Nav = new Nav();
$Menu = new Menu();

include( $App->getProjectCommon() );

$pageTitle = "RAP Project - 1.3.1 Service Release Notes";
$pageKeywords = "rap, ajax, eclipse, equinox, eclipse rap, equinox rap";
$pageAuthor = "The RAP Team";

$html = <<<EOHTML

<div id="midcolumn">
  <h1>1.3.1 Service Release</h1>
  <p>
    RAP 1.3.1 is a service release to fix serious defects present in the
    <a href="/rap/noteworthy/1.3/">RAP 1.3 release</a>.
  </p>
  <p>
    The following bugzilla query lists all defects that have been fixed in this
    service release:
    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=RT&product=RAP&status_whiteboard_type=allwordssubstr&status_whiteboard=sr131&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED">
    Bugs fixed in the 1.3.1 release</a>.
  </p>
  <p>
    The service is available for <a href="/downloads/1.3/">download</a>.
  </p>
</div>

EOHTML;

# Generate the web page
generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );

?>
