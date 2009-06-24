<?php
	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Nova";

	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
<STYLE TYPE="text/css">
  .sideitem { border-width: 1px 1px; }
  body { font-size: small; }
  #midcolumn { margin-top: 5px; }
</STYLE>
<div id="branding">
<center>
  <h1 style="font-size:+2">Rich Ajax Platform (RAP)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
</center>
</div>
EOBRANDING;
  $Menu->setProjectBranding($branding);

  $Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=rt.rap", "_self", 0);
  
  $Nav->addNavSeparator("RAP", "/rap/index.php");
  $Nav->addCustomNav("About", "/rap/about.php", "_self", 1);
  $Nav->addCustomNav("Demos", "/rap/demos.php", "_self", 1);
  $Nav->addCustomNav("Team", "/rap/team.php", "_self", 1);
  $Nav->addCustomNav("Buzz", "/rap/buzz.php", "_self", 1);
  $Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/RAP", "_self", 1);

  $Nav->addNavSeparator("Users", "/rap/gettingstarted.php", "_self", 1);
  $Nav->addCustomNav("Get Started", "/rap/gettingstarted.php",	"_self", 1);
  $Nav->addCustomNav("Downloads", "/rap/downloads/", "_self", 1);
  $Nav->addCustomNav("New & Noteworthy", "/rap/noteworthy", "_blank", 1);
  $Nav->addCustomNav("Support", "/rap/support.php", "_self", 1);
  $Nav->addCustomNav("Infocenter (ext)", "http://help.eclipse.org/galileo/index.jsp?topic=/org.eclipse.rap.help/help/html/intro.html", "_self", 1);

  $Nav->addNavSeparator("Contributors", "/rap/sandbox.php", "_self", 1);
  $Nav->addCustomNav("Sandbox", "/rap/sandbox.php", "_self", 1);
  $Nav->addCustomNav("Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=technology.rap", "_self", 1);	
  $Nav->addCustomNav("CVS", "/rap/cvs.php", "", 1);
  $Nav->addCustomNav("Mailing List (ext)", "https://dev.eclipse.org/mailman/listinfo/rap-dev", "_self", 1);
?>
