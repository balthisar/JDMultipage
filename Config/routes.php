<?php
/*************************************************************************************************
 * @file           routes.php
 *
 * @brief
 *
 * Part of plugin `JDMultipage`
 *
 * @details
 *
 * Routes configuration for JDMultipage.
 *
 * Use this file to to define the base URL path for everything
 * in this plugin.
 *
 * Once you’re familiar with the plugin you can remove the
 * demo book and the demo paths.
 *
 * @note
 *
 * For more information and examples look at the comments in the source file.
 *
 * @date           2014-02-12
 * @author         Jim Derry
 * @copyright      ©2014 by Jim Derry and balthisar.com
 * @copyright      MIT License (http://www.opensource.org/licenses/mit-license.php)
 ************************************************************************************************/


/*------------------------------------------*
	Configure JDMultipages demo routes.
 *------------------------------------------*/

	// This will route to the controller without specifying a book or page. When
	// the display action encounters it, it will display the index page for the
	// controller. When your site is live you'd probably want to capture this
	// condition to load a specific page.
	Router::connect('/multipages-demo',
					array('plugin' => 'JDMultipage', 'controller' => 'JDMultipages', 'action' => 'display')
	);


	// If you are using different paths for some content, you will want to take
	// some steps from allowing it to be available at different URLs. For example
	// I don't want my printing guide to be available via the URL for my multipages
	// demo.
	Router::redirect('/multipages-demo/printing/*',	'/howto/printing', array('status' => 404));


	// This route will capture a :book without a :page. When passed to the controller it will automatically
	// look for and redirect to the first page in the book.
	Router::connect('/multipages-demo/:book',
					array('plugin' => 'JDMultipage', 'controller' => 'JDMultipages', 'action' => 'display'),
					array('pass' => array('book'))
	);

	// And this is the normal route when both a :book and a :page are specified.
	Router::connect('/multipages-demo/:book/:alias',
					array('plugin' => 'JDMultipage', 'controller' => 'JDMultipages', 'action' => 'display'),
					array('pass' => array('book', 'alias'))
	);



	/*----------------------------------------------------*
		My routes for howto books.
		@todo remember to erase this before publishing.
	 *----------------------------------------------------*/

	if (!defined('JDMP_PATH'))
	{
		define('JDMP_PATH', '/howto');
	}

	Router::connect(JDMP_PATH,
					array('plugin' => 'JDMultipage', 'controller' => 'JDMultipages', 'action' => 'display')
	);
	Router::connect(JDMP_PATH . '/:book',
					array('plugin' => 'JDMultipage', 'controller' => 'JDMultipages', 'action' => 'display'),
					array('pass' => array('book'))
	);
	Router::connect(JDMP_PATH . '/:book/:alias',
					array('plugin' => 'JDMultipage', 'controller' => 'JDMultipages', 'action' => 'display'),
					array('pass' => array('book', 'alias'))
	);

