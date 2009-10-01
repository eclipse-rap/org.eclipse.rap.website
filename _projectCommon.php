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
  #midcolumn li { margin: 8px; list-style-position:outside;
    list-style-image: url('/eclipse.org-common/themes/Nova/images/separator.png');
    padding: 5px 10px 5px 5px; }
}
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
  $Nav->addCustomNav("Introduction", "/rap/introduction.php", "_self", 1);
  $Nav->addCustomNav("Demos", "/rap/demos.php", "_self", 1);
  $Nav->addCustomNav("Get Started", "/rap/gettingstarted.php",	"_self", 1);

  $Nav->addNavSeparator("Get RAP", "/rap/downloads/", "_self", 1);
  $Nav->addCustomNav("Downloads", "/rap/downloads/", "_self", 1);
  $Nav->addCustomNav("Source Code", "/rap/cvs.php", "_self", 1);

  $Nav->addNavSeparator("Resources", "/rap/noteworthy/", "_self", 1);
  $Nav->addCustomNav("New &amp; Noteworthy", "/rap/noteworthy/", "_self", 1);
  $Nav->addCustomNav("Documentation", "/rap/documentation.php", "_self", 1);
  $Nav->addCustomNav("Get Help", "/rap/support.php", "_self", 1);
  $Nav->addCustomNav("Project Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=rt.rap", "_self", 1);	

  $Nav->addNavSeparator("Development", "/rap/bugs.php", "_self", 1);
  $Nav->addCustomNav("Bugs", "/rap/bugs.php", "_self", 1);
  $Nav->addCustomNav("Incubator", "/rap/incubator.php", "_self", 1);
  $Nav->addCustomNav("Contribute", "/rap/contribute.php", "_self", 1);

  $App->Promotion = TRUE; # set true to enable current eclipse.org site-wide promo
?>