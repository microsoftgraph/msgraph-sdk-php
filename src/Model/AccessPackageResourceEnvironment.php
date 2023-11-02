<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResourceEnvironment File
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
* AccessPackageResourceEnvironment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResourceEnvironment extends Entity
{
    /**
    * Gets the createdDateTime
    * The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The description of this object.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description of this object.
    *
    * @param string $val The description
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of this object.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name of this object.
    *
    * @param string $val The displayName
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isDefaultEnvironment
    * Determines whether this is default environment or not. It is set to true for all static origin systems, such as Microsoft Entra groups and Microsoft Entra Applications.
    *
    * @return bool|null The isDefaultEnvironment
    */
    public function getIsDefaultEnvironment()
    {
        if (array_key_exists("isDefaultEnvironment", $this->_propDict)) {
            return $this->_propDict["isDefaultEnvironment"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefaultEnvironment
    * Determines whether this is default environment or not. It is set to true for all static origin systems, such as Microsoft Entra groups and Microsoft Entra Applications.
    *
    * @param bool $val The isDefaultEnvironment
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setIsDefaultEnvironment($val)
    {
        $this->_propDict["isDefaultEnvironment"] = boolval($val);
        return $this;
    }

    /**
    * Gets the modifiedDateTime
    * The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime") || is_null($this->_propDict["modifiedDateTime"])) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the modifiedDateTime
    * The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the originId
    * The unique identifier of this environment in the origin system.
    *
    * @return string|null The originId
    */
    public function getOriginId()
    {
        if (array_key_exists("originId", $this->_propDict)) {
            return $this->_propDict["originId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the originId
    * The unique identifier of this environment in the origin system.
    *
    * @param string $val The originId
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setOriginId($val)
    {
        $this->_propDict["originId"] = $val;
        return $this;
    }

    /**
    * Gets the originSystem
    * The type of the resource in the origin system, that is, SharePointOnline. Requires $filter (eq).
    *
    * @return string|null The originSystem
    */
    public function getOriginSystem()
    {
        if (array_key_exists("originSystem", $this->_propDict)) {
            return $this->_propDict["originSystem"];
        } else {
            return null;
        }
    }

    /**
    * Sets the originSystem
    * The type of the resource in the origin system, that is, SharePointOnline. Requires $filter (eq).
    *
    * @param string $val The originSystem
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setOriginSystem($val)
    {
        $this->_propDict["originSystem"] = $val;
        return $this;
    }


     /**
     * Gets the resources
    * Read-only. Required.
     *
     * @return array|null The resources
     */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
           return $this->_propDict["resources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resources
    * Read-only. Required.
    *
    * @param AccessPackageResource[] $val The resources
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
        return $this;
    }

}
