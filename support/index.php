<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Support";
  $navPosition = array( "help", "support" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Get Help</h1>

  <p>
    The following list gives you an overview of the available help resources.
  </p>

  <div>
    <h2>Developer's Guide</h2>
    <p>
      The <a href="/rap/developers-guide/">RAP Developer's Guide</a> is the official RAP help that
      is also included in the Eclipse Help system once you installed the RAP Tooling.
    </p>
  </div>

  <div>
    <h2>FAQ</h2>
    <p>
      Go to
      <a href="http://wiki.eclipse.org/RAP/FAQ">Frequently Asked Questions (FAQ)</a>
      to see if your question has already been answered.
    </p>
  </div>

  <div>
    <h2>Forum</h2>
    <p>
      If you couldn't find the answers you were looking for in the
      <a href="http://wiki.eclipse.org/RAP/FAQ">FAQ</a> or you are stuck on a particular problem,
      <a href="http://www.eclipse.org/forums/eclipse.technology.rap">the RAP forum</a> is a good
      place to go.
    </p>
    <p>
      It's also possible to subscribe to the forum/newsgroup by adding
      <code>http://www.eclipse.org/forums/eclipse.technology.rap</code> to your favorite news
      reader app. See
      <a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">
      this FAQ</a> for information on how to subscribe.
    </p>
  </div>

  <div>
    <h2>Bugs</h2>
    <p>
      Bugs and feature requests are tracked in the Eclipse Bugzilla.
      See the <a href="/rap/bugs/">bugs page</a> for how to find existing bugs or file new ones.
    </p>
  </div>

  <!--
    TODO
    Provide patches
    Commercial support
  -->

</div>

<div id="rightcolumn">
  <?php includeSidebar( "rap-feed.php" ) ?>
</div>

<?php
  printFooter();
?>