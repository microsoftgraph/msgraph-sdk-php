<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkPosition File
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
* WorkPosition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkPosition extends ItemFacet
{
    /**
    * Gets the categories
    *
    * @return string The categories
    */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
            return $this->_propDict["categories"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the categories
    *
    * @param string $val The categories
    *
    * @return WorkPosition
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the colleagues
     *
     * @return array The colleagues
     */
    public function getColleagues()
    {
        if (array_key_exists("colleagues", $this->_propDict)) {
           return $this->_propDict["colleagues"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the colleagues
    *
    * @param RelatedPerson $val The colleagues
    *
    * @return WorkPosition
    */
    public function setColleagues($val)
    {
		$this->_propDict["colleagues"] = $val;
        return $this;
    }
    
    /**
    * Gets the detail
    *
    * @return PositionDetail The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            if (is_a($this->_propDict["detail"], "Beta\Microsoft\Graph\Model\PositionDetail")) {
                return $this->_propDict["detail"];
            } else {
                $this->_propDict["detail"] = new PositionDetail($this->_propDict["detail"]);
                return $this->_propDict["detail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the detail
    *
    * @param PositionDetail $val The detail
    *
    * @return WorkPosition
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
        return $this;
    }
    
    /**
    * Gets the isCurrent
    *
    * @return bool The isCurrent
    */
    public function getIsCurrent()
    {
        if (array_key_exists("isCurrent", $this->_propDict)) {
            return $this->_propDict["isCurrent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isCurrent
    *
    * @param bool $val The isCurrent
    *
    * @return WorkPosition
    */
    public function setIsCurrent($val)
    {
        $this->_propDict["isCurrent"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the manager
    *
    * @return RelatedPerson The manager
    */
    public function getManager()
    {
        if (array_key_exists("manager", $this->_propDict)) {
            if (is_a($this->_propDict["manager"], "Beta\Microsoft\Graph\Model\RelatedPerson")) {
                return $this->_propDict["manager"];
            } else {
                $this->_propDict["manager"] = new RelatedPerson($this->_propDict["manager"]);
                return $this->_propDict["manager"];
            }
        }
        return null;
    }
    
    /**
    * Sets the manager
    *
    * @param RelatedPerson $val The manager
    *
    * @return WorkPosition
    */
    public function setManager($val)
    {
        $this->_propDict["manager"] = $val;
        return $this;
    }
    
}