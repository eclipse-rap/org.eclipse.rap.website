<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Source Code";
  $navPosition = array( "contribute", "source" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Source Code</h1>

  <h2>Browse CVS</h2>

  <p>
    You can browse the sources 
    <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.rap/?root=RT_Project">
    on the web</a>.
  </p>

  <h2>CVS Checkout</h2>

  <p>
    All projects can be found in the <code>org.eclipse.rap</code> module of 
    the <code>:pserver:dev.eclipse.org:/cvsroot/rt</code> repository.
  <p/>
  <p>
    For easier consumption, we provide 
    <a href="http://help.eclipse.org/helios/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/tasks-cvs-project-set.htm">Team Project Sets</a>
    that contain pointers to the relevant RAP projects from the CVS repository.
    Individual components (e.g. from the <a href="/rap/incubator/">Incubator</a>)
    can also be obtained 
    <a href="http://wiki.eclipse.org/index.php/CVS_Howto#Anonymous_CVS">directly
    from CVS.</a>
  <p/>
  <p>
    The project sets are created under the assumption that your target 
    platform points to the most recent RAP target build that can be obtained 
    from the <a href="/rap/downloads/">downloads page</a>. Other setups
    may also work but are not supported. 
   </p>
   <p>
    After you have downloaded the file, 
    <ol>
      <li>From the <strong>File</strong> menu, choose <strong>Import</strong>.
      This will open the <strong>Import dialog</strong>.</li>
      <li>In the this dialog, choose <strong>Team &gt; Team Project Set</strong>
      and click <strong>Next</strong>.</li>
      <li>Browse for or type in the name of the file containing the project set 
      and click Finish.</li>
      <li>The projects contained in the project set will be fetched from the 
      repository.</li>
    </ol>
  </p>
  
  <p>
    <strong>Available Team Project Sets</strong>
    <ul>
      <li>
        <a href="/rap/resources/rap.psf">
          <img src="../images/icon_save.gif" />&nbsp;&nbsp;RAP User Team Project Set
        </a>
        <br />
        Contains all the projects necessary to develop applications based on 
        RAP.
      </li>
      <li>
        <a href="/rap/resources/rap-demos.psf">
          <img src="../images/icon_save.gif" />&nbsp;&nbsp;RAP Examples Team Project Set
        </a>
        <br />
        Contains several example projects shown on the
        <a href="/rap/demos/">Demos</a> page. The bundles from the <i>RAP User 
        Team Project Set</i> are required.  
      </li>
    </ul>
  </p>
  
  <p>
    <strong>Note:</strong> these project sets specify anonymous pserver access. 
    If that does not work for you see the <strong>CVS and firewalls</strong> 
    section in the
    <a href="http://wiki.eclipse.org/CVS_Howto#CVS_and_firewalls">CVS Howto</a>.
  </p>    

  <p>
    We are maintaining a <a href="/rap/noteworthy/">
    New and Noteworthy</a> in sync with the development progress in CVS to 
    ease adoption of new features for you.
  </p>

</div>

<div id="rightcolumn">
</div>

<?php
  printFooter();
?>
