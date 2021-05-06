<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodsRegistrationCampaign File
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
* AuthenticationMethodsRegistrationCampaign class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodsRegistrationCampaign extends Entity
{

    /**
    * Gets the excludeTargets
    *
    * @return ExcludeTarget|null The excludeTargets
    */
    public function getExcludeTargets()
    {
        if (array_key_exists("excludeTargets", $this->_propDict)) {
            if (is_a($this->_propDict["excludeTargets"], "\Beta\Microsoft\Graph\Model\ExcludeTarget") || is_null($this->_propDict["excludeTargets"])) {
                return $this->_propDict["excludeTargets"];
            } else {
                $this->_propDict["excludeTargets"] = new ExcludeTarget($this->_propDict["excludeTargets"]);
                return $this->_propDict["excludeTargets"];
            }
        }
        return null;
    }

    /**
    * Sets the excludeTargets
    *
    * @param ExcludeTarget $val The value to assign to the excludeTargets
    *
    * @return AuthenticationMethodsRegistrationCampaign The AuthenticationMethodsRegistrationCampaign
    */
    public function setExcludeTargets($val)
    {
        $this->_propDict["excludeTargets"] = $val;
         return $this;
    }

    /**
    * Gets the includeTargets
    *
    * @return AuthenticationMethodsRegistrationCampaignIncludeTarget|null The includeTargets
    */
    public function getIncludeTargets()
    {
        if (array_key_exists("includeTargets", $this->_propDict)) {
            if (is_a($this->_propDict["includeTargets"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodsRegistrationCampaignIncludeTarget") || is_null($this->_propDict["includeTargets"])) {
                return $this->_propDict["includeTargets"];
            } else {
                $this->_propDict["includeTargets"] = new AuthenticationMethodsRegistrationCampaignIncludeTarget($this->_propDict["includeTargets"]);
                return $this->_propDict["includeTargets"];
            }
        }
        return null;
    }

    /**
    * Sets the includeTargets
    *
    * @param AuthenticationMethodsRegistrationCampaignIncludeTarget $val The value to assign to the includeTargets
    *
    * @return AuthenticationMethodsRegistrationCampaign The AuthenticationMethodsRegistrationCampaign
    */
    public function setIncludeTargets($val)
    {
        $this->_propDict["includeTargets"] = $val;
         return $this;
    }
    /**
    * Gets the snoozeDurationInDays
    *
    * @return int|null The snoozeDurationInDays
    */
    public function getSnoozeDurationInDays()
    {
        if (array_key_exists("snoozeDurationInDays", $this->_propDict)) {
            return $this->_propDict["snoozeDurationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the snoozeDurationInDays
    *
    * @param int $val The value of the snoozeDurationInDays
    *
    * @return AuthenticationMethodsRegistrationCampaign
    */
    public function setSnoozeDurationInDays($val)
    {
        $this->_propDict["snoozeDurationInDays"] = $val;
        return $this;
    }

    /**
    * Gets the state
    *
    * @return AdvancedConfigState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\AdvancedConfigState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AdvancedConfigState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    *
    * @param AdvancedConfigState $val The value to assign to the state
    *
    * @return AuthenticationMethodsRegistrationCampaign The AuthenticationMethodsRegistrationCampaign
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
