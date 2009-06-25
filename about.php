<?php                                                              require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");   $App   = new App();  $Nav  = new Nav();  $Menu   = new Menu();    include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
  $pageTitle     = "RAP Project - About";
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
        <div align="center" margin="10px 0px">
          <img src="images/about/maildemo.png" />
        </div>
      </p>
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

      <div align="center" margin="10px 0px">
        <img src="images/about/architecture.png" alt="Architecture" />
      </div>

      <p style="margin:10px">
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
      <p align="center">
        <img src="images/about/tooling.png" alt="Tooling" />
      </p>
      <!--
        - Tooling ()
 The RAP Tooling contains 
        useful tools, templates and documentation. It also installs the RAP
        Runtime SDK which is included.
        
        - PDE, JDT
      -->
      <p>
      RAP takes advantage of the award winning Java Development tools and the Plug-in Development
      tools provided by Eclipse.org. As applications are developed as bundles (plug-ins) and 
      entirely in Java everything from development to launching, debugging and exporting to 
      standard .war files works right out of the Eclipse IDE. 
      <li>
        You can download the RAP tools / runtime from the download section on the left.
        A user guide is part of the RAP tools and can also be accessed online from the 
        infocenter link.
      </li>
    </div>

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
      <a href="http://oneandone.com" target="_blank">1&1</a>
    </li>
    <li>
      <a href="http://www.cas.de/English/Home.asp" target="_blank">CAS</a>
    </li>
   </ul>
  </div>
 </div>
EOHTML;


  # Generate the web page
  $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
