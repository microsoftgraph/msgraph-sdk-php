<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VmMetadata File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* VmMetadata class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VmMetadata extends \Microsoft\Graph\Model\Entity
{

    /**
    * Gets the cloudProvider
    *
    * @return VmCloudProvider|null The cloudProvider
    */
    public function getCloudProvider()
    {
        if (array_key_exists("cloudProvider", $this->_propDict)) {
            if (is_a($this->_propDict["cloudProvider"], "\Microsoft\Graph\SecurityNamespace\Model\VmCloudProvider") || is_null($this->_propDict["cloudProvider"])) {
                return $this->_propDict["cloudProvider"];
            } else {
                $this->_propDict["cloudProvider"] = new VmCloudProvider($this->_propDict["cloudProvider"]);
                return $this->_propDict["cloudProvider"];
            }
        }
        return null;
    }

    /**
    * Sets the cloudProvider
    *
    * @param VmCloudProvider $val The value to assign to the cloudProvider
    *
    * @return VmMetadata The VmMetadata
    */
    public function setCloudProvider($val)
    {
        $this->_propDict["cloudProvider"] = $val;
         return $this;
    }
    /**
    * Gets the resourceId
    *
    * @return string|null The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceId
    *
    * @param string $val The value of the resourceId
    *
    * @return VmMetadata
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    /**
    * Gets the subscriptionId
    *
    * @return string|null The subscriptionId
    */
    public function getSubscriptionId()
    {
        if (array_key_exists("subscriptionId", $this->_propDict)) {
            return $this->_propDict["subscriptionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subscriptionId
    *
    * @param string $val The value of the subscriptionId
    *
    * @return VmMetadata
    */
    public function setSubscriptionId($val)
    {
        $this->_propDict["subscriptionId"] = $val;
        return $this;
    }
    /**
    * Gets the vmId
    *
    * @return string|null The vmId
    */
    public function getVmId()
    {
        if (array_key_exists("vmId", $this->_propDict)) {
            return $this->_propDict["vmId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vmId
    *
    * @param string $val The value of the vmId
    *
    * @return VmMetadata
    */
    public function setVmId($val)
    {
        $this->_propDict["vmId"] = $val;
        return $this;
    }
}
