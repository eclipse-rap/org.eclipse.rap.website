<?php                                                                                                                          require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");     require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     $App     = new App();    $Nav    = new Nav();    $Menu     = new Menu();        include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle         = "RAP Project - New and Noteworthy";
$pageKeywords    = "Ajax, rap, w4t, eclipse rap";
$pageAuthor        = "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.2 New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things available in 
      RAP 1.2 (June 24<sup>th</sup>, 2009) which is now available for 
      <a href="http://www.eclipse.org/rap/downloads/index.php">download</a>.
    </p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc=&bug_file_loc_type=allwordssubstr&bug_id=&bugidtype=include&chfieldfrom=&chfieldto=Now&chfieldvalue=&classification=RT&email1=&email2=&emailtype1=substring&emailtype2=substring&field-1-0-0=classification&field-1-1-0=product&field-1-2-0=target_milestone&field-1-3-0=resolution&field0-0-0=noop&keywords=&keywords_type=allwords&long_desc=&long_desc_type=allwordssubstr&product=RAP&query_format=advanced&remaction=&resolution=FIXED&short_desc=&short_desc_type=allwordssubstr&status_whiteboard=&status_whiteboard_type=allwordssubstr&target_milestone=1.2%20M2&target_milestone=1.2%20M3&target_milestone=1.2%20M4&target_milestone=1.2%20M5&target_milestone=1.2%20M6&target_milestone=1.2%20M7&target_milestone=1.2%20RC1&target_milestone=1.2%20RC2&target_milestone=1.2%20RC3&target_milestone=1.2%20RC4&target_milestone=1.2&type-1-0-0=anyexact&type-1-1-0=anyexact&type-1-2-0=anyexact&type-1-3-0=anyexact&type0-0-0=noop&value-1-0-0=RT&value-1-1-0=RAP&value-1-2-0=1.2%20M2%2C1.2%20M3%2C1.2%20M4%2C1.2%20M5%2C1.2%20M6%2C1.2%20M7%2C1.2%20RC1%2C1.2%20RC2%2C1.2%20RC3%2C1.2%20RC4%2C1.2&value-1-3-0=FIXED&value0-0-0=&votes=&order=bugs.bug_id&query_based_on=">
      This list</a> shows all bugs that were fixed. 
    </p>
    <p><ul>
      <li><a href="#Common">Common</a></li>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#Forms">Forms</a></li>
      <li><a href="#Workbench">JFace and Workbench</a></li>
      <li><a href="#Tooling">Tooling</a></li>
    </ul></p>

    <!-- horizontal space between entries -->
    <tr><td>&nbsp</td><td>&nbsp</td></tr>

    <hr />

    <a name="Common"></a>
    <h2>Common</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Jetty 6.1 and Servlet API 2.5</b></td>
        <td width="80%">
          The version of <a href="http://mortbay.org/jetty/">Jetty</a> that comes 
          packaged with RAP was updated from 5.1 to 6.1. With this change, the 
          <a href="http://java.sun.com/products/servlet/index.jsp">Servlet API</a>
          (<code>javax.servlet.*</code>) was updated to version 2.5.
          Please adjust your launch configurations accordingly and verify 
          version ranges for Import-Package and Require-Bundle directives.
          <p>For more information please see 
            <a href="https://bugs.eclipse.org/258628">bug #258628</a>.</p>
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
	    <tr><td>&nbsp</td><td>&nbsp</td></tr>
      
      <tr valign="top" align="left">
        <td width="20%">
          <b>com.ibm.icu.base</b></td>
        <td width="80%">
          <a href="http://icu-project.org/">ICU4J</a> is a set of Java libraries 
          that provides comprehensive support for Unicode, software globalization,
          and internationalization. These libraries are packaged in the plug-in 
          com.ibm.icu (about 3MB in size)
          <p>Several plug-ins like Workbench, Forms, and JFace Databinding make
            use of these libraries and so do the respective RAP apdoptions.</p>
          <p>As of this milestone, RAP uses the
            <a href="http://wiki.eclipse.org/index.php/ICU4J#Replacement_Plug-in">
              Replacement Plug-in com.ibm.icu.base</a> 
            (about 100KB in size) in order to reduce the overall size of the 
            target platform by almost 3MB.</p>
          <p>
            Since all dependencies on ICU4J are expressed by <code>Import-Package</code>
            declarations, the replacement plug-in can be easily "re-replaced" 
            if necessary.
            </p>  
        <td/>
      </tr>
    </table>

    <hr />
    
    <a name="RWT"></a>
    <h2>RWT</h2>
    <table>

      <tr valign="top" align="left">
        <td width="20%">
          <b>JavaScript Compression</b>
        </td>
        <td width="80%">
            The new implementation of Javascript compression is now available. It 
            is enabled by default, when you use the "Standard" client-side 
            library variant.
          <p>
            <img src="RuntimeConfig.png" />
          </p>
            To disable Javascript compression switch to the "Debug" library variant,
            which sets the system property <code>org.eclipse.rwt.clientLibraryVariant</code> 
            to <code>DEBUG</code> for the VM that is being launched.
          <p>
            The total size of the index page was reduced by more than 20%.</p>
          <p>
            For more information please also read the comments on
            <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=247791">
            this bug</a>.</p>
          <p />
        <td/>
      </tr>

	  <!-- horizontal space between entries -->
	  <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Cursor Support</b></td>
        <td width="80%">
          The <code>Control</code> cursor support is now available. It is fully 
          implemented in the following widgets:
	      <ul>
	        <li><code>Button</code></li>
	        <li><code>Label</code></li>
	        <li><code>CLabel</code></li>
	        <li><code>List</code></li>
	        <li><code>Composite</code></li>
	        <li><code>Canvas</code></li>
	        <li><code>Combo</code></li>
	        <li><code>Text</code></li>
	        <li><code>Spinner</code></li>
	        <li><code>Scale</code></li>
	      </ul>
	      <br />  
          To obtain an instance of <code>org.eclipse.swt.graphics.Cursor</code>, 
          you should use code like this:
          <br/><br/>
          <code>Cursor cursor = Graphics.getCursor( SWT.CURSOR_CROSS );
            <br/>
            control.setCursor( cursor );</code>
	      <br />  
          <img src="RAPCustomCursor.png" />
	      <br />  
          As with all resources in RWT, the <code>Cursor</code> instances are 
          shared among sessions. That's why, there is no <code>Cursor#dispose()</code>
          method available.
          <p />
        <td/>
      </tr>
	
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Scale Widget</b></td>
        <td width="80%">
          Now there exists a <code>Scale</code> widget that works much the 
          same as in SWT.
          <p>
            <img src="RAPScale.png" /></p>
          <p />
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>DateTime Widget</b></td>
        <td width="80%">
          The long awaited <code>DateTime</code> widget is now available. Using
          the style flags <code>SWT.DATE</code>, <code>SWT.TIME</code>, 
          <code>SWT.CALENDAR</code> and <code>SWT.SHORT</code>, <code>SWT.MEDIUM</code>, 
          <code>SWT.LONG</code> you can switch the widget mode. Additionally 
          the <code>DateTime</code> widget goes by the locale from 
          <code>RWT#getLocale()</code> to display the day and month names in 
          your preferred language.
          <p>
            <img src="RAPDateTime.png" />
          </p>
          <p />
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>ExpandBar Widget</b></td>
        <td width="80%">
          RWT provides an <code>ExpandBar</code> control. It can be used to 
          represent a category or group of elements.
          You may have a look at the <code>org.eclipse.rap.demo.controls.ExpandBarTab</code>
          class in the demo plug-in to see how to use it. 
          <p>
            <img src="RAPExpandBar.png" /></p>
          <p />
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>MessageBox</b></td>
        <td width="80%">
	      With a standard SWT <code>MessageBox</code> you can display a message
	      dialog without using JFace.
	      <p>
	        <img src="RAPMessageBox.png" /></p>
	      The same style flag combinations like in SWT are available:
	      <ul>
	        <li><code>SWT.OK</code></li>
	        <li><code>SWT.OK | SWT.CANCEL</code></li>
	        <li><code>SWT.YES | SWT.NO</code></li>
	        <li><code>SWT.YES | SWT.NO | SWT.CANCEL</code></li>
	        <li><code>SWT.RETRY | SWT.CANCEL</code></li>
	        <li><code>SWT.ABORT | SWT.RETRY | SWT.IGNORE</code></li>
          </ul>  
          <p />
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Generic CSS Theming Engine</b></td>
        <td width="80%">
          With a new, entirely CSS-based theming infrastructure, RWT can now
          render styles defined in CSS theme files directly.
          CSS themes are no longer translated to properties internally and are
          thus fully supported now.
          As an example, for widgets that support the <code>:hover</code> state,
          it is now possible to change <em>any</em> property on mouseover,
          which has not been possible before:
          <pre><code style="color: #0000ff">
  Button[PUSH]:hover {
    font: bold 12px Helvetica;
    color: white;
    background-color: #1695d4;
    border: 2px solid #9dd0ea;
  }
          </code</pre>
          This change is an important foundation for the further improvement
          of the themeability of RWT widgets.
          Theming based on property files is still supported in this milestone,
          but it will be discontinued in M4.
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Improvement of Session Startup Performance</b>
        </td>
        <td width="80%">
            The current version provides improvements regarding the session
            startup performance. First the creating of the startup page is less
            CPU intensive. Second the javascript library content is not embbeded
            in the startup page anymore. It is delivered separately. As the
            library content doesn't change after server start it can be zipped
            once and buffered. This reduces CPU usage significantly. The library
            is stored in the browser's cache and need not to be reloaded on
            subsequent application visits.
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>qooxdoo 0.7.4</b></td>
        <td width="80%">
          This milestone build includes a new version of the Javascript library
          <a href="http://qooxdoo.org">qooxdoo</a>.
          Thanks to the great support by the RAP community,
          most notably from Stefan Hansel
          who tracked down a number of significant memory leaks in qooxdoo and
          provided patches to the qooxdoo developers,
          this version now brings a major improvement in client memory
          consumption.
          With this qooxdoo version, the long-standing memory leakage problems
          of RAP escpecially in Internet Explorer are resolved.
          <p>
          Thanks to everyone who helped making this possible!
          </p>
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Slider widget</b></td>
        <td width="80%">
          Now there exists a Slider widget that works much the same as in SWT.
          A Slider is a control that looks like a scrollbar and represents a
          continuous range of numeric values.
          The range can be specified by the methods <code>#setMinimum()</code>
          and <code>#setMaximum()</code>.
          The current value can be obtained using <code>#getSelection()</code>.
          <p>
            <img src="RAPSlider.png" />
          </p>
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Theming</b></td>
        <td width="80%">
          Since the new theming infrastructure is now in place, we worked on
          making more aspects of widgets themeable.
          The list below details out which aspects can now be altered.
          <ul>
            <li>The background image of <code>Button</code>s can be altered</li>
            <li>This CSS code defines a <em>handle</em> for the <code>Sash</code>
              widget.
              <br />
