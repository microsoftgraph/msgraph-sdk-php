<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MultiTenantOrganizationMemberTransitionDetails File
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
* MultiTenantOrganizationMemberTransitionDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MultiTenantOrganizationMemberTransitionDetails extends Entity
{

    /**
    * Gets the desiredRole
    *
    * @return MultiTenantOrganizationMemberRole|null The desiredRole
    */
    public function getDesiredRole()
    {
        if (array_key_exists("desiredRole", $this->_propDict)) {
            if (is_a($this->_propDict["desiredRole"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationMemberRole") || is_null($this->_propDict["desiredRole"])) {
                return $this->_propDict["desiredRole"];
            } else {
                $this->_propDict["desiredRole"] = new MultiTenantOrganizationMemberRole($this->_propDict["desiredRole"]);
                return $this->_propDict["desiredRole"];
            }
        }
        return null;
    }

    /**
    * Sets the desiredRole
    *
    * @param MultiTenantOrganizationMemberRole $val The value to assign to the desiredRole
    *
    * @return MultiTenantOrganizationMemberTransitionDetails The MultiTenantOrganizationMemberTransitionDetails
    */
    public function setDesiredRole($val)
    {
        $this->_propDict["desiredRole"] = $val;
         return $this;
    }

    /**
    * Gets the desiredState
    *
    * @return MultiTenantOrganizationMemberState|null The desiredState
    */
    public function getDesiredState()
    {
        if (array_key_exists("desiredState", $this->_propDict)) {
            if (is_a($this->_propDict["desiredState"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationMemberState") || is_null($this->_propDict["desiredState"])) {
                return $this->_propDict["desiredState"];
            } else {
                $this->_propDict["desiredState"] = new MultiTenantOrganizationMemberState($this->_propDict["desiredState"]);
                return $this->_propDict["desiredState"];
            }
        }
        return null;
    }

    /**
    * Sets the desiredState
    *
    * @param MultiTenantOrganizationMemberState $val The value to assign to the desiredState
    *
    * @return MultiTenantOrganizationMemberTransitionDetails The MultiTenantOrganizationMemberTransitionDetails
    */
    public function setDesiredState($val)
    {
        $this->_propDict["desiredState"] = $val;
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
    * @return MultiTenantOrganizationMemberTransitionDetails
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
    * @return MultiTenantOrganizationMemberTransitionDetails The MultiTenantOrganizationMemberTransitionDetails
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
