<?php

include( $_SERVER['DOCUMENT_ROOT'] . "/rap/_projectCommon.php" );

$PAGE_TITLE = "RAP 1.0 - New and Noteworthy";
$PAGE_NAV_POSITION = array( "documentation", "noteworthy" );

printHeader();
?>

  <div id="midcolumn">

<h1>RAP 1.0 - New and Noteworthy</h1>
<p>Here are some of the more noteworthy things available in the first release 
build (October 10, 2007) which is now available for 
<a href="http://www.eclipse.org/rap/downloads/">download</a>. </p>
<ul>
    <li><a href="#RAP_Common">RAP Common</a></li>
    <li><a href="#RWT">RWT</a></li>
    <li><a href="#RAP_JFace">JFace</a></li>
    <li><a href="#Workbench">Workbench</a></li>
</ul>
<a name="RAP_Common"></a>
<h2><span >RAP Common</span></h2>
<table>
  <tbody>
    <tr align="left" valign="top">
      <td width="20%"><b>RCP Namespaces</b> </td>
      <td width="80%">After many RAP users have requested it and after discussing this topic with the SWT and Platform team we have moved org.eclipse.rwt.rap to org.eclipse.swt, org.eclipse.rap.jface to org.eclipse.jface and org.eclipse.rap.ui to org.eclipse.ui package names. This should ease the task of adopting RCP code to RAP. To adjust your existing projects to the new packages you may use the organize imports functionality of eclipse.
        <p><b>Note</b>: RAP will provide a strict subset of the established API in those namespaces.</p></td>
    </tr>
  </tbody>
</table>
<hr />
<a name="RWT"></a>
<h2>RWT</h2>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>Robustness</b> </td>
    <td width="80%">Several enhancements were made to react on unexpected situations more smoothly.
      </p>
      <p>When a request is sent to an expired or otherwise invalidated session, now a (yet very basic) HTML page informs the user what happened and provides a link to restart the session. </p>
      <p>To deal with bad connections or temporarily unavailable servers, now a message box appears, that gives the user a chance to retry sending the request. </p>
      <p><img src="images/RAPConnectionErrorRetry.png" width="306" height="119" /> </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Error Handling</b> </td>
    <td width="80%">In the case of a server-side programming error that leads to an exception which is not handled by the Workbench or other error handling facilities, it is now passed to the servlet engine. The client-side reacts accordingly and displays the error page as it was sent by the servlet engine.
      </p>
      <p>In case of a JavaScript error, that occurs while the server response is being processed, an error page displays the error message along with the code that caused it. </p></td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>Text Size Determination API</b> </td>
    <td width="80%">The API that serves as replacement for the SWT-GC functionalities for text size determination has been created. The methods <code>textExtent(Font,String,int)</code>, <code>stringExtent(Font,String)</code>, <code>getCharHeight(Font)</code> and <code>getAvgCharWidth(Font)</code> are available at the class <code>org.eclipse.rwt.graphics.Graphics</code>.
      </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Table appearance</b> </td>
    <td width="80%">The <code>TableItem</code> now supports all appearance settings known from SWT. For each cell the background color, foreground color, font and image can now be defined separately.
      </p>
      <p><img src="images/RAPTableAppearance.png" alt="RAPTableAppearance.png" width="257" height="106" longdesc="RAPTableAppearance.png" /> </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Tree with columns</b> </td>
    <td width="80%">The <code>Tree</code> widget is now able to manage and display several columns per <code>TreeItem</code>. Also setting images for different cells and having nice headers are new features of the tree. As you can see on the screenshot, the default images are not needed anymore. Columns can be resized or packed to have an optimal user expierence.
      </p>
      <p><img src="images/RAPTreeColumns.png" alt="RAPTreeColumns.png" width="363" height="164" longdesc="RAPTreeColumns.png" /> </p></td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>New Table features</b> </td>
    <td width="80%">The <code>Table</code> widget now notifies about double-click events by sending a <code>SelectionListener#widgetDefaultSelected</code>.
      </p>
      <p>The column order can be queried and changed programmatically using <code>getColumnOrder()</code> and <code>setColumnOrder()</code>. Marking a column with <code>setMoveable</code> permits the user to change its order by drag and drop.
      <p>If a table is created with the <code>SWT.VIRTUAL</code> flag, <code>TableItem</code>s are only realized client-side when they become visible. Even though, in most situations, using the <code>TableViewer</code> will be more convenient, the code below shows how the <code>SetData</code> event can be used to "manually" populate a <code>VIRTUAL</code> table. </p>
      <pre>

