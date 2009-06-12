<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "RAP Project - IP Logs";
	$pageKeywords	= "Ajax, rap, eclipse rap";
	$pageAuthor		= "Ruediger Herrmann";
	
	# Paste your HTML content between the EOHTML markers!	
  $html = <<<EOHTML

  <div id="midcolumn">
    <h1>RAP Project IP Logs</h1>
    <p>Eclipse projects are required to maintain intellectual property (IP) logs 
      for each release. This page contains all such logs for the EclipseRT
      <a href="http://eclipse.org/rap">RAP</a> project. For more details on IP 
      logs, see the <a href="http://eclipse.org/projects/dev_process/project-log.php">
      Eclipse Development Process</a> documentation.</p>
    <div class="homeitem3col">
      <h3>Current IP Log</h3>
      <p>To see a draft IP log for the RAP project release currently under 
      development, view the 
      <a href="http://www.eclipse.org/projects/ip_log.php?projectid=rt.rap">
      auto-generated IP log</a>.
      Note the auto-generated log has not been reviewed for accuracy or approved 
      by the Eclipse Foundation legal team.
    </div>
    <div class="homeitem3col">
      <h3>IP Logs For Past Releases</h3>
      <p>The following are approved IP logs for past RAP project releases.</p>
      <ul>
        <li><a href="rap-1.2.html">Galileo (1.2)</a></li>
        <!--
          <li><a href="../rap-ip.log">Ganymede (1.1)</a></li>
        -->
        <li><a href="../rap-ip.log">Version 1.0</a></li>
      </ul>
    </div>
  </div>
</div>


</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
