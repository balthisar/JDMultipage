<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Tech Stuff : Tech Overview'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Some Techical Stuff</h1>
	<h2>Technical Overview</h2>
	<p>The essence of our plan involves the following goals:</p>
	<ul>
		<li>
			Trick Mac OS X to print to a phony PostScript printer. This gives us perfectly
			good, useable Postscript code, which we will use, even though Postscript
			doesn’t do anything good for our printers.
		</li>

		<li>
			Intercept the Postscript code from the high-level Mac OS, in order to handle it
			in the BSD subsystem.
		</li>

		<li>
			If necessary according to your own printing scenario, process the stolen
			Postscript through a program called GhostScript that is capable of converting
			PostScript/PDF into a variety of formats, including a language that your printer
			understands.
		</li>

		<li>
			Route the stolen GhostScript-generated code (or the untouched Postscript if
			applicable) to a real printer that the high-level Mac OS doesn’t even really
			need to know about.
		</li>
	</ul>
	<p>
		These are the highlights of the steps we will take:
	</p>
	<ul>
		<li>
			<em>Replace the Mac OS X.1 LPRIOM.plugin file with that from 10.04.</em> This is
			because the newer version of the file supplied with Mac OS X 10.1 and Mac OS X
			10.1.1, and Mac OS X 10.1.2 breaks the ability to use most NetInfo-added printers
			in the Print Center. This will be an optional step for those who are concerned
			about allowing <a href="localhost_printing">localhost
			printing</a>.
		</li>

		<li>
			<em>Install AFL-GhostScript.</em> This is because GhostScript will do the vast
			majority of our work. This is the program that will convert PostScript into the
			printer command language for your printer. You could also read about GhostScript
			to make it do other interesting things with PostScript files, if you care to. An
			example of this is using it as a distiller to create your own PDF files. This
			most likely will be a required step, but some of the scenarios don’t
			require GhostScript, particulary those printing to Postscript Level 2 printers.
		</li>

		<li>
			<em>Use NetInfo Manager to define one or two Printers.</em> This is because BSD
			doesn’t know about Print Center printers, and we need printers that BSD can
			know about. Also, Print Center doesn’t provide the ability to use filters,
			which are essential to our project. Conversely, however, we can add NetInfo
			printers to the Print Center. The first printer will be a phony printer that you
			will add to Print Center. It’s phony in the respect that it won’t
			actually print anything in its own right. It will provide the PostScript code
			that we need, as well as the hook we need to get our filter to run under BSD
			(i.e., this is how we steal the job from Print Center). The second printer will
			be used if you opt for IP instead of AppleTalk or SMB, and it will be a real
			printer that exists on the network, and this is where the stolen print job will
			ultimately be sent.
		</li>

		<li>
			<em>Build our Spool Directories.</em> Spool directories are needed by the LPD
			system in order to process files. These are essentially buffer areas for
			temporary file storage. Under Mac OS X, you generally don’t need to worry
			about such things, but since we’re doing this in BSD, we need to do things
			the BSD way.
		</li>

		<li>
			<em>Add our printers to the Print Center.</em> Really, we should only need to add
			one printer to the Print Center, and that’s the phony printer we will have
			defined in NetInfo. Once the phony printer has sent the job to our print filter
			(i.e., GhostScript), it will be removed from the Print Center’s list of
			jobs, despite the fact that the job may not really be done yet. This is because
			from the Print Center’s perspective, the job is done. The Print Center
			doesn’t know what games we’re playing down deep in BSD.
		</li>

		<li>
			<em>Use the terminal to build the filter.</em> This will be a script file
			containing the Unix commands that process the stolen job from the high-level Mac
			OS X. The filter will send Postscript code to GhostScript, and in turn send
			GhostScript’s output to the real printer.
		</li>

		<li>
			<em>Print!</em> Gratification, finally!
		</li>
	</ul>
</article>
