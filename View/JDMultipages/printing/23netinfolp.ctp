<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Getting to Business : Choose Scenario'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Getting Down to Business</h1>
	<h2>Use NetInfo Manager to Define our “lp” Printer</h2>
	<h3>(AppleTalk Users: Skip This)</h3>

	<div>
		<p>
			If you have to use TCP/IP to communicate with your printer, then we need to define
			a second printer in NetInfo manager. This second printer will be a “Unix
			only” printer, and we need to setup the parameters that the Unix LPD (Line
			Printer Daemon) system needs in order to deliver the processed print job to the
			real, physical printer on your network. Users who will be using AppleTalk to
			communicate with their printers can skip this step, because these printers
			aren’t accessed in BSD by the LPD system.
		</p>

		<p>
			Using your <a href="scen1_netinfo_dummy_printer">knowledge from the previous section</a>,
			use NetInfo Manager to build a new printer called <samp>lp</samp>, and configure
			it to match the property name and values in the table below. Note again that
			everything is case sensitive, but the top-to-bottom order doesn’t matter.
		</p>

		<table>
			<thead>
				<tr>
					<td colspan="2">Printer Definition for your <samp>new_directory</samp></td>
				</tr>
			</thead>
		<tbody>
			<tr>
				<td>name</td>
				<td>lp</td>
			</tr>
			<tr>
				<td>sd</td>
				<td>/var/spool/lpd/lp</td>
			</tr>
			<tr>
				<td>lo</td>
				<td>lock</td>
			</tr>
			<tr>
				<td>lp</td>
				<td>/dev/null</td>
			</tr>
			<tr>
				<td>ppdurl</td>
				<td>/usr/local/lib/lpd/GhostScript.ppd</td>
			</tr>
			<tr>
				<td>rm</td>
				<td>192.168.1.100</td>
			</tr>
		</tbody>
		</table>

		<p>
			This time, rather than choosing your own creative name, you’re probably
			better off just leaving the name <samp>lp</samp>.
		</p>
		<p>
			Now, for this printer <samp>lp</samp>, you’ll notice the
			<samp>rm</samp> line contains an IP address. The IP address of my
			printer will likely not work on your own network, so you’ll have to put in
			the appropriate IP address for your own printer.
		</p>
		<p>
			Below you can find a reference of the NetInfo Manager with <samp>lp</samp> printer definition added.
		</p>

		<figure class="center">
			<img src="/img/printing/netinfo4.jpg" alt="NetInfo manager sample window">
			<figcaption>Figure 1 - NetInfo Manager with <samp>lp</samp> definition</figcaption>
		</figure>
	</div>
</article>
