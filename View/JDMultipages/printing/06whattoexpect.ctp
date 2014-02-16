<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Introductory Notes : Expectations/Limitations'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Introductory Notes</h1>
	<h2>What to Expect/Limitations</h2>
	<p>
		These instructions should get basic printing to work for you using any printer
		supported by GhostScript. These instructions only show you how to make work a
		single output resolution with no color/black-and-white selection options. But
		don’t worry; with the learning experience and some other pearls of wisdom
		emparted here, you’ll be able to do that yourself.
	</p>
	<p>
		In a short while, you’ll have to decide whether you’ll be using an IP
		printer as the “real” printer, an AppleTalk printer as the
		“real” printer, or an SMB (Windows-shared) printer as the
		“real” printer. In general, I’ve had better results using the
		AppleTalk option, and if your printer or print-server is capable of AppleTalk, I
		recommend it to you, too. Nay-sayers will claim that AppleTalk is slow, but
		don’t worry about that - your printer is probably a lot slower than a
		“slow” AppleTalk connection (especially if the printer is an inkjet).
	</p>
	<p>
		If you decide to use IP as your “real” printer, then there are some
		other minor inconveniences that I’ve detected. On my iMac the whole LPD
		system will come to a sudden stop after I log out of my user account and put the
		machine to sleep. This means that after waking the machine up and logging into an
		account, the network printer will no longer print. The Mac OS X Print Center will
		not complain, and everything will seem well. However the system error log
		(<a href="examine_error_log">use the <em>Console</em> application to view
		it</a>) will claim that your printer was not found. When you restart the computer
		and print another job, the LPD gets reset, and all of the stalled jobs (everything
		you tried to print but didn’t get printed) will also be printed. Since
		nothing ever actually gets “lost” (and I don’t brag about my
		system uptime), this isn't a real tragedy. AppleTalk users are affected by this,
		too, but they have a <a href="lp_dies">workaround</a>
		until the next restart.
	</p>
</article>
