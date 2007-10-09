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
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Demos", "/rap/newsite/demos", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/rap/newsite/team", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Buzz", "/rap/newsite/buzz", "_self", 1);

	$Nav->addNavSeparator("Developers", "/rap/newsite/developers", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", "/rap/newsite/gettingstarted",	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", "/rap/newsite/downloads", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New & Noteworthy", "http://wiki.eclipse.org/index.php/Rap10RC1_News", "_blank", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Newsgroup", "http://dev.eclipse.org/newslists/news.eclipse.technology.rap/maillist.html", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=RAP&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=",	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ", "/rap/newsite/faq", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;User Guide", "/rap/newsite/userguide", "_self", 1);

	$Nav->addNavSeparator("Contributors", "/rap/newsite/contributors", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Plan", "http://wiki.eclipse.org/index.php/RapPlan", "_self", 1);	
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Mailing List", "https://dev.eclipse.org/mailman/listinfo/rap-dev", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Sandbox", "/rap/newsite/sandbox", "_self", 1);
?>
