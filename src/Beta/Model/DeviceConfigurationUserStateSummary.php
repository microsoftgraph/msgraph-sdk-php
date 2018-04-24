<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationUserStateSummary File
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
* DeviceConfigurationUserStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceConfigurationUserStateSummary extends Entity
{
    /**
    * Gets the unknownUserCount
    *
    * @return int The unknownUserCount
    */
    public function getUnknownUserCount()
    {
        if (array_key_exists("unknownUserCount", $this->_propDict)) {
            return $this->_propDict["unknownUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unknownUserCount
    *
    * @param int $val The unknownUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setUnknownUserCount($val)
    {
        $this->_propDict["unknownUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableUserCount
    *
    * @return int The notApplicableUserCount
    */
    public function getNotApplicableUserCount()
    {
        if (array_key_exists("notApplicableUserCount", $this->_propDict)) {
            return $this->_propDict["notApplicableUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableUserCount
    *
    * @param int $val The notApplicableUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setNotApplicableUserCount($val)
    {
        $this->_propDict["notApplicableUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the compliantUserCount
    *
    * @return int The compliantUserCount
    */
    public function getCompliantUserCount()
    {
        if (array_key_exists("compliantUserCount", $this->_propDict)) {
            return $this->_propDict["compliantUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the compliantUserCount
    *
    * @param int $val The compliantUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setCompliantUserCount($val)
    {
        $this->_propDict["compliantUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remediatedUserCount
    *
    * @return int The remediatedUserCount
    */
    public function getRemediatedUserCount()
    {
        if (array_key_exists("remediatedUserCount", $this->_propDict)) {
            return $this->_propDict["remediatedUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remediatedUserCount
    *
    * @param int $val The remediatedUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setRemediatedUserCount($val)
    {
        $this->_propDict["remediatedUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the nonCompliantUserCount
    *
    * @return int The nonCompliantUserCount
    */
    public function getNonCompliantUserCount()
    {
        if (array_key_exists("nonCompliantUserCount", $this->_propDict)) {
            return $this->_propDict["nonCompliantUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nonCompliantUserCount
    *
    * @param int $val The nonCompliantUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setNonCompliantUserCount($val)
    {
        $this->_propDict["nonCompliantUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorUserCount
    *
    * @return int The errorUserCount
    */
    public function getErrorUserCount()
    {
        if (array_key_exists("errorUserCount", $this->_propDict)) {
            return $this->_propDict["errorUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorUserCount
    *
    * @param int $val The errorUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setErrorUserCount($val)
    {
        $this->_propDict["errorUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conflictUserCount
    *
    * @return int The conflictUserCount
    */
    public function getConflictUserCount()
    {
        if (array_key_exists("conflictUserCount", $this->_propDict)) {
            return $this->_propDict["conflictUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conflictUserCount
    *
    * @param int $val The conflictUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setConflictUserCount($val)
    {
        $this->_propDict["conflictUserCount"] = intval($val);
        return $this;
    }
    
}