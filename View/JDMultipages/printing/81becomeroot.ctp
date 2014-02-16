<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Tutorials : Become Root'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Related Tutorials</h1>

	<h2>Become Root</h2>

	<p>
		Once you’ve <a href="start_mac_terminal">started the terminal,</a> you’ll
		sometimes want to become root, or the superuser. The root account is capable of
		doing anything on the computer, including destroying important files! Be
		careful, and use the power wisely.
	</p>

	<p>
		There are multiple ways to enable and become root on Mac OS X.
		We will only use a single method for use in this documentation:
	</p>
	<ul>
		<li>
			Assume the root account from a regular administrator account
			for the duration of the current Terminal session.
		</li>
	</ul>
	<p>
		There are various other ways to become the root user; I suggest
		checking the the Apple Discussion Boards or with Google Groups
		if you should have an interest in them.
	</p>
	<p>
		To become root for the purposes of this documentation, ensure
		that you’ve logged onto your Macintosh as an Administrator user;
		your default account is an Administrator. Then
		<a href="start_mac_terminal"> start a terminal</a>.
		You should see something like this:
	</p>

	<div>
		<figure>
			<img src="/img/printing/terminal.jpg" alt="Terminal window">
			<figcaption>Mac OS X Terminal</figcaption>
		</figure>

		<p>
			Simply type <kbd>sudo su</kbd>. You’ll be prompted for a password. Enter
			your own password. The first time you do this, you’ll receive a message that
			essentially tells you to behave. Future <kbd>sudo su</kbd> commands won’t show
			this message, and until you logout from your account, you won’t even be
			prompted for a password again.
		</p>
	</div>
</article>
