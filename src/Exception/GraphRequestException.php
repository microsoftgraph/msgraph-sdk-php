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
 * Class GraphRequestException
 *
 * @category Library
 * @package  Microsoft.Graph
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://graph.microsoft.io/
 */
class GraphRequestException extends \GuzzleHttp\Exception\ClientException
{
    /**
    * Construct a new GraphRequestException from it' parent ClientException
    *
    * @param string    $message  The error to send
    * @param \GuzzleHttp\Exception\ClientException  $ex The parent exception
    */
    public function __construct($message, \GuzzleHttp\Exception\ClientException $ex)
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