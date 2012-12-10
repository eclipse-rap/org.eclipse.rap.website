<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $PAGE_TITLE = "RAP 2.0 Migration Guide";
  $PAGE_NAV_POSITION = array( "download", "noteworthy" );
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
    You need to update your bundle manifest files and your Java code to this change.
    A brute-force search for “org.eclipse.rwt” may be helpful to discover all occurrences in your
    workspace.
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
    <dt>FileSettingStore.FILE_SETTING_STORE_DIR</dt>
    <dd>this constant has changed its value to adjust to the new namespace.</dd>
  </dl>

  <h2>Removed classes</h2>

  <dl>
    <dt>JSWriter, JSVar, JSListenerType, JSListenerInfo</dt>
    <dd>
      removed together with the corresponding methods in WidgetLCAUtil and ControlLCAUtil.
      These classes were used for rendering JavaScript are now obsolete.
    </dd>
    <dt>AdapterFactory</dt>
    <dd>removed together with the extension point, see <?=bug(344541)?></dd>
    <dt>ResourceManagerFactory</dt>
    <dd>see <?=bug(348476)?></dd>
    <dt>AbstractBranding, Header</dt>
    <dd>
      Use entrypoint properties for branding in RWT applications. See class <em>WebClient</em>.
    </dd>
    <dt>JSExecutor</dt>
    <dd>
      an internal class, but frequently used in application code.
      Replaced by the new client service <em>JavaScriptExecutor</em>, see <em>Client.getService()</em>,
      <?=bug(342995)?>
    </dd>

  </dl>

  <h2>Resource Manager and IResource</h2>
  <p>
    The resource manager (<em>IResourceManager</em>) has undergone a rework and has been reduced in
    its functionality (See the New and Noteworthy).
    These changes affect the following API:
  </p>

  <h3>RegisterOptions</h3>
  <p>
    The class <em>RegisterOptions</em> has been removed.
    If you used <em>RegisterOptions</em> other than <em>RegisterOptions.NONE</em>, your application
    will continue to work without these options, but your JavaScript code will no longer be
    compressed and the name of the registered resource will not contain a version hash anymore.
  </p>
  <p>
    You may consider to minify JavaScript yourself and register a minified version.
    There are many free tools out there, such as
    <a href="http://developer.yahoo.com/yui/compressor/">YUI Compressor</a>,
    <a href="https://developers.google.com/closure/compiler/">Google Closure Compiler</a>,
    or <a href="http://www.crockford.com/javascript/jsmin.html">JSMin</a>.
    If you need a version hash to prevent caching, you can add a URL parameter like
    “<code>?nocache=4711</code>” when requesting the resource.
  </p>

  <h3>Encoding</h3>
  <p>
    The resource manager now registers the bytes from a given input stream as is.
    If you used to register resources using a method with a <em>charset</em> parameter, please make
    sure that textual resources are read with the correct encoding by the client.
    If all your resources are UTF-8 encoded there will be no change to RAP 1.5.
  </p>

  <h3>ClassLoader</h3>
  <p>
    If you used a method that accepted or used a ClassLoader to register resources, please change
    your code to use the method <em>register( String, inputStream )</em>. You may have to call
    <em>ClassLoader.getResourceAsStream( resourceName )</em> to open an input stream.
  </p>

  <h3>Closing InputStreams</h3>
  <p>
    The resource manager does not close input streams anymore after registering a resource,
    (<?=bug(347615)?>).
    Please double check that you're closing your input streams correctly.
  </p>

  <h3>IResource moved</h3>
  </p>
    The <em>IResource</em> interface is now only used in the extension point
    <em>org.eclipse.rap.ui.resources</em> and has therefore been moved to the bundle
    <em>org.eclipse.rap.ui.workbench</em>.
    The methods <em>getCharset()</em> and <em>getOptions()</em> have been removed because of the
    changes described above.
  </p>
  <p>
    For resources that are registered in an <em>ApplicationConfiguration</em>, the method
    <em>Application.addResource(…)</em> now accepts a <em>ResourceLoader</em> instead of
    <em>IResource</em>.
  </p>

  <h2>Service Handlers</h2>
  <p>
    The interface <em>ServiceHandler</em> has been changed.
    The <em>service</em> method now provides two parameters <em>request</em> and <em>response</em>
    to the implementation.
    Developers don't have to obtain the request and reponse objects from static methods anymore.
  </p>
  <p>
    The <em>ServiceManager</em> has got a new method <em>getServiceHandlerUrl( String )</em>.
    Developers should use this new method to obtain the URL to access a service handler instead
    of assembling the URL manually.
  </p>

  <h2>Session Store replaced by UI Session</h2>
  <p>
    When working with RAP, you have to deal with two different types of sessions: the servlet
    container's <em>HttpSession</em> and RAP's <em>UISession</em> (formerly known as session store).
    Both sessions have a different scope and a different purpose.
    In recent projects we've noticed that the relationship between the HTTP session and RAP's
    “session store” led to confusion. By renaming the session store to UI session we hope to make it
    more clear that both are sessions with a different scope and meaning.
  </p>
  <p>
    The interface <em>ISessionStore</em> has been renamed to <em>UISession</em>. The types
    <em>SessionStoreListener</em> and <em>SessionStoreEvent</em> have been renamed accordingly.
  </p>

  <h2>Register EntryPoint and IApplication</h2>
  <p>
    RAP applications can not be accessed by startup parameter anymore:
  </p>
