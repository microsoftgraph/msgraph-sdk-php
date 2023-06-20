<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BgpConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;
/**
* BgpConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BgpConfiguration extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the asn
    *
    * @return int|null The asn
    */
    public function getAsn()
    {
        if (array_key_exists("asn", $this->_propDict)) {
            return $this->_propDict["asn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the asn
    *
    * @param int $val The value of the asn
    *
    * @return BgpConfiguration
    */
    public function setAsn($val)
    {
        $this->_propDict["asn"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddress
    *
    * @return string|null The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    *
    * @param string $val The value of the ipAddress
    *
    * @return BgpConfiguration
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    /**
    * Gets the localIpAddress
    *
    * @return string|null The localIpAddress
    */
    public function getLocalIpAddress()
    {
        if (array_key_exists("localIpAddress", $this->_propDict)) {
            return $this->_propDict["localIpAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localIpAddress
    *
    * @param string $val The value of the localIpAddress
    *
    * @return BgpConfiguration
    */
    public function setLocalIpAddress($val)
    {
        $this->_propDict["localIpAddress"] = $val;
        return $this;
    }
    /**
    * Gets the peerIpAddress
    *
    * @return string|null The peerIpAddress
    */
    public function getPeerIpAddress()
    {
        if (array_key_exists("peerIpAddress", $this->_propDict)) {
            return $this->_propDict["peerIpAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the peerIpAddress
    *
    * @param string $val The value of the peerIpAddress
    *
    * @return BgpConfiguration
    */
    public function setPeerIpAddress($val)
    {
        $this->_propDict["peerIpAddress"] = $val;
        return $this;
    }
}
