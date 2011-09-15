<?php
require_once 'Cache.php';

require_once 'PHPUnit/Autoload.php';

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
        $this->Cache = null;

        parent::tearDown ();
    }

    /**
     * Tests Cache->Cache()
     */
    public function testCacheNoContainer() {
        $this->Cache = New Cache('_otherContainer_');
        $this->assertInstanceOf('Cache_Error', $this->Cache->container);

    }
    public function testCacheCoveredContainer() {
        $this->Cache = New Cache('file');
        $this->assertInstanceOf('Cache_Container_file', $this->Cache->container);
    }
    public function testCacheInvalidOptionType() {
        $this->Cache = New Cache('file', 'wrong_parameter_type_need_be_array');
        $this->assertInstanceOf('Cache_Error', $this->Cache->container);
    }

    /**
    * Test Cache setCaching
    */
    public function testCachegetCaching() {
        $this->Cache = New Cache('file');
        $this->assertTrue($this->Cache->getCaching());
        $this->Cache->setCaching(false);
        $this->assertFalse($this->Cache->getCaching());
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

