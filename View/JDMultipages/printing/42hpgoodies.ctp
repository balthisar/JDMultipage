<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Advanced Topics : HP Goodies for the 970'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Advanced Topics</h1>

	<h2>HP Goodies for the 970</h2>

	<p>
		With the current release of this guide, my own HP DeskJet 970 is a better-supported printer.
		Using the <samp>–s DEVICE=cdj970</samp>, I have support for the following new parameters in
		GhostScript:
	</p>

	<ul>
		<li>
			<samp>-dQuality=</samp> where <samp>-1</samp> is draft mode, <samp>-2</samp> is normal
			mode, and <samp>1</samp> is presentation mode.
		</li>

		<li>
			<samp>-dPapertype=</samp> where <samp>0</samp> is plain paper, <samp>1</samp> is bond,
			<samp>2</samp> is special, <samp>3</samp> is glossy, and <samp>4</samp> is transparency.
		</li>

		<li>
			<samp>-dDuplex=</samp> where <samp>0</samp> is non-duplex, <samp>1</samp> is block duplex,
			and <samp>2</samp> is book duplex.
		</li>
	</ul>

	<p>
		These are known to work with other HP printer drivers as well. You can find out if your
		own HP printer works with these parameters at the very helpful
		<a href="http://www.openprinting.org/">http://www.openprinting.org/</a> website.
	</p>
</article>
