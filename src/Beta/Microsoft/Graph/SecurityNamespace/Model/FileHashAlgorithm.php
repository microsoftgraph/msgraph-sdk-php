<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileHashAlgorithm File
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
* FileHashAlgorithm class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileHashAlgorithm extends Enum
{
    /**
    * The Enum FileHashAlgorithm
    */
    const UNKNOWN = "unknown";
    const MD5 = "md5";
    const SHA1 = "sha1";
    const SHA256 = "sha256";
    const SHA256AC = "sha256ac";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
