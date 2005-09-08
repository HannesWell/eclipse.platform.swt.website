<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>SWT Development Resources</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="http://dev.eclipse.org/default_style.css" type="text/css">
    <link rel="stylesheet" href="swt.css" type="text/css">
    <link rel="shortcut icon" href="http://www.eclipse.org/images/eclipse.ico" type="image/x-icon">
</head>
<body bgcolor="#ffffff" text="#000000">
<table width="635px" style="border-bottom: 1px solid #000000;">
<colgroup><col width="125px"><col width="510px"></colgroup>
<tr><?php include "sidebar.php"; ?>
<td valign="top" style="padding: 10px"><h1 style="padding: 0; margin: 0; border-bottom: 1px solid #000000;">SWT Development Resources</h1>

<p>This page contains information and tools for SWT developers.</p>

<table width="100%">
<tr><th bgcolor="#0080c0" align="left" style="padding: 2px;"><font color="#ffffff">Experimental OpenGL Plug-in</font>
</table>

<p>An OpenGL plug-in has been developed and is available for download
here.  The plugin consists of a library that provides bindings for all
native OpenGL functions, and the classes that facilitate the use of
these bindings for drawing on an SWT Canvas.  Note that this plug-in is
purely experimental in nature and is not intended to be part of the
standard SWT distribution.</p>

<ul>
  <li><a href="opengl/opengl.html">org.eclipse.swt.opengl</a></li>
</ul>

<table width="100%">
<tr><th bgcolor="#0080c0" align="left" style="padding: 2px;"><font color="#ffffff">Tools</font>
</table>

<p><b>Sleak</b> is a simple tool that monitors the creation and
disposing of SWT graphics resources.</p>
<ul>
  <li><b>Sleak plug-in for Eclipse</b> <a href="tools/org.eclipse.swt.sleak_1.0.0.zip">(zip file)</a>
    <ul>
      <li>Requires Eclipse 2.1.0 or later.</li>
      <li>Extract the zip file above into the <code>eclipse/plugins/</code> folder.</li>
      <li>Extract the <code>.options</code> file from the <code>eclipse/plugins/org.eclipse.ui_&lt;version&gt;.jar/</code> archive to the <code>eclipse/</code> folder.</li>
       <li>Add the following lines to the <code>.options</code> file:<br>
           <code>org.eclipse.ui/debug=true</code>
           <br><code>org.eclipse.ui/trace/graphics=true</code></li>
       <li>Launch Eclipse with the "-clean -debug" option on the command line.</li>
    </ul>

  <li><b>Sleak for standalone applications </b><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.tools/Sleak/org/eclipse/swt/tools/internal/Sleak.java?rev=HEAD&amp;content-type=text/vnd.viewcvs-markup">(Sleak.java)</a></li>
</ul>

<p><b>JniGen</b> is a tool that generates JNI wrappers for creating the SWT Platform Interface.</p>

<ul>
  <li>Retrieve the org.eclipse.swt.tools project from dev.eclipse.org.</li>
  <li>Run the org.eclipse.swt.tools.internal.JNIGeneratorAppUI class inside the JNI Generation folder.</li>
</ul>
    
<p><b>SWT Spy plug-in</b> for Eclipse is a simple tool that prints out
information about the widget under the cursor.  Currently, this includes
style, layout and parent information.</p>

<ul>
  <li>Requires Eclipse 3.0 or later.</li>
  <li>Extract <a href="tools/org.eclipse.swt.spy_1.0.0.zip">org.eclipse.swt.spy_1.0.0.zip</a>
      into the <code>eclipse/plugins/</code> folder.</li>
  <li>Launch eclipse with "-clean" argument (clears caches so eclipse will pick up new plugin).</li>
  <li>Open the SWT Spy view (Window &gt; Show View &gt; Other ... &gt; Tools &gt; SWT Spy.</li>
  <li>Enable collection of info by clicking on the "Monitor" button in Spy view.</li>
  <li>Move cursor over the control of interest and see data printed in Spy view.</li>
  <li>To start or stop data collection while over a control, toggle the monitor action using ALT+SHIFT+".".</li>
</ul>

</table>
</body>
</html>