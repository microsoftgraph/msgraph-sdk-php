<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcDomainJoinConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* CloudPcDomainJoinConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcDomainJoinConfiguration extends Entity
{
    /**
    * Gets the onPremisesConnectionId
    *
    * @return string|null The onPremisesConnectionId
    */
    public function getOnPremisesConnectionId()
    {
        if (array_key_exists("onPremisesConnectionId", $this->_propDict)) {
            return $this->_propDict["onPremisesConnectionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesConnectionId
    *
    * @param string $val The value of the onPremisesConnectionId
    *
    * @return CloudPcDomainJoinConfiguration
    */
    public function setOnPremisesConnectionId($val)
    {
        $this->_propDict["onPremisesConnectionId"] = $val;
        return $this;
    }
    /**
    * Gets the regionName
    *
    * @return string|null The regionName
    */
    public function getRegionName()
    {
        if (array_key_exists("regionName", $this->_propDict)) {
            return $this->_propDict["regionName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the regionName
    *
    * @param string $val The value of the regionName
    *
    * @return CloudPcDomainJoinConfiguration
    */
    public function setRegionName($val)
    {
        $this->_propDict["regionName"] = $val;
        return $this;
    }

    /**
    * Gets the type
    *
    * @return CloudPcDomainJoinType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\CloudPcDomainJoinType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new CloudPcDomainJoinType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param CloudPcDomainJoinType $val The value to assign to the type
    *
    * @return CloudPcDomainJoinConfiguration The CloudPcDomainJoinConfiguration
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
