<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallEvent File
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
* CallEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallEvent extends Entity
{
    /**
    * Gets the callEventType
    *
    * @return CallEventType|null The callEventType
    */
    public function getCallEventType()
    {
        if (array_key_exists("callEventType", $this->_propDict)) {
            if (is_a($this->_propDict["callEventType"], "\Beta\Microsoft\Graph\Model\CallEventType") || is_null($this->_propDict["callEventType"])) {
                return $this->_propDict["callEventType"];
            } else {
                $this->_propDict["callEventType"] = new CallEventType($this->_propDict["callEventType"]);
                return $this->_propDict["callEventType"];
            }
        }
        return null;
    }

    /**
    * Sets the callEventType
    *
    * @param CallEventType $val The callEventType
    *
    * @return CallEvent
    */
    public function setCallEventType($val)
    {
        $this->_propDict["callEventType"] = $val;
        return $this;
    }

    /**
    * Gets the direction
    *
    * @return CallDirection|null The direction
    */
    public function getDirection()
    {
        if (array_key_exists("direction", $this->_propDict)) {
            if (is_a($this->_propDict["direction"], "\Beta\Microsoft\Graph\Model\CallDirection") || is_null($this->_propDict["direction"])) {
                return $this->_propDict["direction"];
            } else {
                $this->_propDict["direction"] = new CallDirection($this->_propDict["direction"]);
                return $this->_propDict["direction"];
            }
        }
        return null;
    }

    /**
    * Sets the direction
    *
    * @param CallDirection $val The direction
    *
    * @return CallEvent
    */
    public function setDirection($val)
    {
        $this->_propDict["direction"] = $val;
        return $this;
    }

    /**
    * Gets the joinCallUrl
    *
    * @return string|null The joinCallUrl
    */
    public function getJoinCallUrl()
    {
        if (array_key_exists("joinCallUrl", $this->_propDict)) {
            return $this->_propDict["joinCallUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the joinCallUrl
    *
    * @param string $val The joinCallUrl
    *
    * @return CallEvent
    */
    public function setJoinCallUrl($val)
    {
        $this->_propDict["joinCallUrl"] = $val;
        return $this;
    }

}
