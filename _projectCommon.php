<?php

  require_once( "_errorHandler.php" );

  function replaceVariables( $variables, $html ) {
    foreach( $variables as $key => $value ) {
      $html = str_replace( "{" . $key . "}", $value, $html );
    }
    return $html;
  }

  function generateRapPage( $author, $keywords, $title, $html, $navPosition ) {
    printHeader( $title, $navPosition );
    echo $html;
    printFooter();
  }

  function printHeader( $title, $navPosition ) {
    $PAGE_TITLE = $title;
    $PAGE_NAV_POSITION = $navPosition;
    global $PAGE_ADD_CSS;
    include( $_SERVER['DOCUMENT_ROOT'] . '/rap/_header.php' );
  }

  function printFooter() {
    printGoogleAnalyticsJs( 'UA-910670-2' );
    printGoogleAnalyticsJs( 'UA-17128428-1' );
    $CURRENT_YEAR = date( "Y" );
    include( $_SERVER['DOCUMENT_ROOT'] . '/rap/_footer.php' );
  }

  function printGoogleAnalyticsJs( $trackingId ) {
    echo <<<EOHTML
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', '${trackingId}']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
EOHTML;
  }

  function createBuglistUrl( $targetMilestones ) {
    $parameters[ 'query_format' ] = 'advanced';
    $parameters[ 'classification' ] = 'RT';
    $parameters[ 'product' ] = 'RAP';
    $parameters[ 'bug_status' ] = array( 'RESOLVED', 'VERIFIED', 'CLOSED' );
    $parameters[ 'target_milestone' ] = $targetMilestones;
    foreach( $parameters as $key => $value ) {
      $values = is_array( $value ) ? $value : array( $value );
      foreach( $values as $element ) {
        $parts[] = $key . '=' . rawurlencode( $element );
      }
    }
    return 'https://bugs.eclipse.org/bugs/buglist.cgi?' . join( "&", $parts );
  }

  function formatDate( $input ) {
    $months = array( "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December" );
    $date = explode( "-", $input );
    return $months[ $date[ 1 ] - 1 ] . " " . $date[ 2 ] . ", " . $date[ 0 ];
  }

  function includeSidebar( $filename ) {
    include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_sidebar/" . $filename );
  }

  function containsString( $haystack, $needle ) {
    return strpos( $haystack, $needle ) === false ? false : true;
  }

?>
