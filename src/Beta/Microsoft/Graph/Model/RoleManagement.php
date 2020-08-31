<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleManagement File
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
* RoleManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoleManagement extends Entity
{
    /**
    * Gets the directory
    *
    * @return RbacApplication The directory
    */
    public function getDirectory()
    {
        if (array_key_exists("directory", $this->_propDict)) {
            if (is_a($this->_propDict["directory"], "Beta\Microsoft\Graph\Model\RbacApplication")) {
                return $this->_propDict["directory"];
            } else {
                $this->_propDict["directory"] = new RbacApplication($this->_propDict["directory"]);
                return $this->_propDict["directory"];
            }
        }
        return null;
    }
    
    /**
    * Sets the directory
    *
    * @param RbacApplication $val The directory
    *
    * @return RoleManagement
    */
    public function setDirectory($val)
    {
        $this->_propDict["directory"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceManagement
    * The RbacApplication for Device Management
    *
    * @return RbacApplicationMultiple The deviceManagement
    */
    public function getDeviceManagement()
    {
        if (array_key_exists("deviceManagement", $this->_propDict)) {
            if (is_a($this->_propDict["deviceManagement"], "Beta\Microsoft\Graph\Model\RbacApplicationMultiple")) {
                return $this->_propDict["deviceManagement"];
            } else {
                $this->_propDict["deviceManagement"] = new RbacApplicationMultiple($this->_propDict["deviceManagement"]);
                return $this->_propDict["deviceManagement"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceManagement
    * The RbacApplication for Device Management
    *
    * @param RbacApplicationMultiple $val The deviceManagement
    *
    * @return RoleManagement
    */
    public function setDeviceManagement($val)
    {
        $this->_propDict["deviceManagement"] = $val;
        return $this;
    }
    
}