<pre>
Sash-Handle:horizontal {
  <span style="color:blue;">background-image</span>: url( <span style="color:#568c28;">"/theme1/icons/sash/h_handle.gif"</span> );
}
Sash-Handle:vertical {  
  <span style="color:blue;">background-image</span>: url( <span style="color:#568c28;">"/theme1/icons/sash/v_handle.gif"</span> );
}</pre>         
            </li>
            <li>
              The border style as well as the appearance of the drop-down button of a 
              Combo widget can be changed like shown below.
              <br />
<pre>
Combo {
  <span style="color:blue;">border</span>: <span style="color:#568c28;">1px solid #1695d4</span>;
}

Combo-Button { 
  <span style="color:blue;">background-image</span>: url( <span style="color:#568c28;">"/theme1/icons/combo/down.gif"</span> );
  <span style="color:blue;">background-color</span>: <span style="color:#568c28;">#9dd0ea</span>;
}</pre>             
            </li>
            <li>
              The handle image of <code>Coolbar</code>s
            </li>
            <li>
              The various buttons of the <code>DateTime</code>, <code>ExpandBar</code>
              and <code>Spinner</code> widget.
            </li>
            <li>
              The border color of the <code>CTabFolder</code>.
            </li>
            <li>
              The radio, check box and cascade images of <code>Menu</code>s
            </li>
            <li>
              The check box images of the <code>Tree</code> and <code>Table</code> 
              widget.
            </li>
          </ul>
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>ColorDialog</b></td>
        <td width="80%">
          SWT's ColorDialog has been implemented for RWT.
          <br />
