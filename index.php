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

  <div class="sideitem">
    <h6>RAP Arrivals</h6>
    <a style="text-decoration: none;" href="/rap/downloads/">
      <div class="terminal">
        <div class="terminal-row">
          <span class="terminal-field">
            <span class="terminal-overlay"></span>
            <span class="terminal-text">RAP 1.3.2</span>
          </span>
          <span class="terminal-field">
            <span class="terminal-overlay"></span>
            <span class="terminal-text terminal-arrived">ARRIVED</span>
          </span>
        </div>
        <div class="terminal-row">
          <span class="terminal-field">
            <span class="terminal-overlay"></span>
            <span class="terminal-text">RAP 1.4</span>
          </span>
          <span class="terminal-field">
            <span class="terminal-overlay"></span>
            <span class="terminal-text terminal-arrived">ARRIVED</span>
          </span>
        </div>
        <div class="terminal-row">
          <span class="terminal-field">
            <span class="terminal-overlay"></span>
            <span class="terminal-text">RAP 1.4.1</span>
          </span>
          <span class="terminal-field">
            <span class="terminal-overlay"></span>
            <span class="terminal-text">SEPT 23</span>
          </span>
        </div>
        <div class="terminal-row">
          <span class="terminal-field">
            <span class="terminal-overlay"></span>
            <span class="terminal-text">RAP 1.4.2</span>
          </span>
          <span class="terminal-field">
            <span class="terminal-overlay"></span>
            <span class="terminal-text">FEB 24</span>
          </span>
        </div>
        <div class="terminal-row">
          <span class="terminal-field">
            <span class="terminal-overlay"></span>
            <span class="terminal-text">RAP 1.5 M1</span>
          </span>
          <span class="terminal-field">
            <span class="terminal-overlay"></span>
            <span class="terminal-text">AUG 20</span>
          </span>
        </div>
      </div>
    </a>
  </div>

  <div class="sideitem">
    <h6>Recent RAP Posts
    <a href="http://eclipsesource.com/blogs/tag/rap/feed/" class="rssIcon"><img src="/rap/images/feed.png" alt="feed"></a>
    </h6>
    <div id="rapFeed"></div>
    <script type="text/javascript">
      $( document ).ready( function () {
        $( '#rapFeed' ).rssfeed( 'http://eclipsesource.com/blogs/tag/rap/feed/', {
          limit: 4,
          header : false,
          key : "ABQIAAAADaXzprMke0eXhl5lyjwBJhQirors1Oy_y16QJctfjrSpBJX32hS_wL3O0Tk2wYierOO2_dXAoE0AMQ",
          titletag : "h5",
          date : false,
          content : true
        } );
      } );
    </script>
  </div>

  <!--
  <div class="sideitem">
    <h6>Upcoming Events</h6>
    <ul>
      <li>
        <a href="http://wiki.eclipse.org/Eclipse_DemoCamps_Indigo_2011/Muenchen"
            target="_blank">
          Eclipse DemoCamps Indigo 2011/Munich
          <br />June 20, 2011</a>
        <span>
          <ul>
            <li>Rich Ajax Platform: What's new in RAP 1.4</li>
          </ul>
        </span>
      </li>
    </ul>
  </div>
  -->

  <div class="sideitem">
    <h6>Active Contributors</h6>
    <div style="position: relative; height: 250px;">
      <a href="http://eclipsesource.com" target="_blank"
          title="EclipseSource"><img src="/rap/images/logos/EclipseSource.png"
          style="position: absolute; left: 10px; top: 10px;"/></a>
      <a href="http://www.ars.de" target="_blank"
          title="ARS"><img src="/rap/images/logos/ARS.png"
          style="position: absolute; left: 25px; top: 75px;"/></a>
      <a href="http://www.cas.de/English/Home.asp"
          target="_blank" title="CAS"><img src="/rap/images/logos/CAS.png"
          style="position: absolute; left: 145px; top: 75px;"/></a>
      <a href="http://oneandone.com" target="_blank"
          title="1&amp;1"><img src="/rap/images/logos/1_1.png"
          style="position: absolute; left: 25px; top: 141px;"/></a>
      <a href="http://www.uid.com" target="_blank"
          title="UID"><img src="/rap/images/logos/UID.png"
          style="position: absolute; left: 130px; top: 190px;"/></a>
    </div>
  </div>

  <div style="position: relative; margin-bottom: 10px;">
    <a href="http://www.eclipse.org/eclipsert/"><img alt="EclipseRT"
        src="/rap/images/logos/EclipseRT.png"
        style="position: relative; left: 55px; top: 0pt;"/></a>
  </div>

</div>

<?php

  printFooter();

?>
