<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResource File
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
* AccessPackageResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResource extends Entity
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
    * @return AccessPackageResource
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * A description for the resource.
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
    * A description for the resource.
    *
    * @param string $val The description
    *
    * @return AccessPackageResource
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the resource, such as the application name, group name or site name.
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
    * The display name of the resource, such as the application name, group name or site name.
    *
    * @param string $val The displayName
    *
    * @return AccessPackageResource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the modifiedDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return AccessPackageResource
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the originId
    * The unique identifier of the resource in the origin system. In the case of a Microsoft Entra group, this is the identifier of the group.
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
    * The unique identifier of the resource in the origin system. In the case of a Microsoft Entra group, this is the identifier of the group.
    *
    * @param string $val The originId
    *
    * @return AccessPackageResource
    */
    public function setOriginId($val)
    {
        $this->_propDict["originId"] = $val;
        return $this;
    }

    /**
    * Gets the originSystem
    * The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
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
    * The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
    *
    * @param string $val The originSystem
    *
    * @return AccessPackageResource
    */
    public function setOriginSystem($val)
    {
        $this->_propDict["originSystem"] = $val;
        return $this;
    }

    /**
    * Gets the environment
    * Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
    *
    * @return AccessPackageResourceEnvironment|null The environment
    */
    public function getEnvironment()
    {
        if (array_key_exists("environment", $this->_propDict)) {
            if (is_a($this->_propDict["environment"], "\Microsoft\Graph\Model\AccessPackageResourceEnvironment") || is_null($this->_propDict["environment"])) {
                return $this->_propDict["environment"];
            } else {
                $this->_propDict["environment"] = new AccessPackageResourceEnvironment($this->_propDict["environment"]);
                return $this->_propDict["environment"];
            }
        }
        return null;
    }

    /**
    * Sets the environment
    * Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
    *
    * @param AccessPackageResourceEnvironment $val The environment
    *
    * @return AccessPackageResource
    */
    public function setEnvironment($val)
    {
        $this->_propDict["environment"] = $val;
        return $this;
    }


     /**
     * Gets the roles
    * Read-only. Nullable. Supports $expand.
     *
     * @return array|null The roles
     */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
           return $this->_propDict["roles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roles
    * Read-only. Nullable. Supports $expand.
    *
    * @param AccessPackageResourceRole[] $val The roles
    *
    * @return AccessPackageResource
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
        return $this;
    }


     /**
     * Gets the scopes
    * Read-only. Nullable. Supports $expand.
     *
     * @return array|null The scopes
     */
    public function getScopes()
    {
        if (array_key_exists("scopes", $this->_propDict)) {
           return $this->_propDict["scopes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopes
    * Read-only. Nullable. Supports $expand.
    *
    * @param AccessPackageResourceScope[] $val The scopes
    *
    * @return AccessPackageResource
    */
    public function setScopes($val)
    {
        $this->_propDict["scopes"] = $val;
        return $this;
    }

}
