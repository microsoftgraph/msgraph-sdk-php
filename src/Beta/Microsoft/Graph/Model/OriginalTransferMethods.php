<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OriginalTransferMethods File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* OriginalTransferMethods class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OriginalTransferMethods extends Enum
{
    /**
    * The Enum OriginalTransferMethods
    */
    const NONE = "none";
    const DEVICE_CODE_FLOW = "deviceCodeFlow";
    const AUTHENTICATION_TRANSFER = "authenticationTransfer";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
