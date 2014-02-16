JDMultipage Plugin for CakePHP
==============================

Display multiple, related static pages in an organized, book-like fashion. With support for navigation controls, tables of contents, and sitemap.xml content, you can break free of database dependency.


Background
----------

By default CakePHP offers the Pages controller with support for static pages, but management of multiple, related pages can be a hassle. And of course there are a lot of CMS-type plugins for CakePHP that permit multiple documents and documents with multiple pages. JDMultipage does things differently, though: it manages multiple, related pages for you directly from the filesytem without a database, and without writing local index files. For the right use cases, this offers several benefits vs. CMS plugins:

- No database required.
- No need to copy and paste code from your HTML or web page editor into a database field.
- No need to copy and paste code from your database back into your HTML editor to make changes.

There is, though, a small degree of setup required. In order to achieve all of the above, you must populate the `$books` structure in the `JDMultipage.php` file. Setting data structures in model files does tend to break CakePHP’s convention over configuration philosophy, which is why the use case is important. So, for whom might this plugin solutinon be good for?

- You have many legacy static documents that are not likely to change.
- You have many static documents that make up a series of pages.
- Your static documents are more sophisticated than average and typing them into a database field isn’t practical.
- Examples include:
    - Multipage courses
    - Multipage how-to documents
    - Books or novellas
    - Anything else that requires several pages to document.

JDMultipage offers several conveniences beyond a simple document display controller.

- Alias names unrelated to actual file system names.
- The same document can appear multiple times using different aliases.
- Full support for generating tables of contents is provided.
- Document pages can be nested and then act as sections in the tables of contents.
- Dummy documents without a file can act as table of contents headers.
- A fully nested table of contents is available easily by invoking the helper.
- A helper is present that generates sitemap.xml data automatically, and can be included in your own site’s sitemap.xml file easily.
- Three different helpers provide three different types of navigation widgets, ready for styling with your own CSS.
- The controller injects navigation data into every page served, and you can easily build your own navigation controls.


Requirements
------------

Tested with configuration below, and may or may not work in earlier releases:

* PHP 5.2+
* CakePHP 2.3+


Installation
------------

### Download the zip file:
- Download this: https://github.com/balthisar/CakePHP-JDMultipage/archive/master.zip
- Unzip that download.
- Move or copy the `JDMultipage` directory into your `app/Plugin directory`.


### Or clone via github:

If you’re aware of this option then I presume you already know how to use git and Github.

### And then load the plugin in your `app/Config/bootstrap.php` file:

    CakePlugin::load(array('JDMultipage' => array('routes' => true)));


View the Sample Book
--------------------

“Books” is the term I’ve chosen to represent grouped, multiple documents. You can define any number of books. JDMultipage comes with a sample book included. If there’s nothing odd in your `routes.php` file, then it should be ready to work right away: simply navigate to `/multipages-demo` on your CakePHP website.

_Note_: You can erase this sample book, but I recommend simply disabling in your `routes.php`. CakePHP's unit testing requires the sample book in order to pass its tests. If you’re not interested in unit testing, then feel free to delete it all.


Add your own books
------------------

To add your own books, make sure you configure _this plugins’s_ `routes.php` file for your paths. The included file offers good examples, including some examples from my own site.

Add your static files to _this plugin’s_ View folder hierarchy, into a subfolder of your choice. By convention you should name the folder the same as your book name, but there’s nothing preventing you from using any name. The _demo_ book, by way of example, is located at `app/Plugin/JDMultipage/View/JDMultipages/demo/`.

Finally, setup your file and navigation hierarchy in the model file `JDMultipage.php`. It’s fairly well documented and includes the _demo_ book example to help you get started.

Please look at the source code (or Doxygen docs)
------------------------------------------------

The source code is _very_ verbosely documented. You don’t have to understand the source code, but please read all of the comments at the top of the main files, especially `JDMultipagesController.php` and `JDMultipageHelper.php`. They contain the actual instructions so that they don’t have to be repeated here.


License
-------
Copyright (c) 2013 by Jim Derry

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
