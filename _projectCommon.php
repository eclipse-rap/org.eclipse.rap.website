<?php

  require_once( "_navigation.php" );

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
    echo <<<EOHTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>$title</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="keywords" content="ajax, rap, osgi, equinox, eclipse rap, equinox rap" />
  <meta name="google-site-verification" content="kMX1SI1MRFpyzEPh4yv_TXRUpKLmBVvENEfQtjdZuwI" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/eclipse.org-common/yui/2.6.0/build/reset-fonts-grids/reset-fonts-grids.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/rap/_theme/reset.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="/rap/_theme/layout.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/rap/_theme/print.css" media="print" />
  <!--[if IE 6]>  <link rel="stylesheet" type="text/css" href="/eclipse.org-common/themes/Nova/css/ie6_style.css" media="screen"/> <![endif]-->
  <!--[if lte IE 7]>  <link rel="stylesheet" type="text/css" href="/eclipse.org-common/themes/Nova/css/ie_style.css" media="screen"/> <![endif]-->
  <!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="/rap/rap-layout-fixes-ie.css"/><![endif]-->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="http://w3.eclipsesource.com/www/js/rap/jquery.zrssfeed.min.js"></script>
  <script type="text/javascript" src="/rap/script.js"></script>
</head>
<body>
	<div id="header-bar">
EOHTML;

    echo createHeaderAndNavigation( $navPosition );
    
    echo <<<EOHTML
	</div>
	<div id="novaWrapper">
		<div id="novaContent">
EOHTML;
  }

  function printFooter() {
    $year = date( "Y" );
    printGoogleAnalyticsJs( 'UA-910670-2' );
    printGoogleAnalyticsJs( 'UA-17128428-1' );
    echo <<<EOHTML
    <div class="antifloat"></div>
    <div id="footer">
    <ul id="footernav">
      <li><a href="http://www.eclipse.org/">Eclipse</a></li>
      <li><a href="http://www.eclipse.org/legal/privacy.php">Privacy Policy</a></li>
      <li><a href="http://www.eclipse.org/legal/termsofuse.php">Terms of Use</a></li>
      <li><a href="http://www.eclipse.org/legal/copyright.php">Copyright Agent</a></li>
      <li><a href="http://www.eclipse.org/legal/">Legal</a></li>
      <li><a href="http://www.eclipse.org/org/foundation/contact.php">Contact Us</a></li>
    </ul>
    <img src="/rap/images/logos/eclipse.png" alt="Eclipse logo" />
    <span id="copyright">Copyright &copy; $year The Eclipse Foundation. All Rights Reserved.</span>
  </div>

</div>
</body>
</html>
EOHTML;
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

  function xslt( $xmlFile, $xslFile ) {
    $xslDoc = new DOMDocument();
    $xslDoc->load( $xslFile );
    $xmlDoc = new DOMDocument();
    $xmlDoc->load( $xmlFile );
    $proc = new XSLTProcessor();
    $proc->importStylesheet( $xslDoc );
    return $proc->transformToXML( $xmlDoc );
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

?>
