<?
  // Alternative feed: http://eclipsesource.com/blogs/tag/rap/feed/

  $feedUrl = "http://eclipsesource.com/blogs/tag/rap/feed/";

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
