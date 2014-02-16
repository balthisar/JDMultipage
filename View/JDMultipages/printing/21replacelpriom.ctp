<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Getting to Business : Replace LPRIOM.plugin'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Getting Down to Business</h1>
	<h2>Replace the Mac OS X 10.1.x LPRIOM.plugin file with that from 10.04</h2>

	<p class="drop-shadow lifted yellow">
		<strong><em>File Needed!</em></strong> In this step, you’ll need to
		<a href="/files/balthisarfiles.sit">download balthisarfiles.sit</a>
		and then unstuff it in a location that’s known and
		accessible to you. You’ll be using it very shortly, below.
	</p>

	<p>
		Mac OS X depends on a file called <samp>LPRIOM.plugin</samp> in
		order for LPR printing to work. It’s located at:
		<samp>/System/Library/Printers/IOMs/</samp>
	</p>
	<p>
		It’s been determined that the upgrade from Mac OS X 10.04 to 10.1 (and
		subsequently 10.1.1 through 10.1.5) has replaced this file with a newer version
		that doesn’t allow LPD printing to work properly. Hence, our first goal is to
		replace this file with an older version “rescued” from Mac OS X 10.04.
		Note: this file is actually a Mac OS X “package,” so it will appear as
		a directory in the terminal, and must be treated as such.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> keep a backup of this original file somewhere. Since the previous versions of
		this guide was put out, Apple has released updates that puts Mac OS X at 10.1.5.
		These recent updates still breaks proper LPR operation, and you’ll need to
		revert back to this 10.04 version again any time Apple keeps shipping a faulty
		file. Whenever you perform an OS upgrade in the future, and printing stops working,
		try replacing this file again.
	</p>
	<p class="drop-shadow lifted yellow">
		<em>Note:</em> it’s possible to skip this step. Check out <a href="localhost_printing">localhost
		printing</a> in this guide.
		I <em>do</em> recommend replacing the <samp>LPRIOM.plugin</samp>
		until you have your printer up and running – it’s one less thing to go
		wrong when troubleshooting. Then, when you know things work, you can revert to the
		original <samp>LPRIOM.plugin</samp> and use localhost printing.
	</p>
	<p>
		To perform the surgical replacement, <a href="start_mac_terminal">open a terminal</a>
		window, and <a href="become_root"><kbd>su</kbd> to <kbd>root</kbd></a>,
		then type the following:
	</p>

	<dl class="codeAndDescription">
		<dt>cd /System/Library/Printers/IOMs</dt>
		<dd>…puts you in the correct directory.</dd>

		<dt>mv LPRIOM.plugin ~/originalLPRIOM.plugin</dt>
		<dd>
			…moves and renames the 10.1 file so we can keep it as a backup. Using
		   the <kbd>~/</kbd> syntax means it will go to your home
		   directory, but it’s your backup; put it where you want.
		   If you simply rename it in place, your Print Center will have
		   <em>two</em> “LPR Printers Using IP” in the Add Printer options, which
		   is not what we want.
		</dd>

		<dt>cp -R</dt>
		<dd>
			…to copy the file, where <samp>…path…</samp> designates the
			complete directory path to wherever you unpacked the file.
		</dd>
	</dl>

	<p class="drop-shadow lifted yellow">
		<em>Note:</em> you need to know the path to the file you’re copying. For example, had
		I unstuffed it in my own “Downloads” folder, the
		<samp>…path…</samp> I would use would be <samp>~jderry/Downloads/balthisarfiles/LPRIOM</samp>.
	</p>
	<p>
		That’s it. You will now be using the old and not-improved version of the
		LPRIOM.plugin file. You may want to restart the computer, just to make sure the OS
		knows about the change. Better safe than sorry, right?
	</p>
</article>
