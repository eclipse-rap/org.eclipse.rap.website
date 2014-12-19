<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $PAGE_TITLE = "RAP 3.0 Migration Guide";
  $PAGE_NAV_POSITION = array( "documentation", "noteworthy" );
  printHeader();

?>

<div id="midcolumn">

  <h1>RAP 3.0 Migration Guide</h1>

  <p>
    With the move to RAP 3.0, we don't introduce a lot of breaking changes.
    We mostly clean up deprecated APIs and introduce replacements for API that is no longer
    supported.
  </p>

  <h2>Cleaned up deprecated RAP 2.0 API</h2>

  <p>
    All API that had already been deprecated back in RAP 2.0 has been removed.
    For alternatives, see the <a href="../../2.0/migration-guide/">RAP 2.0 Migration Guide</a>.
  </p>

  <ul>
    <li>ISessionStore replaced by UISession</li>
    <li>IApplicationStore replaced by ApplicationContext</li>
    <li>IEntryPoint / IEntryPointFactory replaced by EntryPoint / EntryPointFactory</li>
    <li>ISettingStore / ISettingStoreFactory replaced by SettingStore / SettingStoreFactory</li>
    <li>IServiceStore removed without substitution, should not be needed in the context of an application</li>
    <li>IResourceManager replaced by ResourceManager</li>
    <li>IServiceHandler replaced by ServiceHandler</li>
    <li>IServiceManager replaced by ServiceManager</li>
    <li>SessionSingletonBase replaced by SingletonUtil</li>
    <li>UICallBack</li>
    <li>IControlThemeAdapter</li>
    <li>Graphics</li>
    <li></li>
  </ul>

  <h2>Removed lifecycle package</h2>

  <p>
    The package <em>org.eclipse.rap.rwt.lifecycle</em></p> has been removed.
  </p>

  <ul>
    <li>AbstractWidgetLCA</li>
    <li>ControlLCAUtil</li>
    <li>ILifeCycle</li>
    <li>IWidgetAdapter</li>
    <li>ProcessActionRunner</li>
    <li>WidgetAdapter</li>
    <li>WidgetLCAUtil</li>
    <li>WidgetLifeCycleAdapter</li>
    <li>WidgetUtil</li>
    <li>RWT.getLifeCycle()</li>
  </ul>

  <h3>Phase Listeners</h3>

  <p>
    Phase listeners are a means of executing custom code during the processing of a request.
    Since this interface exposes internals of the framework (such as so called lifecycle phases),
    it will be removed in this release. However, a replacement is not yet finished.
  </p>

  <h2>Change in ControlThemeAdapter</h2>

  <p>
    With the support for themeable border edges, we had to replace the method
    <code>getBorder(Control)</code> in ControlThemeAdapter with <code>getBorderWidth(Control)</code>.
    This class is only relevant for custom widget developers.
  </p>

  <h2>Renamed method in Application</h2>

  <p>
    In the interface <em>org.eclipse.rap.rwt.application.</em><code>Application</code>,
    we've fixed a typo in the method name <code>addThemableWidget()</code>.
    This method has been renamed to <code>addThemeableWidget()</code>.
  </p>

</div>

<div id="rightcolumn">
</div>

<?php
  printFooter();
?>
