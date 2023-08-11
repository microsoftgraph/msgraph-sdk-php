<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserAssetIdentifier File
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
* UserAssetIdentifier class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserAssetIdentifier extends Enum
{
    /**
    * The Enum UserAssetIdentifier
    */
    const ACCOUNT_OBJECT_ID = "accountObjectId";
    const ACCOUNT_SID = "accountSid";
    const ACCOUNT_UPN = "accountUpn";
    const ACCOUNT_NAME = "accountName";
    const ACCOUNT_DOMAIN = "accountDomain";
    const ACCOUNT_ID = "accountId";
    const REQUEST_ACCOUNT_SID = "requestAccountSid";
    const REQUEST_ACCOUNT_NAME = "requestAccountName";
    const REQUEST_ACCOUNT_DOMAIN = "requestAccountDomain";
    const RECIPIENT_OBJECT_ID = "recipientObjectId";
    const PROCESS_ACCOUNT_OBJECT_ID = "processAccountObjectId";
    const INITIATING_ACCOUNT_SID = "initiatingAccountSid";
    const INITIATING_PROCESS_ACCOUNT_UPN = "initiatingProcessAccountUpn";
    const INITIATING_ACCOUNT_NAME = "initiatingAccountName";
    const INITIATING_ACCOUNT_DOMAIN = "initiatingAccountDomain";
    const SERVICE_PRINCIPAL_ID = "servicePrincipalId";
    const SERVICE_PRINCIPAL_NAME = "servicePrincipalName";
    const TARGET_ACCOUNT_UPN = "targetAccountUpn";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
