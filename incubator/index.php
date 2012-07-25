<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $PAGE_TITLE = "RAP - Incubator";
  $PAGE_NAV_POSITION = array( "home", "incubator" );

  $WEB_ROOT = "http://git.eclipse.org/c/rap/incubator/org.eclipse.rap.incubator";
  $REPO_ROOT = "http://download.eclipse.org/rt/rap/incubator/nightly/";

  printHeader();

  $components = new SimpleXMLElement( 'components.xml', null, true );
  if( $components == null ) {
    echo '<div class="error">There was a problem loading the data for this page.</div>';
  }

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
  <? foreach( $components->component as $component ) : ?>
  <?
    $COMPONENT_ID = $component[ "id" ];
    $COMPONENT_NAME = $component->name;
    $COMPONENT_MAINTAINER = $component->maintainer;
    $COMPONENT_DESCRIPTION = $component->description->asXML();
    $COMPONENT_WEBURL = $WEB_ROOT . '.' . $COMPONENT_ID . '.git';
    $COMPONENT_REPO = $REPO_ROOT . $COMPONENT_ID . "/";
   ?>
    <div class="box">
      <div class="images">
        <img style="display:inline-block; width:250px; height:190px; background-image:url(/rap/images/incubator.png)"
             src="<?= $COMPONENT_WEBURL . '/plain/component.png' ?>" alt=""/>
      </div>

      <div>
        <h3><?= $COMPONENT_NAME ?></h3>
        <?= $COMPONENT_DESCRIPTION ?>
        <p>
          <strong>Maintainer:</strong> <?= $COMPONENT_MAINTAINER ?>
        </p>
        <p>
          <strong>Git repository:</strong> <a href="<?= $COMPONENT_WEBURL ?>"><?= $COMPONENT_WEBURL ?></a>
        </p>
        <p>
          <strong>Nightly builds p2 repository:</strong> <a href="<?= $COMPONENT_REPO ?>"><?= $COMPONENT_REPO ?></a>
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
