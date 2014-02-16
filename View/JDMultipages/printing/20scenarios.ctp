<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Getting to Business : Choose Scenario'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Getting Down to Business</h1>
	<h2>Pick and Choose a Scenario</h2>
	<p>
		As this <em>Guide</em> has grown to encompass more and more printing scenarios,
		it’s become a more complicated document. Starting with this current update,
		the procedures for these different scenarios have been broken up and are shown in
		the navigation bar to the left. By allowing you to follow a specific scenario, you
		won’t be distracted by things that don’t apply to your particular setup.
	</p>
	<p>
		Certainly there are common steps and these common steps are included in all
		scenarios; if something doesn’t apply to your situation, I’ve tried to
		document it in the instructions. Nevertheless, I may have missed something and you
		can generally feel safe to ignore it if you’re certain an instruction
		doesn’t apply.
	</p>
	<p>
		The scenarios follow; pick the one that best describes what you need to do, and
		follow the steps in that scenario in the navigation frame on the left side of this
		window.
	</p>
	<p>
		Additionally, the hosting scenario further down
		may be of interest to you, too.
	</p>

	<h2>
		Print Scenario 1 (print via LPD/lpr using your Mac as the raster image processor).
	</h2>
	<p>
		Following <em>Print Scenario 1</em> will allow your Mac OS X
		machine to print to non-Postscript Level 2 Printers (i.e., inkjets, older
		Postscript Printers) via LPD/lpr to a printer connected to one of the following:
	</p>
	<ul>
		<li>
			Freestanding Print Server Box, such as the HP JetDirect 300x.
		</li>
		<li>
			Windows hosts with Print Services for Unix installed and already working.
		</li>
		<li>
			Other already-working LPD/lpr host computers not running a raster image
			processor, including Other Mac OS X systems (which you can setup in the hosting scenario.
		</li>
	</ul>
	<p>
		This scenario will use your Mac OS X machine to translate Postscript via
		GhostScript, i.e., your Mac will serve as a raster image processor. If the remote
		machine accepts Postscript Level 2, you do not need to follow this scenario.
	</p>

	<h2>
		Print Scenario 2 (print via AppleTalk using your Mac as the raster image processor).
	</h2>
	<p>
		Following <em>Print Scenario 2</em> will allow your Mac OS X
		machine to print to non-Postscript Level 2 Printers (i.e., inkjets, older
		Postscript Printers) via AppleTalk to a printer connected to one of the following:
	</p>
	<ul>
		<li>
			Freestanding, AppleTalk-compatible Print Server Box, such as the HP JetDirect 300x.
		</li>
		<li>
			Windows hosts with Print Services for Macintosh installed and already working.
		</li>
		<li>
			Other already-working AppleTalk hosts (other *nixes running <samp>netatalk</samp>)
			not running a raster image processor such as GhostScript.
		</li>
	</ul>
	<p>
		This scenario will use your Mac OS X machine to translate Postscript via
		GhostScript, i.e., your Mac will serve as a raster image processor. If the remote
		machine accepts Postscript Level 2, you do not need to follow this scenario.
	</p>

	<h2>
		Print Scenario 3 (print via SAMBA using your Mac as the raster image processor).
	</h2>
	<p>
		Following <em>Print Scenario 3</em> will allow your Mac OS X
		machine to print to non-Postscript Level 2 Printers (i.e., inkjets, older
		Postscript Printers) via SAMBA/SMB/CIFS to a printer connected to one of the
		following:
	</p>
	<ul>
		<li>
			Windows hosts with a shared printer done via Windows Printer Sharing
			(<em>not</em> Print Services for Macintosh or Unix).
		</li>
		<li>
			Other already-working SAMBA/SMB/CIFS hosts not running a raster image processor
			such as GhostScript.
		</li>
	</ul>
	<p>
		This scenario will use your Mac OS X machine to translate Postscript via
		GhostScript, i.e., your Mac will serve as a raster image processor. If the remote
		machine accepts Postscript Level 2, you do not need to follow this scenario.
	</p>

	<h2>
		Print Scenario 4 (print via TCP/IP using Postscript Level 2).
	</h2>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> This print scenario was never fully fleshed out.
		Mac OS X 10.2 came out and I could no longer develop this guide (no need).
		As such, it will never be completed. If you have a need for such, please
		work through this guide anyway, and you <em>will</em> gain the knowledge
		to tackle the problem yourself.
	</p>
	<p>
		Following <em>Print Scenario 4</em> will allow your Mac OS X
		machine to print to Postscript Level 2 Printers via TCP/IP to a printer connected
		to one of the following:
	</p>
	<ul>
		<li>
			Freestanding Print Server Box, such as the HP JetDirect 300x.
		</li>
		<li>
			Windows hosts with Print Services for Unix installed and already working.
		</li>
		<li>
			Other already-working LPD/lpr hosts with a connected Postscript Level 2 printer
			or running a Postscript raster image processor, <em>including</em> other Mac OS X
			systems set up as the Balthisar version of Printer Hosting.
		</li>
	</ul>
	<p>
		This scenario will use your Mac OS X machine to print to some machine that
		understands Postscript Level 2, whether it be built-in to a printer, or whether
		it’s a print server running a software raster image processor such as
		GhostScript. We can skip the GhostScript details in this setup, because the remote
		machine can already understand Postscript.
	</p>

	<h2>
		Print Scenario 5 (print via AppleTalk using Postscript Level 2).
	</h2>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> This print scenario was never fully fleshed out.
		Mac OS X 10.2 came out and I could no longer develop this guide (no need).
		As such, it will never be completed. If you have a need for such, please
		work through this guide anyway, and you <em>will</em> gain the knowledge
		to tackle the problem yourself.
	</p>
	<p>
		Following <em>Print Scenario 5</em> will allow your Mac OS X
		machine to print to Postscript Level 2 Printers via AppleTalk to a printer
		connected to one of the following:
	</p>
	<ul>
		<li>
			Freestanding AppleTalk-compatible Print Server Box, such as the HP JetDirect 300x.
		</li>
		<li>
			Other already-working AppleTalk hosts (e.g., other *nixes setup with
			<samp>netatalk</samp>) with a connected Postscript Level 2 printer or
			running a Postscript raster image processor such as GhostScript.
		</li>
	</ul>
	<p>
		This scenario will use your Mac OS X machine to print to some machine that
		understands Postscript Level 2, whether it be built-in to a printer, or whether
		it’s a print server running a software raster image processor such as
		GhostScript. We can skip the GhostScript details in this setup, because the remote
		machine can already understand Postscript Level 2.
	</p>

	<h2>
		Print Scenario 6 (print via SAMBA using Postscript Level 2).
	</h2>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> This print scenario was never fully fleshed out.
		Mac OS X 10.2 came out and I could no longer develop this guide (no need).
		As such, it will never be completed. If you have a need for such, please
		work through this guide anyway, and you <em>will</em> gain the knowledge
		to tackle the problem yourself.
	</p>
	<p>
		Following <em>Print Scenario 6</em> will allow your Mac OS X
		machine to print to Postscript Level 2 Printers via SAMBA/SMB/CIFS to a printer
		connected to one of the following:
	</p>
	<ul>
		<li>
			Windows hosts with a shared printer done via Windows Printer Sharing
			(<em>not</em> Print Services for Macintosh and <em>not</em> Print Services for Unix)
		</li>
		<li>
			Other already-working SAMBA/SMB/CIFS hosts with a connected Postscript Level 2
			printer or running a Postscript raster image processor such as GhostScript.
		</li>
	</ul>
	<p>
		This scenario will use your Mac OS X machine to print to some machine that
		understands Postscript Level 2, whether it be built-in to a printer, or whether
		it’s a print server running a software raster image processor such as
		GhostScript. We can skip the GhostScript details in this setup, because the remote
		machine can already understand Postscript.
	</p>

	<h2>
		Hosting Scenario (offer LPD/lpr relay services with optional RIP services)
	</h2>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> This print scenario was never fully fleshed out.
		Mac OS X 10.2 came out and I could no longer develop this guide (no need).
		As such, it will never be completed. If you have a need for such, please
		work through this guide anyway, and you <em>will</em> gain the knowledge
		to tackle the problem yourself.
	</p>
	<p>
		Your Mac will accept incoming LPD/lpr requests, and route them to another network
		printer using LPD/lpr, AppleTalk, or SAMBA. This allows you to set up other Mac OS
		X machines (or an LPD-capable computer) via the “normal” LPD/lpr setup.
	</p>
	<p>
		Optionally the Mac can do Postscript translation before passing the job along.
	</p>
</article>
