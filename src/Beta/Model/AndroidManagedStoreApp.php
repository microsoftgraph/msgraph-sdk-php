<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreApp File
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
* AndroidManagedStoreApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidManagedStoreApp extends MobileApp
{
    /**
    * Gets the packageId
    * The package identifier.
    *
    * @return string The packageId
    */
    public function getPackageId()
    {
        if (array_key_exists("packageId", $this->_propDict)) {
            return $this->_propDict["packageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the packageId
    * The package identifier.
    *
    * @param string $val The packageId
    *
    * @return AndroidManagedStoreApp
    */
    public function setPackageId($val)
    {
        $this->_propDict["packageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appIdentifier
    * The Identity Name.
    *
    * @return string The appIdentifier
    */
    public function getAppIdentifier()
    {
        if (array_key_exists("appIdentifier", $this->_propDict)) {
            return $this->_propDict["appIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appIdentifier
    * The Identity Name.
    *
    * @param string $val The appIdentifier
    *
    * @return AndroidManagedStoreApp
    */
    public function setAppIdentifier($val)
    {
        $this->_propDict["appIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the usedLicenseCount
    * The number of VPP licenses in use.
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
    * The number of VPP licenses in use.
    *
    * @param int $val The usedLicenseCount
    *
    * @return AndroidManagedStoreApp
    */
    public function setUsedLicenseCount($val)
    {
        $this->_propDict["usedLicenseCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalLicenseCount
    * The total number of VPP licenses.
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
    * The total number of VPP licenses.
    *
    * @param int $val The totalLicenseCount
    *
    * @return AndroidManagedStoreApp
    */
    public function setTotalLicenseCount($val)
    {
        $this->_propDict["totalLicenseCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the appStoreUrl
    * The Play for Work Store app URL.
    *
    * @return string The appStoreUrl
    */
    public function getAppStoreUrl()
    {
        if (array_key_exists("appStoreUrl", $this->_propDict)) {
            return $this->_propDict["appStoreUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreUrl
    * The Play for Work Store app URL.
    *
    * @param string $val The appStoreUrl
    *
    * @return AndroidManagedStoreApp
    */
    public function setAppStoreUrl($val)
    {
        $this->_propDict["appStoreUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportsOemConfig
    * Whether this app supports OEMConfig policy.
    *
    * @return bool The supportsOemConfig
    */
    public function getSupportsOemConfig()
    {
        if (array_key_exists("supportsOemConfig", $this->_propDict)) {
            return $this->_propDict["supportsOemConfig"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportsOemConfig
    * Whether this app supports OEMConfig policy.
    *
    * @param bool $val The supportsOemConfig
    *
    * @return AndroidManagedStoreApp
    */
    public function setSupportsOemConfig($val)
    {
        $this->_propDict["supportsOemConfig"] = boolval($val);
        return $this;
    }
    
}