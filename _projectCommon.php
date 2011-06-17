<?php

  require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php" );
  require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php" );
  require_once( $_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php" );
  require_once( "_navigation.php" );

  function replaceVariables( $variables, $html ) {
    foreach( $variables as $key => $value ) {
      $html = str_replace( "{" . $key . "}", $value, $html );
    }
    return $html;
  }

  function generateRapPage( $author, $keywords, $title, $html, $navPosition ) {
    $App = new App();

    $App->AddExtraHtmlHeader( '<meta name="google-site-verification" content="kMX1SI1MRFpyzEPh4yv_TXRUpKLmBVvENEfQtjdZuwI" />' );
    $App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/rap/rap-layout-fixes.css"/>' );
    $App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/rap/rap-big-header.css"/>' );
    $App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/rap/rap-posts.css"/>' );  
    $App->AddExtraHtmlHeader( '<!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="/rap/rap-layout-fixes-ie.css"/><![endif]-->' );
    $App->AddExtraHtmlHeader( '<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>' );
    $App->AddExtraHtmlHeader( '<script type="text/javascript" src="http://w3.eclipsesource.com/www/js/rap/jquery.zrssfeed.min.js"></script>' );

    $App->SetGoogleAnalyticsTrackingCode("UA-17128428-1");
    $theme = "Nova";
    $pageHtml = createRapNavigation( $navPosition) . $html;
    $App->generatePage( $theme, new Menu(), NULL, $author, $keywords, $title, $pageHtml );

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

?>
