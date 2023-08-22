<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationBehaviors File
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
* AuthenticationBehaviors class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationBehaviors extends Entity
{
    /**
    * Gets the removeUnverifiedEmailClaim
    * Removes the email claim from tokens sent to an application when the email address's domain can't be verified.
    *
    * @return bool|null The removeUnverifiedEmailClaim
    */
    public function getRemoveUnverifiedEmailClaim()
    {
        if (array_key_exists("removeUnverifiedEmailClaim", $this->_propDict)) {
            return $this->_propDict["removeUnverifiedEmailClaim"];
        } else {
            return null;
        }
    }

    /**
    * Sets the removeUnverifiedEmailClaim
    * Removes the email claim from tokens sent to an application when the email address's domain can't be verified.
    *
    * @param bool $val The value of the removeUnverifiedEmailClaim
    *
    * @return AuthenticationBehaviors
    */
    public function setRemoveUnverifiedEmailClaim($val)
    {
        $this->_propDict["removeUnverifiedEmailClaim"] = $val;
        return $this;
    }
    /**
    * Gets the requireClientServicePrincipal
    * Requires multitenant applications to have a service principal in the resource tenant as part of authorization checks before they're granted access tokens. This property is only modifiable for multi-tenant resource applications that rely on access from clients without a service principal and had this behavior as set to false by Microsoft. Tenant administrators should respond to security advisories sent through Azure Health Service events and the Microsoft 365 message center.
    *
    * @return bool|null The requireClientServicePrincipal
    */
    public function getRequireClientServicePrincipal()
    {
        if (array_key_exists("requireClientServicePrincipal", $this->_propDict)) {
            return $this->_propDict["requireClientServicePrincipal"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requireClientServicePrincipal
    * Requires multitenant applications to have a service principal in the resource tenant as part of authorization checks before they're granted access tokens. This property is only modifiable for multi-tenant resource applications that rely on access from clients without a service principal and had this behavior as set to false by Microsoft. Tenant administrators should respond to security advisories sent through Azure Health Service events and the Microsoft 365 message center.
    *
    * @param bool $val The value of the requireClientServicePrincipal
    *
    * @return AuthenticationBehaviors
    */
    public function setRequireClientServicePrincipal($val)
    {
        $this->_propDict["requireClientServicePrincipal"] = $val;
        return $this;
    }
}
