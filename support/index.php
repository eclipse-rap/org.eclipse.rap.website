<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Support";
  $navPosition = array( "community", "support" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Support</h1>

  <h2>RAP Forum</h2>

  <p>
    RAP has an active community that discusses issues in the open
    <a href="http://www.eclipse.org/forums/eclipse.technology.rap">RAP forum</a>.
    If you couldn't find the answers you were looking for in the
    <a href="/rap/developers-guide/</a> or in the
    <a href="http://wiki.eclipse.org/RAP/FAQ">FAQ</a>, or if you are stuck on a particular problem,
    the forum is the place where you can ask your questions.
  </p>
  <p>
    It's also possible to read and post to the forum using a news reader.
    Just subscribe to the newsgroup <code>eclipse.technology.rap</code> on
    <code>news.eclipse.org</code>
    with your favorite news reader.
    See the
    <a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">Webmaster FAQ</a>
    for details on how to subscribe.
  </p>

  <h2>Professional Services</h2>

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
    <a href="https://eclipsesource.com/services/developer-support/">EclipseSource can offer you efficient support</a>.
  </p>

</div>

<div id="rightcolumn">
  <?php includeSidebar( "rap-feed.php" ) ?>
</div>

<?php
  printFooter();
?>
