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

  function enablePopup() {
    
    var body = $( "body" );
    var overlay = $( '<div class="overlay"></div>' );
    var popup = $( '<div id="popup"></div>' );
    body.append( overlay );
    
    overlay.click( function() {
      hideOverlayAndPopup();
    } );
    
    $( ".popup-activate" ).click( function() {
      showOverlay();
      showPopup( this );
      return false;
    } );
    
    function showPopup( featureElem ) {
      var featureId = $( featureElem ).parents( ".feature" ).attr( "id" );
      popup.append( $( ".popup-content[data-for=" + featureId + "]" ).html() );
      var closeBtn = $( '<span id="popup-close">X</span>' );
      var backLink = $( '<a style="cursor:pointer">back</a>' );
      closeBtn.click( hideOverlayAndPopup );
      backLink.click( hideOverlayAndPopup );
      popup.append( closeBtn );
      popup.append( backLink );
      body.append( popup );
      popup.fadeIn( 100 );
    };
    
    function hideOverlayAndPopup() {
      hideOverlay();
      hidePopup();
    }
    
    function hidePopup() {
      popup.fadeOut( 100, function() {
        popup.empty();
        body.remove( popup );
      } );
    }
    
    function showOverlay() {
      overlay.css( "display", "block" );
      overlay.css( "filter", "alpha(opacity=0)" );
      overlay.animate( {
        "opacity" : "0.5"
      } );
    };
    
    function hideOverlay() {
      overlay.animate( {
        "opacity" : "0"
      }, 
      function() {
        overlay.css( "display", "none" );
      } );
    };
    
  }

  enableDownloadDropdowns();
  enableInfoBox();
  enablePopup();
} );
