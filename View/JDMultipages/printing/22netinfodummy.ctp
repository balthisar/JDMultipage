<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Getting to Business : Define Dummy Printer'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Getting Down to Business</h1>
	<h2>Use NetInfo Manager to Define a Dummy Print Center Printer</h2>

	<div>
		<p>
			Next, we need to use NetInfo Manager (shown below) to define a printer
			for use in the Mac OS Print Center. This will be a dummy printer in the
			respect that you’ll go through the actions of printing to it in the Mac
			OS, but this printer won’t represent a real device; it will, however,
			generate the PostScript that we need.
		</p>
		<figure>
			<img src="/img/printing/netinfo1.jpg" alt="Navigating in NetInfo">
			<figcaption>Figure 1 - Finding <samp>/Printers</samp> in NetInfo</figcaption>
		</figure>
		<p>
			Start up the program “NetInfo Manager” in Mac OS. Be sure to
			“Click the lock to make changes.” A standard Mac OS
			authentication panel will ask you to authenticate yourself with an
			administrator name and password.
		</p>
		<p>
			As you can see, the top portion of the NetInfo Manager is similar to the
			column view in the Finder. The left-most column will merely be
			<samp>/</samp>, indicating your current, local computer. Paths in NetInfo
			are analogous to paths in the Finder. As such, find and select the path
			<samp>/Printers</samp>, as shown in <em>Figure 1</em> to the left.
			The printer we’re going to add will be in this NetInfo “directory.”
		</p>
	</div>

	<div>
	   <p>
		 Let’s create the printer now. From the <samp>Directory</samp> menu, choose
		 <samp>New Subdirectory</samp>. In the <samp>/Printers</samp> directory you
		 should see <samp>new_directory</samp>. This will be our NetInfo
		 printer that we’ll later add to the Print Center.
	   </p>
	   <figure>
		  <img src="/img/printing/netinfo2.jpg" alt="Adding new “directory” to NetInfo">
		  <figcaption>Figure 2 - <samp>new_directory</samp> has been created.</figcaption>
	   </figure>
	   <p>
		 Now we want to add “properties” to this directory. Select
		 <samp>new_directory</samp>, and you’ll notice in the lower
		 pane that the property <samp>name</samp> already exists, with
		 the value <samp>new_directory</samp>. You can edit property
		 names and/or values by double-clicking them, and then editing them the
		 normal, Macintosh way. If you change the property value of <samp>name</samp>,
		 for example, you’ll see that the directory name
		 <samp>/Printers/new_directory</samp> changes to the new
		 <samp>name</samp> you’ve assigned (after saving your changes, that is).
	   </p>
	</div>

	<div>
	   <p>
		 To create a new property, make sure the lower pane (the properties) is focused
		 (selected for input), and choose <samp>New Property</samp> in
		 the <samp>Directory</samp> menu.
	   </p>
	   <p>
		 Add and edit properties for this printer so that it has all of the properties and
		 values shown in the table below. Note that they’re all case sensitive, but
		 the top-to-bottom order is of no particular importance.
	   </p>

	   <table>
		  <thead>
			 <tr><td colspan="2">Printer Definition for your <samp>new_directory</samp></td></tr>
		  </thead>
		  <tbody>
			 <tr>
				<td>name</td>
				<td>ghostscript</td>
			 </tr>
			 <tr>
				<td>sd</td>
				<td>/var/spool/lpd/ghostscript</td>
			 </tr>
			 <tr>
				<td>lo</td>
				<td>lock</td>
			 </tr>
			 <tr>
				<td>lp</td>
				<td>/dev/null</td>
			 </tr>
			 <tr>
				<td>ppdurl</td>
				<td>/usr/local/lib/lpd/GhostScript.ppd</td>
			 </tr>
			 <tr>
				<td>if</td>
				<td>/usr/local/lib/lpd/lpd.filter</td>
			 </tr>
			 </tbody>
	   </table>
	</div>

	<div>
	   <p>
		 You’ll notice that when you assign the <samp>name</samp>
		 property and save your work, the “file” name in the upper pane
		 changes to the name property that you’ve set, such that if you use the
		 name I’ve provided, you’ll have this NetInfo path: <samp>/Printers/ghostscript</samp>
	   </p>
	   <figure>
		  <img src="/img/printing/netinfo3.jpg" alt="NetInfo Manager with printer definition">
		  <figcaption>Figure 3 - complete <samp>ghostscript</samp> printer definition.</figcaption>
	   </figure>
	   <p>
		 You can see a complete example of the definition for the printer
		 <samp>ghostscript</samp> in NetInfo at <em>Figure 3</em>, left.
	   </p>
	   <p>
		 From now on, I’ll refer to this printer as <samp>ghostscript</samp>.
		 The printer <samp>ghostscript</samp> will be the printer we add to Print Center;
		 it will be the virtual printer that you go through the motions of printing to
		 in Mac OS X, and will show up in the Print Center as <samp>ghostscript</samp>.
		 You may not want to call your printer <samp>ghostscript</samp>, especially if you’d
		 prefer something a little more descriptive. Feel free to use the name you prefer
		 instead. If you <em>do</em> change the name, you should use the same name the
		 same for both the <samp>sd</samp> and the <samp>name</samp> properties, though.
		 Also, be aware that in the rest of this article, I will continue referring to
		 the <samp>name</samp> and <samp>sd</samp> as <samp>ghostscript</samp>, so do your
		 own conversion if you change the name. Also, if you use your own name, avoid
		 the use of spaces or punctuation, and you’re probably better off if you keep
		 everything lower-case.
	   </p>
	</div>

	<div>
	   <p>
		 If you want to know what these properties mean, type <samp>man printcap</samp>
		 from a terminal window. Note that while we’re not using <samp>printcap</samp>,
		 the same properties apply (Darwin uses NetInfo instead of <samp>printcap</samp>
		 and a lot of other <samp>/etc</samp> files). Here are some of the highlights, though
		 (some of these didn’t appear in the table above, but will appear in the next section):
	   </p>

	   <table>
		  <thead>
			 <tr>
				<td colspan=2>Selected <samp>printcap</samp> entry descriptions</td>
			 </tr>
		  </thead>
		  <tbody>
		  <tr>
			 <td>sd</td>
			 <td>
				The <em>s</em>pool <em>d</em>irectory where BSD puts temporary files waiting for processing.
			 </td>
		  </tr>

		  <tr>
			 <td>lo</td>
			 <td>
				The name of <em>lo</em>ck file according to the printcap man page. I have no idea what this is for.
			 </td>
		  </tr>

		  <tr>
			 <td>name</td>

			 <td>
				   <em>Name</em> of printer. This name will be used by both the Print Center and the LPD system.
			 </td>
		  </tr>

		  <tr>
			 <td>of</td>
			 <td>
				The path to the <em>o</em>utput <em>f</em>ilter, which is a list (script) of Unix
				commands that we’re going to perform on the PostScript before sending it
				to a printer.
			 </td>
		  </tr>

		  <tr>
			 <td>ppdurl</td>
			 <td>
				The location (<em>url</em>) of the PostScript Printer Definition (PPD) for this
				printer. Later in <a href="ppdomatic">one of the
				advanced topics</a>, you’ll learn how to procure a custom PPD for your
				non-Postscript printer.
			 </td>
		  </tr>

		  <tr>
			 <td>lp</td>
			 <td>
				The device name to open for output. In this case, the “real” output will be dumped into nothing.
			 </td>
		  </tr>

		  <tr>
			 <td>rm</td>
			 <td>
				The <em>r</em>emote <em>m</em>achine, which is the IP address of the network
				printer or print server.
			 </td>
		  </tr>
	   </tbody>
	   </table>

	   <p>
		 Don’t forget to save your work in NetInfo Manager, if necessary.
	   </p>
	   <p class="drop-shadow lifted yellow">
		 Note: since the latest release of this Guide, I’ve changed to using an
		 <samp>of</samp> output filter instead of an <samp>if</samp> input filter. If you know the difference and want to use
		 <samp>if</samp> instead of <samp>of</samp>, go for it.
		 This change was made to make the setup of printer hosting and USB file sharing
		 easier, since <samp>if</samp> has bugs and causes multiple copies when
		 printed from remote machines.
	   </p>
	</div>
</article>
