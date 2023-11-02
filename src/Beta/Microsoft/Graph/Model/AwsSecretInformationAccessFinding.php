<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsSecretInformationAccessFinding File
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
* AwsSecretInformationAccessFinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsSecretInformationAccessFinding extends Finding
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
    * @return AwsSecretInformationAccessFinding
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
    * @return AwsSecretInformationAccessFinding
    */
    public function setPermissionsCreepIndex($val)
    {
        $this->_propDict["permissionsCreepIndex"] = $val;
        return $this;
    }

    /**
    * Gets the secretInformationWebServices
    *
    * @return AwsSecretInformationWebServices|null The secretInformationWebServices
    */
    public function getSecretInformationWebServices()
    {
        if (array_key_exists("secretInformationWebServices", $this->_propDict)) {
            if (is_a($this->_propDict["secretInformationWebServices"], "\Beta\Microsoft\Graph\Model\AwsSecretInformationWebServices") || is_null($this->_propDict["secretInformationWebServices"])) {
                return $this->_propDict["secretInformationWebServices"];
            } else {
                $this->_propDict["secretInformationWebServices"] = new AwsSecretInformationWebServices($this->_propDict["secretInformationWebServices"]);
                return $this->_propDict["secretInformationWebServices"];
            }
        }
        return null;
    }

    /**
    * Sets the secretInformationWebServices
    *
    * @param AwsSecretInformationWebServices $val The secretInformationWebServices
    *
    * @return AwsSecretInformationAccessFinding
    */
    public function setSecretInformationWebServices($val)
    {
        $this->_propDict["secretInformationWebServices"] = $val;
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
    * @return AwsSecretInformationAccessFinding
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
        return $this;
    }

}
