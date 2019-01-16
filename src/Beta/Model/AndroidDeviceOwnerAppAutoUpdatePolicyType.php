<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerAppAutoUpdatePolicyType File
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
* AndroidDeviceOwnerAppAutoUpdatePolicyType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidDeviceOwnerAppAutoUpdatePolicyType extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerAppAutoUpdatePolicyType
    */
    const NOT_CONFIGURED = "notConfigured";
    const USER_CHOICE = "userChoice";
    const NEVER = "never";
    const WI_FI_ONLY = "wiFiOnly";
    const ALWAYS = "always";
}