<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutlookTaskGroup File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* OutlookTaskGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OutlookTaskGroup extends Entity
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
    * @return OutlookTaskGroup
    */
    public function setChangeKey($val)
    {
        $this->_propDict["changeKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefaultGroup
    *
    * @return bool The isDefaultGroup
    */
    public function getIsDefaultGroup()
    {
        if (array_key_exists("isDefaultGroup", $this->_propDict)) {
            return $this->_propDict["isDefaultGroup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefaultGroup
    *
    * @param bool $val The isDefaultGroup
    *
    * @return OutlookTaskGroup
    */
    public function setIsDefaultGroup($val)
    {
        $this->_propDict["isDefaultGroup"] = boolval($val);
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
    * @return OutlookTaskGroup
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupKey
    *
    * @return string The groupKey
    */
    public function getGroupKey()
    {
        if (array_key_exists("groupKey", $this->_propDict)) {
            return $this->_propDict["groupKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupKey
    *
    * @param string $val The groupKey
    *
    * @return OutlookTaskGroup
    */
    public function setGroupKey($val)
    {
        $this->_propDict["groupKey"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taskFolders
     *
     * @return array The taskFolders
     */
    public function getTaskFolders()
    {
        if (array_key_exists("taskFolders", $this->_propDict)) {
           return $this->_propDict["taskFolders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the taskFolders
    *
    * @param OutlookTaskFolder $val The taskFolders
    *
    * @return OutlookTaskGroup
    */
    public function setTaskFolders($val)
    {
		$this->_propDict["taskFolders"] = $val;
        return $this;
    }
    
}