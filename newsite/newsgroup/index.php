<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Initial revision: Rüdiger Herrmann
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - Newsgroups";
$pageKeywords	= "AJAX, rap, w4t, eclipse rap";
$pageAuthor		= "Rüdiger Herrmann";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML
  
  <div id="midcolumn">
    <div class="homeitem3col">
    <h3>Newsgroups</h3>
    <ul>
    <li>
      <p><u>The best place for support is in the newsgroups, <b><i>NOT</i></b> 
        in the mailing lists.</u></p>
    <p>If you post to the mailing list, you will most likely be told "Please 
      post this to the newsgroup.".</p>
    </li>
  
    <li>
    <p>Chances are your question has already been answered in the newsgroup, 
      and will save you time in not having to ask it again, and us in not having 
      to answer it again. Before posting a question to the newsgroup, please 
      <a href="http://dev.eclipse.org/newslists/news.eclipse.technology.rap/maillist.html">
      browse</a> or 
      <a href="http://www.eclipse.org/search/search.cgi?cmd=Search%21&form=extended&wf=574a74&ps=10&m=all&t=5&ul=%2Fnewslists%2Fnews.eclipse.technology.rap&wm=wrd&t=News&t=Mail">  
      search</a> the newsgroup archives online. To post a question, you will 
      <a href="http://www.eclipse.org/newsgroups/register.php">require a 
      password</a> first.</p>
    <p>Frequently asked questions in the newsgroup will ultimately end up in 
      the FAQ (one FAQ per component). Feel free to contribute!</p>
    </li>
  
    <li>
    <p>If you're not familiar with news://, you'll need a newreader first, such 
      as <a href="http://www.mozilla.org/products/thunderbird/" target="_out">
      Thunderbird</a>, 
      <a href="http://www.mozilla.org/products/mozilla1.x/" target="_out">
      Mozilla</a> or even MS Outlook. Once installed, you'll also need a 
      password to access the newsgroups. Signup is easy: just 
      <a href="http://www.eclipse.org/newsgroups/register.php">request a 
      password</a>.</p>
    <p>After that, just point your newsreader at the eclipse news server, 
      <b>news.eclipse.org</b> and subscribe to the appropriate newsgroup(s).</p>
    </li>
    
    <li>
    <p>In addition, should you want to search the newsgroups for old posts, you 
      can use Eclipse.org's
      <a href="http://www.eclipse.org/search/search.cgi?cmd=Search%21&form=extended&wf=574a74&ps=10&m=all&t=5&ul=%2Fnewslists%2Fnews.eclipse.technology.rap&wm=wrd&t=News&t=Mail">
      search capabilities</a>.</p>
    </li>
    </ul>
	</div>

  <div class="homeitem">
    <h3>Newsgroup Search</h3>
		<ul>
    <li>
      <a href="http://www.eclipse.org/search/search.cgi?cmd=Search%21&form=extended&wf=574a74&ps=10&m=all&t=5&ul=%2Fnewslists%2Fnews.eclipse.technology.rap&wm=wrd&t=News&t=Mail">
      eclipse.technology.rap</a>
    </li>
		</ul>
	</div>
  
	<div class="homeitem">
		<h3>Newsgroup Browse</h3>
		<ul>
    <li>
    <a href="http://dev.eclipse.org/newslists/news.eclipse.technology.rap/maillist.html">
    eclipse.technology.rap</a>  
    </li>
		</ul>
	</div>

	<div class="homeitem">
		<h3>NNTP (news://)</h3>
		<ul>
    <li>
      <a href="news://news.eclipse.org/eclipse.technology.rap">
      eclipse.technology.rap</a>
    </li>
		</ul>
	</div>
  
EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
