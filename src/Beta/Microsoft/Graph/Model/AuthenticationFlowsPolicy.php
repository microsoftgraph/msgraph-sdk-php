<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationFlowsPolicy File
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
* AuthenticationFlowsPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationFlowsPolicy extends Entity
{
    /**
    * Gets the selfServiceSignUp
    *
    * @return SelfServiceSignUpAuthenticationFlowConfiguration The selfServiceSignUp
    */
    public function getSelfServiceSignUp()
    {
        if (array_key_exists("selfServiceSignUp", $this->_propDict)) {
            if (is_a($this->_propDict["selfServiceSignUp"], "Beta\Microsoft\Graph\Model\SelfServiceSignUpAuthenticationFlowConfiguration")) {
                return $this->_propDict["selfServiceSignUp"];
            } else {
                $this->_propDict["selfServiceSignUp"] = new SelfServiceSignUpAuthenticationFlowConfiguration($this->_propDict["selfServiceSignUp"]);
                return $this->_propDict["selfServiceSignUp"];
            }
        }
        return null;
    }
    
    /**
    * Sets the selfServiceSignUp
    *
    * @param SelfServiceSignUpAuthenticationFlowConfiguration $val The selfServiceSignUp
    *
    * @return AuthenticationFlowsPolicy
    */
    public function setSelfServiceSignUp($val)
    {
        $this->_propDict["selfServiceSignUp"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return AuthenticationFlowsPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return AuthenticationFlowsPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
}