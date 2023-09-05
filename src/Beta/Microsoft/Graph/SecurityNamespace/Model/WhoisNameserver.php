<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WhoisNameserver File
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
* WhoisNameserver class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WhoisNameserver extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the firstSeenDateTime
    * The first seen date and time of this WHOIS contact. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The first seen date and time of this WHOIS contact. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the firstSeenDateTime
    *
    * @return WhoisNameserver The WhoisNameserver
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * The last seen date and time of this WHOIS contact. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The last seen date and time of this WHOIS contact. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the lastSeenDateTime
    *
    * @return WhoisNameserver The WhoisNameserver
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the host
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
    *
    * @param Host $val The value to assign to the host
    *
    * @return WhoisNameserver The WhoisNameserver
    */
    public function setHost($val)
    {
        $this->_propDict["host"] = $val;
         return $this;
    }
}
