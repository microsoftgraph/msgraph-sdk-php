<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WhoisDomainStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* WhoisDomainStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WhoisDomainStatus extends Enum
{
    /**
    * The Enum WhoisDomainStatus
    */
    const CLIENT_DELETE_PROHIBITED = "clientDeleteProhibited";
    const CLIENT_HOLD = "clientHold";
    const CLIENT_RENEW_PROHIBITED = "clientRenewProhibited";
    const CLIENT_TRANSFER_PROHIBITED = "clientTransferProhibited";
    const CLIENT_UPDATE_PROHIBITED = "clientUpdateProhibited";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
