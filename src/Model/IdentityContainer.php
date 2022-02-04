<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityContainer File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* IdentityContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityContainer extends Entity
{
    /**
    * Gets the conditionalAccess
    * the entry point for the Conditional Access (CA) object model.
    *
    * @return ConditionalAccessRoot|null The conditionalAccess
    */
    public function getConditionalAccess()
    {
        if (array_key_exists("conditionalAccess", $this->_propDict) && !is_null($this->_propDict["conditionalAccess"])) {
            if (is_a($this->_propDict["conditionalAccess"], "\Microsoft\Graph\Model\ConditionalAccessRoot")) {
                return $this->_propDict["conditionalAccess"];
            } else {
                $this->_propDict["conditionalAccess"] = new ConditionalAccessRoot($this->_propDict["conditionalAccess"]);
                return $this->_propDict["conditionalAccess"];
            }
        }
        return null;
    }

    /**
    * Sets the conditionalAccess
    * the entry point for the Conditional Access (CA) object model.
    *
    * @param ConditionalAccessRoot $val The conditionalAccess
    *
    * @return IdentityContainer
    */
    public function setConditionalAccess($val)
    {
        $this->_propDict["conditionalAccess"] = $val;
        return $this;
    }


     /**
     * Gets the apiConnectors
    * Represents entry point for API connectors.
     *
     * @return IdentityApiConnector[]|null The apiConnectors
     */
    public function getApiConnectors()
    {
        if (array_key_exists('apiConnectors', $this->_propDict) && !is_null($this->_propDict['apiConnectors'])) {
            $apiConnectors = [];
            if (count($this->_propDict['apiConnectors']) > 0 && is_a($this->_propDict['apiConnectors'][0], 'IdentityApiConnector')) {
                return $this->_propDict['apiConnectors'];
            }
            foreach ($this->_propDict['apiConnectors'] as $singleValue) {
                $apiConnectors []= new IdentityApiConnector($singleValue);
            }
            $this->_propDict['apiConnectors'] = $apiConnectors;
            return $this->_propDict['apiConnectors'];
        }
        return null;
    }

    /**
    * Sets the apiConnectors
    * Represents entry point for API connectors.
    *
    * @param IdentityApiConnector[] $val The apiConnectors
    *
    * @return IdentityContainer
    */
    public function setApiConnectors($val)
    {
        $this->_propDict["apiConnectors"] = $val;
        return $this;
    }


     /**
     * Gets the b2xUserFlows
    * Represents entry point for B2X and self-service sign-up identity userflows.
     *
     * @return B2xIdentityUserFlow[]|null The b2xUserFlows
     */
    public function getB2xUserFlows()
    {
        if (array_key_exists('b2xUserFlows', $this->_propDict) && !is_null($this->_propDict['b2xUserFlows'])) {
            $b2xUserFlows = [];
            if (count($this->_propDict['b2xUserFlows']) > 0 && is_a($this->_propDict['b2xUserFlows'][0], 'B2xIdentityUserFlow')) {
                return $this->_propDict['b2xUserFlows'];
            }
            foreach ($this->_propDict['b2xUserFlows'] as $singleValue) {
                $b2xUserFlows []= new B2xIdentityUserFlow($singleValue);
            }
            $this->_propDict['b2xUserFlows'] = $b2xUserFlows;
            return $this->_propDict['b2xUserFlows'];
        }
        return null;
    }

    /**
    * Sets the b2xUserFlows
    * Represents entry point for B2X and self-service sign-up identity userflows.
    *
    * @param B2xIdentityUserFlow[] $val The b2xUserFlows
    *
    * @return IdentityContainer
    */
    public function setB2xUserFlows($val)
    {
        $this->_propDict["b2xUserFlows"] = $val;
        return $this;
    }


     /**
     * Gets the identityProviders
    * Represents entry point for identity provider base.
     *
     * @return IdentityProviderBase[]|null The identityProviders
     */
    public function getIdentityProviders()
    {
        if (array_key_exists('identityProviders', $this->_propDict) && !is_null($this->_propDict['identityProviders'])) {
            $identityProviders = [];
            if (count($this->_propDict['identityProviders']) > 0 && is_a($this->_propDict['identityProviders'][0], 'IdentityProviderBase')) {
                return $this->_propDict['identityProviders'];
            }
            foreach ($this->_propDict['identityProviders'] as $singleValue) {
                $identityProviders []= new IdentityProviderBase($singleValue);
            }
            $this->_propDict['identityProviders'] = $identityProviders;
            return $this->_propDict['identityProviders'];
        }
        return null;
    }

    /**
    * Sets the identityProviders
    * Represents entry point for identity provider base.
    *
    * @param IdentityProviderBase[] $val The identityProviders
    *
    * @return IdentityContainer
    */
    public function setIdentityProviders($val)
    {
        $this->_propDict["identityProviders"] = $val;
        return $this;
    }


     /**
     * Gets the userFlowAttributes
    * Represents entry point for identity userflow attributes.
     *
     * @return IdentityUserFlowAttribute[]|null The userFlowAttributes
     */
    public function getUserFlowAttributes()
    {
        if (array_key_exists('userFlowAttributes', $this->_propDict) && !is_null($this->_propDict['userFlowAttributes'])) {
            $userFlowAttributes = [];
            if (count($this->_propDict['userFlowAttributes']) > 0 && is_a($this->_propDict['userFlowAttributes'][0], 'IdentityUserFlowAttribute')) {
                return $this->_propDict['userFlowAttributes'];
            }
            foreach ($this->_propDict['userFlowAttributes'] as $singleValue) {
                $userFlowAttributes []= new IdentityUserFlowAttribute($singleValue);
            }
            $this->_propDict['userFlowAttributes'] = $userFlowAttributes;
            return $this->_propDict['userFlowAttributes'];
        }
        return null;
    }

    /**
    * Sets the userFlowAttributes
    * Represents entry point for identity userflow attributes.
    *
    * @param IdentityUserFlowAttribute[] $val The userFlowAttributes
    *
    * @return IdentityContainer
    */
    public function setUserFlowAttributes($val)
    {
        $this->_propDict["userFlowAttributes"] = $val;
        return $this;
    }

}
