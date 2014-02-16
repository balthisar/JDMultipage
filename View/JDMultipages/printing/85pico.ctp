<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Tutorials : Pico'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Related Tutorials</h1>

	<h2>pico</h2>

	<p>
		<samp>pico</samp> is a text-based text file file editor. You start it from
		the terminal by typing <kbd>pico</kbd> or <kbd>pico <em>filename</em></kbd>. It looks
		like this:
	</p>

	<div>
		<figure>
			<img class="pad75" src="/img/printing/pico.jpg" alt="Pico text editor screenshot">
			<figcaption>An empty pico document</figcaption>
		</figure>

		<p>
			The items at the bottom indicate keystrokes, and serve as simple reminders
			of some of the things you can do in pico. The <samp>^</samp> symbol indicates
			that you press the <kbd>control</kbd> key in conjunction with the indicated key
			to perform the desired action. For example, pressing <kbd>control-o</kbd>
			allows you to save the current file.
		</p>

		<p>
			In this documentation you’ll be told to type, for example, <kbd>pico
			<em>some_file</em></kbd>. You’ll edit the file to make changes, but you’ll have to use
			the cursor/arrow keys to move around ; your mouse won’t work unless you’ve set
			up <kbd>option-click</kbd> in the terminal preferences (beyond our scope here).
			When you’re done editing a file, simply type <kbd>control-o</kbd>,
			<kbd>enter</kbd>, <kbd>control-x</kbd>. This writes the file, uses the existing
			name, and then exits pico.
		</p>

	</div>
</article>
