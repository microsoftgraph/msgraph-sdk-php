<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordlessMicrosoftAuthenticatorAuthenticationMethodTarget File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PasswordlessMicrosoftAuthenticatorAuthenticationMethodTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordlessMicrosoftAuthenticatorAuthenticationMethodTarget extends AuthenticationMethodTarget
{
    /**
    * Gets the shownContext
    *
    * @return AuthenticatorAppContextType The shownContext
    */
    public function getShownContext()
    {
        if (array_key_exists("shownContext", $this->_propDict)) {
            if (is_a($this->_propDict["shownContext"], "Beta\Microsoft\Graph\Model\AuthenticatorAppContextType")) {
                return $this->_propDict["shownContext"];
            } else {
                $this->_propDict["shownContext"] = new AuthenticatorAppContextType($this->_propDict["shownContext"]);
                return $this->_propDict["shownContext"];
            }
        }
        return null;
    }
    
    /**
    * Sets the shownContext
    *
    * @param AuthenticatorAppContextType $val The shownContext
    *
    * @return PasswordlessMicrosoftAuthenticatorAuthenticationMethodTarget
    */
    public function setShownContext($val)
    {
        $this->_propDict["shownContext"] = $val;
        return $this;
    }
    
}