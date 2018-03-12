<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementScript File
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
* DeviceManagementScript class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementScript extends Entity
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
    * @return DeviceManagementScript
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
    * @return DeviceManagementScript
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the runSchedule
    *
    * @return RunSchedule The runSchedule
    */
    public function getRunSchedule()
    {
        if (array_key_exists("runSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["runSchedule"], "Microsoft\Graph\Beta\Model\RunSchedule")) {
                return $this->_propDict["runSchedule"];
            } else {
                $this->_propDict["runSchedule"] = new RunSchedule($this->_propDict["runSchedule"]);
                return $this->_propDict["runSchedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the runSchedule
    *
    * @param RunSchedule $val The runSchedule
    *
    * @return DeviceManagementScript
    */
    public function setRunSchedule($val)
    {
        $this->_propDict["runSchedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the scriptContent
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
    * @return DeviceManagementScript
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
    * @return DeviceManagementScript
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the runAsAccount
    *
    * @return RunAsAccountType The runAsAccount
    */
    public function getRunAsAccount()
    {
        if (array_key_exists("runAsAccount", $this->_propDict)) {
            if (is_a($this->_propDict["runAsAccount"], "Microsoft\Graph\Beta\Model\RunAsAccountType")) {
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
    * Gets the enforceSignatureCheck
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
     * Gets the groupAssignments
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
    * Gets the runSummary
    *
    * @return DeviceManagementScriptRunSummary The runSummary
    */
    public function getRunSummary()
    {
        if (array_key_exists("runSummary", $this->_propDict)) {
            if (is_a($this->_propDict["runSummary"], "Microsoft\Graph\Beta\Model\DeviceManagementScriptRunSummary")) {
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
     * Gets the deviceRunStates
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
     * Gets the userRunStates
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