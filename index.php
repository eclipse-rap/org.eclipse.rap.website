<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $pageTitle = "Rich Ajax Platform (RAP)";
  $navPosition = array( "home", "index" );
  printHeader( $title, $navPosition );

?>

<div id="midcolumn">

  <div class="homeitem3col">
    <h1>RCP applications in a web browser</h1>

    <p style="margin-bottom:15px">
      The Rich Ajax Platform lets you build rich, Ajax-enabled Web applications
      by using the Eclipse development model, plug-ins with the well known
      Eclipse workbench extension points and a widget toolkit with
      <a href="http://eclipse.org/swt/" title="SWT">SWT</a> API.
      Existing RCP applications can be run as Web applications with only minor
      changes.
    </p>

    <div style="margin: 10px 0px; text-align: center;" id="screencast">

      <iframe src="http://player.vimeo.com/video/12737525?byline=0&amp;portrait=0&amp;color=ffffff" width="600" height="375" frameborder="0"></iframe>

    </div>

  </div>

  <div class="homeitem3col">
    <h3>SWT, JFace and Workbench API</h3>

    <p>
      RAP is very similar to
      <a href="http://wiki.eclipse.org/index.php/Rich_Client_Platform">Eclipse RCP</a>,
      but it has an alternative implementation of
      the SWT API (called RWT) which renders the widgets remotely in a web
      browser.
      The RAP application runs on a servlet container and clients can access
      the application with standard web browsers.
    </p>

    <div style="margin: 20px 0px; text-align: center;">
      <img src="images/about/architecture.png" alt="Architecture" />
    </div>
  </div>

  <div class="homeitem3col">
    <h3>Compatible with...</h3>

    <p>
      RAP runs out of the box in all common web browsers.
      No browser add-ons are required.
    </p>

    <div style="text-align:center;">
      <table border="0" style="margin-left:auto;margin-right:auto;">
        <tr>
          <td style="text-align: center"><img src="images/about/firefox.png" alt="Firefox 2+" style="padding: 0 10px" /></td>
          <td style="text-align: center"><img src="images/about/ie.png" alt="Internet Explorer 6+" style="padding: 0 10px" /></td>
          <td style="text-align: center"><img src="images/about/safari.png" alt="Safari 3+" style="padding: 0 10px" /></td>
          <td style="text-align: center"><img src="images/about/chrome.png" alt="Chrome 3+" style="padding: 0 10px" /></td>
          <td style="text-align: center"><img src="images/about/opera.png" alt="Opera 9+" style="padding: 0 10px" /></td>
        </tr>
        <tr>
          <td style="text-align: center">Firefox 2+</td>
          <td style="text-align: center">IE 6+</td>
          <td style="text-align: center">Safari 3+</td>
          <td style="text-align: center">Chrome 3+</td>
          <td style="text-align: center">Opera 9+</td>
        </tr>
      </table>
    </div>
    <p>
    The server part of RAP can be deployed on all Servlet Containers that
    implement the Servlet API 2.3 through 3.0. This includes Tomcat, Jetty,
    Glassfish, JBoss and WebSphere.
    </p>
  </div>

  <div class="homeitem3col">
    <h3>Single Sourcing</h3>
    <p>
      A popular use case for RAP is the development of rich clients and web
      clients from a single code base, also called <q>Single Sourcing</q>.
      This allows Java and Eclipse developers to reuse their existing skills.
      Furthermore, RAP maximizes code reuse by including the largest-possible
      web-enabled subset of the Rich Client Platform.
    </p>
  </div>

  <div class="homeitem3col">
    <h3>Feels like home</h3>
    <p>
      Developing RAP applications is very similar to traditional RCP
      development.
      Applications are developed as OSGi-bundles entirely in Java and use the
      same API and extension points than their RCP counterparts.
      You take advantage of the award winning
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
      In addition, we provide the
      <a href="/rap/downloads/">RAP Tooling</a>
      which contains useful tools, code templates and
      <a href="http://help.eclipse.org/helios/index.jsp?topic=/org.eclipse.rap.help/help/html/intro.html">documentation</a>.
      for RAP application developers.
      It simplifies the installation of the RAP target platform and the
      launching of RAP applications from Eclipse.
    </p>
  </div>
</div>

<div id="rightcolumn">

  <?php includeSidebar( "arrivals.php" ) ?>

  <?php includeSidebar( "rap-feed.php" ) ?>

  <!--?php includeSidebar( "events.php" ) ?-->

  <?php include( "contributors.php" ) ?>

  <div style="position: relative; margin-bottom: 10px;">
    <a href="http://www.eclipse.org/eclipsert/"><img alt="EclipseRT"
        src="/rap/images/logos/EclipseRT.png"
        style="position: relative; left: 55px; top: 0pt;"/></a>
  </div>

</div>

<?php

  printFooter();

?>
