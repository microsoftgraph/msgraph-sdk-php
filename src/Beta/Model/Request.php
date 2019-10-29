<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Request File
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
* Request class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Request extends Entity
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
    * @return Request
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
    * @return Request
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The startDateTime
    *
    * @return Request
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDateTime
    *
    * @param \DateTime $val The endDateTime
    *
    * @return Request
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    *
    * @param string $val The status
    *
    * @return Request
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessFlowId
    *
    * @return string The businessFlowId
    */
    public function getBusinessFlowId()
    {
        if (array_key_exists("businessFlowId", $this->_propDict)) {
            return $this->_propDict["businessFlowId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessFlowId
    *
    * @param string $val The businessFlowId
    *
    * @return Request
    */
    public function setBusinessFlowId($val)
    {
        $this->_propDict["businessFlowId"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    *
    * @return UserIdentity The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "Microsoft\Graph\Beta\Model\UserIdentity")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new UserIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    *
    * @param UserIdentity $val The createdBy
    *
    * @return Request
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the deDuplicationId
    *
    * @return string The deDuplicationId
    */
    public function getDeDuplicationId()
    {
        if (array_key_exists("deDuplicationId", $this->_propDict)) {
            return $this->_propDict["deDuplicationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deDuplicationId
    *
    * @param string $val The deDuplicationId
    *
    * @return Request
    */
    public function setDeDuplicationId($val)
    {
        $this->_propDict["deDuplicationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the schemaId
    *
    * @return string The schemaId
    */
    public function getSchemaId()
    {
        if (array_key_exists("schemaId", $this->_propDict)) {
            return $this->_propDict["schemaId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the schemaId
    *
    * @param string $val The schemaId
    *
    * @return Request
    */
    public function setSchemaId($val)
    {
        $this->_propDict["schemaId"] = $val;
        return $this;
    }
    
    /**
    * Gets the customData
    *
    * @return string The customData
    */
    public function getCustomData()
    {
        if (array_key_exists("customData", $this->_propDict)) {
            return $this->_propDict["customData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customData
    *
    * @param string $val The customData
    *
    * @return Request
    */
    public function setCustomData($val)
    {
        $this->_propDict["customData"] = $val;
        return $this;
    }
    
    /**
    * Gets the recordVersion
    *
    * @return string The recordVersion
    */
    public function getRecordVersion()
    {
        if (array_key_exists("recordVersion", $this->_propDict)) {
            return $this->_propDict["recordVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recordVersion
    *
    * @param string $val The recordVersion
    *
    * @return Request
    */
    public function setRecordVersion($val)
    {
        $this->_propDict["recordVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the policyTemplateId
    *
    * @return string The policyTemplateId
    */
    public function getPolicyTemplateId()
    {
        if (array_key_exists("policyTemplateId", $this->_propDict)) {
            return $this->_propDict["policyTemplateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the policyTemplateId
    *
    * @param string $val The policyTemplateId
    *
    * @return Request
    */
    public function setPolicyTemplateId($val)
    {
        $this->_propDict["policyTemplateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the policy
    *
    * @return GovernancePolicy The policy
    */
    public function getPolicy()
    {
        if (array_key_exists("policy", $this->_propDict)) {
            if (is_a($this->_propDict["policy"], "Microsoft\Graph\Beta\Model\GovernancePolicy")) {
                return $this->_propDict["policy"];
            } else {
                $this->_propDict["policy"] = new GovernancePolicy($this->_propDict["policy"]);
                return $this->_propDict["policy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the policy
    *
    * @param GovernancePolicy $val The policy
    *
    * @return Request
    */
    public function setPolicy($val)
    {
        $this->_propDict["policy"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    *
    * @return AccessReviewSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "Microsoft\Graph\Beta\Model\AccessReviewSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new AccessReviewSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    *
    * @param AccessReviewSettings $val The settings
    *
    * @return Request
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the decisions
     *
     * @return array The decisions
     */
    public function getDecisions()
    {
        if (array_key_exists("decisions", $this->_propDict)) {
           return $this->_propDict["decisions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the decisions
    *
    * @param AccessReviewDecision $val The decisions
    *
    * @return Request
    */
    public function setDecisions($val)
    {
		$this->_propDict["decisions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the myDecisions
     *
     * @return array The myDecisions
     */
    public function getMyDecisions()
    {
        if (array_key_exists("myDecisions", $this->_propDict)) {
           return $this->_propDict["myDecisions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the myDecisions
    *
    * @param AccessReviewDecision $val The myDecisions
    *
    * @return Request
    */
    public function setMyDecisions($val)
    {
		$this->_propDict["myDecisions"] = $val;
        return $this;
    }
    
}