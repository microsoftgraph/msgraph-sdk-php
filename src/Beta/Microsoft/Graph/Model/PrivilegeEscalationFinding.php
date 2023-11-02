<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegeEscalationFinding File
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
* PrivilegeEscalationFinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegeEscalationFinding extends Finding
{
    /**
    * Gets the identityDetails
    *
    * @return IdentityDetails|null The identityDetails
    */
    public function getIdentityDetails()
    {
        if (array_key_exists("identityDetails", $this->_propDict)) {
            if (is_a($this->_propDict["identityDetails"], "\Beta\Microsoft\Graph\Model\IdentityDetails") || is_null($this->_propDict["identityDetails"])) {
                return $this->_propDict["identityDetails"];
            } else {
                $this->_propDict["identityDetails"] = new IdentityDetails($this->_propDict["identityDetails"]);
                return $this->_propDict["identityDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the identityDetails
    *
    * @param IdentityDetails $val The identityDetails
    *
    * @return PrivilegeEscalationFinding
    */
    public function setIdentityDetails($val)
    {
        $this->_propDict["identityDetails"] = $val;
        return $this;
    }

    /**
    * Gets the permissionsCreepIndex
    *
    * @return PermissionsCreepIndex|null The permissionsCreepIndex
    */
    public function getPermissionsCreepIndex()
    {
        if (array_key_exists("permissionsCreepIndex", $this->_propDict)) {
            if (is_a($this->_propDict["permissionsCreepIndex"], "\Beta\Microsoft\Graph\Model\PermissionsCreepIndex") || is_null($this->_propDict["permissionsCreepIndex"])) {
                return $this->_propDict["permissionsCreepIndex"];
            } else {
                $this->_propDict["permissionsCreepIndex"] = new PermissionsCreepIndex($this->_propDict["permissionsCreepIndex"]);
                return $this->_propDict["permissionsCreepIndex"];
            }
        }
        return null;
    }

    /**
    * Sets the permissionsCreepIndex
    *
    * @param PermissionsCreepIndex $val The permissionsCreepIndex
    *
    * @return PrivilegeEscalationFinding
    */
    public function setPermissionsCreepIndex($val)
    {
        $this->_propDict["permissionsCreepIndex"] = $val;
        return $this;
    }

    /**
    * Gets the identity
    *
    * @return AuthorizationSystemIdentity|null The identity
    */
    public function getIdentity()
    {
        if (array_key_exists("identity", $this->_propDict)) {
            if (is_a($this->_propDict["identity"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemIdentity") || is_null($this->_propDict["identity"])) {
                return $this->_propDict["identity"];
            } else {
                $this->_propDict["identity"] = new AuthorizationSystemIdentity($this->_propDict["identity"]);
                return $this->_propDict["identity"];
            }
        }
        return null;
    }

    /**
    * Sets the identity
    *
    * @param AuthorizationSystemIdentity $val The identity
    *
    * @return PrivilegeEscalationFinding
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
        return $this;
    }


     /**
     * Gets the privilegeEscalationDetails
     *
     * @return array|null The privilegeEscalationDetails
     */
    public function getPrivilegeEscalationDetails()
    {
        if (array_key_exists("privilegeEscalationDetails", $this->_propDict)) {
           return $this->_propDict["privilegeEscalationDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the privilegeEscalationDetails
    *
    * @param PrivilegeEscalation[] $val The privilegeEscalationDetails
    *
    * @return PrivilegeEscalationFinding
    */
    public function setPrivilegeEscalationDetails($val)
    {
        $this->_propDict["privilegeEscalationDetails"] = $val;
        return $this;
    }

}
