<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/_projectCommon.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/NavigationView.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/DevGuideUtils.php';

$title = "RAP - Developer's Guide";
$navPosition = array( 'help', 'developers-guide' );
$version = DevGuideUtils::CURRENT_VERSION;

if( isset( $_GET[ 'version' ] ) ) {
  $version = $_GET[ 'version' ];
}

if( !array_key_exists( $version, DevGuideUtils::$versions ) ) {
  header( 'Location: /rap/developers-guide/' );
  exit;
}

$versionNav = array();

foreach( DevGuideUtils::$versions as $key => $value ) {
  $piece;
  if( $key == $version ) {
    $piece = '<b>' . $key . '</b>';
  } else {
    $url = '/rap/developers-guide/index.php?version=' . $key;
    $piece = '<a href = "' . $url .'">' . $key . '</a>';
  }
  $versionNav[] = $piece;
}

printHeader( $title, $navPosition );

?>

<div id="midcolumn">
  <h1 style = "margin-bottom: 3px" >Developer's Guide for RAP <?=$version ?></h1>
  <?=implode( ' | ', $versionNav );?>
  <h2>Table of contents</h2>
  <div id="table-of-contents">
    <?= NavigationView::create( $version ) ?>
  </div>
</div>

<?php printFooter(); ?>