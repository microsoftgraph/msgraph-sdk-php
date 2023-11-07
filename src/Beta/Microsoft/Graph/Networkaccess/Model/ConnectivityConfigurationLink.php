<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectivityConfigurationLink File
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
* ConnectivityConfigurationLink class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectivityConfigurationLink extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    * Specifies the name of the link.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Specifies the name of the link.
    *
    * @param string $val The displayName
    *
    * @return ConnectivityConfigurationLink
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the localConfigurations
    * Specifies Microsoft's end of the tunnel configuration for a device link.
     *
     * @return array|null The localConfigurations
     */
    public function getLocalConfigurations()
    {
        if (array_key_exists("localConfigurations", $this->_propDict)) {
           return $this->_propDict["localConfigurations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localConfigurations
    * Specifies Microsoft's end of the tunnel configuration for a device link.
    *
    * @param LocalConnectivityConfiguration[] $val The localConfigurations
    *
    * @return ConnectivityConfigurationLink
    */
    public function setLocalConfigurations($val)
    {
        $this->_propDict["localConfigurations"] = $val;
        return $this;
    }

    /**
    * Gets the peerConfiguration
    * Specifies the customer's end of the tunnel configuration for a device link.
    *
    * @return PeerConnectivityConfiguration|null The peerConfiguration
    */
    public function getPeerConfiguration()
    {
        if (array_key_exists("peerConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["peerConfiguration"], "\Beta\Microsoft\Graph\Networkaccess\Model\PeerConnectivityConfiguration") || is_null($this->_propDict["peerConfiguration"])) {
                return $this->_propDict["peerConfiguration"];
            } else {
                $this->_propDict["peerConfiguration"] = new PeerConnectivityConfiguration($this->_propDict["peerConfiguration"]);
                return $this->_propDict["peerConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the peerConfiguration
    * Specifies the customer's end of the tunnel configuration for a device link.
    *
    * @param PeerConnectivityConfiguration $val The peerConfiguration
    *
    * @return ConnectivityConfigurationLink
    */
    public function setPeerConfiguration($val)
    {
        $this->_propDict["peerConfiguration"] = $val;
        return $this;
    }

}
