<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotDeploymentProfile File
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
* WindowsAutopilotDeploymentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsAutopilotDeploymentProfile extends Entity
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
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
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
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the outOfBoxExperienceSettings
    *
    * @return OutOfBoxExperienceSettings The outOfBoxExperienceSettings
    */
    public function getOutOfBoxExperienceSettings()
    {
        if (array_key_exists("outOfBoxExperienceSettings", $this->_propDict)) {
            if (is_a($this->_propDict["outOfBoxExperienceSettings"], "Microsoft\Graph\Beta\Model\OutOfBoxExperienceSettings")) {
                return $this->_propDict["outOfBoxExperienceSettings"];
            } else {
                $this->_propDict["outOfBoxExperienceSettings"] = new OutOfBoxExperienceSettings($this->_propDict["outOfBoxExperienceSettings"]);
                return $this->_propDict["outOfBoxExperienceSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the outOfBoxExperienceSettings
    *
    * @param OutOfBoxExperienceSettings $val The outOfBoxExperienceSettings
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setOutOfBoxExperienceSettings($val)
    {
        $this->_propDict["outOfBoxExperienceSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignedDevices
     *
     * @return array The assignedDevices
     */
    public function getAssignedDevices()
    {
        if (array_key_exists("assignedDevices", $this->_propDict)) {
           return $this->_propDict["assignedDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedDevices
    *
    * @param WindowsAutopilotDeviceIdentity $val The assignedDevices
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setAssignedDevices($val)
    {
		$this->_propDict["assignedDevices"] = $val;
        return $this;
    }
    
}