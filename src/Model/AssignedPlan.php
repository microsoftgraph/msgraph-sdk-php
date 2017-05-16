<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignedPlan File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* AssignedPlan class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AssignedPlan extends Entity
{

    /**
    * Gets the assignedDateTime
    *
    * @return \DateTime The assignedDateTime
    */
    public function getAssignedDateTime()
    {
        if (array_key_exists("assignedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["assignedDateTime"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["assignedDateTime"];
            } else {
                $this->_propDict["assignedDateTime"] = new \DateTime($this->_propDict["assignedDateTime"]);
                return $this->_propDict["assignedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the assignedDateTime
    *
    * @param \DateTime $val The value to assign to the assignedDateTime
    *
    * @return AssignedPlan The AssignedPlan
    */
    public function setAssignedDateTime($val)
    {
        $this->_propDict["assignedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the capabilityStatus
    *
    * @return string The capabilityStatus
    */
    public function getCapabilityStatus()
    {
        if (array_key_exists("capabilityStatus", $this->_propDict)) {
            return $this->_propDict["capabilityStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the capabilityStatus
    *
    * @param string $val The value of the capabilityStatus
    *
    * @return AssignedPlan
    */
    public function setCapabilityStatus($val)
    {
        $this->_propDict["capabilityStatus"] = $val;
        return $this;
    }
    /**
    * Gets the service
    *
    * @return string The service
    */
    public function getService()
    {
        if (array_key_exists("service", $this->_propDict)) {
            return $this->_propDict["service"];
        } else {
            return null;
        }
    }

    /**
    * Sets the service
    *
    * @param string $val The value of the service
    *
    * @return AssignedPlan
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }
    /**
    * Gets the servicePlanId
    *
    * @return string The servicePlanId
    */
    public function getServicePlanId()
    {
        if (array_key_exists("servicePlanId", $this->_propDict)) {
            return $this->_propDict["servicePlanId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePlanId
    *
    * @param string $val The value of the servicePlanId
    *
    * @return AssignedPlan
    */
    public function setServicePlanId($val)
    {
        $this->_propDict["servicePlanId"] = $val;
        return $this;
    }
}
