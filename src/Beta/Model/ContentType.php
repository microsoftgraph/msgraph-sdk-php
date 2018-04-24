<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* ContentType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ContentType extends Entity
{
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
    * @return ContentType
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the group
    *
    * @return string The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            return $this->_propDict["group"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the group
    *
    * @param string $val The group
    *
    * @return ContentType
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }
    
    /**
    * Gets the hidden
    *
    * @return bool The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hidden
    *
    * @param bool $val The hidden
    *
    * @return ContentType
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the inheritedFrom
    *
    * @return ItemReference The inheritedFrom
    */
    public function getInheritedFrom()
    {
        if (array_key_exists("inheritedFrom", $this->_propDict)) {
            if (is_a($this->_propDict["inheritedFrom"], "Microsoft\Graph\Beta\Model\ItemReference")) {
                return $this->_propDict["inheritedFrom"];
            } else {
                $this->_propDict["inheritedFrom"] = new ItemReference($this->_propDict["inheritedFrom"]);
                return $this->_propDict["inheritedFrom"];
            }
        }
        return null;
    }
    
    /**
    * Sets the inheritedFrom
    *
    * @param ItemReference $val The inheritedFrom
    *
    * @return ContentType
    */
    public function setInheritedFrom($val)
    {
        $this->_propDict["inheritedFrom"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return ContentType
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the order
    *
    * @return ContentTypeOrder The order
    */
    public function getOrder()
    {
        if (array_key_exists("order", $this->_propDict)) {
            if (is_a($this->_propDict["order"], "Microsoft\Graph\Beta\Model\ContentTypeOrder")) {
                return $this->_propDict["order"];
            } else {
                $this->_propDict["order"] = new ContentTypeOrder($this->_propDict["order"]);
                return $this->_propDict["order"];
            }
        }
        return null;
    }
    
    /**
    * Sets the order
    *
    * @param ContentTypeOrder $val The order
    *
    * @return ContentType
    */
    public function setOrder($val)
    {
        $this->_propDict["order"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentId
    *
    * @return string The parentId
    */
    public function getParentId()
    {
        if (array_key_exists("parentId", $this->_propDict)) {
            return $this->_propDict["parentId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentId
    *
    * @param string $val The parentId
    *
    * @return ContentType
    */
    public function setParentId($val)
    {
        $this->_propDict["parentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the readOnly
    *
    * @return bool The readOnly
    */
    public function getReadOnly()
    {
        if (array_key_exists("readOnly", $this->_propDict)) {
            return $this->_propDict["readOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the readOnly
    *
    * @param bool $val The readOnly
    *
    * @return ContentType
    */
    public function setReadOnly($val)
    {
        $this->_propDict["readOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the sealed
    *
    * @return bool The sealed
    */
    public function getSealed()
    {
        if (array_key_exists("sealed", $this->_propDict)) {
            return $this->_propDict["sealed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sealed
    *
    * @param bool $val The sealed
    *
    * @return ContentType
    */
    public function setSealed($val)
    {
        $this->_propDict["sealed"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the columnLinks
     *
     * @return array The columnLinks
     */
    public function getColumnLinks()
    {
        if (array_key_exists("columnLinks", $this->_propDict)) {
           return $this->_propDict["columnLinks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the columnLinks
    *
    * @param ColumnLink $val The columnLinks
    *
    * @return ContentType
    */
    public function setColumnLinks($val)
    {
		$this->_propDict["columnLinks"] = $val;
        return $this;
    }
    
}