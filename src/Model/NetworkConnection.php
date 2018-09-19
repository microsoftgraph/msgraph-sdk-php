<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkConnection File
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
* NetworkConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class NetworkConnection extends Entity
{
    /**
    * Gets the applicationName
    *
    * @return string The applicationName
    */
    public function getApplicationName()
    {
        if (array_key_exists("applicationName", $this->_propDict)) {
            return $this->_propDict["applicationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationName
    *
    * @param string $val The value of the applicationName
    *
    * @return NetworkConnection
    */
    public function setApplicationName($val)
    {
        $this->_propDict["applicationName"] = $val;
        return $this;
    }
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
    * Gets the destinationDomain
    *
    * @return string The destinationDomain
    */
    public function getDestinationDomain()
    {
        if (array_key_exists("destinationDomain", $this->_propDict)) {
            return $this->_propDict["destinationDomain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationDomain
    *
    * @param string $val The value of the destinationDomain
    *
    * @return NetworkConnection
    */
    public function setDestinationDomain($val)
    {
        $this->_propDict["destinationDomain"] = $val;
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
    * Gets the destinationUrl
    *
    * @return string The destinationUrl
    */
    public function getDestinationUrl()
    {
        if (array_key_exists("destinationUrl", $this->_propDict)) {
            return $this->_propDict["destinationUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationUrl
    *
    * @param string $val The value of the destinationUrl
    *
    * @return NetworkConnection
    */
    public function setDestinationUrl($val)
    {
        $this->_propDict["destinationUrl"] = $val;
        return $this;
    }

    /**
    * Gets the direction
    *
    * @return ConnectionDirection The direction
    */
    public function getDirection()
    {
        if (array_key_exists("direction", $this->_propDict)) {
            if (is_a($this->_propDict["direction"], "Microsoft\Graph\Model\ConnectionDirection")) {
                return $this->_propDict["direction"];
            } else {
                $this->_propDict["direction"] = new ConnectionDirection($this->_propDict["direction"]);
                return $this->_propDict["direction"];
            }
        }
        return null;
    }

    /**
    * Sets the direction
    *
    * @param ConnectionDirection $val The value to assign to the direction
    *
    * @return NetworkConnection The NetworkConnection
    */
    public function setDirection($val)
    {
        $this->_propDict["direction"] = $val;
         return $this;
    }

    /**
    * Gets the domainRegisteredDateTime
    *
    * @return \DateTime The domainRegisteredDateTime
    */
    public function getDomainRegisteredDateTime()
    {
        if (array_key_exists("domainRegisteredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["domainRegisteredDateTime"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["domainRegisteredDateTime"];
            } else {
                $this->_propDict["domainRegisteredDateTime"] = new \DateTime($this->_propDict["domainRegisteredDateTime"]);
                return $this->_propDict["domainRegisteredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the domainRegisteredDateTime
    *
    * @param \DateTime $val The value to assign to the domainRegisteredDateTime
    *
    * @return NetworkConnection The NetworkConnection
    */
    public function setDomainRegisteredDateTime($val)
    {
        $this->_propDict["domainRegisteredDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the localDnsName
    *
    * @return string The localDnsName
    */
    public function getLocalDnsName()
    {
        if (array_key_exists("localDnsName", $this->_propDict)) {
            return $this->_propDict["localDnsName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localDnsName
    *
    * @param string $val The value of the localDnsName
    *
    * @return NetworkConnection
    */
    public function setLocalDnsName($val)
    {
        $this->_propDict["localDnsName"] = $val;
        return $this;
    }
    /**
    * Gets the natDestinationAddress
    *
    * @return string The natDestinationAddress
    */
    public function getNatDestinationAddress()
    {
        if (array_key_exists("natDestinationAddress", $this->_propDict)) {
            return $this->_propDict["natDestinationAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the natDestinationAddress
    *
    * @param string $val The value of the natDestinationAddress
    *
    * @return NetworkConnection
    */
    public function setNatDestinationAddress($val)
    {
        $this->_propDict["natDestinationAddress"] = $val;
        return $this;
    }
    /**
    * Gets the natDestinationPort
    *
    * @return string The natDestinationPort
    */
    public function getNatDestinationPort()
    {
        if (array_key_exists("natDestinationPort", $this->_propDict)) {
            return $this->_propDict["natDestinationPort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the natDestinationPort
    *
    * @param string $val The value of the natDestinationPort
    *
    * @return NetworkConnection
    */
    public function setNatDestinationPort($val)
    {
        $this->_propDict["natDestinationPort"] = $val;
        return $this;
    }
    /**
    * Gets the natSourceAddress
    *
    * @return string The natSourceAddress
    */
    public function getNatSourceAddress()
    {
        if (array_key_exists("natSourceAddress", $this->_propDict)) {
            return $this->_propDict["natSourceAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the natSourceAddress
    *
    * @param string $val The value of the natSourceAddress
    *
    * @return NetworkConnection
    */
    public function setNatSourceAddress($val)
    {
        $this->_propDict["natSourceAddress"] = $val;
        return $this;
    }
    /**
    * Gets the natSourcePort
    *
    * @return string The natSourcePort
    */
    public function getNatSourcePort()
    {
        if (array_key_exists("natSourcePort", $this->_propDict)) {
            return $this->_propDict["natSourcePort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the natSourcePort
    *
    * @param string $val The value of the natSourcePort
    *
    * @return NetworkConnection
    */
    public function setNatSourcePort($val)
    {
        $this->_propDict["natSourcePort"] = $val;
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
            if (is_a($this->_propDict["protocol"], "Microsoft\Graph\Model\SecurityNetworkProtocol")) {
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
    * Gets the riskScore
    *
    * @return string The riskScore
    */
    public function getRiskScore()
    {
        if (array_key_exists("riskScore", $this->_propDict)) {
            return $this->_propDict["riskScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskScore
    *
    * @param string $val The value of the riskScore
    *
    * @return NetworkConnection
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
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
    * Gets the status
    *
    * @return ConnectionStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Model\ConnectionStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ConnectionStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param ConnectionStatus $val The value to assign to the status
    *
    * @return NetworkConnection The NetworkConnection
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
    /**
    * Gets the urlParameters
    *
    * @return string The urlParameters
    */
    public function getUrlParameters()
    {
        if (array_key_exists("urlParameters", $this->_propDict)) {
            return $this->_propDict["urlParameters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urlParameters
    *
    * @param string $val The value of the urlParameters
    *
    * @return NetworkConnection
    */
    public function setUrlParameters($val)
    {
        $this->_propDict["urlParameters"] = $val;
        return $this;
    }
}
