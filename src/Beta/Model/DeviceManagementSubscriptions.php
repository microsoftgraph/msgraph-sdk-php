<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSubscriptions File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* DeviceManagementSubscriptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementSubscriptions extends Enum
{
    /**
    * The Enum DeviceManagementSubscriptions
    */
    const NONE = "none";
    const INTUNE = "intune";
    const OFFICE365 = "office365";
    const INTUNE_PREMIUM = "intunePremium";
    const INTUNE_EDU = "intuneEDU";
    const INTUNE_SMB = "intuneSMB";
}