<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ForwardingProfile File
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
* ForwardingProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ForwardingProfile extends Profile
{

     /**
     * Gets the associations
    * Specifies the users, groups, devices, and branch locations whose traffic is associated with the given traffic forwarding profile.
     *
     * @return array|null The associations
     */
    public function getAssociations()
    {
        if (array_key_exists("associations", $this->_propDict)) {
           return $this->_propDict["associations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the associations
    * Specifies the users, groups, devices, and branch locations whose traffic is associated with the given traffic forwarding profile.
    *
    * @param Association[] $val The associations
    *
    * @return ForwardingProfile
    */
    public function setAssociations($val)
    {
        $this->_propDict["associations"] = $val;
        return $this;
    }

    /**
    * Gets the priority
    * Profile priority.
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    * Profile priority.
    *
    * @param int $val The priority
    *
    * @return ForwardingProfile
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }

    /**
    * Gets the trafficForwardingType
    * Profile traffic type. The possible values are: m365, internet, private.
    *
    * @return TrafficForwardingType|null The trafficForwardingType
    */
    public function getTrafficForwardingType()
    {
        if (array_key_exists("trafficForwardingType", $this->_propDict)) {
            if (is_a($this->_propDict["trafficForwardingType"], "\Beta\Microsoft\Graph\Networkaccess\Model\TrafficForwardingType") || is_null($this->_propDict["trafficForwardingType"])) {
                return $this->_propDict["trafficForwardingType"];
            } else {
                $this->_propDict["trafficForwardingType"] = new TrafficForwardingType($this->_propDict["trafficForwardingType"]);
                return $this->_propDict["trafficForwardingType"];
            }
        }
        return null;
    }

    /**
    * Sets the trafficForwardingType
    * Profile traffic type. The possible values are: m365, internet, private.
    *
    * @param TrafficForwardingType $val The trafficForwardingType
    *
    * @return ForwardingProfile
    */
    public function setTrafficForwardingType($val)
    {
        $this->_propDict["trafficForwardingType"] = $val;
        return $this;
    }

}
