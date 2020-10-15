<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivateLinkResource File
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
* PrivateLinkResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivateLinkResource extends Entity
{
    /**
    * Gets the allowedTenantIds
    *
    * @return string The allowedTenantIds
    */
    public function getAllowedTenantIds()
    {
        if (array_key_exists("allowedTenantIds", $this->_propDict)) {
            return $this->_propDict["allowedTenantIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedTenantIds
    *
    * @param string $val The allowedTenantIds
    *
    * @return PrivateLinkResource
    */
    public function setAllowedTenantIds($val)
    {
        $this->_propDict["allowedTenantIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the armResourceId
    *
    * @return string The armResourceId
    */
    public function getArmResourceId()
    {
        if (array_key_exists("armResourceId", $this->_propDict)) {
            return $this->_propDict["armResourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the armResourceId
    *
    * @param string $val The armResourceId
    *
    * @return PrivateLinkResource
    */
    public function setArmResourceId($val)
    {
        $this->_propDict["armResourceId"] = $val;
        return $this;
    }
    
}