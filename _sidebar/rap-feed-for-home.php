<?
  // See http://pipes.yahoo.com/pipes/pipe.info?_id=c85e08c37c50468c079de010e5fea95f
  // Alternative feed: http://eclipsesource.com/blogs/tag/rap/feed/

  $feedUrl = "http://pipes.yahoo.com/pipes/pipe.run?_id=c85e08c37c50468c079de010e5fea95f&_render=rss";

?>

<div id="blog-posts-container">
  <a href="<?= htmlspecialchars( $feedUrl, ENT_QUOTES ) ?>" class="rssIcon"><img src="/rap/images/feed_dark.png" alt="feed" /></a>
  <h2>Recent blog posts</h2>
  <div id="blog-posts"></div>
  <div class="stop"></div>
</div>

<script type="text/javascript">

  $( '#blog-posts' ).rssfeed( '<?=urlencode( $feedUrl )?>', {
    limit: 3,
    header : false,
    key : "ABQIAAAADaXzprMke0eXhl5lyjwBJhQirors1Oy_y16QJctfjrSpBJX32hS_wL3O0Tk2wYierOO2_dXAoE0AMQ",
    titletag : "h3",
    date : false,
    content : true
  } );

</script>
