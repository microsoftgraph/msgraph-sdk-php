<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChangeNotification File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ChangeNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChangeNotification extends Entity
{
    /**
    * Gets the id
    * Unique ID for the notification. Optional.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Unique ID for the notification. Optional.
    *
    * @param string $val The value of the id
    *
    * @return ChangeNotification
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the subscriptionId
    * The unique identifier of the subscription that generated the notification.
    *
    * @return string The subscriptionId
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
    * The unique identifier of the subscription that generated the notification.
    *
    * @param string $val The value of the subscriptionId
    *
    * @return ChangeNotification
    */
    public function setSubscriptionId($val)
    {
        $this->_propDict["subscriptionId"] = $val;
        return $this;
    }

    /**
    * Gets the subscriptionExpirationDateTime
    * The expiration time for the subscription. Required.
    *
    * @return \DateTime The subscriptionExpirationDateTime
    */
    public function getSubscriptionExpirationDateTime()
    {
        if (array_key_exists("subscriptionExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["subscriptionExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["subscriptionExpirationDateTime"];
            } else {
                $this->_propDict["subscriptionExpirationDateTime"] = new \DateTime($this->_propDict["subscriptionExpirationDateTime"]);
                return $this->_propDict["subscriptionExpirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the subscriptionExpirationDateTime
    * The expiration time for the subscription. Required.
    *
    * @param \DateTime $val The value to assign to the subscriptionExpirationDateTime
    *
    * @return ChangeNotification The ChangeNotification
    */
    public function setSubscriptionExpirationDateTime($val)
    {
        $this->_propDict["subscriptionExpirationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the clientState
    * Value of the clientState property sent in the subscription request (if any). The maximum length is 255 characters. The client can check whether the change notification came from the service by comparing the values of the clientState property. The value of the clientState property sent with the subscription is compared with the value of the clientState property received with each change notification. Optional.
    *
    * @return string The clientState
    */
    public function getClientState()
    {
        if (array_key_exists("clientState", $this->_propDict)) {
            return $this->_propDict["clientState"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientState
    * Value of the clientState property sent in the subscription request (if any). The maximum length is 255 characters. The client can check whether the change notification came from the service by comparing the values of the clientState property. The value of the clientState property sent with the subscription is compared with the value of the clientState property received with each change notification. Optional.
    *
    * @param string $val The value of the clientState
    *
    * @return ChangeNotification
    */
    public function setClientState($val)
    {
        $this->_propDict["clientState"] = $val;
        return $this;
    }

    /**
    * Gets the changeType
    * Indicates the type of change that will raise the change notification. The supported values are: created, updated, deleted. Required.
    *
    * @return ChangeType The changeType
    */
    public function getChangeType()
    {
        if (array_key_exists("changeType", $this->_propDict)) {
            if (is_a($this->_propDict["changeType"], "Microsoft\Graph\Model\ChangeType")) {
                return $this->_propDict["changeType"];
            } else {
                $this->_propDict["changeType"] = new ChangeType($this->_propDict["changeType"]);
                return $this->_propDict["changeType"];
            }
        }
        return null;
    }

    /**
    * Sets the changeType
    * Indicates the type of change that will raise the change notification. The supported values are: created, updated, deleted. Required.
    *
    * @param ChangeType $val The value to assign to the changeType
    *
    * @return ChangeNotification The ChangeNotification
    */
    public function setChangeType($val)
    {
        $this->_propDict["changeType"] = $val;
         return $this;
    }
    /**
    * Gets the resource
    * The URI of the resource that emitted the change notification relative to https://graph.microsoft.com. Required.
    *
    * @return string The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            return $this->_propDict["resource"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resource
    * The URI of the resource that emitted the change notification relative to https://graph.microsoft.com. Required.
    *
    * @param string $val The value of the resource
    *
    * @return ChangeNotification
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    /**
    * Gets the tenantId
    * The unique identifier of the tenant from which the change notification originated.
    *
    * @return string The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    * The unique identifier of the tenant from which the change notification originated.
    *
    * @param string $val The value of the tenantId
    *
    * @return ChangeNotification
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the resourceData
    * The content of this property depends on the type of resource being subscribed to. Required.
    *
    * @return ResourceData The resourceData
    */
    public function getResourceData()
    {
        if (array_key_exists("resourceData", $this->_propDict)) {
            if (is_a($this->_propDict["resourceData"], "Microsoft\Graph\Model\ResourceData")) {
                return $this->_propDict["resourceData"];
            } else {
                $this->_propDict["resourceData"] = new ResourceData($this->_propDict["resourceData"]);
                return $this->_propDict["resourceData"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceData
    * The content of this property depends on the type of resource being subscribed to. Required.
    *
    * @param ResourceData $val The value to assign to the resourceData
    *
    * @return ChangeNotification The ChangeNotification
    */
    public function setResourceData($val)
    {
        $this->_propDict["resourceData"] = $val;
         return $this;
    }
}
