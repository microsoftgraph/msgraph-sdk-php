<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MultiTenantOrganization File
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
* MultiTenantOrganization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MultiTenantOrganization extends Entity
{
    /**
    * Gets the createdDateTime
    * Date when multitenant organization was created. Read-only.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Date when multitenant organization was created. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return MultiTenantOrganization
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the multitenant organization.
    *
    * @return string|null The description
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
    * Description of the multitenant organization.
    *
    * @param string $val The description
    *
    * @return MultiTenantOrganization
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name of the multitenant organization.
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
    * Display name of the multitenant organization.
    *
    * @param string $val The displayName
    *
    * @return MultiTenantOrganization
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * State of the multitenant organization. The possible values are: active, inactive, unknownFutureValue. active indicates the multitenant organization is created. inactive indicates the multitenant organization isn't created. Read-only.
    *
    * @return MultiTenantOrganizationState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new MultiTenantOrganizationState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * State of the multitenant organization. The possible values are: active, inactive, unknownFutureValue. active indicates the multitenant organization is created. inactive indicates the multitenant organization isn't created. Read-only.
    *
    * @param MultiTenantOrganizationState $val The state
    *
    * @return MultiTenantOrganization
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

    /**
    * Gets the joinRequest
    * Defines the status of a tenant joining a multitenant organization.
    *
    * @return MultiTenantOrganizationJoinRequestRecord|null The joinRequest
    */
    public function getJoinRequest()
    {
        if (array_key_exists("joinRequest", $this->_propDict)) {
            if (is_a($this->_propDict["joinRequest"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationJoinRequestRecord") || is_null($this->_propDict["joinRequest"])) {
                return $this->_propDict["joinRequest"];
            } else {
                $this->_propDict["joinRequest"] = new MultiTenantOrganizationJoinRequestRecord($this->_propDict["joinRequest"]);
                return $this->_propDict["joinRequest"];
            }
        }
        return null;
    }

    /**
    * Sets the joinRequest
    * Defines the status of a tenant joining a multitenant organization.
    *
    * @param MultiTenantOrganizationJoinRequestRecord $val The joinRequest
    *
    * @return MultiTenantOrganization
    */
    public function setJoinRequest($val)
    {
        $this->_propDict["joinRequest"] = $val;
        return $this;
    }


     /**
     * Gets the tenants
    * Defines tenants added to a multitenant organization.
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
    * Defines tenants added to a multitenant organization.
    *
    * @param MultiTenantOrganizationMember[] $val The tenants
    *
    * @return MultiTenantOrganization
    */
    public function setTenants($val)
    {
        $this->_propDict["tenants"] = $val;
        return $this;
    }

}
