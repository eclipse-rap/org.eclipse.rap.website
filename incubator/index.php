<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $PAGE_TITLE = "RAP - Incubator";
  $PAGE_NAV_POSITION = array( "home", "incubator" );

  $WEB_ROOT = "http://git.eclipse.org/c/rap/incubator/org.eclipse.rap.incubator";
  $REPO_ROOT = "http://download.eclipse.org/rt/rap/incubator/";

  printHeader( $PAGE_TITLE, $PAGE_NAV_POSITION );

  $components = new SimpleXMLElement( 'components.xml', null, true );
  if( $components == null ) {
    echo '<div class="error">There was a problem loading the data for this page.</div>';
  }

?>

<div id="midcolumn">

  <h1>RAP Incubator Add-Ons</h1>
  <p>
    The RAP Incubator is a sub-project to make new and promising RAP add-on developments visible and
    available for the community. It is partitioned into components, each maintained by its own
    Incubator committer(s).
    When a component has matured and is broadly used, it may graduate and move to the RAP project.
  </p>
  <p>
    A completely
    <a href="http://wiki.eclipse.org/RAP/Add-Ons"><b>unfiltered list</b></a> of software
    that was developed to be used together with RAP (including this incubator components)
    can be found in the RAP wiki.
  </p>

  <h2>Available components</h2>
  <? foreach( $components->component as $component ) : ?>
  <?
    $COMPONENT_ID = $component[ "id" ];
    $COMPONENT_NAME = $component->name;
    $COMPONENT_MAINTAINER = $component->maintainer;
    $COMPONENT_DESCRIPTION = $component->description->asXML();
    $COMPONENT_WEBURL = $WEB_ROOT . '.' . $COMPONENT_ID . '.git';
    $COMPONENT_REPO = $REPO_ROOT . "nightly/" . $COMPONENT_ID . "/";
    $COMPONENT_REPO_20 = $REPO_ROOT . "2.0/" . $COMPONENT_ID . "/";
    $NIGHTLY_ENABLED = array( "clientscripting", "cnf", "fileupload", "gef", "nebula-grid", "pde", "tabbed-properties", "visualization" );
    $RAP20_ENABLED = array( "clientscripting", "nebula-grid", "pde", "fileupload" );
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
        <? if( in_array( $COMPONENT_ID, $NIGHTLY_ENABLED ) ) : ?>
        <p>
          <strong>Nightly builds p2 repository:</strong> <a href="<?= $COMPONENT_REPO ?>"><?= $COMPONENT_REPO ?></a>
        </p>
        <? endif ?>
        <? if( in_array( $COMPONENT_ID, $RAP20_ENABLED ) ) : ?>
        <p>
          <strong>RAP 2.0 compatible p2 repository:</strong> <a href="<?= $COMPONENT_REPO_20 ?>"><?= $COMPONENT_REPO_20 ?></a>
        </p>
        <? endif ?>
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
