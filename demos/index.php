<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "RAP - Demos";
  $navPosition = array( "demos", "index" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Demos</h1>

  <p>
    Check out our online demos to see RAP applications in action:
  </p>

  <div class="box">
    <div class="images">
      <a href="http://rap.eclipsesource.com/rapdemo/examples" target="_blank">
        <img src="images/examples.png"/>
      </a>
    </div>
    <div>
      <h3>RAP Examples</h3>
      <p>
        This application shows samples of the widgets available in RAP.
        Please note that it does not yet represent the complete widget set,
        but only a small selection.
      </p>
      <p>
        For easier consumption, we provide
        <a href="/rap/source/">Team Project Sets</a> that contain pointers to the
        relevant RAP projects from the CVS repository.
      </p>
      <p>
        <a href="http://rap.eclipsesource.com/rapdemo/examples" target="_blank">
          See the examples online
        </a>
      </p>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="http://rap.eclipsesource.com/workbenchdemo/rms" target="_blank">
        <img src="images/webworkbench1.png"/>
      </a>
    </div>
    <div>
      <h3>RAP Workbench Demo</h3>
      <p>
        This application shows a simple project management system, that
        is built on top of RAP. Though it is not meant to be production
        ready it shows a good deal of the framework's possibilities.
      </p>
      <p>
        To demonstrate the NLS support, translations for
        <a href="http://rap.eclipsesource.com/workbenchdemo/rms?locale=en" target="_blank">English</a>,
        <a href="http://rap.eclipsesource.com/workbenchdemo/rms?locale=de" target="_blank">German</a> and
        <a href="http://rap.eclipsesource.com/workbenchdemo/rms?locale=zh" target="_blank">Chinese</a>
        are available. The latter requires your browser to support East
        Asian languages.
      </p>
      <p>
        <a href="http://rap.eclipsesource.com/workbenchdemo/rms" target="_blank">
          See a workbench demo online
        </a>
      </p>
      <p>
        Please note that the example data will be reset regularly.
      </p>
    </div>
    <div style="clear: both;"></div>

  </div>

</div>

<div id="rightcolumn">
  <?php includeSidebar( "rap-feed.php" ) ?>
  <?php includeSidebar( "contributors.php" ) ?>
</div>

<?php
  printFooter();
?>
