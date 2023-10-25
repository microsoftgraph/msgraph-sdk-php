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
namespace Beta\Microsoft\Graph\Model;

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
    * Gets the addedBy
    * The name of the user or application that first added this resource. Read-only.
    *
    * @return string|null The addedBy
    */
    public function getAddedBy()
    {
        if (array_key_exists("addedBy", $this->_propDict)) {
            return $this->_propDict["addedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the addedBy
    * The name of the user or application that first added this resource. Read-only.
    *
    * @param string $val The addedBy
    *
    * @return AccessPackageResource
    */
    public function setAddedBy($val)
    {
        $this->_propDict["addedBy"] = $val;
        return $this;
    }

    /**
    * Gets the addedOn
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The addedOn
    */
    public function getAddedOn()
    {
        if (array_key_exists("addedOn", $this->_propDict)) {
            if (is_a($this->_propDict["addedOn"], "\DateTime") || is_null($this->_propDict["addedOn"])) {
                return $this->_propDict["addedOn"];
            } else {
                $this->_propDict["addedOn"] = new \DateTime($this->_propDict["addedOn"]);
                return $this->_propDict["addedOn"];
            }
        }
        return null;
    }

    /**
    * Sets the addedOn
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The addedOn
    *
    * @return AccessPackageResource
    */
    public function setAddedOn($val)
    {
        $this->_propDict["addedOn"] = $val;
        return $this;
    }


     /**
     * Gets the attributes
    * Contains information about the attributes to be collected from the requestor and sent to the resource application.
     *
     * @return array|null The attributes
     */
    public function getAttributes()
    {
        if (array_key_exists("attributes", $this->_propDict)) {
           return $this->_propDict["attributes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attributes
    * Contains information about the attributes to be collected from the requestor and sent to the resource application.
    *
    * @param AccessPackageResourceAttribute[] $val The attributes
    *
    * @return AccessPackageResource
    */
    public function setAttributes($val)
    {
        $this->_propDict["attributes"] = $val;
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
    * Gets the isPendingOnboarding
    * True if the resource is not yet available for assignment. Read-only.
    *
    * @return bool|null The isPendingOnboarding
    */
    public function getIsPendingOnboarding()
    {
        if (array_key_exists("isPendingOnboarding", $this->_propDict)) {
            return $this->_propDict["isPendingOnboarding"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPendingOnboarding
    * True if the resource is not yet available for assignment. Read-only.
    *
    * @param bool $val The isPendingOnboarding
    *
    * @return AccessPackageResource
    */
    public function setIsPendingOnboarding($val)
    {
        $this->_propDict["isPendingOnboarding"] = boolval($val);
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
    * Gets the resourceType
    * The type of the resource, such as Application if it is a Microsoft Entra connected application, or SharePoint Online Site for a SharePoint Online site.
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
    * The type of the resource, such as Application if it is a Microsoft Entra connected application, or SharePoint Online Site for a SharePoint Online site.
    *
    * @param string $val The resourceType
    *
    * @return AccessPackageResource
    */
    public function setResourceType($val)
    {
        $this->_propDict["resourceType"] = $val;
        return $this;
    }

    /**
    * Gets the url
    * A unique resource locator for the resource, such as the URL for signing a user into an application.
    *
    * @return string|null The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    * A unique resource locator for the resource, such as the URL for signing a user into an application.
    *
    * @param string $val The url
    *
    * @return AccessPackageResource
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }

    /**
    * Gets the accessPackageResourceEnvironment
    * Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
    *
    * @return AccessPackageResourceEnvironment|null The accessPackageResourceEnvironment
    */
    public function getAccessPackageResourceEnvironment()
    {
        if (array_key_exists("accessPackageResourceEnvironment", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageResourceEnvironment"], "\Beta\Microsoft\Graph\Model\AccessPackageResourceEnvironment") || is_null($this->_propDict["accessPackageResourceEnvironment"])) {
                return $this->_propDict["accessPackageResourceEnvironment"];
            } else {
                $this->_propDict["accessPackageResourceEnvironment"] = new AccessPackageResourceEnvironment($this->_propDict["accessPackageResourceEnvironment"]);
                return $this->_propDict["accessPackageResourceEnvironment"];
            }
        }
        return null;
    }

    /**
    * Sets the accessPackageResourceEnvironment
    * Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
    *
    * @param AccessPackageResourceEnvironment $val The accessPackageResourceEnvironment
    *
    * @return AccessPackageResource
    */
    public function setAccessPackageResourceEnvironment($val)
    {
        $this->_propDict["accessPackageResourceEnvironment"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageResourceRoles
    * Read-only. Nullable. Supports $expand.
     *
     * @return array|null The accessPackageResourceRoles
     */
    public function getAccessPackageResourceRoles()
    {
        if (array_key_exists("accessPackageResourceRoles", $this->_propDict)) {
           return $this->_propDict["accessPackageResourceRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageResourceRoles
    * Read-only. Nullable. Supports $expand.
    *
    * @param AccessPackageResourceRole[] $val The accessPackageResourceRoles
    *
    * @return AccessPackageResource
    */
    public function setAccessPackageResourceRoles($val)
    {
        $this->_propDict["accessPackageResourceRoles"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageResourceScopes
    * Read-only. Nullable. Supports $expand.
     *
     * @return array|null The accessPackageResourceScopes
     */
    public function getAccessPackageResourceScopes()
    {
        if (array_key_exists("accessPackageResourceScopes", $this->_propDict)) {
           return $this->_propDict["accessPackageResourceScopes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageResourceScopes
    * Read-only. Nullable. Supports $expand.
    *
    * @param AccessPackageResourceScope[] $val The accessPackageResourceScopes
    *
    * @return AccessPackageResource
    */
    public function setAccessPackageResourceScopes($val)
    {
        $this->_propDict["accessPackageResourceScopes"] = $val;
        return $this;
    }

}
