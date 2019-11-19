<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedPermissionClassification File
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
* DelegatedPermissionClassification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DelegatedPermissionClassification extends Entity
{
    /**
    * Gets the permissionId
    *
    * @return string The permissionId
    */
    public function getPermissionId()
    {
        if (array_key_exists("permissionId", $this->_propDict)) {
            return $this->_propDict["permissionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permissionId
    *
    * @param string $val The permissionId
    *
    * @return DelegatedPermissionClassification
    */
    public function setPermissionId($val)
    {
        $this->_propDict["permissionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissionName
    *
    * @return string The permissionName
    */
    public function getPermissionName()
    {
        if (array_key_exists("permissionName", $this->_propDict)) {
            return $this->_propDict["permissionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permissionName
    *
    * @param string $val The permissionName
    *
    * @return DelegatedPermissionClassification
    */
    public function setPermissionName($val)
    {
        $this->_propDict["permissionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the classification
    *
    * @return PermissionClassificationType The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "Microsoft\Graph\Beta\Model\PermissionClassificationType")) {
                return $this->_propDict["classification"];
            } else {
                $this->_propDict["classification"] = new PermissionClassificationType($this->_propDict["classification"]);
                return $this->_propDict["classification"];
            }
        }
        return null;
    }
    
    /**
    * Sets the classification
    *
    * @param PermissionClassificationType $val The classification
    *
    * @return DelegatedPermissionClassification
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }
    
}