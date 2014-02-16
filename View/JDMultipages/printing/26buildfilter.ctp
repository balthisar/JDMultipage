<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Getting to Business : Build the Print Filter'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Getting Down to Business</h1>
	<h2>Use the Terminal to Build the Filter</h2>

	<p class="drop-shadow lifted yellow">
	   <strong><em>File Needed!</em></strong> In this step, you’ll need to have
	   <a href="/files/balthisarfiles.sit">downloaded balthisarfiles.sit</a>
	   and then unstuffed it in a location that’s known and
	   accessible to you. You’ll be using it very shortly, below.
	</p>

	<p>
		The next thing we need to do is put our filter files where the print system expects
		to find them. <a href="start_mac_terminal">Start a terminal</a>,
		<a href="become_root"><samp>su</samp> to
		<samp>root</samp></a>, and type these:
	</p>

	<dl class="codeAndDescription">
		<dt>mkdir –p /usr/local/lib/lpd</dt>
		<dd>creates the directory we need.</dd>

		<dt>cd /usr/local/lib/lpd</dt>
		<dd>puts you in the OS’ lpd directory.</dd>

		<dt>cp <em>…path…</em>/lpd.filter lpd.filter</dt>
		<dd>copies the <samp>lpd.filter</samp> file.</dd>

		<dt>cp <em>…path…</em>/GhostScript.ppd GhostScript.ppd</dt>
		<dd>copies the <samp>GhostScript.ppd</samp> file.</dd>

		<dt>cp <em>…path…</em>/endofjob endofjob</dt>
		<dd>copies the <samp>endofjob</samp> file.</dd>

		<dt>cd ..<kbd></dt>
		<dd>backs up one directory level.</dd>

		<dt>chown -R root.daemon lpd</dt>
		<dd>sets the proper permissions for this directory.</dd>

		<dt>mkdir –p /usr/local/lib/lpd</dt>
		<dd>creates the directory we need.</dd>

		<dt>cd /usr/local/lib/lpd</dt>
		<dd>puts you in the OS’ lpd directory.</dd>

		<dt>cp <em>…path…</em>/lpd.filter lpd.filter</dt>
		<dd>copies the <samp>lpd.filter</samp> file.</dd>

		<dt>cp <em>…path…</em>/GhostScript.ppd GhostScript.ppd</dt>
		<dd>copies the <samp>GhostScript.ppd</samp> file.</dd>

		<dt>cp <em>…path…</em>/endofjob endofjob</dt>
		<dd>copies the <samp>endofjob</samp> file.</dd>

		<dt>cd ..<kbd></dt>
		<dd>backs up one directory level.</dd>

		<dt>chown -R root.daemon lpd</dt>
		<dd>sets the proper permissions for this directory.</dd>
	</dl>
	
	
	<p class="drop-shadow lifted yellow">
	<em>Note:</em> you need to know the path to the files you’re copying above. For
	example, had I unstuffed the file in the “Downloads” folder in my own home
	directory, then the <samp><em>…path…</em></samp> portion of
	the <samp>cp</samp> command I would use would be <samp>~jderry/Downloads/balthisarfiles/Filter</samp>.
	</p>

	<p>
		Now that the files are in place, we need to edit the file to make it useful. Type:
	</p>

	<dl class="codeAndDescription">
		<dt>cd lpd</dt>
		<dd>go back to the lpd directory, since we had just backed out of it.</dd>

		<dt>pico lpd.filter</dt>
		<dd>opens lpd.filter file in pico.</dd>
	</dl>

	<p>
		Great, you should now be in the <a href="pico_on_mac">pico editor</a>
		looking at the <samp>lpd.filter</samp> file. The actual file
		you’ll see has a lot more information in it, buried in comments, but these
		have been left out below for conciseness. Please read through the whole file for
		some added ideas.
	</p>

	<div class="sourcecode">
		<?php
			$this->Geshi->features = array(	'set_header_type' => array("GESHI_HEADER_PRE"),
											'enable_line_numbers' => array("GESHI_NORMAL_LINE_NUMBERS"),
											'enable_classes' => array(),
											'set_overall_class' => array('sourcecode'),
									);
		echo $this->Geshi->highlightText(<<<'_formatme'
			#!/bin/sh
			#--------------------------------------------------------------------
			# Setup our local variables - note: if you have another version
			# of GhostScript, these paths MAY be different. For example,
			# the fink package manager installs into /sw instead of /usr/local.
			# If you're using another distribution of SAMBA for SMB printing,
			# note the SMBPATH may be different on your machine, too!
			#--------------------------------------------------------------------
			GS=/usr/local/bin/gs
			GS_FONTPATH=/usr/local/share/ghostscript/fonts:/usr/local/share/ghostscript/6.50/lib
			SMBPATH=/usr/local/samba/bin/smbclient
			export GS GS_FONTPATH SMBPATH

			#--------------------------------------------------------------------
			# NON-APPLETALK Printers: remove the comment from the line below:
			#--------------------------------------------------------------------
			#$GS -dNOPAUSE -q -dBATCH -sDEVICE=cdj550 -r600 -sOutputFile=\|"/usr/bin/lpr -v -h -Plp" -

			#--------------------------------------------------------------------
			# APPLETALK Printers: remove the comment from the line below:
			#--------------------------------------------------------------------
			#$GS -dNOPAUSE -q -dBATCH -sDEVICE=cdj550 -r600 -sOutputFile=\|"/usr/bin/atprint deskjet970:DeskWriter" -

			#--------------------------------------------------------------------
			# SAMBA Printers: remove the comment from the line below:
			#--------------------------------------------------------------------
			#$GS -dNOPAUSE -q -dBATCH -sDEVICE=cdj550 -r600 -sOutputFile=- - | $SMBPATH '\\WINBOX\windeskjet' -P -N -c 'print -'
_formatme
		, "bash", true) . "\n"; ?>
	</div><!-- source code -->

	<p class="drop-shadow lifted yellow">
		<em>Note:</em> If you installed your own version of GhostScript, make sure the
		<samp>GS</samp> and the <samp>GS_FONTPATH</samp> lines contain the
		correct directory paths. If you installed my recommended distribution, then
		you’re already okay.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> If you installed your own version of SAMBA, make sure the
		<samp>SMBPATH</samp> line contains the correct directory path. If you installed my
		recommended distribution, then you’re already okay. And of course, if
		you’re not printing to an SMB device, don’t worry about it.
	</p>

	<p>
		Let us concentrate on the last three “major sections” of the file. The
		filter as-is will do nothing until we remove one of the comment symbols. Depending
		on your printing method, do one of the following:
	</p>
	<ul>
	 <li>
		<em>TCP/IP using the LPD system</em>:
		<ul>
			 <li>
				Remove the comment symbol from the <samp>$GS</samp> line in the <samp>NON–APPLETALK</samp> section.
			 </li>
		</ul>
	 </li>

	 <li>
		<em>AppleTalk</em>:
		<ul>
			 <li>
				Remove the comment from the <samp>$GS</samp> line in the <samp>APPLETALK</samp> section.
			 </li>
			 <li>
				Replace <samp>deskjet970:DeskWriter</samp> with the AppleTalk
				name and type pair that you learned in the <a href="experiment">An
				Interesting Experiment</a> section of this guide.
			 </li>
			 <li>
				If your your printer name or type has a space in it, see note below.
			 </li>
		</ul>
	 </li>

	 <li>
		<em>SMB via SAMBA</em>:
		<ul>
			 <li>
				Remove the comment from the <samp>$GS</samp> line in the <samp>SAMBA</samp> section.
			 </li>
			 <li>Replace <samp>\\WINBOX\windeskjet</samp> with:
				<ul>
				 <li>
					the name of the Windows computer hosting the printer in place of <samp>WINBOX</samp>.
				 </li>
				 <li>
					the name of the printer as shared by the Windows computer in place of <samp>windeskjet</samp>.
				 </li>
				</ul>
			 </li>
			 <li>
				If your SMB printer requires special access, such as a different Workgroup
				or the use of user name and password, see note below.
			 </li>
		</ul>
	 </li>
	</ul>

	<p>
		When you’re done making the necessary changes, type <samp>Ctrl-O</samp>,
		hit <samp>Return</samp>, and type <samp>Ctrl-X</samp> to exit from pico.
	</p>

	<div class="drop-shadow lifted yellow">
		<p>
			<em>AppleTalk Note:</em> remember your printer name
			from <a href="experiment">An Interesting Experiment</a>,
			above? If your printer name has a space in it, you’ll have to nest the
			quotes. For example, if your printer is called <samp>deskjet 970</samp> instead
			of <samp>deskjet970</samp>, you’ll have to write the printer name/type like this,
			for example:
			<hr/>
			<code>'deskjet 970':DeskWriter</code>
			<hr/>
			Your complete <samp>–sOutputFile=</samp> parameter will look
			something like this with nested quotes:
			<hr/>
			<code>\|"/usr/bin/atprint 'deskjet970':DeskWriter"</code>
		</p>
	</div>

	<p class="drop-shadow lifted yellow">
		<em>SMB Note:</em> SAMBA is able to support Windows’
		Workgroups as well as user-authentification. If you require this type of access,
		please consult <samp>man smbclient</samp> from the terminal or from
		the <a href="http://us1.samba.org/samba/docs/man/smbclient.1.html">internet</a>.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> Don’t forget the single hyphen at the end of the line. It’s not
		shown in this example, because it’s a parameter of its own, but easy to
		overlook. It’s located on the <samp>$GS</samp> line where we
		would <em>normally</em> supply a file name for GhostScript processing. But when Mac
		OS X passes in the Postscript file it generates, it can have any old name and could
		potentially be anywhere on the hard drive. Use of the hypen is a standard Unix
		convention to represent the name and path of whatever file is passed in – in
		this case, the Postscript file generated by Mac OS X.
	</p>
</article>
