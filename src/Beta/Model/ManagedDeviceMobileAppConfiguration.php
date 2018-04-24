<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceMobileAppConfiguration File
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
* ManagedDeviceMobileAppConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ManagedDeviceMobileAppConfiguration extends Entity
{
    /**
    * Gets the targetedMobileApps
    *
    * @return string The targetedMobileApps
    */
    public function getTargetedMobileApps()
    {
        if (array_key_exists("targetedMobileApps", $this->_propDict)) {
            return $this->_propDict["targetedMobileApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetedMobileApps
    *
    * @param string $val The targetedMobileApps
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setTargetedMobileApps($val)
    {
        $this->_propDict["targetedMobileApps"] = $val;
        return $this;
    }
    
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
    * @return ManagedDeviceMobileAppConfiguration
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
    * @return ManagedDeviceMobileAppConfiguration
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
    * @return ManagedDeviceMobileAppConfiguration
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
    * @return ManagedDeviceMobileAppConfiguration
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
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
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
    * @param ManagedDeviceMobileAppConfigurationAssignment $val The assignments
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
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
    * @param ManagedDeviceMobileAppConfigurationDeviceStatus $val The deviceStatuses
    *
    * @return ManagedDeviceMobileAppConfiguration
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
    * @param ManagedDeviceMobileAppConfigurationUserStatus $val The userStatuses
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setUserStatuses($val)
    {
		$this->_propDict["userStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceStatusSummary
    *
    * @return ManagedDeviceMobileAppConfigurationDeviceSummary The deviceStatusSummary
    */
    public function getDeviceStatusSummary()
    {
        if (array_key_exists("deviceStatusSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deviceStatusSummary"], "Microsoft\Graph\Beta\Model\ManagedDeviceMobileAppConfigurationDeviceSummary")) {
                return $this->_propDict["deviceStatusSummary"];
            } else {
                $this->_propDict["deviceStatusSummary"] = new ManagedDeviceMobileAppConfigurationDeviceSummary($this->_propDict["deviceStatusSummary"]);
                return $this->_propDict["deviceStatusSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceStatusSummary
    *
    * @param ManagedDeviceMobileAppConfigurationDeviceSummary $val The deviceStatusSummary
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setDeviceStatusSummary($val)
    {
        $this->_propDict["deviceStatusSummary"] = $val;
        return $this;
    }
    
    /**
    * Gets the userStatusSummary
    *
    * @return ManagedDeviceMobileAppConfigurationUserSummary The userStatusSummary
    */
    public function getUserStatusSummary()
    {
        if (array_key_exists("userStatusSummary", $this->_propDict)) {
            if (is_a($this->_propDict["userStatusSummary"], "Microsoft\Graph\Beta\Model\ManagedDeviceMobileAppConfigurationUserSummary")) {
                return $this->_propDict["userStatusSummary"];
            } else {
                $this->_propDict["userStatusSummary"] = new ManagedDeviceMobileAppConfigurationUserSummary($this->_propDict["userStatusSummary"]);
                return $this->_propDict["userStatusSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userStatusSummary
    *
    * @param ManagedDeviceMobileAppConfigurationUserSummary $val The userStatusSummary
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setUserStatusSummary($val)
    {
        $this->_propDict["userStatusSummary"] = $val;
        return $this;
    }
    
}