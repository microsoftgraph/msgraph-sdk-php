<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosStoreAppAssignmentSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* IosStoreAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosStoreAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.iosStoreAppAssignmentSettings");
    }

    /**
    * Gets the uninstallOnDeviceRemoval
    * Whether or not to uninstall the app when device is removed from Intune.
    *
    * @return bool The uninstallOnDeviceRemoval
    */
    public function getUninstallOnDeviceRemoval()
    {
        if (array_key_exists("uninstallOnDeviceRemoval", $this->_propDict)) {
            return $this->_propDict["uninstallOnDeviceRemoval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uninstallOnDeviceRemoval
    * Whether or not to uninstall the app when device is removed from Intune.
    *
    * @param bool $val The value of the uninstallOnDeviceRemoval
    *
    * @return IosStoreAppAssignmentSettings
    */
    public function setUninstallOnDeviceRemoval($val)
    {
        $this->_propDict["uninstallOnDeviceRemoval"] = $val;
        return $this;
    }
    /**
    * Gets the vpnConfigurationId
    * The VPN Configuration Id to apply for this app.
    *
    * @return string The vpnConfigurationId
    */
    public function getVpnConfigurationId()
    {
        if (array_key_exists("vpnConfigurationId", $this->_propDict)) {
            return $this->_propDict["vpnConfigurationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vpnConfigurationId
    * The VPN Configuration Id to apply for this app.
    *
    * @param string $val The value of the vpnConfigurationId
    *
    * @return IosStoreAppAssignmentSettings
    */
    public function setVpnConfigurationId($val)
    {
        $this->_propDict["vpnConfigurationId"] = $val;
        return $this;
    }
}
