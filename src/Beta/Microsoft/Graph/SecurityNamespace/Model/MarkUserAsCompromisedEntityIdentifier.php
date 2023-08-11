<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MarkUserAsCompromisedEntityIdentifier File
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
* MarkUserAsCompromisedEntityIdentifier class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MarkUserAsCompromisedEntityIdentifier extends Enum
{
    /**
    * The Enum MarkUserAsCompromisedEntityIdentifier
    */
    const ACCOUNT_OBJECT_ID = "accountObjectId";
    const INITIATING_PROCESS_ACCOUNT_OBJECT_ID = "initiatingProcessAccountObjectId";
    const SERVICE_PRINCIPAL_ID = "servicePrincipalId";
    const RECIPIENT_OBJECT_ID = "recipientObjectId";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
