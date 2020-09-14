<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AccessPackageResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResource extends Entity
{
    /**
    * Gets the addedBy
    *
    * @return string The addedBy
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
    *
    * @return \DateTime The addedOn
    */
    public function getAddedOn()
    {
        if (array_key_exists("addedOn", $this->_propDict)) {
            if (is_a($this->_propDict["addedOn"], "\DateTime")) {
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
    * Gets the description
    *
    * @return string The description
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
    *
    * @return string The displayName
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
    *
    * @return bool The isPendingOnboarding
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
    *
    * @return string The originId
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
    *
    * @return string The originSystem
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
    *
    * @return string The resourceType
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
    *
    * @return string The url
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
     * Gets the accessPackageResourceRoles
     *
     * @return array The accessPackageResourceRoles
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
    *
    * @param AccessPackageResourceRole $val The accessPackageResourceRoles
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
     *
     * @return array The accessPackageResourceScopes
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
    *
    * @param AccessPackageResourceScope $val The accessPackageResourceScopes
    *
    * @return AccessPackageResource
    */
    public function setAccessPackageResourceScopes($val)
    {
		$this->_propDict["accessPackageResourceScopes"] = $val;
        return $this;
    }
    
}