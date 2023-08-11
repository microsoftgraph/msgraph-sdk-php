<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MultiTenantOrganizationJoinRequestRecord File
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
* MultiTenantOrganizationJoinRequestRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MultiTenantOrganizationJoinRequestRecord extends Entity
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
    * @return MultiTenantOrganizationJoinRequestRecord
    */
    public function setAddedByTenantId($val)
    {
        $this->_propDict["addedByTenantId"] = $val;
        return $this;
    }

    /**
    * Gets the memberState
    *
    * @return MultiTenantOrganizationMemberState|null The memberState
    */
    public function getMemberState()
    {
        if (array_key_exists("memberState", $this->_propDict)) {
            if (is_a($this->_propDict["memberState"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationMemberState") || is_null($this->_propDict["memberState"])) {
                return $this->_propDict["memberState"];
            } else {
                $this->_propDict["memberState"] = new MultiTenantOrganizationMemberState($this->_propDict["memberState"]);
                return $this->_propDict["memberState"];
            }
        }
        return null;
    }

    /**
    * Sets the memberState
    *
    * @param MultiTenantOrganizationMemberState $val The memberState
    *
    * @return MultiTenantOrganizationJoinRequestRecord
    */
    public function setMemberState($val)
    {
        $this->_propDict["memberState"] = $val;
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
    * @return MultiTenantOrganizationJoinRequestRecord
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }

    /**
    * Gets the transitionDetails
    *
    * @return MultiTenantOrganizationJoinRequestTransitionDetails|null The transitionDetails
    */
    public function getTransitionDetails()
    {
        if (array_key_exists("transitionDetails", $this->_propDict)) {
            if (is_a($this->_propDict["transitionDetails"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationJoinRequestTransitionDetails") || is_null($this->_propDict["transitionDetails"])) {
                return $this->_propDict["transitionDetails"];
            } else {
                $this->_propDict["transitionDetails"] = new MultiTenantOrganizationJoinRequestTransitionDetails($this->_propDict["transitionDetails"]);
                return $this->_propDict["transitionDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the transitionDetails
    *
    * @param MultiTenantOrganizationJoinRequestTransitionDetails $val The transitionDetails
    *
    * @return MultiTenantOrganizationJoinRequestRecord
    */
    public function setTransitionDetails($val)
    {
        $this->_propDict["transitionDetails"] = $val;
        return $this;
    }

}
