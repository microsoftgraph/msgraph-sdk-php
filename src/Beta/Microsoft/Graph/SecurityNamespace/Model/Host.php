<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Host File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* Host class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Host extends Artifact
{
    /**
    * Gets the firstSeenDateTime
    * The first date and time when this host was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The firstSeenDateTime
    */
    public function getFirstSeenDateTime()
    {
        if (array_key_exists("firstSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["firstSeenDateTime"], "\DateTime") || is_null($this->_propDict["firstSeenDateTime"])) {
                return $this->_propDict["firstSeenDateTime"];
            } else {
                $this->_propDict["firstSeenDateTime"] = new \DateTime($this->_propDict["firstSeenDateTime"]);
                return $this->_propDict["firstSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the firstSeenDateTime
    * The first date and time when this host was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return Host
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * The most recent date and time when this host was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastSeenDateTime
    */
    public function getLastSeenDateTime()
    {
        if (array_key_exists("lastSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSeenDateTime"], "\DateTime") || is_null($this->_propDict["lastSeenDateTime"])) {
                return $this->_propDict["lastSeenDateTime"];
            } else {
                $this->_propDict["lastSeenDateTime"] = new \DateTime($this->_propDict["lastSeenDateTime"]);
                return $this->_propDict["lastSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSeenDateTime
    * The most recent date and time when this host was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return Host
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the childHostPairs
    * The hostPairs that are resources associated with a host, where that host is the parentHost and has an outgoing pairing to a cihldHost.
     *
     * @return array|null The childHostPairs
     */
    public function getChildHostPairs()
    {
        if (array_key_exists("childHostPairs", $this->_propDict)) {
           return $this->_propDict["childHostPairs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the childHostPairs
    * The hostPairs that are resources associated with a host, where that host is the parentHost and has an outgoing pairing to a cihldHost.
    *
    * @param HostPair[] $val The childHostPairs
    *
    * @return Host
    */
    public function setChildHostPairs($val)
    {
        $this->_propDict["childHostPairs"] = $val;
        return $this;
    }


     /**
     * Gets the components
    * The hostComponents that are associated with this host.
     *
     * @return array|null The components
     */
    public function getComponents()
    {
        if (array_key_exists("components", $this->_propDict)) {
           return $this->_propDict["components"];
        } else {
            return null;
        }
    }

    /**
    * Sets the components
    * The hostComponents that are associated with this host.
    *
    * @param HostComponent[] $val The components
    *
    * @return Host
    */
    public function setComponents($val)
    {
        $this->_propDict["components"] = $val;
        return $this;
    }


     /**
     * Gets the cookies
    * The hostCookies that are associated with this host.
     *
     * @return array|null The cookies
     */
    public function getCookies()
    {
        if (array_key_exists("cookies", $this->_propDict)) {
           return $this->_propDict["cookies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cookies
    * The hostCookies that are associated with this host.
    *
    * @param HostCookie[] $val The cookies
    *
    * @return Host
    */
    public function setCookies($val)
    {
        $this->_propDict["cookies"] = $val;
        return $this;
    }


     /**
     * Gets the hostPairs
    * The hostPairs that are associated with this host, where this host is either the parentHost or childHost.
     *
     * @return array|null The hostPairs
     */
    public function getHostPairs()
    {
        if (array_key_exists("hostPairs", $this->_propDict)) {
           return $this->_propDict["hostPairs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostPairs
    * The hostPairs that are associated with this host, where this host is either the parentHost or childHost.
    *
    * @param HostPair[] $val The hostPairs
    *
    * @return Host
    */
    public function setHostPairs($val)
    {
        $this->_propDict["hostPairs"] = $val;
        return $this;
    }


     /**
     * Gets the parentHostPairs
    * The hostPairs that are associated with a host, where that host is the childHost and has an incoming pairing with a parentHost.
     *
     * @return array|null The parentHostPairs
     */
    public function getParentHostPairs()
    {
        if (array_key_exists("parentHostPairs", $this->_propDict)) {
           return $this->_propDict["parentHostPairs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentHostPairs
    * The hostPairs that are associated with a host, where that host is the childHost and has an incoming pairing with a parentHost.
    *
    * @param HostPair[] $val The parentHostPairs
    *
    * @return Host
    */
    public function setParentHostPairs($val)
    {
        $this->_propDict["parentHostPairs"] = $val;
        return $this;
    }


     /**
     * Gets the passiveDns
    * Passive DNS retrieval about this host.
     *
     * @return array|null The passiveDns
     */
    public function getPassiveDns()
    {
        if (array_key_exists("passiveDns", $this->_propDict)) {
           return $this->_propDict["passiveDns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passiveDns
    * Passive DNS retrieval about this host.
    *
    * @param PassiveDnsRecord[] $val The passiveDns
    *
    * @return Host
    */
    public function setPassiveDns($val)
    {
        $this->_propDict["passiveDns"] = $val;
        return $this;
    }


     /**
     * Gets the passiveDnsReverse
    * Reverse passive DNS retrieval about this host.
     *
     * @return array|null The passiveDnsReverse
     */
    public function getPassiveDnsReverse()
    {
        if (array_key_exists("passiveDnsReverse", $this->_propDict)) {
           return $this->_propDict["passiveDnsReverse"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passiveDnsReverse
    * Reverse passive DNS retrieval about this host.
    *
    * @param PassiveDnsRecord[] $val The passiveDnsReverse
    *
    * @return Host
    */
    public function setPassiveDnsReverse($val)
    {
        $this->_propDict["passiveDnsReverse"] = $val;
        return $this;
    }


     /**
     * Gets the ports
    * The hostPorts associated with a host.
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
    * The hostPorts associated with a host.
    *
    * @param HostPort[] $val The ports
    *
    * @return Host
    */
    public function setPorts($val)
    {
        $this->_propDict["ports"] = $val;
        return $this;
    }

    /**
    * Gets the reputation
    * Represents a calculated reputation of this host.
    *
    * @return HostReputation|null The reputation
    */
    public function getReputation()
    {
        if (array_key_exists("reputation", $this->_propDict)) {
            if (is_a($this->_propDict["reputation"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\HostReputation") || is_null($this->_propDict["reputation"])) {
                return $this->_propDict["reputation"];
            } else {
                $this->_propDict["reputation"] = new HostReputation($this->_propDict["reputation"]);
                return $this->_propDict["reputation"];
            }
        }
        return null;
    }

    /**
    * Sets the reputation
    * Represents a calculated reputation of this host.
    *
    * @param HostReputation $val The reputation
    *
    * @return Host
    */
    public function setReputation($val)
    {
        $this->_propDict["reputation"] = $val;
        return $this;
    }


     /**
     * Gets the sslCertificates
    * The hostSslCertificates that are associated with this host.
     *
     * @return array|null The sslCertificates
     */
    public function getSslCertificates()
    {
        if (array_key_exists("sslCertificates", $this->_propDict)) {
           return $this->_propDict["sslCertificates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sslCertificates
    * The hostSslCertificates that are associated with this host.
    *
    * @param HostSslCertificate[] $val The sslCertificates
    *
    * @return Host
    */
    public function setSslCertificates($val)
    {
        $this->_propDict["sslCertificates"] = $val;
        return $this;
    }


     /**
     * Gets the subdomains
    * The subdomains that are associated with this host.
     *
     * @return array|null The subdomains
     */
    public function getSubdomains()
    {
        if (array_key_exists("subdomains", $this->_propDict)) {
           return $this->_propDict["subdomains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subdomains
    * The subdomains that are associated with this host.
    *
    * @param Subdomain[] $val The subdomains
    *
    * @return Host
    */
    public function setSubdomains($val)
    {
        $this->_propDict["subdomains"] = $val;
        return $this;
    }


     /**
     * Gets the trackers
    * The hostTrackers that are associated with this host.
     *
     * @return array|null The trackers
     */
    public function getTrackers()
    {
        if (array_key_exists("trackers", $this->_propDict)) {
           return $this->_propDict["trackers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trackers
    * The hostTrackers that are associated with this host.
    *
    * @param HostTracker[] $val The trackers
    *
    * @return Host
    */
    public function setTrackers($val)
    {
        $this->_propDict["trackers"] = $val;
        return $this;
    }

    /**
    * Gets the whois
    * The most recent whoisRecord for this host.
    *
    * @return WhoisRecord|null The whois
    */
    public function getWhois()
    {
        if (array_key_exists("whois", $this->_propDict)) {
            if (is_a($this->_propDict["whois"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\WhoisRecord") || is_null($this->_propDict["whois"])) {
                return $this->_propDict["whois"];
            } else {
                $this->_propDict["whois"] = new WhoisRecord($this->_propDict["whois"]);
                return $this->_propDict["whois"];
            }
        }
        return null;
    }

    /**
    * Sets the whois
    * The most recent whoisRecord for this host.
    *
    * @param WhoisRecord $val The whois
    *
    * @return Host
    */
    public function setWhois($val)
    {
        $this->_propDict["whois"] = $val;
        return $this;
    }

}