Table table = new Table( shell, SWT.VIRTUAL );
table.addListener( SWT.SetData, new Listener() {
  public void handleEvent( final Event event ) {
    TableItem item = ( TableItem )event.item;
    int index = table.indexOf( item );
    item.setText( &quot;Item &quot; + index  );
  }
} );
table.setItemCount( 300 );
</pre>
    </td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>New widget: CLabel</b> </td>
    <td width="80%">With the new CLabel widget you can now have images and text on your label without any workaround. Additionally you can set different border styles like <code>SWT.SHADOW_IN</code> or <code>SWT.SHADOW_OUT</code>. Here is an example how it could look like:
      </p>
      <p><img src="images/RAPCLabel.png" alt="RAPCLabel.png" width="104" height="38" longdesc="RAPCLabel.png" /> </td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Cool stuff</b> </td>
    <td width="80%">By reimplementing the CoolItem and CoolBar widget we got many improvements in this area. First is that support of multiple rows in the CoolBar which is used if there is not enough space to show all the items in one row.
      </p>
      <p><img src="images/RAPCoolBarRows.png" alt="RAPCoolBarRows.png" width="362" height="97" longdesc="RAPCoolBarRows.png" /> </p>
      <p>Additionally if there is not enough space to wrap the CoolItems a chevron will be visible to have access to the invisible items. </p>
      <p><img src="images/RAPCoolBarChevron.png" alt="RAPCoolBarChevron.png" width="106" height="112" longdesc="RAPCoolBarChevron.png" /> </p>
      <p><br />
      </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Theming enhancements</b> </td>
    <td width="80%">The RAP theming infrastructure allows for further customizations of the UI.
      It is now possible to specify borders, paddings, fonts, and images in a custom theme file.
      Even custom widgets can now hook their theming into RAP using the extension point mechanism.
      </p>
      <p>Some examples: </p>
      <p><img src="images/RAPTheming_Group.png" alt="RAPTheming_Group.png" width="448" height="98" longdesc="RAPTheming_Group.png" /> </p>
      <pre>
group.frame.border: 3 double #56a0ea
group.label.font: 12 bold Arial, Helvetica, sans-serif
...
button.background: #9dd0ea
button.border: 2 #1695d4
...
</pre>
      <p><img src="images/RAPTheming_LoginDialog.png" alt="RAPTheming_LoginDialog.png" width="693" height="190" longdesc="RAPTheming_LoginDialog.png" /> </p>
      <p><br />
      </p>
      <pre>
shell.BORDER.border: 3 #1695d4
shell.title.background: #9dd0ea
shell.title.padding: 2 5 2 2
shell.padding: 5
shell.button.margin: 0 2 8 0
...
text.BORDER.border: 1 solid #1695d4
...
</pre>
      <p>For more information, see <a href="http://wiki.eclipse.org/RAP_Themeing" title="RAP Theming">RAP Theming</a>. </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Client-side widget pooling</b> </td>
    <td width="80%">RWT introduces a mechanism that helps to soften the massive memory consumption on the client.
      Many of the client-side widget are not thrown away anymore, but kept in an object pool for later reuse.
      Especially with long-running applications in the Internet Explorer browser, this can make a huge difference.
      The pooling does not include all RWT widgets now, so there is still potential for further optimization.
      </p>
      <p>Please note that this topic is work in progress and, despite extensive testing, might lead to errors under rare circumstances.
        If you experience any inexplicable behavior, please let us know. </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Text Size Determination</b> </td>
    <td width="80%">With M5 a new text size determination has been developed. For more information of the technichal background you may look at <a href="http://wiki.eclipse.org/WidgetToolkit" class="external free" title="http://wiki.eclipse.org/WidgetToolkit" rel="nofollow">http://wiki.eclipse.org/WidgetToolkit</a> - Challenges/Text Size Calculation. Note that there are still some work items left to do.
      </p>
      <p>With FireFox you can see the mechanism in action: Use <code>Ctrl +/-</code> to change font sizes. After refreshing the session (<code>F5</code>) RWT adapts to the new sizes. </p>
      <p><img src="images/Textsizedetermination.png" alt="Textsizedetermination.png" width="600" height="436" longdesc="Textsizedetermination.png" /> </p></td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>API Documentation</b> </td>
    <td width="80%">The RWT-API classes now provide Java-Doc comments. These comments are adapted from the SWT library since RWT implements a subset of SWT. The revision of the comments is not completed yet and there may be also some anticipations of implementation details that ment to be available in the 1.0 release. If you find inconsistencies in the docs, please report them to us so that we can resolve them.
      </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Untyped Events</b> </td>
    <td width="80%">RWT now supports untyped events. Note that this implementation exists for reuse of JFace and Workbench code only. If you write application code we recommend to use the typed events furthermore. Note also that there is still some work to do and that not all of the untyped event fields already provide meaningful values. In particular the <i>doit</i> flag does not work.
      </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>FontData, Resource, Device</b> </td>
    <td width="80%">There are new API-classes in RWT available. Those where needed to ease the takeover of the JFace resource package. The classes are <code>org.eclipse.swt.graphics.FontData</code>, <code>org.eclipse.swt.graphics.Resource</code> and <code>org.eclipse.swt.graphics.Device</code>. Note that the API of <code>org.eclipse.swt.graphics.Font</code> has changed, the field accessors have moved to <code>FontData</code>:
      </p>
      <pre>
  ...
  FontData data = font.getFontData()[ 0 ];
  item.setFont( Font.getFont( data.getName(),
                              data.getHeight(),
                              SWT.BOLD ) );
</pre>    </td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Apartment Threading</b> </td>
    <td width="80%">RWT simulates the <i>Apartment Threading</i> model of SWT. Because of this <code>Display</code> now provides the methods <code>getThread</code>, <code>syncExcec</code>, <code>asyncExcec</code> and <code>wake</code>. To enable UI-updates that are triggered from asynchronous server threads call <code>org.eclipse.swt.lifecycle.UICallBackUtil.activateUICallBack</code>. Accessing widget methods from non UI-Threads throws a <code>SWTException</code>. If you want to enable UI-updates all the time you may implement the <code>createUI</code> method of <code>IEntryPoint</code> like this:
      </p>
      <pre>
  public Display createUI() {
    UICallBackUtil.activateUICallBack( getClass().getName() );
    final Display result = PlatformUI.createDisplay();
    PlatformUI.createAndRunWorkbench( result, new DemoWorbenchAdvisor() );
    return result;
  }
