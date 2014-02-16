<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Tutorials : rm dangers'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Related Tutorials</h1>

	<h2>sudo rm -R / - <em>never!</em></h2>

	<p>
		If someone tricks you into typing this, you’ll erase everything off of all
		of your mounted hard drives. Not just the system drive, but <em>all</em> of
		them!
	</p>

	<p>
		<samp>rm</samp> means remove. <kbd>-R</kbd> means recursively, that is,
		every directory inside the target. <kbd>/</kbd> is the target, and means the
		top level of your computer, which logically represents all of your mounted hard
		drives.
	</p>

	<p>So, don’t do this. That would just be silly.</p>
</article>