<pre><code>
ColorDialog dialog = new ColorDialog( shell );
RGB result = dialog.open();
</code></pre>
          <img src="color-dialog.png"/>
          <p>&nbsp;</p>
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Button widget</b></td>
        <td width="80%">
          The <code>Button</code> widget has been reworked. Now there are 
          custom implementations for check boxes and radio buttons The new 
          features are:
          <li>The method <code>Button#setGrayed()</code> is implemented for a 
            check box behavior that works much the same as in SWT.
            <br />
            <img src="RAPCheckGrayed.png" />
          </li>
          <li>Hover state is implemented for both radio and check buttons.
          </li>
          <li>Images are used for check and radio icons and can be defined via 
            theming for the default, selected, hover and grayed (only check box) 
            state. 
            These are examples for setting the state images for the default 
            state of a radio button and for the combined selected and grayed 
            state of a check button:
<pre>
Button-RadioIcon {
  <span style="color:blue;">background-image</span>: url( <span style="color:#568c28;">resource/widget/rap/button/radio-unselected.png</span> );
}

Button-CheckIcon:selected:grayed {
  <span style="color:blue;">background-image</span>: url( <span style="color:#568c28;">resource/widget/rap/button/check-grayed.png</span> );
}
</pre>
          </li>
          <li>The <code>Button#setImage()</code> method now works as in SWT.
            <br />
            <img src="RAPCheckImage.png" />
          </li>
        </td>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Themeable System Images</b></td>
        <td width="80%">
          The system images used for SWT MessageBox and JFace MessageDialog can
          now be customized via theming. These images can also be acquired from
          <code>Display#getSystemImage()</code>.
          <pre><code>
