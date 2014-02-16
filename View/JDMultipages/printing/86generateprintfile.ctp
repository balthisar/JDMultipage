<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Tutorials : Generate Printer Test Files'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Related Tutorials</h1>

	<h2>Generate Printer Test Files via Windows</h2>

	<div>
		<p>
			These instructions show Windows 98. Other Windows versions are similar, so
			you’ll have to fend for yourselves.
		</p>

		<figure>
			<img class="pad75" src="/img/printing/windowprinters1.jpg" alt="Windows add printer wizard">
			<figcaption>Windows 98 Printers folder</figcaption>
		</figure>
	
		<p>
			To generate the printer test file, we’ll need to setup a fake printer in
			Windows. Obviously you’ll need access to a Windows machine or Virtual PC to do
			this. Start by going to the <samp>Printers</samp> folder in <samp>My
			Computer</samp> or in <samp>Settings</samp> or in <samp>Control Panels</samp>, and
			start the “Add Printer” wizard by double-clicking it.
		</p>
	</div>
	

	<p>
		This wizard will execute, as shown below. Follow the screens, remembering to
		select “Local Printer” when asked, and specifying the printer you want to
		generate a file for, and specifying that you want to print to the port
		FILE:.
	</p>

	<img class="centered" src="/img/printing/printwizard1.jpg" alt="printwizard 1">
	<img class="centered" src="/img/printing/printwizard2.jpg" alt="printwizard 2">
	<img class="centered" src="/img/printing/printwizard3.jpg" alt="printwizard 3">
	<img class="centered" src="/img/printing/printwizard4.jpg" alt="printwizard 4">
	<img class="centered" src="/img/printing/printwizard5.jpg" alt="printwizard 5">

	<p>
		This example shows adding an HP DeskJet 693; of course you’ll use your own
		printer model instead. If you choose to answer <samp>Yes</samp> to a test page,
		you’ll be prompted for a filename. You can name and save this file anywhere you
		want, and copy it to your Macintosh for testing later.
	</p>

	<p class="drop-shadow lifted yellow">
		Note that in this documentation we refer to these Windows print
		files with the extension <samp>.PCL</samp> instead of <samp>.PRN</samp>, but
		files extensions are arbitrary anyway on the Mac, so just make sure you know
		which is which.
	</p>
</article>
