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
	
	$Nav->addNavSeparator("RAP", "/rap/newsite/index.php");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About", "/rap/newsite/about", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/rap/newsite/team", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Buzz", "/rap/newsite/buzz", "_self", 1);

	$Nav->addNavSeparator("Developers", "/rap/start", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", "/rap/newsite/start",	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", "/rap/newsite/downloads", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New & Noteworthy", "/rap/newsite/new", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Newsgroup", "/rap/newsite/newsgroup", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "/rap/newsite/bugs",	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ", "/rap/newsite/faq", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;User Guide", "/rap/newsite/userguide", "_self", 1);

	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ (wiki)", "/rap/newsite/faq.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;User Guide (wiki)", "http://wiki.eclipse.org/index.php/Mylyn_User_Guide", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Extensions (wiki)", "http://wiki.eclipse.org/index.php/Mylyn_Extensions", "_self", 1);

	$Nav->addNavSeparator("Contributors", "/rap/newsite/contributors", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Plan", "http://wiki.eclipse.org/index.php/RapPlan", "_self", 1);	
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Mailing List", "https://dev.eclipse.org/mailman/listinfo/rap-dev", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Sandbox", "/rap/newsite/sandbox", "_self", 1);
?>
