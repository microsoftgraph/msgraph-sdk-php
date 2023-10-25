<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MultiTenantOrganizationMember File
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
* MultiTenantOrganizationMember class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MultiTenantOrganizationMember extends DirectoryObject
{
    /**
    * Gets the addedByTenantId
    * Tenant ID of the tenant that added the tenant to the multitenant organization. Read-only.
    *
    * @return string|null The addedByTenantId
    */
    public function getAddedByTenantId()
    {
        if (array_key_exists("addedByTenantId", $this->_propDict)) {
            return $this->_propDict["addedByTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the addedByTenantId
    * Tenant ID of the tenant that added the tenant to the multitenant organization. Read-only.
    *
    * @param string $val The addedByTenantId
    *
    * @return MultiTenantOrganizationMember
    */
    public function setAddedByTenantId($val)
    {
        $this->_propDict["addedByTenantId"] = $val;
        return $this;
    }

    /**
    * Gets the addedDateTime
    * Date and time when the tenant was added to the multitenant organization. Read-only.
    *
    * @return \DateTime|null The addedDateTime
    */
    public function getAddedDateTime()
    {
        if (array_key_exists("addedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["addedDateTime"], "\DateTime") || is_null($this->_propDict["addedDateTime"])) {
                return $this->_propDict["addedDateTime"];
            } else {
                $this->_propDict["addedDateTime"] = new \DateTime($this->_propDict["addedDateTime"]);
                return $this->_propDict["addedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the addedDateTime
    * Date and time when the tenant was added to the multitenant organization. Read-only.
    *
    * @param \DateTime $val The addedDateTime
    *
    * @return MultiTenantOrganizationMember
    */
    public function setAddedDateTime($val)
    {
        $this->_propDict["addedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name of the tenant added to the multitenant organization.
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
    * Display name of the tenant added to the multitenant organization.
    *
    * @param string $val The displayName
    *
    * @return MultiTenantOrganizationMember
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the joinedDateTime
    * Date and time when the tenant joined the multitenant organization. Read-only.
    *
    * @return \DateTime|null The joinedDateTime
    */
    public function getJoinedDateTime()
    {
        if (array_key_exists("joinedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["joinedDateTime"], "\DateTime") || is_null($this->_propDict["joinedDateTime"])) {
                return $this->_propDict["joinedDateTime"];
            } else {
                $this->_propDict["joinedDateTime"] = new \DateTime($this->_propDict["joinedDateTime"]);
                return $this->_propDict["joinedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the joinedDateTime
    * Date and time when the tenant joined the multitenant organization. Read-only.
    *
    * @param \DateTime $val The joinedDateTime
    *
    * @return MultiTenantOrganizationMember
    */
    public function setJoinedDateTime($val)
    {
        $this->_propDict["joinedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the role
    * Role of the tenant in the multitenant organization. The possible values are: owner, member (default), unknownFutureValue. Tenants with the owner role can manage the multitenant organization but tenants with the member role can only participate in a multitenant organization. There can be multiple tenants with the owner role in a multitenant organization.
    *
    * @return MultiTenantOrganizationMemberRole|null The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            if (is_a($this->_propDict["role"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationMemberRole") || is_null($this->_propDict["role"])) {
                return $this->_propDict["role"];
            } else {
                $this->_propDict["role"] = new MultiTenantOrganizationMemberRole($this->_propDict["role"]);
                return $this->_propDict["role"];
            }
        }
        return null;
    }

    /**
    * Sets the role
    * Role of the tenant in the multitenant organization. The possible values are: owner, member (default), unknownFutureValue. Tenants with the owner role can manage the multitenant organization but tenants with the member role can only participate in a multitenant organization. There can be multiple tenants with the owner role in a multitenant organization.
    *
    * @param MultiTenantOrganizationMemberRole $val The role
    *
    * @return MultiTenantOrganizationMember
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * State of the tenant in the multitenant organization. The possible values are: pending, active, removed, unknownFutureValue. Tenants in the pending state must join the multitenant organization to participate in the multitenant organization. Tenants in the active state can participate in the multitenant organization. Tenants in the removed state are in the process of being removed from the multitenant organization. Read-only.
    *
    * @return MultiTenantOrganizationMemberState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationMemberState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new MultiTenantOrganizationMemberState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * State of the tenant in the multitenant organization. The possible values are: pending, active, removed, unknownFutureValue. Tenants in the pending state must join the multitenant organization to participate in the multitenant organization. Tenants in the active state can participate in the multitenant organization. Tenants in the removed state are in the process of being removed from the multitenant organization. Read-only.
    *
    * @param MultiTenantOrganizationMemberState $val The state
    *
    * @return MultiTenantOrganizationMember
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * Tenant ID of the Microsoft Entra tenant added to the multitenant organization. Set at the time tenant is added.Supports $filter. Key.
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
    * Tenant ID of the Microsoft Entra tenant added to the multitenant organization. Set at the time tenant is added.Supports $filter. Key.
    *
    * @param string $val The tenantId
    *
    * @return MultiTenantOrganizationMember
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the transitionDetails
    * Details of the processing status for a tenant in a multitenant organization. Read-only. Nullable.
    *
    * @return MultiTenantOrganizationMemberTransitionDetails|null The transitionDetails
    */
    public function getTransitionDetails()
    {
        if (array_key_exists("transitionDetails", $this->_propDict)) {
            if (is_a($this->_propDict["transitionDetails"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationMemberTransitionDetails") || is_null($this->_propDict["transitionDetails"])) {
                return $this->_propDict["transitionDetails"];
            } else {
                $this->_propDict["transitionDetails"] = new MultiTenantOrganizationMemberTransitionDetails($this->_propDict["transitionDetails"]);
                return $this->_propDict["transitionDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the transitionDetails
    * Details of the processing status for a tenant in a multitenant organization. Read-only. Nullable.
    *
    * @param MultiTenantOrganizationMemberTransitionDetails $val The transitionDetails
    *
    * @return MultiTenantOrganizationMember
    */
    public function setTransitionDetails($val)
    {
        $this->_propDict["transitionDetails"] = $val;
        return $this;
    }

}
