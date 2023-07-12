<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ForwardingPolicy File
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
* ForwardingPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ForwardingPolicy extends Policy
{
    /**
    * Gets the trafficForwardingType
    * Traffic type for forwarding policy. The possible values are: m365, internet, private.
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
    * Traffic type for forwarding policy. The possible values are: m365, internet, private.
    *
    * @param TrafficForwardingType $val The trafficForwardingType
    *
    * @return ForwardingPolicy
    */
    public function setTrafficForwardingType($val)
    {
        $this->_propDict["trafficForwardingType"] = $val;
        return $this;
    }

}
