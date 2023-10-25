<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessSessionControls File
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
* ConditionalAccessSessionControls class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessSessionControls extends Entity
{

    /**
    * Gets the applicationEnforcedRestrictions
    * Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control.
    *
    * @return ApplicationEnforcedRestrictionsSessionControl|null The applicationEnforcedRestrictions
    */
    public function getApplicationEnforcedRestrictions()
    {
        if (array_key_exists("applicationEnforcedRestrictions", $this->_propDict)) {
            if (is_a($this->_propDict["applicationEnforcedRestrictions"], "\Beta\Microsoft\Graph\Model\ApplicationEnforcedRestrictionsSessionControl") || is_null($this->_propDict["applicationEnforcedRestrictions"])) {
                return $this->_propDict["applicationEnforcedRestrictions"];
            } else {
                $this->_propDict["applicationEnforcedRestrictions"] = new ApplicationEnforcedRestrictionsSessionControl($this->_propDict["applicationEnforcedRestrictions"]);
                return $this->_propDict["applicationEnforcedRestrictions"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationEnforcedRestrictions
    * Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control.
    *
    * @param ApplicationEnforcedRestrictionsSessionControl $val The value to assign to the applicationEnforcedRestrictions
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setApplicationEnforcedRestrictions($val)
    {
        $this->_propDict["applicationEnforcedRestrictions"] = $val;
         return $this;
    }

    /**
    * Gets the cloudAppSecurity
    * Session control to apply cloud app security.
    *
    * @return CloudAppSecuritySessionControl|null The cloudAppSecurity
    */
    public function getCloudAppSecurity()
    {
        if (array_key_exists("cloudAppSecurity", $this->_propDict)) {
            if (is_a($this->_propDict["cloudAppSecurity"], "\Beta\Microsoft\Graph\Model\CloudAppSecuritySessionControl") || is_null($this->_propDict["cloudAppSecurity"])) {
                return $this->_propDict["cloudAppSecurity"];
            } else {
                $this->_propDict["cloudAppSecurity"] = new CloudAppSecuritySessionControl($this->_propDict["cloudAppSecurity"]);
                return $this->_propDict["cloudAppSecurity"];
            }
        }
        return null;
    }

    /**
    * Sets the cloudAppSecurity
    * Session control to apply cloud app security.
    *
    * @param CloudAppSecuritySessionControl $val The value to assign to the cloudAppSecurity
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setCloudAppSecurity($val)
    {
        $this->_propDict["cloudAppSecurity"] = $val;
         return $this;
    }

    /**
    * Gets the continuousAccessEvaluation
    * Session control for continuous access evaluation settings.
    *
    * @return ContinuousAccessEvaluationSessionControl|null The continuousAccessEvaluation
    */
    public function getContinuousAccessEvaluation()
    {
        if (array_key_exists("continuousAccessEvaluation", $this->_propDict)) {
            if (is_a($this->_propDict["continuousAccessEvaluation"], "\Beta\Microsoft\Graph\Model\ContinuousAccessEvaluationSessionControl") || is_null($this->_propDict["continuousAccessEvaluation"])) {
                return $this->_propDict["continuousAccessEvaluation"];
            } else {
                $this->_propDict["continuousAccessEvaluation"] = new ContinuousAccessEvaluationSessionControl($this->_propDict["continuousAccessEvaluation"]);
                return $this->_propDict["continuousAccessEvaluation"];
            }
        }
        return null;
    }

    /**
    * Sets the continuousAccessEvaluation
    * Session control for continuous access evaluation settings.
    *
    * @param ContinuousAccessEvaluationSessionControl $val The value to assign to the continuousAccessEvaluation
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setContinuousAccessEvaluation($val)
    {
        $this->_propDict["continuousAccessEvaluation"] = $val;
         return $this;
    }
    /**
    * Gets the disableResilienceDefaults
    * Session control that determines whether it's acceptable for Microsoft Entra ID to extend existing sessions based on information collected prior to an outage or not.
    *
    * @return bool|null The disableResilienceDefaults
    */
    public function getDisableResilienceDefaults()
    {
        if (array_key_exists("disableResilienceDefaults", $this->_propDict)) {
            return $this->_propDict["disableResilienceDefaults"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disableResilienceDefaults
    * Session control that determines whether it's acceptable for Microsoft Entra ID to extend existing sessions based on information collected prior to an outage or not.
    *
    * @param bool $val The value of the disableResilienceDefaults
    *
    * @return ConditionalAccessSessionControls
    */
    public function setDisableResilienceDefaults($val)
    {
        $this->_propDict["disableResilienceDefaults"] = $val;
        return $this;
    }

    /**
    * Gets the persistentBrowser
    * Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly.
    *
    * @return PersistentBrowserSessionControl|null The persistentBrowser
    */
    public function getPersistentBrowser()
    {
        if (array_key_exists("persistentBrowser", $this->_propDict)) {
            if (is_a($this->_propDict["persistentBrowser"], "\Beta\Microsoft\Graph\Model\PersistentBrowserSessionControl") || is_null($this->_propDict["persistentBrowser"])) {
                return $this->_propDict["persistentBrowser"];
            } else {
                $this->_propDict["persistentBrowser"] = new PersistentBrowserSessionControl($this->_propDict["persistentBrowser"]);
                return $this->_propDict["persistentBrowser"];
            }
        }
        return null;
    }

    /**
    * Sets the persistentBrowser
    * Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly.
    *
    * @param PersistentBrowserSessionControl $val The value to assign to the persistentBrowser
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setPersistentBrowser($val)
    {
        $this->_propDict["persistentBrowser"] = $val;
         return $this;
    }

    /**
    * Gets the secureSignInSession
    * Session control to require sign in sessions to be bound to a device.
    *
    * @return SecureSignInSessionControl|null The secureSignInSession
    */
    public function getSecureSignInSession()
    {
        if (array_key_exists("secureSignInSession", $this->_propDict)) {
            if (is_a($this->_propDict["secureSignInSession"], "\Beta\Microsoft\Graph\Model\SecureSignInSessionControl") || is_null($this->_propDict["secureSignInSession"])) {
                return $this->_propDict["secureSignInSession"];
            } else {
                $this->_propDict["secureSignInSession"] = new SecureSignInSessionControl($this->_propDict["secureSignInSession"]);
                return $this->_propDict["secureSignInSession"];
            }
        }
        return null;
    }

    /**
    * Sets the secureSignInSession
    * Session control to require sign in sessions to be bound to a device.
    *
    * @param SecureSignInSessionControl $val The value to assign to the secureSignInSession
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setSecureSignInSession($val)
    {
        $this->_propDict["secureSignInSession"] = $val;
         return $this;
    }

    /**
    * Gets the signInFrequency
    * Session control to enforce signin frequency.
    *
    * @return SignInFrequencySessionControl|null The signInFrequency
    */
    public function getSignInFrequency()
    {
        if (array_key_exists("signInFrequency", $this->_propDict)) {
            if (is_a($this->_propDict["signInFrequency"], "\Beta\Microsoft\Graph\Model\SignInFrequencySessionControl") || is_null($this->_propDict["signInFrequency"])) {
                return $this->_propDict["signInFrequency"];
            } else {
                $this->_propDict["signInFrequency"] = new SignInFrequencySessionControl($this->_propDict["signInFrequency"]);
                return $this->_propDict["signInFrequency"];
            }
        }
        return null;
    }

    /**
    * Sets the signInFrequency
    * Session control to enforce signin frequency.
    *
    * @param SignInFrequencySessionControl $val The value to assign to the signInFrequency
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setSignInFrequency($val)
    {
        $this->_propDict["signInFrequency"] = $val;
         return $this;
    }
}
