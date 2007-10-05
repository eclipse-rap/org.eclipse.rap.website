<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "RAP Project - FAQ";
$pageKeywords	= "AJAX, rap, w4t, eclipse rap";
$pageAuthor		= "Jochen Krause";

	# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

<h3>What is the goal of RAP?</h3>
<p>It is about enabling programmers to develop powerful, Ajax Web applications
"the eclipse way" - using the plug-in mechanism, a java widget toolkit
and workbench services. - without having to actually hand-code Ajax.</p>
<h3>Where does RAP play?</h3>
<p>RAP addresses the same kind of applications like RCP, and complements RCP
technology with respect to serving as a thin client for distributed
applications. RAP is targeted to enterprise applications and can be employed
independently of RCP.</p>
<h3>How does RAP compare to RCP?</h3>

<div align="left">
  <table border="1" cellpadding="3" cellspacing="0">
    <tbody><tr>
      <td>&nbsp;</td>
      <td>RCP</td>
      <td>RAP</td>
    </tr>
    <tr>

      <td>Plugin Model</td>
      <td>OSGi</td>
      <td>OSGi on the server (inside a webapp)</td>
    </tr>
    <tr>
      <td>Widget Toolkit</td>
      <td>SWT</td>

      <td>RAP Widget Toolkit (RWT)</td>
    </tr>
    <tr>
      <td>Model View Controller</td>
      <td>JFace</td>
      <td>JFace (adapted, as standard JFace has references to SWT)</td>
    </tr>

    <tr>
      <td>UI Framework</td>
      <td>Workbench</td>
      <td>Web Workbench</td>
    </tr>
  </tbody></table>
</div>
<h3>How does RAP compare to the Google Webtoolkit?</h3>

<p>
The development model of both toolkits is very similar. There are two main differences: 
</p><ol>
<li>GWT is running on an emulated java engine in the browser, RAP is mainly running on the serverside and only smartly refreshing the client by using Ajax. As a result eventhandling in GWT is on the client side (+ possible RPC calls to the server), whereas RAP relays most client-side events to the server for processing (solely ui related events can be processed on the client). </li>
<li>With RAP being mainly server side it can access the full java api and make use of OSGi inside a web container, enabling the full usage of the eclipse plugin model. Applications can contribute to a common workbench and to other plugins. It is not easy to imagine that this can be ported to run in a browser. </li>
</ol>
In essence, RAP enables a RCP-comparable approach for web applications, GWT enables a "standalone SWT" comparable approach. 

<h3>Does RAP enable my RCP applications to run on the Web without any changes?</h3>
<p>The project aims for enabling as much reuse of RCP application components as
possible. However, for the first release of RAP a part of the UI of existing RCP
applications needs to be rewritten (which means that core plug-ins can be
reused, as long as they are multi-user capable). It shall be possible to reuse
Content and Labelproviders.</p>
<h3>How are RAP and ATF related?</h3>
<p>RAP is a project focusing on an Ajax web runtime, Ajax Toolkit Framework 
(<a href="http://eclipse.org/atf">ATF</a>) focuses on tools to write applications 
for Ajax runtimes. ATF can be used to  build components (widgets) for RAP, as 
RAP is encapsulating HTML, CSS and JavaScript into java components.</p>

<h3>Why don't you use JSF as component framework?</h3>
<p>Because it is not possible - yet. JSF does currently not offer a generic
support for Ajax, and although it is possible to use JSF with Java components
only, there is no implementation available right now.</p>
<p>We believe that the core achievement of JSF is its Lifecyle handling. W4T
lifecycle handling is very closely aligned with the JSF lifecycle handling, and
it will be possible to move to JSF in the future.</p>
<h3>Can RAP be extended?</h3>
<p>Eclipse is about "extensible platforms and exemplary tools" - and
we take that seriously. The widget library can be extended with more widgets,
much the same way as SWT requires knowledge of the "native" (meaning
Ajax) technologies. As the Web Workbench will be built on the plug-in model, it
is extensible by design. </p>
</div>

EOHTML;


	# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
