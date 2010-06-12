<?php
# Set the theme for your project's web pages.
# See the Committer Tools "How Do I" for list of themes
# https://dev.eclipse.org/committers/ 

  $theme = "Nova";

  $Nav->setLinkList( array() );

  $Nav->addCustomNav( "About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=rt.rap", "_self", 0 );

  $Nav->addNavSeparator( "RAP", "/rap/index.php" );
  $Nav->addCustomNav( "Demos", "/rap/demos.php", "_self", 1 );
  $Nav->addCustomNav( "Get Started", "/rap/gettingstarted.php",	"_self", 1 );

  $Nav->addNavSeparator( "Get RAP", "/rap/downloads/", "_self", 1 );
  $Nav->addCustomNav( "Downloads", "/rap/downloads/", "_self", 1 );
  $Nav->addCustomNav( "Source Code", "/rap/cvs.php", "_self", 1 );

  $Nav->addNavSeparator( "Resources", "/rap/documentation.php", "_self", 1 );
  $Nav->addCustomNav( "Documentation", "/rap/documentation.php", "_self", 1 );
  $Nav->addCustomNav( "New &amp; Noteworthy", "/rap/noteworthy/", "_self", 1 );
  $Nav->addCustomNav( "Get Help", "/rap/support.php", "_self", 1 );
  $Nav->addCustomNav( "Project Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=rt.rap", "_self", 1 );	

  $Nav->addNavSeparator( "Development", "/rap/contribute.php", "_self", 1 );
  $Nav->addCustomNav( "Contribute", "/rap/contribute.php", "_self", 1 );
  $Nav->addCustomNav( "Bugs", "/rap/bugs.php", "_self", 1 );
  $Nav->addCustomNav( "Incubator", "/rap/incubator.php", "_self", 1 );

  $Menu->setMenuItemList( array() );
  $Menu->addMenuItem( "Home", "/rap", "_self" );
  $Menu->addMenuItem( "Demos", "/rap/demos.php", "_self" );
  $Menu->addMenuItem( "Documentation", "/rap/documentation.php", "_self" );
  $Menu->addMenuItem( "Support", "/rap/support.php", "_self" );
  $Menu->addMenuItem( "Wiki", "http://wiki.eclipse.org/RAP", "_self" );

//  $App->Promotion = TRUE; # set true to enable current eclipse.org site-wide promo
?>
