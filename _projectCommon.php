<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
  $projectInfo = new ProjectInfo("technology.rap");
  $projectInfo->generate_common_nav( $Nav );

	function add2users() {
	   global $Nav;
	   $Nav->addCustomNav("FAQ", "/dash/user-faq.php", "", 2);
		 $Nav->addCustomNav("CVS", "/rap/cvs.php", "", 2);
		 $Nav->addCustomNav("FAQ", "/rap/faq.php", "", 2);
	}   
	
	function add2users() {
	   global $Nav;
	}
	
	$projectInfo->generate_common_nav( $Nav, "add2users", NULL, "add2contributors" );
?>
