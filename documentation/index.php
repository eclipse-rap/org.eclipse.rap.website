<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "RAP - Documentation";
  $navPosition = array( "documentation", "index" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Documentation</h1>

  <p>
    There are several sources of information for RAP application developers:
    <ul>
      <li><a href="#devguide">Developer Guide (Help Center)</a></li>
      <li><a href="#resources">Resources Related to Underlying Technologies</a></li>
      <li><a href="#articles">Articles and Tutorials</a></li>
    </ul>
  </p>

  <div id="devguide" style="clear: both">
    <h2>Developer Guide (Help Center)</h2>
    <p>
      This is the official help for RAP. It is included in your Eclipse help if
      you installed the RAP Tooling.
      Help for the latest release can also be accessed
      <a href="http://help.eclipse.org/indigo/index.jsp?topic=/org.eclipse.rap.help/help/html/intro.html">
      online</a>.
    </p>
    <p>
      The developer guide shows how to develop RAP applications and also covers
      some advanced topics like branding and i18n. It also contains JavaDoc and
      reference documents.
    </p>
  </div>

  <div id="resources" style="clear: both">
    <h2>Resources Related to Underlying Technologies</h2>
    <p>
      RAP development requires knowledge of a couple of underlying technologies.
      We've collected a couple of resources that we recommend to read:
    </p>
    <h3>Equinox</h3>
    <ul>
      <li>
        <a href="http://www.eclipse.org/equinox/documents/quickstart.php">
        Equinox QuickStart Guide</a>
      </li>
      <li>
        <a href="http://www.eclipse.org/equinox/server/http_quickstart.php">
        Equinox Server-side Quickstart</a>
      </li>
      <li>
        <a href="http://www.eclipse.org/equinox-portal/tutorials/server-side/">
        Building a Server-based Application with Equinox</a>
      </li>
    </ul>
    <h3>SWT</h3>
    <ul>
      <li>
        <a href="http://www.eclipse.org/swt/snippets/">
        SWT Snippets</a>
      </li>
      <li>
        <a href="http://www.eclipse.org/articles/article.php?file=Article-Understanding-Layouts/index.html">
        Understanding Layouts in SWT</a>
      </li>
    </ul>
    <h3>JFace and Databinding</h3>
    <ul>
      <li>
        <a href="http://www.eclipse.org/articles/Article-TreeViewer/TreeViewerArticle.htm">
        How to use the JFace Tree Viewer</a>
      </li>
      <li>
        <a href="http://www.eclipse.org/articles/article.php?file=Article-JFaceWizards/index.html">
        Creating JFace Wizards</a>
      </li>
      <li>
        Databinding
        <a href="http://wiki.eclipse.org/index.php/JFace_Data_Binding">
          Overview Page
        </a>,
        <a href="http://wiki.eclipse.org/JFace_Data_Binding_FAQ">
          FAQ
        </a>
        and
        <a href="http://wiki.eclipse.org/JFace_Data_Binding/Snippets">
          Code Snippets
        </a>
      </li>
    </ul>
    <h3>Workbench</h3>
    <ul>
      <li>
        <a href="http://www.eclipse.org/articles/Article-UI-Workbench/workbench.html">
        Inside the Workbench - A guide to the workbench internals</a>
      </li>
      <li>
        <a href="http://www.eclipse.org/articles/using-perspectives/PerspectiveArticle.html">
        Using Perspectives in the Eclipse UI</a>
      </li>
      <li>
        <a href="http://www.eclipse.org/articles/Article-WorkbenchSelections/article.html">
        Eclipse Workbench: Using the Selection Service</a>
      </li>
      <li>
        <a href="http://www.eclipse.org/articles/Article-Concurrency/jobs-api.html">
        On the Job: The Eclipse Jobs API</a>
      </li>
      <li>
        <a href="http://www.eclipse.org/articles/Article-Workbench-DND/drag_drop.html">
        Drag and Drop in the Eclipse UI</a>
      </li>
    </ul>
  </div>

  <div id="articles" style="clear: both">
    <h2>Articles and Tutorials</h2>
    <p>
      A lot of articles and tutorials have been published about RAP:
    </p>
    <ul>
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

</div>

<div id="rightcolumn">

  <?php includeSidebar( "rap-feed.php" ) ?>

</div>

<?php

  printFooter();

?>
