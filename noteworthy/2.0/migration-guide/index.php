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

  <h2>RWT Constants</h2>

  <dl>
    <dt>WidgetUtil.CUSTOM_VARIANT</dt>
    <dd>this constant has moved to the class RWT.</dd>
  </dl>

  <h2>Removed classes</h2>

  <dl>
    <dt>JSWriter, JSVar, JSListenerType, JSListenerInfo</dt>
    <dd>
      removed together with the corresponding methods in WidgetLCAUtil and ControlLCAUtil.
      These classes were used for rendering JavaScript are now obsolete.
    </dd>
    <dt>AdapterFactory</dt>
    <dd>removed together with the extension point,
      see <a href="https://bugs.eclipse.org/bugs/buglist.cgi?quicksearch=344541">bug 344541</a></dd>
    <dt>ResourceManagerFactory</dt>
    <dd>see <a href="https://bugs.eclipse.org/bugs/buglist.cgi?quicksearch=348476">bug 348476</a></dd>
  </dl>

  <h2>p2 Repositories</h2>

  <dl>
    <dt>http://download.eclipse.org/rt/rap/2.0/</dt>
    <dd>
      is the p2 repository for RAP 2.0, to be used in target platforms only.
      Some bundles declare negative p2 requirements to prevent installing them into the IDE.
    </dd>
    <dt>http://download.eclipse.org/rt/rap/tools/2.0/</dt>
    <dd>
      is the p2 repository for the RAP Tools 2.0, to be installed into the Eclipse IDE.
    </dd>
  </dl>

  <h2>Feature IDs</h2>

  <p>
    The IDs of the features have been changed in order to follow the naming conventions
    that we use throughout all RAP components.
  </p>

  <dl>
    <dt><code>org.eclipse.rap.feature</code></dt>
    <dd>
      contains all bundles from the RAP project. Its old ID was <code>org.eclipse.rap.runtime</code>.
    </dd>
    <dt><code>org.eclipse.rap.equinox.target.feature</code></dt>
    <dd>
      contains a set of Eclipse and Equinox bundles that are required to run the RAP bundles in an OSGi 
      environment. Its old ID was <code>org.eclipse.rap.runtime.requirements</code>.
    </dd>
    <dt><code>org.eclipse.rap.tools.feature</code></dt>
    <dd>
      contains the RAP Tools for installation in an Eclipse IDE. Its old ID was 
      <code>org.eclipse.rap.tools</code>.
    </dd>
  </dl>

</div>

<div id="rightcolumn">
</div>

<?php
  printFooter();
?>
