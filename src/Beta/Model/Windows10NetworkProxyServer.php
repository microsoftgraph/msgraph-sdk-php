<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10NetworkProxyServer File
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
* Windows10NetworkProxyServer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows10NetworkProxyServer extends Entity
{
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
    * @return Windows10NetworkProxyServer
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    /**
    * Gets the exceptions
    *
    * @return string The exceptions
    */
    public function getExceptions()
    {
        if (array_key_exists("exceptions", $this->_propDict)) {
            return $this->_propDict["exceptions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exceptions
    *
    * @param string $val The value of the exceptions
    *
    * @return Windows10NetworkProxyServer
    */
    public function setExceptions($val)
    {
        $this->_propDict["exceptions"] = $val;
        return $this;
    }
    /**
    * Gets the useForLocalAddresses
    *
    * @return bool The useForLocalAddresses
    */
    public function getUseForLocalAddresses()
    {
        if (array_key_exists("useForLocalAddresses", $this->_propDict)) {
            return $this->_propDict["useForLocalAddresses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useForLocalAddresses
    *
    * @param bool $val The value of the useForLocalAddresses
    *
    * @return Windows10NetworkProxyServer
    */
    public function setUseForLocalAddresses($val)
    {
        $this->_propDict["useForLocalAddresses"] = $val;
        return $this;
    }
}
