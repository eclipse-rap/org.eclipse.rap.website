<?php

include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$PAGE_TITLE = "RAP - IP Logs";
$PAGE_NAV_POSITION = array( "documentation", "iplog" );

printHeader();

?>

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
    <li><a href="rt.rap-2.1-iplog.html">RAP 2.1 (Kepler)</a></li>
    <li><a href="rt.rap-2.0-iplog.html">RAP 2.0</a></li>
    <li><a href="rap-1.5.html">RAP 1.5 (Juno)</a></li>
    <li><a href="rap-1.4.pdf">RAP 1.4 (Indigo) (pdf)</a></li>
    <li><a href="rap-1.3.pdf">RAP 1.3 (Helios) (pdf)</a></li>
    <li><a href="rap-1.2.html">RAP 1.2 (Galileo)</a></li>
    <!--
      <li><a href="rap-ip.log">RAP 1.1 (Ganymede)</a></li>
      <li><a href="rap-ip.log">RAP 1.0</a></li>
    -->
  </ul>

</div>

<?

printFooter();

?>
