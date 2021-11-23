<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutboundSharedUserProfile File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* OutboundSharedUserProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OutboundSharedUserProfile extends DirectoryObject
{
    /**
    * Gets the userId
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return OutboundSharedUserProfile
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }


     /**
     * Gets the tenants
     *
     * @return array|null The tenants
     */
    public function getTenants()
    {
        if (array_key_exists("tenants", $this->_propDict)) {
           return $this->_propDict["tenants"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenants
    *
    * @param TenantReference[] $val The tenants
    *
    * @return OutboundSharedUserProfile
    */
    public function setTenants($val)
    {
        $this->_propDict["tenants"] = $val;
        return $this;
    }

}
