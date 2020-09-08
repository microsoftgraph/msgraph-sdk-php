<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftStoreForBusinessApp File
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
* MicrosoftStoreForBusinessApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftStoreForBusinessApp extends MobileApp
{
    /**
    * Gets the licenseType
    * The app license type. Possible values are: offline, online.
    *
    * @return MicrosoftStoreForBusinessLicenseType The licenseType
    */
    public function getLicenseType()
    {
        if (array_key_exists("licenseType", $this->_propDict)) {
            if (is_a($this->_propDict["licenseType"], "Beta\Microsoft\Graph\Model\MicrosoftStoreForBusinessLicenseType")) {
                return $this->_propDict["licenseType"];
            } else {
                $this->_propDict["licenseType"] = new MicrosoftStoreForBusinessLicenseType($this->_propDict["licenseType"]);
                return $this->_propDict["licenseType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the licenseType
    * The app license type. Possible values are: offline, online.
    *
    * @param MicrosoftStoreForBusinessLicenseType $val The licenseType
    *
    * @return MicrosoftStoreForBusinessApp
    */
    public function setLicenseType($val)
    {
        $this->_propDict["licenseType"] = $val;
        return $this;
    }
    
    /**
    * Gets the licensingType
    * The supported License Type.
    *
    * @return VppLicensingType The licensingType
    */
    public function getLicensingType()
    {
        if (array_key_exists("licensingType", $this->_propDict)) {
            if (is_a($this->_propDict["licensingType"], "Beta\Microsoft\Graph\Model\VppLicensingType")) {
                return $this->_propDict["licensingType"];
            } else {
                $this->_propDict["licensingType"] = new VppLicensingType($this->_propDict["licensingType"]);
                return $this->_propDict["licensingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the licensingType
    * The supported License Type.
    *
    * @param VppLicensingType $val The licensingType
    *
    * @return MicrosoftStoreForBusinessApp
    */
    public function setLicensingType($val)
    {
        $this->_propDict["licensingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the packageIdentityName
    * The app package identifier
    *
    * @return string The packageIdentityName
    */
    public function getPackageIdentityName()
    {
        if (array_key_exists("packageIdentityName", $this->_propDict)) {
            return $this->_propDict["packageIdentityName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the packageIdentityName
    * The app package identifier
    *
    * @param string $val The packageIdentityName
    *
    * @return MicrosoftStoreForBusinessApp
    */
    public function setPackageIdentityName($val)
    {
        $this->_propDict["packageIdentityName"] = $val;
        return $this;
    }
    
    /**
    * Gets the productKey
    * The app product key
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
    * The app product key
    *
    * @param string $val The productKey
    *
    * @return MicrosoftStoreForBusinessApp
    */
    public function setProductKey($val)
    {
        $this->_propDict["productKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalLicenseCount
    * The total number of Microsoft Store for Business licenses.
    *
    * @return int The totalLicenseCount
    */
    public function getTotalLicenseCount()
    {
        if (array_key_exists("totalLicenseCount", $this->_propDict)) {
            return $this->_propDict["totalLicenseCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalLicenseCount
    * The total number of Microsoft Store for Business licenses.
    *
    * @param int $val The totalLicenseCount
    *
    * @return MicrosoftStoreForBusinessApp
    */
    public function setTotalLicenseCount($val)
    {
        $this->_propDict["totalLicenseCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the usedLicenseCount
    * The number of Microsoft Store for Business licenses in use.
    *
    * @return int The usedLicenseCount
    */
    public function getUsedLicenseCount()
    {
        if (array_key_exists("usedLicenseCount", $this->_propDict)) {
            return $this->_propDict["usedLicenseCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedLicenseCount
    * The number of Microsoft Store for Business licenses in use.
    *
    * @param int $val The usedLicenseCount
    *
    * @return MicrosoftStoreForBusinessApp
    */
    public function setUsedLicenseCount($val)
    {
        $this->_propDict["usedLicenseCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the containedApps
    * The collection of contained apps in a mobileApp acting as a package.
     *
     * @return array The containedApps
     */
    public function getContainedApps()
    {
        if (array_key_exists("containedApps", $this->_propDict)) {
           return $this->_propDict["containedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the containedApps
    * The collection of contained apps in a mobileApp acting as a package.
    *
    * @param MobileContainedApp $val The containedApps
    *
    * @return MicrosoftStoreForBusinessApp
    */
    public function setContainedApps($val)
    {
		$this->_propDict["containedApps"] = $val;
        return $this;
    }
    
}