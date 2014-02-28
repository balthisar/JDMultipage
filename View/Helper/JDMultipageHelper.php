<?php
/*************************************************************************************************
 * @file           JDMultipageHelper.php
 *
 * @brief
 *
 * Part of plugin `JDMultipage`
 *
 * @details
 *
 * This helper provides functions to add to your layout and/or views to
 * display some of the convenience features offered by the `JDMultipage`
 * plugin.
 *
 * The first set of helpers work without breaking any type of MVC. There's
 * no variation of input parameters because the controller sets the view
 * variable `$JDMPNavigatorData` automatically. These are the helpers related
 * to displaying the navigation widgets. Use them like this from views:
 *
 * ~~~~~~~~~{.php}
 * echo $this->JDMultipage->getNavigatorPagination($JDMPNavigatorData)
 * ~~~~~~~~~
 *
 * - `getNavigatorPrevNext($JDMPNavigatorData)`
 * - `getNavigatorFirstLast($JDMPNavigatorData)`
 * - `getNavigatorPagination($JDMPNavigatorData)`
 *
 *
 * The next set of helpers necessarily break MVC slightly by communicating
 * directly with the model. This was deemed as an acceptable compromise due
 * to the self-contained nature of this package as a plugin, and most
 * importantly in order to avoid the requirement to use `requestAction` in
 * your views.
 *
 * - `getTOC( $book, $classes )`
 * - `getSitemapBody( $book )`
 *
 * @sa             JDMultipagesController.php
 *
 * @date           2014-02-12
 * @author         Jim Derry
 * @copyright      ©2014 by Jim Derry and balthisar.com
 * @copyright      MIT License (http://www.opensource.org/licenses/mit-license.php)
 *************************************************************************************************/


App::uses('AppHelper', 'View/Helper');


/**
 * Implements a view helper to show navigation controls,
 * tables of contents, or sitemap.xml bodies.
 * */
class JDMultipageHelper extends AppHelper
{


/// @name Navigation widget helpers
/// @{


	/**---------------------------------------------------------------------------*
	 * Returns HTML for a navigation widget.
	 *
	 * @details
	 * Returns the `$navData` in a series of `<divs>` (suitable for CSS styling)
	 * that contains links for First, Previous, TOC, Next, and Last pages.
	 *
	 * @param mixed $navData The view's `$JDMPNavigatorData`.
	 * @return string        HTML string for the navigator.
	 **---------------------------------------------------------------------------*/
	public function getNavigatorFirstLast( $navData )
	{
		if ( empty($navData) )
		{
			return '';
		}

		$result[] = "";
		$result[] = $this->mkDiv($navData['cssOuter']);
		$result[] = $this->t(1) . $this->mkBuild($navData['first']);
		$result[] = $this->t(1) . $this->mkBuild($navData['previous']);
		$result[] = $this->t(1) . $this->mkBuild($navData['toc']);
		$result[] = $this->t(1) . $this->mkBuild($navData['next']);
		$result[] = $this->t(1) . $this->mkBuild($navData['last']);
		$result[] = "</div>\n";

		return implode("\n", $result);
	}


	/**---------------------------------------------------------------------------*
	 * Returns HTML for a navigation widget.
	 *
	 * @details
	 * Returns the `$navData` in a series of `<divs>` (suitable for CSS styling)
	 * that contains links for First, Previous, TOC, Next, and Last pages, and
	 * a five page mini index.
	 *
	 * @param mixed $navData  The view's `$JDMPNavigatorData`.
	 * @return string         HTML string for the navigator.
	 **---------------------------------------------------------------------------*/
	public function getNavigatorPagination( $navData )
	{
		if ( empty($navData) )
		{
			return '';
		}

		$result[] = "";
		$result[] = $this->mkDiv($navData['cssOuter']);
		$result[] = $this->t(1) . $this->mkBuild($navData['toc']);
		$result[] = $this->t(1) . $this->mkBuild($navData['first']);
		$result[] = $this->t(1) . $this->mkBuild($navData['previous']);
		foreach ( $navData['pageIndex'] as $pageNumber )
		{
			$result[] = $this->t(1) . $this->mkBuild($pageNumber);
		}
		$result[] = $this->t(1) . $this->mkBuild($navData['next']);
		$result[] = $this->t(1) . $this->mkBuild($navData['last']);
		$result[] = "</div>\n";

		return implode("\n", $result);
	}


