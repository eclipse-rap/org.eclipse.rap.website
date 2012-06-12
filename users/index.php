<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "Built on RAP";
  $navPosition = array( "demos", "built-on-rap" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <h1>Built on RAP</h1>

  <p>
    RAP is mainly used for building business applications, many of which are never seen outside of
    corporate walls.
    We'd be happy to learn about your RAP projects.

    Just drop us a line at the
    <a href="https://dev.eclipse.org/mailman/listinfo/rap-dev">rap-dev</a> mailing list.
  </p>
<!---
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
      <h3>References:</h3>
      <ul>
        <li>
          <a href="url">link</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>
--->

  <div class="box">
    <div class="images">
      <a href="images/scout1-full.png">
        <img src="images/scout1.png"/>
      </a>
      <br/>
      <a href="images/scout2-full.png">
        <img src="images/scout2.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">Eclipse Scout</h2>
      <h4 class="tagline">
        <a href = "http://www.bsiag.com/en/home.html">BSI AG</a> /
        <a href = "http://www.eclipse.org/scout/">Eclipse Scout Project</a>
      </h4>
      <p>
        Eclipse Scout a mature and easy to learn framework that supports building applications for 
        both the desktop (Swing or SWT) and the web (RAP Widget Tookit). 
        Scout has been developed at BSI since 2001. 
        In 2011, BSI has published Scout under the Eclipse Public License. 
        RAP applications can be created since Scout 3.8 (Juno). 
      </p>
      <h3>References:</h3>
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
      </a><br/>
      <a href="images/riena2-full.png">
        <img src="images/riena2.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">Eclipse Riena</h2>
      <h4 class="tagline"><a href = "http://www.compeople.de/" >compeople AG</a> / <a href = "http://www.eclipse.org/riena/">Eclipse Riena Project</a></h4>
      <p>
        The Riena platform provides a foundation for building multi-tier 
        enterprise client/server applications. It features a business process oriented user 
        interface visualization and navigation metaphor, which can be used as alternative 
        to the default workbench layout. Since it is based on RCP, an can also use RAP as a 
        target platform. The Riena and RAP Projects have been cooperating closely to ensure 
        both platforms are working together smoothly.
      </p>
      <h3>References:</h3>
      <ul>
        <li>
          <a href="http://www.eclipse.org/riena/">Project Homepage</a>
        </li>
        <li>
          <a href="http://wiki.eclipse.org/Riena">Riena Wiki</a>
        </li>
        <li>
          <a href="https://www.compeople.eu/blog/?p=575">Blogpost: <q>Riena 3.0 == Riena on RCP & RAP"</q></a>
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
      <a href="images/edicat1-full.png">
        <img src="images/edicat1.png"/>
      </a>
      <br/>
      <a href="images/edicat2-full.png">
        <img src="images/edicat2.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">EDIcat - EDIFACT Communications and Analytics Toolkit</h2>
      <h4 class="tagline"><a href = "http://www.hsag.info/">Heidelberger Services AG</a></h4>
      <p>
        Germany's gas and electricity markets use EDIFACT messages for B2B data interchange.
        New regulatory policies put an ever-growing burden on small and medium-sized utilities.
        For example, new metering processes are to be handled starting October 2011.
        This means additional complexity in data interchange, which currently installed billing
        back-ends often cannot handle yet.
        To add insult to injury, upgrading projects often cannot be concluded in time and budget.
        So, EDIcat WiM supports implementing these new processes in a light-weight manner.
        Being a bridge technology, EDIcat WiM provides simple workflows, no-frills integration
        with SAP standard transactions and, last but not least, EDIFACT viewing functionality
        – all visually appealing integrated by RAP.
      </p>
      <h3>References:</h3>
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
      <a href="http://www.eclipse.org/community/casestudies/emergencySimulation.php">
        <img src="images/tcat-preparedness.jpg" alt="Dynamic Preparedness System" title="Dynamic Preparedness System"/>
      </a>
      <br/>
      <a href="http://www.eclipse.org/community/casestudies/emergencySimulation.php">
        <img src="images/tcat-bio-surveillance.jpg" alt="Biosurveillance Common Operating Picture" title="Biosurveillance Common Operating Picture"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">Information Dashboard Framework</h2>
      <h4 class="tagline"><a href = "http://tcat.tamu.edu/">Texas Center for Applied Technology</a></h4>
      <p>
        A framework for Emergency Simulation,
        developed by the Texas Center for Applied Technology (TCAT).
        This framework is the base for the Emergency Management Exercise System (EM*ES), a
        system used for training in the National Incident Management System (NIMS).
        The system has been designed to be adaptable for other simulation contexts,
        ranging from a tornado or hurricane hitting a populated area, to man-made disasters
        including WMD events, to flooding or cryptosporidium outbreaks in a water supply.
      </p>
      <p>
        Other systems built on this framework are the Biosurveillance Common Operating Picture and
        the Coast Guard Display System.
      </p>
      <h3>References:</h3>
      <ul>
        <li>
          <a href="http://www.eclipse.org/community/casestudies/emergencySimulation.php">Emergency Simulation Solutions Delivered in Record Time With Eclipse (Case Study at Eclipse.org)</a>
        </li>
        <li>
          <a href="http://www.eclipsecon.org/2010/sessions/?page=sessions&id=1134">Eclipse to the Rescue (Talk at EclipseCon)</a>,
          <a href="http://wiki.eclipse.org/images/9/90/091117EmergencyInfoDissemination.pdf">Slides (PDF)</a>
        </li>
        <li>
          <a href="http://fazd.tamu.edu/information-analysis-systems/online-dashboard-to-enhance-decision-making-during-disease-outbreaks/">Information Dashboard Framework enhances decision making during disasters or attacks</a>
        </li>
        <li>
          <a href="http://fazd.tamu.edu/information-analysis-systems/online-dashboard-to-enhance-decision-making-during-disease-outbreaks/bio-surveillance-common-operating-picture/">Bio-surveillance Common Operating Picture developed for DHS National Bio-surveillance Integration Center</a>
        </li>
        <li>
          <a href="http://tcat.tamu.edu/index.php?option=com_content&view=article&id=95:online-technology-for-tracking-disease-outbreaks-earns-dhs-2010-science-a-technology-impact-award&catid=39:tcat-news&Itemid=56">Online technology for tracking disease outbreaks earns DHS' 2010 Science & Technology Impact Award</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <a href="http://www.cas-pia.de/en/try.html">
        <img src="images/pia.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">CAS PIA</h2>
      <h4 class="tagline"><a href = "http://www.cas.de/">CAS Software AG</a></h4>
      <p>
        A powerful customer relationship management system based on RAP with a great look and feel.
        Provides contact management, calendar, document management, and many more features.
      </p>
      <h3>References:</h3>
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
      <a href="images/semantic-express-full.png">
        <img src="images/semantic-express.png"/>
      </a>
    </div>
    <div>
      <h2 class="withTagline">Vocabulary management SemanticXpress</h2>
      <h4 class="tagline"><a href="http://www.ontoprise.de/en/">ontoprise GmbH</a></h4>
      <p>
        <a href="http://www.ontoprise.de/en/solutions/semanticxpress/">SemanticXpress</a>
        by <a href="http://www.ontoprise.com">Ontoprise</a>
        is an ontology-based solution for company-wide vocabulary-management.
        The existing terminologies from the different departments are linked to the company’s
        vocabulary using so-called mappings. Users can access and interact with SemanticXpress
        using a standardized, company-wide Web interface based on RAP.
        External applications can also access the stored vocabularies (for example, to leverage
        the Intranet search of a company).
        Therefore SemanticXpress provides Web services that are suitable for easily connecting
        external applications.
      </p>
      <h3>References:</h3>
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
      <h3>References:</h3>
      <ul>
        <li>
          <a href="http://enelytics.net/sos-technology.htm">EIS Technology & Extensibility</a>
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
      <h3>References:</h3>
      <ul>
        <li>
          <a href="http://www.numiton.com/products/ntile-ptoj/ptoj-overview.html">nTile migration system</a>
          <!--a href="http://migrate.numiton.com/">Browse migration snippets and create your own</a-->
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
      <h2 class="withTagline">Gyrex</h2>
      <h4 class="tagline"><a href="http://www.eclipse.org/gyrex/">Eclipse Gyrex Project</a></h4>
      <p>
        Gyrex is an Eclipse Open Source project that provides a platform on top of the 
        Equinox OSGi framework, enabling seamless and pain-free operation of Equinox server 
        clusters. It also provides frameworks and concepts for developing, deploying and scaling 
        applications on top of Gyrex based clouds, which 
        can be administrated using an extensible, RAP based web interface.
      </p>
      <h3>References:</h3>
      <ul>
        <li>
          <a href="http://www.eclipse.org/gyrex/">Project Homegepage</a>
        </li>
      </ul>
    </div>
    <div style="clear: both;"></div>
  </div>

  <div class="box">
    <div class="images">
      <!--a href="http://codefaces.org/"-->
        <img src="images/codefaces.png"/>
      <!--/a-->
    </div>
    <div>
      <h2>CodeFaces</h2>
      <p>
        A web-based source control client that targets at easing the pain of navigating code
        from a source control system on a browser.
        Allows connecting to multiple source control systems and structurally navigating code
        on a unified web interface.
      </p>
      <h3>References:</h3>
      <ul>
        <li>
          <a href="http://codefaces.org/">Web-based source control client</a>
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
