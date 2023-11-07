<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalConnectivityConfiguration File
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
* LocalConnectivityConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LocalConnectivityConfiguration extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the asn
    * Specifies ASN of one end of IPSec tunnel (local or peer).
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
    * Specifies ASN of one end of IPSec tunnel (local or peer).
    *
    * @param int $val The value of the asn
    *
    * @return LocalConnectivityConfiguration
    */
    public function setAsn($val)
    {
        $this->_propDict["asn"] = $val;
        return $this;
    }
    /**
    * Gets the bgpAddress
    * Specifies BGP IPv4 address of one end of IPSec tunnel (local or peer).
    *
    * @return string|null The bgpAddress
    */
    public function getBgpAddress()
    {
        if (array_key_exists("bgpAddress", $this->_propDict)) {
            return $this->_propDict["bgpAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bgpAddress
    * Specifies BGP IPv4 address of one end of IPSec tunnel (local or peer).
    *
    * @param string $val The value of the bgpAddress
    *
    * @return LocalConnectivityConfiguration
    */
    public function setBgpAddress($val)
    {
        $this->_propDict["bgpAddress"] = $val;
        return $this;
    }
    /**
    * Gets the endpoint
    * Specifies public IPv4 address of one end of IPSec tunnel (local or peer).
    *
    * @return string|null The endpoint
    */
    public function getEndpoint()
    {
        if (array_key_exists("endpoint", $this->_propDict)) {
            return $this->_propDict["endpoint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the endpoint
    * Specifies public IPv4 address of one end of IPSec tunnel (local or peer).
    *
    * @param string $val The value of the endpoint
    *
    * @return LocalConnectivityConfiguration
    */
    public function setEndpoint($val)
    {
        $this->_propDict["endpoint"] = $val;
        return $this;
    }

    /**
    * Gets the region
    * Specifies the region in which the Microsoft end of the tunnel exists. Not applicable for peer configuration. The possible values are: eastUS, eastUS2, westUS, westUS2, westUS3, centralUS, northCentralUS, southCentralUS, northEurope, westEurope, franceCentral, germanyWestCentral, switzerlandNorth, ukSouth, canadaEast, canadaCentral, southAfricaWest, southAfricaNorth, uaeNorth,unknownFutureValue.
    *
    * @return Region|null The region
    */
    public function getRegion()
    {
        if (array_key_exists("region", $this->_propDict)) {
            if (is_a($this->_propDict["region"], "\Beta\Microsoft\Graph\Networkaccess\Model\Region") || is_null($this->_propDict["region"])) {
                return $this->_propDict["region"];
            } else {
                $this->_propDict["region"] = new Region($this->_propDict["region"]);
                return $this->_propDict["region"];
            }
        }
        return null;
    }

    /**
    * Sets the region
    * Specifies the region in which the Microsoft end of the tunnel exists. Not applicable for peer configuration. The possible values are: eastUS, eastUS2, westUS, westUS2, westUS3, centralUS, northCentralUS, southCentralUS, northEurope, westEurope, franceCentral, germanyWestCentral, switzerlandNorth, ukSouth, canadaEast, canadaCentral, southAfricaWest, southAfricaNorth, uaeNorth,unknownFutureValue.
    *
    * @param Region $val The value to assign to the region
    *
    * @return LocalConnectivityConfiguration The LocalConnectivityConfiguration
    */
    public function setRegion($val)
    {
        $this->_propDict["region"] = $val;
         return $this;
    }
}
