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
namespace Microsoft\Graph\Model;

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
    * Determines which types of notifications can be used for sign-in. The possible values are: deviceBasedPush (passwordless only), push, and any.
    *
    * @return MicrosoftAuthenticatorAuthenticationMode|null The authenticationMode
    */
    public function getAuthenticationMode()
    {
        if (array_key_exists("authenticationMode", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMode"], "\Microsoft\Graph\Model\MicrosoftAuthenticatorAuthenticationMode") || is_null($this->_propDict["authenticationMode"])) {
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
    * Determines which types of notifications can be used for sign-in. The possible values are: deviceBasedPush (passwordless only), push, and any.
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
    * Gets the featureSettings
    * Determines what additional settings should be applied to Microsoft Authenticator. The possible values are: requireNumberMatching (Requires number matching for MFA notifications. Value is ignored for phone sign-in notifications). Nullable.
    *
    * @return AuthenticatorAppFeatureSettings|null The featureSettings
    */
    public function getFeatureSettings()
    {
        if (array_key_exists("featureSettings", $this->_propDict)) {
            if (is_a($this->_propDict["featureSettings"], "\Microsoft\Graph\Model\AuthenticatorAppFeatureSettings") || is_null($this->_propDict["featureSettings"])) {
                return $this->_propDict["featureSettings"];
            } else {
                $this->_propDict["featureSettings"] = new AuthenticatorAppFeatureSettings($this->_propDict["featureSettings"]);
                return $this->_propDict["featureSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the featureSettings
    * Determines what additional settings should be applied to Microsoft Authenticator. The possible values are: requireNumberMatching (Requires number matching for MFA notifications. Value is ignored for phone sign-in notifications). Nullable.
    *
    * @param AuthenticatorAppFeatureSettings $val The featureSettings
    *
    * @return MicrosoftAuthenticatorAuthenticationMethodTarget
    */
    public function setFeatureSettings($val)
    {
        $this->_propDict["featureSettings"] = $val;
        return $this;
    }
    
}
