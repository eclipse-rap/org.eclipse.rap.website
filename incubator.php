<?php                                                              require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");   $App   = new App();  $Nav  = new Nav();  $Menu   = new Menu();    include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle     = "RAP Project - Incubator";
$pageKeywords  = "Ajax, rap, w4t, eclipse rap";
$pageAuthor    = "Jochen Krause";

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML

<div id="maincontent">
  <div id="midcolumn">

    <h1>RAP Incubator</h1>
    <p>
      The incubator is a place at RAP where we make
      interesting / promising developments visible and accessible for the
      community.

      The community can evaluate and use the code by checking it out from CVS.
      Only the developers that contributed the code will take care of
      newsgroup / mailing list questions and bugzilla bugs.

      The incubator content is not released with any of the RAP builds!
      If functionality from the incubator is broadly used by the community,
      is mature and meets the necessary quality standards we will move
      it out of the incubator into the main development stream.
    </p>

    <h2>Available components</h2>

    <div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
      <table width="750" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td width="250">
            <img src="images/sandbox/pde_runtime.png" alt="PDE Runtime" style="border: 1px solid #666;"/>
          </td>
          <td width="500" valign="top">
            <h3>PDE Runtime</h3>
            <p>PDE Runtime is an adoption of the platform PDE Runtime code that
              offers the Plugin Registry and the Error log.
            </p>
            <p>Available in <a href="cvs.php">CVS</a> at
              sandbox/org.eclipse.rap.pde.runtine
            </p>
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
            <h3>GMap</h3>
            <p>
              The Google Maps component provides a simple integration of a GMap
              in a custom widget. This component is used as an example for the
              "Custom widget tutorial".
            </p>
            <p>
              Available in <a href="cvs.php">CVS</a> at
              sandbox/org.eclipse.rap.demo.gmaps
            </p>
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
            <h3>Search</h3>
            <p>
              Search is an adoption of the <em>org.eclipse.search</em> code
              that offers a search dialog and a search result view. Clients can
              contribute search dialog pages
              (extension point 'org.eclipse.search.searchPages') and search
              result view pages
              (extension point 'org.eclipse.search.searchResultViewPages')
              to integrate their searches to the shared search user
              interface.
            </p>
            <p>
              Available in <a href="cvs.php">CVS</a> at
              sandbox/org.eclipse.rap.search
            </p>
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
            <h3>Forms Examples</h3>
            <p>
              Forms Examples is an adoption of the
              <em>org.eclipse.rap.ui.forms.examples</em> plug-in that demonstrates
              the major features of the Elipse Forms API.
            </p>
            <p>
              Available in <a href="cvs.php">CVS</a> at
              sandbox/org.eclipse.rap.ui.forms.examples
            </p>
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
