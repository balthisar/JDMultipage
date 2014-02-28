<?php
/*************************************************************************************************
 * @file           JDMultipageHelperTest.php
 *
 * @brief
 *
 * Part of plugin `JDMultipage` unit tests.
 *
 * @sa             JDMultipagesController.php
 * @sa             JSMultipageTest.php
 *
 * @date           2014-02-12
 * @author         Jim Derry
 * @copyright      ©2014 by Jim Derry and balthisar.com
 * @copyright      MIT License (http://www.opensource.org/licenses/mit-license.php)
 *************************************************************************************************/


App::uses('View', 'View');
App::uses('JDMultipageHelper', 'JDMultipage.View/Helper');


/** Class implements some unit testing for JDMultipageHelper helper. */
class JDMultipageHelperTest extends CakeTestCase
{


	/**---------------------------------------------------------------------------*
	 * Testing framework setup.
	 **---------------------------------------------------------------------------*/
	public function setUp()
	{
		parent::setUp();

		$view              = $this->getMock('View');
		$this->JDMultipage = new JDMultipageHelper($view);

		$this->navData = <<< NAVDATA
a:9:{s:3:"toc";a:4:{s:4:"href";s:25:"/multipages-demo/demo/toc";s:5:"title";s:0:"";s:5:"class";s:9:"cssNavToc";s:7:"content";s:8:"Contents";}s:5:"first";a:4:{s:4:"href";s:27:"/multipages-demo/demo/index";s:5:"title";s:22:"First page of the demo";s:5:"class";s:11:"cssNavFirst";s:7:"content";s:5:"First";}s:8:"previous";a:4:{s:4:"href";s:0:"";s:5:"title";s:0:"";s:5:"class";s:14:"cssNavPrevious";s:7:"content";s:8:"Previous";}s:4:"next";a:4:{s:4:"href";s:25:"/multipages-demo/demo/toc";s:5:"title";s:0:"";s:5:"class";s:10:"cssNavNext";s:7:"content";s:4:"Next";}s:4:"last";a:4:{s:4:"href";s:28:"/multipages-demo/demo/demo04";s:5:"title";s:0:"";s:5:"class";s:10:"cssNavLast";s:7:"content";s:4:"Last";}s:8:"cssOuter";s:11:"cssNavOuter";s:9:"pageCount";i:6;s:11:"pageCurrent";i:1;s:9:"pageIndex";a:5:{i:0;a:5:{s:4:"href";s:27:"/multipages-demo/demo/index";s:5:"title";s:22:"First page of the demo";s:7:"content";i:1;s:5:"class";s:30:"cssNavIndex cssNavCurrentIndex";s:9:"isCurrent";b:1;}i:1;a:5:{s:4:"href";s:25:"/multipages-demo/demo/toc";s:5:"title";s:0:"";s:7:"content";i:2;s:5:"class";s:11:"cssNavIndex";s:9:"isCurrent";b:0;}i:2;a:5:{s:4:"href";s:38:"/multipages-demo/demo/about-navigators";s:5:"title";s:23:"Go to table of contents";s:7:"content";i:3;s:5:"class";s:11:"cssNavIndex";s:9:"isCurrent";b:0;}i:3;a:5:{s:4:"href";s:33:"/multipages-demo/demo/section-two";s:5:"title";s:0:"";s:7:"content";i:4;s:5:"class";s:11:"cssNavIndex";s:9:"isCurrent";b:0;}i:4;a:5:{s:4:"href";s:35:"/multipages-demo/demo/deeply-buried";s:5:"title";s:0:"";s:7:"content";i:5;s:5:"class";s:11:"cssNavIndex";s:9:"isCurrent";b:0;}}}
NAVDATA;

		$this->navData = unserialize($this->navData);
	}


	/**---------------------------------------------------------------------------*
	 * Testing framework teardown.
	 **---------------------------------------------------------------------------*/
	public function tearDown()
	{
		parent::tearDown();
		unset($this->JDMultipage);
	}


	/**---------------------------------------------------------------------------*
	 * Simply ensures the test framework is working.
	 **---------------------------------------------------------------------------*/
	public function testTest()
	{
		$result   = '<h1>I am king of the hill.</h1>';
		$expected = '<h1>I am king of the hill.</h1>';
		$this->assertEqual($result, $expected);
	}


	/**---------------------------------------------------------------------------*
	 * testGetNavigatorPrevNext
	 **---------------------------------------------------------------------------*/
	public function testGetNavigatorPrevNext()
	{
		$result   = $this->JDMultipage->getNavigatorPrevNext($this->navData);
		$result   = preg_replace("/\r|\n|\ |\t/", "", $result);
		$expected = <<< SAMPLE
<divclass='cssNavOuter'>
<divclass='cssNavPrevious'>
<spanclass='disabled'>Previous</span>
</div>
<divclass='cssNavToc'>
<ahref='/multipages-demo/demo/toc'>Contents</a>
</div>
<divclass='cssNavNext'>
<ahref='/multipages-demo/demo/toc'>Next</a>
</div>
</div>
SAMPLE;
		$expected = preg_replace("/\r|\n|\ |\t/", "", $expected);
		$this->assertEquals($expected, $result);
	}


