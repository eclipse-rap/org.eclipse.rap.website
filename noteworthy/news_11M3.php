<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP Project - New and Noteworthy";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Ruediger Herrmann";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="maincontent">
<div id="midcolumn">
  <h1>RAP 1.1 M3 - New and Noteworthy</h1>
    <p>Here are some of the more noteworthy things that will be available in the 
      milestone build M3 (April 7, 2008). All features documented here can be 
      obtained from <a href="../cvs.php">CVS HEAD</a>.</p>
    <p>
      <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=RAP&target_milestone=1.1+M3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
      This list</a> shows all bugs that were fixed during this milestone. 
    </p>
    <p><ul>
      <li><a href="#RWT">RWT</a></li>
      <li><a href="#Workbench">Workbench</a></li>
    </ul></p>

    <hr />

    <!--
    
      Consider a section with a list of minor enhancements/fixes.
      Currently there are:
      - CENTER / RIGHT alignment for Text
      - Label returns correct preferred size for empty texts
      - Support for progress bar in wizards
        
    -->
	
	<a name="RWT"></a>
	<h2>RWT</h2>
	<table>
	  <tr valign="top" align="left">
	    <td width="20%">
	      <b>UI Styling API</b></td>
	    <td width="80%">
          <b>Support for background images</b>
            <br />
            The methods <code>Control#get/setBackgroundImage()</code> allow to 
            set background images on almost all controls.
            <br />
            <img src="ShellBgImage.png" />
          <p><b>Support for transparency</b>
            <br />
            The methods <code>Composite#get/setBackgroundMode()</code> are now 
            available. Setting the background mode of a control to 
            <code>SWT.INHERIT_DEFAULT</code> lets all labels, links, checkboxes
            etc. on this composite inherit its background color and image.
            <br />
            <img src="BackgroundMode.png" />
            </p>
          <p><b>Semi-transparent Shells</b>
            <br />
            Thanks to the SWT 3.4 method <code>get/setAlpha()</code>, Shells 
            can now be semi-transparent. This feature is also useful to place 
            a shading layer below a modal dialog window as seen on some Web 
            2.0 sites.
            <br />
            <img src="AlphaShell.png" />
            </p>
	    <td/>
	  </tr>
	  
	  <tr valign="top" align="left">
	    <td width="20%">
	      <b>Theming Variants</b></td>
	    <td width="80%">
          It is now possible to define variants of widget types that can be 
          styled separately. As an example, an application that uses <code>PUSH</code> 
          buttons in a special side bar can define a variant "side-button" and 
          apply a different styling to these buttons. This styling only 
          applies to the buttons belonging to the variant and does not 
          affect any other PUSH buttons in the application.
          <p>The variant is set using the widget user data 
            (<code>Widget#setData()</code>), so the code remains 100% SWT 
            compatible.
            <br />
            <img src="ButtonVariant.png" />
          </p>	    
	    <td/>
	  </tr>
	  
	  <tr valign="top" align="left">
	    <td width="20%">
	      <b>ISettingStore</b></td>
	    <td width="80%">
	        There is a new subsystem in RWT that allows to persist user-specific
	        settings:
	        <p><code>RWT.getSettingStore().setAttribute( "myAttribute", "myValue" );</code>.</p>
	        The setting store allows to restore settings made in a previous
	        session:
	        <p><code>RWT.getSettingStore().getAttribute( "myAttribute" );</code>.</p>
	        The setting store uses browser cookies to identify the settings of 
	        previous sessions.
	        <br>
	        It is also possible to load specific settings 
	        independently from cookies:
	        <p><code>RWT.getSettingStore().loadById( "myId" )</code>.</p>
	        This is for example useful in case that certain settings should only
	        be available after the user has gone through an authentication
	        process.
	        <br>
	        Note that the setting store subsystem is used by the new
	        <code>ScopedPreferenceStore</code> implementation of the workbench.
	        <p>See API documentation for more information.</p>
	    <td/>
	  </tr>
	</table>
	
    <hr />

    <a name="Workbench"></a>
    <h2>Workbench</h2>
    <table>
      <tr valign="top" align="left">
        <td width="20%">
          <b>Support for activities</b></td>
        <td width="80%">
          The RAP Workbench now supports the <code>org.eclipse.ui.activities</code> 
          and <code>org.eclipse.ui.activitySupport</code> extension points. You 
          can control the visibility of views, editors, perspectives, menu and 
          toolbar items using activities and trigger points. See the extension 
          point documentation for details.
          <p><img src="activities.png" /></p>        
        <td/>
      </tr>
      
      <tr valign="top" align="left">
        <td width="20%">
          <b>RAP HttpContext</b></td>
        <td width="80%">
          The RAP servlet now uses its own HttpContext implementation. This
          allows other servlets to map to that context too. This enables the
          possibility to share the same session instances between those
          servlets and the RAP servlet for data exchange. 
          <p><img src="httpcontext.png" /></p>        
        <td/>
      </tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>ScopedPreferenceStore</b></td>
        <td width="80%">
          The RAP workbench provides now 
          <code>org.eclipse.ui.preferences.ScopedPreferenceStore</code> that
          allows to read and set user-specific preferences using the 
          preference mechanism provided by <code>org.eclipse.core.runtime</code>.
          The base of the storage mechanism is a subsystem of RWT represented
          by <code>org.eclipse.rwt.service.ISettingStore</code>.
          The session aware
          <code>org.eclipse.jface.preference.IPreferenceStore</code> can be
          retrieved using the method
          <code>org.eclipse.ui.plugin.AbstractUIPlugin.getPreferenceStore</code>.
          <p>See API documentation for more information.</p>
        <td/>
      </tr>

      <tr valign="top" align="left">
        <td width="20%">
          <b>Import-/Exportwizards</b></td>
        <td width="80%">
          The RAP workbench supports Import-/Exportwizard contributions to
          the extension points <code>importWizards</code> and
          <code>exportWizards</code>. See also <code>ActionFactory#IMPORT</code>
          and <code>ActionFactory#EXPORT</code> for opening the import-/export
          wizard. 
          <p><img src="import_wizard.png" /></p>        
        <td/>
      </tr>
    </table>

	<hr />
	
    <p>The above features are just the ones that are new since the last 
    milestone build. Summaries for earlier builds:</p>
    <ul>
      <li><a href="news_11M2.php">New for RAP 1.1 M2 (February 20, 2008)</a></li>
      <li><a href="news_11M1.php">New for RAP 1.1 M1 (January 7, 2008)</a></li>
    </ul>
    
    <p>&nbsp;</p>
	
</div>
</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
