<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.2 M6 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that will be available in the
      milestone build M6 (March 23<sup>rd</sup>, 2009).
      Meanwhile, all features listed here can be obtained from
      <a href="http://www.eclipse.org/rap/cvs.php">CVS HEAD</a>
    </p>
    <!--
    <p>Here are some of the more noteworthy things that are available in this 
      milestone build which is now available for 
      <a href="http://www.eclipse.org/rap/downloads">download</a>.
    </p>
    -->
    
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=RAP&target_milestone=1.2+M6&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>

    <p><ul>
      <!-- <li><a href="#Common">Common</a></li> -->
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#Forms">Forms</a></li>
      <li><a href="#Workbench">Workbench</a></li>
    </ul></p>
        
    <a name="RWT"></a>
    <h2>RWT</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>New API added</b></td>
        <td width="80%">
          For this milestone, we concentrated on implementing SWT API that was
          still missing in RAP.
          This will make it easier for the community to reuse existing code or
          to utilize new features.
          Here is a list of API methods added in this milestone:
          <br />
          <ul>
            <li><code>TypedEvent#display</code></li>
            <li>User data on <code>Display</code> (<code>setData( Object )</code>, 
              <code>setData( String, Object )</code>, etc.)</li>
            <li><code>Display#timerExec()</code></li>
            <li><code>Monitor</code> and its accessors like
              <code>getPrimaryMonitor()</code> on <code>Display</code> and
              <code>getMonitor()</code> on <code>Control</code></li>
            <li><code>Device#getClientArea()</code></li>
            <li><code>RowLayout#center</code></li>
            <li><code>Widget#notifyListeners()</code></li>
            <li><code>CTabFolder#getItem( Point )</code></li>
            <li><code>DateTime#setDate( int, int, int )</code></li>
            <li>sashWidth and <code>setMaximizedControl()</code> on 
              <code>SashForm</code></li>
            <li><code>Shell#forceActive()</code></li>
            <li>Selection listener on <code>Spinner</code></li>
            <li><code>TabItem#setToolTipText( String )</code></li>
            <li><code>Text#setLineHeight()</code></li>
            <li><code>setDisabledImage()</code> and <code>setHotImage()</code> 
              on <code>ToolItem</code></li>
          </ul>
        <td/>
      </tr>
      <tr valign="top" align="left">
        <td width="20%">
          <b>CCombo widget</b></td>
        <td width="80%">
          Now there is a CCombo widget that works much the same as in SWT.
          <p><img src="RAPCCombo.png" /></p>
        <td/>
      </tr>
    </table>
    
    <p>&nbsp;</p>

    <a name="Forms"></a>
    <h2>Forms</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>FormText</b></td>
        <td width="80%">
          The <code>org.eclipse.ui.forms.widgets.FormText</code> has been 
          implemented in RAP. FormText is a read-only text control that is 
          capable of rendering wrapped text. Text can be rendered as-is or 
          by parsing the formatting XML tags like <code>&lt;p&gt;</code>, 
          <code>&lt;li&gt;</code>, <code>&lt;a&gt;</code>, <code>&lt;img&gt;</code>, 
          <code>&lt;control&gt;</code> and <code>&lt;span&gt;</code>. 
          You can use the <code>FormToolkit</code> to create an instance:
          <br/>
<pre>   
  FormText formText = toolkit.createFormText( form.getBody(), true );
</pre>
          <p><img src="RAPFormText.png" ></p>
          <p>For further details please also see 
            <a href="https://bugs.eclipse.org/242213">this bug</a></p>
        <td/>
      </tr>
    </table>
    
    <p>&nbsp;</p>

    <a name="Workbench"></a>
    <h2>Workbench</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Intro support</b></td>
        <td width="80%">
          The <code>org.eclipse.ui.intro</code> extension point
          provides a generic mechanism that can be used to create your own
          intro support for your application. The main purpose of this extension
          is to define the class that implements <code>IIntroPart</code> and to
          specify the binding between a <b>branding</b> and an intro part.
          As RAP does not support products as known from RCP you can use the
          <code>org.eclipse.rap.ui.branding</code> extension point to bind your
          intro to a specific branding.
          For example, the following contribution defines a hypothetical intro
          part to be shown by the workbench on startup:
          <pre><code>
&lt;extension  
    point="org.eclipse.ui.intro"&gt;
  &lt;intro
    class="com.example.SampleIntroPart"
    id="someId"
    icon="someIcon.png"&gt;
  &lt;/intro&gt;
  &lt;introBrandingBinding
    introId="someId"
    brandingId="com.example.someBrandingId"&gt;
  &lt;/introBrandingBinding&gt;
&lt;/extension&gt;
          </pre></code>

          When starting the application for the first time the intro will appear
          in fullscreen covering the rest of the workbench window:
          <p><img src="intro_full.png"/></p>
          
          In standby mode the workbench shows the regular perspective with the
          intro on the right side:
          <p><img src="intro_standby.png"/></p>
          
          For more informations about how to use the intro extension, see
          <a href="http://help.eclipse.org/ganymede/topic/org.eclipse.platform.doc.isv/guide/ua_intro_hello_world.htm">
          Contributing a HelloWorld intro Part
          </a>
        <td/>
      </tr>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Databinding</b></td>
        <td width="80%">
          During the M6 milestone, the databinding core plug-ins were restructured.
          Like its RCP counterpart, the RAP workbench adoption has a dependency
          to core databinding and thus is affected from these changes.
          <p>Effectively, two more bundles, <code>org.eclipse.databinding.observable</code>
            and <code>org.eclipse.databinding.property</code> a now required to
            run the workbench. Please update your build scripts and launch 
            configurations accordingly.</p> 
        <td/>
      </tr>
    </table>
      
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_12M5.php">New for RAP 1.2 M5 (February 16, 2009)</a></li>
      <li><a href="news_12M4.php">New for RAP 1.2 M4 (January 12, 2009)</a></li>
      <li><a href="news_12M3.php">New for RAP 1.2 M3 (November 19, 2008)</a></li>
      <li><a href="news_12M2.php">New for RAP 1.2 M2 (October 8, 2008)</a></li>
    </ul>
    
    <p>&nbsp;</p>

</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
