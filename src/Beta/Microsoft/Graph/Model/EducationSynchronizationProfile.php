<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationProfile File
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
* EducationSynchronizationProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSynchronizationProfile extends Entity
{
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
    * @param string $val The displayName
    *
    * @return EducationSynchronizationProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDate
    *
    * @return \DateTime The expirationDate
    */
    public function getExpirationDate()
    {
        if (array_key_exists("expirationDate", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDate"], "\DateTime")) {
                return $this->_propDict["expirationDate"];
            } else {
                $this->_propDict["expirationDate"] = new \DateTime($this->_propDict["expirationDate"]);
                return $this->_propDict["expirationDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDate
    *
    * @param \DateTime $val The expirationDate
    *
    * @return EducationSynchronizationProfile
    */
    public function setExpirationDate($val)
    {
        $this->_propDict["expirationDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataProvider
    *
    * @return EducationSynchronizationDataProvider The dataProvider
    */
    public function getDataProvider()
    {
        if (array_key_exists("dataProvider", $this->_propDict)) {
            if (is_a($this->_propDict["dataProvider"], "Beta\Microsoft\Graph\Model\EducationSynchronizationDataProvider")) {
                return $this->_propDict["dataProvider"];
            } else {
                $this->_propDict["dataProvider"] = new EducationSynchronizationDataProvider($this->_propDict["dataProvider"]);
                return $this->_propDict["dataProvider"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dataProvider
    *
    * @param EducationSynchronizationDataProvider $val The dataProvider
    *
    * @return EducationSynchronizationProfile
    */
    public function setDataProvider($val)
    {
        $this->_propDict["dataProvider"] = $val;
        return $this;
    }
    
    /**
    * Gets the identitySynchronizationConfiguration
    *
    * @return EducationIdentitySynchronizationConfiguration The identitySynchronizationConfiguration
    */
    public function getIdentitySynchronizationConfiguration()
    {
        if (array_key_exists("identitySynchronizationConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["identitySynchronizationConfiguration"], "Beta\Microsoft\Graph\Model\EducationIdentitySynchronizationConfiguration")) {
                return $this->_propDict["identitySynchronizationConfiguration"];
            } else {
                $this->_propDict["identitySynchronizationConfiguration"] = new EducationIdentitySynchronizationConfiguration($this->_propDict["identitySynchronizationConfiguration"]);
                return $this->_propDict["identitySynchronizationConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identitySynchronizationConfiguration
    *
    * @param EducationIdentitySynchronizationConfiguration $val The identitySynchronizationConfiguration
    *
    * @return EducationSynchronizationProfile
    */
    public function setIdentitySynchronizationConfiguration($val)
    {
        $this->_propDict["identitySynchronizationConfiguration"] = $val;
        return $this;
    }
    

     /** 
     * Gets the licensesToAssign
     *
     * @return array The licensesToAssign
     */
    public function getLicensesToAssign()
    {
        if (array_key_exists("licensesToAssign", $this->_propDict)) {
           return $this->_propDict["licensesToAssign"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the licensesToAssign
    *
    * @param EducationSynchronizationLicenseAssignment $val The licensesToAssign
    *
    * @return EducationSynchronizationProfile
    */
    public function setLicensesToAssign($val)
    {
		$this->_propDict["licensesToAssign"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return EducationSynchronizationProfileState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Beta\Microsoft\Graph\Model\EducationSynchronizationProfileState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new EducationSynchronizationProfileState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param EducationSynchronizationProfileState $val The state
    *
    * @return EducationSynchronizationProfile
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the handleSpecialCharacterConstraint
    *
    * @return bool The handleSpecialCharacterConstraint
    */
    public function getHandleSpecialCharacterConstraint()
    {
        if (array_key_exists("handleSpecialCharacterConstraint", $this->_propDict)) {
            return $this->_propDict["handleSpecialCharacterConstraint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the handleSpecialCharacterConstraint
    *
    * @param bool $val The handleSpecialCharacterConstraint
    *
    * @return EducationSynchronizationProfile
    */
    public function setHandleSpecialCharacterConstraint($val)
    {
        $this->_propDict["handleSpecialCharacterConstraint"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the errors
     *
     * @return array The errors
     */
    public function getErrors()
    {
        if (array_key_exists("errors", $this->_propDict)) {
           return $this->_propDict["errors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the errors
    *
    * @param EducationSynchronizationError $val The errors
    *
    * @return EducationSynchronizationProfile
    */
    public function setErrors($val)
    {
		$this->_propDict["errors"] = $val;
        return $this;
    }
    
    /**
    * Gets the profileStatus
    *
    * @return EducationSynchronizationProfileStatus The profileStatus
    */
    public function getProfileStatus()
    {
        if (array_key_exists("profileStatus", $this->_propDict)) {
            if (is_a($this->_propDict["profileStatus"], "Beta\Microsoft\Graph\Model\EducationSynchronizationProfileStatus")) {
                return $this->_propDict["profileStatus"];
            } else {
                $this->_propDict["profileStatus"] = new EducationSynchronizationProfileStatus($this->_propDict["profileStatus"]);
                return $this->_propDict["profileStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the profileStatus
    *
    * @param EducationSynchronizationProfileStatus $val The profileStatus
    *
    * @return EducationSynchronizationProfile
    */
    public function setProfileStatus($val)
    {
        $this->_propDict["profileStatus"] = $val;
        return $this;
    }
    
}