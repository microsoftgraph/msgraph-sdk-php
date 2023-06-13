<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp File
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
* OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp extends OnAuthenticationMethodLoadStartHandler
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp");
    }


    /**
    * Gets the identityProviders
    *
    * @return IdentityProviderBase|null The identityProviders
    */
    public function getIdentityProviders()
    {
        if (array_key_exists("identityProviders", $this->_propDict)) {
            if (is_a($this->_propDict["identityProviders"], "\Beta\Microsoft\Graph\Model\IdentityProviderBase") || is_null($this->_propDict["identityProviders"])) {
                return $this->_propDict["identityProviders"];
            } else {
                $this->_propDict["identityProviders"] = new IdentityProviderBase($this->_propDict["identityProviders"]);
                return $this->_propDict["identityProviders"];
            }
        }
        return null;
    }

    /**
    * Sets the identityProviders
    *
    * @param IdentityProviderBase $val The value to assign to the identityProviders
    *
    * @return OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp The OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
    */
    public function setIdentityProviders($val)
    {
        $this->_propDict["identityProviders"] = $val;
         return $this;
    }
}
