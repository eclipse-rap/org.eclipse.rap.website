<?php 
include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

require_once( "../Noteworthy.class.php" );

$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$header = <<<EOHTML
<p>Here are some of the more noteworthy things that are available in the 
  milestone build M4 (December 18<sup>th</sup>, 2009)
  which is now available for 
  <a href="http://www.eclipse.org/rap/downloads/">download</a>.
</p>
<p>
  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.3+M4&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
  This list</a> shows all bugs that were fixed during this milestone. 
</p>
EOHTML;

# Paste your HTML content between the EOHTML markers!
$footer = <<<EOHTML
<p>The above features are just the ones that are new since the last 
   milestone build. Summaries for earlier builds:</p>
   <ul>
     <li><a href="news_M3.php">New for RAP 1.3 M3</a></li>
     <li><a href="news_M2.php">New for RAP 1.3 M2</a></li>
     <li><a href="news_M1.php">New for RAP 1.3 M1</a></li>
   </ul>
EOHTML;

# If this is a release, leave the second argument empty ('')
$news = new Noteworthy( 'news_13.xml', 'M4', $header, $footer );
$html = $news->getHtml();

# Generate the web page
$navPosition = array( "download", "noteworthy" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );
?>
