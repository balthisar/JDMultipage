<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Getting to Business : Add Printer to Print Center'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>

<article class="long">
	<h1>Getting Down to Business</h1>
	<h2>Add Our Printer to the Print Center</h2>

	<div>
	   <figure>
		  <img src="/img/printing/printcenter1.jpg" alt="the print center">
		  <figcaption>Mac OS X Print Center</figcaption>
	   </figure>
	   <p>
		  In Mac OS X, open the Print Center application. If Print Center doesn’t
		  automatically offer to add a printer for you, choose the <samp>Add Printer…</samp> button.
	   </p>
	</div>

	<div>
	   <figure>
		  <img src="/img/printing/printcenter2.jpg" alt="the print center">
		  <figcaption>Print Center Add Printer dialogue</figcaption>
	   </figure>
	   <p>
		 In the pop-up menu that allows you to select the class of printer (i.e.,
		 <samp>AppleTalk</samp>, <samp>USB</samp>, <samp>LPR Printers using IP</samp>,
		 and <samp>Directory Services</samp>), select <samp>Directory Services</samp>.
		  You should see listed the <samp>ghostscript</samp> printer. If you setup for
		  TCP/IP printing, you’ll additionally see the printer <samp>lp</samp>.
		 These are the printers we defined in NetInfo Manager.
	  </p>
	</div>

	<div>
	   <figure>
		  <img src="/img/printing/printcenter3.jpg" alt="the print center">
		  <figcaption>Print Center with newly added printer</figcaption>
	   </figure>
	   <p>
		 Add the <samp>ghostscript</samp> printer, and wait for Print
		 Center to add it. If Print Center gives you the spinning beach ball and you have
		 to force-quit, it probably means you made an error in the NetInfo Manager.
		 You’ll have to fix the problems there, restart the computer, then add the
		 printer to the Print Center again.
	   </p>
	</div>

	<div>
	   <p>
		  Once <samp>ghostscript</samp> is set as your default printer,
		  you’re all set; there’s no reason you need to add <samp>lp</samp> to the Print Center.
	   </p>
	</div>
</article>
