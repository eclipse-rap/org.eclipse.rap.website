<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Target Installation";
  $navPosition = array( "documentation", "getting-started" );
  printHeader( $title, $navPosition );

?>

<div id="maincontent">

  <div id="midcolumn">

    <h1>Target Installation</h1>

    <p style="margin: 10px">
      RAP applications need to be compiled against the RAP runtime.
      To do so, the runtime needs to be set as the target platform in Eclipse.
      This can either be done by the <a href="/rap/getting-started/">RAP
      Tooling</a> or manually.
      <ol>
        <li>Open <b>Window &gt; Preferences</b> and go to the <b>Plug-in
          Development &gt; Target Platform</b> preference page.</li>
        <li>Add a new target definition and initialize it with "nothing".</li>
        <li>On the next page, click <b>Add</b> and choose <b>Software Site</b>
          from the Add Content wizard.</li>
        <li>On the following page, enter the URL to the RAP software repository
          in the <b>Work with</b> field and press enter. These repositories are
          currently available:
          <ul>
            <li><b>RAP 1.2</b>: http://download.eclipse.org/rt/rap/1.2/runtime-update</li>
            <li><b>RAP 1.3</b>: http://download.eclipse.org/rt/rap/1.3/runtime</li>
            <li><b>RAP 1.4</b>: http://download.eclipse.org/rt/rap/1.4/runtime</li>
            <li><b>RAP 1.5</b>: http://download.eclipse.org/rt/rap/1.5/runtime</li>
          </ul>
          </li>
        <li>Select the target to install from the list below.</li>
        <li>Make sure the checkbox <b>Include required software</b> is <b>not
          checked</b>.</li>
        <li>Click <b>Finish</b>. After the download is completed, click <b>Finish</b>
          again to save the new target definition.</li>
        <li>Activate the new target on the target platform preference page.</li>
      </ol>
    </p>
    <p style="margin: 10px">
      Note: if doing this with a workspace that already contains projects that
      depend on the target, you may get compile errors. Restarting Eclipse and/or
      doing a clean build will help.
    </p>

  </div>

</div>
<div id="rightcolumn">

  <?php includeSidebar( "eclipse.php" ) ?>

</div>

<?php

  printFooter();

?>
