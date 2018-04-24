<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkConnection File
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
* NetworkConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class NetworkConnection extends Entity
{
    /**
    * Gets the destinationAddress
    *
    * @return string The destinationAddress
    */
    public function getDestinationAddress()
    {
        if (array_key_exists("destinationAddress", $this->_propDict)) {
            return $this->_propDict["destinationAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationAddress
    *
    * @param string $val The value of the destinationAddress
    *
    * @return NetworkConnection
    */
    public function setDestinationAddress($val)
    {
        $this->_propDict["destinationAddress"] = $val;
        return $this;
    }
    /**
    * Gets the destinationPort
    *
    * @return string The destinationPort
    */
    public function getDestinationPort()
    {
        if (array_key_exists("destinationPort", $this->_propDict)) {
            return $this->_propDict["destinationPort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationPort
    *
    * @param string $val The value of the destinationPort
    *
    * @return NetworkConnection
    */
    public function setDestinationPort($val)
    {
        $this->_propDict["destinationPort"] = $val;
        return $this;
    }

    /**
    * Gets the protocol
    *
    * @return SecurityNetworkProtocol The protocol
    */
    public function getProtocol()
    {
        if (array_key_exists("protocol", $this->_propDict)) {
            if (is_a($this->_propDict["protocol"], "Microsoft\Graph\Beta\Model\SecurityNetworkProtocol")) {
                return $this->_propDict["protocol"];
            } else {
                $this->_propDict["protocol"] = new SecurityNetworkProtocol($this->_propDict["protocol"]);
                return $this->_propDict["protocol"];
            }
        }
        return null;
    }

    /**
    * Sets the protocol
    *
    * @param SecurityNetworkProtocol $val The value to assign to the protocol
    *
    * @return NetworkConnection The NetworkConnection
    */
    public function setProtocol($val)
    {
        $this->_propDict["protocol"] = $val;
         return $this;
    }
    /**
    * Gets the sourceAddress
    *
    * @return string The sourceAddress
    */
    public function getSourceAddress()
    {
        if (array_key_exists("sourceAddress", $this->_propDict)) {
            return $this->_propDict["sourceAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceAddress
    *
    * @param string $val The value of the sourceAddress
    *
    * @return NetworkConnection
    */
    public function setSourceAddress($val)
    {
        $this->_propDict["sourceAddress"] = $val;
        return $this;
    }
    /**
    * Gets the sourcePort
    *
    * @return string The sourcePort
    */
    public function getSourcePort()
    {
        if (array_key_exists("sourcePort", $this->_propDict)) {
            return $this->_propDict["sourcePort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourcePort
    *
    * @param string $val The value of the sourcePort
    *
    * @return NetworkConnection
    */
    public function setSourcePort($val)
    {
        $this->_propDict["sourcePort"] = $val;
        return $this;
    }
    /**
    * Gets the uri
    *
    * @return string The uri
    */
    public function getUri()
    {
        if (array_key_exists("uri", $this->_propDict)) {
            return $this->_propDict["uri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uri
    *
    * @param string $val The value of the uri
    *
    * @return NetworkConnection
    */
    public function setUri($val)
    {
        $this->_propDict["uri"] = $val;
        return $this;
    }
}
