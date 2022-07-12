<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcConnectivityEvent File
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
* CloudPcConnectivityEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcConnectivityEvent extends Entity
{

    /**
    * Gets the eventDateTime
    *
    * @return \DateTime|null The eventDateTime
    */
    public function getEventDateTime()
    {
        if (array_key_exists("eventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventDateTime"], "\DateTime") || is_null($this->_propDict["eventDateTime"])) {
                return $this->_propDict["eventDateTime"];
            } else {
                $this->_propDict["eventDateTime"] = new \DateTime($this->_propDict["eventDateTime"]);
                return $this->_propDict["eventDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the eventDateTime
    *
    * @param \DateTime $val The value to assign to the eventDateTime
    *
    * @return CloudPcConnectivityEvent The CloudPcConnectivityEvent
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the eventName
    *
    * @return string|null The eventName
    */
    public function getEventName()
    {
        if (array_key_exists("eventName", $this->_propDict)) {
            return $this->_propDict["eventName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eventName
    *
    * @param string $val The value of the eventName
    *
    * @return CloudPcConnectivityEvent
    */
    public function setEventName($val)
    {
        $this->_propDict["eventName"] = $val;
        return $this;
    }

    /**
    * Gets the eventResult
    *
    * @return CloudPcConnectivityEventResult|null The eventResult
    */
    public function getEventResult()
    {
        if (array_key_exists("eventResult", $this->_propDict)) {
            if (is_a($this->_propDict["eventResult"], "\Beta\Microsoft\Graph\Model\CloudPcConnectivityEventResult") || is_null($this->_propDict["eventResult"])) {
                return $this->_propDict["eventResult"];
            } else {
                $this->_propDict["eventResult"] = new CloudPcConnectivityEventResult($this->_propDict["eventResult"]);
                return $this->_propDict["eventResult"];
            }
        }
        return null;
    }

    /**
    * Sets the eventResult
    *
    * @param CloudPcConnectivityEventResult $val The value to assign to the eventResult
    *
    * @return CloudPcConnectivityEvent The CloudPcConnectivityEvent
    */
    public function setEventResult($val)
    {
        $this->_propDict["eventResult"] = $val;
         return $this;
    }

    /**
    * Gets the eventType
    *
    * @return CloudPcConnectivityEventType|null The eventType
    */
    public function getEventType()
    {
        if (array_key_exists("eventType", $this->_propDict)) {
            if (is_a($this->_propDict["eventType"], "\Beta\Microsoft\Graph\Model\CloudPcConnectivityEventType") || is_null($this->_propDict["eventType"])) {
                return $this->_propDict["eventType"];
            } else {
                $this->_propDict["eventType"] = new CloudPcConnectivityEventType($this->_propDict["eventType"]);
                return $this->_propDict["eventType"];
            }
        }
        return null;
    }

    /**
    * Sets the eventType
    *
    * @param CloudPcConnectivityEventType $val The value to assign to the eventType
    *
    * @return CloudPcConnectivityEvent The CloudPcConnectivityEvent
    */
    public function setEventType($val)
    {
        $this->_propDict["eventType"] = $val;
         return $this;
    }
    /**
    * Gets the message
    *
    * @return string|null The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    *
    * @param string $val The value of the message
    *
    * @return CloudPcConnectivityEvent
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
}
