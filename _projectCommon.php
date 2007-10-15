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
<div id="branding">
<center>
  <h1 style="font-size:+2">Rich Ajax Platform (RAP)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
</center>
</div>
EOBRANDING;
	$Menu->setProjectBranding($branding);
	
	$Nav->addNavSeparator("RAP", "/rap/index.php");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About", "/rap/about.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Demos", "/rap/demos.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/rap/team.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Buzz", "/rap/buzz.php", "_self", 1);

	$Nav->addNavSeparator("Users", "/rap/gettingstarted.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", "/rap/gettingstarted.php",	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", "/rap/downloads/", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New & Noteworthy", "/rap/noteworthy", "_blank", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Newsgroup", "/rap/newsgroup.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs (ext)", "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=RAP&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=",	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Infocenter (ext)", "http://help.eclipse.org/help33/index.jsp?topic=/org.eclipse.rap.help/help/html/intro.html", "_self", 1);

	$Nav->addNavSeparator("Contributors", "/rap/sandbox.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Sandbox", "/rap/sandbox.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Plan (wiki)", "http://wiki.eclipse.org/index.php/RapPlan", "_self", 1);	
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;CVS", "/rap/cvs.php", "", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Mailing List (ext)", "https://dev.eclipse.org/mailman/listinfo/rap-dev", "_self", 1);
?>
