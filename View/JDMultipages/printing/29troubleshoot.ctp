<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Getting to Business : Troubleshooting'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Getting Down to Business</h1>
	<h2>Troubleshooting</h2>
	<p>
		Uh oh. Something didn’t work right for you? It’s time to get your hands dirty
		learning how to troubleshoot. This section will assist you in troubleshooting your
		basic GhostScript and AppleTalk, SAMBA, or TCP/IP installations. It will <em>not</em>
		cover much of anything related to settings for GhostScript or your particular
		printer
	</p>

	<p>
		What this section will cover:
	</p>

	<ul>
		<li>Making sure that GhostScript works.</li>
		<li>Making sure that your network connection works (LPD, AppleTalk, or SMB)</li>
		<li>Making sure that your <samp>lpd.filter</samp> works.</li>
		<li>Making sure that Mac OS X is actually executing the <samp>lpd.filter</samp> file.</li>
	</ul>

	<p>
		If all of the above are working, you should be able to get your printer working.
		However, because I don’t know everything about every possible printer, we
		will <em>not</em> cover the following in this section:
	</p>

	<ul>
		<li>How to choose the correct GhostScript driver for your particular make and model of printer.</li>
		<li>How to use any of the advanced GhostScript parameters.</li>
		<li>Pretty much anything that’s not mentioned in the first list, above.</li>
	</ul>

	<p>
		Many specific questions about the smaller details, such as choosing drivers, using
		Uniprint or gimp-print, and so on can be found at
		<a href="http://www.linuxfoundation.org/collaborate/workgroups/openprinting">
		http://www.linuxfoundation.org/collaborate/workgroups/openprinting</a>.
	</p>

	<p>
		That said, let’s begin.
	</p>

	<p class="drop-shadow lifted yellow">
		<em>Note:</em> in the examples below, you won’t have to be <samp>root</samp>
		user. The examples reference your <samp>~</samp> (home) folder for accessing
		certain files. Note that if you <samp>su</samp> or <samp>sudo</samp> to
		<samp>root</samp>, references to <samp>~</samp> now refer to the
		<samp>root</samp> user’s home folder, which is not necessarily
		your own home folder. If you’ve become <samp>root</samp>, you
		can use the <samp>exit</samp> command to become yourself again.
	</p>

	<h3>Ensure that GhostScript Works</h3>

	<p>
		Let’s make sure that GhostScript works by turning a directory listing into a
		JPG file that you can look at in the Mac OS X Preview application. Then we’ll
		know that GhostScript is working properly. Do the following in the terminal:
	</p>

	<dl class="codeAndDescription">
		<dt>cd ~</dt>
		<dd>
			Puts you in your home directory. This is the directory listing we’re
			going to turn into a JPG.
		</dd>

		<dt>ll | enscript -o test.ps</dt>
		<dd>
			Feed the output of the <samp>ll</samp> command (a directory
			listing) to the <samp>enscript</samp> command, which will turn
			it into a Postscript file named <samp>test.ps</samp>, which will
			be located at the root level of your home directory. Note that the
			<samp>|</samp> is the pipe (vertical bar) symbol, which is
			located above the <samp>Return</samp> key on U.S.
			keyboards. We’re doing this step to generate a quick-and-dirty
			Postscript file. Unfortunately the Preview application seems to have
			forgotten its Mac/NextStep roots, and won’t open Postscript files, but
			if you have Illustrator or another program that will open Postscript files,
			feel free to verify that we’ve generated good PostScript.
		</dd>

		<dt>gs -q -dBATCH -sDEVICE=jpeg -sOutputFile=test.jpg test.ps</dt>
		<dd>
			Convert the Postscript file <samp>test.ps</samp> to a JPG called
			<samp>test.jpg</samp>. You now have a Unix directory listing
			that you can now open in the Preview application.
		</dd>
	</dl>

	<p>
		If the above trick worked for you, you can be assured that GhostScript is
		functioning properly on your system. If it failed, GhostScript is obviously not
		working, and you’ll have the unpleasant duty of trying to figure out why.
		It’s possible you may have already had GhostScript installed and
		they’re conflicting.
	</p>

	<h3>Ensure that your LPD Network Connection Works</h3>

	<p>
		If you’re trying to print to an LPD (TCP/IP) printer, this step will use the
		terminal to ensure that you have basic access to your LPD system, i.e., that is can
		spool jobs to your printer.
	</p>

	<p>
		I highly recommend that you <a href="generate_windows_printer_files">generate
		a test file from Windows</a> for your specific printer, so that you can eliminate
		GhostScript driver problems, or use one of the pcl files from the
		<a href="/files/balthisarfiles.sit">balthisarfiles.sit</a> package in the
		LanguageSamples folder. Using a known, good printer language file will assure
		you that not only does the LPD system spool, but that it spools correctly.
	</p>

	<p>
		The following instructions assume you’ve <a href="scen1_netinfo_lp_printer">setup your
		printer <samp>lp</samp> in NetInfo</a>, and that you have a
		printer image file called <samp>test.pcl</samp> for your printer in
		your home directory. Feel free to change the path and filename as you see fit to
		access your own sample printer file.
	</p>

	<dl class="codeAndDescription">
		<dt>lpr -v -h -Plp ~/test.pcl</dt>
		<dd>
			Print the file <samp>test.pcl</samp> from your home directory
			via the printer <samp>lp</samp>, as defined in NetInfo.
		</dd>
	</dl>

	<p>
		If your printer spit out something, you can be pretty confident that LPD is running
		and working properly. If you got garbage from the printer, then that’s a
		start. You’ll have to decide if your printer test file isn’t perfect
		for the printer, or if your printer server is having issues.
	</p>

	<p>
		If nothing came out of the printer at all, it’s likely that LPD isn’t
		running, or that your <samp>lp</samp> printer definition in NetInfo
		isn’t correct. You can ensure the LPD is running by typing
		<kbd>/usr/libexec/lpd</kbd> as <samp>root</samp> in the terminal,
		or simply restart your computer.
	</p>

	<h3>Ensure that your AppleTalk Network Connection Works</h3>

	<p>
		To ensure that your AppleTalk connection works, simply repeat the
		<a href="experiment">An Interesting Experiment</a> section.
	</p>

	<h3>Ensure that your SMB Network Connection Works</h3>

	<p>
		Repeat the <samp>Ensure that your
		LPD Network Connection Works</samp> instructions, above, but use the following
		command to spool to your printer via SAMBA:
	</p>

	<dl class="codeAndDescription">
		<dt>test.pcl | smbclient '\\WINBOX\windeskjet' -P -N -c 'print -'</dt>
		<dd>Print the file <samp>test.pcl</samp> via SAMBA.</dd>
	</dl>
	
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> please see the notes in the
		<a href="scen1_build_filter">Use the Terminal to Build the Filter</a> section for
		notes about your SMB path. Alternatively see <samp>man smbclient</samp> or the
		<a href="http://www.samba.org/samba/docs/man/manpages-3/smb.conf.5.html">internet version.</a>
	</p>

	<h3>Ensure that your lpd.filter File Works</h3>
	<p>
		Assuming all of the above work, you can test your <samp>lpd.filter</samp> file so:
	</p>

	<dl class="codeAndDescription">
		<dt>cd /usr/local/lib/lpd</dt>
		<dd>
			Move to the <samp>lpd</samp> directory where the <samp>lpd.filter</samp> resides.
		</dd>

		<dt>test.ps | ./lpd.filter</dt>
		<dd>
			Send an arbitrary Postscript file (e.g., the one you
			generated above) to your
			<samp>lpd.filter</samp> file. Assuming your GhostScript works as above, and
			your printer is accessible, the filter should work and do something.
		</dd>
	</dl>

	<p class="drop-shadow lifted yellow">
		<em>Note:</em> if your <samp>lpd.filter</samp> doesn’t work here, and you
		know that GhostScript works and that your network connection to the printer works,
		then there is a problem with the filter. Doulbe- and triple-check your work in the
		filter, especially quotation marks and nested quotation marks or escaped
		characters.
	</p>

	<p class="drop-shadow lifted yellow">
		<em>Note:</em> some people report that their Stuffit Expander automatically translates the
		Unix end-of-line characters to Macintosh end-of-line characters. This is Expander
		trying to do you a favor and making the file “Macintosh compatible,”
		but for our purposes it’s a nuisance. Try adjusting your preferences so this
		doesn’t happen when you unstuff the balthisarfiles.sit package. Alternatively
		you can use a program such as <a href="http://www.barebones.com">Bare
		Bones’</a> TextWrangler or BBEdit to automatically transform end-of-line
		characters between Macintosh, Windows, and Unix end-of-line characters. The last
		option is using pico and erasing every end of line character, and putting them back
		in yourself — that’s bound to be time consuming, though.
	</p>

	<h3>Ensure that Mac OS X is Executing the lpd.filter File</h3>

	<p>
		Finally, we know that GhostScript works, your network connection to the printer
		works, and that everything works together in the filter. Hence, if the Mac OS is
		successfully executing the filter file, <samp>lpd.filter</samp>, then
		it stands to reason that your complete setup should work.
	</p>

	<p>
		If you put this line…
	</p>

	<p>
		<kbd>echo Filter Executed &gt; ~username/filterrun.txt</kbd>
	</p>

	<p>
		…into the very top of your <samp>lpd.filter</samp> file, where
		<samp>~username</samp> is the user whose home folder you’d like
		to use for the experiment, you can verify that when printing from Mac OS X your
		<samp>lpd.filter</samp> file is truly executed. For example, if you
		attempt to print, and nothing happens, you can look in <samp>username</samp>’s
		home folder, and see if the file <samp>filterrun.txt</samp> exists. If it does,
		you can be assured that the Mac OS is successfully executing the filter.
	</p>

	<p>
		You should be sure to put the line at the <em>top</em> of the file in order to ensure
		that the filter is being executed. If you were to put the line somewhere else,
		there’d be a chance that an error in the file would prevent the <samp>echo</samp>
		command from running, and you’d falsely believe that your filter wasn’t running.
	</p>

	<p>
		So what happens if the filter doesn’t run? Well, chances are that your
		permissions aren’t correct. Make sure you go back over the preceding chapters
		and repeat the <samp>chown</samp> commands so that you have proper
		permissions in all of the relevent spots.
	</p>

	<p>
		If your filter <em>is</em> working but you don’t get any output, I would
		recommend that you make sure your files are being spooled — check out the
		appropriate spool directory you created in <a href="scen1_build_spool">Build Our
		Spool Directories</a>, and see if new files are showing up when you print. If not,
		the lpd.filter is probably broken somewhere. Repeat this chapter to double-check.
		It’s also possible that your printer or print server just isn’t
		accepting the jobs.
	</p>

	<p>
		Finally, check out the Mac OS X <a href="examine_error_log">Console</a>
		application to see if anything relevant shows up there.
	</p>
</article>
