<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPackageInformation File
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
/**
* WindowsPackageInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsPackageInformation extends Entity
{

    /**
    * Gets the applicableArchitecture
    *
    * @return WindowsArchitecture The applicableArchitecture
    */
    public function getApplicableArchitecture()
    {
        if (array_key_exists("applicableArchitecture", $this->_propDict)) {
            if (is_a($this->_propDict["applicableArchitecture"], "Microsoft\Graph\Beta\Model\WindowsArchitecture")) {
                return $this->_propDict["applicableArchitecture"];
            } else {
                $this->_propDict["applicableArchitecture"] = new WindowsArchitecture($this->_propDict["applicableArchitecture"]);
                return $this->_propDict["applicableArchitecture"];
            }
        }
        return null;
    }

    /**
    * Sets the applicableArchitecture
    *
    * @param WindowsArchitecture $val The value to assign to the applicableArchitecture
    *
    * @return WindowsPackageInformation The WindowsPackageInformation
    */
    public function setApplicableArchitecture($val)
    {
        $this->_propDict["applicableArchitecture"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return WindowsPackageInformation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @param string $val The value of the identityName
    *
    * @return WindowsPackageInformation
    */
    public function setIdentityName($val)
    {
        $this->_propDict["identityName"] = $val;
        return $this;
    }
    /**
    * Gets the identityPublisher
    *
    * @return string The identityPublisher
    */
    public function getIdentityPublisher()
    {
        if (array_key_exists("identityPublisher", $this->_propDict)) {
            return $this->_propDict["identityPublisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityPublisher
    *
    * @param string $val The value of the identityPublisher
    *
    * @return WindowsPackageInformation
    */
    public function setIdentityPublisher($val)
    {
        $this->_propDict["identityPublisher"] = $val;
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
    * @param string $val The value of the identityResourceIdentifier
    *
    * @return WindowsPackageInformation
    */
    public function setIdentityResourceIdentifier($val)
    {
        $this->_propDict["identityResourceIdentifier"] = $val;
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
    * @param string $val The value of the identityVersion
    *
    * @return WindowsPackageInformation
    */
    public function setIdentityVersion($val)
    {
        $this->_propDict["identityVersion"] = $val;
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
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "Microsoft\Graph\Beta\Model\WindowsMinimumOperatingSystem")) {
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
    * @param WindowsMinimumOperatingSystem $val The value to assign to the minimumSupportedOperatingSystem
    *
    * @return WindowsPackageInformation The WindowsPackageInformation
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
         return $this;
    }
}
