<?php

require_once 'Cache.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Cache test case.
 */
class CacheTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Cache
     */
    private $Cache;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp() {
        parent::setUp ();


    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown() {
        // TODO Auto-generated CacheTest::tearDown()

        $this->Cache = null;

        parent::tearDown ();
    }

    /**
     * Constructs the test case.
     */
    public function __construct() {
    }

    /**
     * Tests Cache->Cache()
     */
    public function testCacheNoContainer() {
        $this->Cache = New Cache('_otherContainer_');
        $this->assertType('Cache_Error', $this->Cache->container);
    }
    public function testCacheCoveredContainer() {
        $this->Cache = New Cache('file');
        $this->assertType('Cache_Container_file', $this->Cache->container);
    }

/*
    /**
     * Tests Cache->_Cache()
     */
    public function test_Cache() {
        // TODO Auto-generated CacheTest->test_Cache()
        $this->markTestIncomplete ( "_Cache test not implemented" );

        $this->Cache->_Cache(/* parameters */);

    }

    /**
     * Tests Cache->generateID()
     */
    public function testGenerateID() {
		$this->Cache = New Cache('file');
		$name = 'samplename';
		$expectedID = '2081d6c6cc5f4593df2c149db6b30eda';
		$id = $this->Cache->generateID($name);
		$this->assertEquals($expectedID, $id);

    }

}

