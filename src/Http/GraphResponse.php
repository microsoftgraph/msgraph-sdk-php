<?php 
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  
* Licensed under the MIT License.  See License in the project root 
* for license information.
* 
* HttpResponse File
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

/**
 * Class GraphResponse
 *
 * @category Library
 * @package  Microsoft.Graph
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://graph.microsoft.io/
 */
class GraphResponse
{
    /**
    * The body of the response
    *
    * @var string
    */
    private $_body;
    /**
    * The body of the response, 
    * decoded into an array
    *
    * @var array(string)
    */
    private $_decodedBody;
    /**
    * The headers of the response
    *
    * @var array(string)
    */
    private $_headers;
    /**
    * The status code of the response
    *
    * @var string
    */
    private $_httpStatusCode;

    /**
    * Creates a new Graph HTTP response entity
    *
    * @param object $request        The request
    * @param string $body           The body of the response
    * @param string $httpStatusCode The returned status code
    * @param array  $headers        The returned headers
    */
    public function __construct($request, $body = null, $httpStatusCode = null, $headers = array())
    {
        $this->_request = $request;
        $this->_body = $body;
        $this->_httpStatusCode = $httpStatusCode;
        $this->_headers = $headers;
        $this->_decodedBody = $this->_decodeBody();
    }

    /**
    * Decode the JSON response into an array
    *
    * @return array The decoded response
    */
    private function _decodeBody()
    {
        $decodedBody = json_decode($this->_body, true);
        if ($decodedBody === null) {
            $decodedBody = array();
        }
        return $decodedBody;
    }

    /**
    * Get the decoded body of the HTTP response
    *
    * @return array The decoded body
    */
    public function getBody()
    {
        return $this->_decodedBody;
    }

    /**
    * Get the undecoded body of the HTTP response
    *
    * @return array The undecoded body
    */
    public function getRawBody()
    {
        return $this->_body;
    }

    /**
    * Get the status of the HTTP response
    *
    * @return string The HTTP status
    */
    public function getStatus()
    {
        return $this->_httpStatusCode;
    }

    /**
    * Get the headers of the response
    *
    * @return array The response headers
    */
    public function getHeaders()
    {
        return $this->_headers;
    }

    /**
    * Converts the response JSON object to a Graph SDK object
    *
    * @param mixed $returnType The type to convert the object(s) to
    *
    * @return mixed object or array of objects of type $returnType
    */
    public function getResponseAsObject($returnType)
    {
        $class = $returnType;
        $result = $this->getBody();

        //If more than one object is returned
        if (array_key_exists('value', $result)) {
            $objArray = array();
            foreach ($result['value'] as $obj) {
                $objArray[] = new $class($obj);
            }
            return $objArray;
        } else {
            return new $class($result);
        }
    }

    /**
    * Gets the skip token of a response object from OData
    *
    * @return string skip token, if provided
    */
    public function getSkipToken()
    {
        if (array_key_exists("@odata.nextLink", $this->getBody())) {
            $nextLink = $this->getBody()['@odata.nextLink'];
            $url = explode("?", $nextLink)[1];
            $url = explode("skiptoken=", $url);
            if (count($url) > 1) {
                return $url[1];
            }
            return null;
        }
        return null;
    }
}