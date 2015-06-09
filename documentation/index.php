<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Documentation";
  $navPosition = array( "documentation", "overview" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Documentation</h1>

  <h2 id="devguide">RAP Developer's Guide</h2>

  <p>
    The <a href="/rap/developers-guide/">RAP Developer's Guide</a> is the official documentation
    for RAP.
    It also contains the complete API reference.
    You can always browse the latest version <a href="/rap/developers-guide/">online</a>.
    The developer's guide is also available in the Eclipse IDE for offline use if you installed
    the RAP Tools.
  </p>

  <h2>RAP 3.0 Migration Guide</h2>

  <p>
    If you are migrating a RAP 2.x (or 1.x) application to RAP 3.x, take a look at the
    <a href="/rap/noteworthy/3.0/migration-guide/">RAP 3.0 Migration Guide</a>.
    This document lists all breaking changes in RAP 3.0 and explains the necessary steps.
  </p>

  <h2>New and Noteworthy</h2>

  <p>
    For every new RAP version, we summarize all new features and noteworthy changes on a separate
    “<a href="/rap/noteworthy/">New and Noteworthy</a>” page.
  </p>

  <h2>Wiki, FAQ</h2>
  <p>
    The <a href="http://wiki.eclipse.org/RAP">RAP Wiki</a> provides more in-depth technical and
    organizational information.
    It contains a list of
    <a href="http://wiki.eclipse.org/RAP/FAQ">Frequently Asked Questions (FAQ)</a>,
    a list of known add-ons, guides for
    integrating RAP with other projects, articles on RAP internals, and resources for committers.
  </p>

  <h2 id="resources">Resources Related to Underlying Technologies</h2>

  <p>
    As a RAP developer, you should be familiar with a number of base technologies.
    We've collected a couple of resources that we recommend to read:
  </p>

  <h3>Equinox</h3>

  <ul>
    <li>
      <a href="http://www.eclipse.org/equinox/documents/quickstart.php">
      Equinox QuickStart Guide</a>
    </li>
    <li>
      <a href="http://www.eclipse.org/equinox/server/http_quickstart.php">
      Equinox Server-side Quickstart</a>
    </li>
    <li>
      <a href="http://www.eclipse.org/equinox-portal/tutorials/server-side/">
      Building a Server-based Application with Equinox</a>
    </li>
  </ul>

  <h3>SWT</h3>

  <ul>
    <li>
      <a href="http://www.eclipse.org/swt/snippets/">
      SWT Snippets</a>
    </li>
    <li>
      <a href="http://www.eclipse.org/articles/article.php?file=Article-Understanding-Layouts/index.html">
      Understanding Layouts in SWT</a>
    </li>
  </ul>

  <h3>JFace and Databinding</h3>

  <ul>
    <li>
      <a href="http://www.eclipse.org/articles/Article-TreeViewer/TreeViewerArticle.htm">
      How to use the JFace Tree Viewer</a>
    </li>
    <li>
      <a href="http://www.eclipse.org/articles/article.php?file=Article-JFaceWizards/index.html">
      Creating JFace Wizards</a>
    </li>
    <li>
      Databinding
      <a href="http://wiki.eclipse.org/index.php/JFace_Data_Binding">
        Overview Page
      </a>,
      <a href="http://wiki.eclipse.org/JFace_Data_Binding_FAQ">
        FAQ
      </a>
      and
      <a href="http://wiki.eclipse.org/JFace_Data_Binding/Snippets">
        Code Snippets
      </a>
    </li>
  </ul>

  <h3>Workbench</h3>

  <ul>
    <li>
      <a href="http://www.eclipse.org/articles/Article-UI-Workbench/workbench.html">
      Inside the Workbench - A guide to the workbench internals</a>
    </li>
    <li>
      <a href="http://www.eclipse.org/articles/using-perspectives/PerspectiveArticle.html">
      Using Perspectives in the Eclipse UI</a>
    </li>
    <li>
      <a href="http://www.eclipse.org/articles/Article-WorkbenchSelections/article.html">
      Eclipse Workbench: Using the Selection Service</a>
    </li>
    <li>
      <a href="http://www.eclipse.org/articles/Article-Concurrency/jobs-api.html">
      On the Job: The Eclipse Jobs API</a>
    </li>
    <li>
      <a href="http://www.eclipse.org/articles/Article-Workbench-DND/drag_drop.html">
      Drag and Drop in the Eclipse UI</a>
    </li>
  </ul>

</div>

<div id="rightcolumn">

  <?php includeSidebar( "rap-feed.php" ) ?>

</div>

<?php

  printFooter();

?>
