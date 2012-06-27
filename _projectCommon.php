<?php

  require_once( "_errorHandler.php" );

  $CURRENT_YEAR = date( "Y" );

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
    global $PAGE_TITLE;
    global $PAGE_NAV_POSITION;
    global $PAGE_ADD_CSS;
    if( isset( $title ) ) {
      $PAGE_TITLE = $title;
    }
    if( isset( $navPosition ) ) {
      $PAGE_NAV_POSITION = $navPosition;
    }
    include( $_SERVER['DOCUMENT_ROOT'] . '/rap/_header.php' );
  }

  function printFooter() {
    global $CURRENT_YEAR;
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
    return 'https://bugs.eclipse.org/bugs/buglist.cgi?' . join( "&amp;", $parts );
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
