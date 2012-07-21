<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $PAGE_TITLE = "RAP 2.0 Migration Guide";
  $PAGE_NAV_POSITION = array( "download", "downloads" );
  printHeader();

?>

<div id="midcolumn">

  <h1>RAP 2.0 Migration Guide</h1>

  <p>
    With the move to RAP 2.0, we are cleaning up our APIs.
    This will lead to breaking changes.
    Existing RAP 1.x applications will therefore need minor adjustments to work with RAP 2.0.
    This guide explains the steps to be taken to update existing applications.
  </p>

  <h2>Package org.eclipse.rwt renamed</h2>

  <p>
    The package <em>org.eclipse.rwt</em> has been renamed to <em>org.eclipse.<ins>rap</ins>.rwt</em>.
    You need to update your bundle manifest files and your Java code to this change:
  </p>

  <h3>Bundle manifests</h3>
  <p>
    If you use <code>Import-Package</code> in your bundle manifests
    (<code>META-INF/MANIFEST.MF</code> files), you have to replace all imports of packages named
    <code>org.eclipse.rwt*</code> with the corresponding packages from
    <code>org.eclipse.rap.rwt*</code>, i.e. you have to insert an “<code>.rap</code>” before the
    “<code>.rwt</code>”.
  </p>

  <h3>Java code</h3>
  <p>
    Compile errors in your code can be fixed by using Eclipse's <em>Organize Imports</em> feature.
    To do so, select a single class or an entire project and select
    <em>Source &gt; Organize Imports</em> from the main menu.
    If you find it easier, you can also replace all textual occurrences of
    <code>org.eclipse.rwt</code> with <code>org.eclipse.rap.rwt</code>.
  </p>

  <h3>Service components</h3>
  <p>
    Note that this change also affects service interfaces.
    If you're using declarative services, please also adjust your component definition files.
  </p>

  <!--
  <h2>Removed classes</h2>

  <dl>
    <dt>RWTDelegate</dt>
    <dd>replaced by RWTServlet in org.eclipse.rap.rwt.engine</dd>
    <dt>RWTServletContextListener</dt>
    <dd>moved to org.eclipse.rap.rwt.engine</dd>
  </dl>
  -->

</div>

<div id="rightcolumn">
</div>

<?php
  printFooter();
?>
