<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Getting Started";
  $navPosition = array( "help", "getting-started" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Getting Started</h1>

  <p>
    To get started, you should have an Eclipse IDE with RAP tooling installed.
    It's easiest to get the Eclipse package for RCP and RAP developers.
    See the <a href="/rap/downloads/">downloads page</a> for details.
  </p>

  <div style="margin: 10px 0px; text-align: center;" id="screencast">
    <iframe src="http://player.vimeo.com/video/12737558?byline=0&amp;portrait=0&amp;color=ffffff" width="600" height="375" frameborder="0"></iframe>
  </div>

  <p>
    This screencast shows how to get started with developing RAP applications.
    It covers RAP target installation, creating a new RAP application and
    launching it in a web browser.
  </p>

  <h2>Let the RAP Tooling install the target platform</h2>
  <p>
    When Eclipse starts on a fresh workspace, a welcome page is displayed.
    Select the <strong>Rich Ajax Platform (RAP)</strong> section and
    choose <strong>Install Target Platform</strong> on the following page.
    In the upcoming dialog confirm the default values, which starts the target
    installation process.
  </p>

  <p>
    After the installation finished you are prepared to work with RAP.
    For your first steps you may read the
    <a href="http://help.eclipse.org/helios/index.jsp?topic=/org.eclipse.rap.help/help/html/getting-started/examples.html">RAP Examples</a>
    topic and/or the other chapters of the getting started section.
  </p>

  <h2>Install the RAP Tooling</h2>

  <p>
    To install the RAP Tooling into your Eclipse IDE (3.5 or later), follow
    these steps:
  </p>

  <ul style="margin-left:10px">
    <li>
      With Eclipse up and running, select the <strong>Help</strong> &gt;
      <strong>Install New Software ...</strong> menu entry.
    </li>
    <li>
      Enter enter the RAP Update Site URL
      <strong>http://download.eclipse.org/rt/rap/1.3/tooling</strong>
      into the <strong>Work with</strong> field and press Enter.
    </li>
    <li>
      After a short while, an entry labelled <em>Rich Ajax Platform (RAP)</em> appears
      in the list below. Select its check box and click <strong>Next</strong>.
    </li>
    <li>
      On the the next page you may review the installation details.
    </li>
    <li>
      Accept the terms in the license agreement and click the
      <strong>Finish</strong> button.
    </li>
    <li>
      The feature and plug-ins will now be downloaded from the repository and
      installed locally.
    </li>
    <li>
      Confirm the following prompt to restart Eclipse.
    </li>
  </ul>

</div>

<div id="rightcolumn">

  <?php includeSidebar( "eclipse.php" ) ?>

</div>

<?php

  printFooter();

?>
