<article>
	<h2>Demo Table of Contents</h2>
	<?php echo $this->JDMultipage->getTOC( 'demo' );?>
</article>

<article>
	<h2>About this table of contents</h2>
	<p>
		The contents above was rendered dynamically from the view by using the included helper. In this
		example it was included on this page so that this page could serve as a Table of Contents for the
		entire demo book.
	</p>
	<p>
		Because it’s a simple <samp>&lt;ul&gt;</samp> you can style it greatly with CSS to suit your own needs. Of couse what
		you’re seeing here is rendered with CakePHP’s default styling.
	</p>
	<p>
		Finally the helper makes it easy to include a table of contents anywhere you need one, such as in a
		sidebar or a popup navigation menu.
	</p>
	<p>
		The helper as used on this page was included like so: <samp>&lt;?php echo $this-&gt;JDMultipage-&gt;getTOC('demo');?&gt;</samp>
	</p>
</article>
