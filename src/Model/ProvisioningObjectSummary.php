<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisioningObjectSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* ProvisioningObjectSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProvisioningObjectSummary extends Entity
{
    /**
    * Gets the activityDateTime
    * Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  SUpports $filter (eq, gt, lt) and orderby.
    *
    * @return \DateTime|null The activityDateTime
    */
    public function getActivityDateTime()
    {
        if (array_key_exists("activityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activityDateTime"], "\DateTime") || is_null($this->_propDict["activityDateTime"])) {
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
    * Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  SUpports $filter (eq, gt, lt) and orderby.
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
    * Gets the changeId
    * Unique ID of this change in this cycle. Supports $filter (eq, contains).
    *
    * @return string|null The changeId
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
    * Unique ID of this change in this cycle. Supports $filter (eq, contains).
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
    * Gets the cycleId
    * Unique ID per job iteration. Supports $filter (eq, contains).
    *
    * @return string|null The cycleId
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
    * Unique ID per job iteration. Supports $filter (eq, contains).
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
    * Gets the durationInMilliseconds
    * Indicates how long this provisioning action took to finish. Measured in milliseconds.
    *
    * @return int|null The durationInMilliseconds
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
    * Indicates how long this provisioning action took to finish. Measured in milliseconds.
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
    * Gets the initiatedBy
    * Details of who initiated this provisioning. Supports $filter (eq, contains).
    *
    * @return Initiator|null The initiatedBy
    */
    public function getInitiatedBy()
    {
        if (array_key_exists("initiatedBy", $this->_propDict)) {
            if (is_a($this->_propDict["initiatedBy"], "\Microsoft\Graph\Model\Initiator") || is_null($this->_propDict["initiatedBy"])) {
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
    * Details of who initiated this provisioning. Supports $filter (eq, contains).
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
    * Gets the jobId
    * The unique ID for the whole provisioning job. Supports $filter (eq, contains).
    *
    * @return string|null The jobId
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
    * The unique ID for the whole provisioning job. Supports $filter (eq, contains).
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
     * Gets the modifiedProperties
    * Details of each property that was modified in this provisioning action on this object.
     *
     * @return array|null The modifiedProperties
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
    * Details of each property that was modified in this provisioning action on this object.
    *
    * @param ModifiedProperty[] $val The modifiedProperties
    *
    * @return ProvisioningObjectSummary
    */
    public function setModifiedProperties($val)
    {
        $this->_propDict["modifiedProperties"] = $val;
        return $this;
    }

    /**
    * Gets the provisioningAction
    * Indicates the activity name or the operation name. Possible values are: create, update, delete, stageddelete, disable, other and unknownFutureValue. For a list of activities logged, refer to Microsoft Entra activity list. Supports $filter (eq, contains).
    *
    * @return ProvisioningAction|null The provisioningAction
    */
    public function getProvisioningAction()
    {
        if (array_key_exists("provisioningAction", $this->_propDict)) {
            if (is_a($this->_propDict["provisioningAction"], "\Microsoft\Graph\Model\ProvisioningAction") || is_null($this->_propDict["provisioningAction"])) {
                return $this->_propDict["provisioningAction"];
            } else {
                $this->_propDict["provisioningAction"] = new ProvisioningAction($this->_propDict["provisioningAction"]);
                return $this->_propDict["provisioningAction"];
            }
        }
        return null;
    }

    /**
    * Sets the provisioningAction
    * Indicates the activity name or the operation name. Possible values are: create, update, delete, stageddelete, disable, other and unknownFutureValue. For a list of activities logged, refer to Microsoft Entra activity list. Supports $filter (eq, contains).
    *
    * @param ProvisioningAction $val The provisioningAction
    *
    * @return ProvisioningObjectSummary
    */
    public function setProvisioningAction($val)
    {
        $this->_propDict["provisioningAction"] = $val;
        return $this;
    }

    /**
    * Gets the provisioningStatusInfo
    * Details of provisioning status.
    *
    * @return ProvisioningStatusInfo|null The provisioningStatusInfo
    */
    public function getProvisioningStatusInfo()
    {
        if (array_key_exists("provisioningStatusInfo", $this->_propDict)) {
            if (is_a($this->_propDict["provisioningStatusInfo"], "\Microsoft\Graph\Model\ProvisioningStatusInfo") || is_null($this->_propDict["provisioningStatusInfo"])) {
                return $this->_propDict["provisioningStatusInfo"];
            } else {
                $this->_propDict["provisioningStatusInfo"] = new ProvisioningStatusInfo($this->_propDict["provisioningStatusInfo"]);
                return $this->_propDict["provisioningStatusInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the provisioningStatusInfo
    * Details of provisioning status.
    *
    * @param ProvisioningStatusInfo $val The provisioningStatusInfo
    *
    * @return ProvisioningObjectSummary
    */
    public function setProvisioningStatusInfo($val)
    {
        $this->_propDict["provisioningStatusInfo"] = $val;
        return $this;
    }


     /**
     * Gets the provisioningSteps
    * Details of each step in provisioning.
     *
     * @return array|null The provisioningSteps
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
    * Details of each step in provisioning.
    *
    * @param ProvisioningStep[] $val The provisioningSteps
    *
    * @return ProvisioningObjectSummary
    */
    public function setProvisioningSteps($val)
    {
        $this->_propDict["provisioningSteps"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipal
    * Represents the service principal used for provisioning. Supports $filter (eq) for id and name.
    *
    * @return ProvisioningServicePrincipal|null The servicePrincipal
    */
    public function getServicePrincipal()
    {
        if (array_key_exists("servicePrincipal", $this->_propDict)) {
            if (is_a($this->_propDict["servicePrincipal"], "\Microsoft\Graph\Model\ProvisioningServicePrincipal") || is_null($this->_propDict["servicePrincipal"])) {
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
    * Represents the service principal used for provisioning. Supports $filter (eq) for id and name.
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
    * Gets the sourceIdentity
    * Details of source object being provisioned. Supports $filter (eq, contains) for identityType, id, and displayName.
    *
    * @return ProvisionedIdentity|null The sourceIdentity
    */
    public function getSourceIdentity()
    {
        if (array_key_exists("sourceIdentity", $this->_propDict)) {
            if (is_a($this->_propDict["sourceIdentity"], "\Microsoft\Graph\Model\ProvisionedIdentity") || is_null($this->_propDict["sourceIdentity"])) {
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
    * Details of source object being provisioned. Supports $filter (eq, contains) for identityType, id, and displayName.
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
    * Gets the sourceSystem
    * Details of source system of the object being provisioned. Supports $filter (eq, contains) for displayName.
    *
    * @return ProvisioningSystem|null The sourceSystem
    */
    public function getSourceSystem()
    {
        if (array_key_exists("sourceSystem", $this->_propDict)) {
            if (is_a($this->_propDict["sourceSystem"], "\Microsoft\Graph\Model\ProvisioningSystem") || is_null($this->_propDict["sourceSystem"])) {
                return $this->_propDict["sourceSystem"];
            } else {
                $this->_propDict["sourceSystem"] = new ProvisioningSystem($this->_propDict["sourceSystem"]);
                return $this->_propDict["sourceSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the sourceSystem
    * Details of source system of the object being provisioned. Supports $filter (eq, contains) for displayName.
    *
    * @param ProvisioningSystem $val The sourceSystem
    *
    * @return ProvisioningObjectSummary
    */
    public function setSourceSystem($val)
    {
        $this->_propDict["sourceSystem"] = $val;
        return $this;
    }

    /**
    * Gets the targetIdentity
    * Details of target object being provisioned. Supports $filter (eq, contains) for identityType, id, and displayName.
    *
    * @return ProvisionedIdentity|null The targetIdentity
    */
    public function getTargetIdentity()
    {
        if (array_key_exists("targetIdentity", $this->_propDict)) {
            if (is_a($this->_propDict["targetIdentity"], "\Microsoft\Graph\Model\ProvisionedIdentity") || is_null($this->_propDict["targetIdentity"])) {
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
    * Details of target object being provisioned. Supports $filter (eq, contains) for identityType, id, and displayName.
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
    * Gets the targetSystem
    * Details of target system of the object being provisioned. Supports $filter (eq, contains) for displayName.
    *
    * @return ProvisioningSystem|null The targetSystem
    */
    public function getTargetSystem()
    {
        if (array_key_exists("targetSystem", $this->_propDict)) {
            if (is_a($this->_propDict["targetSystem"], "\Microsoft\Graph\Model\ProvisioningSystem") || is_null($this->_propDict["targetSystem"])) {
                return $this->_propDict["targetSystem"];
            } else {
                $this->_propDict["targetSystem"] = new ProvisioningSystem($this->_propDict["targetSystem"]);
                return $this->_propDict["targetSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the targetSystem
    * Details of target system of the object being provisioned. Supports $filter (eq, contains) for displayName.
    *
    * @param ProvisioningSystem $val The targetSystem
    *
    * @return ProvisioningObjectSummary
    */
    public function setTargetSystem($val)
    {
        $this->_propDict["targetSystem"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * Unique Microsoft Entra tenant ID. Supports $filter (eq, contains).
    *
    * @return string|null The tenantId
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
    * Unique Microsoft Entra tenant ID. Supports $filter (eq, contains).
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

}
