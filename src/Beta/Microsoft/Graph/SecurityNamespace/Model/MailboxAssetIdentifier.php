<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailboxAssetIdentifier File
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
* MailboxAssetIdentifier class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailboxAssetIdentifier extends Enum
{
    /**
    * The Enum MailboxAssetIdentifier
    */
    const ACCOUNT_UPN = "accountUpn";
    const FILE_OWNER_UPN = "fileOwnerUpn";
    const INITIATING_PROCESS_ACCOUNT_UPN = "initiatingProcessAccountUpn";
    const LAST_MODIFYING_ACCOUNT_UPN = "lastModifyingAccountUpn";
    const TARGET_ACCOUNT_UPN = "targetAccountUpn";
    const SENDER_FROM_ADDRESS = "senderFromAddress";
    const SENDER_DISPLAY_NAME = "senderDisplayName";
    const RECIPIENT_EMAIL_ADDRESS = "recipientEmailAddress";
    const SENDER_MAIL_FROM_ADDRESS = "senderMailFromAddress";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
