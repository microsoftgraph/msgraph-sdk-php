<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutlookTaskFolder File
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
* OutlookTaskFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OutlookTaskFolder extends Entity
{
    /**
    * Gets the changeKey
    *
    * @return string The changeKey
    */
    public function getChangeKey()
    {
        if (array_key_exists("changeKey", $this->_propDict)) {
            return $this->_propDict["changeKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the changeKey
    *
    * @param string $val The changeKey
    *
    * @return OutlookTaskFolder
    */
    public function setChangeKey($val)
    {
        $this->_propDict["changeKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefaultFolder
    *
    * @return bool The isDefaultFolder
    */
    public function getIsDefaultFolder()
    {
        if (array_key_exists("isDefaultFolder", $this->_propDict)) {
            return $this->_propDict["isDefaultFolder"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefaultFolder
    *
    * @param bool $val The isDefaultFolder
    *
    * @return OutlookTaskFolder
    */
    public function setIsDefaultFolder($val)
    {
        $this->_propDict["isDefaultFolder"] = boolval($val);
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
    * @return OutlookTaskFolder
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentGroupKey
    *
    * @return string The parentGroupKey
    */
    public function getParentGroupKey()
    {
        if (array_key_exists("parentGroupKey", $this->_propDict)) {
            return $this->_propDict["parentGroupKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentGroupKey
    *
    * @param string $val The parentGroupKey
    *
    * @return OutlookTaskFolder
    */
    public function setParentGroupKey($val)
    {
        $this->_propDict["parentGroupKey"] = $val;
        return $this;
    }
    

     /** 
     * Gets the multiValueExtendedProperties
     *
     * @return array The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    *
    * @param MultiValueLegacyExtendedProperty $val The multiValueExtendedProperties
    *
    * @return OutlookTaskFolder
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
     *
     * @return array The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    *
    * @param SingleValueLegacyExtendedProperty $val The singleValueExtendedProperties
    *
    * @return OutlookTaskFolder
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
     *
     * @return array The tasks
     */
    public function getTasks()
    {
        if (array_key_exists("tasks", $this->_propDict)) {
           return $this->_propDict["tasks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tasks
    *
    * @param OutlookTask $val The tasks
    *
    * @return OutlookTaskFolder
    */
    public function setTasks($val)
    {
		$this->_propDict["tasks"] = $val;
        return $this;
    }
    
}