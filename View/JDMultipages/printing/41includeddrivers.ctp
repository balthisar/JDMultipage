<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Advanced Topics : Additional Printer Drivers'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Advanced Topics</h1>

	<h2>Additional Printer Drivers</h2>

	<p>
		If you use the recommended distribution of GhostScript, AFL-GhostScript 
		6.50.5, you’ll have support for all of the following printers, including 
		those separately-but-integratedly supported by gimp-print and Uniprint.
	</p>

	<p>
		The following table shows all of the supported <samp>-sDEVICE=</samp> 
		types that the recommended GhostScript installation should put on your 
		system. Note that not all devices are printers, since GhostScript is not 
		merely a printer driver. Clicking on the device type will open a new 
		window with an explanation of what that device type is for, courtesy of <a 
		href="http://www.linuxfoundation.org/collaborate/workgroups/openprinting"> 
		http://www.linuxfoundation.org/collaborate/workgroups/openprinting</a>.
	</p>

	<p class="drop-shadow lifted yellow">
		<em>Note:</em> In order to eliminate link rot, I’ve removed the 
		table of drivers. For a complete, maintained list of drivers, 
		please refer to <a href= "http://www.linuxfoundation.org/collaborate/workgroups/openprinting">
		http://www.linuxfoundation.org/collaborate/workgroups/openprinting</a>.
	</p>

	<p>To view the built-in, “native” drivers that GhostScript supports, do…</p>

	<p><kbd>gs –h</kbd></p>

	<p>
		…in the terminal. This will provide a list of <samp>-sDEVICE=</samp> 
		types that are installed on your system.
	</p>

	<p>
		Many of these printers have added, special GhostScript parameters that 
		you won’t find in <samp>man gs</samp>. Luckily there’s a 
		just-about-complete reference to all of these devices at <a href=
		"http://www.linuxfoundation.org/collaborate/workgroups/openprinting"> 
		http://www.linuxfoundation.org/collaborate/workgroups/openprinting</a>. 
		As an added benefit, this site will tell you which GhostScript -<samp>
		sDEVICE=</samp> to use for your printer.
	</p>
</article>
