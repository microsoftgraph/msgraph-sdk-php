<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProxiedDomain File
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
* ProxiedDomain class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ProxiedDomain extends Entity
{
    /**
    * Gets the ipAddressOrFQDN
    *
    * @return string The ipAddressOrFQDN
    */
    public function getIpAddressOrFQDN()
    {
        if (array_key_exists("ipAddressOrFQDN", $this->_propDict)) {
            return $this->_propDict["ipAddressOrFQDN"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddressOrFQDN
    *
    * @param string $val The value of the ipAddressOrFQDN
    *
    * @return ProxiedDomain
    */
    public function setIpAddressOrFQDN($val)
    {
        $this->_propDict["ipAddressOrFQDN"] = $val;
        return $this;
    }
    /**
    * Gets the proxy
    *
    * @return string The proxy
    */
    public function getProxy()
    {
        if (array_key_exists("proxy", $this->_propDict)) {
            return $this->_propDict["proxy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the proxy
    *
    * @param string $val The value of the proxy
    *
    * @return ProxiedDomain
    */
    public function setProxy($val)
    {
        $this->_propDict["proxy"] = $val;
        return $this;
    }
}
