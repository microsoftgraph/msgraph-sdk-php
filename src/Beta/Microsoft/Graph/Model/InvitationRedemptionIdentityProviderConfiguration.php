<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InvitationRedemptionIdentityProviderConfiguration File
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
* InvitationRedemptionIdentityProviderConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InvitationRedemptionIdentityProviderConfiguration extends Entity
{

    /**
    * Gets the fallbackIdentityProvider
    *
    * @return B2bIdentityProvidersType|null The fallbackIdentityProvider
    */
    public function getFallbackIdentityProvider()
    {
        if (array_key_exists("fallbackIdentityProvider", $this->_propDict)) {
            if (is_a($this->_propDict["fallbackIdentityProvider"], "\Beta\Microsoft\Graph\Model\B2bIdentityProvidersType") || is_null($this->_propDict["fallbackIdentityProvider"])) {
                return $this->_propDict["fallbackIdentityProvider"];
            } else {
                $this->_propDict["fallbackIdentityProvider"] = new B2bIdentityProvidersType($this->_propDict["fallbackIdentityProvider"]);
                return $this->_propDict["fallbackIdentityProvider"];
            }
        }
        return null;
    }

    /**
    * Sets the fallbackIdentityProvider
    *
    * @param B2bIdentityProvidersType $val The value to assign to the fallbackIdentityProvider
    *
    * @return InvitationRedemptionIdentityProviderConfiguration The InvitationRedemptionIdentityProviderConfiguration
    */
    public function setFallbackIdentityProvider($val)
    {
        $this->_propDict["fallbackIdentityProvider"] = $val;
         return $this;
    }

    /**
    * Gets the primaryIdentityProviderPrecedenceOrder
    *
    * @return B2bIdentityProvidersType|null The primaryIdentityProviderPrecedenceOrder
    */
    public function getPrimaryIdentityProviderPrecedenceOrder()
    {
        if (array_key_exists("primaryIdentityProviderPrecedenceOrder", $this->_propDict)) {
            if (is_a($this->_propDict["primaryIdentityProviderPrecedenceOrder"], "\Beta\Microsoft\Graph\Model\B2bIdentityProvidersType") || is_null($this->_propDict["primaryIdentityProviderPrecedenceOrder"])) {
                return $this->_propDict["primaryIdentityProviderPrecedenceOrder"];
            } else {
                $this->_propDict["primaryIdentityProviderPrecedenceOrder"] = new B2bIdentityProvidersType($this->_propDict["primaryIdentityProviderPrecedenceOrder"]);
                return $this->_propDict["primaryIdentityProviderPrecedenceOrder"];
            }
        }
        return null;
    }

    /**
    * Sets the primaryIdentityProviderPrecedenceOrder
    *
    * @param B2bIdentityProvidersType $val The value to assign to the primaryIdentityProviderPrecedenceOrder
    *
    * @return InvitationRedemptionIdentityProviderConfiguration The InvitationRedemptionIdentityProviderConfiguration
    */
    public function setPrimaryIdentityProviderPrecedenceOrder($val)
    {
        $this->_propDict["primaryIdentityProviderPrecedenceOrder"] = $val;
         return $this;
    }
}
