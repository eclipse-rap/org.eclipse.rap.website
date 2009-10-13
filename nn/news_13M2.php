<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

require_once( "Noteworthy.class.php" );

$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$header = <<<EOHTML
<p>Here are some of the more noteworthy things that are available in the 
   milestone build M2 (October 2<sup>nd</sup>, 2009)
   which is now available for 
   <a href="http://www.eclipse.org/rap/downloads">download</a>.
</p>
<p>
   <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.3+M2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
   This list</a> shows all bugs that were fixed during this milestone. 
</p>
EOHTML;

# Paste your HTML content between the EOHTML markers!
$footer = <<<EOHTML
<p>The above features are just the ones that are new since the last 
   milestone build. Summaries for earlier builds:</p>
   <ul>
     <li><a href="news_13M1.php">New for RAP 1.3 M1 (August 21<sup>st</sup> 2009)</a></li>
   </ul>
EOHTML;

error_reporting(E_ALL ^ E_NOTICE);
# If this is a release, leave the second argument empty ('')
$noteworthy = new RapNoteworthy( 'news_13.xml', 'M2', $header, $footer );
$html = $noteworthy->getHtml();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
