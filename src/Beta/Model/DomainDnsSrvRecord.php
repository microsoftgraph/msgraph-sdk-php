<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainDnsSrvRecord File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* DomainDnsSrvRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DomainDnsSrvRecord extends DomainDnsRecord
{
    /**
    * Gets the nameTarget
    *
    * @return string The nameTarget
    */
    public function getNameTarget()
    {
        if (array_key_exists("nameTarget", $this->_propDict)) {
            return $this->_propDict["nameTarget"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nameTarget
    *
    * @param string $val The nameTarget
    *
    * @return DomainDnsSrvRecord
    */
    public function setNameTarget($val)
    {
        $this->_propDict["nameTarget"] = $val;
        return $this;
    }
    
    /**
    * Gets the port
    *
    * @return int The port
    */
    public function getPort()
    {
        if (array_key_exists("port", $this->_propDict)) {
            return $this->_propDict["port"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the port
    *
    * @param int $val The port
    *
    * @return DomainDnsSrvRecord
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the priority
    *
    * @return int The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the priority
    *
    * @param int $val The priority
    *
    * @return DomainDnsSrvRecord
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the protocol
    *
    * @return string The protocol
    */
    public function getProtocol()
    {
        if (array_key_exists("protocol", $this->_propDict)) {
            return $this->_propDict["protocol"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the protocol
    *
    * @param string $val The protocol
    *
    * @return DomainDnsSrvRecord
    */
    public function setProtocol($val)
    {
        $this->_propDict["protocol"] = $val;
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
    * @param string $val The service
    *
    * @return DomainDnsSrvRecord
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }
    
    /**
    * Gets the weight
    *
    * @return int The weight
    */
    public function getWeight()
    {
        if (array_key_exists("weight", $this->_propDict)) {
            return $this->_propDict["weight"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the weight
    *
    * @param int $val The weight
    *
    * @return DomainDnsSrvRecord
    */
    public function setWeight($val)
    {
        $this->_propDict["weight"] = intval($val);
        return $this;
    }
    
}