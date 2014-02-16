<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Getting to Business : Choose Scenario'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Getting Down to Business</h1>
	<h2>Build Our Spool Directories</h2>

   <p>
	 Next we need to build the directories where BSD/Mac OS will temporarily store print
	 jobs during processing. These are called spool directories.
   </p>
   <p>
	 <a href="start_mac_terminal">Start a terminal</a> and
	 <a href="become_root"><samp>su</samp> to <samp>root</samp></a>
	 if you have not already done so. Then, do the following to
	 create a spool directory for the printer <samp>ghostscript</samp>:
   </p>

	<dl class="codeAndDescription">
		<dt>mkdir –p /var/spool/lpd/ghostscript</dt>
		<dd>
			creates a spool directory for the printer <samp>ghostscript</samp>.
			Remember, if you changed the name in the NetInfo Manager, make
			sure you use the same name in this whole step.
		</dd>
		<dt>cd /var/spool/lpd</dt>
		<dd>
		   move to the <samp>/var/spool/lpd</samp> directory.
		</dd>
		<dt>touch ghostscript/.seq</dt>
		<dd>
			creates file called <samp>.seq.</samp> I don’t know why it’s required.
		</dd>
		<dt>chown –R daemon.daemon ghostscript</dt>
		<dd>
		sets the correct owner for the directory and contents.
		</dd>
	</dl>

		
	<p>
		If you’re using TCP/IP printing, you also need to create a spool directory
		for the printer lp.
	</p>

	<dl class="codeAndDescription">
		<dt>mkdir lp/dt>
		<dd>
			creates a spool directory for the printer <samp>lp</samp>.
		</dd>
		<dt>touch lp/.seq</dt>
		<dd>
			creates file called <samp>.seq</samp>. I don’t know why it’s required.
		</dd>
		<dt>chown –R daemon.daemon lp</dt>
		<dd>
			sets the correct owner for the directory and contents.
		</dd>
	</dl>

	<p>
		That’s everything we need to do here.
	</p>

</article>
