<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Getting to Business : Install Ghostscript'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Getting Down to Business</h1>
	<h2>Install GhostScript</h2>

	<p class="drop-shadow lifted yellow">
		<strong><em>File Needed!</em></strong> In this step, you’ll need to download
		Ghostscript and then unstuff it in a location that’s known and accessible to you.
		You’ll be using it very shortly, below.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> I’m no longer hosting Ghostscript, which means
		it’s now up to you, dear reader, to scour the web for a Mac OS X version
		of Ghostscript. You may start the search at <a href="http://www.ghostscript.com">
		www.ghostscript.com</a>, or use your favorite search engine. Sorry for the
		inconvenience. The rest of this section will continue as historically. However
		keep in mind that installation instructions may be different for your
		distribution of Ghostscript.
	</p>
	<p>
		Next, we want to install GhostScript, which is the Unix program responsible for
		translating Postscript code (which we’ll generate later) into whatever
		language it is that your printer uses.
	</p>
	<p>
		If you already have GhostScript installed, then feel free to skip this step. Later,
		though, you’re going to need to know where GhostScript is installed if
		it’s not in the default location. Also be aware that the GhostScript that you
		already have installed may not have been compiled with support for extra printers
		or <a href="gimp_print">gimp-print</a> (high-quality)
		drivers.
	</p>
	<p>
		When you’ve downloaded the file and unstuffed it, you’ll notice that
		it’s an Installer package, and when you open it, it should open in the Mac OS
		X Installer application. Once you’ve verified your administrator password, go
		ahead and install it will all of the defaults, ensuring that it will be installed
		on your Mac OS X operating system (boot) partition. That’s it.
	</p>
</article>
