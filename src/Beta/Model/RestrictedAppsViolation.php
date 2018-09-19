<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RestrictedAppsViolation File
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
* RestrictedAppsViolation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RestrictedAppsViolation extends Entity
{
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return RestrictedAppsViolation
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userName
    *
    * @return string The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userName
    *
    * @param string $val The userName
    *
    * @return RestrictedAppsViolation
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceId
    *
    * @return string The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceId
    *
    * @param string $val The managedDeviceId
    *
    * @return RestrictedAppsViolation
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceName
    *
    * @param string $val The deviceName
    *
    * @return RestrictedAppsViolation
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceConfigurationId
    *
    * @return string The deviceConfigurationId
    */
    public function getDeviceConfigurationId()
    {
        if (array_key_exists("deviceConfigurationId", $this->_propDict)) {
            return $this->_propDict["deviceConfigurationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceConfigurationId
    *
    * @param string $val The deviceConfigurationId
    *
    * @return RestrictedAppsViolation
    */
    public function setDeviceConfigurationId($val)
    {
        $this->_propDict["deviceConfigurationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceConfigurationName
    *
    * @return string The deviceConfigurationName
    */
    public function getDeviceConfigurationName()
    {
        if (array_key_exists("deviceConfigurationName", $this->_propDict)) {
            return $this->_propDict["deviceConfigurationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceConfigurationName
    *
    * @param string $val The deviceConfigurationName
    *
    * @return RestrictedAppsViolation
    */
    public function setDeviceConfigurationName($val)
    {
        $this->_propDict["deviceConfigurationName"] = $val;
        return $this;
    }
    
    /**
    * Gets the platformType
    *
    * @return PolicyPlatformType The platformType
    */
    public function getPlatformType()
    {
        if (array_key_exists("platformType", $this->_propDict)) {
            if (is_a($this->_propDict["platformType"], "Microsoft\Graph\Beta\Model\PolicyPlatformType")) {
                return $this->_propDict["platformType"];
            } else {
                $this->_propDict["platformType"] = new PolicyPlatformType($this->_propDict["platformType"]);
                return $this->_propDict["platformType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platformType
    *
    * @param PolicyPlatformType $val The platformType
    *
    * @return RestrictedAppsViolation
    */
    public function setPlatformType($val)
    {
        $this->_propDict["platformType"] = $val;
        return $this;
    }
    
    /**
    * Gets the restrictedAppsState
    *
    * @return RestrictedAppsState The restrictedAppsState
    */
    public function getRestrictedAppsState()
    {
        if (array_key_exists("restrictedAppsState", $this->_propDict)) {
            if (is_a($this->_propDict["restrictedAppsState"], "Microsoft\Graph\Beta\Model\RestrictedAppsState")) {
                return $this->_propDict["restrictedAppsState"];
            } else {
                $this->_propDict["restrictedAppsState"] = new RestrictedAppsState($this->_propDict["restrictedAppsState"]);
                return $this->_propDict["restrictedAppsState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the restrictedAppsState
    *
    * @param RestrictedAppsState $val The restrictedAppsState
    *
    * @return RestrictedAppsViolation
    */
    public function setRestrictedAppsState($val)
    {
        $this->_propDict["restrictedAppsState"] = $val;
        return $this;
    }
    

     /** 
     * Gets the restrictedApps
     *
     * @return array The restrictedApps
     */
    public function getRestrictedApps()
    {
        if (array_key_exists("restrictedApps", $this->_propDict)) {
           return $this->_propDict["restrictedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the restrictedApps
    *
    * @param ManagedDeviceReportedApp $val The restrictedApps
    *
    * @return RestrictedAppsViolation
    */
    public function setRestrictedApps($val)
    {
		$this->_propDict["restrictedApps"] = $val;
        return $this;
    }
    
}