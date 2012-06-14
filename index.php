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
        RAP lets you develop modern web UIs with a real widget toolkit with
        <a href="http://eclipse.org/swt/" title="Standard Widget Toolkit">SWT</a> API,
        which includes powerful features like drag & drop, loading data on demand, inline editing,
        and drawing.
      </p><p>
        Using the <a href="http://wiki.eclipse.org/JFace">JFace</a> APIs,
        it makes accessing complex data models incredibly simple.
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
  
  <div class="antifloat" ></div>

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
        As an Eclipse project, RAP is published under the
        <a href="http://eclipse.org/legal/epl-v10.html" title="Eclipse Public License">EPL</a>
        and benefits from the Eclipse Foundation's high standards of IP management.
      </p><p>
        RAP is part of the annual Eclipse release and always delivers on time.
        <!--<br/><a href="">learn more</a>-->
      </p>
    </div>
  </div>
  <div class="antifloat"></div>
</div>

<div class="popup">
  <h2>Widget Toolkit</h2>
  <p>
    The Rap Widget Toolkit (RWT) features about 40 powerful Widgets that can be freely styled using 
    the CSS-based 
    <a href = "/rap/developers-guide/devguide.php?topic=rwt/theming.html">RWT Theming API</a>.
    It also brings with it a great number of Layout Manager and UI-Events,
    supports Drag and Drop and painting, and adds several web-specific features not found in SWT. 
    The TableViwer and TreeViewer contributed by JFace can literally manage millions of entries 
    through the use of virtual rendering and lazy loading.
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
        If you are already familiar with SWT, read
        <a href="/rap/developers-guide/devguide.php?topic=rwt/differences.html">
          <q>Differences between the RAP Widget Toolkit and SWT</q>
        </a>
      </li>
      <li>
       Need more widgets? A list of known Add-Ons targeted specifically at RAP can be found in the 
       <a href="http://wiki.eclipse.org/RAP/Add-Ons">RAP Wiki</a>. <!-- Nebula? --->
      </li>
      <li>
       Widget behavior can be enhanced using client-side event handlers:
       <a href="http://wiki.eclipse.org/RAP/Incubator/ClientScripting">RAP ClientScripting</a>
      </li> 
    </ul>
    <p>
  </p>
</div>

<div class="popup">
  <h2>Cross Platform</h2>
  <p>
    The default RAP client supports:
  </p>
  <ul>
    <li>Internet Explorer 7+</li>
    <li>Firefox 3.5+</li>
    <li>Google Chrome 7+</li>
    <li>Safari 4+</li>
    <li>Opera 10+</li>
    <li>iOs 5+</li>
    <li>Android 3 (Limited)</li>
  </ul>
  <p>
    Internet Explorer 6 is supported until RAP 1.4. Other browser may work if based on 
    a Trident, Gecko or Webkit engine. JavaScript needs to be enabled. Plug-Ins are not required,
    but may be used by custom widgets. Support on mobile platforms has
    <a href ="http://wiki.eclipse.org/RAP/Mobile_Browser">some limitations</a>.
  </p>
  <p>
    Other clients than the default one are currently not part of the RAP Project itself, but 
    possible due to the <a href="http://wiki.eclipse.org/RAP/Protocol">JSON-Protocol</a> introduced in RAP 1.5.
  </p>
</div>

<div class="popup">
  <h2>Integration</h2>
  <p>
    A partial list of compatible technologies:
  </p>
  <ul>
    <li>
      RAP applications can be deployed directly as OSGi bundles on 
      <a href="http://wiki.eclipse.org/RAP/Running_RAP_on_virgo">Virgo</a>, 
      <a href="http://wiki.eclipse.org/RAP/Running_RAP_on_WebSphere">WebSphere</a> 
      and many other application server.
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

<div class="popup">
  <h2>Tool Support</h2>
  <p>
    The <a href="http://www.eclipse.org/jdt">Eclipse Java Development Tools</a> 
    (JDT) that come with the Eclipse IDE give you: 
  </p>
  <ul>
    <li>
      Code highlighting and auto-completion.
    </li>
    <li>
      JUnit, to 
      <a href="http://www.vogella.com/articles/JUnit/article.html">write unit-tests</a> 
      for your application.
    </li>
    <li>
      A powerful <a href="http://www.vogella.com/articles/EclipseDebugging/article.html">debugger</a>.
    </li>
    <li>
      And
      <a href="http://www.eclipse.org/jdt/core/index.php">more...</a>
    </li>
  </ul>
  <p>
    Many other tools designed for Java or SWT can be used with RAP.
    For example, you can use <a href="http://www.eclipse.org/windowbuilder/">Eclipse WindowBuilder</a>
    (<a href="http://www.eclipse.org/windowbuilder/download.php">installed separately</a>) 
    to design your UI, or Apache <a href="http://jmeter.apache.org/">JMeter</a>
    for 
    <a href="http://wiki.eclipse.org/RAP/LoadTesting">load testing</a>.
  </p>
</div>

<div class="popup">
  <h2>Single Sourcing</h2>
  <p>
    Due to RAPs high compatibility to SWT, JFace, Workbench and many Java libraries, 
    a lot of code targeted at the desktop can now be used for your web application. 
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
        <a href="http://wiki.eclipse.org/RAP/EMF_Integration">run on RAP</a>.
        </li>
        <li>
          Use <a href="http://eclipse.org/birt">Eclipse Birt</a> (with 
          <a href="http://wiki.eclipse.org/RAP/BIRT_Integration">some adjustments</a>
          ) to create charts in RAP.
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
   </ul>
</div>

<div class="popup">
  <h2>Open Source</h2>
  <p>
    All code can be freely used 
    <a href="/rap/users/">commercially or in open source projects</a>. It is recommended to 
    use the latest <a href="http://www.eclipse.org/downloads/">major release</a> 
    or <a href="http://www.eclipse.org/downloads/index-developer.php">milestone</a>, but if you
    want to be on the beeding edge, you can also use a <a href="/rap/downloads/">nightly build</a>
    or even check out the source code directly from the <a href="/rap/source/">git repository</a>.
  </p>
  <p>
    If you require
    help beyond the <a href="/rap/developers-guide/">RAP Developer's Guide</a>, there is an active
    community maintaining a 
    <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=34">Newsgroup</a>,
    a <a href="http://wiki.eclipse.org/RAP">Wiki</a> and the <a href="/rap/incubator/">Icubator project</a>.
    Bugs can be reported in the <a href="/rap/bugs/">RAP Bugzilla</a> and will be  processed 
    transparently. Professional services are also <a href ="/rap/support/professional-services/">available</a>.
  </p>
</div>
<?php
  includeSidebar( "rap-feed-for-home.php" );
  printFooter();
?>

