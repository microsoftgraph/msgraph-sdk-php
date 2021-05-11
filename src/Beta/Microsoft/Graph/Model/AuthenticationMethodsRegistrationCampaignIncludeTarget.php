<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodsRegistrationCampaignIncludeTarget File
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
* AuthenticationMethodsRegistrationCampaignIncludeTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodsRegistrationCampaignIncludeTarget extends Entity
{
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return AuthenticationMethodsRegistrationCampaignIncludeTarget
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the targetedAuthenticationMethod
    *
    * @return string The targetedAuthenticationMethod
    */
    public function getTargetedAuthenticationMethod()
    {
        if (array_key_exists("targetedAuthenticationMethod", $this->_propDict)) {
            return $this->_propDict["targetedAuthenticationMethod"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetedAuthenticationMethod
    *
    * @param string $val The value of the targetedAuthenticationMethod
    *
    * @return AuthenticationMethodsRegistrationCampaignIncludeTarget
    */
    public function setTargetedAuthenticationMethod($val)
    {
        $this->_propDict["targetedAuthenticationMethod"] = $val;
        return $this;
    }

    /**
    * Gets the targetType
    *
    * @return AuthenticationMethodTargetType The targetType
    */
    public function getTargetType()
    {
        if (array_key_exists("targetType", $this->_propDict)) {
            if (is_a($this->_propDict["targetType"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodTargetType")) {
                return $this->_propDict["targetType"];
            } else {
                $this->_propDict["targetType"] = new AuthenticationMethodTargetType($this->_propDict["targetType"]);
                return $this->_propDict["targetType"];
            }
        }
        return null;
    }

    /**
    * Sets the targetType
    *
    * @param AuthenticationMethodTargetType $val The value to assign to the targetType
    *
    * @return AuthenticationMethodsRegistrationCampaignIncludeTarget The AuthenticationMethodsRegistrationCampaignIncludeTarget
    */
    public function setTargetType($val)
    {
        $this->_propDict["targetType"] = $val;
         return $this;
    }
}
