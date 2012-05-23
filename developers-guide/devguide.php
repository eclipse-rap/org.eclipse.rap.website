<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/_projectCommon.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/DevGuideUtils.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/NavigationView.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/ContentView.php';

$title = "Developer's Guide";
$navPosition = array( 'help', 'developers-guide' );
$forwardingUrl = '/rap/developers-guide/';

if( !isset( $_GET[ 'topic' ] ) ) {
  header( 'Location: ' . $forwardingUrl );
  exit;
} else if( empty( $_GET[ 'topic' ] ) ||
           DevGuideUtils::containsString( $_GET[ 'topic' ], './' ) ||
           DevGuideUtils::containsString( $_GET[ 'topic' ], '../' ) ||
           !DevGuideUtils::containsString( $_GET[ 'topic' ], '.html' ) ) {
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
  printFileNotFoundErrorMessage();
  printFooter();
  exit;
}

function printFileNotFoundErrorMessage() {
  echo '<div id="midcolumn" class="dev-guide-content">'
     . "<h1>Not found</h1><p>This help topic does not exist in the RAP Developer's Guide</p>"
     . '<p>See <a href="/rap/developers-guide/">table of contents</a> for all available topics.</p>'
     . '</div>';
}

?>

<?php printHeader( $title, $navPosition ) ?>

<div id="midcolumn" class="dev-guide-content">
  <?= $devguideContent ?>
</div>
<div id="rightcolumn">
  <h2 style="padding-bottom: 12px;">Contents</h2>
  <?= NavigationView::create( DevGuideUtils::ROOT_URL . '/help/toc.xml' ); ?>
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
