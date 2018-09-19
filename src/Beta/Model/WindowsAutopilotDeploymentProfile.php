<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotDeploymentProfile File
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
* WindowsAutopilotDeploymentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
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
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
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
    * Gets the enrollmentStatusScreenSettings
    *
    * @return WindowsEnrollmentStatusScreenSettings The enrollmentStatusScreenSettings
    */
    public function getEnrollmentStatusScreenSettings()
    {
        if (array_key_exists("enrollmentStatusScreenSettings", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentStatusScreenSettings"], "Microsoft\Graph\Beta\Model\WindowsEnrollmentStatusScreenSettings")) {
                return $this->_propDict["enrollmentStatusScreenSettings"];
            } else {
                $this->_propDict["enrollmentStatusScreenSettings"] = new WindowsEnrollmentStatusScreenSettings($this->_propDict["enrollmentStatusScreenSettings"]);
                return $this->_propDict["enrollmentStatusScreenSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enrollmentStatusScreenSettings
    *
    * @param WindowsEnrollmentStatusScreenSettings $val The enrollmentStatusScreenSettings
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setEnrollmentStatusScreenSettings($val)
    {
        $this->_propDict["enrollmentStatusScreenSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the extractHardwareHash
    *
    * @return bool The extractHardwareHash
    */
    public function getExtractHardwareHash()
    {
        if (array_key_exists("extractHardwareHash", $this->_propDict)) {
            return $this->_propDict["extractHardwareHash"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the extractHardwareHash
    *
    * @param bool $val The extractHardwareHash
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setExtractHardwareHash($val)
    {
        $this->_propDict["extractHardwareHash"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceNameTemplate
    *
    * @return string The deviceNameTemplate
    */
    public function getDeviceNameTemplate()
    {
        if (array_key_exists("deviceNameTemplate", $this->_propDict)) {
            return $this->_propDict["deviceNameTemplate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceNameTemplate
    *
    * @param string $val The deviceNameTemplate
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setDeviceNameTemplate($val)
    {
        $this->_propDict["deviceNameTemplate"] = $val;
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
    * @param WindowsAutopilotDeploymentProfileAssignment $val The assignments
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}