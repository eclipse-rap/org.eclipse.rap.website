<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $PAGE_TITLE = "RAP - Incubator";
  $PAGE_NAV_POSITION = array( "home", "incubator" );

  $WEB_ROOT = "http://git.eclipse.org/c/rap/incubator/org.eclipse.rap.incubator";
  $REPO_ROOT = "http://download.eclipse.org/rt/rap/incubator/";

  printHeader();

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
   ?>
    <div class="box">
      <div class="images">
        <img style="display:inline-block; width:250px; height:190px; background-image:url(/rap/images/incubator.png)"
             src="<?= 'images/' . $COMPONENT_ID . '.png' ?>" alt=""/>
      </div>

      <div>
        <h3><?= $COMPONENT_NAME ?></h3>
        <?= $COMPONENT_DESCRIPTION ?>
        <p>
          <strong>Maintainer:</strong> <?= $COMPONENT_MAINTAINER ?>
        </p>
        <p>
          <strong>Source code:</strong>
          <a href="<?= $COMPONENT_WEBURL ?>">git repository</a>
        </p>
        <? if( $component->builds ) : ?>
        <p>
          <strong>Builds (p2 repositories):</strong>
        </p>
        <ul>
        <? foreach( $component->builds->build as $build ) : ?>
        <?
          $BUILD_URL = $REPO_ROOT . $build . "/" . $COMPONENT_ID;
          if( $build == "nightly" ) {
            $BUILD_LABEL = "nightly builds";
          } else {
            $BUILD_LABEL = "RAP " . $build . " compatible version";
          }
        ?>
        <li><a href="<?= $BUILD_URL ?>"><?= $BUILD_LABEL ?></a></li>
        <? endforeach; ?>
        </ul>
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