</pre>    </td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>ProgressBar</b> </td>
    <td width="80%">RWT provides a <code>ProgressBar</code> control. It can be used to show the progress of background tasks. You may have a look at the <code>org.eclipse.rap.demo.controls.ProgressBarTab</code> class in the demo plug-in to see how to use it.
      </p>
      <p><img src="images/ProgressBar.png" alt="ProgressBar.png" width="248" height="152" longdesc="ProgressBar.png" /> </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Table enhancements</b> </td>
    <td width="80%">The <code>SWT.CHECK</code> style flag is now understood by the <code>Table</code> widget, along with the necessary methods and events to control and get notified about the checked and grayed state of <code>TableItem</code>s.
      </p>
      <p>Multi-selection can now be enabled by passing the <code>SWT.MULTI</code> style flag to the constructor. <code>setSelection(*)</code>, <code>getSelection(*)</code>, <code>select(*)</code> and <code>deselect(*)</code> will respect this flag and allow you to query and manipulate the current selection. </p>
      <p>Except for <code>setMovable()</code> (controls whether columns can be reordered) the <code>TableColumn</code> API is now complete. </p>
      <p><img src="images/RapTableEnhancements.jpeg" alt="RapTableEnhancements.jpeg" width="228" height="81" longdesc="RapTableEnhancements.jpeg" /> </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Themeing</b> </td>
    <td width="80%">An infrastructure for the themeing of RWT widgets has been implemented.
      This allows for customizing the look of RAP applications by applying a user defined theme.
      Currently, only colors and icons can be customized, but themeable fonts and borders will follow.
      For further information, have a look at <a href="http://wiki.eclipse.org/RAP_Themeing" title="RAP Themeing">RAP Themeing</a>.
      The work on themeing is still in progress, comments and suggestions are welcome.
      </p>
      <p><img src="images/RAPThemeing.png" alt="RAPThemeing.png" width="600" height="515" longdesc="RAPThemeing.png" /></p></td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>New Table features</b> </td>
    <td width="80%">The <code>Table</code> widget now notifies about double-click events by sending a <code>SelectionListener#widgetDefaultSelected</code>.
      </p>
      <p>The column order can be queried and changed programmatically using <code>getColumnOrder()</code> and <code>setColumnOrder()</code>. Marking a column with <code>setMoveable</code> permits the user to change its order by drag and drop. </p>
      <p>If a table is created with the <code>SWT.VIRTUAL</code> flag, <code>TableItem</code>s are only realized client-side when they become visible. Even though, in most situations, using the <code><a href="#RAP_JFace" title="">TableViewer</a></code> will be more convenient, the code below shows how the <code>SetData</code> event can be used to "manually" populate a <code>VIRTUAL</code> table. </p>
      <pre>

Table table = new Table( shell, SWT.VIRTUAL );
table.addListener( SWT.SetData, new Listener() {
  public void handleEvent( final Event event ) {
    TableItem item = ( TableItem )event.item;
    int index = table.indexOf( item );
    item.setText( &quot;Item &quot; + index  );
  }
} );
table.setItemCount( 300 );
</pre>
    </td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>ModifyEvent</b> </td>
    <td width="80%">RWT now supports the <code>ModifyEvent</code>. The two widgets that benefit from this are <code>Text</code> and <code>Spinner</code>.
      <p>Though implementing a <code>ModifyListener</code> does not differ from SWT as You can see below, the inner workings do differ. In contrary to SWT that sends a ModifyEvent immediately, RWT uses a delay of currently 500 ms after which the server is notified about changes.
      <pre>
  Text text = new Text( parent, RWT.SINGLE );
  text.addModifyListener( new ModifyListener() {
    public void modifyText( ModifyEvent event ) {
      // update model with changed text
    }
  } );

</pre>
    </td>
  </tr>
  <tr valign="top" align="left">
    <td><b>Spinner</b> </td>
    <td>Now there exists a <code>Spinner</code> widget that works much the same as in SWT.
      <p><img src="images/RapSpinner.png" alt="RapSpinner.png" width="250" height="97" longdesc="RapSpinner.png" /> </p></td>
  </tr>
  <tr valign="top" align="left">
    <td><b>Default Button</b> </td>
    <td>The default button was implemented, that You can now tell the Shell which of its buttons should behave as the default button. Just to have something to write for the next milestone news, the default button is not yet highlighted;) </td>
  </tr>
  <tr valign="top" align="left">
    <td><b>Shell enhancements</b> </td>
    <td>For dependent shells (aka dialog shells, those created with the <code>Shell( Shell )</code> or <code>Shell( Shell, int )</code> constructor), the <b>escape</b> key closes the shell. </td>
  </tr>
  <tr valign="top" align="left">
    <td><b>Double click</b> </td>
    <td>For <code>List</code>, <code>Tree</code>, and <code>CTabFolder</code> RWT now recognizes a double-click that is reported via the <code>widgetDefaultSelected</code> method of the <code>SelectionEvent</code>.
      <p>The screenshot below is taken from the RWT online demo, feel free to try it out yourself. <img src="images/RapDoubleClick.png" alt="RapDoubleClick.png" width="538" height="229" longdesc="RapDoubleClick.png" /> </p></td>
  </tr>
  <tr valign="top" align="left">
    <td><b>Focus control and FocusEvent</b> </td>
    <td>In this development cycle we also put our focus on the focus. The methods <code>setFocus</code>, <code>forceFocus</code>, and <code>isFocusControl</code> of the <code>Control</code> class allow You to focus a control and query whether the control has the input focus. The <code>getFocusControl</code> on class <code>Display</code> tells You which control currently has the input focus.
      <p>When adding a <code>FocusListener</code> to a control, it will be notified about <code>focusLost</code> and <code>focusGained</code> events. </p>
      <p>As of now, not all controls do visually indicate that they currently are focused. </p></td>
  </tr>
  <tr valign="top" align="left">
    <td><b>Text enhancements</b> </td>
    <td>The text widget has two new mini-features:
      <ul>
        <li> The <code>setTextLimit</code> and <code>getTextLimit</code> methods can be use to control and query the number of characters that may be entered. </li>
        <li> All methods to control the text selection like <code>setSelection</code> and <code>getSelection</code> are implemented. </li>
      </ul>
      <p>The following snippet, taken from the SelectionListener of the Show Selection button, </p>
      <pre>
  Point sel= result.getSelection();
  String selText = text.getSelectionText();
  String msg = &quot;Selection from &quot; + sel.x + &quot; to &quot; + sel.y + &quot; is &quot; + selText;
  label.setText( msg );
