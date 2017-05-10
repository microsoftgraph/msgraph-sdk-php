<?php 
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  
* Licensed under the MIT License.  See License in the project root 
* for license information.
* 
* GraphRequest File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/

namespace Microsoft\Graph\Http;

use GuzzleHttp\Client;
use Microsoft\Graph\Core\GraphConstants;
use Microsoft\Graph\Exception\GraphException;

/**
 * Class GraphRequest
 *
 * @category Library
 * @package  Microsoft.Graph
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://graph.microsoft.io/
 */
class GraphRequest
{
    /**
    * A valid access token
    *
    * @var string
    */
    protected $accessToken;
    /**
    * The API version to use ("v1.0", "beta")
    *
    * @var string
    */
    protected $apiVersion;
    /**
    * The base url to call
    *
    * @var string
    */
    protected $baseUrl;
    /**
    * The endpoint to call
    *
    * @var string
    */
    protected $endpoint;
    /**
    * The Guzzle client used to make the HTTP request
    *
    * @var Client
    */
    protected $guzzleClient;
    /**
    * An array of headers to send with the request
    *
    * @var array(string => string)
    */
    protected $headers;
    /**
    * The body of the request (optional)
    *
    * @var string
    */
    protected $requestBody;
    /**
    * The type of request to make ("GET", "POST", etc.)
    *
    * @var object
    */
    protected $requestType;
    /**
    * True if the response should be returned as
    * a stream
    *
    * @var bool
    */
    protected $returnsStream;
    /**
    * The return type to cast the response as
    *
    * @var object
    */
    protected $returnType;
    /**
    * The timeout, in seconds
    *
    * @var string
    */
    protected $timeout;

    /**
    * Constructs a new Graph Request object
    *
    * @param string $requestType The HTTP method to use, e.g. "GET" or "POST"
    * @param string $endpoint    The Graph endpoint to call
    * @param string $accessToken A valid access token to validate the Graph call
    * @param string $baseUrl     The base URL to call
    * @param string $apiVersion  The API version to use
     *
     * @throws GraphException when no access token is provided
    */ 
    public function __construct($requestType, $endpoint, $accessToken, $baseUrl, $apiVersion)
    {
        $this->requestType = $requestType;
        $this->endpoint = $endpoint;
        $this->accessToken = $accessToken;

        if (!$this->accessToken) {
            throw new GraphException(GraphConstants::NO_ACCESS_TOKEN);
        }

        $this->baseUrl = $baseUrl;
        $this->apiVersion = $apiVersion;
        $this->timeout = 0;
        $this->headers = $this->_getDefaultHeaders();
    }

    /**
    * Sets the return type of the response object
    *
    * @param mixed $returnClass The object class to use
    *
    * @return GraphRequest object
    */
    public function setReturnType($returnClass)
    {
        $this->returnType = $returnClass;
        if ($this->returnType == "GuzzleHttp\Psr7\Stream") {
            $this->returnsStream  = true;
        } else {
            $this->returnsStream = false;
        }
        return $this;
    }

    /**
    * Adds custom headers to the request
    *
    * @param array $headers An array of custom headers
    *
    * @return GraphRequest object
    */
    public function addHeaders($headers)
    {
        $this->headers = array_merge($this->headers, $headers);
        return $this;
    }

    /**
    * Get the request headers
    *
    * @return array of headers
    */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
    * Attach a body to the request. Will JSON encode 
    * any Microsoft\Graph\Model objects as well as arrays
    *
    * @param mixed $obj The object to include in the request
    *
    * @return GraphRequest object
    */
    public function attachBody($obj)
    {
        // Attach streams & JSON automatically
        if (is_string($obj) || is_a($obj, 'GuzzleHttp\\Psr7\\Stream')) {
            $this->requestBody = $obj;
        } 
        // By default, JSON-encode
        else {
            $this->requestBody = json_encode($obj);
        }
        return $this;
    }

    /**
    * Get the body of the request
    *
    * @return mixed request body of any type
    */
    public function getBody()
    {
        return $this->requestBody;
    }

    /**
    * Sets the timeout limit of the cURL request
    *
    * @param string $timeout The timeout in ms
    * 
    * @return GraphRequest object
    */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
    * Executes the HTTP request using Guzzle
    *
    * @param mixed $client The client to use in the request
    *
     * @throws GraphException if response is invalid
     *
    * @return mixed object or array of objects
    *         of class $returnType
    */
    public function execute($client = null)
    {
        if (is_null($client)) {
            $client = $this->createGuzzleClient();
        }

        $result = $client->request(
            $this->requestType, 
            $this->_getRequestUrl(), 
            [
                'body' => $this->requestBody,
                'stream' =>  $this->returnsStream,
                'timeout' => $this->timeout
            ]
        );

        // Wrap response in GraphResponse layer
        $response = new GraphResponse(
            $this, 
            $result->getBody(), 
            $result->getStatusCode(), 
            $result->getHeaders()
        );

        // If no return type is specified, return GraphResponse
        $returnObj = $response;

        if ($this->returnType) {
            $returnObj = $response->getResponseAsObject($this->returnType);
        }
        return $returnObj; 
    }

