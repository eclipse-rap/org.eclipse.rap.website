<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "RAP - Incubator";
  $navPosition = array( "home", "incubator" );

  $incubatorRootUrl = 'http://git.eclipse.org/c/rap/incubator/org.eclipse.rap.incubator.';
  $incubatorComponents = array(
    'clientscripting',
    'fileupload',
    'cnf',
    'gef',
    'tabbed-properties',
    'visualization'
  );

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
  <? foreach( $incubatorComponents as $componentName ) : ?>
    <?
      $gitWebUrl = $incubatorRootUrl . $componentName . '.git';
      try {
        $component = new SimpleXMLElement( $gitWebUrl . '/plain/component.xml', null, true );
        $COMPONENT_NAME = $component->name;
        $COMPONENT_MAINTAINER = $component->maintainer;
        $COMPONENT_DESCRIPTION = $component->description->asXML();
      } catch( Exception $exception ) {
        $COMPONENT_NAME = $componentName;
        $COMPONENT_MAINTAINER = "";
        $COMPONENT_DESCRIPTION = "Failed to load component description";
      }
     ?>

    <div class="box">
      <div class="images">
        <img style="display:inline-block; width:250px; height:190px; background-image:url(/rap/images/incubator.png)"
             src="<?= $gitWebUrl . '/plain/component.png' ?>" alt="Incubator component"/>
      </div>

      <div>
        <h3><?= $COMPONENT_NAME ?></h3>
        <?= $COMPONENT_DESCRIPTION ?>
        <p>
          <strong>Maintainer: <?= $COMPONENT_MAINTAINER ?></strong>
        </p>
        <p>
          <a href="<?= $gitWebUrl ?>">Source code</a>
        </p>
      </div>
      <div style="clear:both"></div>
    </div>

  <? endforeach; ?>

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
