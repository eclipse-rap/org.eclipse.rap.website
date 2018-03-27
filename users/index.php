<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "Built on RAP";
  $navPosition = array( "demos", "built-on-rap" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Built on RAP</h1>
  <p>
     We'd be happy to learn about <em>your</em> RAP project. <br/>If you have something to add
     to this page, just open an enhancement request in the
    <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=RAP&component=Website">Website</a>
    component of the RAP project in bugzilla.
  </p>

  <h2 class="section">Open Source Projects</h2>

<!-- Template
  <div class="box">
    <div class="images">
      <a href="link">
        <img src="images/something.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">Software</h2>
      <h4 class="tagline">Developer</h4>
      <p>
        Description
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="url">link</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>
-->

  <div class="box">
    <div class="images">
      <a href="images/scout1-full.png">
        <img src="images/scout1.png"/>
      </a><!--
      <br/>
      <a href="images/scout2-full.png">
        <img src="images/scout2.png"/>
      </a>-->
    </div>
    <div>
      <h2 id="scout" class="withTagline">Eclipse Scout</h2>
      <h4 class="tagline">
        <a href = "http://www.bsiag.com/en/home.html">BSI AG</a> /
        <a href = "http://www.eclipse.org/scout/">Eclipse Scout Project</a>
      </h4>
      <p>
        Eclipse Scout is a mature and easy to learn framework that supports building applications for
        both desktop (Swing or SWT) and web (RAP Widget Tookit).
        Scout has been developed at BSI since 2001.
        In 2011, BSI has published Scout under the Eclipse Public License.
        RAP applications can be created since Scout 3.8 (Juno).
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://www.eclipse.org/scout/">Project Homepage</a>
        </li>
        <li>
          <a href="http://wiki.eclipse.org/Scout">Scout Wiki</a>
        </li>
        <li>
            <a href="http://wiki.eclipse.org/Scout/NewAndNoteworthy/3.8#Scout_Web_UI_support_based_on_RAP">Scout 3.8 - New And Noteworthy</a>
        </li>
        <li>
            <a href="http://wiki.eclipse.org/images/2/2b/20120329_Scout_and_RAP_EclipseCon.pdf">Presentation Slides on Scout and RAP</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="images/riena1-full.png">
        <img src="images/riena1.png"/>
      </a><!--<br/>
      <a href="images/riena2-full.png">
        <img src="images/riena2.png"/>
      </a>-->
    </div>
    <div>
      <h2 id="riena" class="withTagline">Eclipse Riena</h2>
      <h4 class="tagline"><a href = "http://www.compeople.de/" >compeople AG</a> / <a href = "http://www.eclipse.org/riena/">Eclipse Riena Project</a></h4>
      <p>
        The Riena platform provides a foundation for building multi-tier
        enterprise client/server applications. It features a business process oriented user
        interface visualization and navigation metaphor, which can be used as an  alternative
        to the default workbench layout. Since it is based on RCP, an can also use RAP as a
        target platform. The Riena and RAP Projects have been cooperating closely to ensure
        both platforms are working together smoothly.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://www.eclipse.org/riena/">Project Homepage</a>
        </li>
        <li>
          <a href="http://wiki.eclipse.org/Riena">Riena Wiki</a>
        </li>
        <li>
          <a href="https://www.compeople.eu/blog/?p=575">Blogpost: <q>Riena 3.0 == Riena on RCP &amp; RAP"</q></a>
        </li>
        <li>
          <a href="http://www.compeople.de/files/riena_on_rap.pdf">Presentation Slides <q>Riena on RAP</q></a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href = "images/gyrex-full.png">
        <img src="images/gyrex.png"/>
      </a>
    </div>
    <div>
      <h2 id="gyrex" class="withTagline">Eclipse Gyrex</h2>
      <h4 class="tagline"><a href="http://www.eclipse.org/gyrex/">Eclipse Gyrex Project</a></h4>
      <p>
        Gyrex is an Eclipse Open Source project that provides a platform on top of the
        Equinox OSGi framework, enabling seamless and pain-free operation of Equinox server
        clusters. It also provides frameworks and concepts for developing, deploying and scaling
        applications on top of Gyrex based clouds, which
        can be administrated using an extensible, RAP based web interface.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://www.eclipse.org/gyrex/">Project Homepage</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <!-- See http://dev.eclipse.org/mhonarc/lists/rap-dev/msg00918.html -->
  <div class="box">
    <div class="images">
      <a href="images/tadpole-full.png">
        <img src="images/tadpole.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">Tadpole for DB Tools</h2>
      <h4 class="tagline"><a href="https://github.com/hangum/TadpoleForDBTools">GitHub project</a></h4>
      <p>
        Tadpole for DB Tools is a unified infrastructure tool for managing various types of
        databases in a web browser.
        It supports CUBRID, MySQL, MSSQL, Oracle, PostgreSQL, SQLite, and MongoDB.
        The code is published under EPL.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="https://sites.google.com/site/tadpolefordbtoolsen/">Info site</a>
        </li>
        <li>
          <a href="http://goo.gl/BhwQe">Online demo</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="images/dirigible_workbench-full.png">
        <img src="images/dirigible_workbench.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">Dirigible</h2>
      <h4 class="tagline"><a href="http://www.dirigible.io">Dirigible Project</a></h4>
      <p>
        Dirigible is an open source project that provides Integrated Development Environment as a
        Service (IDEaaS) as well as runtime engines integration for the running applications. The
        major benefit of this toolkit is the shortest ever turnaround time, provided by leveraging
        In-System Development Model and Cloud Environment.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://github.com/SAP/cloud-dirigible">Source code</a>
        </li>
        <li>
          <a href="http://forum.dirigible.io">Forum</a>
        </li>
        <li>
          <a href="http://samples.dirigible.io">Samples</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <h2 class="section" >Commercial Projects</h2>

  <div class="box">
    <div class="images">
      <a href="images/edicat1-full.png">
        <img src="images/edicat1.png"/>
      </a><!--
      <br/>
      <a href="images/edicat2-full.png">
        <img src="images/edicat2.png"/>
      </a>-->
    </div>
    <div>
      <h2 class="withTagline">EDIcat WiM</h2>
      <h4 class="tagline"><a href = "http://www.hsag.info/">Heidelberger Services AG</a></h4>
      <p>
        Germany's gas and electricity markets use EDIFACT messages for B2B data interchange.
        EDIcat WiM supports implementing new regulatory policies and processes in a light-weight manner.
        It provides simple workflows, no-frills integration
        with SAP standard transactions and, last but not least, EDIFACT viewing functionality
        – all visually appealing integrated with RAP.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://www.hsag.info/leistungen/loesungen/edicatwim">EDIcat WiM product page (German)</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="images/vitaphone-full.png">
        <img src="images/vitaphone.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">Vitaphone-ISP</h2>
      <h4 class="tagline"><a href="http://www.vitaphone.de/en/company/">Vitaphone GmbH</a></h4>
      <p>
        The Integrated Service Platform ISP is the IT infrastructure core of the telemedical services of the Vitaphone GmbH.
        With the ISP, remote patient monitoring is managed, electronic case files are administered
        and the processes of the Telemedical Service Center (TSC) are controlled.
        The ISP has a modular structure, meaning that different project-specific services can be optionally added.
        Vitaphone considers it
          <a href="http://www.slideshare.net/rsternberg/eclipse-in-telemedicine-and-health-care">
            <em>
              <q>
                a Success Story with RCP and RAP
              </q>
            </em>
          </a>.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://www.slideshare.net/rsternberg/eclipse-in-telemedicine-and-health-care">EclipseCon Presentation Slides</a>
        </li>
        <li>
          <a href="http://www.vitaphone.de/en/telemedicine/integrated-service-platform/">Product Page</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="images/semantic-express-full.png">
        <img src="images/semantic-express.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">SemanticXpress</h2>
      <h4 class="tagline"><a href="http://www.ontoprise.de/en/">ontoprise GmbH</a></h4>
      <p>
        SemanticXpress is an ontology-based solution for company-wide vocabulary-management.
        The existing terminologies from the different departments are linked to the company’s
        vocabulary using so-called mappings. Users can access and interact with SemanticXpress
        using a standardized, company-wide Web interface based on RAP.
        External applications can also access the stored vocabularies (for example, to leverage
        the Intranet search of a company).
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://www.ontoprise.de/en/solutions/semanticxpress/">SemanticXpress product page</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="images/tcat-preparedness-full.png">
        <img src="images/tcat-preparedness.jpg" alt="Dynamic Preparedness System" title="Dynamic Preparedness System"/>
      </a><!--
      <br/>
      <a href="http://www.eclipse.org/community/casestudies/emergencySimulation.php">
        <img src="images/tcat-bio-surveillance.jpg" alt="Biosurveillance Common Operating Picture" title="Biosurveillance Common Operating Picture"/>
      </a>-->
    </div>
    <div>
      <h2 class="withTagline">Information Dashboard Framework</h2>
      <h4 class="tagline"><a href = "http://tcat.tamu.edu/">Texas Center for Applied Technology</a></h4>
      <p>
        This framework is the base for the Emergency Management Exercise System (EM*ES), a
        system used for training in the National Incident Management System (NIMS).
        The system has been designed to be adaptable for many simulation contexts,
        ranging from a tornado hitting a populated area to WMD events.
        Other systems built on this framework are the Biosurveillance Common Operating Picture and
        the Coast Guard Display System.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://www.eclipse.org/community/casestudies/emergencySimulation.php">Case Study</a>
        </li>
        <li>
          <a href="http://wiki.eclipse.org/images/9/90/091117EmergencyInfoDissemination.pdf">EclipseCon Presentation Slides</a>
        </li>
        <li>
          <a href="http://fazd.tamu.edu/information-analysis-systems/online-dashboard-to-enhance-decision-making-during-disease-outbreaks/">Product Page</a>
        </li>
        <li>
          <a href="http://tcat.tamu.edu/index.php?option=com_content&amp;view=article&amp;id=95:online-technology-for-tracking-disease-outbreaks-earns-dhs-2010-science-a-technology-impact-award&amp;catid=39:tcat-news&amp;Itemid=56">Department of Homeland Security Award</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <img src="images/pia.png"/>
    </div>
    <div>
      <h2 class="withTagline">CAS PIA</h2>
      <h4 class="tagline"><a href = "http://www.cas.de/">CAS Software AG</a></h4>
      <p>
        A powerful customer relationship management system based on RAP with a great look and feel.
        Provides contact management, calendar, document management, and many more features.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://www.cas-pia.de/en/try.html">CAS PIA guest account</a>
          (click <em>Guest access</em> to launch the application)
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <img src="images/numiton.png"/>
    </div>
    <div>
      <h2 class="withTagline">Numiton Migration Tools</h2>
      <h4 class="tagline"><a href="http://www.numiton.com/">Numiton Limited</a></h4>
      <p>
        This online application showcases the features of the
        <a href="http://www.numiton.com/products/ntile-ptoj/ptoj-overview.html">nTile migration system</a>
        developed by Numiton.
      </p>
      <p>
        It allows the automated migration of software from one language to the
        other, at the source code level. At this point the application allows you
        to freely migrate PHP code of limited size to Java with servlets or the
        Spring framework. The snippets can also be shared with others.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://www.numiton.com/products/ntile-ptoj/ptoj-overview.html">nTile migration system</a>
          <!--a href="http://migrate.numiton.com/">Browse migration snippets and create your own</a-->
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

<!-- Seems broken, can not connect to any gibhub repository
  <div class="box">
    <div class="images">
      <img src="images/codefaces.png"/>
    </div>
    <div>
      <h2 class="withTagline">CodeFaces</h2>
      <h4 class="tagline"><a href="http://codefaces.org/">CodeFaces.org</a></h4>
      <p>
        A web-based source control client that targets at easing the pain of navigating code
        from a source control system on a browser.
        Allows connecting to multiple source control systems and structurally navigating code
        on a unified web interface.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://codefaces.org/">Web-based source control client</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>
-->

  <div class="box">
    <div class="images">
      <a href="images/eis-full.png">
        <img src="images/eis.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">Energy Information System</h2>
      <h4 class="tagline"><a href="http://www.enelytics.com/">Enelytics LLC</a></h4>
      <p>
       Enelytics provides web application services for energy invoice processing and
       energy information management. The Energy Information System (EIS) is formed around a core
       feature set focused on processing, verifying, and analyzing energy invoices.
       Beyond this, EIS can be extended with many plug-in modules to meet different needs.
       Enelytics has adopted Eclipse runtime technologies as the basis for EIS,
       the Rich Ajax Platform in particular.
       </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://enelytics.net/sos-technology.htm">EIS Technology &amp; Extensibility</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="images/eiswind-full.png">
        <img src="images/eiswind.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">Book Publishing Software</h2>
      <h4 class="tagline"><a href="http://www.eiswind.de">Eiswind</a></h4>
      <p>
        Eiswind Book Publishing Software is an online service for book publishers to manage book
        projects and processes.
        It allows to synchronize title data with third party information systems using ONIX,
        the international standard format for book data exchange.
      </p>
      <p>
        Small publishers can sign up for a single user account for free.
        A guest account is also available.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://www.book-publishing-software.de/">http://www.book-publishing-software.de/</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="images/otis-full.png">
        <img src="images/otis.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">OTIS - Oil Trading and Information System</h2>
      <h4 class="tagline"><a href="http://www.meko-s.de">MEKO-S GmbH</a></h4>
      <p>
        The software OTIS does allow petrol station owners to manage their petrol stations,
        do the invoicing and contact customers via the built-in CRM module.
      </p>
      <p>
        While this happens in a RCP desktop application, the fuel card users that buy petrol
        at these stations use the provided RAP based <em>customer portal</em> to be able to
        manage their cards and view all their transaction and invoice history.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="http://www.meko-s.de/otis">OTIS Product Page</a>  (German)
        </li>
        <li>
          <a href="http://www.youtube.com/watch?v=nbRKE1b8KyU">EclipseCon Europe 2012 Recording</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="images/tsmexplorer3-full.png">
        <img src="images/tsmexplorer3.png"/>
      </a><!--
      <br/>
      <a href="images/tsmexplorer2-full.png">
        <img src="images/tsmexplorer2.png"/>
      </a>-->
    </div>
    <div>
      <h2 class="withTagline">TSMExplorer</h2>
      <h4 class="tagline"><a href = "http://www.s-iberia.com">Siberia  Software SL</a></h4>
      <p>
        TSMExplorer Server  is easy and comfortable product for managing and monitoring IBM Tivoli
        Storage Manager (Spectrum Protect). The product allows to manage many TSM servers from
        single sign-on and  fully substitutes standard dsmadmc console management.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="https://www.youtube.com/watch?v=9T1WVMmmc2c">TSMExplorer Server</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="images/quandec-full.png">
        <img src="images/quandec.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">Quandec – Quantify your decisions</h2>
      <h4 class="tagline"><a href="https://www.cassotis.com">CASSOTIS consulting</a></h4>
      <p>
        Quandec is a generic scenario-based graphical interface for optimization models written in
        AMPL. It offers an intuitive and user-friendly web application designed to help decision
        makers analyze results, compare scenarios, make reports, share work with colleagues,
        calibrate equations with regressions, and much more.
      </p>
      <p class="refs">References:</p>
      <ul>
        <li>
          <a href="https://www.cassotis.com/quandec">Quandec page at CASSOTIS website</a>
        </li>
        <li>
          <a href="https://ampl.com/products/quandec/">AMPL's product page</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

</div>

<div id="rightcolumn">
  <?php includeSidebar( "rap-feed.php" ) ?>
  <?php includeSidebar( "contributors.php" ) ?>
</div>

<?php
  printFooter();
?>
