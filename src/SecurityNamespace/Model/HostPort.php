<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostPort File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

/**
* HostPort class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostPort extends \Microsoft\Graph\Model\Entity
{

     /**
     * Gets the banners
    * The hostPortBanners retrieved from scanning the port.
     *
     * @return array|null The banners
     */
    public function getBanners()
    {
        if (array_key_exists("banners", $this->_propDict)) {
           return $this->_propDict["banners"];
        } else {
            return null;
        }
    }

    /**
    * Sets the banners
    * The hostPortBanners retrieved from scanning the port.
    *
    * @param HostPortBanner[] $val The banners
    *
    * @return HostPort
    */
    public function setBanners($val)
    {
        $this->_propDict["banners"] = $val;
        return $this;
    }

    /**
    * Gets the firstSeenDateTime
    * The first date and time when Microsoft Defender Threat Intelligence observed the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
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
    * The first date and time when Microsoft Defender Threat Intelligence observed the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return HostPort
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastScanDateTime
    * The last date and time when Microsoft Defender Threat Intelligence scanned the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastScanDateTime
    */
    public function getLastScanDateTime()
    {
        if (array_key_exists("lastScanDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastScanDateTime"], "\DateTime") || is_null($this->_propDict["lastScanDateTime"])) {
                return $this->_propDict["lastScanDateTime"];
            } else {
                $this->_propDict["lastScanDateTime"] = new \DateTime($this->_propDict["lastScanDateTime"]);
                return $this->_propDict["lastScanDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastScanDateTime
    * The last date and time when Microsoft Defender Threat Intelligence scanned the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastScanDateTime
    *
    * @return HostPort
    */
    public function setLastScanDateTime($val)
    {
        $this->_propDict["lastScanDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * The last date and time when Microsoft Defender Threat Intelligence observed the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
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
    * The last date and time when Microsoft Defender Threat Intelligence observed the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return HostPort
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the port
    * The numerical identifier of the port which is standardized across the internet.
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
    * The numerical identifier of the port which is standardized across the internet.
    *
    * @param int $val The port
    *
    * @return HostPort
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = intval($val);
        return $this;
    }

    /**
    * Gets the protocol
    * The general protocol used to scan the port. The possible values are: tcp, udp, unknownFutureValue.
    *
    * @return HostPortProtocol|null The protocol
    */
    public function getProtocol()
    {
        if (array_key_exists("protocol", $this->_propDict)) {
            if (is_a($this->_propDict["protocol"], "\Microsoft\Graph\SecurityNamespace\Model\HostPortProtocol") || is_null($this->_propDict["protocol"])) {
                return $this->_propDict["protocol"];
            } else {
                $this->_propDict["protocol"] = new HostPortProtocol($this->_propDict["protocol"]);
                return $this->_propDict["protocol"];
            }
        }
        return null;
    }

    /**
    * Sets the protocol
    * The general protocol used to scan the port. The possible values are: tcp, udp, unknownFutureValue.
    *
    * @param HostPortProtocol $val The protocol
    *
    * @return HostPort
    */
    public function setProtocol($val)
    {
        $this->_propDict["protocol"] = $val;
        return $this;
    }


     /**
     * Gets the services
    * The hostPortComponents retrieved from scanning the port.
     *
     * @return array|null The services
     */
    public function getServices()
    {
        if (array_key_exists("services", $this->_propDict)) {
           return $this->_propDict["services"];
        } else {
            return null;
        }
    }

    /**
    * Sets the services
    * The hostPortComponents retrieved from scanning the port.
    *
    * @param HostPortComponent[] $val The services
    *
    * @return HostPort
    */
    public function setServices($val)
    {
        $this->_propDict["services"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the port. The possible values are: open, filtered, closed, unknownFutureValue.
    *
    * @return HostPortStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\SecurityNamespace\Model\HostPortStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new HostPortStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the port. The possible values are: open, filtered, closed, unknownFutureValue.
    *
    * @param HostPortStatus $val The status
    *
    * @return HostPort
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the timesObserved
    * The total amount of times that Microsoft Defender Threat Intelligence has observed the hostPort in all its scans.
    *
    * @return int|null The timesObserved
    */
    public function getTimesObserved()
    {
        if (array_key_exists("timesObserved", $this->_propDict)) {
            return $this->_propDict["timesObserved"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timesObserved
    * The total amount of times that Microsoft Defender Threat Intelligence has observed the hostPort in all its scans.
    *
    * @param int $val The timesObserved
    *
    * @return HostPort
    */
    public function setTimesObserved($val)
    {
        $this->_propDict["timesObserved"] = intval($val);
        return $this;
    }

    /**
    * Gets the host
    * The host related to this hostPort. This is a reverse navigation property. When you navigate to hostPorts from a host, assume that this is a return reference.
    *
    * @return Host|null The host
    */
    public function getHost()
    {
        if (array_key_exists("host", $this->_propDict)) {
            if (is_a($this->_propDict["host"], "\Microsoft\Graph\SecurityNamespace\Model\Host") || is_null($this->_propDict["host"])) {
                return $this->_propDict["host"];
            } else {
                $this->_propDict["host"] = new Host($this->_propDict["host"]);
                return $this->_propDict["host"];
            }
        }
        return null;
    }

    /**
    * Sets the host
    * The host related to this hostPort. This is a reverse navigation property. When you navigate to hostPorts from a host, assume that this is a return reference.
    *
    * @param Host $val The host
    *
    * @return HostPort
    */
    public function setHost($val)
    {
        $this->_propDict["host"] = $val;
        return $this;
    }

    /**
    * Gets the mostRecentSslCertificate
    * The most recent sslCertificate used to communicate on the port.
    *
    * @return SslCertificate|null The mostRecentSslCertificate
    */
    public function getMostRecentSslCertificate()
    {
        if (array_key_exists("mostRecentSslCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["mostRecentSslCertificate"], "\Microsoft\Graph\SecurityNamespace\Model\SslCertificate") || is_null($this->_propDict["mostRecentSslCertificate"])) {
                return $this->_propDict["mostRecentSslCertificate"];
            } else {
                $this->_propDict["mostRecentSslCertificate"] = new SslCertificate($this->_propDict["mostRecentSslCertificate"]);
                return $this->_propDict["mostRecentSslCertificate"];
            }
        }
        return null;
    }

    /**
    * Sets the mostRecentSslCertificate
    * The most recent sslCertificate used to communicate on the port.
    *
    * @param SslCertificate $val The mostRecentSslCertificate
    *
    * @return HostPort
    */
    public function setMostRecentSslCertificate($val)
    {
        $this->_propDict["mostRecentSslCertificate"] = $val;
        return $this;
    }

}
