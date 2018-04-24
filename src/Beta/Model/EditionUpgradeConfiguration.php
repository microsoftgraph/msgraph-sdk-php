<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EditionUpgradeConfiguration File
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

/**
* EditionUpgradeConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EditionUpgradeConfiguration extends DeviceConfiguration
{
    /**
    * Gets the licenseType
    *
    * @return EditionUpgradeLicenseType The licenseType
    */
    public function getLicenseType()
    {
        if (array_key_exists("licenseType", $this->_propDict)) {
            if (is_a($this->_propDict["licenseType"], "Microsoft\Graph\Beta\Model\EditionUpgradeLicenseType")) {
                return $this->_propDict["licenseType"];
            } else {
                $this->_propDict["licenseType"] = new EditionUpgradeLicenseType($this->_propDict["licenseType"]);
                return $this->_propDict["licenseType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the licenseType
    *
    * @param EditionUpgradeLicenseType $val The licenseType
    *
    * @return EditionUpgradeConfiguration
    */
    public function setLicenseType($val)
    {
        $this->_propDict["licenseType"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetEdition
    *
    * @return Windows10EditionType The targetEdition
    */
    public function getTargetEdition()
    {
        if (array_key_exists("targetEdition", $this->_propDict)) {
            if (is_a($this->_propDict["targetEdition"], "Microsoft\Graph\Beta\Model\Windows10EditionType")) {
                return $this->_propDict["targetEdition"];
            } else {
                $this->_propDict["targetEdition"] = new Windows10EditionType($this->_propDict["targetEdition"]);
                return $this->_propDict["targetEdition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the targetEdition
    *
    * @param Windows10EditionType $val The targetEdition
    *
    * @return EditionUpgradeConfiguration
    */
    public function setTargetEdition($val)
    {
        $this->_propDict["targetEdition"] = $val;
        return $this;
    }
    
    /**
    * Gets the license
    *
    * @return string The license
    */
    public function getLicense()
    {
        if (array_key_exists("license", $this->_propDict)) {
            return $this->_propDict["license"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the license
    *
    * @param string $val The license
    *
    * @return EditionUpgradeConfiguration
    */
    public function setLicense($val)
    {
        $this->_propDict["license"] = $val;
        return $this;
    }
    
    /**
    * Gets the productKey
    *
    * @return string The productKey
    */
    public function getProductKey()
    {
        if (array_key_exists("productKey", $this->_propDict)) {
            return $this->_propDict["productKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productKey
    *
    * @param string $val The productKey
    *
    * @return EditionUpgradeConfiguration
    */
    public function setProductKey($val)
    {
        $this->_propDict["productKey"] = $val;
        return $this;
    }
    
}