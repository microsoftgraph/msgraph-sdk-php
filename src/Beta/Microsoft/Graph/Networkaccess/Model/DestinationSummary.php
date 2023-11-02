<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DestinationSummary File
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
* DestinationSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DestinationSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the count
    * Count of the aggregation.
    *
    * @return int|null The count
    */
    public function getCount()
    {
        if (array_key_exists("count", $this->_propDict)) {
            return $this->_propDict["count"];
        } else {
            return null;
        }
    }

    /**
    * Sets the count
    * Count of the aggregation.
    *
    * @param int $val The value of the count
    *
    * @return DestinationSummary
    */
    public function setCount($val)
    {
        $this->_propDict["count"] = $val;
        return $this;
    }
    /**
    * Gets the destination
    * Destination FQDN or IP address.
    *
    * @return string|null The destination
    */
    public function getDestination()
    {
        if (array_key_exists("destination", $this->_propDict)) {
            return $this->_propDict["destination"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destination
    * Destination FQDN or IP address.
    *
    * @param string $val The value of the destination
    *
    * @return DestinationSummary
    */
    public function setDestination($val)
    {
        $this->_propDict["destination"] = $val;
        return $this;
    }

    /**
    * Gets the trafficType
    *
    * @return TrafficType|null The trafficType
    */
    public function getTrafficType()
    {
        if (array_key_exists("trafficType", $this->_propDict)) {
            if (is_a($this->_propDict["trafficType"], "\Beta\Microsoft\Graph\Networkaccess\Model\TrafficType") || is_null($this->_propDict["trafficType"])) {
                return $this->_propDict["trafficType"];
            } else {
                $this->_propDict["trafficType"] = new TrafficType($this->_propDict["trafficType"]);
                return $this->_propDict["trafficType"];
            }
        }
        return null;
    }

    /**
    * Sets the trafficType
    *
    * @param TrafficType $val The value to assign to the trafficType
    *
    * @return DestinationSummary The DestinationSummary
    */
    public function setTrafficType($val)
    {
        $this->_propDict["trafficType"] = $val;
         return $this;
    }
}
