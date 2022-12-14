<?php
include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - 1.1.1 Release Notes";
$pageKeywords	= "AJAX, rap, eclipse rap";
$pageAuthor		= "R�diger Herrmann";

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

<div id="midcolumn">
  <h1>1.1.1 Release Notes</h1>
  <p>
    As with every service release the main aspect is to provide bug fixes which 
    didn't get into the 1.1 release. 
  </p>
  <p>
    This <a href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc=;bug_file_loc_type=allwordssubstr;bug_id=;bug_status=RESOLVED;bug_status=VERIFIED;bug_status=CLOSED;bugidtype=include;chfieldfrom=;chfieldto=Now;chfieldvalue=;classification=Technology;email1=;email2=;emailtype1=substring;emailtype2=substring;field-1-0-0=classification;field-1-1-0=product;field-1-2-0=target_milestone;field-1-3-0=bug_status;field0-0-0=noop;keywords=;keywords_type=allwords;long_desc=;long_desc_type=allwordssubstr;product=RAP;query_format=advanced;remaction=;short_desc=;short_desc_type=allwordssubstr;status_whiteboard=;status_whiteboard_type=allwordssubstr;target_milestone=1.1.1;type-1-0-0=anyexact;type-1-1-0=anyexact;type-1-2-0=anyexact;type-1-3-0=anyexact;type0-0-0=noop;value-1-0-0=Technology;value-1-1-0=RAP;value-1-2-0=1.1.1;value-1-3-0=RESOLVED%2CVERIFIED%2CCLOSED;value0-0-0=;votes=;query_based_on=">
      Bugzilla query</a> 
    lists all issues that were fixed in this service release which is now 
    available for 
    <a href="http://www.eclipse.org/rap/downloads/">download</a>.
  </p>
  <p>
    For a list of features that were added during the 1.1 development cycle,
    please see the <a href="news_11.php">New & Noetworthy</a> page.
  </p>
</div>

EOHTML;


	# Generate the web page
$navPosition = array( "download", "noteworthy" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );
?>
