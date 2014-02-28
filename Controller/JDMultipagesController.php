<?php
/*************************************************************************************************
 * @file           JDMultipagesController.php
 *
 * @brief
 *
 * Part of plugin `JDMultipage`
 *
 * @details
 *
 * This plugin makes it relatively simple to display organized, related static
 * views from `app/Plugin/JDMultipage/View/Multipages/{bookname}/(*).ctp`
 *
 * ### Load the plugin in your Config/bootstrap.php file:
 *
 * CakePlugin::load(array('JDMultipage' => array('routes' => true)));
 *
 * ### Concepts / Description
 *
 * Related documents are grouped into a 'book' and books contain one or more
 * pages described by an 'alias' that links them to files on the server filesystem.
 * The book is structured in page number order, and support for a generated table
 * of contents and navigation widget is supported. Support for `sitemap.xml` generation
 * is also integrated.
 *
 * This organization is implemented by hard-coding each book it into the public
 * array `$books` in the `JDMultipage` model.
 *
 * Each root level book contains some general configuration options specific to
 * each book as well as a root-level `list` element that contains one or more
 * aliases to pages. Additionally each page may contain a nested list to additional
 * pages. In this way pages or groups of pages can be nested to arbitrary depths.
 * This nesting then becomes apparent when generating tables of contents. Finally
 * to support robust tables of contents, dummy pages without alias/file attributed
 * to them will show up in tables of contents for purposes such as labels or group
 * headers. Each alias must be unique.
 *
 * ### Routes Setup
 *
 * This plugin is unable to reliably determine route configurations. Therefore one
 * of the base configurations for each book is `basePath` which should be coordinated
 * with your routes in the plugin `routes.php` file. This `basePath` should reflect
 * the URL that each of the pages should be available at.
 *
 * Your URLs, of course, are set in either your application's or this plugin's
 * `routes.php` file.
 *
 * @date           2014-02-12
 * @author         Jim Derry
 * @copyright      ©2014 by Jim Derry and balthisar.com
 * @copyright      MIT License (http://www.opensource.org/licenses/mit-license.php)
 *************************************************************************************************/


App::uses('AppController', 'Controller');


/** JDMultipagesController class is the principal controller class for this plugin. */
class JDMultipagesController extends JDMultipageAppController
{
	/** Standard helpers declaration. */
	public $helpers = array( 'JDMultipage.JDMultipage' );


	/**---------------------------------------------------------------------------*
	 * Display the desired static file.
	 *
	 * @arg    parameter-array consisting of a `book` or `book` and `page`:
	 * ~~~
	 * /path/to/thiscontroller/display/mybook
	 * /path/to/thiscontroller/display/mybook/mypage
	 * ~~~
	 *
	 * @retval boolean indicating the view was rendered.
	 *
	 * #### Operation
	 **---------------------------------------------------------------------------*/
	public function display()
	{
		$path  = func_get_args();
		$count = count($path);

		/** - If no parameters, then display the default page. */
		if ( $count == 0 )
		{
			return $this->render('index');
		}

		$book = $path[0];

		/** - If only one parameter, then redirect to the first page in the book. */
		if ( $count == 1 )
		{
			// ensure the book exists
			if ( !$this->JDMultipage->bookExists($book) )
			{
				throw new NotFoundException();
			}
			else
			{
				$this->redirect($this->JDMultipage->firstPageOf($book));
			}
		}

		/** - Otherwise display the wanted book and page. */

		//-----------------------------------------------------------------------
		// Now we want to find the actual path of the file to render.
		//-----------------------------------------------------------------------
		if ( !$page = $this->JDMultipage->fileForAliasForBook($path[1], $book) )
		{
			// The key doesn't exist. Force file not found.
			throw new NotFoundException();
		}

		//-----------------------------------------------
		// Navigation data is *always* sent to the view.
		//-----------------------------------------------
		$this->set('JDMPNavigatorData', $this->JDMultipage->getPageNavigatorDataForBook($path[1], $book));
		$this->set('JDMPBook', $book);
		$this->set('JDMPAlias', $path[1]);

		$this->layout = $this->JDMultipage->books[$book]['layout'];

		return $this->render($this->name . DS . $page);
	}


}
