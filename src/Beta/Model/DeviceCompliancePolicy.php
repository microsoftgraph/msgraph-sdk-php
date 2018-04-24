<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceCompliancePolicy File
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
* DeviceCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceCompliancePolicy extends Entity
{
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceCompliancePolicy
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return DeviceCompliancePolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceCompliancePolicy
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
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
    * @param string $val The displayName
    *
    * @return DeviceCompliancePolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    *
    * @return int The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    *
    * @param int $val The version
    *
    * @return DeviceCompliancePolicy
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the scheduledActionsForRule
     *
     * @return array The scheduledActionsForRule
     */
    public function getScheduledActionsForRule()
    {
        if (array_key_exists("scheduledActionsForRule", $this->_propDict)) {
           return $this->_propDict["scheduledActionsForRule"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the scheduledActionsForRule
    *
    * @param DeviceComplianceScheduledActionForRule $val The scheduledActionsForRule
    *
    * @return DeviceCompliancePolicy
    */
    public function setScheduledActionsForRule($val)
    {
		$this->_propDict["scheduledActionsForRule"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStatuses
     *
     * @return array The deviceStatuses
     */
    public function getDeviceStatuses()
    {
        if (array_key_exists("deviceStatuses", $this->_propDict)) {
           return $this->_propDict["deviceStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStatuses
    *
    * @param DeviceComplianceDeviceStatus $val The deviceStatuses
    *
    * @return DeviceCompliancePolicy
    */
    public function setDeviceStatuses($val)
    {
		$this->_propDict["deviceStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userStatuses
     *
     * @return array The userStatuses
     */
    public function getUserStatuses()
    {
        if (array_key_exists("userStatuses", $this->_propDict)) {
           return $this->_propDict["userStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userStatuses
    *
    * @param DeviceComplianceUserStatus $val The userStatuses
    *
    * @return DeviceCompliancePolicy
    */
    public function setUserStatuses($val)
    {
		$this->_propDict["userStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceStatusOverview
    *
    * @return DeviceComplianceDeviceOverview The deviceStatusOverview
    */
    public function getDeviceStatusOverview()
    {
        if (array_key_exists("deviceStatusOverview", $this->_propDict)) {
            if (is_a($this->_propDict["deviceStatusOverview"], "Microsoft\Graph\Beta\Model\DeviceComplianceDeviceOverview")) {
                return $this->_propDict["deviceStatusOverview"];
            } else {
                $this->_propDict["deviceStatusOverview"] = new DeviceComplianceDeviceOverview($this->_propDict["deviceStatusOverview"]);
                return $this->_propDict["deviceStatusOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceStatusOverview
    *
    * @param DeviceComplianceDeviceOverview $val The deviceStatusOverview
    *
    * @return DeviceCompliancePolicy
    */
    public function setDeviceStatusOverview($val)
    {
        $this->_propDict["deviceStatusOverview"] = $val;
        return $this;
    }
    
    /**
    * Gets the userStatusOverview
    *
    * @return DeviceComplianceUserOverview The userStatusOverview
    */
    public function getUserStatusOverview()
    {
        if (array_key_exists("userStatusOverview", $this->_propDict)) {
            if (is_a($this->_propDict["userStatusOverview"], "Microsoft\Graph\Beta\Model\DeviceComplianceUserOverview")) {
                return $this->_propDict["userStatusOverview"];
            } else {
                $this->_propDict["userStatusOverview"] = new DeviceComplianceUserOverview($this->_propDict["userStatusOverview"]);
                return $this->_propDict["userStatusOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userStatusOverview
    *
    * @param DeviceComplianceUserOverview $val The userStatusOverview
    *
    * @return DeviceCompliancePolicy
    */
    public function setUserStatusOverview($val)
    {
        $this->_propDict["userStatusOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceSettingStateSummaries
     *
     * @return array The deviceSettingStateSummaries
     */
    public function getDeviceSettingStateSummaries()
    {
        if (array_key_exists("deviceSettingStateSummaries", $this->_propDict)) {
           return $this->_propDict["deviceSettingStateSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceSettingStateSummaries
    *
    * @param SettingStateDeviceSummary $val The deviceSettingStateSummaries
    *
    * @return DeviceCompliancePolicy
    */
    public function setDeviceSettingStateSummaries($val)
    {
		$this->_propDict["deviceSettingStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    *
    * @param DeviceCompliancePolicyAssignment $val The assignments
    *
    * @return DeviceCompliancePolicy
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}