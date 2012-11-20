<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/_projectCommon.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/NavigationView.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/DevGuideUtils.php';

$title = "RAP - Developer's Guide";
$navPosition = array( 'help', 'developers-guide' );
$version = '1.5';
printHeader( $title, $navPosition );

?>

<div id="midcolumn">
  <h1>Developer's Guide for RAP <?=DevGuideUtils::VERSION ?></h1>
  <h2>Table of contents</h2>
  <div id="table-of-contents">
    <?= NavigationView::create( DevGuideUtils::ROOT_URL . '/help/toc.xml' . DevGuideUtils::$versions[ $version ][ 'postfix' ] ) ?>
  </div>
</div>

<?php printFooter(); ?>