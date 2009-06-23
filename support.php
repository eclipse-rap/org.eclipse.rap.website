<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "RAP Project - Support";
	$pageKeywords	= "Ajax, rap, eclipse rap";
	$pageAuthor		= "Ruediger Herrmann";
		
# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML


<div id="maincontent">
  <div id="midcolumn">
    <h1>Support</h1>
    <div class="homeitem3col">
      <h3>Community Newsgroup</h3>
      <p>The RAP Newsgroup is intended for the user community discussions on 
        RAP usage and troubleshooting. Developers contributing to RAP should
        refer to the <a href="https://dev.eclipse.org/mailman/listinfo/rap-dev">
        mailing list</a>.
      </p>
      <p>
        Check the
        <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.rap">
        newsgroup archive</a> - chances are your question has already been answered. 
        It will save you time in not having to ask it again, and us in not 
        having to answer it again.
      </p> 
      <p>
        <a href="news://news.eclipse.org/eclipse.technology.rap">Subscribe</a> 
        to the newsgroup with your news reader.
        <a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">
        See the FAQ</a> for instructions on subscribing.
      </p>                  
    </div> <!-- homeitem3col -->

    <div class="homeitem3col">
      <h3>Open Source Support for RAP</h3>
      <p>Submit bugs using <a href="http://eclipse.org/mylyn">Mylyn</a> or the 
      <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=RAP&rep_platform=All&op_sys=all">
      Bugzilla web interface</a>. Please 
      <a href="https://bugs.eclipse.org/bugs/query.cgi?product=RAP">search for 
      duplicates first</a>. 
      <br />
      For defects provide steps on how to reproduce. For enhancements outline 
      a use case. Further information on how to write bug reports can be found 
      in the
      <a href="http://wiki.eclipse.org/RAP_Bug_Reporting_Howto">RAP Bug Reporting 
      Howto</a>.
      <ul>
        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=RAP&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=nowords&keywords=plan&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
          <img src="images/support/query.gif" />
          &nbsp;&nbsp;Show all open bug reports</a>
        </li>          
        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=RAP&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
          <img src="images/support/query.gif" />
          &nbsp;&nbsp;Show open enhancement requests</a> 
        </li>          
      </ul>
    </div> <!-- homeitem3col -->
  </div> <!-- midcolumn -->
</div> <!-- maincontent -->

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
