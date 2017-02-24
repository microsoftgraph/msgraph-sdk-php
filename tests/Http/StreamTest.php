<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Http\GraphRequest;
use Microsoft\Graph\Exception\GraphException;
use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamFile;
use org\bovigo\vfs\vfsStreamWrapper;
use org\bobigo\vfs\vfsStreamDirectory;

class StreamTest extends TestCase
{
    private $root;
    private $client;
    private $body;
    private $container;

    public function setUp()
    {
        $this->root = vfsStream::setup('testDir');

        $this->body = json_encode(array('body' => 'content'));

        $mock = new GuzzleHttp\Handler\MockHandler([
            new GuzzleHttp\Psr7\Response(200, ['foo' => 'bar'], $this->body)
        ]);

        $this->container = [];
        $history = GuzzleHttp\Middleware::history($this->container);
        $handler = GuzzleHttp\HandlerStack::create($mock);
        $handler->push($history);
        $this->client = new GuzzleHttp\Client(['handler' => $handler]);
    }

    public function testUpload()
    {
        $file = new VfsStreamFile('foo.txt');
        $this->root->addChild($file);
        $file->setContent('data');

        $request = new GraphRequest("GET", "/me", "token", "url", "/v1.0");
        $request->upload($file->url(), $this->client);

        $this->assertEquals($this->container[0]['request']->getBody()->getContents(), $file->getContent());
    }

    public function testInvalidUpload()
    {
        $this->expectException(Microsoft\Graph\Exception\GraphException::class);

        $file = new VfsStreamFile('foo.txt', 0000);
        $this->root->addChild($file);

        $request = new GraphRequest("GET", "/me", "token", "url", "/v1.0");
        $request->upload($file->url(), $this->client);
    }

    public function testDownload()
    {
        $request = new GraphRequest("GET", "/me", "token", "url", "/v1.0");
        $file = new VfsStreamFile('foo.txt');
        $this->root->addChild($file);

        $request->download($file->url(), $this->client);
        $this->assertEquals($this->body, $file->getContent());
    }

    public function testInvalidDownload()
    {
        $this->expectException(Microsoft\Graph\Exception\GraphException::class);

        $file = new VfsStreamFile('foo.txt', 0000);
        $this->root->addChild($file);

        $request = new GraphRequest("GET", "/me", "token", "url", "/v1.0");
        $request->download($file->url(), $this->client);
    }

    public function testSetReturnStream()
    {
        $request = new GraphRequest("GET", "/me", "token", "url", "/v1.0");
        $request->setReturnType('stream');

        $this->assertAttributeEquals(true, 'returnsStream', $request);
    }
}