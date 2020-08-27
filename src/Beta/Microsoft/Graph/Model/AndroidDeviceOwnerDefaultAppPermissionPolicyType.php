<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerDefaultAppPermissionPolicyType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* AndroidDeviceOwnerDefaultAppPermissionPolicyType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerDefaultAppPermissionPolicyType extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerDefaultAppPermissionPolicyType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const PROMPT = "prompt";
    const AUTO_GRANT = "autoGrant";
    const AUTO_DENY = "autoDeny";
}