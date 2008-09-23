<?php  																														
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());
	$pageTitle 		= "RAP Project - Team";
	$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
	$pageAuthor		= "Jochen Krause";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	  <h1>Team</h1>
		<div class="homeitem3col">
		    <h3>Committers</h3>
			<ul>
				<li>
                  Frank Appel (<a href="http://innoopract.com">Innoopract Informationssysteme GmbH</a>)</a>
                </li>
				<li>
                  Istvan Ballok (<a href="http://www.cas.de/">CAS Software</a>)
				</li>
				<li>
                  Jordi Böhme López (<a href="http://innoopract.com">Innoopract Informationssysteme GmbH</a>)
				</li>
                <li>
                  Ivan Furnadjiev(<a href="http://innoopract.com">Innoopract Informationssysteme GmbH</a>)
                </li>
				<li>
                  R&uuml;diger Herrmann (<a href="http://innoopract.com">Innoopract Informationssysteme GmbH</a>)
                </li>
				<li>
                  Jochen Krause (<a href="http://innoopract.com">Innoopract Informationssysteme GmbH</a>)
				</li>
				<li>
                  Benjamin Muskalla (<a href="http://innoopract.com">Innoopract Informationssysteme GmbH</a>)
				</li>
				<li>
				  Stefan R&ouml;ck (<a href="http://www.cas.de/">CAS Software</a>)
				</li>
				<li>
                  Ralf Sternberg (<a href="http://innoopract.com">Innoopract Informationssysteme GmbH</a>)
				</li>
                <li>
                  Elias Volanakis (<a href="http://innoopract.com">Innoopract Informationssysteme GmbH</a>)
                </li>
			</ul> 
		</div>
	</div> 
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
