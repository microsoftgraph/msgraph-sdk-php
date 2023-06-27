<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomSecurityAttributeAudit File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* CustomSecurityAttributeAudit class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomSecurityAttributeAudit extends Entity
{
    /**
    * Gets the activityDateTime
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
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the activityDisplayName
    *
    * @return string|null The activityDisplayName
    */
    public function getActivityDisplayName()
    {
        if (array_key_exists("activityDisplayName", $this->_propDict)) {
            return $this->_propDict["activityDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activityDisplayName
    *
    * @param string $val The activityDisplayName
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setActivityDisplayName($val)
    {
        $this->_propDict["activityDisplayName"] = $val;
        return $this;
    }


     /**
     * Gets the additionalDetails
     *
     * @return array|null The additionalDetails
     */
    public function getAdditionalDetails()
    {
        if (array_key_exists("additionalDetails", $this->_propDict)) {
           return $this->_propDict["additionalDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalDetails
    *
    * @param KeyValue[] $val The additionalDetails
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setAdditionalDetails($val)
    {
        $this->_propDict["additionalDetails"] = $val;
        return $this;
    }

    /**
    * Gets the category
    *
    * @return string|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            return $this->_propDict["category"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category
    *
    * @param string $val The category
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the correlationId
    *
    * @return string|null The correlationId
    */
    public function getCorrelationId()
    {
        if (array_key_exists("correlationId", $this->_propDict)) {
            return $this->_propDict["correlationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationId
    *
    * @param string $val The correlationId
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }

    /**
    * Gets the initiatedBy
    *
    * @return AuditActivityInitiator|null The initiatedBy
    */
    public function getInitiatedBy()
    {
        if (array_key_exists("initiatedBy", $this->_propDict)) {
            if (is_a($this->_propDict["initiatedBy"], "\Beta\Microsoft\Graph\Model\AuditActivityInitiator") || is_null($this->_propDict["initiatedBy"])) {
                return $this->_propDict["initiatedBy"];
            } else {
                $this->_propDict["initiatedBy"] = new AuditActivityInitiator($this->_propDict["initiatedBy"]);
                return $this->_propDict["initiatedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the initiatedBy
    *
    * @param AuditActivityInitiator $val The initiatedBy
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setInitiatedBy($val)
    {
        $this->_propDict["initiatedBy"] = $val;
        return $this;
    }

    /**
    * Gets the loggedByService
    *
    * @return string|null The loggedByService
    */
    public function getLoggedByService()
    {
        if (array_key_exists("loggedByService", $this->_propDict)) {
            return $this->_propDict["loggedByService"];
        } else {
            return null;
        }
    }

    /**
    * Sets the loggedByService
    *
    * @param string $val The loggedByService
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setLoggedByService($val)
    {
        $this->_propDict["loggedByService"] = $val;
        return $this;
    }

    /**
    * Gets the operationType
    *
    * @return string|null The operationType
    */
    public function getOperationType()
    {
        if (array_key_exists("operationType", $this->_propDict)) {
            return $this->_propDict["operationType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operationType
    *
    * @param string $val The operationType
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setOperationType($val)
    {
        $this->_propDict["operationType"] = $val;
        return $this;
    }

    /**
    * Gets the result
    *
    * @return OperationResult|null The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            if (is_a($this->_propDict["result"], "\Beta\Microsoft\Graph\Model\OperationResult") || is_null($this->_propDict["result"])) {
                return $this->_propDict["result"];
            } else {
                $this->_propDict["result"] = new OperationResult($this->_propDict["result"]);
                return $this->_propDict["result"];
            }
        }
        return null;
    }

    /**
    * Sets the result
    *
    * @param OperationResult $val The result
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = $val;
        return $this;
    }

    /**
    * Gets the resultReason
    *
    * @return string|null The resultReason
    */
    public function getResultReason()
    {
        if (array_key_exists("resultReason", $this->_propDict)) {
            return $this->_propDict["resultReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resultReason
    *
    * @param string $val The resultReason
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setResultReason($val)
    {
        $this->_propDict["resultReason"] = $val;
        return $this;
    }


     /**
     * Gets the targetResources
     *
     * @return array|null The targetResources
     */
    public function getTargetResources()
    {
        if (array_key_exists("targetResources", $this->_propDict)) {
           return $this->_propDict["targetResources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetResources
    *
    * @param TargetResource[] $val The targetResources
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setTargetResources($val)
    {
        $this->_propDict["targetResources"] = $val;
        return $this;
    }

    /**
    * Gets the userAgent
    *
    * @return string|null The userAgent
    */
    public function getUserAgent()
    {
        if (array_key_exists("userAgent", $this->_propDict)) {
            return $this->_propDict["userAgent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userAgent
    *
    * @param string $val The userAgent
    *
    * @return CustomSecurityAttributeAudit
    */
    public function setUserAgent($val)
    {
        $this->_propDict["userAgent"] = $val;
        return $this;
    }

}