Display {
  rwt-error-image: url( /theme1/icons/dialog/error.png );
  rwt-information-image: url( /theme1/icons/dialog/information.png );
  rwt-warning-image: url( /theme1/icons/dialog/information.png );
  rwt-question-image: url( /theme1/icons/dialog/question.png );
  rwt-warning-image: url( /theme1/icons/dialog/warning.png );
}
          </code></pre>
          <p><img src="CustomSystemImages.png"/></p>
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

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
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>CCombo widget</b></td>
        <td width="80%">
          Now there is a CCombo widget that works much the same as in SWT.
          <p><img src="RAPCCombo.png" /></p>
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Table improvements</b></td>
        <td width="80%">
          <p>
          The Table widget has received a lot of bugfixes and improvements
          during this milestone.
          Fonts, backgrounds and foreground colors are now supported properly
          for the entire table, for table items and also for single cells.
          Unnessesary scroll bars are not drawn anymore.
          Together with alternating row colors and cell padding, which had
          already been added in M6, the table fits much better into modern
          web applications.
          Moreover, we added some significant performance improvements.
          </p>
          <p><img src="TableImprovements.png" /></p>
        </td>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Label theming</b></td>
        <td width="80%">
          <p>
          The CSS property <code>text-decoration</code> has been added for the
          Label widget.
          Permissible values are <code>underline</code>, <code>overline</code>,
          <code>line-through</code>, and <code>none</code>.
          </p>
          <p><img src="LabelUnderline.png" /></p>
        <td/>
      </tr>
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Group theming</b></td>
        <td width="80%">
          <p>
          The foreground and background colors of the Group widget's label are
          now separately themeable to allow a more flexibile styling.
          </p>
          <p><img src="GroupLabelTheming.png" /></p>
        </td>
      </tr>
      
    </table>
    
    <hr />
    
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
    
    <hr />

    <a name="Workbench"></a>
    <h2>JFace and Workbench</h2>
    <table>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Cell Editors</b>
        </td>
        <td width="80%">
          With the implementation of JFace cell editors, including all the
          necessary event handling, RAP can now offer editing support for JFace
          viewers.
          There's still one tough issue remaining, that relates to the way the
          Firefox browser handles key events.
          However, the API is available and cell editors are basically working.
          <p>
            <img src="RAPTableCellEditor.png" />
          </p>
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

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
      
      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Databinding</b></td>
        <td width="80%">
          During the M6 milestone, the databinding core plug-ins were restructured.
          Like its RCP counterpart, the RAP workbench has a dependency
          to core databinding and thus is affected from these changes.
          <p>Effectively, two more bundles, <code>org.eclipse.databinding.observable</code>
            and <code>org.eclipse.databinding.property</code> are now required to
            run the workbench. Please update your build scripts and launch 
            configurations accordingly.</p> 
        <td/>
      </tr>

      <!-- horizontal space between entries -->
      <tr><td>&nbsp</td><td>&nbsp</td></tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>New look&nbsp;and&nbsp;feel</b></td>
        <td width="80%">
          <p>
          With the help of a user interface design company, we developed a new
          look and feel that provides a professional, serious look for RAP
          applications.
          This implementation uses the new interaction design API, which brings
          more flexibity to modifying the workbench presentation and allows to
          completely separate the styling from the application code
          (see the RAP help for details).
          </p>

          <p>
          The new design is meant to demonstrate the styling capabilities of
          RAP and serve as an example and a template for your application.
          It is included in the plug-in
          <code>org.eclipse.rap.design.example</code>
          and can be applied to an existing application by simply adding this
          bundle and using <code>business</code> as the servlet name.
          </p>

          <p>
          The development is not quite complete, some improvements will still
          be made before the release.
          </p>
          <p><img src="BusinessDesign50.png" /></p>
        </td>
      </tr>

    </table>

    <hr />

    <a name="Tooling"></a>
    <h2>Tooling</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Launch without opening browser</b>
        </td>
        <td width="80%">
          The RAP launcher now allows to disable the startup of a browser on
          every launch. This comes in handy when working with fixed ports and
          an external browser.
          <p>
            <img src="RAPLauncherOpenBrowser.png" />
          </p>
        <td/>
      </tr>
    </table>

</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
