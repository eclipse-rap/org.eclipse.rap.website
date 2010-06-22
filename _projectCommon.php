<?php
# Set the theme for your project's web pages.
# See the Committer Tools "How Do I" for list of themes
# https://dev.eclipse.org/committers/

  $Nav->setLinkList( array() );

  $Nav->addCustomNav( "About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=rt.rap", "_self", 0 );

  $Nav->addNavSeparator( "Downloads", "/rap/downloads/", "_self", 1 );
  $Nav->addCustomNav( "Source Code", "/rap/cvs.php", "_self", 1 );

  $Nav->addNavSeparator( "Documentation", "/rap/documentation.php", "_self", 1 );
  $Nav->addCustomNav( "Demos", "/rap/demos/", "_self", 1 );
  $Nav->addCustomNav( "New &amp; Noteworthy", "/rap/noteworthy/", "_self", 1 );
  $Nav->addCustomNav( "Project Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=rt.rap", "_self", 1 );	

  $Nav->addNavSeparator( "Support", "/rap/support/", "_self", 1 );
  $Nav->addCustomNav( "Get Started", "/rap/support/gettingstarted/",	"_self", 1 );

  $Nav->addNavSeparator( "Contribute", "/rap/contribute.php", "_self", 1 );
  $Nav->addCustomNav( "Bugs", "/rap/bugs.php", "_self", 1 );
  $Nav->addCustomNav( "Incubator", "/rap/incubator.php", "_self", 1 );

  $Menu->setMenuItemList( array() );
  $Menu->addMenuItem( "Home", "/rap/", "_self" );
  $Menu->addMenuItem( "Demos", "/rap/demos/", "_self" );
  $Menu->addMenuItem( "Documentation", "/rap/documentation.php", "_self" );
  $Menu->addMenuItem( "Support", "/rap/support/", "_self" );
  $Menu->addMenuItem( "Wiki", "http://wiki.eclipse.org/RAP", "_self" );

  $App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/rap/rap-layout-fixes.css"/>' );
  $App->AddExtraHtmlHeader( '<!--[if IE]><link rel="stylesheet" type="text/css" href="/rap/rap-layout-fixes-ie.css"/><![endif]-->' );
  $App->AddExtraHtmlHeader( '<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>' );
  $App->AddExtraHtmlHeader( '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>' );
  

//  $App->Promotion = TRUE; # set true to enable current eclipse.org site-wide promo

  function createRapNavigation( $Nav ) {
    $html = <<<EOHTML
<div id="rap-small-header">
  <a href="/rap/"><div id="rap-small-logo"></div></a>
</div>
EOHTML;
    
    return $html;
  }

  function generateRapPage( $App, $Menu, $Nav, $author, $keywords, $title, $html )
  {
    $theme = "Nova";
    $pageHtml = createRapNavigation( $Nav ) . $html;
    $App->generatePage( $theme, $Menu, $Nav, $author, $keywords, $title, $pageHtml );
  }

?>