</pre>
      <p>leads to what is shown below </p>
      <p><img src="images/RapTextSelection.png" alt="RapTextSelection.png" width="436" height="60" longdesc="RapTextSelection.png" /> </p></td>
  </tr>
</table>

<hr />
<a name="RAP_JFace"></a>
<h2>RAP JFace</h2>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>Blocking Window</b> </td>
    <td width="80%">Due to API compatibility to RCP we implemented a solution for blocking windows and removed the <code>IWindowCallBack</code> mechanism. Note that there is still some work behind the scence to do, since the current implementation may be a little heavy weighted. See the example snippet that shows how to use the blocking mechanism with the <code>InputDialog</code>.
      <pre>
    String title = &quot;Input Dialog&quot;;
    String mesg = &quot;Enter at least five characters&quot;;
    String def = &quot;default text&quot;;
    final InputDialog dlg;
    dlg = new InputDialog( getShell(), title, mesg, def, val );
    int returnCode = dlg.open();
    if( returnCode == InputDialog.OK ) {
      inputDlgResLabel.setText( &quot;Input Result: &quot; + dlg.getValue() );
    } else {
      inputDlgResLabel.setText( &quot;No Result&quot; );
    }

</pre>
    </td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>TableViewer</b> </td>
    <td width="80%">As the underlying RWT <code>Table</code> now understands the <code>VIRTUAL</code> flag, the relevant <code>TableViewer</code> code was activated as well. Below you can see how it looks in action.
      <p><img src="images/Rap_VirtualTable_Loading.jpeg" alt="Rap_VirtualTable_Loading.jpeg" width="263" height="137" longdesc="Rap_VirtualTable_Loading.jpeg" /> <b>&gt;&gt;&gt;</b> <img src="images/Rap_VirtualTable_Done.jpeg" alt="Rap_VirtualTable_Done.jpeg" width="263" height="137" longdesc="Rap_VirtualTable_Done.jpeg" /> </p></td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>Move to JFace 3.3</b> </td>
    <td width="80%">You're reading it right - JFace 3.3 is here! This time, we used the complete
      JFace 3.3 codebase and stripped down the things not working (at the moment).
      As we can't support everything out of the box, here is a short list of things
      you can now use in your RAP application besides the already known stuff.
      <ul>
        <li> Action and Contribution infrastructure </li>
        <li> Dialogs
          <ul>
            <li> IconAndMessageDialog </li>
            <li> TrayDialog </li>
            <li> TitleAreaDialog </li>
            <li> PopupDialog </li>
            <li> ErrorDialog </li>
            <li> MessageDialogWithToggle </li>
            <li> StatusDialog </li>
            <li> ProgressIndicator </li>
            <li> ProgressMonitorDialog </li>
          </ul>
        </li>
        <li> Layouts
          <ul>
            <li> GridDataFactory </li>
          </ul>
        </li>
        <li> Resources
          <ul>
            <li> Color-, Font- and ImageRegistry </li>
          </ul>
        </li>
        <li> Viewers
          <ul>
            <li> ArrayContentProvider </li>
            <li> DecoratingLabelProvider, ILabelDecorator, LabelDecorator (only text yet) </li>
            <li> DoubleClickEvent (for Treeviewer) </li>
            <li> ViewerFilter </li>
          </ul>
        </li>
        <li> Wizard framework </li>
      </ul>
      <p>There are many more things in the JFace 3.3 codebase - just get it and play
        around with it. We're open for all bug reports regarding the (new) components. </p>
      <p>Note that some of the components (like DoubleClickEvent, ViewerFilter or the
        Wizard framework) are now part of the demo application. </p>
      <p>RAP JFace implementation related to the following packages is excluded: </p>
      <ul>
        <li> Keys &amp; Bindings </li>
        <li> Celleditors, </li>
        <li> Owner Drawing </li>
        <li> Field Assists </li>
      </ul>
      <p>Most of them will follow but there is a need for some new infrastructure first.
        At the moment, you'll find the Java files of the excluded components but they
        are commented out to avoid confusion using "Organize Imports" or "Open Type". </p>
      <p><img src="images/RAPJFaceWizard.png" alt="RAPJFaceWizard.png" width="438" height="365" longdesc="RAPJFaceWizard.png" /> </p></td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>TableViewer</b> </td>
    <td width="80%">As the underlying RWT <code>Table</code> now understands the <code>VIRTUAL</code> flag, the relevant <code>TableViewer</code> code was activated as well. Below you can see how it looks in action.
      <p><img src="images/Rap_VirtualTable_Loading.jpeg" alt="Rap_VirtualTable_Loading.jpeg" width="263" height="137" longdesc="Rap_VirtualTable_Loading.jpeg" /> <b>&gt;&gt;&gt;</b> <img src="images/Rap_VirtualTable_Done.jpeg" alt="Rap_VirtualTable_Done.jpeg" width="263" height="137" longdesc="Rap_VirtualTable_Done.jpeg" /> </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Databinding</b> </td>
    <td width="80%">Main functionalty of org.eclipse.jface.databinding has been ported to RAP.
      You can see databinding in action in the newly added perspective 'Databinding' in the RAP Demo application. Note that the databinding demo comes as a seperate plugin called <code>org.eclipse.rap.demo.databinding</code> which has to be started together with the regular workbench demo application. We would like to thank Samy Abou-Shama for his support in porting the databinding to RAP.
      <p>Here is a screenshot: </p>
      <p><img src="images/Databinding_snippet_view.jpg" alt="databinding_snippet_view.jpg" width="793" height="491" longdesc="Databinding_snippet_view.jpg" /> </p></td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>Dialogs</b> </td>
    <td width="80%">RAP JFace now includes the base classes to implement dialogs like Window, WindowManager, Dialog, and IconAndMessageDialog and provides the most often used dialogs.
      <ul>
        <li> InputDialog </li>
      </ul>
      <p><img src="images/RapInputDialog.png" alt="RapInputDialog.png" width="402" height="160" longdesc="RapInputDialog.png" /> </p>
      <ul>
        <li> MessageDialog </li>
      </ul>
      <p><img src="images/RapQuestionDialog.png" alt="RapQuestionDialog.png" width="445" height="228" longdesc="RapQuestionDialog.png" /> </p>
      <ul>
        <li> ErrorDialog </li>
      </ul>
      <p><img src="images/RapErrorDialog.png" alt="RapErrorDialog.png" width="444" height="170" longdesc="RapErrorDialog.png" /> </p>
      <p>Due to the distributed nature of RAP, the way how the result is passed back to the caller
        differs from JFace. RAP JFace provides an <code>IWindowCallback</code> interface whose <code>windowClosed</code> method is called with the returnCode as a parameter when a dialog was closed. </p></td>
  </tr>
