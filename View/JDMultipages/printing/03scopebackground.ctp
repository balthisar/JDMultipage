<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Introductory Notes : Scope and Background'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Introductory Notes</h1>
	<h2>Scope/Background</h2>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> <em>this document is not a hack!</em> It may seem so, because we’re
		taking the scenic route to get our printers working. But we’re using
		accepted, Unix printing practices in order to do so.
	</p>
	<p>
		This document originally referred to the use of Hewlett-Packard
		brand inkjet printers on a network server with Mac OS X 10.0. These
		results generally work with other brands of inkjet or laser printers. The examples
		herein will apply to HP printers. Making these adaptations for other printers is
		left mostly as an exercise for the reader, but this document should point you in
		the right direction if this pertains to you.
	</p>
	<p>
		Specifically, this document was originally developed with meeting my own
		objectives, which mean making the following work:
	</p>
	<ul>
		<li>
			HP DeskJet 970cse inkjet printer. This printer was sold with a
			built-in duplexer (pager turner-over), built-in USB port, and legacy parallel port
			(which is used to connect to the print server). It is important to note that this
			is not a PostScript printer (it uses HP’s proprietary PCL language instead).
			Virtually any PCL-capable printer should be adaptable to these instructions.
		</li>
		<li>
			HP JetDirect 300x print server. This is the device that turns
			essentially any parallel printer into an independent network printer. It supports
			IPX, TCP/IP, and AppleTalk. In this document, we will work with both TCP/IP and
			AppleTalk, and an interesting experiment early on will take advantage of the
			AppleTalk capabilities. Virtually any printer server capable of SMB, AppleTalk, or
			TCP/IP should be adaptable to these instructions.
		</li>
		<li>
			iMac DV SE (Graphite). This is the computer first used to get Mac
			OS X and the DeskJet to cooperate. This machine was connected to my home LAN.
		</li>
		<li>
			PowerBook (Bronze). This is the testbed computer used to verify
			that these instructions actually work. This machine was connected to my home LAN.
		</li>
		<li>
			HP Pavilion Computer with Windows XP Professional. This computer
			was used to generate PCL code for testing under Mac OS X. This machine was connected
			to my home LAN.
		</li>
	</ul>
	<p>
		Printing from pre-OS X to this printer configuration was a simple matter of
		choosing the printer driver from the Chooser, and browsing for it over the
		AppleTalk network. For the most part, this still works perfectly well in the
		Classic environment running under Mac OS X (although “background
		printing” must be disabled).
	</p>
	<p>
		Printing from Windows ME and earlier to this configuration was a little more
		involved, but not difficult for the technical-minded. The HP JetAdmin software
		included with the print server (and now no longer available) creates a faux
		printer port that is redirected to the IP address of the JetDirect box. Windows, in
		turn, sees this faux port as if it were any other local, physical printer port.
		Installation of printer drivers only differs by selecting the faux port in lieu of
		LPT1:, for example.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> In this setup, Windows now thinks of this as a local printer, not a network
		printer, which greatly simplifies things in a home or uncontrolled network
		environment. Admittedly, this, too is a hack provided by HP, since Windows, by
		itself, was utterly incapable of finding and configuring the printer on the
		network. This HP JetAdmin setup has also worked for me on Windows 95, Windows 98,
		and Windows ME, from both a real PC as well as versions 2, 3, 4, and
		5 of Connectix’ “VirtualPC” on the Macintosh.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> Windows XP now supports directly printing to TCP/IP printers without having
		to create faux local ports.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> Hewlett-Packard has now discontinued the distribution of HP JetAdmin
		software, on the basis that it’s obsolete. HP claims that their newer,
		web-based printer management software accomplishes the same work. However, just
		like HP JetAdmin, this new software is <em>still</em> unavailable for the Macintosh
		platform.
	</p>
</article>
