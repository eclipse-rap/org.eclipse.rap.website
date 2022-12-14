<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/_projectCommon.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/DevGuideUtils.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/NavigationView.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rap/developers-guide/ContentView.php';

$PAGE_TITLE = "RAP - Developer's Guide";
$PAGE_NAV_POSITION = array( "documentation", "developers-guide" );
$PAGE_ADD_CSS = '/rap/_theme/devguide.css';

$forwardingUrl = '/rap/developers-guide/';
$version = DevGuideUtils::CURRENT_VERSION;

if( isset( $_GET[ 'version' ] ) ) {
  $version = $_GET[ 'version' ];
}

if( !isset( $_GET[ 'topic' ] ) || !array_key_exists( $version, DevGuideUtils::$versions ) ) {
  header( 'Location: ' . $forwardingUrl );
  exit;
}

$topic = $_GET[ 'topic' ];

if( empty( $topic )
    || containsString( $topic, './' )
    || containsString( $topic, '../' )
    || !containsString( $topic, '.html' ) )
{
  send404();
} else {
  try {
    $devguideContent = ContentView::create( $topic, $version );
  } catch( RuntimeException $exception ) {
    send404();
  }
}

function send404() {
  header( "HTTP/1.1 404 Not Found" );
}

printHeader();

?>

<div id="midcolumn" class="dev-guide-content">

<? if( $devguideContent ) { ?>

  <?= $devguideContent ?>

<? } else { ?>

  <h1>Not found</h1>

  <p>
    This help topic does not exist in the RAP Developer's Guide
  </p>
  <p>
    See <a href="/rap/developers-guide/">table of contents</a> for all available topics.
  </p>

<? } ?>

</div>

<div id="rightcolumn">
  <a style = "color:inherit;text-decoration:none;"
    href="<?=$forwardingUrl . '?version=' . $version; ?>">
  <h2 style="padding-bottom:12px;">Contents / RAP <?=$version?></h2></a>

  <?= NavigationView::create( $version ); ?>
</div>

<script type="text/javascript">
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

<?

printFooter();

?>
