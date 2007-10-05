<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

# Begin: page-specific settings.  Change these. 
$pageTitle 		= "Rich Ajax Platform (RAP) Project";
$pageKeywords	= "Ajax, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";
	
$html = <<<EOHTML

	<div id="container">
<div id="midcolumn" style="width:93%">
	<table border="0" cellpadding="5">
     	<tr> 
      		<td valign="top">

	          	<a href="images/mylyn-2.0.png"><img alt="Mylyn 2.0 Screenshot" border=0 src="file:///C|/Dokumente und Einstellungen/Innoopract/Desktop/Uli/rap-summit2007/platzhalter.png"></a>      		</td>
      		<td>
        	<td valign="top">
        		<br>
				The RAP project aims to enable developers to build rich, Ajax-enabled Web applications by using the Eclipse development model, plug-ins with the well known Eclipse workbench extenstion points and a widget toolkit with SWT API (plus JFace). The project is in the validation phase.

				<table border="0" cellpadding="5">
					<tr height=9>	 
	          		<tr>
						<td width=20></td>

						<td><a href="/rap/newsite/community"><img border=0 src="images/community.jpg"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><font size=+1><a href="/rap/newsite/demos">Demos</a></font></td>
								</tr>
								<tr>
					          		<td>See some demos here</td>

					          	</tr>
							</table>
						</td>
	          		</tr>
	          		<tr>
						<td width=20></td>
						<td><a href="/rap/newsite/downloads"><img border=0 src="images/downloads.gif"></a></td>
						<td>
							<table border="0" cellpadding="0">

								<tr>
				          			<td><font size=+1><a href="/rap/newsite/downloads">Downloads</a></font></td>
								</tr>
								<tr>
					          		<td>Get the latest RAP release</td>
					          	</tr>
							</table>
						</td>

	          		</tr> 
	          		<tr height=11>
	          		</tr>
	         	</table>
	         	
				&nbsp;&nbsp;</font> </td>
     	</tr>
    </table>
</div>	
	<div id="rightcolumn">
    <!--
    <div class="sideitem">
      <img src="http://www.eclipse.org/images/gazoo-incubation.jpg" alt="Project is in incubation">
    </div>
	  -->
    <div class="sideitem">
      <h6>Incubation</h6><p>
      <div align="center">
        <a href="/projects/what-is-incubation.php">
          <img align="center" src="/images/egg-incubation.png" border="0"/>
        </a>
      </div>
      <div align="center">  
        This project is in the 
        <a href="/projects/dev_process/validation-phase.php">Incubation Phase</a>
      </div>
    </div>		
		<div class="sideitem">
			<h6>RAP in the news</h6>
			<ul>
				<li><a href="http://jax-award.de/jax_award06/gewinner_en.php" target="_blank">RAP wins european innovation award</a></li>
				<li><a href="http://www.eweek.com/article2/0,1895,1939964,00.asp" target="_blank">eweek - new Ajax project for eclipse</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Meet the RAP team</h6>
			<ul>
        <li><a href="http://www.eclipsecon.org/summiteurope2007/index.php?page=detail/&id=29" target="_blank">Eclipse Summit Europe, Ludwigsburg, October 10-11</a><span><br>RCP goes Web 2.0 - The Rich Ajax Platform (RAP)</span></li>				
        <li><a href="http://www.eclipsecon.org/2007/index.php?page=sub/&area=directors-choice" target="_blank">EclipseCon 2007, Santa Clara, March 5-8</a><span><br>RAP - Eclipse style development for the web</span></li>
				<li><a href="http://eclipseforumeurope.com/konferenzen/efe07/overview_sessions_eng.php?track=3#session-ewd1" target="_blank">Eclipse Forum Europe, Wiesbaden, Germany, April 23-27</a><span><br>Building Ajax applications with the Eclipse Rich Ajax Platform</span></li>
			</ul>
		</div>

	</div>
			

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
