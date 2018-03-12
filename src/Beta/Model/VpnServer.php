<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnServer File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* VpnServer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class VpnServer extends Entity
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
    * @return VpnServer
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddressOrFqdn
    *
    * @return string The ipAddressOrFqdn
    */
    public function getIpAddressOrFqdn()
    {
        if (array_key_exists("ipAddressOrFqdn", $this->_propDict)) {
            return $this->_propDict["ipAddressOrFqdn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddressOrFqdn
    *
    * @param string $val The value of the ipAddressOrFqdn
    *
    * @return VpnServer
    */
    public function setIpAddressOrFqdn($val)
    {
        $this->_propDict["ipAddressOrFqdn"] = $val;
        return $this;
    }
    /**
    * Gets the address
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the address
    *
    * @param string $val The value of the address
    *
    * @return VpnServer
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    /**
    * Gets the isDefaultServer
    *
    * @return bool The isDefaultServer
    */
    public function getIsDefaultServer()
    {
        if (array_key_exists("isDefaultServer", $this->_propDict)) {
            return $this->_propDict["isDefaultServer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefaultServer
    *
    * @param bool $val The value of the isDefaultServer
    *
    * @return VpnServer
    */
    public function setIsDefaultServer($val)
    {
        $this->_propDict["isDefaultServer"] = $val;
        return $this;
    }
}
