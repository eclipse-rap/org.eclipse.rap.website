<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $PAGE_TITLE = "RAP 3.0 Migration Guide";
  $PAGE_NAV_POSITION = array( "documentation", "noteworthy" );
  printHeader();

?>

<div id="midcolumn">

  <h1>RAP 3.0 Migration Guide</h1>

  <p>
    With the move to RAP 3.0, we clean up deprecated APIs and introduce replacements for API
    that is no longer supported.
  </p>

  <h2>Cleaned up deprecated RAP 2.0 API</h2>

  <p>
    All API that had already been deprecated back in RAP 2.0 has now been removed.
    The replacements listed below existed in RAP 2.0 already.
    For a detailed explanation of these changes, see the
    <a href="../../2.0/migration-guide/">RAP 2.0 Migration Guide</a>.
  </p>

  <ul>
    <li><code>Graphics</code> removed without substitution</li>
    <li><code>IApplicationStore</code> replaced by <code>ApplicationContext</code></li>
    <li><code>IControlThemeAdapter</code> replaced by <code>ControlThemeAdapter</code></li>
    <li><code>IEntryPoint</code> / <code>IEntryPointFactory</code> replaced by <code>EntryPoint</code> / <code>EntryPointFactory</code></li>
    <li><code>IResourceManager</code> replaced by <code>ResourceManager</code></li>
    <li><code>IServiceHandler</code> replaced by <code>ServiceHandler</code></li>
    <li><code>IServiceManager</code> replaced by <code>ServiceManager</code></li>
    <li><code>IServiceStore</code> removed without substitution</li>
    <li><code>ISessionStore</code> replaced by <code>UISession</code></li>
    <li><code>ISettingStore</code> / <code>ISettingStoreFactory</code> replaced by <code>SettingStore</code> / <code>SettingStoreFactory</code></li>
    <li><code>SessionSingletonBase</code> replaced by <code>SingletonUtil</code></li>
    <li><code>UICallBack</code> replaced by <code>ServerPushSession</code></li>
  </ul>

  <h2>Removed lifecycle </code>package</h2>

  <p>
    The package <em>org.eclipse.rap.rwt.lifecycle</em> has been removed.
    This package contained API related to lifecycle phases and lifecycle adapters (LCAs),
    concepts which we consider internals of the framework.
    These internals are subject to change and should not be accessed by application code.
    Mostly custom widgets that predate RAP 2.0 and custom PhaseListeners will be affected.
  </p>

  <h3>Lifecycle adapters (LCAs)</h3>

  <p>
    Custom widgets used lifecycle adapters (LCAs) to communicate with their remote counterparts.
    In RAP 2.0, the Remote API has been introduced as a replacement for LCAs
    (see the package <em>org.eclipse.rap.rwt.remote</em>, especially <code>RemoteObject</code>).
    Custom widgets should use this new API now.
    The following classes have been removed without a replacement:
  </p>

  <ul>
    <li><code>WidgetLifeCycleAdapter</code></li>
    <li><code>AbstractWidgetLCA</code></li>
    <li><code>WidgetLCAUtil</code> and <code>ControlLCAUtil</code></li>
    <li><code>IWidgetAdapter</code> and <code>WidgetAdapter</code></li>
  </ul>

  <h3>WidgetUtil</h3>

  <p>
    Most of the methods in this helper class were related to LCAs. Two methods that are still
    relevant have been moved to a new, trimmed down version of <code>WidgetUtil</code> in the
    package <code>org.eclipse.rap.rwt.widgets</code>:
  </p>

  <ul>
    <li><code>WidgetUtil.getId( Widget )</code></li>
    <li><code>WidgetUtil.registerDataKeys( String... keys )</code></li>
  </ul>

  <h3>Phases and Phase Listeners</h3>

  <p>
    The request processing of the RAP server is split into different <em>Phases</em>.
    As an application developer, you don't have to care about those phases anymore.
    The phase model is going to change in future versions of RAP.
  </p>

  <p>
    If you've used <code>Fixture.fakePhase( PhaseId.PROCESS_ACTION );</code> in your unit tests,
    you can use the new public JUnit rule instead (see below).
  </p>

  <p>
    Phase listeners are a means of executing custom code during the processing of a request.
    Since this interface exposes internals of the framework (such asPhaseId so called lifecycle phases),
    it has been removed in this release.
    We did not provide a replacement so far, as we couldn't find a reasonable use case anymore.
    If you still need this hook, you can continue to use the PhaseListener from the internal
    package in RAP 3.0. However, please let us know so we can discuss alternatives before
    phase listeners are removed completely.
  </p>

  <ul>
    <li><code>PhaseEvent</code></li>
    <li><code>PhaseId</code></li>
    <li><code>PhaseListener</code></li>
    <li><code>ProcessActionRunner</code></li>
    <li><code>ILifeCycle</code></li>
    <li><code>RWT.getLifeCycle()</code></li>
    <li><code>Application.addPhaseListener( PhaseListener )</code></li>
  </ul>

  <h2>Replaced method in ControlThemeAdapter</h2>

  <p>
    With the support for themeable border edges, we had to replace the method
    <code>getBorderWidth(Control)</code> in <code>ControlThemeAdapter</code>
    with <code>getBorder(Control)</code>.
    This class is only relevant for custom widget developers.
  </p>

  <h2>Renamed misspelled method in Application</h2>

  <p>
    In the interface <code>org.eclipse.rap.rwt.application.Application</code>,
    we've fixed a typo in the method name <code>addThemableWidget()</code>.
    This method has been renamed to <code>addThemeableWidget()</code>.
  </p>

  <h2>New public API for unit tests</h2>

  <p>
    If you used the internal rap test fixture in your unit tests, there's now a public replacement
    in the bundle <em>org.eclipse.rap.rwt.testfixture</em>.
    Instead of calling <code>Fixture.setUp()</code> and <code>Fixture.tearDown()</code>,
    you now only need to include the following line in your test cases.
    This will simulate a new test context for every test method.
    There's also no need to fake the <em>PROCESS_ACTION</em> phase anymore.
  </p>

<pre lang="java">
&#064;Rule
public TestContext context = new TestContext();
</pre>

  <p>
    The class <code>Fixture</code> and all its companions have been moved to the internal package
    <em>org.eclipse.rap.rwt.testfixture.internal</em>.
  </p>

  <h2>Removed rap.junit bundles</h2>

  <p>
    The bundles had once been created to execute PDE tests with RAP.
    As we haven't seem much interest in this approach, these projects are not actively maintained
    anymore. They still depend on JUnit 3.
    That's why we don't include them in RAP 3.0 anymore.
  </p>

</div>

<div id="rightcolumn">
</div>

<?php
  printFooter();
?>
