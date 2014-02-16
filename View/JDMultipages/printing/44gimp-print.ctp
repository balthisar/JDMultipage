<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Advanced Topics : gimp-print'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Advanced Topics</h1>

	<h2>gimp-print Drivers</h2>

	<p>
		People seem to say that gimp-print is the best driver to use as far as 
		quality is concerned.
	</p>

	<p>
		It’s invoked by using <samp>-sDEVICE=stp</samp>, and adding some new 
		parameters to your GhostScript execution line:
	</p>

	<ul>
		<li>
			<samp>-sModel=</samp> where you need to provide a supported printer 
			model-string the supports you printer model. See the file <samp>
			/usr/local/share/ghostscript/6.50/gimp-print/README</samp>.
		</li>

		<li>
			<samp>-sQuality=</samp> where you need to provide a supported 
			quality-string, based on the supported printer model. See <samp>
			/usr/local/share/ghostscript/6.50/gimp-print/README</samp>.
		</li>
	</ul>

	<p>
		There are also a good variety of other parameters to specify ink-types, 
		dithering, gamma-control, and paper trays. Again, please refer to the 
		complete documentation in <samp>
		/usr/local/share/ghostscript/6.50/gimp-print/README</samp>.
	</p>

	<p class="drop-shadow lifted yellow">
		<em>Note:</em> because the <samp>README</samp> file is a pure Unix file 
		without a file extension and no type/creator code, you can’t double-click 
		it to open it. You can open your preferred text editor and drag the file 
		to your dock icon if you want. Or, just use pico now that you’re 
		accustomed to it.
	</p>
</article>
