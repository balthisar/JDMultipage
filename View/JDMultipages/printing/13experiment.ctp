<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Tech Stuff : Interesting Experiment'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Some Technical Stuff</h1>
	<h2>An Interesting Experiment</h2>
	<p>
		Did you know that your Macintosh can <em>already</em> print to your unsupported
		network printer, without needing anything else installed?
	</p>

	<p class="drop-shadow lifted yellow">
		<em>Note:</em> this following experiment will only work for you as-is if you have a PCL
		printer connected to your network, and if that printer (or the print server) is
		AppleTalk compatible. This section is intended to amaze you and serve as an
		introduction to how we’re going to print. This procedure is also adapted for
		SMB and LPD use in the <a href="scen1_troubleshoot">
		Troubleshooting</a> section, but cannot be
		done now because we haven’t install the proper software.
	</p>

	<p class="drop-shadow lifted yellow">
		<em>Note:</em>These instructions assume you’re on a “zoneless” AppleTalk
		network, which you probably are if your network is small. If your AppleTalk network
		has zones, consult the man pages for <samp>atprint</samp> and
		<samp>atlookup</samp> to find your correct syntax, or see below</a>.
	</p>

	<p>Once you know AppleTalk is enabled and turned on in your system, try the experiment:</p>
	<ol>
		<li>
			Download the <a href="/files/balthisarfiles.sit">balthisarfiles</a> package,
			and unpack it in a location that’s comfortable to you (alternatively, go to the
			<a href="/downloads">Downloads area</a> to see if there is a sample file for your specific
			printer model).
		</li>
		<li>
			Start a terminal session, and <kbd>cd</kbd> to the
			<samp>LangSamples</samp> directory in the directory that you’ve
			unpacked (i.e., such that you’re in the directory with the <samp>SampleLJ.PCL</samp>
			file and the <samp>SampleDJ.PCL</samp> file, or the printer-specific
			<samp>.PCL</samp> file that you’ve downloaded).
		</li>
		<li>
			Type: <kbd>atlookup</kbd>
		</li>
		<li>
			You should see something akin to this:
			<pre>
				ff25.29.40 deskjet970:SNMP Agent
				ff25.29.40 deskjet970:DeskWriter
			</pre>
		</li>
		<li>
			You’ll also see other AppleTalk devices on your network, if you
			have them. The point is, your AppleTalk printer can be seen by Mac OS X.
		</li>
		<li>
			Type: <kbd>atprint deskjet970:DeskWriter &lt; SampleDJ.PCL</kbd>
		</li>
	</ol>
	<p>
		Of course, provide your own printer name and type provided by the
		<samp>atlookup</samp> command. If you have a LaserJet, you may want to try
		the <samp>SampleLJ.PCL</samp> file instead of the <samp>SampleDJ.PCL</samp>.
		If you have a PostScript Level 2 printer, you probably don’t even need this
		help, but you can try the <samp>SampleLW.PS</samp> file (which is a PostScript
		Level 1 file). Finally, if you have a non-PCL printer, then go to a Windows
		machine, use the <a href="generate_windows_printer_files">“Print to File”
		option of the Windows Print dialogue box</a>, and generate a file using the
		command language for your own printer, or <a href="/downloads">check here to
		see</a> if I have a specific PCL file tailored for your printer model.
	</p>
	<div class="drop-shadow lifted yellow">
		<p>
			<em>Note:</em> if your printer showed up with a space in its name after the
			<kbd>atlookup</kbd> command, you’ll need to put the printer
			name in quotes (either single or double), for example:
			<hr/>
			<kbd>atprint 'deskjet 970':DeskWriter</kbd>
			<hr/>
			…or you can escape the spaces using a back-slash character, for example:
			<hr/>
			<kbd>atprint deskjet\ 970:DeskWriter</kbd>
			<hr/>
			In the second example, the backslash indicates that the next space character
			should <em>not</em> be treated as white-space (space between commands and
			parameters in UNIX), but as part of a contiguous string of text.
		</p>
	</div>
	<div class="drop-shadow lifted yellow">
		<p>
			<em>Note:</em> if your printer is on on AppleTalk zone, the
			format you need to use is <kbd>name:type@zone</kbd>, e.g.,
			<hr/>
			<kbd>atprint deskjet970:DeskWriter@HomeZone</kbd>.
		</p>
	</div>
	<p>
		Your printer should have started printing the PCL code (as a legible document, that
		is) generated for you under the Windows operating system.
	</p>
	<p>What did this just prove?</p>
	<ul>
		<li>
			That the driver only needs to generate the printer control
			language. The <samp>SampleDJ.PCL</samp> file was generated on a
			Windows machine, but yet, it contained the same PCL any other operating system
			would have to generate, including the PCL that the already-installed HP drivers
			under Mac OS X 10.1 generate.
		</li>
		<li>
			That the operating system already can deliver this code to a
			network printer. But for some reason, Apple chose not to trust its users to select
			their own hardware, and instead force the printer manufacturers to
			“officially detect” (and support) their printers on the network.
		</li>
	</ul>
	<p>
		Problems? Did this little experiment not work for you? If you have an AppleTalk
		compatible device, then something probably happened, even if it wasn’t the
		result that you expected. The printer made a noise, or the page you printed was
		stretched or shrunken. Don’t worry, I generated these files using the Windows
		98 DeskJet 500 driver, the LaserJet 4V driver, and the Apple LaserWriter PostScript
		driver, and maybe they’re not 100% compatible with the exact printer you
		have. That’s no big deal, though. If you want to confirm that this trick
		really works before proceeding, and you have access to a Windows computer,
		<a href="generate_windows_printer_files">you can generate these files
		yourself</a> using the proper driver for your printer, and the Windows
		“print-to-file” option in the print dialogue.
	</p>
</article>
