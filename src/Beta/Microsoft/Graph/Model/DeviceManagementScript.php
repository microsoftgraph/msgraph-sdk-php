<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementScript File
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
* DeviceManagementScript class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementScript extends Entity
{
    /**
    * Gets the createdDateTime
    * The date and time the device management script was created. This property is read-only.
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
    * The date and time the device management script was created. This property is read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceManagementScript
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Optional description for the device management script.
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
    * Optional description for the device management script.
    *
    * @param string $val The description
    *
    * @return DeviceManagementScript
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of the device management script.
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
    * Name of the device management script.
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementScript
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the enforceSignatureCheck
    * Indicate whether the script signature needs be checked.
    *
    * @return bool The enforceSignatureCheck
    */
    public function getEnforceSignatureCheck()
    {
        if (array_key_exists("enforceSignatureCheck", $this->_propDict)) {
            return $this->_propDict["enforceSignatureCheck"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enforceSignatureCheck
    * Indicate whether the script signature needs be checked.
    *
    * @param bool $val The enforceSignatureCheck
    *
    * @return DeviceManagementScript
    */
    public function setEnforceSignatureCheck($val)
    {
        $this->_propDict["enforceSignatureCheck"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fileName
    * Script file name.
    *
    * @return string The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileName
    * Script file name.
    *
    * @param string $val The fileName
    *
    * @return DeviceManagementScript
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time the device management script was last modified. This property is read-only.
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
    * The date and time the device management script was last modified. This property is read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceManagementScript
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tag IDs for this PowerShellScript instance.
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    * List of Scope Tag IDs for this PowerShellScript instance.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return DeviceManagementScript
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the runAs32Bit
    * A value indicating whether the PowerShell script should run as 32-bit
    *
    * @return bool The runAs32Bit
    */
    public function getRunAs32Bit()
    {
        if (array_key_exists("runAs32Bit", $this->_propDict)) {
            return $this->_propDict["runAs32Bit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the runAs32Bit
    * A value indicating whether the PowerShell script should run as 32-bit
    *
    * @param bool $val The runAs32Bit
    *
    * @return DeviceManagementScript
    */
    public function setRunAs32Bit($val)
    {
        $this->_propDict["runAs32Bit"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the runAsAccount
    * Indicates the type of execution context.
    *
    * @return RunAsAccountType The runAsAccount
    */
    public function getRunAsAccount()
    {
        if (array_key_exists("runAsAccount", $this->_propDict)) {
            if (is_a($this->_propDict["runAsAccount"], "Beta\Microsoft\Graph\Model\RunAsAccountType")) {
                return $this->_propDict["runAsAccount"];
            } else {
                $this->_propDict["runAsAccount"] = new RunAsAccountType($this->_propDict["runAsAccount"]);
                return $this->_propDict["runAsAccount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the runAsAccount
    * Indicates the type of execution context.
    *
    * @param RunAsAccountType $val The runAsAccount
    *
    * @return DeviceManagementScript
    */
    public function setRunAsAccount($val)
    {
        $this->_propDict["runAsAccount"] = $val;
        return $this;
    }
    
    /**
    * Gets the scriptContent
    * The script content.
    *
    * @return \GuzzleHttp\Psr7\Stream The scriptContent
    */
    public function getScriptContent()
    {
        if (array_key_exists("scriptContent", $this->_propDict)) {
            if (is_a($this->_propDict["scriptContent"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["scriptContent"];
            } else {
                $this->_propDict["scriptContent"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["scriptContent"]);
                return $this->_propDict["scriptContent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the scriptContent
    * The script content.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The scriptContent
    *
    * @return DeviceManagementScript
    */
    public function setScriptContent($val)
    {
        $this->_propDict["scriptContent"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of group assignments for the device management script.
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
    * The list of group assignments for the device management script.
    *
    * @param DeviceManagementScriptAssignment $val The assignments
    *
    * @return DeviceManagementScript
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceRunStates
    * List of run states for this script across all devices.
     *
     * @return array The deviceRunStates
     */
    public function getDeviceRunStates()
    {
        if (array_key_exists("deviceRunStates", $this->_propDict)) {
           return $this->_propDict["deviceRunStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceRunStates
    * List of run states for this script across all devices.
    *
    * @param DeviceManagementScriptDeviceState $val The deviceRunStates
    *
    * @return DeviceManagementScript
    */
    public function setDeviceRunStates($val)
    {
		$this->_propDict["deviceRunStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupAssignments
    * The list of group assignments for the device management script.
     *
     * @return array The groupAssignments
     */
    public function getGroupAssignments()
    {
        if (array_key_exists("groupAssignments", $this->_propDict)) {
           return $this->_propDict["groupAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groupAssignments
    * The list of group assignments for the device management script.
    *
    * @param DeviceManagementScriptGroupAssignment $val The groupAssignments
    *
    * @return DeviceManagementScript
    */
    public function setGroupAssignments($val)
    {
		$this->_propDict["groupAssignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the runSummary
    * Run summary for device management script.
    *
    * @return DeviceManagementScriptRunSummary The runSummary
    */
    public function getRunSummary()
    {
        if (array_key_exists("runSummary", $this->_propDict)) {
            if (is_a($this->_propDict["runSummary"], "Beta\Microsoft\Graph\Model\DeviceManagementScriptRunSummary")) {
                return $this->_propDict["runSummary"];
            } else {
                $this->_propDict["runSummary"] = new DeviceManagementScriptRunSummary($this->_propDict["runSummary"]);
                return $this->_propDict["runSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the runSummary
    * Run summary for device management script.
    *
    * @param DeviceManagementScriptRunSummary $val The runSummary
    *
    * @return DeviceManagementScript
    */
    public function setRunSummary($val)
    {
        $this->_propDict["runSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userRunStates
    * List of run states for this script across all users.
     *
     * @return array The userRunStates
     */
    public function getUserRunStates()
    {
        if (array_key_exists("userRunStates", $this->_propDict)) {
           return $this->_propDict["userRunStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userRunStates
    * List of run states for this script across all users.
    *
    * @param DeviceManagementScriptUserState $val The userRunStates
    *
    * @return DeviceManagementScript
    */
    public function setUserRunStates($val)
    {
		$this->_propDict["userRunStates"] = $val;
        return $this;
    }
    
}