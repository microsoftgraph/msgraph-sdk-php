<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleAssignmentScopeType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* RoleAssignmentScopeType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RoleAssignmentScopeType extends Enum
{
    /**
    * The Enum RoleAssignmentScopeType
    */
    const RESOURCE_SCOPE = "resourceScope";
    const ALL_DEVICES = "allDevices";
    const ALL_LICENSED_USERS = "allLicensedUsers";
    const ALL_DEVICES_AND_LICENSED_USERS = "allDevicesAndLicensedUsers";
}