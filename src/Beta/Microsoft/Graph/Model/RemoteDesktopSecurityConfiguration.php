<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RemoteDesktopSecurityConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* RemoteDesktopSecurityConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RemoteDesktopSecurityConfiguration extends Entity
{
    /**
    * Gets the isRemoteDesktopProtocolEnabled
    * Determines if Microsoft Entra ID RDS authentication protocol for RDP is enabled.
    *
    * @return bool|null The isRemoteDesktopProtocolEnabled
    */
    public function getIsRemoteDesktopProtocolEnabled()
    {
        if (array_key_exists("isRemoteDesktopProtocolEnabled", $this->_propDict)) {
            return $this->_propDict["isRemoteDesktopProtocolEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRemoteDesktopProtocolEnabled
    * Determines if Microsoft Entra ID RDS authentication protocol for RDP is enabled.
    *
    * @param bool $val The isRemoteDesktopProtocolEnabled
    *
    * @return RemoteDesktopSecurityConfiguration
    */
    public function setIsRemoteDesktopProtocolEnabled($val)
    {
        $this->_propDict["isRemoteDesktopProtocolEnabled"] = boolval($val);
        return $this;
    }


     /**
     * Gets the targetDeviceGroups
    * The collection of target device groups that are associated with the RDS security configuration that will be enabled for SSO when a client connects to the target device over RDP using the new Microsoft Entra ID RDS authentication protocol.
     *
     * @return array|null The targetDeviceGroups
     */
    public function getTargetDeviceGroups()
    {
        if (array_key_exists("targetDeviceGroups", $this->_propDict)) {
           return $this->_propDict["targetDeviceGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetDeviceGroups
    * The collection of target device groups that are associated with the RDS security configuration that will be enabled for SSO when a client connects to the target device over RDP using the new Microsoft Entra ID RDS authentication protocol.
    *
    * @param TargetDeviceGroup[] $val The targetDeviceGroups
    *
    * @return RemoteDesktopSecurityConfiguration
    */
    public function setTargetDeviceGroups($val)
    {
        $this->_propDict["targetDeviceGroups"] = $val;
        return $this;
    }

}
