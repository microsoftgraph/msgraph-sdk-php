<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Notification File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Notification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Notification extends Entity
{
    /**
    * Gets the targetHostName
    *
    * @return string The targetHostName
    */
    public function getTargetHostName()
    {
        if (array_key_exists("targetHostName", $this->_propDict)) {
            return $this->_propDict["targetHostName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetHostName
    *
    * @param string $val The targetHostName
    *
    * @return Notification
    */
    public function setTargetHostName($val)
    {
        $this->_propDict["targetHostName"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return Notification
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the payload
    *
    * @return PayloadTypes The payload
    */
    public function getPayload()
    {
        if (array_key_exists("payload", $this->_propDict)) {
            if (is_a($this->_propDict["payload"], "Microsoft\Graph\Model\PayloadTypes")) {
                return $this->_propDict["payload"];
            } else {
                $this->_propDict["payload"] = new PayloadTypes($this->_propDict["payload"]);
                return $this->_propDict["payload"];
            }
        }
        return null;
    }
    
    /**
    * Sets the payload
    *
    * @param PayloadTypes $val The payload
    *
    * @return Notification
    */
    public function setPayload($val)
    {
        $this->_propDict["payload"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayTimeToLive
    *
    * @return int The displayTimeToLive
    */
    public function getDisplayTimeToLive()
    {
        if (array_key_exists("displayTimeToLive", $this->_propDict)) {
            return $this->_propDict["displayTimeToLive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayTimeToLive
    *
    * @param int $val The displayTimeToLive
    *
    * @return Notification
    */
    public function setDisplayTimeToLive($val)
    {
        $this->_propDict["displayTimeToLive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the priority
    *
    * @return Priority The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            if (is_a($this->_propDict["priority"], "Microsoft\Graph\Model\Priority")) {
                return $this->_propDict["priority"];
            } else {
                $this->_propDict["priority"] = new Priority($this->_propDict["priority"]);
                return $this->_propDict["priority"];
            }
        }
        return null;
    }
    
    /**
    * Sets the priority
    *
    * @param Priority $val The priority
    *
    * @return Notification
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupName
    *
    * @return string The groupName
    */
    public function getGroupName()
    {
        if (array_key_exists("groupName", $this->_propDict)) {
            return $this->_propDict["groupName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupName
    *
    * @param string $val The groupName
    *
    * @return Notification
    */
    public function setGroupName($val)
    {
        $this->_propDict["groupName"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetPolicy
    *
    * @return TargetPolicyEndpoints The targetPolicy
    */
    public function getTargetPolicy()
    {
        if (array_key_exists("targetPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["targetPolicy"], "Microsoft\Graph\Model\TargetPolicyEndpoints")) {
                return $this->_propDict["targetPolicy"];
            } else {
                $this->_propDict["targetPolicy"] = new TargetPolicyEndpoints($this->_propDict["targetPolicy"]);
                return $this->_propDict["targetPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the targetPolicy
    *
    * @param TargetPolicyEndpoints $val The targetPolicy
    *
    * @return Notification
    */
    public function setTargetPolicy($val)
    {
        $this->_propDict["targetPolicy"] = $val;
        return $this;
    }
    
}