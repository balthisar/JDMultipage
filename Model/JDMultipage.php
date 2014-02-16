<?php
/*********************************************************************************************//**
    @file JDMultipage.php

    @brief

    Part of plugin `JDMultipage`

    @sa JDMultipagesController.php

    @date           2014-02-12
    @author         Jim Derry
    @copyright      ©2014 by Jim Derry and balthisar.com
    @copyright      MIT License (http://www.opensource.org/licenses/mit-license.php)

 *************************************************************************************************/


App::uses('AppModel', 'Model');

/**
    JDMultipage class is the principal model class for this plugin.
    It implements all of the TOC, sitemap.xml, and other logic for
    use by the controller and helper.
 */
class JDMultipage extends JDMultipageAppModel
{
/**
    @brief Class doesn't use database tables.
 */
public $useTable = false;

/**
    @brief Defines the books and their pages that this plugin will display.
    @note See the source code for this variable for important usage notes.
 */
public $books = array(

	// This is *not* the demo book. The demo book is called "demo"
	// and is further down. I am supposed to have erased this book
	// prior to publishing this plugin.

	'printing' => array(
		'layout' =>             'balthisar',
		'basePath' =>           '/howto/printing/',
		'tocAlias' =>           'toc',
		'navLabelToc' =>        'Contents',
		'navLabelFirst' =>      '⇐ First',
		'navLabelPrevious' =>   '← Previous',
		'navLabelNext' =>       'Next →',
		'navLabelLast' =>       'Last ⇒',
		'cssToc' =>             'cssNavToc',
		'cssFirst' =>           'cssNavFirst',
		'cssPrevious' =>        'cssNavPrevious',
		'cssNext' =>            'cssNavNext',
		'cssLast' =>            'cssNavLast',
		'cssOuter' =>           'cssNavOuter',
		'cssPage' =>            'cssNavIndex',
		'cssCurrent' =>         'cssNavCurrentIndex',
		'list' => array(

			array(	'toc' =>     'Some Stuff Before You Start',
					'file' =>    '',
					'alias' =>   '',
					'list' => array(
						array(	'toc' =>      'Frontis',
								'file' =>     'index',
								'alias' =>    'index',
								'title' =>    'View the Frontis',
								'priority' => '0.7',
								'changefreq' => 'never',
								'lastmod' => '2013-12-30T13:27:47+00:00',
						),
						array(	'toc' =>      'Table of Contents',
								'file' =>     'toc',
								'alias' =>    'toc',
								'title' =>    'Go to table of contents.',
								'priority' => '0.6',
						),
					)
			),

			array(	'toc' =>   'Introductory Notes',
					'file' =>  '',
					'alias' => '',
					'list' => array(
						array(	'toc' => 'Purpose',
								'file' => '01purpose',
								'alias' => 'purpose'
						),
						array(	'toc' => 'How to Use Balthisar’s Guide',
								'file' => '02useinstruct',
								'alias' => 'use_instructions'
						),
						array(	'toc' => 'Scope/Background',
								'file' => '03scopebackground',
								'alias' => 'scope_and_background'
						),
						array(	'toc' => 'A Couple of Terms and Caveats and Prerequisites and Stuff',
								'file' => '05termscaveats',
								'alias' => 'terms_and_caveats'
						),
						array(	'toc' => 'What to Expect/Limitations',
								'file' => '06whattoexpect',
								'alias' => 'what_to_expect'
						),
					)
			),

			array(	'toc' =>   'Some Technical Stuff',
					'file' =>  '',
					'alias' => '',
					'list' => array(
						array(	'toc' => 'How Printers Print',
								'file' => '10howprint',
								'alias' => 'how_printers_print'
						),
						array(	'toc' => 'Printing Under Classic Running in Mac OS X (already works!)',
								'file' => '11printingunderclassic',
								'alias' => 'printing_under_classic'
						),
						array(	'toc' => 'Why (I think) Printing is Broken Under OS X',
								'file' => '12whybroken',
								'alias' => 'why_broken'
						),
						array(	'toc' => 'An Interesting Experiment',
								'file' => '13experiment',
								'alias' => 'experiment'
						),
						array(	'toc' => 'Technical Overview',
								'file' => '14technicaloverview',
								'alias' => 'technical_overview'
						),
					)
			),

			array(	'toc' =>   'Print Scenarios (Getting Down to Business)',
					'file' =>  '',
					'alias' => '',
					'list' => array(
						array(	'toc' => 'Choose a Print Scenario',
								'file' => '20scenarios',
								'alias' => 'choose_scenario'
						),
					)
			),

			array(	'toc' =>   'Print Scenario 1',
					'file' =>  '',
					'alias' => '',
					'list' => array(
						array(	'toc' => 'Replace the Mac OS X 10.1.x LPRIOM.plugin file with that from 10.04',
								'file' => '21replacelpriom',
								'alias' => 'scen1_replace_lpriom'
						),
						array(	'toc' => 'Install AFL-GhostScript 6.50.5',
								'file' => '30installghostscript',
								'alias' => 'scen1_install_ghostscript'
						),
						array(	'toc' => 'Use NetInfo Manager to Define a Dummy Print Center Printer',
								'file' => '22netinfodummy',
								'alias' => 'scen1_netinfo_dummy_printer'
						),
						array(	'toc' => 'Use NetInfo Manager to Define our “lp” Printer',
								'file' => '23netinfolp',
								'alias' => 'scen1_netinfo_lp_printer'
						),
						array(	'toc' => 'Build Our Spool Directories',
								'file' => '24buildspool',
								'alias' => 'scen1_build_spool'
						),
						array(	'toc' => 'Add Our Printer to the Print Center',
								'file' => '25addprinters',
								'alias' => 'scen1_add_printers'
						),
						array(	'toc' => 'Use the Terminal to Build the Filter',
								'file' => '26buildfilter',
								'alias' => 'scen1_build_filter'
						),
						array(	'toc' => 'About the Print Filter',
								'file' => '27aboutfilter',
								'alias' => 'scen1_about_filter'
						),
						array(	'toc' => 'Print!',
								'file' => '28print',
								'alias' => 'scen1_print'
						),
						array(	'toc' => 'Troubleshooting',
								'file' => '29troubleshoot',
								'alias' => 'scen1_troubleshoot'
						),
					)
			),

			array(	'toc' =>   'Print Scenario 2',
					'file' =>  '',
					'alias' => '',
					'list' => array(
						array(	'toc' => 'Replace the Mac OS X 10.1.x LPRIOM.plugin file with that from 10.04',
								'file' => '21replacelpriom',
								'alias' => 'scen2_replace_lpriom'
						),
						array(	'toc' => 'Install AFL-GhostScript 6.50.5',
								'file' => '30installghostscript',
								'alias' => 'scen2_install_ghostscript'
						),
						array(	'toc' => 'Use NetInfo Manager to Define a Dummy Print Center Printer',
								'file' => '22netinfodummy',
								'alias' => 'scen2_netinfo_dummy_printer'
						),
						array(	'toc' => 'Build Our Spool Directories',
								'file' => '24buildspool',
								'alias' => 'scen2_build_spool'
						),
						array(	'toc' => 'Add Our Printer to the Print Center',
								'file' => '25addprinters',
								'alias' => 'scen2_add_printers'
						),
						array(	'toc' => 'Use the Terminal to Build the Filter',
								'file' => '26buildfilter',
								'alias' => 'scen2_build_filter'
						),
						array(	'toc' => 'About the Print Filter',
								'file' => '27aboutfilter',
								'alias' => 'scen2_about_filter'
						),
						array(	'toc' => 'Print!',
								'file' => '28print',
								'alias' => 'scen2_print'
						),
						array(	'toc' => 'Troubleshooting',
								'file' => '29troubleshoot',
								'alias' => 'scen2_troubleshoot'
						),
					)
			),

			array(	'toc' =>   'Print Scenario 3',
					'file' =>  '',
					'alias' => '',
					'list' => array(
						array(	'toc' => 'Replace the Mac OS X 10.1.x LPRIOM.plugin file with that from 10.04',
								'file' => '21replacelpriom',
								'alias' => 'scen3_replace_lpriom'
						),
						array(	'toc' => 'Install AFL-GhostScript 6.50.5',
								'file' => '30installghostscript',
								'alias' => 'scen3_install_ghostscript'
						),
						array(	'toc' => 'Install SAMBA (SMB printers only)',
								'file' => '31installsmb',
								'alias' => 'scen3_install_samba'
						),
						array(	'toc' => 'Use NetInfo Manager to Define a Dummy Print Center Printer',
								'file' => '22netinfodummy',
								'alias' => 'scen3_netinfo_dummy_printer'
						),
						array(	'toc' => 'Build Our Spool Directories',
								'file' => '24buildspool',
								'alias' => 'scen3_build_spool'
						),
						array(	'toc' => 'Add Our Printer to the Print Center',
								'file' => '25addprinters',
								'alias' => 'scen3_add_printers'
						),
						array(	'toc' => 'Use the Terminal to Build the Filter',
								'file' => '26buildfilter',
								'alias' => 'scen3_build_filter'
						),
						array(	'toc' => 'About the Print Filter',
								'file' => '27aboutfilter',
								'alias' => 'scen3_about_filter'
						),
						array(	'toc' => 'Print!',
								'file' => '28print',
								'alias' => 'scen3_print'
						),
						array(	'toc' => 'Troubleshooting',
								'file' => '29troubleshoot',
								'alias' => 'scen3_troubleshoot'
						),
					)
			),

			array(	'toc' =>   'Advanced Topics',
					'file' =>  '',
					'alias' => '',
					'list' => array(
						array(	'toc' => 'Hosting a Printer for Easy Setup',
								'file' => '40hostingprinter',
								'alias' => 'hosting_printer'
						),
						array(	'toc' => 'Additional Printer Drivers',
								'file' => '41includeddrivers',
								'alias' => 'additional_included_drivers'
						),
						array(	'toc' => 'HP Goodies for the 970',
								'file' => '42hpgoodies',
								'alias' => 'hp_goodies'
						),
						array(	'toc' => 'Uniprint Drivers (*.upp files)',
								'file' => '43uniprint',
								'alias' => 'uniprint'
						),
						array(	'toc' => 'gimp-print Drivers',
								'file' => '44gimp-print',
								'alias' => 'gimp_print'
						),
						array(	'toc' => 'LPD seems to die: an AppleTalk/SAMBA Solution',
								'file' => '45lpddies',
								'alias' => 'lp_dies'
						),
						array(	'toc' => 'localhost Printing',
								'file' => '46localhostprinting',
								'alias' => 'localhost_printing'
						),
						array(	'toc' => 'Serial Printing',
								'file' => '99notcoming',
								'alias' => 'serial_printing'
						),
						array(	'toc' => 'CUPS',
								'file' => '99notcoming',
								'alias' => 'cups'
						),
						array(	'toc' => 'Print to Print Server Computers',
								'file' => '99notcoming',
								'alias' => 'print_to_server_pc'
						),
						array(	'toc' => 'Print Servers (Dedicated)',
								'file' => '99notcoming',
								'alias' => 'print_to_server_device'
						),
						array(	'toc' => 'PPD O’matic',
								'file' => '99notcoming',
								'alias' => 'ppdomatic'
						),
					)
			),

			array(	'toc' =>   'Miscellany',
					'file' =>  '',
					'alias' => '',
					'list' => array(
						array(	'toc' => 'FAQ',
								'file' => '60faq',
								'alias' => 'faq'
						),
					)
			),

			array(	'toc' =>   'End Notes',
					'file' =>  '',
					'alias' => '',
					'list' => array(
						array(	'toc' => 'Thanks',
								'file' => '70thanks',
								'alias' => 'thanks'
						),
						array(	'toc' => 'You Can Help Me and Others!',
								'file' => '71help',
								'alias' => 'help_out'
						),
						array(	'toc' => 'Links and References',
								'file' => '72linksreference',
								'alias' => 'links_and_references'
						),
						array(	'toc' => 'Document History',
								'file' => '73history',
								'alias' => 'history',
						),
					)
			),

			array(	'toc' =>   'Related Tutorials',
					'file' =>  '',
					'alias' => '',
					'list' => array(
						array(	'toc' => 'Start a Terminal Session',
								'file' => '80startterminal',
								'alias' => 'start_mac_terminal'
						),
						array(	'toc' => 'Become Root',
								'file' => '81becomeroot',
								'alias' => 'become_root'
						),
						array(	'toc' => 'Look at Error Log (Console)',
								'file' => '82lookaterrorlog',
								'alias' => 'examine_error_log'
						),
						array(	'toc' => 'Move Around the File System',
								'file' => '83movearound',
								'alias' => 'move_around_terminal'
						),
						array(	'toc' => 'sudo rm -R / -- never!',
								'file' => '84sudorm-rslash',
								'alias' => 'dont_rm_everything'
						),
						array(	'toc' => 'pico',
								'file' => '85pico',
								'alias' => 'pico_on_mac'
						),
						array(	'toc' => 'Generate Printer Test Files via Windows',
								'file' => '86generateprintfile',
								'alias' => 'generate_windows_printer_files'
						),
					)
			),
		) // list
	), // printing book

	// All of the array keys that have a description are required unless marked as **. Check the
	// code at |_ensureBooksIsRegular()| to see which defaults might apply.

	// All |alias| must be unique. Note that no check is done for this but an error should
	// occur. The |alias| represents the page of your book, and is how it is accessed in your
	// URLs, e.g.: http://www.example.com/book/alias
	// You can omit |alias| and the |file| will be automatically used instead.

	// Remember, this is a complex array. Errors in the model aren't code problems; they're problems with
	// your array. Always remember that 'items' is an array of arrays.

	// FINALLY, UNIT TESTING IS DEPENDENT UPON THIS DEMO BOOK BEING PRESENT IN THIS MODEL. IF YOU REQUIRE
	// UNIT TESTING THEN DO NOT ALTER THIS DATA STRUCTURE. YOU CAN PREVENT YOUR APPLICATION FROM ACCESSING
	// IT BY HANDLING IT IN YOUR ROUTES.

	'demo' => array(                                             // Name of book. This must match the :book in your route!
		'layout' =>             'default-includes-navigator',    // Use this layout file from your main application.
		'basePath' =>           '/multipages-demo/demo/',        // This is how the URL looks. Used for generating links.
		'tocAlias' =>           'toc',                           // Alias for file that serves as TOC (for navigator)
		'navLabelToc' =>        'Contents',                      // ** Label for table of contents Content link.
		'navLabelFirst' =>      'First',                         // ** Label for table of contents First link.
		'navLabelPrevious' =>   'Previous',                      // ** Label for table of contents Previous link.
		'navLabelNext' =>       'Next',                          // ** Label for table of contents Next link.
		'navLabelLast' =>       'Last',                          // ** Label for table of contents Last link.
		'cssToc' =>             'cssNavToc',                     // ** Class to be set for navigation widget toc page <div>
		'cssFirst' =>           'cssNavFirst',                   // ** Class to be set for navigation widget first page <div>
		'cssPrevious' =>        'cssNavPrevious',                // ** Class to be set for navigation widget previous page <div>
		'cssNext' =>            'cssNavNext',                    // ** Class to be set for navigation widget next page <div>
		'cssLast' =>            'cssNavLast',                    // ** Class to be set for navigation widget last page <div>
		'cssOuter' =>           'cssNavOuter',                   // ** Class to be set for navigation widget outer <div>
		'cssPage' =>            'cssNavIndex',                   // ** Class to be set for navigation widget page number <div>
		'cssCurrent' =>         'cssNavCurrentIndex',            // ** Class to be set for navigation widget current page number <div>
		'list' => array(										 // Required at this level, but ** below. |list| contains all pages.


			// This is a complete page description for an item
			// that does NOT have any pages grouped within it.
			array(
			'toc' =>      'Introduction',                // Entry as it will appear in TOC.
			'file' =>     'index',                       // Actual file name on the server (minus .ctp).
			'alias' =>    'index',                       // ** Alias for file; works as a slug. If empty `file` is used.
			'title' =>    'First page of the demo',      // ** Title that might apply to anchors.
			'priority' => '0.7',                         // ** Used when generating xml sitemaps.
			'changefreq' => 'never',                     // ** Used when generating xml sitemaps.
			'lastmod' => '2013-12-30T13:27:47+00:00',    // ** Used when generating xml sitemaps.
			),

			// This is a page description for an item that
			// DOES have pages grouped within it. Additionally
			// because this item has no file, it only represents
			// a table of contents header, possibly for grouping
			// sections. Note that this mechanism would still
			// work the same if a file were assigned to it.
			array(
			'toc' =>     'Useful Information (not a page!)',         // Entry as it will appear in TOC.
			'file' =>    '',                                         // ** If no file, then TOC entry has no link.
			'alias' =>   '',                                         // ** If no file, can't use alias.
			'list' => array(                                         // ** Allows pages to be grouped under this item.

					array(
					'toc' =>      'Table of Contents',             // Note that for this item we're not
					'file' =>     'toc',                           // going to bother specifying the optional
					'alias' =>    'toc',                           // keys.
					),

					array(
					'toc' =>      'About the Navigators',          // Note that these two entries are nested
					'file' =>     'demo01',                        // within the the top level entry. They will
					'alias' =>    'about-navigators',              // also be nested as such in the TOC's <ul>.
					'title' =>    'Go to table of contents',
					),
				)
			),

			// Finally this is just a silly example to show that it's
			// possible to sub-sub-sub-nest to arbitrary levels.
			array(
			'toc' =>   'Main Heading (with a page)',
			'file' =>  'demo02',
			'alias' => 'section-two',
			'list' => array(

					array(
					'toc' => 'Subsection that’s not a page',
					'file' => '',
					'alias' => '',
					'list' => array(

							array(
							'toc' => 'Subsubsection that’s also not a page',
							'file' => '',
							'alias' => '',
							'list' => array(

									array( // item
									'toc' => 'Deeply nested page',
									'file' => 'demo03',
									'alias' => 'deeply-buried',
									) // item
								) // list
							) // item
						), // list
					), // item

					array(
					'toc' => 'Another subsection under the Main Heading (xml example)',
					'file' => 'demo04',
					'alias' => ''								// will be set to filename "demo04" automatically.
					),
				) // list
			) // item
		), // list
	) // demo book
); // $books


private $__flatList = array();	// built during construct.


/*****************************************************************//**
    Constructor for instances of this class.
        @param $request Request object for this model.
        @param $response Response object for this model.
 *********************************************************************/
public function __construct( $request = null, $response = null )
{
	parent::__construct( $request, $response );

	$this->_ensureBooksIsRegular( $this->books );
	$this->_generateFlatList( $this->books, $this->__flatList );
}


/*****************************************************************//**
	@brief Indicates whether or not `$alias` exists in `$book`
	    @param $alias   String of the alias name to check.
	    @param $book    String of the book name to check.
	    @retval boolean true/false `$alias` exists in `$book`
 *********************************************************************/
public function aliasExistsInBook( $alias, $book )
{
	if ($this->bookExists($book))
	{
		return isset($this->__flatList[$book][$alias]);
	}
	else
	{
		return false;
	}
}


/*****************************************************************//**
	@brief Given a `$book` name, does it exist?
        @param      $book String indicating the book to check.
        @retval     boolean Returns true if `$book` exists.
 *********************************************************************/
public function bookExists( $book )
{
	return isset($this->books[$book]);
}


/*****************************************************************//**
	@brief Returns the complete relative path for the file for a
	given `$alias` in `$book`, or false if it does not exist.
	    @param $alias   String of the alias name to check.
	    @param $book    String of the book name to check.
	    @return         File path, or false.
 *********************************************************************/
public function fileForAliasForBook( $alias, $book )
{
	if ($this->aliasExistsInBook($alias, $book))
	{
		return $book . DS . $this->__flatList[$book][$alias]['file'];
	}
	else
	{
		return false;
	}
}


/*****************************************************************//**
	@brief Returns the path of the first page of `$book` or
	false if it does not exist.
	    @param $book    String of the book name to check.
	    @return         File path, or false.
 *********************************************************************/
public function firstPageOf( $book )
{
	if ($this->bookExists($book))
	{
		return $this->books[$book]['basePath'] . $this->__getFirstKey($this->__flatList[$book]);
	}
	else
	{
		return false;
	}
}


/*****************************************************************//**
	@brief Indicates whether `$alias` is the toc page for `$book`.
	    @param $alias   String of the alias name to check.
	    @param $book    String of the book name to check.
	    @retval boolean True if `$alias` is the toc for `$book`.
 *********************************************************************/
public function isPageTocForBook( $alias, $book)
{
	if ($this->bookExists($book))
	{
		return $this->books[$book]['tocAlias'] == $alias;
	}
	else
	{
		return false;
	}
}


/// @name Methods that fetch data structures for use elsewhere.
/// @{


/*****************************************************************//**
	@brief
		Gets the data required to generate any of the styles of
		page navigator widgets using the helper.

	    @param $alias   String of the alias to retrieve data.
	    @param $book    String of the book to retrieve data.
	    @return         Returns the array or false.
        @sa JDMultipageHelper.php
 *********************************************************************/
public function getPageNavigatorDataForBook( $alias, $book )
{
	if (!$this->bookExists($book))
	{
		return false;
	}

	/*---------------------------------------*
		Will generate all of the following:
	 *---------------------------------------*/
	// cssOuter
	// toc, first, previous, next, last => href, title, class, content
	// pageCount
	// pageCurrent
	// pageNumbers[0..4] => href, title, class, content, isCurrent

	$flatList = &$this->__flatList[$book];
	$bookData = &$this->books[$book];
	$basePath = $bookData['basePath'];

	$result = array();

	$result['toc']['href'] = $basePath . $bookData['tocAlias'];
	$result['toc']['title'] = $flatList[$bookData['tocAlias']]['title'];
	$result['toc']['class'] = $bookData['cssToc'];
	$result['toc']['content'] = $bookData['navLabelToc'];

	$aliasData = $flatList[$this->__getFirstKey($flatList)];
	$result['first']['href'] = $basePath . $aliasData['alias'];
	$result['first']['title'] = $aliasData['title'];
	$result['first']['class'] = $bookData['cssFirst'];
	$result['first']['content'] = $bookData['navLabelFirst'];
	$result['first']['isCurrent'] = ($alias == $aliasData['alias']);

	if ($adjacentKey = $this->__getAdjacentKey($alias, $flatList, -1))
	{
		$aliasData = $flatList[$adjacentKey];
	}
	$result['previous']['href'] = !$adjacentKey ? "" : $basePath . $aliasData['alias'];
	$result['previous']['title'] = !$adjacentKey ? "" : $aliasData['title'];
	$result['previous']['class'] = $bookData['cssPrevious'];
	$result['previous']['content'] = $bookData['navLabelPrevious'];

	if ($adjacentKey = $this->__getAdjacentKey($alias, $flatList, +1))
	{
		$aliasData = $flatList[$adjacentKey];
	}
	$result['next']['href'] = !$adjacentKey ? "" : $basePath . $aliasData['alias'];
	$result['next']['title'] = !$adjacentKey ? "" : $aliasData['title'];
	$result['next']['class'] = $bookData['cssNext'];
	$result['next']['content'] = $bookData['navLabelNext'];

	$aliasData = $flatList[$this->__getLastKey($flatList)];
	$result['last']['href'] = $basePath . $aliasData['alias'];
	$result['last']['title'] = $aliasData['title'];
	$result['last']['class'] = $bookData['cssLast'];
	$result['last']['content'] = $bookData['navLabelLast'];
	$result['last']['isCurrent'] = ($alias == $aliasData['alias']);


	$pageCount = count($flatList);
	$pageCurrent = array_search($alias,array_keys($flatList)) + 1;
	$pageNumbers = array();

	if ( $pageCount <= 5 )
	{
		$pStart = 1;
		$pQty = $pageCount;
	}
	else
	{
		$pStart = $pageCurrent - 2;
		if ($pStart < 1) {
			$pStart = 1;
		}
		if ($pageCurrent > $pageCount - 2) {
			$pStart = $pageCount - 4;
		}
		$pQty = 5;
	}

	for ($i = $pStart; $i < $pStart + $pQty; $i++)
	{
		$pageNumber = array();
		$aliasData = $flatList[key(array_slice( $flatList, $i-1, 1 ))];
		$pageNumber['href'] = $basePath. $aliasData['alias'];
		$pageNumber['title'] = $aliasData['title'];
		$pageNumber['content'] = $i;
		$pageNumber['class'] = $i == $pageCurrent ? "{$bookData['cssPage']} {$bookData['cssCurrent']}" : $bookData['cssPage'];
		$pageNumber['isCurrent'] = $i == $pageCurrent;
		$pageNumbers[] = $pageNumber;
	}

	$result['cssOuter'] = $bookData['cssOuter'];
	$result['pageCount'] = $pageCount;
	$result['pageCurrent'] = $pageCurrent;
	$result['pageIndex'] = $pageNumbers;
	return $result;
}


/*****************************************************************//**
	@brief
		Build a data structure suitable for conversion into a
		`sitemap.xml` when applied to the right transformation,
		for the book `$book`.

	    @param $book    String of the book to retrieve data.
	    @return         Returns the array or false.
 *********************************************************************/
public function getSitemapDataForBook( $book )
{
	/*---------------------------------------------------------------*
		Recursive closure will be used as our inner loop function.
	 *---------------------------------------------------------------*/
	$doInner = function (&$book, array &$srcArray, array &$dstArray) use (&$doInner)
	{
		foreach ( $srcArray as $myArray)
		{
			if ( strlen( $myArray['file'] ) > 0 )
			{
				// <loc> data
				$loc = "http://" . $_SERVER['HTTP_HOST'] . $this->books[$book]['basePath'] . $myArray['alias'];

				// <lastmod> data
				if ( strlen($myArray['lastmod']) == 0 )
				{
					$tmpDate = new DateTime( $myArray['lastmod']);
					$lastmod = $tmpDate->format('Y-m-d\TH:i:sP');
				}
				else
				{
					$tmpFile = APP . 'Plugin' . DS . 'JDMultipage' . DS . 'View' . DS . 'JDMultipages' . DS . $book . DS . $myArray['file'] . '.ctp';
					$lastmod = gmdate("Y-m-d\TH:i:s\Z", filemtime( $tmpFile ));
				}

				// <changefreq> data
				$changefreq = $myArray['changefreq'];

				// <priority> data
				$priority = $myArray['priority'];

				// data for result
				$dstArray[] = compact( 'loc', 'lastmod', 'changefreq', 'priority' );
			}

			// Recurse down if necessary.
			if ( array_key_exists('list', $myArray) )
			{
				$doInner( $book, $myArray['list'], $dstArray );
			}
		}
	};

	/*---------------------------------------------------------------*
		Procedure proper
	 *---------------------------------------------------------------*/
	if (!$this->bookExists($book))
	{
		return false;
	}

	$dstArray = array();
	$doInner( $book, $this->books[$book]['list'], $dstArray);
	return $dstArray;
}


/*****************************************************************//**
	@brief
		Build a data structure suitable for conversion into a
		table of contents when applied to the right transformation,
		for the book `$book`.
    @details
		Array remains nested to maintain nested \<ul> structure by
		client; returns [text], [title], [href], and if applicable
		[children] nesting the above.

	    @param $book    String of the book to retrieve data.
	    @return         Returns the array or false.
 *********************************************************************/
public function getTocDataForBook( $book )
{
	/*---------------------------------------------------------------*
		Recursive closure will be used as our inner loop function.
	 *---------------------------------------------------------------*/
	$doInner = function (&$book, array &$srcArray, array &$dstArray) use (&$doInner)
	{
		foreach ( $srcArray as $myArray )
		{
			$text = $myArray['toc'];
			$title = $myArray['title'];
			$href = empty($myArray['alias']) ? "" : $this->books[$book]['basePath'] .$myArray['alias'];
			$children = array();

			// Recurse down if necessary.
			if ( isset($myArray['list']) )
			{
				$doInner( $book, $myArray['list'], $children );
				$dstArray[] = compact( 'text', 'title', 'href', 'children' );
			}
			else
			{
				$dstArray[] = compact( 'text', 'title', 'href' );

			}
		}
	};

	/*---------------------------------------------------------------*
		Procedure proper
	 *---------------------------------------------------------------*/
	if (!$this->bookExists($book))
	{
		return false;
	}

	$dstArray = array();
	$doInner( $book, $this->books[$book]['list'], $dstArray);
	return $dstArray;
}


/// @}


/*****************************************************************//**
    Flattens the `$books` array so that we can hold it in memory
    and find information much quicker. Data in the form of
    [book] => [tag] => [stuff] = {values}
	    @param[in] $srcArray    A `$books` array, generally `$books`.
	    @param[out] $dstArray   The array to hold flat data.
 *********************************************************************/
private function _generateFlatList( array &$srcArray, array &$dstArray )
{
	/*---------------------------------------------------------------*
		Recursive closure will be used as our inner loop function.
	 *---------------------------------------------------------------*/
	$doInner = function (&$src, &$dst) use (&$doInner)
	{
		foreach ( $src as $myArray)
		{
			// We only want to add array objects for items that have files. $books
			// will often have non-file entries that serve as headers/chapters when
			// generating tables of contents.
			if (!empty($myArray['file']))
			{
				// The `alias` becomes the key, and contains the array object.
				// Later we'll unset the 'list' that rides along.
				$dst[$myArray['alias']] = $myArray;
			}

			// process nested items adding them on, and delete the nested array.
			if (isset($myArray['list']))
			{
				$tmp = $myArray['list'];
				unset($dst[$myArray['alias']]['list']);
				$doInner( $tmp, $dst);
			}

		}
	};

	/*---------------------------------------------------------------*
		Procedure proper
	 *---------------------------------------------------------------*/
	foreach ( $srcArray as $bookName => $book )
	{
		$dstArray[$bookName] = array();
		$doInner( $book['list'], $dstArray[$bookName]);
	}
}


/*****************************************************************//**
    For programmer friendliness many of the keys in the `$books`
    array are optional, but checking for their presence all
    the time is kind of a bummer. Called at instantiation this
    procedure will make sure every key is present even if as
    zero length strings.
	    @param $srcArray    A `$books` array, generally `$books`.
 *********************************************************************/
private function _ensureBooksIsRegular( array &$srcArray )
{
	/*---------------------------------------------------------------*
		Closure to check that keys exist.
	 *---------------------------------------------------------------*/
	$checkKeyOrAdd = function ( $key, &$array, $defaultValue = '' )
	{
		if ( (!isset($array[$key])) || ( strlen($array[$key]) == 0 ) )
		{
			$array[$key] = $defaultValue;
		}
	};

	/*---------------------------------------------------------------*
		Recursive closure will be used as our inner loop function.
	 *---------------------------------------------------------------*/
	$doInner = function (&$src) use (&$doInner, $checkKeyOrAdd)
	{
		foreach ( $src as &$myArray)
		{
			$checkKeyOrAdd('toc', $myArray, 'Hello, world!');
			$checkKeyOrAdd('file', $myArray);
			$checkKeyOrAdd('alias', $myArray, $myArray['file']);
			$checkKeyOrAdd('title', $myArray);
			$checkKeyOrAdd('priority', $myArray, '0.5');
			$checkKeyOrAdd('changefreq', $myArray, 'never');
			$checkKeyOrAdd('lastmod', $myArray);

			// recurse into lower levels if present.
			if (array_key_exists('list', $myArray))
			{
				$doInner( $myArray['list']);
			}
		}
	};

	/*---------------------------------------------------------------*
		Procedure proper
	 *---------------------------------------------------------------*/
	foreach ( $srcArray as &$book )
	{
		$checkKeyOrAdd('layout', $book, 'default');
		$checkKeyOrAdd('basePath', $book);
		$checkKeyOrAdd('tocAlias', $book);
		$checkKeyOrAdd('navLabelToc', $book, 'Contents');
		$checkKeyOrAdd('navLabelFirst', $book, 'First');
		$checkKeyOrAdd('navLabelPrevious', $book, 'Previous');
		$checkKeyOrAdd('navLabelNext', $book, 'Next');
		$checkKeyOrAdd('navLabelLast', $book, 'Last');
		$checkKeyOrAdd('cssOuter', $book);
		$checkKeyOrAdd('cssFirst', $book);
		$checkKeyOrAdd('cssPrevious', $book);
		$checkKeyOrAdd('cssToc', $book);
		$checkKeyOrAdd('cssNext', $book);
		$checkKeyOrAdd('cssLast', $book);
		$checkKeyOrAdd('cssPage', $book);
		$checkKeyOrAdd('cssCurrent', $book);

		if (array_key_exists('list', $book))
		{
			$doInner( $book['list']);
		}
	}
}


/*****************************************************************//**
	@brief
	    Find the previous/next array key.
	@details
	    Positive `$increment` will find the next (or later) key,
	    and negative will find previous (or earlier) key. Will
	    return false if they current key isn't found, or if
	    the `$increment` goes beyond the bounds of the list.

	    @param $key         The current key
	    @param $hash        The list of all keys.
	    @param $increment   Offset from current key desired.
	    @return             The desired key, or false if not possible.
 *********************************************************************/
private function __getAdjacentKey( $key, array &$hash, $increment )
{
	$keys = array_keys( $hash );
	$i = array_search( $key, $keys );

	if ( $i === false )
	{
		return false;
	}

	if ( ( $i + $increment < 0 ) or ( $i + $increment > count($keys)-1 ) )
	{
		return false;
	}

	return $keys[$i + $increment];
}


/*****************************************************************//**
	Find the first array key.
	    @param $hash        The list of all keys.
        @retval String      The first key in the list.
 *********************************************************************/
private function __getFirstKey( array &$hash )
{
	reset($hash);
	return key($hash);
}


/*****************************************************************//**
	Find the last array key.
	    @param $hash        The list of all keys.
        @retval String      The last key in the list.
 *********************************************************************/
private function __getLastKey( array &$hash )
{
	end($hash);
	return key($hash);
}

}
