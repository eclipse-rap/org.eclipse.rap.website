<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "RAP Project - Get Help";
    $pageKeywords   = "Ajax, rap, osgi, equinox, eclipse rap, equinox rap";
	$pageAuthor		= "Ruediger Herrmann";
		
# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML


<div id="maincontent">

  <div id="midcolumn">

    <h1>Get Help</h1>

    <p>
      If you looking for help with a problem in RAP, you can go through the
      following checklist sequentially to find out where to get the answer
      or support you need:
    </p>

    <ul>
      <li><a href="#technologies">Understand the Underlying Technologies</a></li>
      <li><a href="#devguide">Read the Developer Guide</a></li>
      <li><a href="#faq">Check the FAQ</a></li>
      <li><a href="#newsgroup-archive">Check the Newsgroup Archive</a></li>
      <li><a href="#existing-bugs">Look for an Existing Bug Report</a></li>
      <li><a href="#newsgroup">Ask on the Community Newsgroup</a></li>      
      <li><a href="#new-bugs">File a Bug Report</a></li>
    </ul>

    <div id="technologies" class="homeitem3col" style="clear: both">
      <h3>Understand the Underlying Technologies</h3>
      <p>
        RAP applications are basically RCP applications that run in a servlet
        container environment.
        Consequently, you should have a working understanding of the underlying
        technologies to develop RAP applications.
        Those technologies include
        <a href="http://www.eclipse.org/swt">SWT</a>,
        <a href="http://wiki.eclipse.org/index.php/Rich_Client_Platform">RCP</a>,
        <a href="http://www.eclipse.org/equinox/">Equinox OSGi</a>, and
        <a href="http://java.sun.com/products/servlet/">Servlet technology</a>.
      </p>
      <p>
        Many questions and problems that occur while developing RAP applications
        are not particularly related to RAP, but to the technologies below.
        As an example, layout issues are usually SWT-related, dependencies
        to third-party libraries are handled on the OSGi level,
        and questions regarding session handling are related to the servlet
        container.
        If your question relates to one of those technologies, please read the
        available documentation (we collected some useful links on our
        <a href="documentation.php#resources">documentation page</a>)
        and try to find answers at the related channels.
      </p>
    </div>

    <div id="devguide" class="homeitem3col" style="clear: both">
      <h3>Read the Developer Guide</h3>
      <p>
        The RAP Developer Guide is the official RAP help that is included in the
        Eclipse Help system once you installed the RAP Tooling.
        It can also be accessed
        <a href="http://help.eclipse.org/galileo/index.jsp?topic=/org.eclipse.rap.help/help/html/intro.html">online</a>.
      </p>
    </div>

    <div id="faq" class="homeitem3col" style="clear: both">
      <h3>Check the FAQ</h3>
      <p>
        Consult the
        <a href="http://wiki.eclipse.org/RAP/FAQ">Frequently Asked Questions (FAQ)</a>
        to see if your question has already been answered.
      </p>
    </div>

    <div id="newsgroup-archive" class="homeitem3col" style="clear: both">
      <h3>Check the Newsgroup Archive</h3>
      <p>
        Chances are that your question has already been answered on our
        community newsgroup but hasn't made it into the FAQ.
        You can browse the
        <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.rap">
        newsgroup archive online</a>
        or
        <a href="news://news.eclipse.org/eclipse.technology.rap">subscribe</a>
        to the newsgroup with your news reader.
        See also
        <a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">
        this FAQ</a> for instructions on subscribing.
      </p>
    </div>

    <div id="existing-bugs" class="homeitem3col" style="clear: both">
      <h3>Look for an Existing Bug Report</h3>
      <p>
        If your problem is related to some misbehavior in RAP, please review the
        <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=RAP&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=nowords&keywords=plan&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
        list of all open bug reports</a>
        in our bugzilla and check if the problem has already been reported.
        Bug reports usually contain information on the progress of the work on
        the issue and may also offer workarounds.
      </p>
      <p>
        If you'd like to call for a new feature, please check the 
        <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=RAP&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
        list of open enhancement requests</a> for an existing bug that covers
        your request.
      </p>
      <p>
        If you found something, you can vote for the bug or provide additional
        information in a comment.
        But please refrain from posting comments like
        "When will this bug be fixed?" or "Any progress on this?"
        &mdash;
        those comments don't help anyone, they only slow down the development.
      </p>
    </div>

    <div id="newsgroup" class="homeitem3col" style="clear: both">
      <h3>Ask on the Community Newsgroup</h3>
      <p>
        If you could not find anything related in the newsgroup archives or in
        the bugzilla, post your question to the newsgroup.
        For details on how to use the newsgroup, see
        <a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">
        this FAQ</a>.
      </p>
      <p>
        The RAP Newsgroup is intended for user community discussions on 
        RAP usage and troubleshooting. Developers contributing to RAP should
        use the <a href="https://dev.eclipse.org/mailman/listinfo/rap-dev">
        mailing list</a>.
      </p>
    </div>

    <div id="new-bugs" class="homeitem3col" style="clear: both">
      <h3>File a Bug Report</h3>
      <p>
        If you followed the steps above and believe that there is a defect or a
        missing feature that you'd like to report, you should submit a new bug.
        You can either submit bugs using
        <a href="http://eclipse.org/mylyn">Mylyn</a> or the
        <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=RAP&rep_platform=All&op_sys=all">
        Bugzilla web interface</a>.
        For defects provide steps on how to reproduce.
        For enhancements outline a use case.
        Please read the
        <a href="http://wiki.eclipse.org/RAP_Bug_Reporting_Howto">RAP Bug
        Reporting Howto</a> before you submit your bug.
      </p>
    </div>

    <!--
      TODO
      Provide patches
      Commercial support 
    -->

  </div> <!-- midcolumn -->
</div> <!-- maincontent -->

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
