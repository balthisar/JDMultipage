<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Advanced Topics : Uniprint Drivers'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Advanced Topics</h1>

	<h2>Uniprint Drivers (*.upp files)</h2>

	<p>
		GhostScript also has support for Uniprint, a universal driver system that 
		produces better output than the built-in GhostScript drivers. Instead of 
		providing <samp>-sDEVICE</samp> and <samp>-r</samp> parameters, specify 
		<samp>@devicename.upp</samp>. For example in the <samp>lpd.filter</samp> 
		file, I could start my <samp>$GS</samp> command so:
	</p>

	<p><samp>$GS @cdj690.upp</samp></p>

	<p>in order to print to my Color DeskJet 690 printer.</p>

	<p>
		If none of the built-in GhostScript devices seem to work for your printer, 
		you can see if there is a Uniprint alternative. The applicable <samp>*.upp
		</samp> files are in <samp>/usr/local/share/ghostscript/6.50/lib</samp> 
		(if you use the recommended GhostScript package). Also, do a web search 
		for other Uniprint references.
	</p>
</article>
