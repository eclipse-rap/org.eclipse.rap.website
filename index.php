<?php

  include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

  $title = "Remote Application Platform (RAP)";
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
        alt="Eclipse.org icon" /></a>
  </div>
</div>

<div id="features">
  <div class="feature" id="ui-kit">
    <div class="icon"></div>
    <div class="feature-description">
      <h2>Widget Toolkit</h2>
      <p>
        RAP lets you develop modern web UIs with a real widget toolkit with
        <a href="http://eclipse.org/swt/" title="Standard Widget Toolkit">SWT</a> API,
        which includes powerful features like drag &amp; drop, loading data on demand, inline editing,
        and drawing.
      </p><p>
        Using the <a href="http://wiki.eclipse.org/JFace">JFace</a> APIs,
        it makes accessing complex data models incredibly simple.
        <br/><a class="popup-activate" href="">learn more...</a>
      </p>
    </div>
  </div>

  <div class="feature" id="cross-browser">
    <div class="icon"></div>
    <div class="feature-description">
      <h2>Cross Platform</h2>
      <p>
        RAP runs in all relevant web browsers, without any add-ons required.
        Many advanced features like gradients are rendered even in browsers without CSS3 support.
      </p><p>
        It's built on an open protocol, so other clients can be connected.
        <br/><a class="popup-activate" href="">learn more...</a>
      </p>
    </div>
  </div>

  <div class="feature" id="integration">
    <div class="icon"></div>
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
        <br/><a class="popup-activate" href="">learn more...</a>
      </p>
    </div>
  </div>

  <div class="stop" ></div>

  <div class="feature" id="tooling">
    <div class="icon"></div>
    <div class="feature-description">
      <h2>Tool Support</h2>
      <p>
        RAP applications are written in Java, and you have the full power of Eclipse's development
        tools at hand.
      </p><p>
        This includes a first-class UI designer and an acceptance testing tool suite available
        together with RAP 1.5.
        <br/><a class="popup-activate" href="">learn more...</a>
      </p>
    </div>
  </div>

  <div class="feature" id="clustering">
    <div class="icon"></div>
    <div class="feature-description">
      <h2>Single Sourcing</h2>
      <p>
        With RAP, you can re-use your code for different target platforms.
        Even code that has been written for Eclipse RCP can run in a web browser.
      </p><p>
        Existing Eclipse plugins such as EMF, BIRT, or JGit can easily be included in RAP apps.
        <br/><a class="popup-activate" href="">learn more...</a>
      </p>
    </div>
  </div>

  <div class="feature" id="open-source">
    <div class="icon"></div>
    <div class="feature-description">
      <h2>Open Source</h2>
      <p>
        As an Eclipse project, RAP is published under the
        <a href="http://eclipse.org/legal/epl-v10.html" title="Eclipse Public License">EPL</a>
        and benefits from the Eclipse Foundation's high standards of IP management.
      </p><p>
        RAP is part of the annual Eclipse release and always delivers on time.
        <br/><a class="popup-activate" href="">learn more...</a>
      </p>
    </div>
  </div>
  <div class="stop"></div>
</div>

