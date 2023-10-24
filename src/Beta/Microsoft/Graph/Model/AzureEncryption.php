<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureEncryption File
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
* AzureEncryption class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureEncryption extends Enum
{
    /**
    * The Enum AzureEncryption
    */
    const MICROSOFT_STORAGE = "microsoftStorage";
    const MICROSOFT_KEY_VAULT = "microsoftKeyVault";
    const CUSTOMER = "customer";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
