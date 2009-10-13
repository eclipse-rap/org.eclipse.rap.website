<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

require_once( "Noteworthy.class.php" );

$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$header = <<<EOHTML
<p>Here are some of the more noteworthy things that are available in the
  milestone build M1 (August 21<sup>st</sup> 2009) which is now available
  for <a href="http://www.eclipse.org/rap/downloads">download</a>.
</p>
EOHTML;

# Paste your HTML content between the EOHTML markers!
$footer = <<<EOHTML
EOHTML;

# If this is a release, leave the second argument empty ('')
$news = new Noteworthy( 'news_13.xml', 'M1', $header, $footer );
$html = $news->getHtml();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
