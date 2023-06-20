<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IkeIntegrity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

use Microsoft\Graph\Core\Enum;

/**
* IkeIntegrity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IkeIntegrity extends Enum
{
    /**
    * The Enum IkeIntegrity
    */
    const SHA256 = "sha256";
    const SHA384 = "sha384";
    const GCM_AES128 = "gcmAes128";
    const GCM_AES256 = "gcmAes256";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
