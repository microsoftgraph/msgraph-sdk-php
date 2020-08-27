<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10DeviceFirmwareConfigurationInterface File
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
* Windows10DeviceFirmwareConfigurationInterface class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10DeviceFirmwareConfigurationInterface extends DeviceConfiguration
{
    /**
    * Gets the changeUefiSettingsPermission
    * Defines the permission level granted to users to change UEFI settings.
    *
    * @return ChangeUefiSettingsPermission The changeUefiSettingsPermission
    */
    public function getChangeUefiSettingsPermission()
    {
        if (array_key_exists("changeUefiSettingsPermission", $this->_propDict)) {
            if (is_a($this->_propDict["changeUefiSettingsPermission"], "Beta\Microsoft\Graph\Model\ChangeUefiSettingsPermission")) {
                return $this->_propDict["changeUefiSettingsPermission"];
            } else {
                $this->_propDict["changeUefiSettingsPermission"] = new ChangeUefiSettingsPermission($this->_propDict["changeUefiSettingsPermission"]);
                return $this->_propDict["changeUefiSettingsPermission"];
            }
        }
        return null;
    }
    
    /**
    * Sets the changeUefiSettingsPermission
    * Defines the permission level granted to users to change UEFI settings.
    *
    * @param ChangeUefiSettingsPermission $val The changeUefiSettingsPermission
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setChangeUefiSettingsPermission($val)
    {
        $this->_propDict["changeUefiSettingsPermission"] = $val;
        return $this;
    }
    
    /**
    * Gets the virtualizationOfCpuAndIO
    * Defines whether CPU and IO virtualization is enabled.
    *
    * @return Enablement The virtualizationOfCpuAndIO
    */
    public function getVirtualizationOfCpuAndIO()
    {
        if (array_key_exists("virtualizationOfCpuAndIO", $this->_propDict)) {
            if (is_a($this->_propDict["virtualizationOfCpuAndIO"], "Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["virtualizationOfCpuAndIO"];
            } else {
                $this->_propDict["virtualizationOfCpuAndIO"] = new Enablement($this->_propDict["virtualizationOfCpuAndIO"]);
                return $this->_propDict["virtualizationOfCpuAndIO"];
            }
        }
        return null;
    }
    
    /**
    * Sets the virtualizationOfCpuAndIO
    * Defines whether CPU and IO virtualization is enabled.
    *
    * @param Enablement $val The virtualizationOfCpuAndIO
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setVirtualizationOfCpuAndIO($val)
    {
        $this->_propDict["virtualizationOfCpuAndIO"] = $val;
        return $this;
    }
    
    /**
    * Gets the cameras
    * Defines whether built-in cameras are enabled.
    *
    * @return Enablement The cameras
    */
    public function getCameras()
    {
        if (array_key_exists("cameras", $this->_propDict)) {
            if (is_a($this->_propDict["cameras"], "Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["cameras"];
            } else {
                $this->_propDict["cameras"] = new Enablement($this->_propDict["cameras"]);
                return $this->_propDict["cameras"];
            }
        }
        return null;
    }
    
    /**
    * Sets the cameras
    * Defines whether built-in cameras are enabled.
    *
    * @param Enablement $val The cameras
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setCameras($val)
    {
        $this->_propDict["cameras"] = $val;
        return $this;
    }
    
    /**
    * Gets the microphonesAndSpeakers
    * Defines whether built-in microphones or speakers are enabled.
    *
    * @return Enablement The microphonesAndSpeakers
    */
    public function getMicrophonesAndSpeakers()
    {
        if (array_key_exists("microphonesAndSpeakers", $this->_propDict)) {
            if (is_a($this->_propDict["microphonesAndSpeakers"], "Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["microphonesAndSpeakers"];
            } else {
                $this->_propDict["microphonesAndSpeakers"] = new Enablement($this->_propDict["microphonesAndSpeakers"]);
                return $this->_propDict["microphonesAndSpeakers"];
            }
        }
        return null;
    }
    
    /**
    * Sets the microphonesAndSpeakers
    * Defines whether built-in microphones or speakers are enabled.
    *
    * @param Enablement $val The microphonesAndSpeakers
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setMicrophonesAndSpeakers($val)
    {
        $this->_propDict["microphonesAndSpeakers"] = $val;
        return $this;
    }
    
    /**
    * Gets the radios
    * Defines whether built-in radios e.g. WIFI, NFC, Bluetooth, are enabled.
    *
    * @return Enablement The radios
    */
    public function getRadios()
    {
        if (array_key_exists("radios", $this->_propDict)) {
            if (is_a($this->_propDict["radios"], "Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["radios"];
            } else {
                $this->_propDict["radios"] = new Enablement($this->_propDict["radios"]);
                return $this->_propDict["radios"];
            }
        }
        return null;
    }
    
    /**
    * Sets the radios
    * Defines whether built-in radios e.g. WIFI, NFC, Bluetooth, are enabled.
    *
    * @param Enablement $val The radios
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setRadios($val)
    {
        $this->_propDict["radios"] = $val;
        return $this;
    }
    
    /**
    * Gets the bootFromExternalMedia
    * Defines whether a user is allowed to boot from external media.
    *
    * @return Enablement The bootFromExternalMedia
    */
    public function getBootFromExternalMedia()
    {
        if (array_key_exists("bootFromExternalMedia", $this->_propDict)) {
            if (is_a($this->_propDict["bootFromExternalMedia"], "Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["bootFromExternalMedia"];
            } else {
                $this->_propDict["bootFromExternalMedia"] = new Enablement($this->_propDict["bootFromExternalMedia"]);
                return $this->_propDict["bootFromExternalMedia"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bootFromExternalMedia
    * Defines whether a user is allowed to boot from external media.
    *
    * @param Enablement $val The bootFromExternalMedia
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setBootFromExternalMedia($val)
    {
        $this->_propDict["bootFromExternalMedia"] = $val;
        return $this;
    }
    
    /**
    * Gets the bootFromBuiltInNetworkAdapters
    * Defines whether a user is allowed to boot from built-in network adapters.
    *
    * @return Enablement The bootFromBuiltInNetworkAdapters
    */
    public function getBootFromBuiltInNetworkAdapters()
    {
        if (array_key_exists("bootFromBuiltInNetworkAdapters", $this->_propDict)) {
            if (is_a($this->_propDict["bootFromBuiltInNetworkAdapters"], "Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["bootFromBuiltInNetworkAdapters"];
            } else {
                $this->_propDict["bootFromBuiltInNetworkAdapters"] = new Enablement($this->_propDict["bootFromBuiltInNetworkAdapters"]);
                return $this->_propDict["bootFromBuiltInNetworkAdapters"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bootFromBuiltInNetworkAdapters
    * Defines whether a user is allowed to boot from built-in network adapters.
    *
    * @param Enablement $val The bootFromBuiltInNetworkAdapters
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setBootFromBuiltInNetworkAdapters($val)
    {
        $this->_propDict["bootFromBuiltInNetworkAdapters"] = $val;
        return $this;
    }
    
}