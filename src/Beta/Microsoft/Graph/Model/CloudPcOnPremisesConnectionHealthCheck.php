<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcOnPremisesConnectionHealthCheck File
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
* CloudPcOnPremisesConnectionHealthCheck class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcOnPremisesConnectionHealthCheck extends Entity
{
    /**
    * Gets the additionalDetails
    *
    * @return string The additionalDetails
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
    * @param string $val The value of the additionalDetails
    *
    * @return CloudPcOnPremisesConnectionHealthCheck
    */
    public function setAdditionalDetails($val)
    {
        $this->_propDict["additionalDetails"] = $val;
        return $this;
    }
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
    * @param string $val The value of the displayName
    *
    * @return CloudPcOnPremisesConnectionHealthCheck
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return CloudPcOnPremisesConnectionHealthCheck The CloudPcOnPremisesConnectionHealthCheck
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the errorType
    *
    * @return CloudPcOnPremisesConnectionHealthCheckErrorType The errorType
    */
    public function getErrorType()
    {
        if (array_key_exists("errorType", $this->_propDict)) {
            if (is_a($this->_propDict["errorType"], "Beta\Microsoft\Graph\Model\CloudPcOnPremisesConnectionHealthCheckErrorType")) {
                return $this->_propDict["errorType"];
            } else {
                $this->_propDict["errorType"] = new CloudPcOnPremisesConnectionHealthCheckErrorType($this->_propDict["errorType"]);
                return $this->_propDict["errorType"];
            }
        }
        return null;
    }

    /**
    * Sets the errorType
    *
    * @param CloudPcOnPremisesConnectionHealthCheckErrorType $val The value to assign to the errorType
    *
    * @return CloudPcOnPremisesConnectionHealthCheck The CloudPcOnPremisesConnectionHealthCheck
    */
    public function setErrorType($val)
    {
        $this->_propDict["errorType"] = $val;
         return $this;
    }
    /**
    * Gets the recommendedAction
    *
    * @return string The recommendedAction
    */
    public function getRecommendedAction()
    {
        if (array_key_exists("recommendedAction", $this->_propDict)) {
            return $this->_propDict["recommendedAction"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendedAction
    *
    * @param string $val The value of the recommendedAction
    *
    * @return CloudPcOnPremisesConnectionHealthCheck
    */
    public function setRecommendedAction($val)
    {
        $this->_propDict["recommendedAction"] = $val;
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
    * @return CloudPcOnPremisesConnectionHealthCheck The CloudPcOnPremisesConnectionHealthCheck
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the status
    *
    * @return CloudPcOnPremisesConnectionStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Beta\Microsoft\Graph\Model\CloudPcOnPremisesConnectionStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CloudPcOnPremisesConnectionStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param CloudPcOnPremisesConnectionStatus $val The value to assign to the status
    *
    * @return CloudPcOnPremisesConnectionHealthCheck The CloudPcOnPremisesConnectionHealthCheck
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
