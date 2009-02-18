<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - 1.1.2 Release Notes";
$pageKeywords	= "AJAX, rap, eclipse rap";
$pageAuthor		= "R�diger Herrmann";

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

<div id="midcolumn">
  <h1>1.1.2 Release Notes</h1>
  <p>
    The 1.1.2 service release is now available for
    <a href="http://www.eclipse.org/rap/downloads">download</a>.
  </p>

  <p>
    This release includes a new version of the Javascript library
    <a href="http://qooxdoo.org">qooxdoo</a>.
    We decided to include this version because it brings a major improvement in
    client memory consumption and resolves long-standing problems with memory
    leakage, especially in Internet Explorer.
    It is important to point out that this improvement would not have been
    possible without the great support by the RAP community, most notably from
    Stefan Hansel who tracked down a number of significant memory leaks
    in qooxdoo and provided patches to the qooxdoo developers.
  </p>

  <p>
    This release also provides a couple of bug fixes:
    <ul>
      <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=244976">
        244976: Reduce Browser Memory Consumption</a></li>
      <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=257022">
        257022: Migrate to qooxdoo 0.7.4</a></li>
      <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=239104">
        239104: Incorrect value on combo after selection</a></li>
      <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=258427">
        258427: DoubleClick event missing in IE with qooxdoo 0.7.4</a></li>
      <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=252354">
        252354: HTTP 500 while double clicking Link control (Firefox, Chrome)</a></li>
      <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=196014">
        196014: [Group] Group layout broken in IE and Opera</a></li>
    </ul>
  </p>

  <p>
    For a list of features that were added during the 1.1 development cycle,
    please see the <a href="news_11.php">New & Noetworthy</a> page.
  </p>
</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
