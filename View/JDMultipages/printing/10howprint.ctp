<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Tech Stuff : How Printers Print'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Some Technical Stuff</h1>
	<h2>How Printers Print</h2>
	<p>
		Let’s talk a little bit about page composition and computers. Chances are
		that unless you’re a programmer or graphics professional, you’ve never
		given any thought – nor cared – about how words, text, and graphics are
		drawn onto a computer monitor or the printed page.
	</p>
	<p>
		These devices – computer monitors and printers – are in their hearts
		bit-mapped devices. This means that to draw, for example, the letter
		<samp>A</samp>, a printer must place a bunch of dots on the paper such that
		together they look like the letter <samp>A</samp>. The dots, which are
		either present or not present – on or off – are called bits. By
		“mapping” the bits to certain locations, we get readable output. Thus
		these “bit maps” are the foundation of any type of computer output.
	</p>
	<p>
		In the “old days,” the only way to draw text onto the printed page was
		to manually determine the location of every bit, and tell the printer whether a dot
		should be present in a specific location or not. The same went for displaying
		graphics and text on a computer monitor. As a programming task, one can see how
		this would become tedious very quickly. Thus were born page description languages.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> while you may be an expert in page description languages and display
		technology histories, please note that I’m trying to teach concepts here; not
		a factual history.
	</p>
	<p>
		“QuickDraw” is a good example of an early page description language. It
		was the language of the original Macintosh for displaying just about everything on
		the monitor. Instead of a programmer having to manually plot every single dot on
		the screen, he would only issue a ToolBox command telling the Macintosh to draw
		something; the Macintosh ToolBox would then figure out where to place every dot.
	</p>
	<p>
		QuickDraw, Postscript, Quartz, OpenGL, PDF, PCL, and HTML are all examples of other
		page description languages. Some of these are limited to computer monitors; others
		to printers; and some of them work equally well on any type of device. They all
		have something in common: they instruct a computer or printer how to draw
		meaningful information onto a screen or sheet of paper without forcing the
		programmer to manually place every dot.
	</p>
	<p>
		We’ll be primarily interested in Postscript and PCL.
	</p>
	<p>
		Postscript is a propriety language owned by Adobe,
		and it’s been the gold standard of professional
		publishing since the dawn of time (as publishers would define it). Because of
		Postscript’s dominance, and because of the early successes of the Macintosh
		in the publishing industry, it was only natural that Apple would invent a printer
		– the original LaserWriter – that understood the same Postscript
		language as understood by typesetting machines. Furthermore, because Postscript was
		a closed standard, other Postscript devices were guaranteed to render pages the
		same way consitently and repeatably. This has ensured that Postscript remained the
		dominant standard across multiple computer platforms even up to this day. (Compare
		this with the open HTML “standard,” which causes an identical web pages
		to look different on different operating systems, and even the same operating
		system with different browsers)
	</p>
	<p>
		As noted above, the HP 970cse is not a Postscript printer. Inkjet printers very
		seldom are.
	</p>
	<p>
		So why does it matter if a printer is a Postscript printer or not? If Postscript is
		so great, why wouldn’t <em>every</em> printer support it? What is so special
		about Postscript that not having it is a pox upon Unix, Linux, and Mac OS X
		users? This probably comes down to the licensing fees owed to Adobe for the use of
		Postscript. For example, many laser printers are incapable of understanding
		Postscript, as well. Sometimes the same model printer will be available with
		or without Postscript options for a very different price, which usually reflects
		the license royalties paid to Adobe. Some printers have a reverse-engineered
		version of PostScript, and are generally advertised as merely
		PostScript-compatible).
	</p>
	<p>
		In order to cut costs, the page description language of choice for many inkjet
		printers is PCL – printer control language. PCL is certainly the language of
		choice for the HP DeskJet/DeskWriter series of printers. PCL, being a completely
		different language than Postscript, is incompatible with Postscript, of course.
	</p>
	<p>
		Other brands of printers may use their own proprietary page description languages,
		or variations of PCL tailored the specific needs of a particular printer model.
	</p>
	<p>
		Some printers - typically referred to as WinPrinters - don’t utilize a built-in
		page description language of any sort, and typically don’t work with Macintoshes at
		all. This sort of printer is becoming very rare, due to the success of USB on the
		  Macintosh platform. If you have such a printer, it <em>probably</em> won’t work, even
		using these instructions (but read on; who knows?). This is because the page
		description language is built into the printer driver rather than the printer
		itself. And without Windows, a Windows printer driver for a WinPrinter is useless.
	</p>
	<p>
		When the computer operating system (Mac OS X, Classic Mac OS, Windows, et al)
		“draws” a page to be printed, it is the print driver’s
		responsibility to convert the “page drawing” into the appropriate
		PostScript, PCL, or other printer language understandable by the printer. The
		operating system then transmits this data to the printer via the parallel port, USB
		port, AppleTalk address, or IP address (Ethernet), as the case may be.
	</p>
	<p>
		Of course, our problem is that Mac OS X won’t direct output to an IP- or
		AppleTalk-address.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>What we’re going to do:</em> it should be obvious at this point that we’re
		going to be playing with printer languages to a certain extent – no
		programming will be involved, however. Generally we’re going to convert the
		Mac’s native Postscript into something your printer can understand –
		generally PCL. It’s interesting to note, however, that we will also be able
		to take this approach to convert Postscript into Postscript. This is because Mac OS
		X supports only Postscript Level 2. Many users still have dependable Postscript
		Level 1 printers, and these printers don’t understand the newer Level 2 code.
		Hence, we can even translaste Postscript Level 2 into Postscript Level 1.
	</p>
</article>
