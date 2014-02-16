<article>
	<h2>Another subsection under the Main Heading (xml example)</h2>
	<p>
		Who says static content can’t act dynamic? The navigation structure, the automatic tables of contents,
		and one more thing all go to show that you can simply deploy static content using CakePHP.
	</p>
	<p>
		Oh, I mentioned one more thing? How about support for sitemap.xml files? The
		<samp>JDMultipageHelper</samp> can generate the portion of the sitemap.xml body for any of your books
		for you automatically, so that it might be included in your other CakePHP pieces that use sitemaps.
	</p>
	<p>
		The magic helper function is <samp>getSitemapBody($book)</samp>. Below is a live sample of this
		demo book’s sitemap:
	</p>

<pre>
<?PHP echo htmlentities($this->JDMultipage->getSitemapBody('demo')); ?>
</pre>

	<p>
		Of course if you look at the HTML source code (instead of the PHP source code) you’ll only see the
		XML data converted to HTML via <samp>htmlentities</samp>.
	</p>

</article>
