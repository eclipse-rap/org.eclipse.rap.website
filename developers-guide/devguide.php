<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/_projectCommon.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/NavigationView.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/ContentView.php';

$valid = true;
$forwardingUrl = 'devguide.php?topic=html/intro.html';
if( !$_GET[ 'topic' ] ) {
  header( 'Location: ' . $forwardingUrl );
  exit;
} else if( !isValidFilePath() || !is_file( $_GET[ 'topic' ] ) ) {
  header( "HTTP/1.1 404 Not Found" );
  $valid = false;
}

function isValidFilePath() {
  $allowedPath = realpath( $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/html' );
  $targetPath = realpath( $_GET[ 'topic' ] );
  return startsWith( $targetPath, $allowedPath );
}

function startsWith( $haystack, $needle ) {
  $length = strlen( $needle );
  return ( substr( $haystack, 0, $length ) === $needle );
}

$title = "Developer's Guide";
$navPosition = array( 'help', 'index' );
printHeader( $title, $navPosition );

?>

<?php if( $valid ) { ?>

<div class="two-col">
  <?php ContentView::render( $_GET[ 'topic' ] ); ?>
  <div id="dev-guide-nav">
    <?php NavigationView::render( 'toc.xml' ); ?>
  </div>
  <div class="antifloat"></div>
</div>

<script>
  function initDevGuideAccordion() {
    $( '#dev-guide-nav li.category-group ul' ).each( function() {
      if( !$( this ).find( '.active' ).attr( 'class' ) ) {
        $( this ).hide();
        $( this ).addClass( 'hidden' );
      }
    } );
    $( '#dev-guide-nav li.category-group span' ).click( function() {
      var navList = $( this ).siblings( 'ul' );
      if( navList.hasClass( 'hidden' ) ) {
        navList.slideDown();
        navList.removeClass( 'hidden' );
      } else {
        navList.slideUp();
        navList.addClass( 'hidden' );
      }
    } );
  }

  initDevGuideAccordion();

</script>

<?php } else { ?>

<h1>Not found</h1>

<p>This help topic does not exist in the RAP Developer's Guide</p>

<?php } ?>

<?php printFooter(); ?>
