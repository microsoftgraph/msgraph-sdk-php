<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantRelationship File
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
* TenantRelationship class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantRelationship extends Entity
{
    /**
    * Gets the managedTenants
    * The operations available to interact with the multi-tenant management platform.
    *
    * @return \Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant|null The managedTenants
    */
    public function getManagedTenants()
    {
        if (array_key_exists("managedTenants", $this->_propDict)) {
            if (is_a($this->_propDict["managedTenants"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant") || is_null($this->_propDict["managedTenants"])) {
                return $this->_propDict["managedTenants"];
            } else {
                $this->_propDict["managedTenants"] = new \Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant($this->_propDict["managedTenants"]);
                return $this->_propDict["managedTenants"];
            }
        }
        return null;
    }

    /**
    * Sets the managedTenants
    * The operations available to interact with the multi-tenant management platform.
    *
    * @param \Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant $val The managedTenants
    *
    * @return TenantRelationship
    */
    public function setManagedTenants($val)
    {
        $this->_propDict["managedTenants"] = $val;
        return $this;
    }

}
