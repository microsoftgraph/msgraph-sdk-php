<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class OnedriveTest extends TestCase
{
	/**
	* @group functional
	*/
	public function testNextPageRequest()
	{
		$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$driveItemsPageIterator = $client->createCollectionRequest("GET", "/me/drive/root/children")
    							 		 ->setPageSize(4)
    							 		 ->setReturnType(Model\DriveItem::class);
    	$driveItemsPage = $driveItemsPageIterator->getPage();
    	$this->assertNotNull($driveItemsPage);

    	while (!$driveItemsPageIterator->isEnd())
    	{
    		$driveItemsPage = $driveItemsPageIterator->getPage();
    	}

    	$this->assertNotNull($driveItemsPage);
    }

    /**
    * @group functional
    */
    public function testGetContent()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$driveItems = $client->createRequest("GET", "/me/drive/root/children")
    						 ->setReturnType(Model\DriveItem::class)
    						 ->execute();
    	foreach ($driveItems as $item)
    	{
    		if ($item->getFile())
    		{
    			$itemId = $item->getId();
    			$driveItemContent = $client->createRequest("GET", "/me/drive/items/$itemId/content")
    									   ->setReturnType("stream")
    									   ->execute();
    			$this->assertNotNull($driveItemContent);
    		}
    	}
    }

    /**
    * @group functional
    */
    public function testGetSetPermissions()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$driveItems = $client->createRequest("GET", "/me/drive/root/children")
    						 ->setReturnType(Model\DriveItem::class)
    						 ->execute();

    	foreach ($driveItems as $item)
    	{
    		if ($item->getFile())
    		{
    			$itemId = $item->getId();
    			$driveItem = $client->createRequest("GET", "/me/drive/items/$itemId?\$expand=permissions")
    								->setReturnType(Model\DriveItem::class)
    								->execute();
    			$this->assertNotNull($driveItem);

    			$perm = new Model\Permission();
    			$perm->setRoles(array("write"));
    			if (count($driveItem->getPermissions()) > 0)
    			{
    				$permId = $driveItem->getPermissions()[0]["id"];

    				$client->createRequest("PATCH", "/me/drive/items/$itemId/permissions/$permId")
    									 ->addHeaders(array("if-match" => $driveItem->getCTag()))
    									 ->attachBody($perm)
    									 ->execute();
    				$permission = $client->createRequest("GET", "/me/drive/items/$itemId/permissions/$permId")
    									 ->setReturnType(Model\Permission::class)
    									 ->execute();

    				$this->assertNotNull($permission);
    				$this->assertEquals("write", $permission->getRoles()[0]);
    			}
    			break;
    		}
    	}
    }

    /**
    * @group functional
    */
    public function testSearchFile()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$driveItems = $client->createRequest("GET", "/me/drive/search(q='employee services')")
    						 ->setReturnType(Model\DriveItem::class)
    						 ->execute();
    	$this->assertEquals(5, count($driveItems));
    }

    /**
    * @group functional
    */
    public function testCreateSharingLink()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$itemsToShare = $client->createRequest("GET", "/me/drive/root/children?\$filter=startswith(name, 'Timesheet')")
    						  ->setReturnType(Model\DriveItem::class)
    						  ->execute();
    	$itemToShare = $itemsToShare[0];
    	$this->assertEquals("Timesheet", substr($itemToShare->getName(), 0, 9));

    	$itemId = $itemToShare->getId();
    	$permission = $client->createRequest("POST", "/me/drive/items/$itemId/createLink")
    						 ->attachBody(array("type" => "edit", "scope" => "organization"))
    						 ->setReturnType(Model\Permission::class)
    						 ->execute();
    	$link = $permission->getLink();
    	$this->assertEquals("organization", $link->getScope());
    	$this->assertEquals("edit", $link->getType());
    	$this->assertNotNull($link->getWebUrl());
    }

    /**
    * @group functional
    */
    public function testInvite()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$itemsToShare = $client->createRequest("GET", "/me/drive/root/children?\$filter=startswith(name, 'Timesheet')")
    						  ->setReturnType(Model\DriveItem::class)
    						  ->execute();
    	$itemToShare = $itemsToShare[0];
    	$itemId = $itemToShare->getId();

    	$me = $client->createRequest("GET", "/me")
    				 ->setReturnType(Model\User::class)
    				 ->execute();
    	$domain = explode("@", $me->getMail())[1];
    	$recipient = new Model\DriveRecipient();
    	$recipient->setEmail("alexd@".$domain);

    	$roles = array("write");

    	$body = array(
    		"recipients" => array($recipient), 
    		"requireSignIn" => true,
    		"sendInvitation" => true,
    		"roles" => $roles, 
    		"message" => "Check out the Invite feature!");

    	$inviteCollection = $client->createRequest("POST", "/me/drive/items/$itemId/invite")
    							   ->attachBody($body)
    							   ->setReturnType(Model\Permission::class)
    							   ->execute();
    	$this->assertEquals("Alex Darrow", $inviteCollection[0]->getGrantedTo()->getUser()->getDisplayName());
    }
}