<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkApp File
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
* AndroidForWorkApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkApp extends MobileApp
{
    /**
    * Gets the packageId
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
    *
    * @param string $val The packageId
    *
    * @return AndroidForWorkApp
    */
    public function setPackageId($val)
    {
        $this->_propDict["packageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appIdentifier
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
    *
    * @param string $val The appIdentifier
    *
    * @return AndroidForWorkApp
    */
    public function setAppIdentifier($val)
    {
        $this->_propDict["appIdentifier"] = $val;
        return $this;
    }
    
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
    * @return AndroidForWorkApp
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
    * @return AndroidForWorkApp
    */
    public function setTotalLicenseCount($val)
    {
        $this->_propDict["totalLicenseCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the appStoreUrl
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
    *
    * @param string $val The appStoreUrl
    *
    * @return AndroidForWorkApp
    */
    public function setAppStoreUrl($val)
    {
        $this->_propDict["appStoreUrl"] = $val;
        return $this;
    }
    
}