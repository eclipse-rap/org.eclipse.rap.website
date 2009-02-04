<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP Project - Buzz";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
      <ul>
        <li>
          <a href="#news">News</a>
          &nbsp;&nbsp;&nbsp;
          <a href="#articles">Articles, Blogs, Slides and more</a>
        </li>
	  </ul>	
	  <div class="homeitem3col">
        <a name="news"></a> 
		<h3>RAP in the News</h3>
	    <ul>
		  <li>
	      <a href="http://www.infoq.com/news/2008/06/eclipse-ganymede-rap" target="_blank">
	      Eclipse Ganymede: An in-depth look at RAP (Rich Ajax Platform)</a> InfoQ (Ryan Slobojan)
      </li>
		  <li>
	        <a href="http://ajaxian.com/archives/ajax-meet-osgi-expanding-universes-collide-with-eclipse-rap-10" target="_blank">
	       	Ajax meet OSGi: Expanding Universes Collide with Eclipse RAP 1.0</a> ajaxian.com (Dion Almaer)
      </li>
		  <li>
	        <a href="http://ianskerrett.wordpress.com/2007/10/15/announcing-rap-10-the-other-press-release/" target="_blank">
	       	Announcing RAP 1.0 - the other press release</a> wordpress (Ian Skerrett)
          </li>
          <li>
	        <a href="http://www.eweek.com/article2/0,1895,2197117,00.asp" target="_blank">
	       	eWeek: Eclipse Unwraps RAP</a> eWeek (Darryl K. Taft)
          </li>
          
          <li>
	        <a href="http://www.heise.de/newsticker/meldung/97390" target="_blank">
	       	Ajax-Web-Anwendungen auf Eclipse-Basis</a> (heise.de)
          </li>
          <li>
	        <a href="http://www.golem.de/0710/55379.html" target="_blank">
	       	Eclipse Rich Ajax Platform 1.0 verfügbar</a> (golem.de)
          </li>
          <li>
	        <a href="http://www.infoworld.com/article/07/10/14/eclipse-rap_1.html" target="_blank">
	       	InfoWorld: Eclipse offers AJAX server</a> InfoWorld (Paul Krill)
          </li>
          <li>
	        <a href="http://www.internetnews.com/dev-news/article.php/3705031" target="_blank">
	       	Internet News:  Eclipse Dives Into Ajax App Deployment</a> Internet News (Sean Michael Kerner)
          </li>
          <li>
	        <a href="http://eclipse.sys-con.com/read/440611.htm" target="_blank">
	       	Eclipse Rich AJAX Platform (RAP) 1.0 is Now Available - Eclipse News Desk</a> eclipse developer's journal
          </li>
          <li>
	        <a href="http://blogs.zdnet.com/Burnette/?p=412" target="_blank">
	       	Yet Another Ajax Toolkit: Eclipse RAP 1.0</a> zdNet (Ed Burnette)
          </li>
          <li>
	        <a href="http://blogs.zdnet.com/Stewart/?p=581" target="_blank">
	       	RAP Brings Eclipse Into the Ajax Framework</a> zdNet (Ryan Stewart)
          </li>
          <li>
	        <a href="http://www.sdtimes.com/article/latestnews-20071015-02.html" target="_blank">
	       	Eclipse Wraps RAP 1.0</a> SD Times (Alex Handy)
          </li>
          <li>
	        <a href="http://www.regdeveloper.co.uk/2007/10/15/eclipse-rap_sheet/" target="_blank">
	       	Eclipse Releases RAP 1.0 Ajax Toolkit</a> REG Developer (Phil Manchester)
          </li>
          <li>
	        <a href="http://www.crn.com/software/202402928" target="_blank">
	       	Open-Source Eclipse Launches Ajax Platform</a> crn (Stacy Cowley)
          </li>
          <li>
	        <a href="http://www.silicon.de/enid/business_software/30293" target="_blank">
	       	Eclipse bringt eigenen AJAX-Server</a> silicon.de (Stefan Beiersmann)
          </li>
          <li>
	        <a href="http://t3n.yeebase.com/aktuell/news/newspost/eclipse-gibt-rich-ajax-platform-frei/963/" target="_blank">
	       	Eclipse gibt Rich Ajax Platform frei</a> T3N.de (Jan Christe)
          </li>
          <li>
	        <a href="http://www.tectonic.co.za/view.php?id=1810" target="_blank">
	       	Build rich web applications on Eclipse</a> tectonic (James Archibald)
          </li>
          <li>
	        <a href="http://blogs.techrepublic.com.com/tech-news/?p=1385" target="_blank">
	       	Eclipse foundation unveils Rich AJAX Platform 1.0</a> techrepublic.com (Arun Radhakrishnan)
          </li>
          <li>
	        <a href="http://stuff.techwhack.com/archives/2007/10/15/eclipse-rap/" target="_blank">
	       	Eclipse RAP (Rich Ajax Platform) 1.0 launched</a> techwhack.com
          </li>
          <li>
	        <a href="http://www.prnewswire.com/cgi-bin/stories.pl?ACCT=104&STORY=/www/story/10-15-2007/0004681521&EDATE=" target="_blank">
	       	Eclipse Releases First Ajax Platform Based on OSGi</a> prnewswire.com (Steve Eisenstadt)
          </li>
          <li>
	        <a href="http://web2.sys-con.com/read/440611.htm" target="_blank">
	       	First AJAX Platform Using the Eclipse Component Model</a> Eclipse News Desk
          </li>
        </ul> 
      </div>
      
	  <div class="homeitem3col">
        <a name="articles"></a> 
        <h3>Current Articles, Blogs, Slides and more</h3>
	      <ul>
          <li>
            Book: <a href="http://www.rap-book.com" target="_blank">
            Eclipse Rich Ajax Platform - Bringing Rich Clients to the Web</a>
            Fabian Lange, Nov 2008
          </li>
          <li>
            <a href="http://eclipse.dzone.com/articles/chat-rap">
            Chat on the RAP</a>, Nov 24th, 2008, Glenn Galang 
          </li>
          <li>
            Webinar: Single-Sourcing Techniques for RAP and RCP, Oct 23, 2008, Frank Appel
            <br />
            <a href="http://download.innoopract.com/rap/webinar/Single_Sourcing_RAP_RCP_en.pdf">
              PDF Slides
            </a>
            &nbsp;&nbsp;
            <a href="http://download.innoopract.com/rap/webinar/Single_Sourcing_RAP_RCP_examples.zip">
              Code examples
            </a>
            &nbsp;&nbsp;
            <a href="http://download.innoopract.com/rap/webinar/Single_Sourcing_RAP_RCP_en.mp4">
              MP4 Recording
            </a>
            &nbsp;&nbsp;
            <a href="http://download.innoopract.com/rap/webinar/Single_Sourcing_RAP_RCP_en.wmv">
              WMV Recording
            </a>
            &nbsp;&nbsp;(~ 60 Minutes)
          </li>
          <li>
            Article: 
            <a href="http://www.ibm.com/developerworks/edu/os-dw-os-eclipse-ganymede-pt2.html" target="_blank">
            Using Eclipse Ganymede to develop for the desktop, Web and mobile devices, 
            Part 2: Developing for the Rich Client Platform, the Ganymede way</a>
            IBM developerWorks, Sep 9, 2008, Suresh Krishna & Trebor Fenstermaker
          </li>
          <li>
            Slides (<img src="http://www.eclipse.org/rap/images/de.gif" alt="German"/>):
            <a target="_blank" href="http://www.java-forum-stuttgart.de/abstracts.html#B7">
            Erfahrungsbericht über die Anwendungsentwicklung mit Eclipse RAP</a>
            Java Forum Stuttgart, July 2008, Stefan R&ouml;ck & Frank Appel
          </li>
          <li>
            Article (<img src="http://www.eclipse.org/rap/images/de.gif" alt="German"/>):
            <a target="_blank" href="http://www.oio.de/public/opensource/eclipse-rap/tutorial-eclipse-rich-application-plattform-portierung.htm">
            Einsatzm&ouml;glichkeiten der Eclipse RAP</a> April 2008, Steffen Sch&auml;fer
          </li>
          <li>
            Webinar: 
            <a target="_blank" href="http://live.eclipse.org/node/450">
            Rich AJAX Platform (RAP) Project</a> Feb 13, 2008, Jochen Krause
          </li>
          <li>
            <a target="_blank" href="http://www.redmonk.com/cote/2007/12/12/eclipse-rap-overview-and-demo-screencast">
            Eclipse RAP Overview and Demo Screencast</a> RedMonk, Dec 12, 2007, Jochen Krause
          </li>
          <li>
            Article: 
            <a target="_blank" href="http://www.ibm.com/developerworks/library/os-eclipse-richajax2/index.html">
            Web 2.0, the Eclipse way, Part II</a> IBM developerWorks, Dec 11, 2007, Chris Aniszczyk & Benjamin Muskalla
          </li>
          <li>
            Article: 
            <a target="_blank" href="http://www.devx.com/webdev/Article/36101/0/page/1">
            The Rich get Richer: RAP builds on RCP</a> DevX, Nov 27, 2007, Riccardo Govoni (Google)
          </li>
          <li>
            Article: 
            <a target="_blank" href="http://www.ibm.com/developerworks/opensource/library/os-eclipse-richajax1/?ca=dgr-eclipse-1">
            Web 2.0, the Eclipse way, Part I</a> IBM developerWorks, Oct 23, 2007, Chris Aniszczyk & Benjamin Muskalla
          </li>
          <li>
	        Community: 
	        <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=204737" target="_blank">
            RAP Creation Review Votes</a> eclipse.org, Oct 10, 2007 - "+2 Simply a awesome project!"
          </li>
		    <li>
	          Slides: 
	          <a href="http://www.eclipse.org/projects/slides/rap_creation_review.pdf" target="_blank">
              Creation Review Slides</a> eclipse.org, Oct 3, 2007
          </li>
          <li>
	        Article: 
	        <a href="http://www.innoopract.com/fileadmin/user_upload/Dokumente/Web-enabled_RCP_Applications_with_the_Rich_Ajax_Platform_pdf.pdf" target="_blank">
	        RCP goes Web 2.0</a> September 28, 2007
          </li>
            <li>
	          Podcast: 
	          <a href="http://www.podtech.net/home/4204/innoopract-on-eclipse-eclipse-rap-osgi-and-component-coding-sponsored-development-in-open-source" target="_blank">
	          Innoopract CEO on RAP, Eclipse Distributions, OSGi and more</a> September 24, 2007
          </li>
          <li>
	        Blog / Video: 
	        <a href="http://eclipsenuggets.blogspot.com/2007/09/see-how-you-can-make-rcp-application.html" target="_blank">
            See how you can make an RCP Application run in your browser</a> Sept 11, 2007, Elias Volanakis 
          </li>
          <li>
	        Blog: 
	        <a href="http://mea-bloga.blogspot.com/2007/09/web-development-revisited.html" target="_blank">
            Web development revisited</a> Sept 6, 2007, Chris Aniszczyk 
          </li>	            
    		<li>
	          Article: 
	          <a href="http://www.eweek.com/article2/0,1759,2100984,00.asp" target="_blank">
              Innoopract - The Company Behind RAP</a> eweek, March 6, 2007
          </li>
          <li>
            Slides: 
            <a href="http://eclipsezilla.eclipsecon.org/php/attachment.php?bugid=3833" target="_blank">
              eclipse rich ajax platform (RAP)</a> EclipseCon, March 2007, 
          </li>
          <li>
            <img src="images/jax.png" align="middle" />
            Community: 
            <a href="http://jax-award.de/jax_award06/gewinner_en.php" target="_blank">
              RAP wins european innovation award</a> JAX, 2006
          </li>
        </ul> 
	</div>
  </div>
</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
