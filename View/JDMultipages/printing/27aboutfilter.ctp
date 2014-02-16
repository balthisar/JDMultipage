<?php $this->set('myTabs', array('guides', 'Sub1')) ?>
<?php $this->set('bodyId', array('printing')) ?>
<?php $this->set('title_for_layout', 'Guide : Getting to Business : About the Print Filter'); ?>
<?php $this->set('description_for_layout', 'balthisar.com Guide to Mac OS X Printing'); ?>
<?php $this->set('keywords_for_layout', 'balthisar, mac os x, network, printing, legacy'); ?>


<article class="long">
	<h1>Getting Down to Business</h1>
	<h2>About the Print Filter</h2>

	<p>
	   As written, whenever the <samp>ghostscript</samp> printer is
	   printed to from the Mac OS, this script will run. The line beginning with
	   <samp>$GS</samp> is the line that executes GhostScript (<samp>$GS</samp>
	   was set to mean <samp>/usr/local/bin/gs</samp>, the actual program),
	   with all of the parameters you see afterward. It is by changing
	   these parameters we can make other brands of printers work, or change print
	   resolution, or decide if we want to print in color or black-and-white. Let’s
	   examine the ones that are written here, and don’t forget to try <samp>man gs</samp>
	   sometime in the future to see the multitude of other options that are available
	   to you, too (such as page size) (see also the appendices to this guide):
	</p>

	<div>
		<table>
			<tbody>
				<tr>
					<td>-dNOPAUSE</td>
					<td>
						This tells GhostScript not to pause between jobs, not to wait for user
						interaction. All of this is going to take place in BSD, hidden from the
						user, so there’s no point in having GhostScript trying to get user input.
					</td>
				</tr>
				<tr>
					<td>-q</td>
					<td>
						This tells GhostScript to execute in quiet mode, i.e., don’t provide
						feedback to the terminal, since there will be no terminal running.
					</td>
				</tr>
				<tr>
					<td>-dBATCH</td>
					<td>
						This lets GhostScript know we’re running in batch mode, and to continue
						processing jobs until there are no more jobs left. Otherwise, GhostScript would
						stay uselessly running while there are no more print jobs.
					</td>
				</tr>
				<tr>
					<td>-sDEVICE=</td>
					<td>
						This is the magic parameter. This tells GhostScript what format the
						PostScript should be formatted into. In the provided file, you’ll see that
						I want PostScript converted into the cdj550 format, which is the HP Color
						DeskJet 550. Granted it’s not the DeskJet 970, but luckily the PCL used
						by the 550 is understandable by the 970. Also, this is the color version,
						so colored documents I print in Mac OS X also print on the printer in
						color. If you open a new terminal window (since you’re busy with pico in
						the current terminal window), type <kbd>gs –h</kbd>. This will provide you
						a list of all of the output formats that GhostScript is capable of
						converting to. You’ll want to know the name of the GhostScript “driver”
						to use for your own particular printer. When you do this investigation,
						you’ll notice that GhostScript supports translation to PDF. You could
						actually use GhostScript as a free distiller to create higher-quality PDF
						documents than Mac OS X generates.
					</td>
				</tr>
				<tr>
					<td>-r</td>
					<td>
						Specifies the resolution to print to the cdj550 device. It seems that in the
						cdj550’s case, the maximum resolution supported is 600 dots-per-inch,
						which means, unfortunately, that that’s the highest resolution that my
						DeskJet 970 will print at with the cdj550 driver. Note: the <samp>-r</samp>
						parameter must never come before the <samp>-sDevice=</samp> parameter.
					</td>
				</tr>
				<tr>
					<td>-sOutputFile=</td>
					<td>
						This tells GhostScript to output its data (“pipe”) to another file
						or device. Depending upon which “$GS” line you removed the comment
						from, the output will go to one of two different printing systems. If
						you’re using TCP/IP to print, the value <samp>\|"/usr/bin/lpr v h Plp"</samp>
						indicates that the processed document will be sent to the LPD system using the
						lpr command, using the printer named lp. For AppleTalk printing, the
						<samp>\|"/usr/bin/atprint deskjet970:DeskWriter"</samp> value indicates that
						the processed document will be sent to the specified device 
						(deskjet970:DeskWriter) via the atprint command. See note below for
						information about this if using SAMBA.
					</td>
				</tr>
				<tr>
					<td>-</td>
					<td>
						This sole hyphen by itself indicates to GhostScript the name of the Postscript
						file to process. However, since GhostScript is running inside of this script,
						we can’t know what the filename will be. The lone hyphen indicates a
						“place holder” for whatever the filename is that Mac OS passes to
						this filter.
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<p class="drop-shadow lifted yellow">
		<em>SAMBA Note:</em> the
		<samp>-sOutputFile</samp> paramater is different for SMB, because the
		<samp>smbclient</samp> program takes its “standard input” in a different format than the
		<samp>lpr</samp> or <samp>atprint</samp> commands used for the other printing systems.
		The <samp>-sOutputFile</samp> in the case of SMB is merely <samp>-</samp>, which is the
		”standard output.” The <em>whole</em> of this is then immediately “piped” to the
		<samp>smbclient</samp> program, which prints the job to your SMB/Windows printer.
	</p>
</article>
