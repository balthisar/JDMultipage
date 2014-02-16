<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Tutorials : Start Terminal'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Related Tutorials</h1>

	<h2>Start a Terminal Session</h2>

	<p>
		The application Terminal is your interface to the BSD layer of you
		Macintosh. In the Finder, simply start from your Applications folder,
		and you’ll find Terminal here:
	</p>

	<p><samp>/Applications/Utilities/Terminal</samp></p>

	<p>Double-click it, and when it starts, it will look something like this:</p>

	<div>
		<figure>
			<img src="/img/printing/terminal.jpg" alt="The Terminal Window">
			<figcaption>Mac OS X Terminal</figcaption>
		</figure>

		<p>
			The message <samp>Welcome to Darwin</samp> is simply Mac OS X’s way of
			saying hello. But <samp>[localhost:~]</samp> tells you that you are logged into
			your local machine, <samp>localhost</samp>, and the current working directory
			is <samp>~</samp>, which is the home directory of whatever current user that
			you are. For example, my home directory on the system is
			<samp>/Users/~jderry</samp>, and <samp>~</samp> is an automatic shortcut to
			that directory. If I were to type <kbd>cd /Applications</kbd>, the terminal
			would prompt me with <samp>[localhost:/Applications]</samp>. Finally, the
			<samp>jderry%</samp> tells you what user you currently are.
		</p>
	</div>
</article>
