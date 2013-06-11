<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );
  $title = "RAP - Articles";
  $navPosition = array( "documentation", "articles" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Articles</h1>

  <p>
    A lot of articles and tutorials have been published about RAP:
  </p>
  <ul>
    <li>
      Article (<img src="/rap/images/de.gif" alt="German"/>):
      <a href="http://it-republik.de/jaxenter/eclipse-magazin-ausgaben/Eclipse-Mobil-000503.html">RCP/RAP in der Praxis</a>,
      Ein Einblick in eine Entwicklungsabteilung auf dem Gesundheitsmarkt, Eclipse Magazin,
      June 2012, Moritz Hanke und Paul Petershagen
    </li>
    <li>
      Interview (<img src="/rap/images/de.gif" alt="German"/>):
      <a href="http://it-republik.de/jaxenter/artikel/RAP-in-Indigo-Die-neue-Auflage-der-Rich-Ajax-Platform-3909.html">RAP in Indigo: Die neue Auflage der Rich Ajax Platform, jax enter</a>,
      Juli 2011, Ralf Sternberg
    </li>
    <li>
      Article (<img src="/rap/images/de.gif" alt="German"/>):
      <a href="http://www.heise.de/developer/artikel/Einfuehrung-in-die-Rich-Ajax-Platform-RAP-1168361.html">
      Einführung in die Rich Ajax Platform (RAP), heise online</a>,
      Jan 2011, Rüdiger Herrmann, Ralf Sternberg
    </li>
    <li>
      Interview
      (<img src="/rap/images/de.gif" alt="German"/>):
      <a href="http://it-republik.de/jaxenter/artikel/Eclipse-RAP-Helios-3210.html">Eclipse RAP in Helios, jax enter</a>,
      Juli 2010, Rüdiger Herrmann
    </li>
    <li>
      Whitepaper: <a href="/rap/resources/readAndDispatch.pdf">
      Apartment threading in RAP</a>,
      August 2009, Benjamin Muskalla
    </li>
    <li>
      Tutorial: <a href="http://wiki.eclipse.org/RAP/BIRT_Integration">
      How to integrate BIRT into RAP applications</a>,
      July 2009, Benjamin Muskalla
    </li>
    <li>
      Tutorial: <a href="http://www.vogella.de/articles/EclipseRAP/article.html">
      Eclipse Rich Ajax Platform (RAP) - Tutorial with Eclipse 3.5 (Galileo)</a>,
      June 2009, Lars Vogel
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
      Webinar: Single-Sourcing Techniques for RAP and RCP, Oct 23, 2008, Frank Appel
      <br />
      <a href="http://download.eclipsesource.com/rap/webinar/Single_Sourcing_RAP_RCP_en.pdf">
        PDF Slides
      </a>
      &nbsp;&nbsp;
      <a href="http://download.eclipsesource.com/rap/webinar/Single_Sourcing_RAP_RCP_examples.zip">
        Code examples
      </a>
      &nbsp;&nbsp;
      <a href="http://download.eclipsesource.com/rap/webinar/Single_Sourcing_RAP_RCP_en.mp4">
        MP4 Recording
      </a>
      &nbsp;&nbsp;
      <a href="http://download.eclipsesource.com/rap/webinar/Single_Sourcing_RAP_RCP_en.wmv">
        WMV Recording
      </a>
      &nbsp;&nbsp;(~ 60 Minutes)
    </li>
    <li>
      Article:
      <a href="http://www.ibm.com/developerworks/edu/os-dw-os-eclipse-ganymede-pt2.html" target="_blank">
      Using Eclipse Ganymede to develop for the desktop, Web and mobile devices,
      Part 2: Developing for the Rich Client Platform, the Ganymede way</a>
      IBM developerWorks, Sep 9, 2008, Suresh Krishna &amp; Trebor Fenstermaker
    </li>
    <li>
      Article (<img src="/rap/images/de.gif" alt="German"/>):
      <a target="_blank" href="http://www.oio.de/public/opensource/eclipse-rap/tutorial-eclipse-rich-application-plattform-portierung.htm">
      Einsatzm&ouml;glichkeiten der Eclipse RAP</a> April 2008, Steffen Sch&auml;fer
    </li>
    <li>
      Webinar:
      <a target="_blank" href="http://live.eclipse.org/node/450">
      Rich AJAX Platform (RAP) Project</a> Feb 13, 2008, Jochen Krause
    </li>
    <li>
      Article:
      <a target="_blank" href="http://www.ibm.com/developerworks/library/os-eclipse-richajax1/index.html">
      Web 2.0, the Eclipse way, Part I</a>,
      <a target="_blank" href="http://www.ibm.com/developerworks/library/os-eclipse-richajax2/index.html">
      Part II</a>: An article at IBM developerWorks, Dec 11, 2007,
      by Chris Aniszczyk &amp; Benjamin Muskalla
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

<div id="rightcolumn">

  <?php includeSidebar( "rap-feed.php" ) ?>

</div>

<?php

  printFooter();

?>
