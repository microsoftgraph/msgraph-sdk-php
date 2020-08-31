<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResourceScope File
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
* AccessPackageResourceScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResourceScope extends Entity
{
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
    * @return AccessPackageResourceScope
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return AccessPackageResourceScope
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return AccessPackageResourceScope
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
    * @return AccessPackageResourceScope
    */
    public function setOriginSystem($val)
    {
        $this->_propDict["originSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleOriginId
    *
    * @return string The roleOriginId
    */
    public function getRoleOriginId()
    {
        if (array_key_exists("roleOriginId", $this->_propDict)) {
            return $this->_propDict["roleOriginId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleOriginId
    *
    * @param string $val The roleOriginId
    *
    * @return AccessPackageResourceScope
    */
    public function setRoleOriginId($val)
    {
        $this->_propDict["roleOriginId"] = $val;
        return $this;
    }
    
    /**
    * Gets the isRootScope
    *
    * @return bool The isRootScope
    */
    public function getIsRootScope()
    {
        if (array_key_exists("isRootScope", $this->_propDict)) {
            return $this->_propDict["isRootScope"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRootScope
    *
    * @param bool $val The isRootScope
    *
    * @return AccessPackageResourceScope
    */
    public function setIsRootScope($val)
    {
        $this->_propDict["isRootScope"] = boolval($val);
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
    * @return AccessPackageResourceScope
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackageResource
    *
    * @return AccessPackageResource The accessPackageResource
    */
    public function getAccessPackageResource()
    {
        if (array_key_exists("accessPackageResource", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageResource"], "Beta\Microsoft\Graph\Model\AccessPackageResource")) {
                return $this->_propDict["accessPackageResource"];
            } else {
                $this->_propDict["accessPackageResource"] = new AccessPackageResource($this->_propDict["accessPackageResource"]);
                return $this->_propDict["accessPackageResource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackageResource
    *
    * @param AccessPackageResource $val The accessPackageResource
    *
    * @return AccessPackageResourceScope
    */
    public function setAccessPackageResource($val)
    {
        $this->_propDict["accessPackageResource"] = $val;
        return $this;
    }
    
}