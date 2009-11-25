<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these.
$pageTitle 		= "RAP Project- Contribute";
$pageKeywords	= "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor		= "Ralf Sternberg";

$html = <<<EOHTML
<div id="maincontent">
  <div id="midcolumn">

    <h1>Contributing to RAP development</h1>
    <p>
      Everyone is invited to contribute to the RAP project.
      Contributing may include
      <ul>
        <!-- share findings in the newsgroup -->
        <li>
          Writing a valuable bug report, i.e. report a defect that is not
          already known, provide a short and concise explanation of the problem,
          a snippet to reproduce the issue, ideally a JUnit test case that
          outlines the expected behavior.
          See the
          <a href="http://wiki.eclipse.org/RAP_Bug_Reporting_Howto">Bug Reporting Howto</a>
          for details.
        </li>
        <li>
          Providing a patch to an <a href="http://eclipse.org/rap/bugs.php">existing bug report</a>.
          A patch must not break existing functionality, particularly it should
          not break any tests.
          If necessary, it should contain changes or additions to our tests.
          If changes are needed, you should explain why you think the test
          needs to be changed.
        </li>
        <li>
          Contribute a custom component.
          If you wrote a custom component for RAP that might be useful to
          others, it could be hosted in the
          <a href="incubator.php">Incubator</a>.
          Please contact us on the
          <a href="http://dev.eclipse.org/mhonarc/lists/rap-dev">developer mailing list</a> 
          if you'd like to share your code.
        </li>
      </ul>
    </p>

    <h2>Developer resources</h2>    
    <p>
      <ul>
        <li>
          Contributors should, of course, work against the CVS.
          See <a href="cvs.php">CVS page</a> for instructions.
        </li>
        <!-- Tests -->
        <li>
          Contributors should adhere to our
          <a href="http://wiki.eclipse.org/RAP/CodingConventions">Coding Conventions</a>.
        </li>
        <li>
          We have a mailing list for development-related discussions around RAP:
          <a href="https://dev.eclipse.org/mailman/listinfo/rap-dev">rap-dev</a>.
        </li>
      </ul>
    </p>
  </div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
