$(document).ready( function() {
  
  var enableDownloadDropdowns = function() {
    $( '.expand-body' ).hide();
    $( '.download-button' ).hover( function() {
      $( this ).addClass( 'hover' );
    }, function() {
      $( this ).removeClass( 'hover' );
    } );
    $( '.expand-link' ).click( function() {
      var link = $( this );
      var body = link.closest( '.expand-head' ).next( '.expand-body' );
      var relatedItem = body.children( '.expand-item' ).eq( link.index() );
      if( body.is( ':visible' ) && relatedItem.is( ':visible' ) ) {
        body.slideUp( function() {
          link.removeClass( 'selected' );
        } );
      } else {
        relatedItem.show().siblings().hide();
        link.addClass( 'selected' ).siblings().removeClass( 'selected' );
        body.slideDown();
      }
    } );
  };
  
  var enableInfoBox = function() {
    var infoBox = $( '#info-box' );
    infoBox.mouseenter( function() {
      infoBox.stop();
      infoBox.animate( {
        "width" : "200px"
      } );
    } );
    infoBox.mouseleave( function() {
      infoBox.stop();
      infoBox.animate( {
        "width" : "45px"
      } );
    } );
  };

  enableDownloadDropdowns();
  enableInfoBox();
} );
