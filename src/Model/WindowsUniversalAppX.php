<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUniversalAppX File
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

/**
* WindowsUniversalAppX class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsUniversalAppX extends MobileLobApp
{
    /**
    * Gets the applicableArchitectures
    *
    * @return WindowsArchitecture The applicableArchitectures
    */
    public function getApplicableArchitectures()
    {
        if (array_key_exists("applicableArchitectures", $this->_propDict)) {
            if (is_a($this->_propDict["applicableArchitectures"], "Microsoft\Graph\Model\WindowsArchitecture")) {
                return $this->_propDict["applicableArchitectures"];
            } else {
                $this->_propDict["applicableArchitectures"] = new WindowsArchitecture($this->_propDict["applicableArchitectures"]);
                return $this->_propDict["applicableArchitectures"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicableArchitectures
    *
    * @param WindowsArchitecture $val The applicableArchitectures
    *
    * @return WindowsUniversalAppX
    */
    public function setApplicableArchitectures($val)
    {
        $this->_propDict["applicableArchitectures"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicableDeviceTypes
    *
    * @return WindowsDeviceType The applicableDeviceTypes
    */
    public function getApplicableDeviceTypes()
    {
        if (array_key_exists("applicableDeviceTypes", $this->_propDict)) {
            if (is_a($this->_propDict["applicableDeviceTypes"], "Microsoft\Graph\Model\WindowsDeviceType")) {
                return $this->_propDict["applicableDeviceTypes"];
            } else {
                $this->_propDict["applicableDeviceTypes"] = new WindowsDeviceType($this->_propDict["applicableDeviceTypes"]);
                return $this->_propDict["applicableDeviceTypes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicableDeviceTypes
    *
    * @param WindowsDeviceType $val The applicableDeviceTypes
    *
    * @return WindowsUniversalAppX
    */
    public function setApplicableDeviceTypes($val)
    {
        $this->_propDict["applicableDeviceTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityName
    *
    * @return string The identityName
    */
    public function getIdentityName()
    {
        if (array_key_exists("identityName", $this->_propDict)) {
            return $this->_propDict["identityName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identityName
    *
    * @param string $val The identityName
    *
    * @return WindowsUniversalAppX
    */
    public function setIdentityName($val)
    {
        $this->_propDict["identityName"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityPublisherHash
    *
    * @return string The identityPublisherHash
    */
    public function getIdentityPublisherHash()
    {
        if (array_key_exists("identityPublisherHash", $this->_propDict)) {
            return $this->_propDict["identityPublisherHash"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identityPublisherHash
    *
    * @param string $val The identityPublisherHash
    *
    * @return WindowsUniversalAppX
    */
    public function setIdentityPublisherHash($val)
    {
        $this->_propDict["identityPublisherHash"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityResourceIdentifier
    *
    * @return string The identityResourceIdentifier
    */
    public function getIdentityResourceIdentifier()
    {
        if (array_key_exists("identityResourceIdentifier", $this->_propDict)) {
            return $this->_propDict["identityResourceIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identityResourceIdentifier
    *
    * @param string $val The identityResourceIdentifier
    *
    * @return WindowsUniversalAppX
    */
    public function setIdentityResourceIdentifier($val)
    {
        $this->_propDict["identityResourceIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the isBundle
    *
    * @return bool The isBundle
    */
    public function getIsBundle()
    {
        if (array_key_exists("isBundle", $this->_propDict)) {
            return $this->_propDict["isBundle"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isBundle
    *
    * @param bool $val The isBundle
    *
    * @return WindowsUniversalAppX
    */
    public function setIsBundle($val)
    {
        $this->_propDict["isBundle"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the minimumSupportedOperatingSystem
    *
    * @return WindowsMinimumOperatingSystem The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "Microsoft\Graph\Model\WindowsMinimumOperatingSystem")) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new WindowsMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the minimumSupportedOperatingSystem
    *
    * @param WindowsMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return WindowsUniversalAppX
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityVersion
    *
    * @return string The identityVersion
    */
    public function getIdentityVersion()
    {
        if (array_key_exists("identityVersion", $this->_propDict)) {
            return $this->_propDict["identityVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identityVersion
    *
    * @param string $val The identityVersion
    *
    * @return WindowsUniversalAppX
    */
    public function setIdentityVersion($val)
    {
        $this->_propDict["identityVersion"] = $val;
        return $this;
    }
    
}