<div class="sideitem" id = "slideshow" >

<!------------------- CSS -------------------->

  <style>
  
    #slideshow h6 {
      height:18px;
      cursor:default;
    }
    
    #slideContainer {
      height:200px;
      padding:5px;
      cursor:pointer;
    }
    
    #slide {
      -moz-user-select: none;
      -khtml-user-select: none;
      -webkit-user-select: none;
      user-select: none;
      display:none;
      margin:4px;
      overflow:hidden;
    }
  
  </style>

<!------------------- HTML ------------------->

  <h6>
    <span id = "slideTitle" >
    </span>
  </h6>

  <div class = "terminal" id = "slideContainer" >
    <div id = "slide" >
    </div>
  </div>

<!------------------- PHP -------------------->

  <?php

    function prepareContent( $content ) {
      $result = preg_replace("/[\n\r]/", "", $content ); 
      $result = preg_replace("/[\"]/", "\\\"", $result ); 
      return $result;
    }

    function writeSlideshowContent() {
      $slideshow = simplexml_load_file( './_sidebar/slideshow.xml' );
      $slides = Array();
      foreach( $slideshow->slide as $slide ) {
        $obj = '{ content : "'.prepareContent( $slide ).'",';
        $obj .= 'title : "'.$slide[ 'title' ].'", url : "'.$slide[ 'url' ].'" }';
        $slides[] = $obj;
      }
      echo '[ '.join( ',', $slides ).' ]';
    }
  ?>

<!------------------- JavaScript ------------->

  <script type="text/javascript">

    // TODO [ tb ] : Pre-load graphics for next slide
    // TODO [ tb ] : support relative URLs
    // TODO [ tb ] : ignore empty url
    // TODO [ tb ] : display times could be an attribute of slide-tags if needed
    // TODO [ tb ] : animate title transition?

    $( document ).ready( function() {

      var slideData = {
        "_pos" : -1,
        "_content" : <?php writeSlideshowContent() ?>,
        "nextSlide" : function() {
           this._pos++;
           if( this._pos >= this._content.length ) {
             this._pos = 0;
           }
        },
        "getSlide" : function() {
           return this._content[ this._pos ].content;
         },
        "getTitle" : function() {
           return this._content[ this._pos ].title;
         },
        "getUrl" : function() {
           return this._content[ this._pos ].url;
         }
      };

      var showSlide = function() {
        slideData.nextSlide();
        $( "#slideTitle" ).empty().append( slideData.getTitle() );
        var slide = $( "#slide" );
        slide.empty().append( slideData.getSlide() );
        slide.fadeIn( 800 ).delay( 5000 ).fadeOut( 800, arguments.callee );
      };

      $('#slideContainer').click( function() {
        location.href = slideData.getUrl();
      } );

      showSlide();

    } );

  </script>

<!-------------------------------------------->

</div>  