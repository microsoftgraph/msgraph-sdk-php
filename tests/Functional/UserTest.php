<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class UserTest extends TestCase
{
	/**
	* @group functional
	*/
	public function testFilterByStartsWith()
	{
		$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$users = $client->createRequest("GET", "/users?\$filter=startswith(displayName, 'A')")
    					->setReturnType(Model\User::class)
    					->execute();
    	foreach ($users as $user)
    	{
    		$this->assertEquals("A", substr($user->getDisplayName(), 0,1));
    	}
    }

    /**
    * @group functional
    */
    public function testGetPhoto()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$photo = $client->createRequest("GET", "/me/photo/\$value")
    					->execute();
    	$this->assertNotNull($photo->getRawBody());
    }

    /**
    * @group functional
    */
    public function testGetUser()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$user = $client->createRequest("GET", "/me")
    				   ->setReturnType(Model\User::class)
    				   ->execute();
    	$this->assertNotNull($user->getUserPrincipalName());
    }

    /**
    * @group functional
    */
    public function testGetManager()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$manager = $client->createRequest("GET", "/me/manager")
    				   ->setReturnType(Model\User::class)
    				   ->execute();
    	$this->assertNotNull($manager->getDisplayName());
    }

    /**
    * @group functional
    */
    public function testUpdateManager()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$manager = $client->createRequest("GET", "/me/manager")
    				   ->setReturnType(Model\User::class)
    				   ->execute();

    	$client->createRequest("PUT", "/me/manager/\$ref")
    		   ->attachBody('{"@odata.id": "https://graph.microsoft.com/v1.0/users/'.$manager->getId().'"}')
    		   ->execute();
    	$newManager = $client->createRequest("GET", "/me/manager")
    				   ->setReturnType(Model\User::class)
    				   ->execute();
    	$this->assertEquals($manager, $newManager);
    }

    /**
    * @group functional
    */
    public function testGetMemberGroupsWithSecurityEnabled()
    {
		$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$groups = $client->createRequest("POST", "/me/getMemberGroups")
    					  ->attachBody("{securityEnabledOnly: true}")
    				      ->setReturnType(Model\Group::class)
    				      ->execute();
    	$this->assertNotNull($groups);
    }

    /**
    * @group functional
    */
    public function testUpdateUser()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	$user = $this->getCurrentUser();

    	$newUser = new Model\User();
    	$newUser->setGivenName("Katherine");

    	$client->createRequest("PATCH", "/me")
    						  ->attachBody($newUser)
    						  ->execute();
    	$updatedUser = $this->getCurrentUser();

    	$this->assertEquals("Katherine", $updatedUser->getGivenName());
    	$this->assertEquals($user->getMail(), $updatedUser->getMail());

    	$client->createRequest("PATCH", "/me")
    		   ->attachBody($user)
    		   ->setReturnType(Model\User::class)
    		   ->execute();
    	$restoredUser = $this->getCurrentUser();
    	$this->assertEquals($user->getGivenName(), $restoredUser->getGivenName());
    }

    public function getCurrentUser()
    {
    	$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;

    	return $client->createRequest("GET", "/me")
    				      ->setReturnType(Model\User::class)
    				      ->execute();
    }
}