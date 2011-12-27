<?php  																														

include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$pageTitle = "RAP - IP Logs";
$pageKeywords = "ajax, rap, osgi, equinox, eclipse rap, equinox rap";
$pageAuthor = "The RAP Team";

$html = <<<EOHTML

<div id="midcolumn">

  <h1>RAP Project IP Logs</h1>
  
  <p>
    Eclipse projects are required to maintain intellectual property (IP) logs for each release.
    This page contains all such logs for the <a href="http://eclipse.org/rap">RAP</a> project.
    For more details on IP logs, see the
    <a href="http://eclipse.org/projects/dev_process/project-log.php">Eclipse Development Process</a>
    documentation.
  </p>

  <h3>Current IP Log</h3>
  <p>
    To see a draft IP log for the RAP project release currently under development, view the 
    <a href="http://www.eclipse.org/projects/ip_log.php?projectid=rt.rap">auto-generated IP log</a>.
    Note the auto-generated log has not been reviewed for accuracy or approved by the
    Eclipse Foundation legal team.
  </p>
  
  <h3>IP Logs For Past Releases</h3>
  <p>
    The following are approved IP logs for past RAP project releases.
  </p>
  <ul>
    <li><a href="rap-1.4.pdf">Indigo (1.4) (pdf)</a></li>
    <li><a href="rap-1.3.pdf">Helios (1.3) (pdf)</a></li>
    <li><a href="rap-1.2.html">Galileo (1.2)</a></li>
    <!--
      <li><a href="../rap-ip.log">Ganymede (1.1)</a></li>
    -->
    <li><a href="../rap-ip.log">Version 1.0</a></li>
  </ul>

</div>

EOHTML;

$navPosition = array( "documentation", "iplog" );

generateRapPage( $pageAuthor, $pageKeywords, $pageTitle, $html, $navPosition );

?>
