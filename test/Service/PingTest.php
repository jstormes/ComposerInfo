<?php
/**
 * Created by PhpStorm.
 * User: jstormes
 * Date: 1/12/17
 * Time: 10:01 AM
 */

use ModuleName\Service;

class PingTest extends PHPUnit_Framework_TestCase
{
    private $Ping = null;

    public function SetUp() {
        $this->Ping = new ModuleName\Service\Ping();
    }

    public function testPing() {
        $this->assertNotEmpty($this->Ping->Ping());
    }
}