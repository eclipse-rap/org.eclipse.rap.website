<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Source Code";
  $navPosition = array( "download", "source" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Source Code</h1>

  <p>
    All our source code is hosted in git repositories at Eclipse.
  </p>

  <h2>RAP</h2>

  <p>
    This repository contains the entire source code of the RAP platform (a.k.a. the runtime).
  </p>
  <ul>
    <li>
      <strong>browse</strong> the repository:
      <a href="https://github.com/eclipse-rap/org.eclipse.rap">github.com/eclipse-rap/org.eclipse.rap</a>
    </li>
    <li>
      <strong>clone</strong> the repository:
      https://github.com/eclipse-rap/org.eclipse.rap.git
    </li>
    <li>
      <strong>push changes</strong> to <a href="https://github.com/eclipse-rap/org.eclipse.rap">GitHub</a> by creating pull requests:
      git@github.com:eclipse-rap/org.eclipse.rap.git
    </li>
  </ul>

  <h2>RAP Tools</h2>

  <p>
    This repository contains the code of the Eclipse tools for RAP.
  </p>
  <ul>
    <li>
      <strong>browse</strong> the repository:
      <a href="https://github.com/eclipse-rap/org.eclipse.rap.tools">github.com/eclipse-rap/org.eclipse.rap.tools</a>
    </li>
    <li>
      <strong>clone</strong> the repository: https://github.com/eclipse-rap/org.eclipse.rap.tools.git
    </li>
    <li>
      <strong>push changes</strong> to <a href="https://github.com/eclipse-rap/org.eclipse.rap.tools">GitHub</a> by creating pull requests:
      git@github.com:eclipse-rap/org.eclipse.rap.tools.git
    </li>
  </ul>

  <h2>Incubator</h2>
  <p>
    See the <a href="/rap/incubator/">Incubator page</a> for the git repositories
    of all RAP Incubator components.
  </p>
  <h2>Learn about git at Eclipse</h2>
  <p>For more information on git at Eclipse read <a href="http://wiki.eclipse.org/Git">this introduction</a>.</p>

</div>

<div id="rightcolumn">
  <?php includeSidebar( "rap-feed.php" ) ?>
</div>

<?php
  printFooter();
?>
