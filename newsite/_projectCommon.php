<?php
	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Lazarus";

	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
<STYLE TYPE="text/css">
  .sideitem { border-width: 1px 1px; }
  body { font-size: small; }
  #midcolumn { margin-top: 5px; }
</STYLE>

EOBRANDING;
	$Menu->setProjectBranding($branding);
	
	$Nav->addNavSeparator("RAP", "/rap/index.php");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About", "/rap/about", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/rap/team", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Buzz", "/rap/buzz", "_self", 1);

	$Nav->addNavSeparator("Developers", "/rap/start", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", "/rap/start",	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", "/rap/downloads", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New & Noteworthy", "/rap/new", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Newsgroup", "/rap/newsgroup", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "/rap/bugs",	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ", "/rap/faq", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;User Guide", "/rap/userguide", "_self", 1);

	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ (wiki)", "http://www.eclipse.org/rap/faq.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;User Guide (wiki)", "http://wiki.eclipse.org/index.php/Mylyn_User_Guide", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Extensions (wiki)", "http://wiki.eclipse.org/index.php/Mylyn_Extensions", "_self", 1);

	$Nav->addNavSeparator("Contributors", "/rap/contributors", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Plan", "http://wiki.eclipse.org/index.php/RapPlan", "_self", 1);	
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Mailing List", "https://dev.eclipse.org/mailman/listinfo/rap-dev", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Sandbox", "/rap/sandbox", "_self", 1);
?>
