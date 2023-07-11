<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RedundancyConfiguration File
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
* RedundancyConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RedundancyConfiguration extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the redundancyTier
    * Specifies the Device link SKU .The possible values are: noRedundancy, zoneRedundancy.
    *
    * @return RedundancyTier|null The redundancyTier
    */
    public function getRedundancyTier()
    {
        if (array_key_exists("redundancyTier", $this->_propDict)) {
            if (is_a($this->_propDict["redundancyTier"], "\Beta\Microsoft\Graph\Networkaccess\Model\RedundancyTier") || is_null($this->_propDict["redundancyTier"])) {
                return $this->_propDict["redundancyTier"];
            } else {
                $this->_propDict["redundancyTier"] = new RedundancyTier($this->_propDict["redundancyTier"]);
                return $this->_propDict["redundancyTier"];
            }
        }
        return null;
    }

    /**
    * Sets the redundancyTier
    * Specifies the Device link SKU .The possible values are: noRedundancy, zoneRedundancy.
    *
    * @param RedundancyTier $val The value to assign to the redundancyTier
    *
    * @return RedundancyConfiguration The RedundancyConfiguration
    */
    public function setRedundancyTier($val)
    {
        $this->_propDict["redundancyTier"] = $val;
         return $this;
    }
    /**
    * Gets the zoneLocalIpAddress
    * Indicate the specific IP address used for establishing the Border Gateway Protocol (BGP) connection with Microsoft's network.
    *
    * @return string|null The zoneLocalIpAddress
    */
    public function getZoneLocalIpAddress()
    {
        if (array_key_exists("zoneLocalIpAddress", $this->_propDict)) {
            return $this->_propDict["zoneLocalIpAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the zoneLocalIpAddress
    * Indicate the specific IP address used for establishing the Border Gateway Protocol (BGP) connection with Microsoft's network.
    *
    * @param string $val The value of the zoneLocalIpAddress
    *
    * @return RedundancyConfiguration
    */
    public function setZoneLocalIpAddress($val)
    {
        $this->_propDict["zoneLocalIpAddress"] = $val;
        return $this;
    }
}
