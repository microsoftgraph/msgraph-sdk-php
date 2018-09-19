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
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* MicrosoftStoreForBusinessApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MicrosoftStoreForBusinessApp extends MobileApp
{
    /**
    * Gets the usedLicenseCount
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
    * Gets the totalLicenseCount
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
    * @return MicrosoftStoreForBusinessApp
    */
    public function setProductKey($val)
    {
        $this->_propDict["productKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the licenseType
    *
    * @return MicrosoftStoreForBusinessLicenseType The licenseType
    */
    public function getLicenseType()
    {
        if (array_key_exists("licenseType", $this->_propDict)) {
            if (is_a($this->_propDict["licenseType"], "Microsoft\Graph\Beta\Model\MicrosoftStoreForBusinessLicenseType")) {
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
    * Gets the packageIdentityName
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
     * Gets the containedApps
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