    /**
    * Executes the HTTP request asynchronously using Guzzle
    *
    * @param mixed $client The client to use in the request
    *
    * @return mixed object or array of objects
    *         of class $returnType
    */
    public function executeAsync($client = null)
    {
        if (is_null($client)) {
            $client = $this->createGuzzleClient();
        }

        $promise = $client->requestAsync(
            $this->requestType,
            $this->_getRequestUrl(),
            [
                'body' => $this->requestBody,
                'stream' => $this->returnsStream,
                'timeout' => $this->timeout
            ]
        )->then(
            // On success, return the result/response
            function ($result) {
                $response = new GraphResponse(
                    $this, 
                    $result->getBody(), 
                    $result->getStatusCode(), 
                    $result->getHeaders()
                );
                $returnObject = $response;
                if ($this->returnType) {
                    $returnObject = $response->getResponseAsObject(
                        $this->returnType
                    );
                }
                return $returnObject;
            },
            // On fail, log the error and return null
            function ($reason) {
                trigger_error("Async call failed: " . $reason->getMessage());
                return null;
            }
        );
        return $promise;
    }

    /**
    * Download a file from OneDrive to a given location
    *
    * @param string $path   The path to download the file to
    * @param mixed  $client The client to use in the request
    *
     * @throws GraphException if file path is invalid
     *
    * @return null
    */
    public function download($path, $client = null)
    {
        if (is_null($client)) {
            $client = $this->createGuzzleClient();
        }
        try {
            if (file_exists($path) && is_writeable($path)) {
                $file = fopen($path, 'w');

                $client->request(
                    $this->requestType, 
                    $this->_getRequestUrl(), 
                    [
                        'body' => $this->requestBody,
                        'sink' => $file
                    ]
                );
                fclose($file);
            } else {
                throw new GraphException(GraphConstants::INVALID_FILE);
            }
            
        } catch(GraphException $e) {
            throw new GraphException(GraphConstants::INVALID_FILE);
        }
        return null;
    }

    /**
    * Upload a file to OneDrive from a given location
    *
    * @param string $path   The path of the file to upload
    * @param mixed  $client The client to use in the request
    *
     * @throws GraphException if file is invalid
     *
    * @return mixed DriveItem or array of DriveItems
    */
    public function upload($path, $client = null)
    {
        if (is_null($client)) {
            $client = $this->createGuzzleClient();
        }
        try {
            if (file_exists($path) && is_readable($path)) {
                $file = fopen($path, 'r');
                $stream = \GuzzleHttp\Psr7\stream_for($file);
                $this->requestBody = $stream;
                return $this->execute($client);
            } else {
                throw new GraphException(GraphConstants::INVALID_FILE);
            }
        } catch(GraphException $e) {
            throw new GraphException(GraphConstants::INVALID_FILE);
        }
    }

    /**
    * Get a list of headers for the request
    *
    * @return array The headers for the request
    */
    private function _getDefaultHeaders()
    {
        $headers = [
            'Host' => $this->baseUrl,
            'Content-Type' => 'application/json',
            'SdkVersion' => 'Graph-php-' . GraphConstants::SDK_VERSION,
            'Authorization' => 'Bearer ' . $this->accessToken
        ];
        return $headers;
    }

    /**
    * Get the concatenated request URL
    *
    * @return string request URL
    */
    private function _getRequestUrl()
    {
        //Send request with opaque URL
        if (stripos($this->endpoint, "http") !== FALSE) {
            return $this->endpoint;
        }
        return $this->apiVersion . $this->endpoint;
    }

    /**
    * Checks whether the endpoint currently contains query
    * parameters and returns the relevant concatenator for 
    * the new query string
    *
    * @return string "?" or "&"
    */
    protected function getConcatenator()
    {
        if (stripos($this->endpoint, "?") === false) {
            return "?";
        }
        return "&";
    }

    /**
    * Create a new Guzzle client
    * To allow for user flexibility, the 
    * client is not reused. This allows the user
    * to set and change headers on a per-request
    * basis
    *
    * @return \GuzzleHttp\Client The new client
    */
    protected function createGuzzleClient()
    {
        $client = new Client(
            [
                'base_uri' => $this->baseUrl,
                'headers' => $this->headers
            ]
        );
        return $client;
    }
}