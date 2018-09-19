<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkObservable File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* NetworkObservable class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class NetworkObservable extends Entity
{
    /**
    * Gets the destinatioIPv6
    *
    * @return string The destinatioIPv6
    */
    public function getDestinatioIPv6()
    {
        if (array_key_exists("destinatioIPv6", $this->_propDict)) {
            return $this->_propDict["destinatioIPv6"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinatioIPv6
    *
    * @param string $val The value of the destinatioIPv6
    *
    * @return NetworkObservable
    */
    public function setDestinatioIPv6($val)
    {
        $this->_propDict["destinatioIPv6"] = $val;
        return $this;
    }
    /**
    * Gets the destinationAsn
    *
    * @return int The destinationAsn
    */
    public function getDestinationAsn()
    {
        if (array_key_exists("destinationAsn", $this->_propDict)) {
            return $this->_propDict["destinationAsn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationAsn
    *
    * @param int $val The value of the destinationAsn
    *
    * @return NetworkObservable
    */
    public function setDestinationAsn($val)
    {
        $this->_propDict["destinationAsn"] = $val;
        return $this;
    }
    /**
    * Gets the destinationCidrBlock
    *
    * @return string The destinationCidrBlock
    */
    public function getDestinationCidrBlock()
    {
        if (array_key_exists("destinationCidrBlock", $this->_propDict)) {
            return $this->_propDict["destinationCidrBlock"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationCidrBlock
    *
    * @param string $val The value of the destinationCidrBlock
    *
    * @return NetworkObservable
    */
    public function setDestinationCidrBlock($val)
    {
        $this->_propDict["destinationCidrBlock"] = $val;
        return $this;
    }
    /**
    * Gets the destinationIPv4
    *
    * @return string The destinationIPv4
    */
    public function getDestinationIPv4()
    {
        if (array_key_exists("destinationIPv4", $this->_propDict)) {
            return $this->_propDict["destinationIPv4"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationIPv4
    *
    * @param string $val The value of the destinationIPv4
    *
    * @return NetworkObservable
    */
    public function setDestinationIPv4($val)
    {
        $this->_propDict["destinationIPv4"] = $val;
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
    * @return NetworkObservable
    */
    public function setDestinationPort($val)
    {
        $this->_propDict["destinationPort"] = $val;
        return $this;
    }
    /**
    * Gets the dnsDomainName
    *
    * @return string The dnsDomainName
    */
    public function getDnsDomainName()
    {
        if (array_key_exists("dnsDomainName", $this->_propDict)) {
            return $this->_propDict["dnsDomainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dnsDomainName
    *
    * @param string $val The value of the dnsDomainName
    *
    * @return NetworkObservable
    */
    public function setDnsDomainName($val)
    {
        $this->_propDict["dnsDomainName"] = $val;
        return $this;
    }

    /**
    * Gets the dnsDomainLookupDateTime
    *
    * @return \DateTime The dnsDomainLookupDateTime
    */
    public function getDnsDomainLookupDateTime()
    {
        if (array_key_exists("dnsDomainLookupDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dnsDomainLookupDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["dnsDomainLookupDateTime"];
            } else {
                $this->_propDict["dnsDomainLookupDateTime"] = new \DateTime($this->_propDict["dnsDomainLookupDateTime"]);
                return $this->_propDict["dnsDomainLookupDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the dnsDomainLookupDateTime
    *
    * @param \DateTime $val The value to assign to the dnsDomainLookupDateTime
    *
    * @return NetworkObservable The NetworkObservable
    */
    public function setDnsDomainLookupDateTime($val)
    {
        $this->_propDict["dnsDomainLookupDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the dnsRegistrantEmail
    *
    * @return string The dnsRegistrantEmail
    */
    public function getDnsRegistrantEmail()
    {
        if (array_key_exists("dnsRegistrantEmail", $this->_propDict)) {
            return $this->_propDict["dnsRegistrantEmail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dnsRegistrantEmail
    *
    * @param string $val The value of the dnsRegistrantEmail
    *
    * @return NetworkObservable
    */
    public function setDnsRegistrantEmail($val)
    {
        $this->_propDict["dnsRegistrantEmail"] = $val;
        return $this;
    }
    /**
    * Gets the dnsRegistrantName
    *
    * @return string The dnsRegistrantName
    */
    public function getDnsRegistrantName()
    {
        if (array_key_exists("dnsRegistrantName", $this->_propDict)) {
            return $this->_propDict["dnsRegistrantName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dnsRegistrantName
    *
    * @param string $val The value of the dnsRegistrantName
    *
    * @return NetworkObservable
    */
    public function setDnsRegistrantName($val)
    {
        $this->_propDict["dnsRegistrantName"] = $val;
        return $this;
    }
    /**
    * Gets the nameServer
    *
    * @return string The nameServer
    */
    public function getNameServer()
    {
        if (array_key_exists("nameServer", $this->_propDict)) {
            return $this->_propDict["nameServer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nameServer
    *
    * @param string $val The value of the nameServer
    *
    * @return NetworkObservable
    */
    public function setNameServer($val)
    {
        $this->_propDict["nameServer"] = $val;
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
    * @return NetworkObservable The NetworkObservable
    */
    public function setProtocol($val)
    {
        $this->_propDict["protocol"] = $val;
         return $this;
    }
    /**
    * Gets the sourceAsn
    *
    * @return int The sourceAsn
    */
    public function getSourceAsn()
    {
        if (array_key_exists("sourceAsn", $this->_propDict)) {
            return $this->_propDict["sourceAsn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceAsn
    *
    * @param int $val The value of the sourceAsn
    *
    * @return NetworkObservable
    */
    public function setSourceAsn($val)
    {
        $this->_propDict["sourceAsn"] = $val;
        return $this;
    }
    /**
    * Gets the sourceCidrBlock
    *
    * @return string The sourceCidrBlock
    */
    public function getSourceCidrBlock()
    {
        if (array_key_exists("sourceCidrBlock", $this->_propDict)) {
            return $this->_propDict["sourceCidrBlock"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceCidrBlock
    *
    * @param string $val The value of the sourceCidrBlock
    *
    * @return NetworkObservable
    */
    public function setSourceCidrBlock($val)
    {
        $this->_propDict["sourceCidrBlock"] = $val;
        return $this;
    }
    /**
    * Gets the sourceIPv4
    *
    * @return string The sourceIPv4
    */
    public function getSourceIPv4()
    {
        if (array_key_exists("sourceIPv4", $this->_propDict)) {
            return $this->_propDict["sourceIPv4"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceIPv4
    *
    * @param string $val The value of the sourceIPv4
    *
    * @return NetworkObservable
    */
    public function setSourceIPv4($val)
    {
        $this->_propDict["sourceIPv4"] = $val;
        return $this;
    }
    /**
    * Gets the sourceIPv6
    *
    * @return string The sourceIPv6
    */
    public function getSourceIPv6()
    {
        if (array_key_exists("sourceIPv6", $this->_propDict)) {
            return $this->_propDict["sourceIPv6"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceIPv6
    *
    * @param string $val The value of the sourceIPv6
    *
    * @return NetworkObservable
    */
    public function setSourceIPv6($val)
    {
        $this->_propDict["sourceIPv6"] = $val;
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
    * @return NetworkObservable
    */
    public function setSourcePort($val)
    {
        $this->_propDict["sourcePort"] = $val;
        return $this;
    }
    /**
    * Gets the url
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    *
    * @param string $val The value of the url
    *
    * @return NetworkObservable
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    /**
    * Gets the userAgent
    *
    * @return string The userAgent
    */
    public function getUserAgent()
    {
        if (array_key_exists("userAgent", $this->_propDict)) {
            return $this->_propDict["userAgent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userAgent
    *
    * @param string $val The value of the userAgent
    *
    * @return NetworkObservable
    */
    public function setUserAgent($val)
    {
        $this->_propDict["userAgent"] = $val;
        return $this;
    }
}
