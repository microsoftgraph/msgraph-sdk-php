<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSubscriptions File
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
* DeviceManagementSubscriptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
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