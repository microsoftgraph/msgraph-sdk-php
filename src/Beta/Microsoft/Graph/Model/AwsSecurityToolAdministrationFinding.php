<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsSecurityToolAdministrationFinding File
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
* AwsSecurityToolAdministrationFinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsSecurityToolAdministrationFinding extends Finding
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
    * @return AwsSecurityToolAdministrationFinding
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
    * @return AwsSecurityToolAdministrationFinding
    */
    public function setPermissionsCreepIndex($val)
    {
        $this->_propDict["permissionsCreepIndex"] = $val;
        return $this;
    }

    /**
    * Gets the securityTools
    *
    * @return AwsSecurityToolWebServices|null The securityTools
    */
    public function getSecurityTools()
    {
        if (array_key_exists("securityTools", $this->_propDict)) {
            if (is_a($this->_propDict["securityTools"], "\Beta\Microsoft\Graph\Model\AwsSecurityToolWebServices") || is_null($this->_propDict["securityTools"])) {
                return $this->_propDict["securityTools"];
            } else {
                $this->_propDict["securityTools"] = new AwsSecurityToolWebServices($this->_propDict["securityTools"]);
                return $this->_propDict["securityTools"];
            }
        }
        return null;
    }

    /**
    * Sets the securityTools
    *
    * @param AwsSecurityToolWebServices $val The securityTools
    *
    * @return AwsSecurityToolAdministrationFinding
    */
    public function setSecurityTools($val)
    {
        $this->_propDict["securityTools"] = $val;
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
    * @return AwsSecurityToolAdministrationFinding
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
        return $this;
    }

}
