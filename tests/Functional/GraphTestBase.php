<?php
namespace Microsoft\Graph\Test;

class GraphTestBase
{
	private $clientId;
	private $username;
	private $password;
	private $contentType = "application/x-www-form-urlencoded";
	private $grantType = "password";
	private $endpoint = "https://login.microsoftonline.com/common/oauth2/token";
	private $resource = "https%3A%2F%2Fgraph.microsoft.com%2F";
	private $accessToken;
	protected $graphClient;

    public function __construct()
    {
        $clientId = TestConstants::CLIENT_ID;
        $username = TestConstants::USERNAME;
        $password = TestConstants::PASSWORD;
    }

    public function GetAuthenticatedClient()
    {

    }

    private function getAccessToken()
    {

    }
}