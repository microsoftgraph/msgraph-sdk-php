<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp File
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
* OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp extends OnInteractiveAuthFlowStartHandler
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.onInteractiveAuthFlowStartExternalUsersSelfServiceSignUp");
    }

    /**
    * Gets the isSignUpAllowed
    * Optional. Specifies whether the authentication flow includes an option to sign up (create account) and sign in. Default value is false meaning only sign in is enabled.
    *
    * @return bool|null The isSignUpAllowed
    */
    public function getIsSignUpAllowed()
    {
        if (array_key_exists("isSignUpAllowed", $this->_propDict)) {
            return $this->_propDict["isSignUpAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSignUpAllowed
    * Optional. Specifies whether the authentication flow includes an option to sign up (create account) and sign in. Default value is false meaning only sign in is enabled.
    *
    * @param bool $val The value of the isSignUpAllowed
    *
    * @return OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp
    */
    public function setIsSignUpAllowed($val)
    {
        $this->_propDict["isSignUpAllowed"] = $val;
        return $this;
    }
}
