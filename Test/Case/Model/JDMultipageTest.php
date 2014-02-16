<?php
/*********************************************************************************************//**
    @file JDMultipageTest.php

    @brief

    Part of plugin `JDMultipage` unit tests.

    @sa JDMultipagesController.php
    @sa JSMultipageHelperTest.php

    @date           2014-02-12
    @author         Jim Derry
    @copyright      ©2014 by Jim Derry and balthisar.com
    @copyright      MIT License (http://www.opensource.org/licenses/mit-license.php)

 *************************************************************************************************/


App::uses('JDMultipage', 'JDMultipage.JDMultipage');


/// Class implements some unit testing for JDMultipage model.
class JDMultipageTest extends CakeTestCase
{

/// Testing framework setup.
public function setUp()
{
	parent::setUp();

	$this->JDMultipage = ClassRegistry::init('JDMultipage.JDMultipage');
}


/// Testing framework teardown.
public function tearDown()
{
	parent::tearDown();
	unset($this->JDMultipage);
}

/// Simply ensures the test framework is working.
public function testTest()
{
	$result = "<h1>I am Jim Derry</h1>";
	$expected = "<h1>I am Jim Derry</h1";
	$this->assertTags($result, $expected);
}


/// Tests all of the basic functions of the model.
public function testBasicFunctions()
{
	// a number that shouldn't exist by chance, in order
	// to test false assertions.
	$guid = 'ebc4af02-6801-49d5-bb5d-399906c11d05';

	$result = $this->JDMultipage->bookExists('demo');
	$this->assertEquals($result, true, 'bookExists: The demo book doesn’t exist in the model.');

	$result = $this->JDMultipage->bookExists($guid);
	$this->assertEquals($result, false, 'bookExists: A book that doesn’t exist seems to exist in the model.');

	$result = $this->JDMultipage->aliasExistsInBook('deeply-buried', 'demo');
	$this->assertEquals($result, true, 'aliasExistsInBook: failed.');

	$result = $this->JDMultipage->aliasExistsInBook($guid, 'demo');
	$this->assertEquals($result, false, 'aliasExistsInBook: failed.');

	$result = $this->JDMultipage->isPageTocForBook('toc', 'demo');
	$this->assertEquals($result, true, 'isPageTocForBook: failed.');

	$result = $this->JDMultipage->isPageTocForBook('deeply-buried', 'demo');
	$this->assertEquals($result, false, 'isPageTocForBook: failed.');

	$result = $this->JDMultipage->fileForAliasForBook('deeply-buried', 'demo');
	$this->assertEquals($result, 'demo' . DS . 'demo03');

	$result = $this->JDMultipage->firstPageOf('demo');
	$this->assertEquals($result, '/multipages-demo/demo/index');

	$result = $this->JDMultipage->getTocDataForBook('demo')[2]['children'][0]['children'][0]['children'][0]['text'];
	$this->assertEquals($result, 'Deeply nested page');

	$result = $this->JDMultipage->getSitemapDataForBook('demo')[2]['loc'];
	$this->assertTextContains('multipages-demo/demo/about-navigators', $result);

	$result = $this->JDMultipage->getPageNavigatorDataForBook('toc', 'demo')['pageIndex'][1]['isCurrent'];
	$this->assertEquals($result, true, 'getPageNavigatorDataForBook: failed.');

}


}
