<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostPortBanner File
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
* HostPortBanner class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostPortBanner extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the banner
    * The text response received from a web component when scanning a hostPort.
    *
    * @return string|null The banner
    */
    public function getBanner()
    {
        if (array_key_exists("banner", $this->_propDict)) {
            return $this->_propDict["banner"];
        } else {
            return null;
        }
    }

    /**
    * Sets the banner
    * The text response received from a web component when scanning a hostPort.
    *
    * @param string $val The value of the banner
    *
    * @return HostPortBanner
    */
    public function setBanner($val)
    {
        $this->_propDict["banner"] = $val;
        return $this;
    }

    /**
    * Gets the firstSeenDateTime
    * The first date and time when Microsoft Defender Threat Intelligence observed the hostPortBanner. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
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
    * The first date and time when Microsoft Defender Threat Intelligence observed the hostPortBanner. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the firstSeenDateTime
    *
    * @return HostPortBanner The HostPortBanner
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * The last date and time when Microsoft Defender Threat Intelligence observed the hostPortBanner. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
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
    * The last date and time when Microsoft Defender Threat Intelligence observed the hostPortBanner. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the lastSeenDateTime
    *
    * @return HostPortBanner The HostPortBanner
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the scanProtocol
    * The specific protocol used to scan the hostPort.
    *
    * @return string|null The scanProtocol
    */
    public function getScanProtocol()
    {
        if (array_key_exists("scanProtocol", $this->_propDict)) {
            return $this->_propDict["scanProtocol"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scanProtocol
    * The specific protocol used to scan the hostPort.
    *
    * @param string $val The value of the scanProtocol
    *
    * @return HostPortBanner
    */
    public function setScanProtocol($val)
    {
        $this->_propDict["scanProtocol"] = $val;
        return $this;
    }
    /**
    * Gets the timesObserved
    * The total amount of times that Microsoft Defender Threat Intelligence has observed the hostPortBanner in all its scans.
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
    * The total amount of times that Microsoft Defender Threat Intelligence has observed the hostPortBanner in all its scans.
    *
    * @param int $val The value of the timesObserved
    *
    * @return HostPortBanner
    */
    public function setTimesObserved($val)
    {
        $this->_propDict["timesObserved"] = $val;
        return $this;
    }
}
