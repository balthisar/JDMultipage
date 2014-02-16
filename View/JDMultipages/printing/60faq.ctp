<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Miscellany : FAQ’s'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Frequently Asked Questions</h1>

	<h2>FAQ’s for Help</h2>

	<h3>My print is all double-size! Help!</h3>

	<p>
		Try removing the <samp>-r600</samp> parameter from the <samp>lpd.filter
		</samp> file. Your printer, it seems, is getting confused by the 
		parameter, and will probably only manage to print at <samp>300dpi</samp> 
		with this hack.
	</p>

	<h3>LPR printers are all known by their spool name or IP address! Help!</h3>

	<p>
		Apple doesn’t support the naming of LPR printers added in the Print 
		Center. This could be an issue if your network printers all have the 
		identical queue name: what printer are you printing to? Additionally, if 
		you have to remember every printer on your system by IP address, then 
		you’re in for a world of confusion.
	</p>

	<p>
		One simple possibility is to depend on your network’s DNS services, if 
		any. If your network has a DNS server on the LAN side, you can specify 
		the printer domain name instead of the IP address. If you do this as 
		well as “Enable Default Queue on Server,” then the Print Center will 
		list your printer by domain instead of IP address.
	</p>

	<p>
		That’s not much of an improvement, however, and only works if your 
		network has a DNS server. The alternative, now that you know the basics 
		of configuring a printer in NetInfo, is to get rid of all of your LPR 
		printers from the Print Center. That’s right; remove them all. If you 
		configure your LPR printers in NetInfo, you can give them any name you 
		want to. Then, in the Print Center, instead of adding printers using the 
		LPR option, add them from Directory Services.
	</p>

	<h3>LPR printing fails to Unix/NextStep/Linux Print Server Boxes! Help!</h3>

	<p>
		Supposedly this is a “feature” of LPD printers that has just never been 
		implemented until Apple decided to implement it. You know this problem 
		affects you if your system error log shows lp: illegal format character 
		'o' or something to that effect.
	</p>

	<p>
		The good news is, this only happens when something is printed from any 
		Mac OS X application. What do you mean that doesn’t sound like good 
		news? Because this bug doesn’t affect anything printed from the BSD 
		subsystem, you can apply the knowledge you learned earlier to get around 
		this bug. Define your printers in NetInfo; intercept the print job from 
		your dummy Print Center printer, and filter it out to your “real” print 
		server. This should work like a charm, and if it’s a PostScript printer 
		to boot, you won’t even need to involve GhostScript.
	</p>

	<p>
		New! If you don’t have any other reason to use a print filter from Mac 
		OS X, this bug is alledgedly no longer present in Mac OS 10.1.2. Just 
		make sure you don’t replace the LPRIOM.plugin file.
	</p>

	<h3>printcap doesn’t seem to do anything! Help!</h3>

	<p>
		The Unix/Linux printcap is unused in Apple’s version of BSD, unless you 
		enter single-user mode. Instead, all devices are looked up in NetInfo.
	</p>

	<p>If you ever have a printcap you want to load into NetInfo, you can do this as root:</p>

	<p><kbd>niload . &lt; printcap</kbd></p>

	<h3>Your example only prints at 600DPI in color! Help!</h3>

	<p>
		This is true. It’s good enough for me, and simple enough to get you 
		through this tutorial. However, using what you’ve learned here, you can 
		create other virtual printers that provide the options you really want. 
		In NetInfo Manager, try creating something akin to these: <samp>dj970c 
		(color)</samp>, <samp>dj970bw (black and white)</samp>, 
		<samp>dj970lowres</samp> (low resolution, maybe 300DPI), and so on. 
		Don’t forget to set the if property for each of these virtual printers
		such that they point to different filter files. Then, change your filter
		files so that they all call GhostScript with the parameters that give
		you the results that you want.
	</p>

	<h3>This is a lot of trouble, and it doesn’t work well, and the output sucks! Help!</h3>

	<p>
		Gift horses, and mouths, and all that. Yeah, I’m waiting just as hard as 
		you are for a “proper” driver to be released by my printer manufacturer. 
		But in the meantime, this “hack” at least gives you and I the ability to 
		print useable, full-page documents under Mac OS X.
	</p>

	<h3>What about Serial Ports? Help!</h3>

	<p>
		Seems that Apple doesn’t support printers on the printer port anymore. I 
		do know that Mac OS X acknowledges the existence of the serial ports. 
		They’re called <samp>/dev/cu.printer</samp> and <samp>/dev/cu.modem</samp>
		for the printer and modem ports, respectively. I don’t have a 
		serial printer to test this with, but I think I would try either setting 
		the <samp>rm</samp> parameter of my NetInfo printer to one of these 
		devices instead of the IP address, or change the -sOutputFile parameter 
		for GhostScript to point to this device. You’d have to investigate the 
		man pages for printcap for some other required parameters, too, 
		especially those that deal with port speed. You’d probably need to look 
		to enable hardware-handshaking on these ports, too.
	</p>

	<h3>I <em>have</em> a PostScript printer, but it doesn’t work! Help!</h3>

	<p>
		You probably have a Postscript Level 1 printer, and your Macintosh only 
		prints Postscript Level 2. You’ll need to run through these 
		instructions, and use the <samp>sDEVICETYPE=psmono</samp> driver. Also 
		look at the other drivers that your Ghostscript distribution offers with 
		<kbd>gs -h</kbd> in the terminal.
	</p>

	<h3>Why do I keep getting Burst Pages, and how do I stop them?</h3>

	<p>
		Add a property called <samp>sh</samp> to your printer definitions in 
		Netinfo. You can specify <samp>sh</samp> without any value; its presence 
		merely means <em>s</em>upress <em>h</em>eader pages.
	</p>

	<h2>FAQ’s About This Guide</h2>

	<h3>What's up with “Not coming any time soon”?</h3>

	<p>
		Those are sections of the guide that I will not be writing. In order to 
		maintain the original content flow and table of contents for the Guide 
		(i.e., prevent link rot), I’ve decided to leave the sections in there, 
		even though they’ll never, ever be completed. All the same, there’s 
		enough other, good information available in the guide that their mere 
		presence should be enough for you hit the search engines and come up 
		with your own solutions in relatively short order.
	</p>

	<h3>What’s the Future of This Guide</h3>

	<p>
		As you know, the Guide is no longer being supported, and as such, future 
		updates are pretty frozen. I’ve made some immaterial content changes in 
		November of 2007 and a few more in March 2013, but only for the purpose 
		of adapting the Guide to fit this site’s look and design.
   </p>

	<h3>Why not just stop putting the Guide online?</h3>

	<p>
		I keep considering pulling the Guide altogether, but the hit counts 
		remain high enough that it seems to be a popular destination even today. 
		Are there really that many Mac OS X 10.1 and below users still out there?
	</p>

	<h3>Why did you stop working on the guide?</h3>

	<p>
		Mac OS X 10.2 came out, and the inclusion of CUPS as an official part of 
		the operating system negated almost all the value in this Guide. If I 
		were a fancy developer charging for access to the guide, then I guess 
		the profit incentive would have caused me to have an extra computer just 
		for developing the Guide, but that’s not the case. Progress happens.
	   </p>
</article>
