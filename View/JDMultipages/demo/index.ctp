<article>
	<hgroup>
		<h1>Welcome to the JDMultipages Plugin Demo Book</h1>
		<h2>version 2014-Jan-10</h2>
		<h3>©2014 by Jim Derry</h3>
	</hgroup>
    <p>If you’re reading this page then you probably have installed the plugin successfully.
       These few pages simply show an example of how the plugin can be used to display and
       navigate multipage “books” (as they’re called in the plugin) or articles or other
       structured static documents.
	</p>
</article>

<article>
	<h2>So how did you get here?</h2>
	<p>
		Assuming you’re using the default configuration you will have landed here. This currently
		rendered file is <samp>index.ctp</samp> in the plugin’s <samp>/View/JDMultipages/demo</samp>
		directory. The <samp>demo</samp> directory is indicated because the name of the “book” is
		“demo.” Additionally the <em>alias</em> to this page is “index,” but it doesn’t have to be.
		The alias is the part of the URI that identifies the page, and allows you to disassociate
		the file name from the actual URI.
	</p>
	<p>
		Also the default installation sets up page routes from <samp>/multipages-demo/:book/:alias</samp>
		and uses the same path in the book configuration. There the relative URI that identifies this current
		page of the current page is <samp>/multipages-demo/demo/index</samp>.
	</p>
	<p>
		Because this is the first page of the “demo” book, the plugin also could have found it automatically,
		too, because the routes configuration is set to look for a book without an alias. When the controller
		is given a book without an alias, then the first page is looked up in the table of contents and used.
	</p>
	<p>
		Just under this paragraph you can see one style of the book navigator widget. Feel free to use it to
		navigate around this demo book. Right now it’s rendered in CakePHP’s default stylesheet, so it’s not
		vert pretty, but it is quite useful. It can look like virtually anything when you style it.
	</p>
</article>
