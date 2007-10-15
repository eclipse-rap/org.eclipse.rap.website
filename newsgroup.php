<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 

$pageTitle 		= "RAP Project - Newsgroups";
$pageKeywords	= "AJAX, rap, w4t, eclipse rap";
$pageAuthor		= "Rüdiger Herrmann";

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML
  
<div id="midcolumn">
  <div class="homeitem3col">
    <h3>Newsgroups</h3>
    <ul>
    <li>
      <p><u>The RAP newsgroup is for questions, support and information exchange
      between users and developers of RAP.</u></p>
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
      the FAQ. Feel free to contribute!</p>
    </li>
  
    <li>
    <p>Eclipse.org offers a 
      <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.rap">
      web user interface for news</a> (you need the above mentioned password to
      access this service).
      Alternatively you can use a newreader, such 
      as <a href="http://www.mozilla.org/products/thunderbird/" target="_out">
      Thunderbird</a>, 
      <a href="http://www.mozilla.org/products/mozilla1.x/" target="_out">
      Mozilla</a> or MS Outlook. Once installed, you'll also need a 
      password to access the newsgroups. Signup is easy: just 
      <a href="http://www.eclipse.org/newsgroups/register.php">request a 
      password</a>.</p>
    <p>After that, just point your newsreader at the eclipse news server, 
      <b>news.eclipse.org</b> and subscribe to the appropriate newsgroup(s).</p>
    </li>
    
    </ul>
  </div>

  <div class="homeitem">
    <h3>Newsgroup Search</h3>
	<ul>
      <li>
      <a href="http://www.eclipse.org/search/search.cgi?cmd=Search%21&form=extended&wf=574a74&ps=10&m=all&t=5&ul=%2Fnewslists%2Fnews.eclipse.technology.rap&wm=wrd&t=News&t=Mail">
        eclipse.technology.rap
      </a>
    </li>
	</ul>
  </div>

  <div class="homeitem">
    <h3>Newsgroup web user interface (forum like)</h3>
    <ul>
      <li>
        <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.rap">
          eclipse.technology.rap
        </a>  
      </li>
    </ul>
  </div>

  <div class="homeitem">
    <h3>Newsgroup Browse</h3>
      <ul>
        <li>
          <a href="http://dev.eclipse.org/newslists/news.eclipse.technology.rap/maillist.html">
            eclipse.technology.rap
          </a>  
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

</div>
  
EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
