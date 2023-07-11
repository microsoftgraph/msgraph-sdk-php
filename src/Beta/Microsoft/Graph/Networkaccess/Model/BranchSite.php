<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BranchSite File
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
* BranchSite class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BranchSite extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the bandwidthCapacity
    * Determines the maximum allowed Mbps (megabits per second) bandwidth from a branch site. The possible values are:250,500,750,1000.
    *
    * @return int|null The bandwidthCapacity
    */
    public function getBandwidthCapacity()
    {
        if (array_key_exists("bandwidthCapacity", $this->_propDict)) {
            return $this->_propDict["bandwidthCapacity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bandwidthCapacity
    * Determines the maximum allowed Mbps (megabits per second) bandwidth from a branch site. The possible values are:250,500,750,1000.
    *
    * @param int $val The bandwidthCapacity
    *
    * @return BranchSite
    */
    public function setBandwidthCapacity($val)
    {
        $this->_propDict["bandwidthCapacity"] = intval($val);
        return $this;
    }

    /**
    * Gets the connectivityState
    * Determines the branch site status. The possible values are: pending, connected, inactive, error.
    *
    * @return ConnectivityState|null The connectivityState
    */
    public function getConnectivityState()
    {
        if (array_key_exists("connectivityState", $this->_propDict)) {
            if (is_a($this->_propDict["connectivityState"], "\Beta\Microsoft\Graph\Networkaccess\Model\ConnectivityState") || is_null($this->_propDict["connectivityState"])) {
                return $this->_propDict["connectivityState"];
            } else {
                $this->_propDict["connectivityState"] = new ConnectivityState($this->_propDict["connectivityState"]);
                return $this->_propDict["connectivityState"];
            }
        }
        return null;
    }

    /**
    * Sets the connectivityState
    * Determines the branch site status. The possible values are: pending, connected, inactive, error.
    *
    * @param ConnectivityState $val The connectivityState
    *
    * @return BranchSite
    */
    public function setConnectivityState($val)
    {
        $this->_propDict["connectivityState"] = $val;
        return $this;
    }

    /**
    * Gets the country
    * The branch site is created in the specified country.
    *
    * @return string|null The country
    */
    public function getCountry()
    {
        if (array_key_exists("country", $this->_propDict)) {
            return $this->_propDict["country"];
        } else {
            return null;
        }
    }

    /**
    * Sets the country
    * The branch site is created in the specified country.
    *
    * @param string $val The country
    *
    * @return BranchSite
    */
    public function setCountry($val)
    {
        $this->_propDict["country"] = $val;
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
    * @return BranchSite
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
    * @return BranchSite
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the region
    * The branch site is created in the specified location.
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
    * The branch site is created in the specified location.
    *
    * @param Region $val The region
    *
    * @return BranchSite
    */
    public function setRegion($val)
    {
        $this->_propDict["region"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * The branch version.
    *
    * @return string|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * The branch version.
    *
    * @param string $val The version
    *
    * @return BranchSite
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }


     /**
     * Gets the deviceLinks
    * Each unique CPE device associated with a branch is specified. Supports $expand.
     *
     * @return array|null The deviceLinks
     */
    public function getDeviceLinks()
    {
        if (array_key_exists("deviceLinks", $this->_propDict)) {
           return $this->_propDict["deviceLinks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceLinks
    * Each unique CPE device associated with a branch is specified. Supports $expand.
    *
    * @param DeviceLink[] $val The deviceLinks
    *
    * @return BranchSite
    */
    public function setDeviceLinks($val)
    {
        $this->_propDict["deviceLinks"] = $val;
        return $this;
    }


     /**
     * Gets the forwardingProfiles
    * Each forwarding profile associated with a branch site is specified. Supports $expand.
     *
     * @return array|null The forwardingProfiles
     */
    public function getForwardingProfiles()
    {
        if (array_key_exists("forwardingProfiles", $this->_propDict)) {
           return $this->_propDict["forwardingProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the forwardingProfiles
    * Each forwarding profile associated with a branch site is specified. Supports $expand.
    *
    * @param ForwardingProfile[] $val The forwardingProfiles
    *
    * @return BranchSite
    */
    public function setForwardingProfiles($val)
    {
        $this->_propDict["forwardingProfiles"] = $val;
        return $this;
    }

}