	/**---------------------------------------------------------------------------*
	 * testGetNavigatorFirstLast
	 **---------------------------------------------------------------------------*/
	public function testGetNavigatorFirstLast()
	{
		$result   = $this->JDMultipage->getNavigatorFirstLast($this->navData);
		$result   = preg_replace("/\r|\n|\ |\t/", "", $result);
		$expected = <<< SAMPLE
<divclass='cssNavOuter'>
<divclass='cssNavFirst'>
<ahref='/multipages-demo/demo/index'title='Firstpageofthedemo'>First</a>
</div>
<divclass='cssNavPrevious'>
<spanclass='disabled'>Previous</span>
</div>
<divclass='cssNavToc'>
<ahref='/multipages-demo/demo/toc'>Contents</a>
</div>
<divclass='cssNavNext'>
<ahref='/multipages-demo/demo/toc'>Next</a>
</div>
<divclass='cssNavLast'>
<ahref='/multipages-demo/demo/demo04'>Last</a>
</div>
</div>
SAMPLE;
		$expected = preg_replace("/\r|\n|\ |\t/", "", $expected);
		$this->assertEquals($expected, $result);
	}


	/**---------------------------------------------------------------------------*
	 * testGetNavigatorPagination
	 **---------------------------------------------------------------------------*/
	public function testGetNavigatorPagination()
	{
		$result   = $this->JDMultipage->getNavigatorPagination($this->navData);
		$result   = preg_replace("/\r|\n|\ |\t/", "", $result);
		$expected = <<< SAMPLE
<divclass='cssNavOuter'>
<divclass='cssNavToc'>
<ahref='/multipages-demo/demo/toc'>Contents</a>
</div>
<divclass='cssNavFirst'>
<ahref='/multipages-demo/demo/index'title='Firstpageofthedemo'>First</a>
</div>
<divclass='cssNavPrevious'>
<spanclass='disabled'>Previous</span>
</div>
<divclass='cssNavIndexcssNavCurrentIndex'>
<ahref='/multipages-demo/demo/index'title='Firstpageofthedemo'class='disabled'>1</a>
</div>
<divclass='cssNavIndex'>
<ahref='/multipages-demo/demo/toc'>2</a>
</div>
<divclass='cssNavIndex'>
<ahref='/multipages-demo/demo/about-navigators'title='Gototableofcontents'>3</a>
</div>
<divclass='cssNavIndex'>
<ahref='/multipages-demo/demo/section-two'>4</a>
</div>
<divclass='cssNavIndex'>
<ahref='/multipages-demo/demo/deeply-buried'>5</a>
</div>
<divclass='cssNavNext'>
<ahref='/multipages-demo/demo/toc'>Next</a>
</div>
<divclass='cssNavLast'>
<ahref='/multipages-demo/demo/demo04'>Last</a>
</div>
</div>
SAMPLE;
		$expected = preg_replace("/\r|\n|\ |\t/", "", $expected);
		$this->assertEquals($expected, $result);
	}


	/**---------------------------------------------------------------------------*
	 * testGetToc
	 **---------------------------------------------------------------------------*/
	public function testGetToc()
	{
		$result   = $this->JDMultipage->getTOC('demo');
		$result   = preg_replace("/\r|\n|\ |\t/", "", $result);
		$expected = <<< SAMPLE
<ul>
<li><ahref='/multipages-demo/demo/index'title='Firstpageofthedemo'>Introduction</a></li>
<li><span>UsefulInformation(notapage!)</span>
<ul>
<li><ahref='/multipages-demo/demo/toc'>TableofContents</a></li>
<li><ahref='/multipages-demo/demo/about-navigators'title='Gototableofcontents'>AbouttheNavigators</a></li>
</ul>
</li>
<li><ahref='/multipages-demo/demo/section-two'>MainHeading(withapage)</a>
<ul>
<li><span>Subsectionthat’snotapage</span>
<ul>
<li><span>Subsubsectionthat’salsonotapage</span>
<ul>
<li><ahref='/multipages-demo/demo/deeply-buried'>Deeplynestedpage</a></li>
</ul>
</li>
</ul>
</li>
<li><ahref='/multipages-demo/demo/demo04'>AnothersubsectionundertheMainHeading(xmlexample)</a></li>
</ul>
</li>
</ul>
SAMPLE;
		$expected = preg_replace("/\r|\n|\ |\t/", "", $expected);
		$this->assertEquals($expected, $result);
	}


	/**---------------------------------------------------------------------------*
	 * getSitemapBody
	 **---------------------------------------------------------------------------*/
	public function testGetSitemapBody()
	{
		$result   = $this->JDMultipage->getSitemapBody('demo');
		$result   = preg_replace('#(<lastmod.*?>).*?(</lastmod>)#', '$1$2', $result);
		$result   = preg_replace('#(<loc.*?>).*?(</loc>)#', '$1$2', $result);
		$result   = preg_replace("/\r|\n|\ |\t/", "", $result);
		$expected = <<< SAMPLE
<url>
<loc></loc>
<lastmod></lastmod>
<changefreq>never</changefreq>
<priority>0.7</priority>
</url>
<url>
<loc></loc>
<lastmod></lastmod>
<changefreq>never</changefreq>
<priority>0.5</priority>
</url>
<url>
<loc></loc>
<lastmod></lastmod>
<changefreq>never</changefreq>
<priority>0.5</priority>
</url>
<url>
<loc></loc>
<lastmod></lastmod>
<changefreq>never</changefreq>
<priority>0.5</priority>
</url>
<url>
<loc></loc>
<lastmod></lastmod>
<changefreq>never</changefreq>
<priority>0.5</priority>
</url>
<url>
<loc></loc>
<lastmod></lastmod>
<changefreq>never</changefreq>
<priority>0.5</priority>
</url>
SAMPLE;

		$expected = preg_replace("/\r|\n|\ |\t/", "", $expected);
		$this->assertEqual($result, $expected);
	}

}
