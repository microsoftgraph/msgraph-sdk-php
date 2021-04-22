<?php 
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  
* Licensed under the MIT License.  See License in the project root 
* for license information.
* 
* Exceptions File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/

namespace Microsoft\Graph\Exception;

/**
 * Class GraphServerException
 *
 * @category Library
 * @package  Microsoft.Graph
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://graph.microsoft.io/
 */
class GraphServerException extends \GuzzleHttp\Exception\ServerException
{
    /**
    * Construct a new GraphServerException handler from a Guzzle ServerException
    *
    * @param string $message  The error to send
    * @param \GuzzleHttp\Exception\ServerException $ex The parent Server Exception
    */
    public function __construct(string $message, \GuzzleHttp\Exception\ServerException $ex)
    {
        parent::__construct($message, $ex->getRequest(), $ex->getResponse(), $ex, $ex->getHandlerContext());
    }

    /**
    * Stringify the returned error and message
    *
    * @return string The returned string message
    */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}