<pre>
http://hostname/webapp/rap?startup=example &nbsp; (OBSOLETE)
</pre>
  <p>
    Instead of this, every entrypoint must have a dedicated path (servlet name):
  </p>
<pre>
http://hostname/webapp/example
</pre>
  <p>
    If you used to register entrypoints by parameter in your extensions, you have to use the
    attibute <em>path</em> instead:
  </p>
<pre>
&lt;extension point="org.eclipse.rap.ui.entrypoint"&gt;
  &lt;entrypoint id="example.entrypoint"
      class="example.MyEntryPoint"
      <del>parameter="example"</del>
      <strong>path="/example"</strong> /&gt;
  &lt;/entrypoint&gt;
&lt;/extension&gt;
</pre>
  <p>
    To make an IApplication available at a certain path, you have to create a separate entrypoint
    extension and specify the id of the application extension in the new parameter
    <em>applicationId</em>.
  </p>
<pre>
&lt;extension point="org.eclipse.rap.ui.entrypoint"&gt;
  &lt;entrypoint id="example.application.entrypoint"
      path="/example"
      brandingId="example.branding"
      <strong>applicationId="example.application"</strong> /&gt;
  &lt;/entrypoint&gt;
&lt;/extension&gt;
</pre>

  <h2>Branding</h2>

  <h3>Entrypoint mapping</h3>
  <p>
    The attributes <em>servletName</em>, <em>defaultEntrypointId</em>, and the element
    <em>associatedEntrypoints</em> have been removed from the <em>brandings</em> extension point.
    Instead of adding entrypoints to a branding, a branding can now be bound to an entrypoint
    by setting the new attribute <em>brandingId</em> in the entrypoint extension:
  </p>
<pre>
&lt;extension point="org.eclipse.rap.ui.entrypoint"&gt;
  &lt;entrypoint id="example.entrypoint"
      class="example.MyEntryPoint"
      path="/example"
      <strong>brandingId="example.branding"</strong> /&gt;
  &lt;/entrypoint&gt;
&lt;/extension&gt;
</pre>

  <h3>Exit confirmation</h3>
  <p>
    The attribute <em>exitConfirmationClass</em> is no longer supported by the branding extension
    point.
    The new client service <em>ExitConfirmation</em> should be used instead.
  </p>

  <h2>Changes for Custom Components</h2>

  <p>
    Custom widgets and other components must now read and write JSON protocol messages.
    Components that read parameters from the request write JavaScript directly, e.g. using
    <em>JSWriter</em>, will not work anymore.
    For the migration of those components, we'd recommend to wait until M4.
    We're looking forward to provide more assistance for component developers.
  </p>

  <h2>I-prefixed Interfaces</h2>

  <p>
    The prefix “I” in interface names like <em>IEntryPoint</em> is a heritage from the Eclipse
    platform.
    This deviates from the naming pattern used in SWT and other libraries, and also from the Java
    class library.
    Since it is not even used consistently in RAP, we plan to remove the prefix from all interfaces.
  </p>

  <h2>Settings</h2>

  <h3>Development Mode</h3>
  <p>
    To start a RAP application in development mode, please replace the VM parameter
    <code>-Dorg.eclipse.rwt.clientLibraryVersion=DEBUG</code> with
    <code>-Dorg.eclipse.rap.rwt.developmentMode=true</code>.
  </p>

  <h2>Features</h2>

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
    <dt><code>org.eclipse.rap.examples.feature</code></dt>
    <dd>
      contains the demos and examples for RAP.
      Up to RAP 1.5, the demo had been included in the rap.runtime feature.
      Separating examples from the runtime makes it easier to keep the demo out of deployed applications.
    </dd>
    <dt><code>org.eclipse.rap.tools.feature</code></dt>
    <dd>
      contains the RAP Tools for installation in an Eclipse IDE. Its old ID was 
      <code>org.eclipse.rap.tools</code>.
    </dd>
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

</div>

<div id="rightcolumn">
</div>

<?php
  printFooter();
?>
