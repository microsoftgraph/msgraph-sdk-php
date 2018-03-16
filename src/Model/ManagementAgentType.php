<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementAgentType File
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
* ManagementAgentType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ManagementAgentType extends Enum
{
    /**
    * The Enum ManagementAgentType
    */
    const EAS = "eas";
    const MDM = "mdm";
    const EAS_MDM = "easMdm";
    const INTUNE_CLIENT = "intuneClient";
    const EAS_INTUNE_CLIENT = "easIntuneClient";
    const CONFIGURATION_MANAGER_CLIENT = "configurationManagerClient";
    const CONFIGURATION_MANAGER_CLIENT_MDM = "configurationManagerClientMdm";
    const CONFIGURATION_MANAGER_CLIENT_MDM_EAS = "configurationManagerClientMdmEas";
    const UNKNOWN = "unknown";
    const JAMF = "jamf";
    const GOOGLE_CLOUD_DEVICE_POLICY_CONTROLLER = "googleCloudDevicePolicyController";
}