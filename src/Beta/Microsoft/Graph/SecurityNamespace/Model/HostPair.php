<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostPair File
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
* HostPair class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostPair extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the firstSeenDateTime
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
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return HostPair
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
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
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return HostPair
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the linkKind
    *
    * @return string|null The linkKind
    */
    public function getLinkKind()
    {
        if (array_key_exists("linkKind", $this->_propDict)) {
            return $this->_propDict["linkKind"];
        } else {
            return null;
        }
    }

    /**
    * Sets the linkKind
    *
    * @param string $val The linkKind
    *
    * @return HostPair
    */
    public function setLinkKind($val)
    {
        $this->_propDict["linkKind"] = $val;
        return $this;
    }

    /**
    * Gets the childHost
    *
    * @return Host|null The childHost
    */
    public function getChildHost()
    {
        if (array_key_exists("childHost", $this->_propDict)) {
            if (is_a($this->_propDict["childHost"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Host") || is_null($this->_propDict["childHost"])) {
                return $this->_propDict["childHost"];
            } else {
                $this->_propDict["childHost"] = new Host($this->_propDict["childHost"]);
                return $this->_propDict["childHost"];
            }
        }
        return null;
    }

    /**
    * Sets the childHost
    *
    * @param Host $val The childHost
    *
    * @return HostPair
    */
    public function setChildHost($val)
    {
        $this->_propDict["childHost"] = $val;
        return $this;
    }

    /**
    * Gets the parentHost
    *
    * @return Host|null The parentHost
    */
    public function getParentHost()
    {
        if (array_key_exists("parentHost", $this->_propDict)) {
            if (is_a($this->_propDict["parentHost"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Host") || is_null($this->_propDict["parentHost"])) {
                return $this->_propDict["parentHost"];
            } else {
                $this->_propDict["parentHost"] = new Host($this->_propDict["parentHost"]);
                return $this->_propDict["parentHost"];
            }
        }
        return null;
    }

    /**
    * Sets the parentHost
    *
    * @param Host $val The parentHost
    *
    * @return HostPair
    */
    public function setParentHost($val)
    {
        $this->_propDict["parentHost"] = $val;
        return $this;
    }

}
