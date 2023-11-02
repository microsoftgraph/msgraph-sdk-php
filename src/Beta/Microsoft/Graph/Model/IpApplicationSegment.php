<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IpApplicationSegment File
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
* IpApplicationSegment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IpApplicationSegment extends ApplicationSegment
{
    /**
    * Gets the destinationHost
    *
    * @return string|null The destinationHost
    */
    public function getDestinationHost()
    {
        if (array_key_exists("destinationHost", $this->_propDict)) {
            return $this->_propDict["destinationHost"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationHost
    *
    * @param string $val The destinationHost
    *
    * @return IpApplicationSegment
    */
    public function setDestinationHost($val)
    {
        $this->_propDict["destinationHost"] = $val;
        return $this;
    }

    /**
    * Gets the destinationType
    *
    * @return PrivateNetworkDestinationType|null The destinationType
    */
    public function getDestinationType()
    {
        if (array_key_exists("destinationType", $this->_propDict)) {
            if (is_a($this->_propDict["destinationType"], "\Beta\Microsoft\Graph\Model\PrivateNetworkDestinationType") || is_null($this->_propDict["destinationType"])) {
                return $this->_propDict["destinationType"];
            } else {
                $this->_propDict["destinationType"] = new PrivateNetworkDestinationType($this->_propDict["destinationType"]);
                return $this->_propDict["destinationType"];
            }
        }
        return null;
    }

    /**
    * Sets the destinationType
    *
    * @param PrivateNetworkDestinationType $val The destinationType
    *
    * @return IpApplicationSegment
    */
    public function setDestinationType($val)
    {
        $this->_propDict["destinationType"] = $val;
        return $this;
    }

    /**
    * Gets the port
    *
    * @return int|null The port
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
    * @return IpApplicationSegment
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = intval($val);
        return $this;
    }

    /**
    * Gets the ports
    *
    * @return array|null The ports
    */
    public function getPorts()
    {
        if (array_key_exists("ports", $this->_propDict)) {
            return $this->_propDict["ports"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ports
    *
    * @param string[] $val The ports
    *
    * @return IpApplicationSegment
    */
    public function setPorts($val)
    {
        $this->_propDict["ports"] = $val;
        return $this;
    }

    /**
    * Gets the protocol
    *
    * @return PrivateNetworkProtocol|null The protocol
    */
    public function getProtocol()
    {
        if (array_key_exists("protocol", $this->_propDict)) {
            if (is_a($this->_propDict["protocol"], "\Beta\Microsoft\Graph\Model\PrivateNetworkProtocol") || is_null($this->_propDict["protocol"])) {
                return $this->_propDict["protocol"];
            } else {
                $this->_propDict["protocol"] = new PrivateNetworkProtocol($this->_propDict["protocol"]);
                return $this->_propDict["protocol"];
            }
        }
        return null;
    }

    /**
    * Sets the protocol
    *
    * @param PrivateNetworkProtocol $val The protocol
    *
    * @return IpApplicationSegment
    */
    public function setProtocol($val)
    {
        $this->_propDict["protocol"] = $val;
        return $this;
    }

}
