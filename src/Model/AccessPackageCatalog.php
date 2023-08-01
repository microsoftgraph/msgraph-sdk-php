<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageCatalog File
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
* AccessPackageCatalog class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageCatalog extends Entity
{
    /**
    * Gets the catalogType
    * Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue.
    *
    * @return AccessPackageCatalogType|null The catalogType
    */
    public function getCatalogType()
    {
        if (array_key_exists("catalogType", $this->_propDict)) {
            if (is_a($this->_propDict["catalogType"], "\Microsoft\Graph\Model\AccessPackageCatalogType") || is_null($this->_propDict["catalogType"])) {
                return $this->_propDict["catalogType"];
            } else {
                $this->_propDict["catalogType"] = new AccessPackageCatalogType($this->_propDict["catalogType"]);
                return $this->_propDict["catalogType"];
            }
        }
        return null;
    }

    /**
    * Sets the catalogType
    * Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue.
    *
    * @param AccessPackageCatalogType $val The catalogType
    *
    * @return AccessPackageCatalog
    */
    public function setCatalogType($val)
    {
        $this->_propDict["catalogType"] = $val;
        return $this;
    }

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
    * @return AccessPackageCatalog
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The description of the access package catalog.
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
    * The description of the access package catalog.
    *
    * @param string $val The description
    *
    * @return AccessPackageCatalog
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the access package catalog.
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
    * The display name of the access package catalog.
    *
    * @param string $val The displayName
    *
    * @return AccessPackageCatalog
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isExternallyVisible
    * Whether the access packages in this catalog can be requested by users outside of the tenant.
    *
    * @return bool|null The isExternallyVisible
    */
    public function getIsExternallyVisible()
    {
        if (array_key_exists("isExternallyVisible", $this->_propDict)) {
            return $this->_propDict["isExternallyVisible"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExternallyVisible
    * Whether the access packages in this catalog can be requested by users outside of the tenant.
    *
    * @param bool $val The isExternallyVisible
    *
    * @return AccessPackageCatalog
    */
    public function setIsExternallyVisible($val)
    {
        $this->_propDict["isExternallyVisible"] = boolval($val);
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
    * @return AccessPackageCatalog
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * Has the value published if the access packages are available for management. The possible values are: unpublished, published, unknownFutureValue.
    *
    * @return AccessPackageCatalogState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\AccessPackageCatalogState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AccessPackageCatalogState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Has the value published if the access packages are available for management. The possible values are: unpublished, published, unknownFutureValue.
    *
    * @param AccessPackageCatalogState $val The state
    *
    * @return AccessPackageCatalog
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackages
    * The access packages in this catalog. Read-only. Nullable.
     *
     * @return array|null The accessPackages
     */
    public function getAccessPackages()
    {
        if (array_key_exists("accessPackages", $this->_propDict)) {
           return $this->_propDict["accessPackages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackages
    * The access packages in this catalog. Read-only. Nullable.
    *
    * @param AccessPackage[] $val The accessPackages
    *
    * @return AccessPackageCatalog
    */
    public function setAccessPackages($val)
    {
        $this->_propDict["accessPackages"] = $val;
        return $this;
    }


     /**
     * Gets the customWorkflowExtensions
     *
     * @return array|null The customWorkflowExtensions
     */
    public function getCustomWorkflowExtensions()
    {
        if (array_key_exists("customWorkflowExtensions", $this->_propDict)) {
           return $this->_propDict["customWorkflowExtensions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customWorkflowExtensions
    *
    * @param CustomCalloutExtension[] $val The customWorkflowExtensions
    *
    * @return AccessPackageCatalog
    */
    public function setCustomWorkflowExtensions($val)
    {
        $this->_propDict["customWorkflowExtensions"] = $val;
        return $this;
    }


     /**
     * Gets the resourceRoles
     *
     * @return array|null The resourceRoles
     */
    public function getResourceRoles()
    {
        if (array_key_exists("resourceRoles", $this->_propDict)) {
           return $this->_propDict["resourceRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceRoles
    *
    * @param AccessPackageResourceRole[] $val The resourceRoles
    *
    * @return AccessPackageCatalog
    */
    public function setResourceRoles($val)
    {
        $this->_propDict["resourceRoles"] = $val;
        return $this;
    }


     /**
     * Gets the resources
    * Access package resources in this catalog.
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
    * Access package resources in this catalog.
    *
    * @param AccessPackageResource[] $val The resources
    *
    * @return AccessPackageCatalog
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
        return $this;
    }


     /**
     * Gets the resourceScopes
     *
     * @return array|null The resourceScopes
     */
    public function getResourceScopes()
    {
        if (array_key_exists("resourceScopes", $this->_propDict)) {
           return $this->_propDict["resourceScopes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceScopes
    *
    * @param AccessPackageResourceScope[] $val The resourceScopes
    *
    * @return AccessPackageCatalog
    */
    public function setResourceScopes($val)
    {
        $this->_propDict["resourceScopes"] = $val;
        return $this;
    }

}