<div class="popup-content" data-for="ui-kit">
  <h2>Widget Toolkit</h2>
  <p>
    With RAP, you don't create UIs with HTML and browser technologies, but with the Java API of SWT,
    the widget toolkit used in Eclipse.
    The RAP Widget Toolkit (RWT) provides a comprehensive set of powerful SWT widgets, also including
    <a href="http://www.eclipse.org/articles/printable.php?file=Article-Understanding-Layouts/index.html">layout managers</a>
    and event listeners.
    It supports advanced features such as
    <a href="http://rap.eclipsesource.com/rapdemo/examples#drag-and-drop">Drag and Drop</a> and
    <a href="http://rap.eclipsesource.com/rapdemo/examples#canvas">drawing</a>,
    and adds several web-specific features not found in SWT, like
    <a href="http://rap.eclipsesource.com/rapdemo/examples#rich-label">Markup Support</a>.
    With the JFace viewer framework, applications can easily provide access to millions of data
    entries through the use of virtual rendering and lazy loading.
    RWT can be freely styled using a CSS-based
    <a href="/rap/developers-guide/devguide.php?topic=rwt/theming.html">Theming API</a>.
  </p>
    <ul>
      <li>
        See the widgets in action:
        <a href="http://rap.eclipsesource.com/rapdemo/examples">RAP Examples Demo</a>
      </li>
      <li>
        SWT is easy to learn and nearly identical to RWT:
        <a href="http://www.eclipse.org/swt/docs.php">SWT Documentation</a>
      </li>
      <li>
        If you are already familiar with SWT, read about
        <a href="/rap/developers-guide/devguide.php?topic=rwt/differences.html">Differences between
        RWT and SWT</a>
      </li>
      <li>
       Need more widgets? A list of known Add-Ons targeted specifically at RAP can be found in the
       <a href="http://wiki.eclipse.org/RAP/Add-Ons">RAP Wiki</a> <!-- Nebula? -->
      </li>
      <li>
       Widget behavior can be enhanced using client-side event handlers:
       <a href="http://wiki.eclipse.org/RAP/Incubator/ClientScripting">RAP ClientScripting</a>
      </li>
    </ul>
    <p>
  </p>
</div>

<div class="popup-content" data-for="cross-browser">
  <h2>Cross Platform</h2>
  <p>
    The default RAP Web client supports these browsers:
  </p>
  <ul>
    <li>Internet Explorer 7+</li>
    <li>Google Chrome 7+</li>
    <li>Firefox 3.5+</li>
    <li>Safari 4+</li>
    <li>Opera 10+</li>
    <li>iOs 5+</li>
    <li>Android 3 (Limited)</li>
  </ul>
  <p>
    No browser plug-ins are required by the default client, only JavaScript needs to be enabled.
    However, custom widgets are free to build on any third-party API.
    Other browser may work if based on a Trident, Gecko or Webkit engine.
    Support on mobile browsers has
    <a href ="http://wiki.eclipse.org/RAP/Mobile_Browser">some limitations</a>.
  </p>
  <p>
    Other platforms can be supported by alternative RAP clients connecting to RAP's
    <a href="http://wiki.eclipse.org/RAP/Protocol">open protocol</a>.
    As an example, native clients for mobile platforms are available as a commercial add-on.
  </p>
</div>

<div class="popup-content" data-for="integration">
  <h2>Integration</h2>
  <p>
    Making it possible to integrate RAP with other Java technologies is one of our main objectives.
    We're doing so by making RAP compatible with JEE and OSGi and by limiting
    dependencies to the necessary minimum.
    A partial list of compatible technologies:
  </p>
  <ul>
    <li>
      RAP applications can be deployed directly as OSGi bundles on
      <a href="http://wiki.eclipse.org/RAP/Running_RAP_on_virgo">Virgo</a>,
      <a href="http://wiki.eclipse.org/RAP/Running_RAP_on_WebSphere">WebSphere</a>
      and many other application servers.
    </li>
    <li>
      If you prefer, it can also be
      <a href="/rap/developers-guide/devguide.php?topic=advanced/deployment.html">deployed</a>
      as <code>.war</code> file in a traditional servlet container like Tomcat.
    </li>
    <li>
      The
      <a href="/rap/developers-guide/devguide.php?topic=advanced/application-setup.html#compat">JEE compatibility mode</a>
      in RAP makes it possible to use
      <a href="http://wiki.eclipse.org/RAP/RWT_Cluster">clustering</a>.
    </li>
    <li>
      <a href="http://wiki.eclipse.org/RAP/Equinox_Security_Integration">Equinox Security Integration</a>
      ensures your data is safe at all times.
    </li>
  </ul>
</div>

