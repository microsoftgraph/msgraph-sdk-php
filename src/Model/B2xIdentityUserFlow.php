<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* B2xIdentityUserFlow File
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
* B2xIdentityUserFlow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class B2xIdentityUserFlow extends IdentityUserFlow
{
    /**
    * Gets the apiConnectorConfiguration
    * Configuration for enabling an API connector for use as part of the self-service sign up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
    *
    * @return UserFlowApiConnectorConfiguration|null The apiConnectorConfiguration
    */
    public function getApiConnectorConfiguration()
    {
        if (array_key_exists("apiConnectorConfiguration", $this->_propDict) && !is_null($this->_propDict["apiConnectorConfiguration"])) {
            if (is_a($this->_propDict["apiConnectorConfiguration"], "\Microsoft\Graph\Model\UserFlowApiConnectorConfiguration")) {
                return $this->_propDict["apiConnectorConfiguration"];
            } else {
                $this->_propDict["apiConnectorConfiguration"] = new UserFlowApiConnectorConfiguration($this->_propDict["apiConnectorConfiguration"]);
                return $this->_propDict["apiConnectorConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the apiConnectorConfiguration
    * Configuration for enabling an API connector for use as part of the self-service sign up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
    *
    * @param UserFlowApiConnectorConfiguration $val The apiConnectorConfiguration
    *
    * @return B2xIdentityUserFlow
    */
    public function setApiConnectorConfiguration($val)
    {
        $this->_propDict["apiConnectorConfiguration"] = $val;
        return $this;
    }


     /**
     * Gets the identityProviders
    * The identity providers included in the user flow.
     *
     * @return IdentityProvider[]|null The identityProviders
     */
    public function getIdentityProviders()
    {
        if (array_key_exists('identityProviders', $this->_propDict) && !is_null($this->_propDict['identityProviders'])) {
            $identityProviders = [];
            if (count($this->_propDict['identityProviders']) > 0 && is_a($this->_propDict['identityProviders'][0], 'IdentityProvider')) {
                return $this->_propDict['identityProviders'];
            }
            foreach ($this->_propDict['identityProviders'] as $singleValue) {
                $identityProviders []= new IdentityProvider($singleValue);
            }
            $this->_propDict['identityProviders'] = $identityProviders;
            return $this->_propDict['identityProviders'];
        }
        return null;
    }

    /**
    * Sets the identityProviders
    * The identity providers included in the user flow.
    *
    * @param IdentityProvider[] $val The identityProviders
    *
    * @return B2xIdentityUserFlow
    */
    public function setIdentityProviders($val)
    {
        $this->_propDict["identityProviders"] = $val;
        return $this;
    }


     /**
     * Gets the languages
    * The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign up user flow. You cannot create custom languages in self-service sign up user flows.
     *
     * @return UserFlowLanguageConfiguration[]|null The languages
     */
    public function getLanguages()
    {
        if (array_key_exists('languages', $this->_propDict) && !is_null($this->_propDict['languages'])) {
            $languages = [];
            if (count($this->_propDict['languages']) > 0 && is_a($this->_propDict['languages'][0], 'UserFlowLanguageConfiguration')) {
                return $this->_propDict['languages'];
            }
            foreach ($this->_propDict['languages'] as $singleValue) {
                $languages []= new UserFlowLanguageConfiguration($singleValue);
            }
            $this->_propDict['languages'] = $languages;
            return $this->_propDict['languages'];
        }
        return null;
    }

    /**
    * Sets the languages
    * The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign up user flow. You cannot create custom languages in self-service sign up user flows.
    *
    * @param UserFlowLanguageConfiguration[] $val The languages
    *
    * @return B2xIdentityUserFlow
    */
    public function setLanguages($val)
    {
        $this->_propDict["languages"] = $val;
        return $this;
    }


     /**
     * Gets the userAttributeAssignments
    * The user attribute assignments included in the user flow.
     *
     * @return IdentityUserFlowAttributeAssignment[]|null The userAttributeAssignments
     */
    public function getUserAttributeAssignments()
    {
        if (array_key_exists('userAttributeAssignments', $this->_propDict) && !is_null($this->_propDict['userAttributeAssignments'])) {
            $userAttributeAssignments = [];
            if (count($this->_propDict['userAttributeAssignments']) > 0 && is_a($this->_propDict['userAttributeAssignments'][0], 'IdentityUserFlowAttributeAssignment')) {
                return $this->_propDict['userAttributeAssignments'];
            }
            foreach ($this->_propDict['userAttributeAssignments'] as $singleValue) {
                $userAttributeAssignments []= new IdentityUserFlowAttributeAssignment($singleValue);
            }
            $this->_propDict['userAttributeAssignments'] = $userAttributeAssignments;
            return $this->_propDict['userAttributeAssignments'];
        }
        return null;
    }

    /**
    * Sets the userAttributeAssignments
    * The user attribute assignments included in the user flow.
    *
    * @param IdentityUserFlowAttributeAssignment[] $val The userAttributeAssignments
    *
    * @return B2xIdentityUserFlow
    */
    public function setUserAttributeAssignments($val)
    {
        $this->_propDict["userAttributeAssignments"] = $val;
        return $this;
    }


     /**
     * Gets the userFlowIdentityProviders
     *
     * @return IdentityProviderBase[]|null The userFlowIdentityProviders
     */
    public function getUserFlowIdentityProviders()
    {
        if (array_key_exists('userFlowIdentityProviders', $this->_propDict) && !is_null($this->_propDict['userFlowIdentityProviders'])) {
            $userFlowIdentityProviders = [];
            if (count($this->_propDict['userFlowIdentityProviders']) > 0 && is_a($this->_propDict['userFlowIdentityProviders'][0], 'IdentityProviderBase')) {
                return $this->_propDict['userFlowIdentityProviders'];
            }
            foreach ($this->_propDict['userFlowIdentityProviders'] as $singleValue) {
                $userFlowIdentityProviders []= new IdentityProviderBase($singleValue);
            }
            $this->_propDict['userFlowIdentityProviders'] = $userFlowIdentityProviders;
            return $this->_propDict['userFlowIdentityProviders'];
        }
        return null;
    }

    /**
    * Sets the userFlowIdentityProviders
    *
    * @param IdentityProviderBase[] $val The userFlowIdentityProviders
    *
    * @return B2xIdentityUserFlow
    */
    public function setUserFlowIdentityProviders($val)
    {
        $this->_propDict["userFlowIdentityProviders"] = $val;
        return $this;
    }

}
