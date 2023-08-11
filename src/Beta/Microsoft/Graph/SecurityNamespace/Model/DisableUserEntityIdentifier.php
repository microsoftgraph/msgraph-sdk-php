<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DisableUserEntityIdentifier File
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
* DisableUserEntityIdentifier class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DisableUserEntityIdentifier extends Enum
{
    /**
    * The Enum DisableUserEntityIdentifier
    */
    const ACCOUNT_SID = "accountSid";
    const INITIATING_PROCESS_ACCOUNT_SID = "initiatingProcessAccountSid";
    const REQUEST_ACCOUNT_SID = "requestAccountSid";
    const ON_PREM_SID = "onPremSid";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
