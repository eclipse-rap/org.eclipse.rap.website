<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Getting Involved";
  $navPosition = array( "contribute", "index" );
  printHeader( $title, $navPosition );

?>

<div id="maincontent">

  <div id="midcolumn">

    <h1>Getting involved with RAP development</h1>
    <p>
      Everyone is invited to getting involved with the RAP project.
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
          Providing a patch to an <a href="/rap/bugs/">existing bug report</a>.
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
          <a href="/rap/incubator/">Incubator</a>.
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
          See <a href="/rap/source/">CVS page</a> for instructions.
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

<div id="rightcolumn">

  <?php includeSidebar( "eclipse.php" ) ?>
  <?php includeSidebar( "contributors.php" ) ?>

</div>

<?php

  printFooter( $title, $navPosition );

?>