	/**---------------------------------------------------------------------------*
	 * Returns HTML for a navigation widget.
	 *
	 * @details
	 * Returns the `$navData` in a series of `<divs>` (suitable for CSS styling)
	 * that contains links for Previous, TOC, and Next pages.
	 *
	 * @param mixed $navData  The view's `$JDMPNavigatorData`.
	 * @return string         HTML string for the navigator.
	 **---------------------------------------------------------------------------*/
	public function getNavigatorPrevNext( $navData )
	{
		if ( empty($navData) )
		{
			return '';
		}

		$result[] = "";
		$result[] = $this->mkDiv($navData['cssOuter']);
		$result[] = $this->t(1) . $this->mkBuild($navData['previous']);
		$result[] = $this->t(1) . $this->mkBuild($navData['toc']);
		$result[] = $this->t(1) . $this->mkBuild($navData['next']);
		$result[] = "</div>\n";

		return implode("\n", $result);
	}


/// @}
/// @name Other Helpers
/// @{

	/**---------------------------------------------------------------------------*
	 * Returns a sitemap.xml body for the specified $book.
	 *
	 * @param mixed $book   The book for which the sitemap  is wanted.
	 * @return string       String consisting of the TOC HTML.
	 **---------------------------------------------------------------------------*/
	public function getSitemapBody( $book )
	{
		if ( empty($book) )
		{
			return '';
		}

		$JDMultipage = ClassRegistry::init('JDMultipage.JDMultipage');
		$mapdata     = $JDMultipage->getSitemapDataForBook($book);

		if ( empty($mapdata) )
		{
			return '';
		}

		$result = '';
		foreach ( $mapdata as $url )
		{
			$result .= "<url>\n";
			$result .= "\t<loc>{$url['loc']}</loc>\n";
			$result .= "\t<lastmod>{$url['lastmod']}</lastmod>\n";
			$result .= "\t<changefreq>{$url['changefreq']}</changefreq>\n";
			$result .= "\t<priority>{$url['priority']}</priority>\n";
			$result .= "</url>\n";
		}

		return $result;
	}


