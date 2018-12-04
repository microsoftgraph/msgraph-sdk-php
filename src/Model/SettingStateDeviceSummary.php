<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SettingStateDeviceSummary File
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
* SettingStateDeviceSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SettingStateDeviceSummary extends Entity
{
    /**
    * Gets the settingName
    *
    * @return string The settingName
    */
    public function getSettingName()
    {
        if (array_key_exists("settingName", $this->_propDict)) {
            return $this->_propDict["settingName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingName
    *
    * @param string $val The settingName
    *
    * @return SettingStateDeviceSummary
    */
    public function setSettingName($val)
    {
        $this->_propDict["settingName"] = $val;
        return $this;
    }
    
    /**
    * Gets the instancePath
    *
    * @return string The instancePath
    */
    public function getInstancePath()
    {
        if (array_key_exists("instancePath", $this->_propDict)) {
            return $this->_propDict["instancePath"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the instancePath
    *
    * @param string $val The instancePath
    *
    * @return SettingStateDeviceSummary
    */
    public function setInstancePath($val)
    {
        $this->_propDict["instancePath"] = $val;
        return $this;
    }
    
    /**
    * Gets the unknownDeviceCount
    *
    * @return int The unknownDeviceCount
    */
    public function getUnknownDeviceCount()
    {
        if (array_key_exists("unknownDeviceCount", $this->_propDict)) {
            return $this->_propDict["unknownDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unknownDeviceCount
    *
    * @param int $val The unknownDeviceCount
    *
    * @return SettingStateDeviceSummary
    */
    public function setUnknownDeviceCount($val)
    {
        $this->_propDict["unknownDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableDeviceCount
    *
    * @return int The notApplicableDeviceCount
    */
    public function getNotApplicableDeviceCount()
    {
        if (array_key_exists("notApplicableDeviceCount", $this->_propDict)) {
            return $this->_propDict["notApplicableDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableDeviceCount
    *
    * @param int $val The notApplicableDeviceCount
    *
    * @return SettingStateDeviceSummary
    */
    public function setNotApplicableDeviceCount($val)
    {
        $this->_propDict["notApplicableDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the compliantDeviceCount
    *
    * @return int The compliantDeviceCount
    */
    public function getCompliantDeviceCount()
    {
        if (array_key_exists("compliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["compliantDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the compliantDeviceCount
    *
    * @param int $val The compliantDeviceCount
    *
    * @return SettingStateDeviceSummary
    */
    public function setCompliantDeviceCount($val)
    {
        $this->_propDict["compliantDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remediatedDeviceCount
    *
    * @return int The remediatedDeviceCount
    */
    public function getRemediatedDeviceCount()
    {
        if (array_key_exists("remediatedDeviceCount", $this->_propDict)) {
            return $this->_propDict["remediatedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remediatedDeviceCount
    *
    * @param int $val The remediatedDeviceCount
    *
    * @return SettingStateDeviceSummary
    */
    public function setRemediatedDeviceCount($val)
    {
        $this->_propDict["remediatedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the nonCompliantDeviceCount
    *
    * @return int The nonCompliantDeviceCount
    */
    public function getNonCompliantDeviceCount()
    {
        if (array_key_exists("nonCompliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["nonCompliantDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nonCompliantDeviceCount
    *
    * @param int $val The nonCompliantDeviceCount
    *
    * @return SettingStateDeviceSummary
    */
    public function setNonCompliantDeviceCount($val)
    {
        $this->_propDict["nonCompliantDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorDeviceCount
    *
    * @return int The errorDeviceCount
    */
    public function getErrorDeviceCount()
    {
        if (array_key_exists("errorDeviceCount", $this->_propDict)) {
            return $this->_propDict["errorDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorDeviceCount
    *
    * @param int $val The errorDeviceCount
    *
    * @return SettingStateDeviceSummary
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conflictDeviceCount
    *
    * @return int The conflictDeviceCount
    */
    public function getConflictDeviceCount()
    {
        if (array_key_exists("conflictDeviceCount", $this->_propDict)) {
            return $this->_propDict["conflictDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conflictDeviceCount
    *
    * @param int $val The conflictDeviceCount
    *
    * @return SettingStateDeviceSummary
    */
    public function setConflictDeviceCount($val)
    {
        $this->_propDict["conflictDeviceCount"] = intval($val);
        return $this;
    }
    
}