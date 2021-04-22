<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.
* Licensed under the MIT License.  See License in the project root
* for license information.
*
* ExceptionWrapper File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/

namespace Microsoft\Graph\Core;

use Microsoft\Graph\Exception\GraphRequestException;
use Microsoft\Graph\Exception\GraphServerException;

/**
 * Class ExceptionWrapper
 *
 * @category Library
 * @package  Microsoft.Graph
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://graph.microsoft.io/
 */
class ExceptionWrapper
{
    /**
     * Wrap Guzzle's ClientException which is thrown on 4xx response while http_errors=true
     * Adds full response body to exception message
     *
     * @param ClientException $ex
     * @return GraphRequestException
     */
    public static function wrapGuzzleClientException(\GuzzleHttp\Exception\ClientException $ex)
    {
        if ($ex->getResponse()) {
            $errMsg = "Received {$ex->getResponse()->getStatusCode()} for call to {$ex->getRequest()->getUri()}\nAPI response: {$ex->getResponse()->getBody()->getContents()}";
        } else {
            $errMsg = $ex->getMessage();
        }
        return new GraphRequestException($errMsg, $ex);
    }

    /**
     * Wrap Guzzle ServerException thrown on 5xx response while http_errors=true
     * Adds response body to the exception message.
     *
     * @param ServerException $ex
     * @return GraphServerException containing HTTP response from Graph API
     * 
     */
    public static function wrapGuzzleServerException(\GuzzleHttp\Exception\ServerException $ex)
    {
        if ($ex->getResponse()) {
            $errMsg = "Received {$ex->getResponse()->getStatusCode()} for call to {$ex->getRequest()->getUri()}\nAPI response: {$ex->getResponse()->getBody()->getContents()}";
        } else {
            $errMsg = $ex->getMessage();
        }
        return new GraphServerException($errMsg, $ex);
    }
} 