<?php
# Set the theme for your project's web pages.
# See the Committer Tools "How Do I" for list of themes
# https://dev.eclipse.org/committers/

  $Nav->setLinkList( array() );

  $Nav->addCustomNav( "About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=rt.rap", "_self", 0 );

  $Nav->addNavSeparator( "Downloads", "/rap/downloads/", "_self", 1 );
  $Nav->addCustomNav( "New &amp; Noteworthy", "/rap/noteworthy/", "_self", 1 );
  $Nav->addCustomNav( "Source Code", "/rap/source/", "_self", 1 );

  $Nav->addNavSeparator( "Documentation", "/rap/documentation/", "_self", 1 );
  $Nav->addCustomNav( "Demos", "/rap/demos/", "_self", 1 );
  $Nav->addCustomNav( "Project Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=rt.rap", "_self", 1 );	

  $Nav->addNavSeparator( "Support", "/rap/support/", "_self", 1 );
  $Nav->addCustomNav( "Get Started", "/rap/getting-started/",	"_self", 1 );

  $Nav->addNavSeparator( "Getting Involved", "/rap/getting-involved/", "_self", 1 );
  $Nav->addCustomNav( "Bugs", "/rap/bugs/", "_self", 1 );
  $Nav->addCustomNav( "Incubator", "/rap/incubator/", "_self", 1 );

  $Menu->setMenuItemList( array() );
  $Menu->addMenuItem( "Home", "/rap/", "_self" );
  $Menu->addMenuItem( "Demos", "/rap/demos/", "_self" );
  $Menu->addMenuItem( "Get Started", "/rap/getting-started/", "_self" );
  $Menu->addMenuItem( "Downloads", "/rap/downloads/", "_self" );
  $Menu->addMenuItem( "Documentation", "/rap/documentation/", "_self" );
  $Menu->addMenuItem( "Support", "/rap/support/", "_self" );
  $Menu->addMenuItem( "Wiki", "http://wiki.eclipse.org/RAP", "_self" );

  $App->AddExtraHtmlHeader( '<meta name="google-site-verification" content="kMX1SI1MRFpyzEPh4yv_TXRUpKLmBVvENEfQtjdZuwI" />' );
  $App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/rap/rap-layout-fixes.css"/>' );
  $App->AddExtraHtmlHeader( '<!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="/rap/rap-layout-fixes-ie.css"/><![endif]-->' );
  $App->AddExtraHtmlHeader( '<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>' );

//  $App->Promotion = TRUE; # set true to enable current eclipse.org site-wide promo
  $App->SetGoogleAnalyticsTrackingCode("UA-17128428-1");

  function createRapNavigation( $Nav ) {
    $html = <<<EOHTML
<div id="rap-small-header">
  <a href="/rap/"><div id="rap-small-logo"></div></a>
</div>
<script type="text/javascript">
  // logo
  var logo = $( '#logo:first-child' );
  var newLogo = '<div id="logo"><a href="http://www.eclipse.org">' 
                + logo.html() + '</a></div>';
  logo.replaceWith( newLogo );
</script>


EOHTML;
    
    return $html;
  }

  function replaceVariables( $variables, $html ) {
    foreach( $variables as $key => $value ) {
      $html = str_replace( "{" . $key . "}", $value, $html );
    }
    return $html;
  }

  function generateRapPage( $App, $Menu, $Nav, $author, $keywords, $title, $html )
  {
    $theme = "Nova";
    //$vars = array();
    //$vars[ "SIDEBAR:ARCHIVE" ] = file_get_contents( $_SERVER["DOCUMENT_ROOT"] . '/rap/sidebar/_archive.html' );
    //$html = replaceVariables( $vars, $html );
    $pageHtml = createRapNavigation( $Nav ) . $html;
    $App->generatePage( $theme, $Menu, $Nav, $author, $keywords, $title, $pageHtml );
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
