<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class OpenTypeTest extends TestCase
{
    private $_client;

    protected function setUp()
    {
        $graphTestBase = new GraphTestBase();
        $this->_client = $graphTestBase->graphClient;
    }

	/**
	* @group functional
	*/
	public function testOpenExtensions()
    {
    	$extension = new Model\Extension(array("theme" => "dark", "extensionName" => "Extension 1"));

    	$this->_client->setApiVersion("beta");
    	$eResult = $this->_client->createRequest("POST", "/me/extensions")
    		->attachBody($extension)
    		->setReturnType(Model\Extension::class)
    		->execute();

    	$this->assertEquals("Extension 1", $eResult->getProperties()["extensionName"]);

    	$this->_client->createRequest("DELETE", "/me/extensions/" . $eResult->getId())
    		->execute();
    }
}