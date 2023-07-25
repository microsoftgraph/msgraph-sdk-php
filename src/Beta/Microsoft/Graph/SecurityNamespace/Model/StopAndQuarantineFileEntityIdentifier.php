<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StopAndQuarantineFileEntityIdentifier File
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
* StopAndQuarantineFileEntityIdentifier class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StopAndQuarantineFileEntityIdentifier extends Enum
{
    /**
    * The Enum StopAndQuarantineFileEntityIdentifier
    */
    const DEVICE_ID = "deviceId";
    const SHA1 = "sha1";
    const INITIATING_PROCESS_SHA1 = "initiatingProcessSHA1";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