<div class="popup-content" data-for="tooling">
  <h2>Tool Support</h2>
  <p>
    Many of the Eclipse tools designed for Java or SWT development can be used with RAP.
  </p>
  <ul>
    <li>
      You can use the full power of the
      <a href="http://www.eclipse.org/jdt">Java Development Tools</a> (JDT)
      including automated refactorings,
      <a href="http://www.vogella.com/articles/EclipseDebugging/article.html">debugger</a>,
      <a href="http://www.vogella.com/articles/JUnit/article.html">test runner</a>
      etc.
    </li>
    <li>
      The Plug-in Development Environment (PDE) assists with the creation of OSGi bundles,
      dependency management, maintaining a target platform, etc.
    </li>
    <li>
      The <a href="http://www.eclipse.org/windowbuilder/">Eclipse WindowBuilder</a> provides an
      excellent UI designer for SWT.
    </li>
    <li>
      WAR files can be created using the WAR product tools from the Libra project.
    </li>
    <li>
      Many more great add-ons are available for Java development in Eclipse such as the
      <a href="http://www.eclemma.org/">EclEmma code coverage integration</a> or
      <a href="http://findbugs.sourceforge.net/downloads.html">Findbugs for static code analysis</a>....
    </li>
  </ul>
</div>

<div class="popup-content" data-for="clustering">
  <h2>Single Sourcing</h2>
  <p>
    RAP allows you to address different platforms with a shared code base.
    Applications can be developed for the desktop, the web browser, and even mobile clients without
    duplicating code.
    Due to RAP's high compatibility with the Eclipse UI technologies, a lot of existing code
    targeted at the desktop can be re-used for your web application with minimal changes.
    And besides the code, you can also re-use your developer tools and skills.
  </p>
  <p>
    Typical scenarios are:
  </p>
  <ul>
    <li>
      Porting an existing SWT/RCP application to the web.
    </li>
    <li>
      Developing a new application that can run on the desktop and in the browser.
    </li>
    <li>
      Re-using existing libraries developed for previous applications.
    </li>
    <li>
      Utilize RCP-compatible open source libraries and frameworks. Examples:
      <ul>
        <li>
          The <a href="http://eclipse.org/modeling/emf/">Eclipse Modeling Framework</a>
          can
          <a href="http://wiki.eclipse.org/RAP/EMF_Integration">create RAP UIs</a>.
        </li>
        <li>
          Use <a href="http://eclipse.org/birt">Eclipse BIRT</a> (with
          <a href="http://wiki.eclipse.org/RAP/BIRT_Integration">some adjustments</a>)
          to create charts in RAP.
        </li>
        <li>
          <a href="/rap/users/#riena">Eclipse Riena</a>
          is an application framework which can be used on top of RAP.
        </li>
        <li>
          <a href="/rap/users/#scout">Eclipse Scout</a>
          can generate RCP and RAP applications
        </li>
      </ul>
    </li>
  </ul>
</div>

<div class="popup-content" data-for="open-source">
  <h2>Open Source</h2>
  <p>
    All code can be freely used in open source projects and in
    <a href="/rap/users/">commercial applications</a>.
    On the <a href="/rap/downloads/">downloads page</a>, you always get the latest versions.
    We also offer public nightly builds to make all changes available immediately.
    You can check out the source code directly from the <a href="/rap/source/">git repository</a>
    or even fork us on <a href="https://github.com/eclipse/rap">github</a>.
  </p>
  <p>
    If you require help beyond the <a href="/rap/developers-guide/">RAP Developer's Guide</a>,
    there is an active community maintaining a
    <a href="http://www.eclipse.org/forums/index.php?t=thread&amp;frm_id=34">Newsgroup</a>,
    a <a href="http://wiki.eclipse.org/RAP">Wiki</a> and the <a href="/rap/incubator/">Incubator project</a>.
    Bugs can be reported in the <a href="/rap/bugs/">RAP Bugzilla</a> and will be  processed
    transparently.
    Professional services are also <a href ="/rap/support/professional-services/">available</a>.
  </p>
</div>
<?php
  includeSidebar( "rap-feed-for-home.php" );
  printFooter();
?>
