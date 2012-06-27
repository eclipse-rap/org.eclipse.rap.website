<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Professional Services";
  $navPosition = array( "help", "professional-services" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Professional Services</h1>

  <p>
    Although Open Source software is freely available to everyone it doesn't mean that everyone
    is an expert in this code.
    Enterprise software built with Open Source components requires experienced developers who
    know the internal structure of these components and can quickly and
    efficiently eliminate problems.
  </p>

  <a href="http://eclipsesource.com/en/services/rap/"><img style="margin-top:15px;"
     src="/rap/images/logos/EclipseSource-small.png" alt="EclipseSource"/></a>

  <p>
    EclipseSource has contributed RAP to Eclipse and is still the driving force behind the project.
    In many customer projects, we developed enterprise applications based on RAP.
    We've helped customers to extend RAP to meet their requirements and have developed
    custom components.

    With this experience,
    <a href="http://eclipsesource.com/en/services/rap/">EclipseSource can offer you efficient support</a>.
  </p>

  <p style="margin-bottom:200px;">
  </p>

</div>

<div id="rightcolumn">
  <?php includeSidebar( "rap-feed.php" ) ?>
</div>

<?php
  printFooter();
?>
