<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "RAP Project - Sandbox";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	<h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">Contributing to RAP development</h2>
	    <p> We welcome contributions to the RAP project. Contributions can be newsgroup posts,
	    entering qualified bugreports, providing patches, or even contributing to the development 
	    with extra components or in the main stream. 
	    Please send a message to the rap-dev@eclipse.org mailing list if you would like to contribute in one of the latter categories. 
	    </p>
	<h2 style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">Sandbox</h2>
		<p> The sandbox is a place at RAP where we make
		interesting /promising developments visible and accessible for the
		complete community.  

		The community can evaluate and use the code by checking it out from CVS. 
		Only the developers that contributed the code will take care of 
		newsgroup / mailing list questions and bugzilla bugs. 

        The sandbox content is not released with any of the RAP builds! 
        If functionality from the sandbox is broadly used by the community, 
        is mature and meets the necessary quality standards we will move 
        it out of the sandbox into the main development stream.
</p>	
      <h3 style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
        Available components
      </h3>

   <div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
      <table width="750" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="250">
            <img src="images/sandbox/pde_runtime.png" alt="PDE Runtime" style="border: 1px solid #666;"/>
          </td>
          <td width="500" valign="top">
            <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
              PDE Runtime
            </h2>
            <p>PDE Runtime is an adoption of the platform PDE Runtime code that 
              offers the Plugin Registry and the Error log.</p>
            <p>Available in <a href="cvs.php">CVS</a> at
              sandbox/org.eclipse.rap.pde.runtine</p>
          </td>
        </tr>
      </table>
   </div>
   
   <div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
      <table width="750" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="250">
            <img src="images/sandbox/gmap.png" alt="GMap component" style="border: 1px solid #666;"/>
          </td>
          <td width="500" valign="top">
            <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
              GMap
            </h2>
            <p>The Google Maps component provides a simple integration of a GMap 
              in a custom widget. This component is used as an example for the 
              "Custom widget tutorial".</p>
            <p>Available in <a href="cvs.php">CVS</a> at 
              sandbox/org.eclipse.rap.demo.gmaps</p>
          </td>
        </tr>
      </table>
   </div>
   
   <div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
      <table width="750" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="250">
            <img src="images/sandbox/maildemo_ext.png" alt="webstyle maildemo component" style="border: 1px solid #666;"/>
          </td>
          <td width="500" valign="top">
            <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
              Webstyle Maildemo
            </h2>
            <p>The Extended Maildemo adds a web style banner to the standard maildemo example.
               Styling of buttons for perspective switching and actions is implemented with 
               theming. 
              </p>
            <p>Available in <a href="cvs.php">CVS</a> at
              sandbox/org.eclipse.rap.maildemo.ext</p>
          </td>
        </tr>
      </table>
   </div>
	
   <div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
      <table width="750" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="250">
            <img src="images/sandbox/search.png" alt="search component" style="border: 1px solid #666;"/>
          </td>
          <td width="500" valign="top">
            <h2 align="left" style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
              Search
            </h2>
            <p>Search is an adoption of the <em>org.eclipse.search</em> code
              that offers a search dialog and a search result view. Clients can
              contribute search dialog pages
              (extension point 'org.eclipse.search.searchPages') and search
              result view pages
              (extension point 'org.eclipse.search.searchResultViewPages')
              to integrate their searches to the shared search user
              interface.</p>
            <p>Available in <a href="cvs.php">CVS</a> at
              sandbox/org.eclipse.rap.search</p>
          </td>
        </tr>
      </table>
   </div>	

   <div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
      <table width="750" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="250">
            <img src="images/sandbox/forms_examples.png"
              alt="Forms Examples" style="border: 1px solid #666;" />
          </td>
          <td width="500" valign="top">
            <h2
              align="left" 
              style="color:#2592c9; font-family:Arial, Helvetica, sans-serif">
              Forms Examples
            </h2>
            <p>Forms Examples is an adoption of the
              <em>org.eclipse.rap.ui.forms.examples</em> plug-in that demonstrates 
              the major features of the Elipse Forms API.
              </p>
            <p>Available in <a href="cvs.php">CVS</a> at
              sandbox/org.eclipse.rap.ui.forms.examples</p>
          </td>
        </tr>
      </table>
   </div>	
	
  </div>
  
</div>
EOHTML;


# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
