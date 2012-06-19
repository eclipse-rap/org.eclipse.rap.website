<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Source Code";
  $navPosition = array( "contribute", "source" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Source Code</h1>

  <h2>Browse git repositories</h2>
  <p>
    You can browse the sources on the web:
  </p>
  <ul>
    <li>
      <a href="http://git.eclipse.org/c/rap/org.eclipse.rap.git/tree">RAP</a>
      - contains the RAP Runtime itself.
    </li>
    <li>
      <a href="http://git.eclipse.org/c/rap/org.eclipse.rap.tools.git/tree">RAP Tools</a>:
      - contains the tools, templates and documentation for the Eclipse IDE.
    </li>
  </ul>

  <h2>Clone git repositories</h2>
  <ul>
    <li>RAP: <code>git://git.eclipse.org/gitroot/rap/org.eclipse.rap.git</code></li>
    <li>RAP Tools: <code>git://git.eclipse.org/gitroot/rap/org.eclipse.rap.tools.git</code></li>
  </ul>
  <p>
    If you are using Eclipse EGit you can add the repository by right-clicking into the
    <strong>Git&nbsp;Repositories&nbsp;View</strong> and then choosing <em>Paste Repository Path or URI</em>.
  </p>
  <p>
    Alternatively you can run <code>git clone [repository-path]</code> with your command line tool.
  </p>

  <h2>Github mirrors</h2>
  <p>
    Our git repositories are mirrored on <a href="https://github.com/eclipse/">github</a>, fork us ;-).
  </p>

  <h2>Incubator</h2>
  <p>
    See the <a href="/rap/incubator">Incubator page</a> for the git repositories
    of all RAP Incubator components.
  </p>
  <h2>Learn about git at Eclipse</h2>
  <p>For more information on git at Eclipse read <a href="http://wiki.eclipse.org/Git">this introduction</a>.</p>

</div>

<div id="rightcolumn">
</div>

<?php
  printFooter();
?>
