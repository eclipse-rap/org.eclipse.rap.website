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

  $Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=rt.rap", "_self", 0);
  
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
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "/rap/bugs.php",	"_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Infocenter (ext)", "http://help.eclipse.org/ganymede/index.jsp?topic=/org.eclipse.rap.help/help/html/intro.html", "_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Wiki", "http://wiki.eclipse.org/RAP", "_self", 1);

  $Nav->addNavSeparator("Contributors", "/rap/sandbox.php", "_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Sandbox", "/rap/sandbox.php", "_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=technology.rap", "_self", 1);	
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;CVS", "/rap/cvs.php", "", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Mailing List (ext)", "https://dev.eclipse.org/mailman/listinfo/rap-dev", "_self", 1);
?>
