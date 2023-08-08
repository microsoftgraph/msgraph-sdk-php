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
