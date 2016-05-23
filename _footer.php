<?
    printGoogleAnalyticsJs( 'UA-910670-2' );
    printGoogleAnalyticsJs( 'UA-17128428-1' );
?>
      <div class="stop"></div>
      <div id="footer">
        <ul id="footernav">
          <li><a href="http://www.eclipse.org/">Eclipse</a></li>
          <li><a href="http://www.eclipse.org/legal/privacy.php">Privacy Policy</a></li>
          <li><a href="http://www.eclipse.org/legal/termsofuse.php">Terms of Use</a></li>
          <li><a href="http://www.eclipse.org/legal/copyright.php">Copyright Agent</a></li>
          <li><a href="http://www.eclipse.org/legal/">Legal</a></li>
          <li><a href="http://www.eclipse.org/org/foundation/contact.php">Contact Us</a></li>
        </ul>
        <a href="http://www.eclipse.org/"><img src="/rap/images/logos/eclipse.png" alt="Eclipse logo" /></a>
        <span id="copyright">Copyright &copy; <?= $CURRENT_YEAR ?> The Eclipse Foundation. All Rights Reserved.</span>
      </div>

    </div>
  </div>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/docsearch.js/1/docsearch.min.js"></script>
  <script type="text/javascript">
    docsearch({
      apiKey: '3e9946bc18fa7d26dc03c883df41b9de',
      indexName: 'eclipse_rap',
      inputSelector: '#search-query',
      algoliaOptions: {
        hitsPerPage: 9,
      }
    });
    $( function() {
      // prettify rewrites <pre> and <code> elements with class="prettyprint"
      // optionally, the language can be selected using a "lang-" prefixed class, e.g. lang-java
      $( 'pre[class|="lang"],code[class|="lang"]' ).addClass( "prettyprint" );
      $( "pre[lang],code[lang]" ).addClass( function() {
        var lang = $( this ).attr( "lang" );
        return "prettyprint" + ( lang ? " lang-" + lang : "" );
      } );
      prettyPrint();
    } );
  </script>
</body>
</html>
