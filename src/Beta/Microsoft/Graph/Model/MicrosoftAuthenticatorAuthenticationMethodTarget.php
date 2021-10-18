<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftAuthenticatorAuthenticationMethodTarget File
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
* MicrosoftAuthenticatorAuthenticationMethodTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftAuthenticatorAuthenticationMethodTarget extends AuthenticationMethodTarget
{
    /**
    * Gets the authenticationMode
    * Determines which types of notifications can be used for sign-in. Possible values are: any, deviceBasedPush (passwordless only), push.
    *
    * @return MicrosoftAuthenticatorAuthenticationMode|null The authenticationMode
    */
    public function getAuthenticationMode()
    {
        if (array_key_exists("authenticationMode", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMode"], "\Beta\Microsoft\Graph\Model\MicrosoftAuthenticatorAuthenticationMode") || is_null($this->_propDict["authenticationMode"])) {
                return $this->_propDict["authenticationMode"];
            } else {
                $this->_propDict["authenticationMode"] = new MicrosoftAuthenticatorAuthenticationMode($this->_propDict["authenticationMode"]);
                return $this->_propDict["authenticationMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMode
    * Determines which types of notifications can be used for sign-in. Possible values are: any, deviceBasedPush (passwordless only), push.
    *
    * @param MicrosoftAuthenticatorAuthenticationMode $val The authenticationMode
    *
    * @return MicrosoftAuthenticatorAuthenticationMethodTarget
    */
    public function setAuthenticationMode($val)
    {
        $this->_propDict["authenticationMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayAppInformationRequiredState
    * Determines whether the app the user is signing into should be shown to the user in the body of the notification. Possible values are: enabled, disabled, default.
    *
    * @return AdvancedConfigState|null The displayAppInformationRequiredState
    */
    public function getDisplayAppInformationRequiredState()
    {
        if (array_key_exists("displayAppInformationRequiredState", $this->_propDict)) {
            if (is_a($this->_propDict["displayAppInformationRequiredState"], "\Beta\Microsoft\Graph\Model\AdvancedConfigState") || is_null($this->_propDict["displayAppInformationRequiredState"])) {
                return $this->_propDict["displayAppInformationRequiredState"];
            } else {
                $this->_propDict["displayAppInformationRequiredState"] = new AdvancedConfigState($this->_propDict["displayAppInformationRequiredState"]);
                return $this->_propDict["displayAppInformationRequiredState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the displayAppInformationRequiredState
    * Determines whether the app the user is signing into should be shown to the user in the body of the notification. Possible values are: enabled, disabled, default.
    *
    * @param AdvancedConfigState $val The displayAppInformationRequiredState
    *
    * @return MicrosoftAuthenticatorAuthenticationMethodTarget
    */
    public function setDisplayAppInformationRequiredState($val)
    {
        $this->_propDict["displayAppInformationRequiredState"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayLocationInformationRequiredState
    * Determines whether the location of the sign-in should be shown to the user in the body of the notification. Possible values are: enabled, disabled, default.
    *
    * @return AdvancedConfigState|null The displayLocationInformationRequiredState
    */
    public function getDisplayLocationInformationRequiredState()
    {
        if (array_key_exists("displayLocationInformationRequiredState", $this->_propDict)) {
            if (is_a($this->_propDict["displayLocationInformationRequiredState"], "\Beta\Microsoft\Graph\Model\AdvancedConfigState") || is_null($this->_propDict["displayLocationInformationRequiredState"])) {
                return $this->_propDict["displayLocationInformationRequiredState"];
            } else {
                $this->_propDict["displayLocationInformationRequiredState"] = new AdvancedConfigState($this->_propDict["displayLocationInformationRequiredState"]);
                return $this->_propDict["displayLocationInformationRequiredState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the displayLocationInformationRequiredState
    * Determines whether the location of the sign-in should be shown to the user in the body of the notification. Possible values are: enabled, disabled, default.
    *
    * @param AdvancedConfigState $val The displayLocationInformationRequiredState
    *
    * @return MicrosoftAuthenticatorAuthenticationMethodTarget
    */
    public function setDisplayLocationInformationRequiredState($val)
    {
        $this->_propDict["displayLocationInformationRequiredState"] = $val;
        return $this;
    }
    
    /**
    * Gets the numberMatchingRequiredState
    * Requires number matching for MFA notifications. Value is ignored for phone sign-in notifications. Possible values are: enabled, disabled, default.
    *
    * @return AdvancedConfigState|null The numberMatchingRequiredState
    */
    public function getNumberMatchingRequiredState()
    {
        if (array_key_exists("numberMatchingRequiredState", $this->_propDict)) {
            if (is_a($this->_propDict["numberMatchingRequiredState"], "\Beta\Microsoft\Graph\Model\AdvancedConfigState") || is_null($this->_propDict["numberMatchingRequiredState"])) {
                return $this->_propDict["numberMatchingRequiredState"];
            } else {
                $this->_propDict["numberMatchingRequiredState"] = new AdvancedConfigState($this->_propDict["numberMatchingRequiredState"]);
                return $this->_propDict["numberMatchingRequiredState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the numberMatchingRequiredState
    * Requires number matching for MFA notifications. Value is ignored for phone sign-in notifications. Possible values are: enabled, disabled, default.
    *
    * @param AdvancedConfigState $val The numberMatchingRequiredState
    *
    * @return MicrosoftAuthenticatorAuthenticationMethodTarget
    */
    public function setNumberMatchingRequiredState($val)
    {
        $this->_propDict["numberMatchingRequiredState"] = $val;
        return $this;
    }
    
}
