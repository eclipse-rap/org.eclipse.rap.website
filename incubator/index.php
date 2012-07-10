<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "RAP - Incubator";
  $navPosition = array( "home", "incubator" );
  printHeader( $title, $navPosition );
?>

<div id="midcolumn">

  <h1>RAP Incubator</h1>
  <p>
    The RAP Incubator is a sub-project to make new and promising developments visible and
    available for the community.
    It is partitioned into components, each maintained by its own Incubator committer(s).
  </p>
  <p>
    When a component has matured and is broadly used, it can graduate and move to the RAP project.
  </p>

  <h2>Downloads</h2>
  <p>
    The Incubator content is not distributed with RAP itself,
    but builds will be made available on a dedicated software site (TBD).
  </p>

  <h2>Source Code</h2>
  <p>
    Every RAP Incubator component has its own git repository.
    See the <a href="/rap/source/">source page</a> for how to work with the repositories.
  </p>

  <h2>Available components</h2>

  <div class="box">
    <div class="images">
      <img src="/rap/images/incubator.png" alt="Incubator component"/>
    </div>
    <div>
      <h3>Common Navigator Framework (CNF)</h3>
      <p>
        Port of the <a href="http://wiki.eclipse.org/CNF">Common Navigator Framework</a> for RAP.
      </p>
      <p>
        Source:
        <a href="http://git.eclipse.org/c/rap/incubator/org.eclipse.rap.incubator.cnf.git/">org.eclipse.rap.incubator.cnf</a>
      </p>
    </div>
    <div style="clear: both"></div>
  </div>

  <div class="box">
    <div class="images">
      <img src="/rap/images/incubator.png" alt="Incubator component"/>
    </div>
    <div>
      <h3>Graphical Editing Framework (GEF)</h3>
      <p>
        Experimental port of <a href="http://eclipse.org/gef/">Draw2D, GEF and Zest</a> for RAP.
      </p>
      <p>
        Source:
        <a href="http://git.eclipse.org/c/rap/incubator/org.eclipse.rap.incubator.gef.git/">org.eclipse.rap.incubator.gef</a>
      </p>
    </div>
    <div style="clear: both"></div>
  </div>

  <div class="box">
    <div class="images">
      <img src="/rap/images/incubator.png" alt="Incubator component"/>
    </div>
    <div>
      <h3>Tabbed properties view</h3>
      <p>
        Port of the
        <a href="http://www.eclipse.org/articles/Article-Tabbed-Properties/tabbed_properties_view.html">tabbed properties view</a>
        for RAP.
      </p>
      <p>
        Source:
        <a href="http://git.eclipse.org/c/rap/incubator/org.eclipse.rap.incubator.tabbed-properties.git/">org.eclipse.rap.incubator.tabbed-properties</a>
      </p>
    </div>
    <div style="clear: both"></div>
  </div>

  <div class="box">
    <div class="images">
      <img src="/rap/images/incubator.png" alt="Incubator component"/>
    </div>
    <div>
      <h3>PDE Runtime</h3>
      <p>
        Ports of the plugin-spy and error log views from
        <a href="http://www.eclipse.org/pde/pde-ui/">PDE UI</a>
        for RAP.
      </p>
      <p>
        Source:
        <a href="http://git.eclipse.org/c/rap/incubator/org.eclipse.rap.incubator.pde.git/">org.eclipse.rap.incubator.pde</a>
      </p>
    </div>
    <div style="clear: both"></div>
  </div>

  <div class="box">
    <div class="images">
      <img src="/rap/images/incubator.png" alt="Incubator component"/>
    </div>
    <div>
      <h3>File Upload</h3>
      <p>
        Provides a server-side component that receives file uploads and, on top of that, 
        an implementation of the SWT FileDialog that uploads files and makes them available on the
        server.
        <a href="http://eclipsesource.com/blogs/2011/06/23/uploading-files-with-rap-14/">This blog post</a>
        explains the details.
      </p>
      <p>
        Source:
        <a href="http://git.eclipse.org/c/rap/incubator/org.eclipse.rap.incubator.fileupload.git/">org.eclipse.rap.incubator.fileupload</a>
      </p>
    </div>
    <div style="clear: both"></div>
  </div>

  <div class="box">
    <div class="images">
      <img src="../images/sandbox/google-visualization.png" alt="Google Visualization"/>
    </div>
    <div>
      <h3>Google Visualization</h3>
      <p>
        This component provides a simple integration of all of the Google Visualization widgets
        as RAP custom widgets:
      </p>
      <ul>
        <li>Motion Chart</li>
        <li>Annotated Timeline</li>
        <li>Area Chart</li>
        <li>Bar Chart</li>
        <li>Column Chart</li>
        <li>Gauge</li>
        <li>Geomap</li>
        <li>Intensity Map</li>
        <li>Line Chart</li>
        <li>Pie Chart</li>
        <li>Scatter Chart</li>
        <li>Table</li>
      </ul>
      <p>
        Source:
        <a href="http://git.eclipse.org/c/rap/incubator/org.eclipse.rap.incubator.visualization.git/">org.eclipse.rap.incubator.visualization</a>
      </p>
    </div>
    <div style="clear: both"></div>
  </div>

  <div class="box">
    <div class="images">
      <img src="../images/sandbox/grid.png" alt="Nebula Grid"/>
    </div>
    <div>
      <h3>Nebula Grid</h3>
      <p>
        Port of the
        <a href="http://www.eclipse.org/nebula/widgets/grid/grid.php">Nebula Grid widget</a>
        for RAP.
      </p>
      <p>
        Source:
        <a href="http://git.eclipse.org/c/rap/incubator/org.eclipse.rap.incubator.nebula-grid.git/">org.eclipse.rap.incubator.nebula-grid</a>
      </p>
    </div>
    <div style="clear: both"></div>
  </div>

</div>

<div id="rightcolumn">
  <div class="sideitem">
     <h6>Incubation</h6>
     <div style="text-align: center;">
       <a href="/projects/what-is-incubation.php"><img
           align="center" src="/images/egg-incubation.png"
           border="0" alt="Incubation" /></a>
     </div>
   </div>
</div>

<?php

  printFooter();

?>
