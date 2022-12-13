<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* AlertEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertEvidence extends \Microsoft\Graph\Model\Entity
{

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
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
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return AlertEvidence The AlertEvidence
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the remediationStatus
    *
    * @return EvidenceRemediationStatus|null The remediationStatus
    */
    public function getRemediationStatus()
    {
        if (array_key_exists("remediationStatus", $this->_propDict)) {
            if (is_a($this->_propDict["remediationStatus"], "\Microsoft\Graph\SecurityNamespace\Model\EvidenceRemediationStatus") || is_null($this->_propDict["remediationStatus"])) {
                return $this->_propDict["remediationStatus"];
            } else {
                $this->_propDict["remediationStatus"] = new EvidenceRemediationStatus($this->_propDict["remediationStatus"]);
                return $this->_propDict["remediationStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the remediationStatus
    *
    * @param EvidenceRemediationStatus $val The value to assign to the remediationStatus
    *
    * @return AlertEvidence The AlertEvidence
    */
    public function setRemediationStatus($val)
    {
        $this->_propDict["remediationStatus"] = $val;
         return $this;
    }
    /**
    * Gets the remediationStatusDetails
    *
    * @return string|null The remediationStatusDetails
    */
    public function getRemediationStatusDetails()
    {
        if (array_key_exists("remediationStatusDetails", $this->_propDict)) {
            return $this->_propDict["remediationStatusDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remediationStatusDetails
    *
    * @param string $val The value of the remediationStatusDetails
    *
    * @return AlertEvidence
    */
    public function setRemediationStatusDetails($val)
    {
        $this->_propDict["remediationStatusDetails"] = $val;
        return $this;
    }

    /**
    * Gets the roles
    *
    * @return EvidenceRole|null The roles
    */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
            if (is_a($this->_propDict["roles"], "\Microsoft\Graph\SecurityNamespace\Model\EvidenceRole") || is_null($this->_propDict["roles"])) {
                return $this->_propDict["roles"];
            } else {
                $this->_propDict["roles"] = new EvidenceRole($this->_propDict["roles"]);
                return $this->_propDict["roles"];
            }
        }
        return null;
    }

    /**
    * Sets the roles
    *
    * @param EvidenceRole $val The value to assign to the roles
    *
    * @return AlertEvidence The AlertEvidence
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
         return $this;
    }
    /**
    * Gets the tags
    *
    * @return string|null The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tags
    *
    * @param string $val The value of the tags
    *
    * @return AlertEvidence
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

    /**
    * Gets the verdict
    *
    * @return EvidenceVerdict|null The verdict
    */
    public function getVerdict()
    {
        if (array_key_exists("verdict", $this->_propDict)) {
            if (is_a($this->_propDict["verdict"], "\Microsoft\Graph\SecurityNamespace\Model\EvidenceVerdict") || is_null($this->_propDict["verdict"])) {
                return $this->_propDict["verdict"];
            } else {
                $this->_propDict["verdict"] = new EvidenceVerdict($this->_propDict["verdict"]);
                return $this->_propDict["verdict"];
            }
        }
        return null;
    }

    /**
    * Sets the verdict
    *
    * @param EvidenceVerdict $val The value to assign to the verdict
    *
    * @return AlertEvidence The AlertEvidence
    */
    public function setVerdict($val)
    {
        $this->_propDict["verdict"] = $val;
         return $this;
    }
}
