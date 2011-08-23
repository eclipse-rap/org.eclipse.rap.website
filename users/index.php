<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "Who uses RAP?";
  $navPosition = array( "demos", "rap-users" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <div class="homeitem3col">

    <h1>Built on RAP</h1>

    <p>
      RAP is mainly used for building business applications, many of them are never seen outside of
      corporate walls.
      We'd be happy to learn about your projects with RAP.

      If you'd like your project listed on this page, please drop us a note to
      <a href="https://dev.eclipse.org/mailman/listinfo/rap-dev">rap-dev@eclipse.org</a>
      or contact one of the committers.
    </p>

    <div class="box">
      <div class="images">
        <a href="http://www.cas-pia.de/en/try.html">
          <img src="images/pia.png"/>
        </a>
      </div>
      <div>
        <h3>CAS PIA</h3>
        <p>
          A powerful customer relationship management system based on RAP with a great look&feel.
          Provides contact management, calendar, document management, and many more features.
        </p>
        <h4>References:</h4>
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
        <a href="http://www.eclipse.org/community/casestudies/emergencySimulation.php">
          <img src="images/tcat-preparedness.jpg" alt="Dynamic Preparedness System" title="Dynamic Preparedness System"/>
        </a>
        <br/>
        <a href="http://www.eclipse.org/community/casestudies/emergencySimulation.php">
          <img src="images/tcat-bio-surveillance.jpg" alt="Biosurveillance Common Operating Picture" title="Biosurveillance Common Operating Picture"/>
        </a>
      </div>
      <div>
        <h3>Information Dashboard Framework</h3>
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
        <h4>References:</h4>
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
        <a href="images/edicat1-full.png">
          <img src="images/edicat1.png"/>
        </a>
        <br/>
        <a href="images/edicat2-full.png">
          <img src="images/edicat2.png"/>
        </a>
      </div>
      <div>
        <h3>EDIFACT Communications and Analytics Toolkit</h3>
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
        <h4>References:</h4>
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
        <a href="images/semantic-express-full.png">
          <img src="images/semantic-express.png"/>
        </a>
      </div>
      <div>
        <h3>Vocabulary management SemanticXpress</h3>
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
        <h4>References:</h4>
        <ul>
          <li>
            <a href="http://www.ontoprise.de/en/solutions/semanticxpress/">SemanticXpress product page</a>
          </li>
        </ul>
      </div>
      <div style="clear: both;"></div>
    </div>

    <!--div class="box">
      <div class="images">
        <a href="http://www.enelytics.com/sos-technology.htm">
          <img src="images/blank.png"/>
        </a>
      </div>
      <div>
        <h3>Enelytics - SOS System</h3>
        <p>
          Enelytics LLC uses RAP as the basis for their <em>Software as Services (SOS)</em>
          Plug-in Architecture.
          ...
        </p>
        <p>
          <a href="http://www.enelytics.com/sos-technology.htm">Enelytics SOS Technology</a>
        </p>
      </div>
      <div style="clear: both;"></div>
    </div-->

    <div class="box">
      <div class="images">
        <!--a href="http://migrate.numiton.com"-->
          <img src="images/numiton.png"/>
        <!--/a-->
      </div>
      <div>
        <h3>Numiton Migration Tools</h3>
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
        <h4>References:</h4>
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
        <!--a href="http://codefaces.org/"-->
          <img src="images/codefaces.png"/>
        <!--/a-->
      </div>
      <div>
        <h3>CodeFaces</h3>
        <p>
          A web-based source control client that targets at easing the pain of navigating code
          from a source control system on a browser.
          Allows connecting to multiple source control systems and structurally navigating code
          on a unified web interface.
        </p>
        <h4>References:</h4>
        <ul>
          <li>
            <a href="http://codefaces.org/">Web-based source control client</a>
          </li>
        </ul>
      </div>
      <div style="clear: both;"></div>
    </div>

  </div>

</div>

<div id="rightcolumn">

  <?php includeSidebar( "rap-feed.php" ) ?>
  <?php includeSidebar( "contributors.php" ) ?>

</div>

<?php

  printFooter();

?>
