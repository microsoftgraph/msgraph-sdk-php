<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10VpnProxyServer File
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
* Windows10VpnProxyServer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows10VpnProxyServer extends VpnProxyServer
{
    /**
    * Gets the bypassProxyServerForLocalAddress
    *
    * @return bool The bypassProxyServerForLocalAddress
    */
    public function getBypassProxyServerForLocalAddress()
    {
        if (array_key_exists("bypassProxyServerForLocalAddress", $this->_propDict)) {
            return $this->_propDict["bypassProxyServerForLocalAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bypassProxyServerForLocalAddress
    *
    * @param bool $val The value of the bypassProxyServerForLocalAddress
    *
    * @return Windows10VpnProxyServer
    */
    public function setBypassProxyServerForLocalAddress($val)
    {
        $this->_propDict["bypassProxyServerForLocalAddress"] = $val;
        return $this;
    }
}
