<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "RAP Project - Bugs";
	$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
	$pageAuthor		= "Jochen Krause";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML


<div id="maincontent">
  <div id="midcolumn">
  
    <h1>Bugs</h1>
  
    <p>The best way to report a problem or request a new feature in RAP
      is to use the Bugzilla system. Here are some useful links to get you
      started:</p>
      
    <div class="homeitem3col">
      <h3>Bugzilla Links</h3>
      <ul>
        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc=;bug_file_loc_type=allwordssubstr;bug_id=;bug_severity=blocker;bug_severity=critical;bug_severity=major;bug_severity=normal;bug_severity=minor;bug_severity=trivial;bug_severity=enhancement;bug_status=NEW;bug_status=ASSIGNED;bug_status=REOPENED;bugidtype=include;chfieldfrom=;chfieldto=Now;chfieldvalue=;email1=;email2=;emailtype1=substring;emailtype2=substring;field-1-0-0=product;field-1-1-0=bug_status;field-1-2-0=bug_severity;field0-0-0=noop;keywords=;keywords_type=allwords;long_desc=;long_desc_type=allwordssubstr;product=RAP;query_format=advanced;remaction=;short_desc=;short_desc_type=allwordssubstr;status_whiteboard=;status_whiteboard_type=allwordssubstr;type-1-0-0=anyexact;type-1-1-0=anyexact;type-1-2-0=anyexact;type0-0-0=noop;value-1-0-0=RAP;value-1-1-0=NEW%2CASSIGNED%2CREOPENED;value-1-2-0=blocker%2Ccritical%2Cmajor%2Cnormal%2Cminor%2Ctrivial%2Cenhancement;value0-0-0=;votes=;query_based_on=">
          <img src="images/bugs/query.gif" />
          &nbsp;&nbsp;Show all open bug reports</a>
        </li>          
        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=RAP&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
          <img src="images/bugs/query.gif" />
          &nbsp;&nbsp;Show open enhancement requests</a> 
        </li>          
        <li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=RAP">
          <img src="images/bugs/new-bug.gif" />
          &nbsp;&nbsp;Report a new bug or enhancement</a>
          <br />
          Please search for duplicates first. For defects provide details on 
          how to reproduce. For enhancements please outline a use case.
        </li>          
      </ul>
    </div>
    <hr class="clearer" />
  </div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
