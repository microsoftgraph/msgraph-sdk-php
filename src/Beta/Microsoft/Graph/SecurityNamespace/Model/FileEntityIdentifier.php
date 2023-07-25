<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileEntityIdentifier File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* FileEntityIdentifier class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileEntityIdentifier extends Enum
{
    /**
    * The Enum FileEntityIdentifier
    */
    const SHA1 = "sha1";
    const INITIATING_PROCESS_SHA1 = "initiatingProcessSHA1";
    const SHA256 = "sha256";
    const INITIATING_PROCESS_SHA256 = "initiatingProcessSHA256";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
