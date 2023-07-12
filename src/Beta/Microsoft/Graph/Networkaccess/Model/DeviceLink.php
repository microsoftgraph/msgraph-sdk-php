<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceLink File
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
* DeviceLink class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceLink extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the bandwidthCapacityInMbps
    * Determines the maximum allowed Mbps (megabits per second) bandwidth from a branch site. The possible values are:250,500,750,1000.
    *
    * @return BandwidthCapacityInMbps|null The bandwidthCapacityInMbps
    */
    public function getBandwidthCapacityInMbps()
    {
        if (array_key_exists("bandwidthCapacityInMbps", $this->_propDict)) {
            if (is_a($this->_propDict["bandwidthCapacityInMbps"], "\Beta\Microsoft\Graph\Networkaccess\Model\BandwidthCapacityInMbps") || is_null($this->_propDict["bandwidthCapacityInMbps"])) {
                return $this->_propDict["bandwidthCapacityInMbps"];
            } else {
                $this->_propDict["bandwidthCapacityInMbps"] = new BandwidthCapacityInMbps($this->_propDict["bandwidthCapacityInMbps"]);
                return $this->_propDict["bandwidthCapacityInMbps"];
            }
        }
        return null;
    }

    /**
    * Sets the bandwidthCapacityInMbps
    * Determines the maximum allowed Mbps (megabits per second) bandwidth from a branch site. The possible values are:250,500,750,1000.
    *
    * @param BandwidthCapacityInMbps $val The bandwidthCapacityInMbps
    *
    * @return DeviceLink
    */
    public function setBandwidthCapacityInMbps($val)
    {
        $this->_propDict["bandwidthCapacityInMbps"] = $val;
        return $this;
    }

    /**
    * Gets the bgpConfiguration
    * The border gateway protocol specifies the IP address and ASN for directing traffic from a link to the edge.
    *
    * @return BgpConfiguration|null The bgpConfiguration
    */
    public function getBgpConfiguration()
    {
        if (array_key_exists("bgpConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["bgpConfiguration"], "\Beta\Microsoft\Graph\Networkaccess\Model\BgpConfiguration") || is_null($this->_propDict["bgpConfiguration"])) {
                return $this->_propDict["bgpConfiguration"];
            } else {
                $this->_propDict["bgpConfiguration"] = new BgpConfiguration($this->_propDict["bgpConfiguration"]);
                return $this->_propDict["bgpConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the bgpConfiguration
    * The border gateway protocol specifies the IP address and ASN for directing traffic from a link to the edge.
    *
    * @param BgpConfiguration $val The bgpConfiguration
    *
    * @return DeviceLink
    */
    public function setBgpConfiguration($val)
    {
        $this->_propDict["bgpConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the deviceVendor
    * Specifies the manufacturer of the deviceLink. The possible values are: barracudaNetworks, checkPoint, ciscoMeraki, citrix, fortinet, hpeAruba, netFoundry, nuage, openSystems, paloAltoNetworks, riverbedTechnology, silverPeak, vmWareSdWan, versa, other, unknownFutureValue.
    *
    * @return DeviceVendor|null The deviceVendor
    */
    public function getDeviceVendor()
    {
        if (array_key_exists("deviceVendor", $this->_propDict)) {
            if (is_a($this->_propDict["deviceVendor"], "\Beta\Microsoft\Graph\Networkaccess\Model\DeviceVendor") || is_null($this->_propDict["deviceVendor"])) {
                return $this->_propDict["deviceVendor"];
            } else {
                $this->_propDict["deviceVendor"] = new DeviceVendor($this->_propDict["deviceVendor"]);
                return $this->_propDict["deviceVendor"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceVendor
    * Specifies the manufacturer of the deviceLink. The possible values are: barracudaNetworks, checkPoint, ciscoMeraki, citrix, fortinet, hpeAruba, netFoundry, nuage, openSystems, paloAltoNetworks, riverbedTechnology, silverPeak, vmWareSdWan, versa, other, unknownFutureValue.
    *
    * @param DeviceVendor $val The deviceVendor
    *
    * @return DeviceLink
    */
    public function setDeviceVendor($val)
    {
        $this->_propDict["deviceVendor"] = $val;
        return $this;
    }

    /**
    * Gets the ipAddress
    * Specifies the client IPv4 of the link
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
    * Specifies the client IPv4 of the link
    *
    * @param string $val The ipAddress
    *
    * @return DeviceLink
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * last modified time.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * last modified time.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceLink
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the name
    * Name.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name.
    *
    * @param string $val The name
    *
    * @return DeviceLink
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the redundancyConfiguration
    *
    * @return RedundancyConfiguration|null The redundancyConfiguration
    */
    public function getRedundancyConfiguration()
    {
        if (array_key_exists("redundancyConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["redundancyConfiguration"], "\Beta\Microsoft\Graph\Networkaccess\Model\RedundancyConfiguration") || is_null($this->_propDict["redundancyConfiguration"])) {
                return $this->_propDict["redundancyConfiguration"];
            } else {
                $this->_propDict["redundancyConfiguration"] = new RedundancyConfiguration($this->_propDict["redundancyConfiguration"]);
                return $this->_propDict["redundancyConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the redundancyConfiguration
    *
    * @param RedundancyConfiguration $val The redundancyConfiguration
    *
    * @return DeviceLink
    */
    public function setRedundancyConfiguration($val)
    {
        $this->_propDict["redundancyConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the tunnelConfiguration
    * The connectivity settings, including the protocol, IPSec policy, and preshared key, are specified for establishing connectivity.
    *
    * @return TunnelConfiguration|null The tunnelConfiguration
    */
    public function getTunnelConfiguration()
    {
        if (array_key_exists("tunnelConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["tunnelConfiguration"], "\Beta\Microsoft\Graph\Networkaccess\Model\TunnelConfiguration") || is_null($this->_propDict["tunnelConfiguration"])) {
                return $this->_propDict["tunnelConfiguration"];
            } else {
                $this->_propDict["tunnelConfiguration"] = new TunnelConfiguration($this->_propDict["tunnelConfiguration"]);
                return $this->_propDict["tunnelConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the tunnelConfiguration
    * The connectivity settings, including the protocol, IPSec policy, and preshared key, are specified for establishing connectivity.
    *
    * @param TunnelConfiguration $val The tunnelConfiguration
    *
    * @return DeviceLink
    */
    public function setTunnelConfiguration($val)
    {
        $this->_propDict["tunnelConfiguration"] = $val;
        return $this;
    }

}
