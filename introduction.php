<?php                                                              require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");   $App   = new App();  $Nav  = new Nav();  $Menu   = new Menu();    include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
  $pageTitle     = "RAP Project - Introduction";
  $pageKeywords  = "Ajax, rap, w4t, eclipse rap";
  $pageAuthor    = "Jochen Krause";
  
  # Paste your HTML content between the EOHTML markers!  
  $html = <<<EOHTML

<div id="maincontent">
  <div id="midcolumn">

    <h1>Introduction</h1>

    <div class="homeitem3col">
      <h3>What is RAP?</h3>
      <p>
        I a nutshell: “<em>RAP brings RCP applications into the browser</em>”.
      </p>
      <div style="margin: 10px 0px; text-align: center;">
        <img src="images/about/Maildemo-Design.png" />
      </div>
      <p>
        Our mission:<br/>
        The RAP project enables developers to build rich, Ajax-enabled Web 
        applications by using the Eclipse development model, plug-ins with the
        well known Eclipse workbench extension points and a widget toolkit with
        SWT API (plus JFace).
      </p>
    </div>

    <div class="homeitem3col">
      <h3>How does it work?</h3>

      <div style="margin: 10px 0px; text-align: center;">
        <img src="images/about/architecture.png" alt="Architecture" />
      </div>

      <p>
        RAP is very similar to
        <a href="http://wiki.eclipse.org/index.php/Rich_Client_Platform">Eclipse RCP</a>,
        but it has its own implementation of
        the SWT API (called RWT) which renders the widgets remotely on a web
        browser.
        The RAP application runs on a servlet container and clients can access
        the application with standard web browsers.
      </p>
    </div>

    <div class="homeitem3col">
      <h3>Single Sourcing</h3>
      <p>
        A popular use case for RAP is the development of rich clients and web
        clients from a single code base, also called “Single Sourcing”.
      </p>
      <p>
        Application vendors are increasingly required to provide both desktop
        and web clients for their customers.
        But these platforms are based on very different technologies which
        generally demand different programming paradigms and skills that make
        it difficult to reuse code.
        The need for specialized development skills and for implementing the
        same thing twice increases the cost of production without adding
        substantial value to the project.
      </p>
      <p>
        The Rich Ajax Platform (RAP) was designed to address exactly these
        problems for the Eclipse world.
        RAP allows Java and Eclipse developers to reuse their
        existing skills through a Java-based development model for web-clients.
        Furthermore, RAP maximizes code reuse by including the largest-possible
        web-enabled subset of the Rich Client Platform.
      </p>
    </div>

    <div class="homeitem3col">
      <h3>How to Develop for RAP</h3>
      <p>
        The development of RAP applications is very similar to traditional RCP
        development.
        Applications are developed as OSGi-bundles entirely in Java and use the
        same API and extension points than their RCP counterparts.
        Thus, RAP developers take advantage of the award winning
        <a href="http://www.eclipse.org/jdt/">Java Development Tools (JDT)</a>
        and the
        <a href="http://www.eclipse.org/pde/">Plug-in Development Environment (PDE)</a>
        provided by Eclipse.
        Everything from development to launching, debugging and exporting
        to standard .war files works right out of the Eclipse IDE.
      </p>
      <div style="margin: 10px 0px; text-align: center;">
        <img src="images/about/tooling.png" alt="Tooling" />
      </div>
      <p>
        In addition, we provide the RAP Tooling which contains useful tools,
        templates and documentation.
        It simplifies the installation of the RAP Runtime SDK and the launching
        of RAP applications from Eclipse.
        You can download the RAP Tooling from the download section on the
        left to get right started.
        A user guide is part of the Tooling and can also be accessed
        <a href="http://help.eclipse.org/galileo/index.jsp?topic=/org.eclipse.rap.help/help/html/intro.html">online</a>.
      </p>
    </div>
  </div>

  <div id="rightcolumn">
    <div class="sideitem">
      <h6>Active Contributors</h6>
      <ul>
        <li>
          <a href="http://eclipsesource.com" target="_blank">EclipseSource</a>
        </li>
        <li>
          <a href="http://oneandone.com" target="_blank">1&amp;1</a>
        </li>
        <li>
          <a href="http://www.cas.de/English/Home.asp" target="_blank">CAS</a>
        </li>
      </ul>
    </div>
  </div>

</div>

EOHTML;


  # Generate the web page
  $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
