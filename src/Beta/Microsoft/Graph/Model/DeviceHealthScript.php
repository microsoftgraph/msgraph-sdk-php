<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScript File
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
* DeviceHealthScript class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScript extends Entity
{
    /**
    * Gets the createdDateTime
    * The timestamp of when the device health script was created. This property is read-only.
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
    * The timestamp of when the device health script was created. This property is read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceHealthScript
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the device health script
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
    * Description of the device health script
    *
    * @param string $val The description
    *
    * @return DeviceHealthScript
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the detectionScriptContent
    * The entire content of the detection powershell script
    *
    * @return \GuzzleHttp\Psr7\Stream The detectionScriptContent
    */
    public function getDetectionScriptContent()
    {
        if (array_key_exists("detectionScriptContent", $this->_propDict)) {
            if (is_a($this->_propDict["detectionScriptContent"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["detectionScriptContent"];
            } else {
                $this->_propDict["detectionScriptContent"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["detectionScriptContent"]);
                return $this->_propDict["detectionScriptContent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the detectionScriptContent
    * The entire content of the detection powershell script
    *
    * @param \GuzzleHttp\Psr7\Stream $val The detectionScriptContent
    *
    * @return DeviceHealthScript
    */
    public function setDetectionScriptContent($val)
    {
        $this->_propDict["detectionScriptContent"] = $val;
        return $this;
    }
    

     /** 
     * Gets the detectionScriptParameters
    * List of ComplexType DetectionScriptParameters objects.
     *
     * @return array The detectionScriptParameters
     */
    public function getDetectionScriptParameters()
    {
        if (array_key_exists("detectionScriptParameters", $this->_propDict)) {
           return $this->_propDict["detectionScriptParameters"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the detectionScriptParameters
    * List of ComplexType DetectionScriptParameters objects.
    *
    * @param DeviceHealthScriptParameter $val The detectionScriptParameters
    *
    * @return DeviceHealthScript
    */
    public function setDetectionScriptParameters($val)
    {
		$this->_propDict["detectionScriptParameters"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of the device health script
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
    * Name of the device health script
    *
    * @param string $val The displayName
    *
    * @return DeviceHealthScript
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the enforceSignatureCheck
    * Indicate whether the script signature needs be checked
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
    * Indicate whether the script signature needs be checked
    *
    * @param bool $val The enforceSignatureCheck
    *
    * @return DeviceHealthScript
    */
    public function setEnforceSignatureCheck($val)
    {
        $this->_propDict["enforceSignatureCheck"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the highestAvailableVersion
    * Highest available version for a Microsoft Proprietary script
    *
    * @return string The highestAvailableVersion
    */
    public function getHighestAvailableVersion()
    {
        if (array_key_exists("highestAvailableVersion", $this->_propDict)) {
            return $this->_propDict["highestAvailableVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the highestAvailableVersion
    * Highest available version for a Microsoft Proprietary script
    *
    * @param string $val The highestAvailableVersion
    *
    * @return DeviceHealthScript
    */
    public function setHighestAvailableVersion($val)
    {
        $this->_propDict["highestAvailableVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the isGlobalScript
    * Determines if this is Microsoft Proprietary Script. Proprietary scripts are read-only
    *
    * @return bool The isGlobalScript
    */
    public function getIsGlobalScript()
    {
        if (array_key_exists("isGlobalScript", $this->_propDict)) {
            return $this->_propDict["isGlobalScript"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isGlobalScript
    * Determines if this is Microsoft Proprietary Script. Proprietary scripts are read-only
    *
    * @param bool $val The isGlobalScript
    *
    * @return DeviceHealthScript
    */
    public function setIsGlobalScript($val)
    {
        $this->_propDict["isGlobalScript"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The timestamp of when the device health script was modified. This property is read-only.
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
    * The timestamp of when the device health script was modified. This property is read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceHealthScript
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisher
    * Name of the device health script publisher
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisher
    * Name of the device health script publisher
    *
    * @param string $val The publisher
    *
    * @return DeviceHealthScript
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the remediationScriptContent
    * The entire content of the remediation powershell script
    *
    * @return \GuzzleHttp\Psr7\Stream The remediationScriptContent
    */
    public function getRemediationScriptContent()
    {
        if (array_key_exists("remediationScriptContent", $this->_propDict)) {
            if (is_a($this->_propDict["remediationScriptContent"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["remediationScriptContent"];
            } else {
                $this->_propDict["remediationScriptContent"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["remediationScriptContent"]);
                return $this->_propDict["remediationScriptContent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the remediationScriptContent
    * The entire content of the remediation powershell script
    *
    * @param \GuzzleHttp\Psr7\Stream $val The remediationScriptContent
    *
    * @return DeviceHealthScript
    */
    public function setRemediationScriptContent($val)
    {
        $this->_propDict["remediationScriptContent"] = $val;
        return $this;
    }
    

     /** 
     * Gets the remediationScriptParameters
    * List of ComplexType RemediationScriptParameters objects.
     *
     * @return array The remediationScriptParameters
     */
    public function getRemediationScriptParameters()
    {
        if (array_key_exists("remediationScriptParameters", $this->_propDict)) {
           return $this->_propDict["remediationScriptParameters"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the remediationScriptParameters
    * List of ComplexType RemediationScriptParameters objects.
    *
    * @param DeviceHealthScriptParameter $val The remediationScriptParameters
    *
    * @return DeviceHealthScript
    */
    public function setRemediationScriptParameters($val)
    {
		$this->_propDict["remediationScriptParameters"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tag IDs for the device health script
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
    * List of Scope Tag IDs for the device health script
    *
    * @param string $val The roleScopeTagIds
    *
    * @return DeviceHealthScript
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the runAs32Bit
    * Indicate whether PowerShell script(s) should run as 32-bit
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
    * Indicate whether PowerShell script(s) should run as 32-bit
    *
    * @param bool $val The runAs32Bit
    *
    * @return DeviceHealthScript
    */
    public function setRunAs32Bit($val)
    {
        $this->_propDict["runAs32Bit"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the runAsAccount
    * Indicates the type of execution context
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
    * Indicates the type of execution context
    *
    * @param RunAsAccountType $val The runAsAccount
    *
    * @return DeviceHealthScript
    */
    public function setRunAsAccount($val)
    {
        $this->_propDict["runAsAccount"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * Version of the device health script
    *
    * @return string The version
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
    * Version of the device health script
    *
    * @param string $val The version
    *
    * @return DeviceHealthScript
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of group assignments for the device health script
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
    * The list of group assignments for the device health script
    *
    * @param DeviceHealthScriptAssignment $val The assignments
    *
    * @return DeviceHealthScript
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceRunStates
    * List of run states for the device health script across all devices
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
    * List of run states for the device health script across all devices
    *
    * @param DeviceHealthScriptDeviceState $val The deviceRunStates
    *
    * @return DeviceHealthScript
    */
    public function setDeviceRunStates($val)
    {
		$this->_propDict["deviceRunStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the runSummary
    * High level run summary for device health script.
    *
    * @return DeviceHealthScriptRunSummary The runSummary
    */
    public function getRunSummary()
    {
        if (array_key_exists("runSummary", $this->_propDict)) {
            if (is_a($this->_propDict["runSummary"], "Beta\Microsoft\Graph\Model\DeviceHealthScriptRunSummary")) {
                return $this->_propDict["runSummary"];
            } else {
                $this->_propDict["runSummary"] = new DeviceHealthScriptRunSummary($this->_propDict["runSummary"]);
                return $this->_propDict["runSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the runSummary
    * High level run summary for device health script.
    *
    * @param DeviceHealthScriptRunSummary $val The runSummary
    *
    * @return DeviceHealthScript
    */
    public function setRunSummary($val)
    {
        $this->_propDict["runSummary"] = $val;
        return $this;
    }
    
}