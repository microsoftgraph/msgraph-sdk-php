<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkInterface File
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
* NetworkInterface class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class NetworkInterface extends Entity
{
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The value of the description
    *
    * @return NetworkInterface
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the ipV4Address
    *
    * @return string The ipV4Address
    */
    public function getIpV4Address()
    {
        if (array_key_exists("ipV4Address", $this->_propDict)) {
            return $this->_propDict["ipV4Address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipV4Address
    *
    * @param string $val The value of the ipV4Address
    *
    * @return NetworkInterface
    */
    public function setIpV4Address($val)
    {
        $this->_propDict["ipV4Address"] = $val;
        return $this;
    }
    /**
    * Gets the ipV6Address
    *
    * @return string The ipV6Address
    */
    public function getIpV6Address()
    {
        if (array_key_exists("ipV6Address", $this->_propDict)) {
            return $this->_propDict["ipV6Address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipV6Address
    *
    * @param string $val The value of the ipV6Address
    *
    * @return NetworkInterface
    */
    public function setIpV6Address($val)
    {
        $this->_propDict["ipV6Address"] = $val;
        return $this;
    }
    /**
    * Gets the localIpV6Address
    *
    * @return string The localIpV6Address
    */
    public function getLocalIpV6Address()
    {
        if (array_key_exists("localIpV6Address", $this->_propDict)) {
            return $this->_propDict["localIpV6Address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localIpV6Address
    *
    * @param string $val The value of the localIpV6Address
    *
    * @return NetworkInterface
    */
    public function setLocalIpV6Address($val)
    {
        $this->_propDict["localIpV6Address"] = $val;
        return $this;
    }
    /**
    * Gets the macAddress
    *
    * @return string The macAddress
    */
    public function getMacAddress()
    {
        if (array_key_exists("macAddress", $this->_propDict)) {
            return $this->_propDict["macAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the macAddress
    *
    * @param string $val The value of the macAddress
    *
    * @return NetworkInterface
    */
    public function setMacAddress($val)
    {
        $this->_propDict["macAddress"] = $val;
        return $this;
    }
}
