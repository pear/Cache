<?php

require_once 'PHPUnit/Autoload.php';

require_once 'CacheTest.php';
require_once 'Cache_ContainerTest.php';
require_once 'Cache_Container_fileTest.php';

/**
 * Static test suite.
 */
class Cache_testSuite extends PHPUnit_Framework_TestSuite {

    /**
     * Constructs the test suite handler.
     */
    public function __construct() {
        $this->setName ( 'TestCachePackage' );

        $this->addTestSuite ( 'CacheTest' );
        $this->addTestSuite ( 'Cache_ContainerTest' );
        $this->addTestSuite ( 'Cache_Container_fileTest' );

    }

    /**
     * Creates the suite.
     */
    public static function suite() {
        return new self ();
    }
}

