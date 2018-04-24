<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResourceOperation File
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
* ResourceOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ResourceOperation extends Entity
{
    /**
    * Gets the resourceName
    *
    * @return string The resourceName
    */
    public function getResourceName()
    {
        if (array_key_exists("resourceName", $this->_propDict)) {
            return $this->_propDict["resourceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceName
    *
    * @param string $val The resourceName
    *
    * @return ResourceOperation
    */
    public function setResourceName($val)
    {
        $this->_propDict["resourceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the actionName
    *
    * @return string The actionName
    */
    public function getActionName()
    {
        if (array_key_exists("actionName", $this->_propDict)) {
            return $this->_propDict["actionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the actionName
    *
    * @param string $val The actionName
    *
    * @return ResourceOperation
    */
    public function setActionName($val)
    {
        $this->_propDict["actionName"] = $val;
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
    * @return ResourceOperation
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
}