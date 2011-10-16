<div class="sideitem">

  <h6>Recent RAP Posts <a href="http://eclipsesource.com/blogs/tag/rap/feed/" class="rssIcon"><img src="/rap/images/feed.png" alt="feed"></a></h6>

  <div id="rapFeed"></div>

  <script type="text/javascript">
    $( document ).ready( function () {
      // Alternative feed: http://eclipsesource.com/blogs/tag/rap/feed/
      // See http://pipes.yahoo.com/pipes/pipe.info?_id=c85e08c37c50468c079de010e5fea95f
      $( '#rapFeed' ).rssfeed( 'http://pipes.yahoo.com/pipes/pipe.run?_id=c85e08c37c50468c079de010e5fea95f&_render=rss', {
        limit: 4,
        header : false,
        key : "ABQIAAAADaXzprMke0eXhl5lyjwBJhQirors1Oy_y16QJctfjrSpBJX32hS_wL3O0Tk2wYierOO2_dXAoE0AMQ",
        titletag : "h5",
        date : false,
        content : true
      } );
    } );
  </script>

</div>
