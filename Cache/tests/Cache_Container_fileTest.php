<?php

require_once 'Cache/Container/file.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Cache_Container_file test case.
 */
class Cache_Container_fileTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var Cache_Container_file
	 */
	private $Cache_Container_file;

	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		$config 				= Array('cache_dir'=>'/tmp/','filename_prefix'=>'test');
		$this->allowedOptions 	= Array('cache_dir', 'filename_prefix', 'max_userdata_linelength');
		$this->Cache_Container_file = new Cache_Container_file('file', $config);

	}

	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {

		$this->Cache_Container_file = null;
		$this->allowedOptions 		= null;
		parent::tearDown ();
	}

	/**
	 * Constructs the test case.
	 */
	public function __construct() {
	}
	/**
	 * Tests Cache_Container_file->Cache_Container_file()
	 */
	public function testCache_Container_file() {
        $this->assertType('Cache_Container_file', $this->Cache_Container_file);
	}

	public function testhasBeenSet() {
		$this->AssertTrue($this->Cache_Container_file->hasBeenSet('cache_dir'));
	}
	public function testhasNotBeenSet() {
		$this->AssertFalse($this->Cache_Container_file->hasBeenSet('propertynotset'));
	}
	public function testAllowedOptions(){
		$this->AssertEquals($this->allowedOptions,
			$this->Cache_Container_file->getAllowedOptions()
		);
	}

}

