<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementExchangeAccessStateReason File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* DeviceManagementExchangeAccessStateReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementExchangeAccessStateReason extends Enum
{
    /**
    * The Enum DeviceManagementExchangeAccessStateReason
    */
    const NONE = "none";
    const UNKNOWN = "unknown";
    const EXCHANGE_GLOBAL_RULE = "exchangeGlobalRule";
    const EXCHANGE_INDIVIDUAL_RULE = "exchangeIndividualRule";
    const EXCHANGE_DEVICE_RULE = "exchangeDeviceRule";
    const EXCHANGE_UPGRADE = "exchangeUpgrade";
    const EXCHANGE_MAILBOX_POLICY = "exchangeMailboxPolicy";
    const OTHER = "other";
    const COMPLIANT = "compliant";
    const NOT_COMPLIANT = "notCompliant";
    const NOT_ENROLLED = "notEnrolled";
    const UNKNOWN_LOCATION = "unknownLocation";
    const MFA_REQUIRED = "mfaRequired";
    const AZURE_AD_BLOCK_DUE_TO_ACCESS_POLICY = "azureADBlockDueToAccessPolicy";
    const COMPROMISED_PASSWORD = "compromisedPassword";
    const DEVICE_NOT_KNOWN_WITH_MANAGED_APP = "deviceNotKnownWithManagedApp";
}