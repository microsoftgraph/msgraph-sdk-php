<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkAccessTraffic File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

/**
* NetworkAccessTraffic class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NetworkAccessTraffic implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new NetworkAccessTraffic
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the NetworkAccessTraffic
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the agentVersion
    *
    * @return string|null The agentVersion
    */
    public function getAgentVersion()
    {
        if (array_key_exists("agentVersion", $this->_propDict)) {
            return $this->_propDict["agentVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the agentVersion
    *
    * @param string $val The agentVersion
    *
    * @return NetworkAccessTraffic
    */
    public function setAgentVersion($val)
    {
        $this->_propDict["agentVersion"] = $val;
        return $this;
    }

    /**
    * Gets the connectionId
    *
    * @return string|null The connectionId
    */
    public function getConnectionId()
    {
        if (array_key_exists("connectionId", $this->_propDict)) {
            return $this->_propDict["connectionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectionId
    *
    * @param string $val The connectionId
    *
    * @return NetworkAccessTraffic
    */
    public function setConnectionId($val)
    {
        $this->_propDict["connectionId"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return NetworkAccessTraffic
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the destinationFQDN
    *
    * @return string|null The destinationFQDN
    */
    public function getDestinationFQDN()
    {
        if (array_key_exists("destinationFQDN", $this->_propDict)) {
            return $this->_propDict["destinationFQDN"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationFQDN
    *
    * @param string $val The destinationFQDN
    *
    * @return NetworkAccessTraffic
    */
    public function setDestinationFQDN($val)
    {
        $this->_propDict["destinationFQDN"] = $val;
        return $this;
    }

    /**
    * Gets the destinationIp
    *
    * @return string|null The destinationIp
    */
    public function getDestinationIp()
    {
        if (array_key_exists("destinationIp", $this->_propDict)) {
            return $this->_propDict["destinationIp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationIp
    *
    * @param string $val The destinationIp
    *
    * @return NetworkAccessTraffic
    */
    public function setDestinationIp($val)
    {
        $this->_propDict["destinationIp"] = $val;
        return $this;
    }

    /**
    * Gets the destinationPort
    *
    * @return int|null The destinationPort
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
    * @param int $val The destinationPort
    *
    * @return NetworkAccessTraffic
    */
    public function setDestinationPort($val)
    {
        $this->_propDict["destinationPort"] = intval($val);
        return $this;
    }

    /**
    * Gets the deviceCategory
    *
    * @return DeviceCategory|null The deviceCategory
    */
    public function getDeviceCategory()
    {
        if (array_key_exists("deviceCategory", $this->_propDict)) {
            if (is_a($this->_propDict["deviceCategory"], "\Beta\Microsoft\Graph\Networkaccess\Model\DeviceCategory") || is_null($this->_propDict["deviceCategory"])) {
                return $this->_propDict["deviceCategory"];
            } else {
                $this->_propDict["deviceCategory"] = new DeviceCategory($this->_propDict["deviceCategory"]);
                return $this->_propDict["deviceCategory"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceCategory
    *
    * @param DeviceCategory $val The deviceCategory
    *
    * @return NetworkAccessTraffic
    */
    public function setDeviceCategory($val)
    {
        $this->_propDict["deviceCategory"] = $val;
        return $this;
    }

    /**
    * Gets the deviceId
    *
    * @return string|null The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    *
    * @param string $val The deviceId
    *
    * @return NetworkAccessTraffic
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceOperatingSystem
    *
    * @return string|null The deviceOperatingSystem
    */
    public function getDeviceOperatingSystem()
    {
        if (array_key_exists("deviceOperatingSystem", $this->_propDict)) {
            return $this->_propDict["deviceOperatingSystem"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceOperatingSystem
    *
    * @param string $val The deviceOperatingSystem
    *
    * @return NetworkAccessTraffic
    */
    public function setDeviceOperatingSystem($val)
    {
        $this->_propDict["deviceOperatingSystem"] = $val;
        return $this;
    }

    /**
    * Gets the deviceOperatingSystemVersion
    *
    * @return string|null The deviceOperatingSystemVersion
    */
    public function getDeviceOperatingSystemVersion()
    {
        if (array_key_exists("deviceOperatingSystemVersion", $this->_propDict)) {
            return $this->_propDict["deviceOperatingSystemVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceOperatingSystemVersion
    *
    * @param string $val The deviceOperatingSystemVersion
    *
    * @return NetworkAccessTraffic
    */
    public function setDeviceOperatingSystemVersion($val)
    {
        $this->_propDict["deviceOperatingSystemVersion"] = $val;
        return $this;
    }

    /**
    * Gets the headers
    *
    * @return Headers|null The headers
    */
    public function getHeaders()
    {
        if (array_key_exists("headers", $this->_propDict)) {
            if (is_a($this->_propDict["headers"], "\Beta\Microsoft\Graph\Networkaccess\Model\Headers") || is_null($this->_propDict["headers"])) {
                return $this->_propDict["headers"];
            } else {
                $this->_propDict["headers"] = new Headers($this->_propDict["headers"]);
                return $this->_propDict["headers"];
            }
        }
        return null;
    }

    /**
    * Sets the headers
    *
    * @param Headers $val The headers
    *
    * @return NetworkAccessTraffic
    */
    public function setHeaders($val)
    {
        $this->_propDict["headers"] = $val;
        return $this;
    }

    /**
    * Gets the networkProtocol
    *
    * @return NetworkingProtocol|null The networkProtocol
    */
    public function getNetworkProtocol()
    {
        if (array_key_exists("networkProtocol", $this->_propDict)) {
            if (is_a($this->_propDict["networkProtocol"], "\Beta\Microsoft\Graph\Networkaccess\Model\NetworkingProtocol") || is_null($this->_propDict["networkProtocol"])) {
                return $this->_propDict["networkProtocol"];
            } else {
                $this->_propDict["networkProtocol"] = new NetworkingProtocol($this->_propDict["networkProtocol"]);
                return $this->_propDict["networkProtocol"];
            }
        }
        return null;
    }

    /**
    * Sets the networkProtocol
    *
    * @param NetworkingProtocol $val The networkProtocol
    *
    * @return NetworkAccessTraffic
    */
    public function setNetworkProtocol($val)
    {
        $this->_propDict["networkProtocol"] = $val;
        return $this;
    }

    /**
    * Gets the policyId
    *
    * @return string|null The policyId
    */
    public function getPolicyId()
    {
        if (array_key_exists("policyId", $this->_propDict)) {
            return $this->_propDict["policyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyId
    *
    * @param string $val The policyId
    *
    * @return NetworkAccessTraffic
    */
    public function setPolicyId($val)
    {
        $this->_propDict["policyId"] = $val;
        return $this;
    }

    /**
    * Gets the policyRuleId
    *
    * @return string|null The policyRuleId
    */
    public function getPolicyRuleId()
    {
        if (array_key_exists("policyRuleId", $this->_propDict)) {
            return $this->_propDict["policyRuleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyRuleId
    *
    * @param string $val The policyRuleId
    *
    * @return NetworkAccessTraffic
    */
    public function setPolicyRuleId($val)
    {
        $this->_propDict["policyRuleId"] = $val;
        return $this;
    }

    /**
    * Gets the receivedBytes
    *
    * @return int|null The receivedBytes
    */
    public function getReceivedBytes()
    {
        if (array_key_exists("receivedBytes", $this->_propDict)) {
            return $this->_propDict["receivedBytes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the receivedBytes
    *
    * @param int $val The receivedBytes
    *
    * @return NetworkAccessTraffic
    */
    public function setReceivedBytes($val)
    {
        $this->_propDict["receivedBytes"] = intval($val);
        return $this;
    }

    /**
    * Gets the sentBytes
    *
    * @return int|null The sentBytes
    */
    public function getSentBytes()
    {
        if (array_key_exists("sentBytes", $this->_propDict)) {
            return $this->_propDict["sentBytes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentBytes
    *
    * @param int $val The sentBytes
    *
    * @return NetworkAccessTraffic
    */
    public function setSentBytes($val)
    {
        $this->_propDict["sentBytes"] = intval($val);
        return $this;
    }

    /**
    * Gets the sessionId
    *
    * @return string|null The sessionId
    */
    public function getSessionId()
    {
        if (array_key_exists("sessionId", $this->_propDict)) {
            return $this->_propDict["sessionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sessionId
    *
    * @param string $val The sessionId
    *
    * @return NetworkAccessTraffic
    */
    public function setSessionId($val)
    {
        $this->_propDict["sessionId"] = $val;
        return $this;
    }

    /**
    * Gets the sourceIp
    *
    * @return string|null The sourceIp
    */
    public function getSourceIp()
    {
        if (array_key_exists("sourceIp", $this->_propDict)) {
            return $this->_propDict["sourceIp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceIp
    *
    * @param string $val The sourceIp
    *
    * @return NetworkAccessTraffic
    */
    public function setSourceIp($val)
    {
        $this->_propDict["sourceIp"] = $val;
        return $this;
    }

    /**
    * Gets the sourcePort
    *
    * @return int|null The sourcePort
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
    * @param int $val The sourcePort
    *
    * @return NetworkAccessTraffic
    */
    public function setSourcePort($val)
    {
        $this->_propDict["sourcePort"] = intval($val);
        return $this;
    }

    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return NetworkAccessTraffic
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the trafficType
    *
    * @return TrafficType|null The trafficType
    */
    public function getTrafficType()
    {
        if (array_key_exists("trafficType", $this->_propDict)) {
            if (is_a($this->_propDict["trafficType"], "\Beta\Microsoft\Graph\Networkaccess\Model\TrafficType") || is_null($this->_propDict["trafficType"])) {
                return $this->_propDict["trafficType"];
            } else {
                $this->_propDict["trafficType"] = new TrafficType($this->_propDict["trafficType"]);
                return $this->_propDict["trafficType"];
            }
        }
        return null;
    }

    /**
    * Sets the trafficType
    *
    * @param TrafficType $val The trafficType
    *
    * @return NetworkAccessTraffic
    */
    public function setTrafficType($val)
    {
        $this->_propDict["trafficType"] = $val;
        return $this;
    }

    /**
    * Gets the transactionId
    *
    * @return string|null The transactionId
    */
    public function getTransactionId()
    {
        if (array_key_exists("transactionId", $this->_propDict)) {
            return $this->_propDict["transactionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transactionId
    *
    * @param string $val The transactionId
    *
    * @return NetworkAccessTraffic
    */
    public function setTransactionId($val)
    {
        $this->_propDict["transactionId"] = $val;
        return $this;
    }

    /**
    * Gets the transportProtocol
    *
    * @return NetworkingProtocol|null The transportProtocol
    */
    public function getTransportProtocol()
    {
        if (array_key_exists("transportProtocol", $this->_propDict)) {
            if (is_a($this->_propDict["transportProtocol"], "\Beta\Microsoft\Graph\Networkaccess\Model\NetworkingProtocol") || is_null($this->_propDict["transportProtocol"])) {
                return $this->_propDict["transportProtocol"];
            } else {
                $this->_propDict["transportProtocol"] = new NetworkingProtocol($this->_propDict["transportProtocol"]);
                return $this->_propDict["transportProtocol"];
            }
        }
        return null;
    }

    /**
    * Sets the transportProtocol
    *
    * @param NetworkingProtocol $val The transportProtocol
    *
    * @return NetworkAccessTraffic
    */
    public function setTransportProtocol($val)
    {
        $this->_propDict["transportProtocol"] = $val;
        return $this;
    }

    /**
    * Gets the userId
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return NetworkAccessTraffic
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }

    /**
    * Gets the userPrincipalName
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    *
    * @param string $val The userPrincipalName
    *
    * @return NetworkAccessTraffic
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return NetworkAccessTraffic
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
