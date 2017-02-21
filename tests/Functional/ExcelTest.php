<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;

class ExcelTest extends TestCase
{
	/**
	* @group functional
	*/
    public function testIgnores()
    {
    	$graphTestBase = new GraphTestBase();
        $this->assertEquals(1, 2);
    }
}