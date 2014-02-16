<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Tech Stuff : Why Broken Printing'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Some Technical Stuff</h1>
	<h2>Why (I think) Printing is Broken Under OS X</h2>
	<p>
		Apple has touted that their new printing system for Mac OS X is exceptionally easy
		(relative to Classic Mac OS, I suppose) to develop drivers for. Like any operating
		system, even this new printing system depends on the printer manufactures to
		provide drivers that control most aspects of the printing process, such as:
	</p>
	<dl class="dl12em">
		<dt>Language conversion</dt>
		<dd>
			The driver converts Quartz, PDF, or QuickDraw (the Mac display systems)
			into the appropriate language for the printer (PostScript, PCL, etc.).
		</dd>

		<dt>Printer Options and Features</dt>
		<dd>
			This is allows the user to interact with printer special features such as
			automatic color matching, the use of duplexers, changing resolution, or
			detecting ink levels (the latter of which never seemed to
			work with a network printer anyway).
		</dd>

		<dt>Provide communication</dt>
		<dd>
			Provide the physical transport of the data across the connection medium
			to the printer.
		</dd>
	</dl>
	<p>
		This last item is where I feel Apple failed, since this limits the user unduly. For
		example, given perfectly good PCL instructions, it should be the operating
		system’s responsibility to decided where it can go and does go, whether it be
		down a USB cable, FireWire cable, or to an IP address. The operating system only
		needs to wait for the driver to deliver usable printer instructions, then send
		those instructions where the user wants, without being limited by the manufacturer
		to “support” network printing.
	</p>
	<p>
		In fact, did you know that your Mac OS X already can spool these printer-specific
		instructions to your AppleTalk network printer?
	</p>
</article>
