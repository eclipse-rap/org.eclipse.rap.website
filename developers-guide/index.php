<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/_projectCommon.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/NavigationView.php';

$title = "Table of contents";
$navPosition = array( 'help', 'developers-guide' );
printHeader( $title, $navPosition );

?>

<div id="midcolumn">
  <h1>Developer's Guide</h1>
  <h2>Table of contents</h2>
  <div id="table-of-contents">
    <?php NavigationView::render( "toc.xml" ) ?>
  </div>
</div>

<?php printFooter(); ?>