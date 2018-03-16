<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementPartnerTenantState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* DeviceManagementPartnerTenantState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementPartnerTenantState extends Enum
{
    /**
    * The Enum DeviceManagementPartnerTenantState
    */
    const UNKNOWN = "unknown";
    const UNAVAILABLE = "unavailable";
    const ENABLED = "enabled";
    const TERMINATED = "terminated";
    const REJECTED = "rejected";
    const UNRESPONSIVE = "unresponsive";
}