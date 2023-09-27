<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResourceRequest File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* AccessPackageResourceRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResourceRequest extends Entity
{
    /**
    * Gets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessPackageResourceRequest
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the requestType
    * The type of the request. Use adminAdd to add a resource, if the caller is an administrator or resource owner, adminUpdate to update a resource, or adminRemove to remove a resource.
    *
    * @return AccessPackageRequestType|null The requestType
    */
    public function getRequestType()
    {
        if (array_key_exists("requestType", $this->_propDict)) {
            if (is_a($this->_propDict["requestType"], "\Microsoft\Graph\Model\AccessPackageRequestType") || is_null($this->_propDict["requestType"])) {
                return $this->_propDict["requestType"];
            } else {
                $this->_propDict["requestType"] = new AccessPackageRequestType($this->_propDict["requestType"]);
                return $this->_propDict["requestType"];
            }
        }
        return null;
    }

    /**
    * Sets the requestType
    * The type of the request. Use adminAdd to add a resource, if the caller is an administrator or resource owner, adminUpdate to update a resource, or adminRemove to remove a resource.
    *
    * @param AccessPackageRequestType $val The requestType
    *
    * @return AccessPackageResourceRequest
    */
    public function setRequestType($val)
    {
        $this->_propDict["requestType"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * The outcome of whether the service was able to add the resource to the catalog.  The value is delivered if the resource was added or removed, and deliveryFailed if it could not be added or removed. Read-only.
    *
    * @return AccessPackageRequestState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\AccessPackageRequestState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AccessPackageRequestState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The outcome of whether the service was able to add the resource to the catalog.  The value is delivered if the resource was added or removed, and deliveryFailed if it could not be added or removed. Read-only.
    *
    * @param AccessPackageRequestState $val The state
    *
    * @return AccessPackageResourceRequest
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

    /**
    * Gets the catalog
    *
    * @return AccessPackageCatalog|null The catalog
    */
    public function getCatalog()
    {
        if (array_key_exists("catalog", $this->_propDict)) {
            if (is_a($this->_propDict["catalog"], "\Microsoft\Graph\Model\AccessPackageCatalog") || is_null($this->_propDict["catalog"])) {
                return $this->_propDict["catalog"];
            } else {
                $this->_propDict["catalog"] = new AccessPackageCatalog($this->_propDict["catalog"]);
                return $this->_propDict["catalog"];
            }
        }
        return null;
    }

    /**
    * Sets the catalog
    *
    * @param AccessPackageCatalog $val The catalog
    *
    * @return AccessPackageResourceRequest
    */
    public function setCatalog($val)
    {
        $this->_propDict["catalog"] = $val;
        return $this;
    }

    /**
    * Gets the resource
    *
    * @return AccessPackageResource|null The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "\Microsoft\Graph\Model\AccessPackageResource") || is_null($this->_propDict["resource"])) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new AccessPackageResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }

    /**
    * Sets the resource
    *
    * @param AccessPackageResource $val The resource
    *
    * @return AccessPackageResourceRequest
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }

}
