<?php

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Microsoft\Graph\Core\ExceptionWrapper;
use PHPUnit\Framework\TestCase;

class ExceptionWrapperTest extends TestCase
{
    public function testWrapGuzzleClientExceptionReturnsClientException()
    {
        $responseBody = json_encode(array('body' => 'content'));
        $ex = new \GuzzleHttp\Exception\ClientException("Error: API returned 400", new Request("GET", "/endpoint"), new Response(400, [], $responseBody));
        $graphException = ExceptionWrapper::wrapGuzzleClientException($ex);
        $this->assertInstanceOf(\GuzzleHttp\Exception\ClientException::class, $graphException);
    }

    public function testWrapGuzzleServerExceptionReturnsServerException()
    {
        $responseBody = json_encode(array('body' => 'content'));
        $ex = new \GuzzleHttp\Exception\ServerException("Error: API returned 500", new Request("GET", "/endpoint"), new Response(500, [], $responseBody));
        $graphException = ExceptionWrapper::wrapGuzzleServerException($ex);
        $this->assertInstanceOf(\GuzzleHttp\Exception\ServerException::class, $graphException);
    }

    public function testWrapGuzzleClientExceptionHasResponseBody()
    {
        $responseBody = json_encode(array('body' => 'content'));
        $ex = new \GuzzleHttp\Exception\ClientException("Error: API returned 400", new Request("GET", "/endpoint"), new Response(400, [], $responseBody));
        $graphException = ExceptionWrapper::wrapGuzzleClientException($ex);
        $this->assertStringContainsString($responseBody, $graphException->getMessage());
    }

    public function testWrapGuzzleServerExceptionHasResponseBody()
    {
        $responseBody = json_encode(array('body' => 'content'));
        $ex = new \GuzzleHttp\Exception\ServerException("Error: API returned 500", new Request("GET", "/endpoint"), new Response(500, [], $responseBody));
        $graphException = ExceptionWrapper::wrapGuzzleServerException($ex);
        $this->assertStringContainsString($responseBody, $graphException->getMessage());
    }
}