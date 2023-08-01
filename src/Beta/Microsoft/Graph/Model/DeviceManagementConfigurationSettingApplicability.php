<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingApplicability File
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
* DeviceManagementConfigurationSettingApplicability class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingApplicability extends Entity
{
    /**
    * Gets the description
    * description of the setting
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * description of the setting
    *
    * @param string $val The value of the description
    *
    * @return DeviceManagementConfigurationSettingApplicability
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the deviceMode
    * Device Mode that setting can be applied on. Possible values are: none, kiosk.
    *
    * @return DeviceManagementConfigurationDeviceMode|null The deviceMode
    */
    public function getDeviceMode()
    {
        if (array_key_exists("deviceMode", $this->_propDict)) {
            if (is_a($this->_propDict["deviceMode"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationDeviceMode") || is_null($this->_propDict["deviceMode"])) {
                return $this->_propDict["deviceMode"];
            } else {
                $this->_propDict["deviceMode"] = new DeviceManagementConfigurationDeviceMode($this->_propDict["deviceMode"]);
                return $this->_propDict["deviceMode"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceMode
    * Device Mode that setting can be applied on. Possible values are: none, kiosk.
    *
    * @param DeviceManagementConfigurationDeviceMode $val The value to assign to the deviceMode
    *
    * @return DeviceManagementConfigurationSettingApplicability The DeviceManagementConfigurationSettingApplicability
    */
    public function setDeviceMode($val)
    {
        $this->_propDict["deviceMode"] = $val;
         return $this;
    }

    /**
    * Gets the platform
    * Platform setting can be applied on. Posible values are: none, android, androidEnterprise, iOs, macOs, windows10X, windows10, aosp, and linux. Possible values are: none, android, iOS, macOS, windows10X, windows10, linux, unknownFutureValue.
    *
    * @return DeviceManagementConfigurationPlatforms|null The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationPlatforms") || is_null($this->_propDict["platform"])) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new DeviceManagementConfigurationPlatforms($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }

    /**
    * Sets the platform
    * Platform setting can be applied on. Posible values are: none, android, androidEnterprise, iOs, macOs, windows10X, windows10, aosp, and linux. Possible values are: none, android, iOS, macOS, windows10X, windows10, linux, unknownFutureValue.
    *
    * @param DeviceManagementConfigurationPlatforms $val The value to assign to the platform
    *
    * @return DeviceManagementConfigurationSettingApplicability The DeviceManagementConfigurationSettingApplicability
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
         return $this;
    }

    /**
    * Gets the technologies
    * Which technology channels this setting can be deployed through. Posible values are: none, mdm, configManager, intuneManagementExtension, thirdParty, documentGateway, appleRemoteManagement, microsoftSense, exchangeOnline, edgeMam, linuxMdm, extensibility, enrollment, endpointPrivilegeManagement. Possible values are: none, mdm, windows10XManagement, configManager, appleRemoteManagement, microsoftSense, exchangeOnline, mobileApplicationManagement, linuxMdm, enrollment, endpointPrivilegeManagement, unknownFutureValue.
    *
    * @return DeviceManagementConfigurationTechnologies|null The technologies
    */
    public function getTechnologies()
    {
        if (array_key_exists("technologies", $this->_propDict)) {
            if (is_a($this->_propDict["technologies"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationTechnologies") || is_null($this->_propDict["technologies"])) {
                return $this->_propDict["technologies"];
            } else {
                $this->_propDict["technologies"] = new DeviceManagementConfigurationTechnologies($this->_propDict["technologies"]);
                return $this->_propDict["technologies"];
            }
        }
        return null;
    }

    /**
    * Sets the technologies
    * Which technology channels this setting can be deployed through. Posible values are: none, mdm, configManager, intuneManagementExtension, thirdParty, documentGateway, appleRemoteManagement, microsoftSense, exchangeOnline, edgeMam, linuxMdm, extensibility, enrollment, endpointPrivilegeManagement. Possible values are: none, mdm, windows10XManagement, configManager, appleRemoteManagement, microsoftSense, exchangeOnline, mobileApplicationManagement, linuxMdm, enrollment, endpointPrivilegeManagement, unknownFutureValue.
    *
    * @param DeviceManagementConfigurationTechnologies $val The value to assign to the technologies
    *
    * @return DeviceManagementConfigurationSettingApplicability The DeviceManagementConfigurationSettingApplicability
    */
    public function setTechnologies($val)
    {
        $this->_propDict["technologies"] = $val;
         return $this;
    }
}
