<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementAutopilotPolicyStatusDetail File
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
* DeviceManagementAutopilotPolicyStatusDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementAutopilotPolicyStatusDetail extends Entity
{
    /**
    * Gets the complianceStatus
    * The policy compliance status.
    *
    * @return DeviceManagementAutopilotPolicyComplianceStatus The complianceStatus
    */
    public function getComplianceStatus()
    {
        if (array_key_exists("complianceStatus", $this->_propDict)) {
            if (is_a($this->_propDict["complianceStatus"], "Beta\Microsoft\Graph\Model\DeviceManagementAutopilotPolicyComplianceStatus")) {
                return $this->_propDict["complianceStatus"];
            } else {
                $this->_propDict["complianceStatus"] = new DeviceManagementAutopilotPolicyComplianceStatus($this->_propDict["complianceStatus"]);
                return $this->_propDict["complianceStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the complianceStatus
    * The policy compliance status.
    *
    * @param DeviceManagementAutopilotPolicyComplianceStatus $val The complianceStatus
    *
    * @return DeviceManagementAutopilotPolicyStatusDetail
    */
    public function setComplianceStatus($val)
    {
        $this->_propDict["complianceStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The friendly name of the policy.
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
    * The friendly name of the policy.
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementAutopilotPolicyStatusDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastReportedDateTime
    * Timestamp of the reported policy status
    *
    * @return \DateTime The lastReportedDateTime
    */
    public function getLastReportedDateTime()
    {
        if (array_key_exists("lastReportedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastReportedDateTime"], "\DateTime")) {
                return $this->_propDict["lastReportedDateTime"];
            } else {
                $this->_propDict["lastReportedDateTime"] = new \DateTime($this->_propDict["lastReportedDateTime"]);
                return $this->_propDict["lastReportedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastReportedDateTime
    * Timestamp of the reported policy status
    *
    * @param \DateTime $val The lastReportedDateTime
    *
    * @return DeviceManagementAutopilotPolicyStatusDetail
    */
    public function setLastReportedDateTime($val)
    {
        $this->_propDict["lastReportedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the policyType
    * The type of policy.
    *
    * @return DeviceManagementAutopilotPolicyType The policyType
    */
    public function getPolicyType()
    {
        if (array_key_exists("policyType", $this->_propDict)) {
            if (is_a($this->_propDict["policyType"], "Beta\Microsoft\Graph\Model\DeviceManagementAutopilotPolicyType")) {
                return $this->_propDict["policyType"];
            } else {
                $this->_propDict["policyType"] = new DeviceManagementAutopilotPolicyType($this->_propDict["policyType"]);
                return $this->_propDict["policyType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the policyType
    * The type of policy.
    *
    * @param DeviceManagementAutopilotPolicyType $val The policyType
    *
    * @return DeviceManagementAutopilotPolicyStatusDetail
    */
    public function setPolicyType($val)
    {
        $this->_propDict["policyType"] = $val;
        return $this;
    }
    
    /**
    * Gets the trackedOnEnrollmentStatus
    * Indicates if this prolicy was tracked as part of the autopilot bootstrap enrollment sync session
    *
    * @return bool The trackedOnEnrollmentStatus
    */
    public function getTrackedOnEnrollmentStatus()
    {
        if (array_key_exists("trackedOnEnrollmentStatus", $this->_propDict)) {
            return $this->_propDict["trackedOnEnrollmentStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the trackedOnEnrollmentStatus
    * Indicates if this prolicy was tracked as part of the autopilot bootstrap enrollment sync session
    *
    * @param bool $val The trackedOnEnrollmentStatus
    *
    * @return DeviceManagementAutopilotPolicyStatusDetail
    */
    public function setTrackedOnEnrollmentStatus($val)
    {
        $this->_propDict["trackedOnEnrollmentStatus"] = boolval($val);
        return $this;
    }
    
}