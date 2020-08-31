<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisioningObjectSummary File
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
* ProvisioningObjectSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProvisioningObjectSummary extends Entity
{
    /**
    * Gets the activityDateTime
    *
    * @return \DateTime The activityDateTime
    */
    public function getActivityDateTime()
    {
        if (array_key_exists("activityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activityDateTime"], "\DateTime")) {
                return $this->_propDict["activityDateTime"];
            } else {
                $this->_propDict["activityDateTime"] = new \DateTime($this->_propDict["activityDateTime"]);
                return $this->_propDict["activityDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activityDateTime
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return ProvisioningObjectSummary
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantId
    *
    * @return string The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return ProvisioningObjectSummary
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the jobId
    *
    * @return string The jobId
    */
    public function getJobId()
    {
        if (array_key_exists("jobId", $this->_propDict)) {
            return $this->_propDict["jobId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the jobId
    *
    * @param string $val The jobId
    *
    * @return ProvisioningObjectSummary
    */
    public function setJobId($val)
    {
        $this->_propDict["jobId"] = $val;
        return $this;
    }
    
    /**
    * Gets the cycleId
    *
    * @return string The cycleId
    */
    public function getCycleId()
    {
        if (array_key_exists("cycleId", $this->_propDict)) {
            return $this->_propDict["cycleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cycleId
    *
    * @param string $val The cycleId
    *
    * @return ProvisioningObjectSummary
    */
    public function setCycleId($val)
    {
        $this->_propDict["cycleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the changeId
    *
    * @return string The changeId
    */
    public function getChangeId()
    {
        if (array_key_exists("changeId", $this->_propDict)) {
            return $this->_propDict["changeId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the changeId
    *
    * @param string $val The changeId
    *
    * @return ProvisioningObjectSummary
    */
    public function setChangeId($val)
    {
        $this->_propDict["changeId"] = $val;
        return $this;
    }
    
    /**
    * Gets the action
    *
    * @return string The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            return $this->_propDict["action"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the action
    *
    * @param string $val The action
    *
    * @return ProvisioningObjectSummary
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
        return $this;
    }
    
    /**
    * Gets the durationInMilliseconds
    *
    * @return int The durationInMilliseconds
    */
    public function getDurationInMilliseconds()
    {
        if (array_key_exists("durationInMilliseconds", $this->_propDict)) {
            return $this->_propDict["durationInMilliseconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the durationInMilliseconds
    *
    * @param int $val The durationInMilliseconds
    *
    * @return ProvisioningObjectSummary
    */
    public function setDurationInMilliseconds($val)
    {
        $this->_propDict["durationInMilliseconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the servicePrincipal
    *
    * @return ProvisioningServicePrincipal The servicePrincipal
    */
    public function getServicePrincipal()
    {
        if (array_key_exists("servicePrincipal", $this->_propDict)) {
            if (is_a($this->_propDict["servicePrincipal"], "Beta\Microsoft\Graph\Model\ProvisioningServicePrincipal")) {
                return $this->_propDict["servicePrincipal"];
            } else {
                $this->_propDict["servicePrincipal"] = new ProvisioningServicePrincipal($this->_propDict["servicePrincipal"]);
                return $this->_propDict["servicePrincipal"];
            }
        }
        return null;
    }
    
    /**
    * Sets the servicePrincipal
    *
    * @param ProvisioningServicePrincipal $val The servicePrincipal
    *
    * @return ProvisioningObjectSummary
    */
    public function setServicePrincipal($val)
    {
        $this->_propDict["servicePrincipal"] = $val;
        return $this;
    }
    
    /**
    * Gets the initiatedBy
    *
    * @return Initiator The initiatedBy
    */
    public function getInitiatedBy()
    {
        if (array_key_exists("initiatedBy", $this->_propDict)) {
            if (is_a($this->_propDict["initiatedBy"], "Beta\Microsoft\Graph\Model\Initiator")) {
                return $this->_propDict["initiatedBy"];
            } else {
                $this->_propDict["initiatedBy"] = new Initiator($this->_propDict["initiatedBy"]);
                return $this->_propDict["initiatedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the initiatedBy
    *
    * @param Initiator $val The initiatedBy
    *
    * @return ProvisioningObjectSummary
    */
    public function setInitiatedBy($val)
    {
        $this->_propDict["initiatedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the sourceSystem
    *
    * @return ProvisioningSystemDetails The sourceSystem
    */
    public function getSourceSystem()
    {
        if (array_key_exists("sourceSystem", $this->_propDict)) {
            if (is_a($this->_propDict["sourceSystem"], "Beta\Microsoft\Graph\Model\ProvisioningSystemDetails")) {
                return $this->_propDict["sourceSystem"];
            } else {
                $this->_propDict["sourceSystem"] = new ProvisioningSystemDetails($this->_propDict["sourceSystem"]);
                return $this->_propDict["sourceSystem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sourceSystem
    *
    * @param ProvisioningSystemDetails $val The sourceSystem
    *
    * @return ProvisioningObjectSummary
    */
    public function setSourceSystem($val)
    {
        $this->_propDict["sourceSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetSystem
    *
    * @return ProvisioningSystemDetails The targetSystem
    */
    public function getTargetSystem()
    {
        if (array_key_exists("targetSystem", $this->_propDict)) {
            if (is_a($this->_propDict["targetSystem"], "Beta\Microsoft\Graph\Model\ProvisioningSystemDetails")) {
                return $this->_propDict["targetSystem"];
            } else {
                $this->_propDict["targetSystem"] = new ProvisioningSystemDetails($this->_propDict["targetSystem"]);
                return $this->_propDict["targetSystem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the targetSystem
    *
    * @param ProvisioningSystemDetails $val The targetSystem
    *
    * @return ProvisioningObjectSummary
    */
    public function setTargetSystem($val)
    {
        $this->_propDict["targetSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the sourceIdentity
    *
    * @return ProvisionedIdentity The sourceIdentity
    */
    public function getSourceIdentity()
    {
        if (array_key_exists("sourceIdentity", $this->_propDict)) {
            if (is_a($this->_propDict["sourceIdentity"], "Beta\Microsoft\Graph\Model\ProvisionedIdentity")) {
                return $this->_propDict["sourceIdentity"];
            } else {
                $this->_propDict["sourceIdentity"] = new ProvisionedIdentity($this->_propDict["sourceIdentity"]);
                return $this->_propDict["sourceIdentity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sourceIdentity
    *
    * @param ProvisionedIdentity $val The sourceIdentity
    *
    * @return ProvisioningObjectSummary
    */
    public function setSourceIdentity($val)
    {
        $this->_propDict["sourceIdentity"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetIdentity
    *
    * @return ProvisionedIdentity The targetIdentity
    */
    public function getTargetIdentity()
    {
        if (array_key_exists("targetIdentity", $this->_propDict)) {
            if (is_a($this->_propDict["targetIdentity"], "Beta\Microsoft\Graph\Model\ProvisionedIdentity")) {
                return $this->_propDict["targetIdentity"];
            } else {
                $this->_propDict["targetIdentity"] = new ProvisionedIdentity($this->_propDict["targetIdentity"]);
                return $this->_propDict["targetIdentity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the targetIdentity
    *
    * @param ProvisionedIdentity $val The targetIdentity
    *
    * @return ProvisioningObjectSummary
    */
    public function setTargetIdentity($val)
    {
        $this->_propDict["targetIdentity"] = $val;
        return $this;
    }
    
    /**
    * Gets the statusInfo
    *
    * @return StatusBase The statusInfo
    */
    public function getStatusInfo()
    {
        if (array_key_exists("statusInfo", $this->_propDict)) {
            if (is_a($this->_propDict["statusInfo"], "Beta\Microsoft\Graph\Model\StatusBase")) {
                return $this->_propDict["statusInfo"];
            } else {
                $this->_propDict["statusInfo"] = new StatusBase($this->_propDict["statusInfo"]);
                return $this->_propDict["statusInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the statusInfo
    *
    * @param StatusBase $val The statusInfo
    *
    * @return ProvisioningObjectSummary
    */
    public function setStatusInfo($val)
    {
        $this->_propDict["statusInfo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisioningSteps
     *
     * @return array The provisioningSteps
     */
    public function getProvisioningSteps()
    {
        if (array_key_exists("provisioningSteps", $this->_propDict)) {
           return $this->_propDict["provisioningSteps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the provisioningSteps
    *
    * @param ProvisioningStep $val The provisioningSteps
    *
    * @return ProvisioningObjectSummary
    */
    public function setProvisioningSteps($val)
    {
		$this->_propDict["provisioningSteps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the modifiedProperties
     *
     * @return array The modifiedProperties
     */
    public function getModifiedProperties()
    {
        if (array_key_exists("modifiedProperties", $this->_propDict)) {
           return $this->_propDict["modifiedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the modifiedProperties
    *
    * @param ModifiedProperty $val The modifiedProperties
    *
    * @return ProvisioningObjectSummary
    */
    public function setModifiedProperties($val)
    {
		$this->_propDict["modifiedProperties"] = $val;
        return $this;
    }
    
}