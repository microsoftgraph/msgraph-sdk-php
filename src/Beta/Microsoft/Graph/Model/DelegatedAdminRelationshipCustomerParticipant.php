<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminRelationshipCustomerParticipant File
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
* DelegatedAdminRelationshipCustomerParticipant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminRelationshipCustomerParticipant extends Entity
{
    /**
    * Gets the displayName
    * The display name of the customer tenant as set by Microsoft Entra ID. Read-only
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name of the customer tenant as set by Microsoft Entra ID. Read-only
    *
    * @param string $val The value of the displayName
    *
    * @return DelegatedAdminRelationshipCustomerParticipant
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the tenantId
    * The Microsoft Entra ID-assigned tenant ID of the customer tenant.
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    * The Microsoft Entra ID-assigned tenant ID of the customer tenant.
    *
    * @param string $val The value of the tenantId
    *
    * @return DelegatedAdminRelationshipCustomerParticipant
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
}
