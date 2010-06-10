<?php                                                             
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");  $App  = new App();  $Nav  = new Nav();  $Menu   = new Menu();   include($App->getProjectCommon());
  $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>');


#
# Begin: page-specific settings.  Change these.
$pageTitle    = "Rich Ajax Platform (RAP)";
$pageKeywords = "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor   = "Jochen Krause";

$root = $_SERVER['DOCUMENT_ROOT'];

  
# Paste your HTML content between the EOHTML markers!
$html = file_get_contents('_index.html');

# Generate the web page
$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
  
?>
