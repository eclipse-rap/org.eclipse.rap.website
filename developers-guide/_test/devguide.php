<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/_projectCommon.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/_test/NavigationView.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/_test/ContentView.php';

$title = "Developer's Guide";
$navPosition = array( 'help', 'developers-guide' );
$devguideRootUrl = 'http://git.eclipse.org/c/rap/org.eclipse.rap.tools.git/plain/bundles/org.eclipse.rap.help';
$forwardingUrl = 'index.php';
$devguideContent = '';

if( !isset( $_GET[ 'topic' ] ) ) {
  header( 'Location: ' . $forwardingUrl );
  exit;
} else if( !startsWith( $_GET[ 'topic' ], $devguideRootUrl ) ) {
  handleError();
}

try {
  $devguideContent = ContentView::create( $_GET[ 'topic' ] );
} catch( RuntimeException $exception ) {
  handleError();
}

function startsWith( $haystack, $needle ) {
  $result = false;
  $needleLength = strlen( $needle );
  if( $needleLength <= strlen( $haystack ) ) {
    $result = substr( $haystack, 0, $needleLength ) === $needle;
  }
  return $result;
}

function handleError() {
  header( "HTTP/1.1 404 Not Found" );
  printHeader( $title, $navPosition );
  printFileNotFoundError();
  printFooter();
  exit;
}

function printFileNotFoundError() {
  echo '<div id="midcolumn" class="dev-guide-content">'
     . "<h1>Not found</h1><p>This help topic does not exist in the RAP Developer's Guide</p>"
     . '</div>';
}

?>

<?php printHeader( $title, $navPosition ) ?>

<div id="midcolumn" class="dev-guide-content">
  <?= $devguideContent ?>
</div>
<div id="rightcolumn">
  <h2 style="padding-bottom: 12px;">Contents</h2>
  <?php NavigationView::render( 'http://git.eclipse.org/c/rap/org.eclipse.rap.tools.git/plain/bundles/org.eclipse.rap.help' ); ?>
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

<?php printFooter(); ?>
