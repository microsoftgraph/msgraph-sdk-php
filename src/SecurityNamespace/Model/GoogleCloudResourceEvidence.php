<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GoogleCloudResourceEvidence File
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
* GoogleCloudResourceEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GoogleCloudResourceEvidence extends AlertEvidence
{
    /**
    * Gets the location
    * The zone or region where the resource is located.
    *
    * @return string|null The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            return $this->_propDict["location"];
        } else {
            return null;
        }
    }

    /**
    * Sets the location
    * The zone or region where the resource is located.
    *
    * @param string $val The value of the location
    *
    * @return GoogleCloudResourceEvidence
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }

    /**
    * Gets the locationType
    * The type of location. Possible values are: unknown, regional, zonal, global, unknownFutureValue.
    *
    * @return GoogleCloudLocationType|null The locationType
    */
    public function getLocationType()
    {
        if (array_key_exists("locationType", $this->_propDict)) {
            if (is_a($this->_propDict["locationType"], "\Microsoft\Graph\SecurityNamespace\Model\GoogleCloudLocationType") || is_null($this->_propDict["locationType"])) {
                return $this->_propDict["locationType"];
            } else {
                $this->_propDict["locationType"] = new GoogleCloudLocationType($this->_propDict["locationType"]);
                return $this->_propDict["locationType"];
            }
        }
        return null;
    }

    /**
    * Sets the locationType
    * The type of location. Possible values are: unknown, regional, zonal, global, unknownFutureValue.
    *
    * @param GoogleCloudLocationType $val The value to assign to the locationType
    *
    * @return GoogleCloudResourceEvidence The GoogleCloudResourceEvidence
    */
    public function setLocationType($val)
    {
        $this->_propDict["locationType"] = $val;
         return $this;
    }
    /**
    * Gets the projectId
    * The Google project ID as defined by the user.
    *
    * @return string|null The projectId
    */
    public function getProjectId()
    {
        if (array_key_exists("projectId", $this->_propDict)) {
            return $this->_propDict["projectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the projectId
    * The Google project ID as defined by the user.
    *
    * @param string $val The value of the projectId
    *
    * @return GoogleCloudResourceEvidence
    */
    public function setProjectId($val)
    {
        $this->_propDict["projectId"] = $val;
        return $this;
    }
    /**
    * Gets the projectNumber
    * The project number assigned by Google.
    *
    * @return int|null The projectNumber
    */
    public function getProjectNumber()
    {
        if (array_key_exists("projectNumber", $this->_propDict)) {
            return $this->_propDict["projectNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the projectNumber
    * The project number assigned by Google.
    *
    * @param int $val The value of the projectNumber
    *
    * @return GoogleCloudResourceEvidence
    */
    public function setProjectNumber($val)
    {
        $this->_propDict["projectNumber"] = $val;
        return $this;
    }
    /**
    * Gets the resourceName
    * The name of the resource.
    *
    * @return string|null The resourceName
    */
    public function getResourceName()
    {
        if (array_key_exists("resourceName", $this->_propDict)) {
            return $this->_propDict["resourceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceName
    * The name of the resource.
    *
    * @param string $val The value of the resourceName
    *
    * @return GoogleCloudResourceEvidence
    */
    public function setResourceName($val)
    {
        $this->_propDict["resourceName"] = $val;
        return $this;
    }
    /**
    * Gets the resourceType
    * The type of the resource.
    *
    * @return string|null The resourceType
    */
    public function getResourceType()
    {
        if (array_key_exists("resourceType", $this->_propDict)) {
            return $this->_propDict["resourceType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceType
    * The type of the resource.
    *
    * @param string $val The value of the resourceType
    *
    * @return GoogleCloudResourceEvidence
    */
    public function setResourceType($val)
    {
        $this->_propDict["resourceType"] = $val;
        return $this;
    }
}
