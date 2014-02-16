<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Advanced Topics : localhost Printing'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Advanced Topics</h1>

	<h2>localhost Printing</h2>

	<p>
		If you don’t like the idea of using an <a href="scen1_replace_lpriom">
		older version of a system 	printing file</a>, the <samp>LPRIOM.plugin
		</samp> file that we replaced earlier, then this topic may be of 
		interest to 	you.
	</p>

	<p>
		The Mac OS using the LPD system is inherently network-capable – it’s 
		just part of the operating system. Similarly, because the whole BSD 
		system is inherently network-capable, your computer is addressable on 
		the network <em>to itself</em>. In standard Unix parlance, your local, 
		physical computer always has the domain name <em>localhost</em> (well, 
		you <em>can</em> change this, but you’d better know what you’re doing. 
		Since I don’t, I won’t tell you how). Your local, physical computer 
		additionally always has the IP address 127.0.0.0.
	</p>

	<p>
		For some reason, <samp>LPRIOM.plugin</samp> is only broken when NetInfo 
		is missing two parameters, <samp>rp</samp>, the <em>r</em>emote <em>p
		</em>rinter name argument, and <samp>rm</samp>, the <em>r</em>emote <em>m
		</em>achine arugment. Hence, if we want to print to a remote printer, we 
		can use the proper <samp>LPRIOM.plugin</samp>, and supply <samp>rp</samp>
		 and <samp>rm</samp>. So what if we do the following? Add to your <samp>
		ghostscript</samp> printer definition in NetInfo Manager the following 
		parameters and arguments:
	</p>

	<div>
		<table>
			<tbody>
				<tr>
					<td><samp>rm</samp></td>
					<td><samp>localhost</samp></td>
				</tr>
				<tr>
					<td><samp>rp</samp></td>
					<td><samp>ghostscript<samp></td>
				</tr>
			</tbody>
		</table>
	</div>

	<p>
		We would be printing to the “remote” printer localhost, which is really 
		the local machine. The job would go into the queue called <samp>
		ghostscript</samp>, which we’ve already defined.
	</p>

	<p>
		Unfortunately, Unix, being a secure operating system, won’t allow us the 
		permission to do so. The computer, responding to a network request (even 
		though it’s the same physical computer) will not accept the job. We need 
		to give the LPD system the permission to accept jobs from certain 
		computers. In this case, we want LPD to accept remote jobs from the 
		computer “localhost.” To do so, as <samp>root</samp>, do the following 
		in the terminal:
	</p>

	<p><kbd>pico /etc/hosts.lpd</kbd></p>

	<p>When pico starts, add this line by itself:</p>

	<p><kbd>localhost</kbd></p>

	<p>
		Save your work and restart. You will now have the ability to print using this guide and the official Mac OS X
		<samp>LPRIOM.plugin</samp> file.
	</p>

	<p class="drop-shadow lifted yellow">
		<em>Note:</em> some say there may be security implications in allowing 
		<samp>localhost</samp> into your <samp>hosts.lpd</samp> file. I don’t 
		know the implications, and I’m behind a NAT firewall/router, so I don’t 
		worry about it.
	</p>
</article>
