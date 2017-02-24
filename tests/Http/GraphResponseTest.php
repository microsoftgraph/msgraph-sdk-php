<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Http\GraphRequest;
use Microsoft\Graph\Http\GraphResponse;
use Microsoft\Graph\Exception\GraphException;
use Microsoft\Graph\Model;

class GraphResponseTest extends TestCase
{
    public $client;
    public $request;
    public $response;
    public $responseBody;

    public function setUp()
    {
        $this->responseBody = array('body' => 'content', 'displayName' => 'Bob Barker');
        $this->collectionBody = array("value" => array(array('displayName' => 'Bob Barker'), array('displayName' => 'Drew Carey')));

        $mock = new GuzzleHttp\Handler\MockHandler([
            new GuzzleHttp\Psr7\Response(200, ['foo' => 'bar'], json_encode($this->responseBody)),
            new GuzzleHttp\Psr7\Response(200, ['foo' => 'bar'], json_encode($this->collectionBody))
        ]);
        $handler = GuzzleHttp\HandlerStack::create($mock);
        $this->client = new GuzzleHttp\Client(['handler' => $handler]);

        $this->request = new GraphRequest("GET", "/endpoint", "token", "baseUrl", "/version");
        $this->response = new GraphResponse($this->request, "{response}", "200", ["foo" => "bar"]);
    }

    public function testGetResponseAsObject()
    {
        $this->request->setReturnType(Model\User::class);
        $response = $this->request->execute($this->client);

        $this->assertInstanceOf(Model\User::class, $response);
        $this->assertEquals($this->responseBody['displayName'], $response->getDisplayName());
    }

    public function testGetResponseAsListOfObjects()
    {
        $this->request->setReturnType(Model\User::class);
        $response = $this->request->execute($this->client);
        $response = $this->request->execute($this->client);

        $this->assertContainsOnlyInstancesOf(Model\User::class, $response);
        $this->assertEquals('Drew Carey', $response[1]->getDisplayName());
        $this->assertEquals(2, count($response));
    }

    public function testGetSkipToken()
    {
        //Temporarily make getSkipToken() public
        $reflectionMethod = new ReflectionMethod('Microsoft\Graph\Http\GraphResponse', 'getSkipToken');
        $reflectionMethod->setAccessible(true);

        $body = json_encode(array('@odata.nextLink' => 'https://url.com/resource?$skiptoken=10'));
        $response = new GraphResponse($this->request, $body);

        $token = $reflectionMethod->invokeArgs($response, array());
        $this->assertEquals('10', $token);
    }

    public function testNoSkipToken()
    {
        //Temporarily make getSkipToken() public
        $reflectionMethod = new ReflectionMethod('Microsoft\Graph\Http\GraphResponse', 'getSkipToken');
        $reflectionMethod->setAccessible(true);

        $body = json_encode(array('@odata.nextLink' => 'https://url.com/resource'));
        $response = new GraphResponse($this->request, $body);

        $token = $reflectionMethod->invokeArgs($response, array());
        $this->assertNull($token);
    }

    public function testDecodeBody()
    {
        //Temporarily make decodeBody() public
        $reflectionMethod = new ReflectionMethod('Microsoft\Graph\Http\GraphResponse', '_decodeBody');
        $reflectionMethod->setAccessible(true);

        $response = new GraphResponse($this->request, json_encode($this->responseBody));
        $decodedBody = $reflectionMethod->invokeArgs($response, array());

        $this->assertEquals($this->responseBody, $decodedBody);
    }

    public function testDecodeEmptyBody()
    {
        //Temporarily make decodeBody() public
        $reflectionMethod = new ReflectionMethod('Microsoft\Graph\Http\GraphResponse', '_decodeBody');
        $reflectionMethod->setAccessible(true);

        $response = new GraphResponse($this->request);
        $decodedBody = $reflectionMethod->invokeArgs($response, array());

        $this->assertEquals(array(), $decodedBody);
    }

    public function testGetHeaders()
    {
        $headers = $this->response->getHeaders();
        $this->assertEquals(["foo" => "bar"], $headers);
    }

    public function testGetBody()
    {
        $response = $this->request->execute($this->client);
        $this->assertInstanceOf(GraphResponse::class, $response);

        $body = $response->getBody();
        $this->assertEquals($this->responseBody, $body);
    }

    public function testGetRawBody()
    {
        $response = $this->request->execute($this->client);

        $body = $response->getRawBody();
        $this->assertEquals(json_encode($this->responseBody), $body);
    }

    public function testGetStatus()
    {
        $response = $this->request->execute($this->client);

        $this->assertEquals('200', $response->getStatus());
    }
}