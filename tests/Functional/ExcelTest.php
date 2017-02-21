<?php
use PHPUnit\Framework\TestCase;

class ExcelTest extends TestCase
{
	/**
	* @group functional
	*/
    public function testIgnores()
    {
        $this->assertEquals(1, 2);
    }
}