<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/_projectCommon.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/NavigationView.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/ContentView.php';

$valid = true;
$forwardingUrl = '/rap/developers-guide/';
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
$navPosition = array( 'help', 'developers-guide' );
printHeader( $title, $navPosition );

?>

<?php if( $valid ) : ?>

  <div id="midcolumn" class="dev-guide-content">
    <?php ContentView::render( $_GET[ 'topic' ] ); ?>
  </div>
  <div id="rightcolumn">
    <h2 style="padding-bottom: 12px;">Contents</h2>
    <?php NavigationView::render( 'toc.xml' ); ?>
  </div>

  <script>
    $( 'ul#dev-guide-nav li.category-group ul' ).each( function() {
      if( !$( this ).find( '.active' ).attr( 'class' ) ) {
        $( this ).hide();
        $( this ).addClass( 'hidden' );
      } else {
        $( this ).siblings( 'span' ).children( 'span' ).addClass( 'opened' );
      }
    } );
    $( 'ul#dev-guide-nav li.category-group span' ).click( function() {
      var navList = $( this ).siblings( 'ul' );
      var arrow = $( this ).children( 'span' );
      if( navList.hasClass( 'hidden' ) ) {
        navList.slideDown();
        navList.removeClass( 'hidden' );
        arrow.addClass( 'opened' );
      } else {
        navList.slideUp();
        navList.addClass( 'hidden' );
        arrow.removeClass( 'opened' );
      }
    } );
  </script>

<?php else : ?>

  <h1>Not found</h1>

  <p>This help topic does not exist in the RAP Developer's Guide</p>

<?php endif; ?>

<?php printFooter(); ?>