	/**---------------------------------------------------------------------------*
	 * Returns a table of contents for the specified `$book` as a
	 * nested set of one or more `<ul>`'s.
	 *
	 * @details
	 * If you specifiy `$classes` it can consist of string, which will be set as
	 * the class of the outer `<ul>` only, or as an array with the keys:
	 *
	 * Key           | Description
	 * --------------|-----------------------------------------
	 * ulOuter       | class to apply to outer `<ul>`
	 * liNoAnchor    | class applied to `<li>` without an `<a>`
	 * liAnchor      | class applied to `<li>` that has an `<a>`
	 *
	 * Everything else can be targeted very easily with careful CSS selectors.
	 *
	 * @param mixed  $book    The book for which the TOC is wanted.
	 * @param string $classes String or Array as indicated above.
	 * @return String         String consisting of the TOC HTML.
	 **---------------------------------------------------------------------------*/
	public function getTOC( $book, $classes = '' )
	{
		/*---------------------------------------------------------------*
			Recursive closure will be used as our inner loop function.
		 *---------------------------------------------------------------*/
		$doInner = function ( &$tocdata, $i, &$classes ) use ( &$doInner )
		{
			$result = '';
			foreach ( $tocdata as $tocitem )
			{
				$li = empty($tocitem['href']) ? $this->mkListItem($classes['liNoAnchor']) : $this->mkListItem($classes['liAnchor']);
				$result .= $this->t($i) . $li . $this->mkAnchorOrSpan($tocitem['href'], $tocitem['title'], $tocitem['text']);

				if ( isset($tocitem['children']) )
				{
					$result .= "\n" . $this->t($i + 1) . "<ul>\n";
					$result .= $doInner($tocitem['children'], $i + 2, $classes);
					$result .= $this->t($i + 1) . "</ul>\n";
					$result .= $this->t($i) . "</li>\n";
				}
				else
				{
					$result .= "</li>\n";
				}
			}

			return $result;
		};


		/*---------------------------------------------------------------*
			Procedure Proper
		 *---------------------------------------------------------------*/
		if ( empty($book) )
		{
			return '';
		}

		$JDMultipage = ClassRegistry::init('JDMultipage.JDMultipage');
		$tocdata     = $JDMultipage->getTocDataForBook($book);

		if ( empty($tocdata) )
		{
			return '';
		}

		// Ensure that $classes is a well-formed array, which will
		// make later code a hell of a lot easier to manage.

		if ( !empty($classes) && !is_array($classes) )
		{
			$classes = [ 'ulOuter' => $classes ];
		}

		$classes['ulOuter']    = isset($classes['ulOuter']) ? $classes['ulOuter'] : '';
		$classes['liAnchor']   = isset($classes['liAnchor']) ? $classes['liAnchor'] : '';
		$classes['liNoAnchor'] = isset($classes['liNoAnchor']) ? $classes['liNoAnchor'] : '';

		$result = "\n" . $this->mkUnorderedList($classes['ulOuter']) . "\n";
		$result .= $doInner($tocdata, 1, $classes);
		$result .= "</ul>\n";

		return $result;
	}

/// @}


/*——————————————————————————————————————————————————————————————————*
	Little, private, helper functions
 *——————————————————————————————————————————————————————————————————*/

// Indent $i number of tabs
private function t( $i )
{
	return str_repeat("\t", $i);
}

// Return a <div> and include a class if a class is specified.
private function mkDiv( $class = '' )
{
	return (empty($class) ? "<div>" : "<div class='$class'>");
}

// Return an <ul> and include a class if a class is specified.
private function mkUnorderedList( $class = '' )
{
	return (empty($class) ? "<ul>" : "<ul class='$class'>");
}

// Return an <li> and include a class if a class is specified.
private function mkListItem( $class = '' )
{
	return (empty($class) ? "<li>" : "<li class='$class'>");
}

// Return a <span> and include a class if a class is specified.
private function mkSpan( $class = '' )
{
	return (empty($class) ? "<span>" : "<span class='$class'>");
}

// Return an opening <a> and include href, and title and class if specifed.
private function mkAnchor( $href, $title, $class = '' )
{
	return "<a href='$href'" . (empty($title) ? "" : " title='$title'") .
							   (empty($class) ? ">" : " class='$class'>");
}

// Return an <a> with content if there's an href, otherwise just the content in a <span>.
private function mkAnchorOrSpan( $href, $title, $content, $class = '' )
{
	return (empty($href) ? $this->mkSpan($class) : $this->mkAnchor($href, $title, $class)) .
			$content .
			(empty($href) ? "</span>" : "</a>");
}

// Return a fully-formed <div><a>content</a></div> line, or
// if href is null, <div><span.disabled>content</span></div> line.
// If [isCurrent] is set and true, then also flag the <a> with
// .disabled, too, in case it wants to be styled (link will still
// work, though, unless disabled in CSS with pointer-events).
private function mkBuild( &$itemData )
{
	$result = array();
	$disable = ((isset($itemData['isCurrent'])) && ($itemData['isCurrent'] === true)) ? ' disabled' : '';
	$disable = $disable || empty($itemData['href']);
	$disable = $disable ? 'disabled' : '';

	$result[] = $this->mkDiv($itemData['class']);
	$result[] = $this->mkAnchorOrSpan($itemData['href'], $itemData['title'], $itemData['content'], $disable);
	$result[] = "</div>";

	return implode("\n", $result);
}


} // class