</table>
<hr />
<a name="Workbench"></a>
<h2>Workbench</h2>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>New extension points</b> </td>
    <td width="80%">Commands can be implemented using <code>org.eclipse.ui.handlers</code>. With the <code>org.eclipse.ui.menus</code> extension point they can be placed in the main menu, view dropdown menus, context menus. They can also be added to the main toolbar, view toolbars, and various trim locations.
      The <code>org.eclipse.ui.popupMenus</code> extension point allows a plug-in to contribute to the popup menus of other views and editors.
      See <a href="http://help.eclipse.org/help33/topic/org.eclipse.platform.doc.isv/reference/extension-points/org_eclipse_ui_popupMenus.html" class="external text" title="http://help.eclipse.org/help33/topic/org.eclipse.platform.doc.isv/reference/extension-points/org_eclipse_ui_popupMenus.html" rel="nofollow">org.eclipse.ui.popupMenus</a> and <a href="http://help.eclipse.org/help33/topic/org.eclipse.platform.doc.isv/guide/workbench_cmd_menus.htm" class="external text" title="http://help.eclipse.org/help33/topic/org.eclipse.platform.doc.isv/guide/workbench_cmd_menus.htm" rel="nofollow">org.eclipse.ui.menus</a> documentation
      </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Branding</b> </td>
    <td width="80%">If you ever wanted to customize the startup page, the page title or even the servlet name you can now use the <code>org.eclipse.rap.ui.branding</code> extension point. You can specify your own branding, specify settings like page title, favicon, servletname, etc. There is also an <code>additionalHeaders</code> element available to define own tags for the head of your page like meta informations. Each branding can also be associated with specific entrypoints to apply the branding only on those ones mentioned in your <code>plugin.xml</code> file. <img src="images/RAPBranding.png" alt="RAPBranding.png" width="353" height="149" align="left" longdesc="RAPBranding.png" /></td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>DrillDownAdapter</b> </td>
    <td width="80%">Drilldown Adapters are a feature available for TreeViewers to help navigate through the data, instead of having to deal with ever expanding trees. In this way you can essentially zoom in to view just one part of the tree, i.e., drill down. Only two lines of code were added throughout the initialization of the viewer to invoke this feature in the context menu. Only one line was needed to add them to the view's toolbar. They are shown below:
      <pre>
// Create the Drill Down Adapter
drillDownAdapter = new DrillDownAdapter(viewer);

