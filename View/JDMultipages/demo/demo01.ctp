<article>
	<h2>About Navigators</h2>
	<p>
		The plugin handles generating data to provide book and page navigation for you. This is all exposed
		to every view via the <samp>$JDMPNavigatorData</samp> array for every view rendered by the plugin’s
		controller. To make this data structure useful to you, you can use the <samp>JDMultipageHelper</samp>
		to render this data into any one of three pre-defined navigator widget types, described further below.
	</p>
	<p>
		As with all helpers you can use these helpers in either or both of your views or layouts. This demo
		book is configured to use the <samp>default-includes-navigator.php</samp> layout, which is simply a
		copy of CakePHP’s own <samp>default.php</samp> with a one-line use of the helper that provides
		complete document navigation for the entire demo book!
	</p>
</article>

<article>
	<h2>Sample (live) <samp>showNavigatorPrevNext</samp></h2>
	<?php echo $this->JDMultipage->getNavigatorPrevNext($JDMPNavigatorData); ?>
	<p>
		The sample above shows only previous and next links, as well as the table of contents. As with all
		three types, it’s smart enough to hide the appropriate text if you’re already on the first or last
		page (i.e., there is no previous or next).
	</p>
</article>

<article>
	<h2>Sample (live) <samp>showNavigatorFirstLast</samp></h2>
	<?php echo $this->JDMultipage->getNavigatorFirstLast($JDMPNavigatorData); ?>
	<p>
		These are live samples; they’re actually using the helper in order to display, so feel free to
		test them out.
	</p>
</article>

<article>
	<h2>Sample (live) <samp>showNavigatorPagination</samp></h2>
	<?php echo $this->JDMultipage->getNavigatorPagination($JDMPNavigatorData); ?>
	<p>
		Because of the different CakePHP configurations in the field, this demo book only uses CakePHP’s
		built in layouts and styles. That’s why this demo book has a lot of non-semantic &lt;h2&gt;’s
		everywhere. These navigators will look excellent once you apply some CSS to them.
	</p>
</article>

<article>
	<h2>Finally…</h2>
	<p>
		The navigator below isn’t supplied by this page. As mentioned above, it’s the one supplied by the
		layout file for this demo book.
	</p>
</article>
