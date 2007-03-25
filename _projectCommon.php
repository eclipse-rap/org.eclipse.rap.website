<?php
  # Set the theme for your project's web pages.
  # See the Committer Tools "How Do I" for list of themes
  # https://dev.eclipse.org/committers/ 
  $theme = "Lazarus";
	
  require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
  $projectInfo = new ProjectInfo("technology.rap");
  $projectInfo->generate_common_nav( $Nav );

	function add2users() {
	   global $Nav;
		 $Nav->addCustomNav("CVS", "/rap/cvs.php", "", 2);
		 $Nav->addCustomNav("FAQ", "/rap/faq.php", "", 2);
		 $Nav->addCustomNav("RAP wiki", "http://wiki.eclipse.org/index.php/RAP", "", 2);
	}   
	
	function add2contributors() {
	   global $Nav;
	}
	
	$projectInfo->generate_common_nav( $Nav, "add2users", NULL, "add2contributors" );
?>
