<?php

require_once dirname(__FILE__) . '/../router.php';

class RouterTest extends PHPUnit_Framework_TestCase {

    protected function setUp() {

    }

    protected function tearDown() {

    }

    public function testInitSuccessFile() {
        $this->assertTrue(Router::init(dirname(__FILE__) . '/../config.php'));
    }

    /**
     * @expectedException Exception
     */
    public function testCallDirectionEmpty() {
        Router::call('');
    }

    public function testCallSuccessFullDirection() {
        $this->assertEquals(Router::call('Dummy.index'), 'Hello World!');
    }

    public function testCallSuccessPartDirection() {
        $this->assertEquals(Router::call('Dummy'), 'Hello World!');
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testCallMethodFailed() {
        Router::call('Dummy.methodDoesNotExist');
    }

    /**
     * @expectedException Exception
     */
    public function testCallFailed() {
        Router::call('ModuleDoesNotExist');
    }

    /**
     * @expectedException Exception
     */
    public function testModuleInvalid() {
        Router::call('Failed');
    }

}