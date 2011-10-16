<div class="sideitem">

  <h6>Recent RAP Posts <a href="http://pipes.yahoo.com/pipes/pipe.run?_id=29fa792a21689d660776bb62478167c9%26_render=rss" class="rssIcon"><img src="/rap/images/feed.png" alt="feed"></a></h6>

  <div id="rapFeed"></div>

  <script type="text/javascript">
    $( document ).ready( function () {
      // Alternative feed: http://eclipsesource.com/blogs/tag/rap/feed/
      // See http://pipes.yahoo.com/pipes/pipe.info?_id=c85e08c37c50468c079de010e5fea95f
      $( '#rapFeed' ).rssfeed( 'http%3A%2F%2Fpipes.yahoo.com%2Fpipes%2Fpipe.run%3F_id%3Dc85e08c37c50468c079de010e5fea95f%26_render%3Drss', {
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
