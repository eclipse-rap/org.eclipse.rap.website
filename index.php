<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "Rich Ajax Platform (RAP)";
  $navPosition = array( "home", "index" );
  printHeader( $title, $navPosition );

?>

<div id="slideshow">
  <h1>
    Enabling modular business apps<br/>
    for desktop, browser and mobile
  </h1>
  <p>
    RAP provides a powerful widget toolkit and integrates well with proven technologies
    such as OSGi and JEE.
    You can write your application entirely in Java, re-use code and benefit from first-class IDE
    tools.
  </p>
  <div id="heading-eclipse-icon">
    <a href="http://eclipse.org/"><img
        src="/rap/images/logos/eclipse.png"
        alt="Eclipse.org icon"></a>
  </div>
</div>

<div id="features">
  <div class="feature">
    <div id="ui-kit" class="icon"></div>
    <div class="feature-description">
      <h2>Widget Toolkit</h2>
      <p>
        RAP lets you develop modern web UIs with a real widget toolkit with SWT API,
        which includes powerful features like drag & drop, loading data on demand, inline editing,
        and drawing.
      </p><p>
        Using the JFace APIs, it makes accessing complex data models incredibly simple.
        <!--<br/><a href="">learn more</a>-->
      </p>
    </div>
  </div>

  <div class="feature">
    <div id="cross-browser" class="icon"></div>
    <div class="feature-description">
      <h2>Cross Platform</h2>
      <p>
        RAP runs in all relevant web browsers, without any add-ons required.
        Many advanced features like gradients are rendered even in browsers without CSS3 support.
      </p><p>
        With a JSON-based protocol, other clients can be connected.
        <!--<br/><a href="">learn more</a>-->
      </p>
    </div>
  </div>

  <div class="feature">
    <div id="integration" class="icon"></div>
    <div class="feature-description">
      <h2>Integration</h2>
      <p>
        RAP uses standard servlet technology and runs on any JEE servlet container.
        It integrates well with OSGi, but can also be used stand-alone.
      </p><p>
        <!--
        Various Eclipse technologies build on RAP: Riena, Scout, Jubula.
        -->
        For high-availability applications, load balancing and transparent session failover is
        supported.
        <!--<br/><a href="">learn more</a>-->
      </p>
    </div>
  </div>

  <div class="feature">
    <div id="tooling" class="icon"></div>
    <div class="feature-description">
      <h2>Tool Support</h2>
      <p>
        RAP applications are written in Java, and you have the full power of Eclipse's development
        tools at hand.
      </p><p>
        This includes a first-class UI designer and an acceptance testing tool suite available
        together with RAP 1.5.
        <!--<br/><a href="">learn more</a>-->
      </p>
    </div>
  </div>

  <div class="feature">
    <div id="clustering" class="icon"></div>
    <div class="feature-description">
      <h2>Single Sourcing</h2>
      <p>
        With RAP, you can re-use your code for different target platforms.
        Even code that has been written for Eclipse RCP can run in a web browser.
      </p><p>
        Existing Eclipse plugins such as EMF, BIRT, or JGit can easily be included in RAP apps.
        <!--<br/><a href="">learn more</a>-->
      </p>
    </div>
  </div>

  <div class="feature">
    <div id="open-source" class="icon"></div>
    <div class="feature-description">
      <h2>Open Source</h2>
      <p>
        As an Eclipse project, RAP is published under the EPL
        and benefits from the Eclipse Foundation's high standards of IP management.
      </p><p>
        RAP is part of the annual Eclipse release and always delivers on time.
        <!--<br/><a href="">learn more</a>-->
      </p>
    </div>
  </div>
  <div class="antifloat"></div>
</div>

<?php
  includeSidebar( "rap-feed-for-home.php" );
  printFooter();
?>
