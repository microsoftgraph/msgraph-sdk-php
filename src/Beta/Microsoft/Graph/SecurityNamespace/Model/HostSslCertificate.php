<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostSslCertificate File
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
* HostSslCertificate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostSslCertificate extends Artifact
{
    /**
    * Gets the firstSeenDateTime
    * The first date and time that this hostSslCertificate was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The first date and time that this hostSslCertificate was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return HostSslCertificate
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * The most recent date and time that this hostSslCertificate was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The most recent date and time that this hostSslCertificate was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return HostSslCertificate
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the ports
    * The ports related with this hostSslCertificate.
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
    * The ports related with this hostSslCertificate.
    *
    * @param HostSslCertificatePort[] $val The ports
    *
    * @return HostSslCertificate
    */
    public function setPorts($val)
    {
        $this->_propDict["ports"] = $val;
        return $this;
    }

    /**
    * Gets the host
    * The host for this hostSslCertificate.
    *
    * @return Host|null The host
    */
    public function getHost()
    {
        if (array_key_exists("host", $this->_propDict)) {
            if (is_a($this->_propDict["host"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Host") || is_null($this->_propDict["host"])) {
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
    * The host for this hostSslCertificate.
    *
    * @param Host $val The host
    *
    * @return HostSslCertificate
    */
    public function setHost($val)
    {
        $this->_propDict["host"] = $val;
        return $this;
    }

    /**
    * Gets the sslCertificate
    * The sslCertificate for this hostSslCertificate.
    *
    * @return SslCertificate|null The sslCertificate
    */
    public function getSslCertificate()
    {
        if (array_key_exists("sslCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["sslCertificate"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SslCertificate") || is_null($this->_propDict["sslCertificate"])) {
                return $this->_propDict["sslCertificate"];
            } else {
                $this->_propDict["sslCertificate"] = new SslCertificate($this->_propDict["sslCertificate"]);
                return $this->_propDict["sslCertificate"];
            }
        }
        return null;
    }

    /**
    * Sets the sslCertificate
    * The sslCertificate for this hostSslCertificate.
    *
    * @param SslCertificate $val The sslCertificate
    *
    * @return HostSslCertificate
    */
    public function setSslCertificate($val)
    {
        $this->_propDict["sslCertificate"] = $val;
        return $this;
    }

}
