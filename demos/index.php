<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "RAP - Demos";
  $navPosition = array( "demos", "demos" );
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
      <h3>RAP Examples Demo</h3>
      <p>
        This application shows samples of the widgets available in RAP.
        Please note that it does not yet represent the complete widget set,
        but only a small selection.
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
      <a href="http://rap.eclipsesource.com/workbenchdemo/workbench" target="_blank">
        <img src="images/workbenchdemo.png"/>
      </a>
    </div>
    <div>
      <h3>RAP Workbench Demo</h3>
      <p>
        This demo shows a simple application based on the Eclipse 3.x
        workbench that is built on top of RAP. Though it is not meant to be 
        production ready it shows a good deal of the framework's possibilities,
        including views, menus, and the selection service.
      </p>
      <p>
        <a href="http://rap.eclipsesource.com/workbenchdemo/workbench" target="_blank">
          See a workbench demo online
        </a>
      </p>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="http://rap.eclipsesource.com/controlsdemo/controls" target="_blank">
        <img src="images/controlsdemo.png"/>
      </a>
    </div>
    <div>
      <h3>RAP Controls Demo</h3>
      <p>
        This application shows the various available controls that are
        available in RAP.
      </p>
      <p>
        <a href="http://rap.eclipsesource.com/controlsdemo/controls" target="_blank">
          See a workbench demo online
        </a>
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
