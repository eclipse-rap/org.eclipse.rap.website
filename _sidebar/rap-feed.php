<?
  // Alternative feed: http://eclipsesource.com/blogs/tag/rap/feed/

  $feedUrl = "http://eclipsesource.com/blogs/tag/rap/feed/";
?>

<div class="sideitem">

  <h6>Recent RAP Posts
    <a href="<?= htmlspecialchars( $feedUrl, ENT_QUOTES ) ?>" class="rssIcon"><img src="/rap/images/feed-black.png" alt="feed" /></a></h6>
  <div class="sideitemcontent">
    <div id="rapFeed"></div>
    <script type="text/javascript">
      $( document ).ready( function () {
        $( '#rapFeed' ).rssfeed( '<?=urlencode( $feedUrl )?>', {
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
</div>
