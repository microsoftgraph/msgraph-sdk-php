<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosVppEBook File
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
* IosVppEBook class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosVppEBook extends ManagedEBook
{
    /**
    * Gets the vppTokenId
    *
    * @return string The vppTokenId
    */
    public function getVppTokenId()
    {
        if (array_key_exists("vppTokenId", $this->_propDict)) {
            return $this->_propDict["vppTokenId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vppTokenId
    *
    * @param string $val The vppTokenId
    *
    * @return IosVppEBook
    */
    public function setVppTokenId($val)
    {
        $this->_propDict["vppTokenId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appleId
    *
    * @return string The appleId
    */
    public function getAppleId()
    {
        if (array_key_exists("appleId", $this->_propDict)) {
            return $this->_propDict["appleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleId
    *
    * @param string $val The appleId
    *
    * @return IosVppEBook
    */
    public function setAppleId($val)
    {
        $this->_propDict["appleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the vppOrganizationName
    *
    * @return string The vppOrganizationName
    */
    public function getVppOrganizationName()
    {
        if (array_key_exists("vppOrganizationName", $this->_propDict)) {
            return $this->_propDict["vppOrganizationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vppOrganizationName
    *
    * @param string $val The vppOrganizationName
    *
    * @return IosVppEBook
    */
    public function setVppOrganizationName($val)
    {
        $this->_propDict["vppOrganizationName"] = $val;
        return $this;
    }
    
    /**
    * Gets the genres
    *
    * @return string The genres
    */
    public function getGenres()
    {
        if (array_key_exists("genres", $this->_propDict)) {
            return $this->_propDict["genres"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the genres
    *
    * @param string $val The genres
    *
    * @return IosVppEBook
    */
    public function setGenres($val)
    {
        $this->_propDict["genres"] = $val;
        return $this;
    }
    
    /**
    * Gets the language
    *
    * @return string The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the language
    *
    * @param string $val The language
    *
    * @return IosVppEBook
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }
    
    /**
    * Gets the seller
    *
    * @return string The seller
    */
    public function getSeller()
    {
        if (array_key_exists("seller", $this->_propDict)) {
            return $this->_propDict["seller"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the seller
    *
    * @param string $val The seller
    *
    * @return IosVppEBook
    */
    public function setSeller($val)
    {
        $this->_propDict["seller"] = $val;
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
    * @return IosVppEBook
    */
    public function setTotalLicenseCount($val)
    {
        $this->_propDict["totalLicenseCount"] = intval($val);
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
    * @return IosVppEBook
    */
    public function setUsedLicenseCount($val)
    {
        $this->_propDict["usedLicenseCount"] = intval($val);
        return $this;
    }
    
}