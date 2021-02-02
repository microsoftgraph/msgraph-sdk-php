<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcOnPremisesConnectionStatusDetails File
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
* CloudPcOnPremisesConnectionStatusDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcOnPremisesConnectionStatusDetails extends Entity
{

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
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return CloudPcOnPremisesConnectionStatusDetails The CloudPcOnPremisesConnectionStatusDetails
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the healthChecks
    *
    * @return CloudPcOnPremisesConnectionHealthCheck The healthChecks
    */
    public function getHealthChecks()
    {
        if (array_key_exists("healthChecks", $this->_propDict)) {
            if (is_a($this->_propDict["healthChecks"], "Beta\Microsoft\Graph\Model\CloudPcOnPremisesConnectionHealthCheck")) {
                return $this->_propDict["healthChecks"];
            } else {
                $this->_propDict["healthChecks"] = new CloudPcOnPremisesConnectionHealthCheck($this->_propDict["healthChecks"]);
                return $this->_propDict["healthChecks"];
            }
        }
        return null;
    }

    /**
    * Sets the healthChecks
    *
    * @param CloudPcOnPremisesConnectionHealthCheck $val The value to assign to the healthChecks
    *
    * @return CloudPcOnPremisesConnectionStatusDetails The CloudPcOnPremisesConnectionStatusDetails
    */
    public function setHealthChecks($val)
    {
        $this->_propDict["healthChecks"] = $val;
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
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return CloudPcOnPremisesConnectionStatusDetails The CloudPcOnPremisesConnectionStatusDetails
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
}
