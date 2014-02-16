<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Introductory Notes : Terms and Caveats'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Introductory Notes</h1>
	<h2>A Couple of Terms and Caveats and Prerequisites and Stuff</h2>
	<p>
		First off, don’t be too scared by the procedures you’ll find here. In
		order to accomplish our goal of printing, we’re going to have to leave our
		formerly cozy, comfortable Macintosh world and dive into the “dark
		world” of Unix. This something that the average Macintosh user never has had
		to do in the past. Nevertheless, if you’re careful and deliberate in
		following this guide, you’ll come out okay; have a working printer (I hope);
		and learn some things about the new Macintosh way (and by extension, Unix).
	</p>
	<p>
		Through these procedures I’ll use the term “BSD” to refer to the
		underlying, low-level Macintosh operating system. This should properly be referred
		to as “Darwin,” since Apple has made sufficient changes to BSD (like
		using Mach instead of the BSD kernal) that it merits its own designation. However,
		saying “BSD” probably works better for everyone, because it’s
		referred to often in the <samp>man</samp> pages and in much of the
		documentation you’ll find available on the internet.
	</p>
	<p>
		As I refer to “Mac OS X,” I generally mean the high-level operating
		system, i.e., the user interface. Pay attention to context just in case, though.
	</p>
	<p>
		You should note that BSD is always running, whether your terminal program is
		running or not. It is, after all, the basis of the entire Macintosh Operating
		System. The terminal is merely a utility that allows you to directly execute
		commands to the BSD system. As you’ll learn when we set up GhostScript, there
		does not need to be a terminal window open in order to run BSD
		“commands.”
	</p>
	<p>
		Here are some things you should already know before getting started. If you don’t
		know them, follow the links and learn how to do some of these essential basics
		before proceding.
	</p>
	<ul>
		<li>
			How to <a href="start_mac_terminal">start a
			terminal</a> (start the <em>Terminal</em> application).
		</li>

		<li>
			How to <a href="become_root">become root</a> in
			a terminal (<samp>su</samp> to <samp>root</samp>. If you
			haven’t enabled root, then <kbd>sudo su</kbd> to root.)
		</li>

		<li>
			How to <a href="examine_error_log">look at the
			error log</a> (use the <em>Console</em> application).
		</li>

		<li>
			You should know how to <a href="move_around_terminal">use
			<samp>cd</samp> to move around the file system</a> in the terminal.
		</li>

		<li>
			You should know <a href="dont_rm_everything"> to
			<em>never</em>, <em>ever</em> type</a> <kbd>sudo rm -R /</kbd>
			into a terminal window!
		</li>

		<li>
			You should <a href="pico_on_mac">know enough about
			<em>pico</em></a> that point-and-click doesn’t do anything; that you need to
			use arrow keys to move around; and that <kbd>Ctrl-O</kbd>,
			<kbd>Return</kbd>, <kbd>Ctrl-X</kbd> save
			your file and return you to the command line. If you prefer to use another text
			editor, feel free to do so, but please know how to use it.
		</li>

		<li>
			You need to know that you need to be very, very careful about
			everything you do as the <samp>root</samp> user.
		</li>

		<li>
			Above all, everything you do here, you do at your own risk!
		</li>
	</ul>
</article>
