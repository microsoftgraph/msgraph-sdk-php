<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MultiTenantOrganizationJoinRequestTransitionDetails File
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
* MultiTenantOrganizationJoinRequestTransitionDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MultiTenantOrganizationJoinRequestTransitionDetails extends Entity
{

    /**
    * Gets the desiredMemberState
    *
    * @return MultiTenantOrganizationMemberState|null The desiredMemberState
    */
    public function getDesiredMemberState()
    {
        if (array_key_exists("desiredMemberState", $this->_propDict)) {
            if (is_a($this->_propDict["desiredMemberState"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationMemberState") || is_null($this->_propDict["desiredMemberState"])) {
                return $this->_propDict["desiredMemberState"];
            } else {
                $this->_propDict["desiredMemberState"] = new MultiTenantOrganizationMemberState($this->_propDict["desiredMemberState"]);
                return $this->_propDict["desiredMemberState"];
            }
        }
        return null;
    }

    /**
    * Sets the desiredMemberState
    *
    * @param MultiTenantOrganizationMemberState $val The value to assign to the desiredMemberState
    *
    * @return MultiTenantOrganizationJoinRequestTransitionDetails The MultiTenantOrganizationJoinRequestTransitionDetails
    */
    public function setDesiredMemberState($val)
    {
        $this->_propDict["desiredMemberState"] = $val;
         return $this;
    }
    /**
    * Gets the details
    *
    * @return string|null The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            return $this->_propDict["details"];
        } else {
            return null;
        }
    }

    /**
    * Sets the details
    *
    * @param string $val The value of the details
    *
    * @return MultiTenantOrganizationJoinRequestTransitionDetails
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return MultiTenantOrganizationMemberProcessingStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationMemberProcessingStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new MultiTenantOrganizationMemberProcessingStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param MultiTenantOrganizationMemberProcessingStatus $val The value to assign to the status
    *
    * @return MultiTenantOrganizationJoinRequestTransitionDetails The MultiTenantOrganizationJoinRequestTransitionDetails
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
