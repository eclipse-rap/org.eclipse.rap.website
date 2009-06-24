<?php                                                              require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");   $App   = new App();  $Nav  = new Nav();  $Menu   = new Menu();    include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle     = "RAP Project - Documentation";
$pageKeywords  = "Ajax, rap, w4t, eclipse rap";
$pageAuthor    = "Ralf Sternberg";

# NOTE: When changing this files' name, also update rap.eclipse.org/rap which
#       redirects to this page.

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="midcolumn">

  <h1>Documentation</h1>

  <p>
    There are several sources of information for RAP application developers:
    <ul>
      <li><a href="#devguide">Developer Guide (Help Center)</a></li>
      <li><a href="#faq">FAQ</a></li>
      <li><a href="#wiki">Wiki</a></li>
      <li><a href="#webinars">Webinars</a></li>
      <li><a href="#articles">Articles</a></li>
    </ul>
  </p>

  <div id="devguide" class="homeitem3col" style="clear: both">
    <h3>Developer Guide (Help Center)</h3>
    <p>
      This is the official help for RAP. It is included in the Eclipse help if
      you installed the RAP Tooling, and can also be accessed
      <a href="http://help.eclipse.org/galileo/index.jsp?topic=/org.eclipse.rap.help/help/html/intro.html">online</a>.
    </p>
    <p>
      The developer guide shows how to develop RAP applications and also covers
      some advanced topics like branding and i18n. It also contains JavaDoc and
      reference documents.
    </p>
  </div>

  <div id="faq" class="homeitem3col" style="clear: both">
    <h3>FAQ</h3>
    <p>
      We collect answers to freqently asked qestions in
      <a href="http://wiki.eclipse.org/RAP/FAQ">RAP FAQ</a>.
    </p>
  </div>

  <div id="wiki" class="homeitem3col" style="clear: both">
    <h3>Wiki Pages</h3>
    <p>
      Some information is also available in our
      <a href="http://wiki.eclipse.org/RAP">wiki pages</a>.
    </p>
  </div>

  <div id="webinars" class="homeitem3col" style="clear: both">
    <h3>Webinars</h3>
    <p>
    <ul>
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
        Webinar:
        <a target="_blank" href="http://live.eclipse.org/node/450">
        Rich AJAX Platform (RAP) Project</a> Feb 13, 2008, Jochen Krause
      </li>
    </ul>
    </p>
  </div>

  <div id="articles" class="homeitem3col" style="clear: both">
    <h3>Articles</h3>
    <p>
      A lot of third articles and tutorials have been published about RAP:
    </p>
    <ul>
      <li>
        Tutorial: <a href="http://www.vogella.de/articles/EclipseRAP/article.html">
        Eclipse Rich Ajax Platform (RAP) - Tutorial with Eclipse 3.5 (Galileo)</a>,
        June 2008, Lars Vogel
      </li>
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
        <a target="_blank" href="http://www.redmonk.com/cote/2007/12/12/eclipse-rap-overview-and-demo-screencast">
        Eclipse RAP Overview and Demo Screencast</a> RedMonk, Dec 12, 2007, Jochen Krause
      </li>
      <li>
        Article:
        <a target="_blank" href="http://www.ibm.com/developerworks/library/os-eclipse-richajax1/index.html">
        Web 2.0, the Eclipse way, Part I</a>,
        <a target="_blank" href="http://www.ibm.com/developerworks/library/os-eclipse-richajax2/index.html">
        Part II</a>: An article at IBM developerWorks, Dec 11, 2007,
        byChris Aniszczyk & Benjamin Muskalla
      </li>
      <li>
        Article:
        <a target="_blank" href="http://www.devx.com/webdev/Article/36101/0/page/1">
        The Rich get Richer: RAP builds on RCP</a> DevX, Nov 27, 2007, Riccardo Govoni (Google)
      </li>
      <li>
        Article:
        <a href="http://www.innoopract.com/fileadmin/user_upload/Dokumente/Web-enabled_RCP_Applications_with_the_Rich_Ajax_Platform_pdf.pdf" target="_blank">
        RCP goes Web 2.0</a> September 28, 2007
      </li>
      <li>
      Blog / Video:
      <a href="http://eclipsenuggets.blogspot.com/2007/09/see-how-you-can-make-rcp-application.html" target="_blank">
        See how you can make an RCP Application run in your browser</a> Sept 11, 2007, Elias Volanakis
      </li>
    </ul>
  </div>

</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