// Add the options to the view's toolbar (IToolBarManager)
drillDownAdapter.addNavigationActions(manager);
</pre>
      <p>After adding them to the IToolbarManager of your view, they are looking like this: </p>
      <p><img src="images/RAPDrillDownAdapter.png" alt="RAPDrillDownAdapter.png" width="196" height="42" longdesc="RAPDrillDownAdapter.png" /> </p></td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>Editor framework</b> </td>
    <td width="80%">The workbench implementation of RAP now really has support for the full editor infrastructure. Maybe there is one or the other little feature missing but it should work for the most situations where you need editor support. Note that we also support multi-page editors as you can see on the following screenshot:
      <p><img src="images/RAPEditors.png" alt="RAPEditors.png" width="432" height="144" longdesc="RAPEditors.png" /> </p>
      <p>Thanks to the donation of a Fortune 500 corporation we were able to acquire additional resources to have editor support implemented for M5. </p></td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>Support for opening/closing workbench parts</b> </td>
    <td width="80%">You have now several possibilities to open a new view without initially defining it in your perspective.
      On the one side, you can use <code>WorkbenchPage#showView("your.view.id")</code> to show the view.
      All necessary data gets loaded from the server automatically.
      <p>Another way is - like you know it from the Eclipse Workbench - to use the "Show View" menu. To implement
        it in your RAP application, use <code>ContributionItemFactory.VIEWS_SHORTLIST.create(IWorkbenchWindow);</code> to get a list of all view shortcuts of the current perspective which can be used in a <code>MenuManager</code>.
       But don't forget to add the commonly used views as shortcuts to your perspective
        (see <code>IPageLayout#addShowViewShortcut("your.view.id")</code>). </p>
      <p>For all the views without a shortcut, there is a "Other..." item appended to the end of the list to
        display the so loved "Show View" dialog where you can browse all available views. HINT: Now you can also
        categorize your views - just define the <code>category</code> attribute in your view extension. </p>
      <p><img src="images/RapShowViewDlg.png" alt="RapShowViewDlg.png" width="276" height="246" longdesc="RapShowViewDlg.png" /> </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Move extension points to <i>org.eclipse.ui</i> namespace</b> </td>
    <td width="80%">To provide as much as possible reuse of RCP knowledge (and code) RAP provides now its workbench extension-points under the same namespace as the RCP workbench does. This is the second step of moving RAP to a subset of RCP regarding RCP-like functionality. Note that you must adjust your existing plugin.xml files like the example below:
      <p><img src="images/RapExtensionPoint.png" alt="RapExtensionPoint.png" width="420" height="130" longdesc="RapExtensionPoint.png" /> </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Move package <i>org.eclipse.ui.entrypoint</i> to <i>org.eclipse.ui.application</i></b> </td>
    <td width="80%">Due to the efforts of making RAP-APIs a subset to RCP-APIs the package <i>org.eclipse.ui.entrypoint</i> has been renamed to <i>org.eclipse.ui.application</i> despite the fact that there is no need for implementing <i>IPlatformRunnable</i> as application definition. Please use the organize import functionality of the Eclipse IDE to adjust your existing source code.</td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Reexport of UI plug-ins</b> </td>
    <td width="80%">The plug-in <i>org.eclipse.rap.ui.workbench</i> now reexports the basic UI plug-ins that are needed for RAP UI development. This is similar to RCP. The plug-in dependencies are <i>org.eclipse.rap.w4t</i>, <i>org.eclipse.rap.rwt</i> and <i>org.eclipse.rap.jface</i>.</td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Standalone Views</b> </td>
    <td width="80%">The implementation of <code>org.eclipse.ui.IPageLayout</code> has been pursued. It is possible to add standalone views as shown in the code snippet below. The resulting perspective layout with the standalone view on the left hand side can be seen in the screenshot.
      <pre>

public class Perspective implements IPerspectiveFactory {

  public void createInitialLayout(IPageLayout layout) {
    String editorArea = layout.getEditorArea();
    layout.setEditorAreaVisible(false);
    layout.addStandaloneView(NavigationView.ID,  false, IPageLayout.LEFT, 0.25f, editorArea);
    IFolderLayout folder = layout.createFolder(&quot;messages&quot;, IPageLayout.TOP, 0.5f, editorArea);
    folder.addPlaceholder(View.ID + &quot;:*&quot;);
    folder.addView(View.ID);
    layout.getViewLayout(NavigationView.ID).setCloseable(false);
  }
}
</pre>
      <p><img src="images/StandaloneView.png" alt="StandaloneView.png" width="603" height="402" longdesc="StandaloneView.png" /> </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Dynamic part informations</b> </td>
    <td width="80%">You can now set specific part informations dynamically at runtime. This includes <code>setPartName</code>, <code>setTitle</code> and <code>setTitleToolTip</code>. Please use <code>setPartName</code> for setting the title of your view because <code>setTitle</code> is deprecated and only implemented for compatibility reasons. <code>setContentDescription</code> and <code>setTitleImage</code> are not yet available.</td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Minor usability improvement</b> </td>
    <td width="80%">It's now possible to maximize/restore view parts by double-clicking on their corresponding TabItem.</td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Multiple Views</b> </td>
    <td width="80%">We added a new method to open views multiple times. Requirement is that the view has the flag <code>allowMultiple</code> set to <code>true</code>.
      Just use the method <code>showView(viewId, secondaryId, mode)</code> of <code>IWorkbenchPage</code> to show additional instances of a view. Here is a little example:
      <pre>

  public void showAdditionalView(IWorkbenchWindow window) {
    try {
      window.getActivePage().showView(
                            &quot;org.eclipse.rap.demo.DemoBrowserViewPart&quot;,
                            &quot;two&quot; ,
                            IWorkbenchPage.VIEW_ACTIVATE );
    } catch (PartInitException e) {
      e.printStackTrace();
    }
  }

</pre>
      <p><img src="images/RAPMultipleViews.png" alt="RAPMultipleViews.png" width="297" height="60" longdesc="RAPMultipleViews.png" /></p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>IWorkbenchBrowserSupport</b> </td>
    <td width="80%">The <code>IWorkbenchBrowserSupport</code> and <code>IWebBrowser</code> interfaces along with a default implementation that meets the minimal requirements have been added to the workbench. This allows you to open URLs in a popup window.
      </p>
      <p><img src="images/RapExternalBrowser.png" alt="RapExternalBrowser.png" width="457" height="340" longdesc="RapExternalBrowser.png" /> </p>
      <p>The corresponding extension points <i>org.eclipse.ui.browser.browsers</i> and <i>org.eclipse.ui.browserSupport</i> as provided by RCP are not yet available. </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Support for ISharedImages</b> </td>
    <td width="80%">There is now the possibility to get predefined images of the workbench by using the <code>ISharedImages</code> interface. The usage could look like this:
      <pre>
action.setImageDescriptor(PlatformUI.getWorkbench().getSharedImages().
				getImageDescriptor(ISharedImages.IMG_OBJS_INFO_TSK));
</pre>
    </td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Views with local pulldown menus</b> </td>
    <td width="80%">To use the local pulldown menu of your view, simply add the actions to the <code>MenuManager</code> of your <code>ViewSite</code>.
      <pre>
getViewSite().getActionBars().getMenuManager().add(yourAction);
</pre>
      <p>In the end, this could look like this: </p>
      <p><img src="images/RAPViewMenu.png" alt="RAPViewMenu.png" width="194" height="121" longdesc="RAPViewMenu.png" /> </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Switch to RCP 3.3</b> </td>
    <td width="80%">With the switch to the RCP 3.3 codebase, there are many improvements on the workbench API. Additionally we now have a fully documented API based on the original javadoc of the Eclipse workbench.
      Another very nice feature is the support of the command and handler framework (see <a href="http://wiki.eclipse.org/Platform_Command_Framework" title="Platform Command Framework">Platform Command Framework</a> ) </td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Automatic view toolbar arrangement</b> </td>
    <td width="80%">If there is not enough space left in the TabFolder to show all the view actions, the toolbar is now automatically rearranged to use the full width of the folder.
      </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Perspective extensions</b> </td>
    <td width="80%">The RAP workbench offers you a new extension point: <code><a href="http://help.eclipse.org/help32/index.jsp?topic=/org.eclipse.platform.doc.isv/guide/workbench_advext_perspectiveExtension.htm" class="external text" title="http://help.eclipse.org/help32/index.jsp?topic=/org.eclipse.platform.doc.isv/guide/workbench_advext_perspectiveExtension.htm" rel="nofollow">perspectiveExtensions</a></code>. With this, you can contribute new views or view shortcuts to existing perspectives across several plug-ins. The extension point makes it easy to contribute additional views from other plug-ins to a perspective defined in your core UI plug-in.</td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Statusline support</b> </td>
    <td width="80%">RAP now supports the StatusLine API. Note that the statusline is visible per default. To add e.g. actions to the statusline override the <code>fillStatusLine</code> of your <code>ActionBarAdvisor</code>:
      <pre>
  protected void fillStatusLine( final IStatusLineManager statusLine ) {
    statusLine.add( aboutAction );
  }
</pre>
      <p>To hide the statusline use: </p>
      <pre>
  public void preWindowOpen() {
    IWorkbenchWindowConfigurer configurer = getWindowConfigurer();
    configurer.setShowStatusLine( false );
  [...]
</pre>
    </td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Platform UI Error Handling</b> </td>
    <td width="80%">To have an easy way to handle your exceptions during runtime, the Eclipse Platform introduced the Error Handling support. As this is an important part of every application, we now have this feature available in RAP.
      In order to let the workbench handle your exceptions, use something like the follow:
      <pre>
IStatus s = new Status(IStatus.ERROR, &quot;org.demo&quot;, &quot;This should not happen.&quot;, new NullPointerException());
StatusManager.getManager().handle(s, StatusManager.SHOW | StatusManager.LOG );
</pre>
      <p>You can specify SHOW, LOG or both. With the SHOW style bit, a nice error dialog will pop up to inform the user about the exception. </p>
      <p><img src="images/RAPStatusHandler.png" alt="RAPStatusHandler.png" width="443" height="155" longdesc="RAPStatusHandler.png" /> </p>
      <p>The logfile of your application can be found in &lt;working directory&gt;/workspace/.metadata/.log where "working directory" is the directory you specified on the "Arguments" tab of your launch configuration. </p>
      <p>Also see <a href="http://wiki.eclipse.org/Platform_UI_Error_Handling" title="Platform UI Error Handling">Platform UI Error Handling</a> for more information on this topic. </p>
      <p><br />
      </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Perspective Switcher</b> </td>
    <td width="80%">Setting <code>setShowPerspectiveBar( true );</code> of your <code>IWorkbenchWindowConfigurer</code> will result in something like this:
      <p><img src="images/RAPPerspectiveSwitcher.png" alt="RAPPerspectiveSwitcher.png" width="186" height="42" longdesc="RAPPerspectiveSwitcher.png" /> </p>
      <p><br />
      </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>ActionSets</b> </td>
    <td width="80%">The RAP workbench has now two new extension points: <code>actionSets</code> and <code>actionSetPartAssociations</code>.
      <p>While the first one should be very familiar to RCP developers, the second one provides an infrastructure to bind your action sets to specfic workbench parts. This means you can active / deactive specfic action sets only for specfic parts. See also the extension point description for <a href="http://help.eclipse.org/help32/topic/org.eclipse.platform.doc.isv/reference/extension-points/org_eclipse_ui_actionSets.html" class="external text" title="http://help.eclipse.org/help32/topic/org.eclipse.platform.doc.isv/reference/extension-points/org_eclipse_ui_actionSets.html" rel="nofollow">action sets</a> and the <a href="http://help.eclipse.org/help32/topic/org.eclipse.platform.doc.isv/reference/extension-points/org_eclipse_ui_actionSetPartAssociations.html" class="external text" title="http://help.eclipse.org/help32/topic/org.eclipse.platform.doc.isv/reference/extension-points/org_eclipse_ui_actionSetPartAssociations.html" rel="nofollow">actionSetPartAssociations</a>. </p>
      <p>Additionally you can contribute new action sets to existing perspectives with the help of <code>perspectiveExtensions</code>. </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Progress Support</b> </td>
    <td width="80%">The workbench now provides the progress API. Usage examples can be found in the demo plug-in at <code>org.eclipse.rap.demo.actions.JobAction</code> and <code>org.eclipse.rap.demo.actions.JobActionWithDialog</code>. You can find those actions in the RAP demo workbench in the <i>Planning</i> perspective.
      <p><img src="images/Jobs.png" alt="Jobs.png" width="450" height="280" longdesc="Jobs.png" /> </p>
      <p>When using the progress API you should make sure to enable the ProgressIndicator in your WindowAdvisor: </p>
      <pre>
     public void preWindowOpen() {
       IWorkbenchWindowConfigurer configurer = getWindowConfigurer();
       configurer.setShowProgressIndicator( true );
       ...
</pre>
      <p>The standard progress view is also available, you can embed it into your application like this: </p>
      <pre>
     &lt;view
           class="org.eclipse.ui.ExtensionFactory:progressView"
           icon= "icons/pview.gif"
           id="org.eclipse.ui.views.ProgressView"
           name="Progress"&gt;
     &lt;/view&gt;
</pre>
      <p><br />
      </p></td>
  </tr>
  <tr valign="top" align="left">
    <td width="20%"><b>Part Listener</b> </td>
    <td width="80%">You've now the possibility to attach an <code>IPartListener</code> or <code>IPartListener2</code> to a workbench page to stay informed about all part-related activities like when they're opened, closed, (de)activated or when they become hidden/visible.
      <p>Just use <code>IPartService#addPartListener(IPartListener)</code> as the following examples shows it: </p>
      <pre>
IWorkbenchWindow window = PlatformUI.getWorkbench().getActiveWorkbenchWindow();
window.getActivePage().addPartListener(new IPartListener2() {

	public void partActivated(IWorkbenchPartReference partRef) {
		String partId = partRef.getId());
		// do something useful
	}

	...
});
</pre>
    </td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>DrillDownAdapter</b> </td>
    <td width="80%">Drilldown Adapters are a feature available for TreeViewers to help navigate through the data, instead of having to deal with ever expanding trees. In this way you can essentially zoom in to view just one part of the tree, i.e., drill down. Only two lines of code were added throughout the initialization of the viewer to invoke this feature in the context menu. Only one line was needed to add them to the view's toolbar. They are shown below:
      <pre>
// Create the Drill Down Adapter
drillDownAdapter = new DrillDownAdapter(viewer);

// Add the options to the view's toolbar (IToolBarManager)
drillDownAdapter.addNavigationActions(manager);
</pre>
      <p>After adding them to the IToolbarManager of your view, they are looking like this: </p>
      <p><img src="images/RAPDrillDownAdapter.png" alt="RAPDrillDownAdapter.png" width="196" height="42" longdesc="RAPDrillDownAdapter.png" /> </p></td>
  </tr>
</table>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>Editor framework</b> </td>
    <td width="80%">The workbench implementation of RAP now really has support for the full editor infrastructure. Maybe there is one or the other little feature missing but it should work for the most situations where you need editor support. Note that we also support multi-page editors as you can see on the following screenshot:
      <p><img src="images/RAPEditors.png" alt="RAPEditors.png" width="432" height="144" longdesc="RAPEditors.png" /> </p>
    </td>
  </tr>
</table>
<a name="RAP_Forms"></a>
<h2><span >RAP Forms</span></h2>
<table>
  <tr valign="top" align="left">
    <td width="20%"><b>Forms Suppport</b> </td>
    <td width="80%">There is initial support for the Forms Toolkit, Forms Editors and the like. The focus was put on API compatibility and functionality rather than mimicking the exact look of RCP Forms.
      The following is a list of the things that are already available:
      </p>
      <ul>
        <li> ColumnLayout and TableWrapLayout </li>
        <li> ExpandableComposite and Section </li>
        <li> Hyperlink, ImageHyperlink (yet without actually showing the image) and HyperlinkGroup </li>
        <li> TreeNode, Twistie and their common ancestor ToggleHyperlink </li>
        <li> ScrolledPageBook </li>
        <li> Form and ScrolledForm, FormToolkit </li>
        <li> Form editors (FormEditor, FormPage, SharedHeaderFormEditor) </li>
      </ul>
      <p><img src="images/RAPFormsDemo.jpeg" alt="RAPFormsDemo.jpeg" width="326" height="287" longdesc="RAPFormsDemo.jpeg" /> </p>
  </tr>
</table>

</div>

<?

printFooter();

?>
