<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Advanced Topics : Hosting a Printer'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Advanced Topics</h1>

	<h2>Hosting a Printer for Easy Setup</h2>

	<p>
		If you have more than one computer to setup for your unsupported network 
		printer, you can easily follow the same instructions you followed for the 
		first computer to get the rest of your computers running. Or, you can follow 
		the instructions in this section to have a host computer do all of the hard 
		work, and make setting up all of your other computers as easy as adding a 
		“supported” computer.
	</p>

	<p class="drop-shadow lifted yellow">
		Note: of course, the “host” computer will act as a print server, and as 
		such will have to be turned on any time you wish to print from another computer. 
	</p>

	<h3>Principles</h3>

	<p>
		We’ve already done the work of setting up a RIP – a <em>r</em>aster <em>i
		</em>mage <em>p</em>rocessor – on one machine. This was Ghostscript, which 
		converts Postscript into a printer language, or raster image. We also 
		already know that Mac OS X is perfectly happy generating Postscript code, 
		without any special setup. And finally, of course, the Mac OS is a model 
		network citizen, being based on a network operating system. We can combine 
		all of these attributes to make non-supported printer setup that much 
		easier on your other systems. 	</p>

	<p>What we will do:</p>

	<ul>
		<li>
			Allow a computer you’ve already setup according to this guide to accept and 
			process remote printing requests from other computers, including Mac OS X, 
			pre-Mac OS X, and Windows systems, and probably any system that can print 
			GhostScript via LPR. 
		</li>

		<li>
			Setup the other computers to print to this host computer using a 
			Postscript printer driver.
		</li>
	</ul>

	<h3>Identify Other Computers (Part One)</h3>

	<p>
		First we need to setup the NetInfo database so that it understands who the 
		remote machines are. We’re going to define a name to go with each machine. 
		Of course, if all of your machines are on DNS on your LAN, than you can 
		probably safely skip this step.
	</p>

	<p>
		Use this example NetInfo Manager screenshot to add your remote machines, 
		i.e., machines that you want to give permission to print to the host.
	</p>

	<div>
		<figure>
			<img src="/img/printing/netinfo5.jpg" alt="The NetInfo manager machines path">
			<figcaption>NetInfo Manager</figcaption>
		</figure>
		<p>
			As you can see, we’re in NetInfo’s <samp>/machines</samp> path. 
			The only properties that you need are a name for each remote 
			machine, as well as the machine’s IP address. The example shows 
			my WinXP box at <samp>192.168.1.103</samp> being known locally as 
			<samp>winbox</samp>.
		</p>
	</div>

	<p class="drop-shadow lifted yellow">
		Note: if you’re on a DHCP server without a DNS system, there’s a 
		possibility that every time you power cycle your computers, they will 
		have a different IP address. Honestly, though, this shouldn’t be a big 
		concern, since the DHCP specification indicates the IP address “leases” 
		should always be renewed to the previous IP address if at all possible. 
		In my home network of 5 devices, for example, none of the machines have 
		ever changed IP addresses on me.
	</p>

	<p class="drop-shadow lifted yellow">
		Note: if you’re on a DNS system, you don’t need to do this step, because 
		your host will use the local DNS system to learn who the other machines 
		are.
	</p>

	<p class="drop-shadow lifted yellow">
		Note: once you’ve set this up, you can use the name of the other 
		machines anywhere in the Mac OS instead of the IP address. Try <kbd>ping 
		winbox</kbd> in the terminal, for example.
	</p>

	<h3>Identify Other Computers (Part Two)</h3>

	<p>
		Next, we need to give the LPD system permission to accept jobs from the 
		other machines that we’ve just identified. In the terminal, make sure 
		you <a href="become_root"><samp>sudo</samp> to <samp>root</samp></a>, 
		and type
	</p>

	<p>
		<kbd>pico /etc/hosts.lpd</kbd>
	</p>

	<p>
		If you’ve decided to <a href="localhost_printing">use the official 
		LPRIOM.plugin file</a>, you’re already familiar with this step. Simply 
		type the machine names that you’ve put into NetInfo, e.g.:
	</p>

	<pre>
	localhost
	powerbook
	winbox
	</pre>

	<p>
		This example gives the machines called <samp>localhost</samp>, <samp>
		powerbook</samp>, and <samp>winbox</samp> permission to print on the 
		host machine.
	</p>

	<p>
		Now may be a good time to restart the computer to make sure that the LPD 
		system properly restarts, although if you want to restart it manually, 
		do as root:
	</p>

	<pre>
	<kbd>/usr/libexec/lpd -l</kbd>
	<kbd>lpc restart ghostscript</kbd>
	</pre>

	<p>
		Of course, this assumes that you want the <samp>ghostscript</samp> queue 
		to be the one responsible for handling the incoming requests.
	</p>

	<p class="drop-shadow lifted yellow">
		Note: adding IP addresses to the <samp>/etc/hosts.lpd</samp> file should 
		work, but it doesn’t seem to in my case. That’s why we have the extra 
		step of adding machine names to <samp>/machines</samp>.
	</p>

	<h3>Setup the Other Computers to Print to the Host</h3>

	<p>
		From your other Mac OS X computers, use the Print Center and choose Add 
		Printer. Make sure you select the <samp>LPR Printers using IP</samp> 
		option, and follow this example:
	</p>

	<div>
		<figure>
			<img src="/img/printing/printcenter4.jpg" alt="Print Center Screenshot">
			<figcaption>Adding a printer in Print Center</figcaption>
		</figure>
		<p>
			The printer address is the IP address of the printer host. If you have 
			DNS or have setup a <samp>/machines</samp> entry in NetInfo for the host 
			computer, you can use that name instead of the IP address if you wish.
		</p>

		<p>
			Make sure you do <em>not</em> use the default queue on the server; 
			instead, you want to use the name of the print queue that will handle 
			the Postscript-to-printer-language conversion. If you’ve followed the 
			recommendations in this guide, that will be <samp>ghostscript</samp>.
		</p>
	</div>


	<h3>The Results</h3>

	<p>
		Print from the remote machine. You should eventually have some output.
	</p>

	<p>
		Here’s a summary of what happens:
	</p>

	<ul>
		<li>
			You print via Postscript from a remote machine to a properly-configured 
			host machine.
		</li>

		<li>
			The host machine’s print queue processes its output filter, which 
			converts the Postscript using Ghostscript.
		</li>

		<li>
			This is passed back to the network to the network printer.
		</li>

		<li>
			You’ve done the “hard work” of configuring Ghostscript on but a single 
			computer; you’ve very easily printed from <em>another</em> computer 
			without doing any special work at all.
		</li>
	</ul>
</article>
