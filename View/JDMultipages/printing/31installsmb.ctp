<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Getting to Business : Install SMB'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Getting Down to Business</h1>
	<h2>Install SAMBA 2.2.2 (SMB printers only)</h2>

	<p class="drop-shadow lifted yellow">
		<em>Note:</em> if you <em>do not</em> need to print to a Windows printer via SMB, you can skip
		this section. Printing to a shared Windows printer is done via SMB. Printing to a
		Windows Printing Services for Macintosh is <em>not</em> done via SMB; it is done via
		AppleTalk or LPD, according to your NT configuration.
	</p>
	<p class="drop-shadow lifted yellow">
		<strong><em>File Needed!</em></strong> In this step, you’ll need to download SAMBA and then
		unstuff it in a location that’s known and accessible to you. You’ll be
		using it very shortly, below.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> I’m no longer hosting SAMBA, which means
		it’s now up to you, dear reader, to scour the web for a Mac OS X version
		of SAMBA. This may be a difficult task, as SAMBA has been included in
		Mac OS X since version 10.2. You may start the search at your favorite
		search engine. Sorry for the inconvenience. The rest of this section will
		continue as historically. However keep in mind that installation instructions
		may be different for your distribution of SAMBA.
	</p>
	<p>
		Windows networks use a protocol called SMB (“<em>s</em>erver <em>m</em>essage
		<em>b</em>lock”) atop TCP/IP, much the way that EtherTalk is AppleTalk atop
		TCP/IP (although with LocalTalk out of existence, AppleTalk, saying
		<em>EtherTalk</em> is somewhat redundant).
	</p>
	<p>
		In order to communicate with a printer shared by a Windows machine, it will be
		important to make your Macintosh be able to speak to the Windows machine in its
		terms. This will be done with the software called <em>SAMBA</em>, which is a free,
		open-source implementation of SMB.
	</p>
	<p>
		You do <em>not</em> need SAMBA installed if any of these circumstances apply to you:
	</p>
	<ul>
		<li>
			You want to print to a Windows NT host that has Print Services for Macintosh
			enabled. This means the Windows server presents its served printers as Postscript
			Level 1 devices on the AppleTalk or TCP/IP network. This is opposed to Windows File
			and Printer Sharing printers that can be shared by all versions of Windows. The
			latter are the ones for which we need SAMBA.
		</li>
		<li>
			Your printer is an independant device on an Ethernet network without
			interference from another physical computer. You should be able to print to this
			printer via AppleTalk or TCP/IP.
		</li>
		<li>
			You printer is connected to a dedicated, hardware print server on an Ethernet
			network without interference from another physical computer. You should be able to
			print to this print server via AppleTalk or TCP/IP.
		</li>
	</ul>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> corporate environments typically have IP addresses or Windows SMB addresses
		posted on seemingly-independant printers. But did you know that these addresses are
		often not for the printer itself, but a print server that controls access rights
		and such? If you’re unable to print to such a printer via SMB or TCP/IP from
		your Mac, it may have to do with security issues. If, however, you can find the
		“real” IP address of the printer (<em>not</em> your corporate printer
		server) you can often get around this Mac-unfriendliness (actually SAMBA, as
		you’ll see, allows you to use a proper password). Additionally, if you can
		browse for AppleTalk devices, you can print via AppleTalk directly to most printers
		without having to go through a centralized server. Most network administrators
		don’t bother to turn off “EtherTalk” (AppleTalk-over-Ethernet)
		protocols from network laser printers. Often enough, EtherTalk can be turned back
		on directly from the printer’s control panel.
	</p>
	<p>
		If you’ve download a SAMBA distribution, you should unstuff it, mount the
		disk image, and run the installer. Make sure you choose to install it on your
		Mac OS X operating system (boot) partition. That’s it.
	</p>
	<p class="drop-shadow lifted yellow">
		Note: besides our uses of it in this guide, SAMBA <em>also</em> features the ability
		to set up SMB shares on your Macintosh. This means you can make you Mac a Windows
		file-server on a Windows network without having to invest in expensive programs
		such as DAVE. That’s an excercise left up to you, though, gentle reader.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> this will install version 2.2.2 SAMBA, as ported to Mac OS X (Darwin) by
		the fine folks at <a href="http://xamba.sourceforge.net">
		http://xamba.sourceforge.net</a>. The official
		SAMBA homepage is at <a href="http://www.samba.org">http://www.samba.org</a>. If
		you prefer to install (or have already installed) your own SAMBA package, feel
		free to use it; just remember that you’ll have to know the paths to the
		appropriate executables when the time comes to <a href="scen1_build_filter">build
		the print filter</a>.
	</p>
</article>
