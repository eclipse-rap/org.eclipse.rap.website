<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
$pageTitle 		= "RAP Project - 1.0.1 Release Notes";
$pageKeywords	= "AJAX, rap, w4t, eclipse rap";
$pageAuthor		= "Rüdiger Herrmann";

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

<div id="midcolumn">
  <h1>1.0.1 Release Notes</h1>
  <p>
  As with every service release the main aspect is to provide bug fixes which 
  didn't get into the 1.0 release. Here are some of the more noteworthy things 
  available in the service release which is now available for 
  <a href="http://www.eclipse.org/rap/downloads.php">download</a>.
  </p>
	  
  <table cellspacing="10px">
    <tr valign="top" align="left">
	  <td width="20%">
	    <b>Bugs fixed</b>
	  </td>
	  <td width="80%">
      <p style="margin: 0px">See the 
        <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=Technology&amp;product=RAP&amp;target_milestone=1.0.1&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Bug List</a>
        which contains all bugs fixed for this service release 
	      besides those fixes items not tracked by Bugzilla:</p>
	    <ul>  
  	    <li>The tree widget has experienced some major rework regarding it's 
  	    behavior with the <code>SWT.VIRTUAL</code> flag. Additionally selection 
  	    bugs, empty labels and <code>pack()</code> of <code>TreeColumn</code>s
  	    are fixed.
          </li>
  	    <li>
  	      <code>IProgressService#busyCursorWhile</code> is now blocking.</li>
        <li>
          <code>StringFieldEditor</code> of JFace now throws 
          <code>PropertyChangeEvents</code> in case of modifications.</li>
	    </ul>
      </td>
    </tr>
	<tr valign="top" align="left">
	  <td width="20%">
	    <b>Performance improvements</b>
	  </td>
	  <td width="80%">
	    <p style="margin: 0px">We addressed some critical performance issues in order to have 
	    better response times for the user of RAP applications.</p>
	  </td>
	</tr>
	<tr valign="top" align="left">
	  <td width="20%">
	    <b>National Language Suport (NLS)</b>
	  </td>
	  <td width="80%">
	    <p style="margin: 0px">The growing need for multi-language applications led us to provide 
	      NLS support in RAP. With this your application will be translated based 
	      on the locale of the user. You only need to activate it and provide the 
	      translations for your application.
	    <br />
	      With this effort we had to turn the 
	      <code>org.eclipse.jface.dialogs.IDialogConstants</code> interface 
	      into a class. This may break code that uses this type.</p>
	    <br />
	      <img src="rap-nls.png" />
	    </p>
	  </td>
	</tr>
	<tr valign="top" align="left">
	  <td width="20%">
	    <b>RWT/JFace Standalone</b>
	  </td>
	  <td width="80%">
	    <p style="margin: 0px">To have the same abilities like the original implementation of SWT 
	      and JFace you're now able to deploy RAP applications without the 
	      dependency to an OSGi implementation (e.g. Equinox). This means you can 
	      use RWT and JFace standalone without the whole bunch of bundles sitting 
	      on top like the Workbench which is useful for simple applications.
	    </p>
	  </td>
	</tr>
	<tr valign="top" align="left">
	  <td width="20%">
	    <b>Patch Fragments</b>
	  </td>
	  <td width="80%">
        <p style="margin: 0px">Many users complain about missing API which is not yet implemented 
	      in RAP. As the RAP team decided to not implement 
	      <a href="http://en.wikipedia.org/wiki/NOP">NOP</a>s we still see the 
	      need of the community in order to "single-source" applications. With 
	      patch fragments you're now able to "patch" existing RAP bundles to 
	      add classes/methods by either implementing them yourself or just 
	      having empty bodies to let your application compile. The RAP team 
	      is not proud if this solution or encourages you to do this. We just 
	      wanted have at least the possibility to do so. See 
	      <a href="http://wiki.eclipse.org/RAP/Patch_Fragments" >fragments</a> 
	      how to use this technique and use with care.
	    </p>
	  </td>
    </tr>
  </table>
  
</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
