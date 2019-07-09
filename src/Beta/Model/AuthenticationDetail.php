<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* AuthenticationDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AuthenticationDetail extends Entity
{

    /**
    * Gets the authenticationStepDateTime
    *
    * @return \DateTime The authenticationStepDateTime
    */
    public function getAuthenticationStepDateTime()
    {
        if (array_key_exists("authenticationStepDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationStepDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["authenticationStepDateTime"];
            } else {
                $this->_propDict["authenticationStepDateTime"] = new \DateTime($this->_propDict["authenticationStepDateTime"]);
                return $this->_propDict["authenticationStepDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationStepDateTime
    *
    * @param \DateTime $val The value to assign to the authenticationStepDateTime
    *
    * @return AuthenticationDetail The AuthenticationDetail
    */
    public function setAuthenticationStepDateTime($val)
    {
        $this->_propDict["authenticationStepDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the authenticationMethod
    *
    * @return AuthenticationMethod The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "Microsoft\Graph\Beta\Model\AuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new AuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationMethod
    *
    * @param AuthenticationMethod $val The value to assign to the authenticationMethod
    *
    * @return AuthenticationDetail The AuthenticationDetail
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
         return $this;
    }
    /**
    * Gets the authenticationMethodDetail
    *
    * @return string The authenticationMethodDetail
    */
    public function getAuthenticationMethodDetail()
    {
        if (array_key_exists("authenticationMethodDetail", $this->_propDict)) {
            return $this->_propDict["authenticationMethodDetail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationMethodDetail
    *
    * @param string $val The value of the authenticationMethodDetail
    *
    * @return AuthenticationDetail
    */
    public function setAuthenticationMethodDetail($val)
    {
        $this->_propDict["authenticationMethodDetail"] = $val;
        return $this;
    }
    /**
    * Gets the succeeded
    *
    * @return bool The succeeded
    */
    public function getSucceeded()
    {
        if (array_key_exists("succeeded", $this->_propDict)) {
            return $this->_propDict["succeeded"];
        } else {
            return null;
        }
    }

    /**
    * Sets the succeeded
    *
    * @param bool $val The value of the succeeded
    *
    * @return AuthenticationDetail
    */
    public function setSucceeded($val)
    {
        $this->_propDict["succeeded"] = $val;
        return $this;
    }

    /**
    * Gets the authenticationStepResultDetail
    *
    * @return AuthenticationStepResultDetail The authenticationStepResultDetail
    */
    public function getAuthenticationStepResultDetail()
    {
        if (array_key_exists("authenticationStepResultDetail", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationStepResultDetail"], "Microsoft\Graph\Beta\Model\AuthenticationStepResultDetail")) {
                return $this->_propDict["authenticationStepResultDetail"];
            } else {
                $this->_propDict["authenticationStepResultDetail"] = new AuthenticationStepResultDetail($this->_propDict["authenticationStepResultDetail"]);
                return $this->_propDict["authenticationStepResultDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationStepResultDetail
    *
    * @param AuthenticationStepResultDetail $val The value to assign to the authenticationStepResultDetail
    *
    * @return AuthenticationDetail The AuthenticationDetail
    */
    public function setAuthenticationStepResultDetail($val)
    {
        $this->_propDict["authenticationStepResultDetail"] = $val;
         return $this;
    }

    /**
    * Gets the authenticationStepRequirement
    *
    * @return AuthenticationStepRequirement The authenticationStepRequirement
    */
    public function getAuthenticationStepRequirement()
    {
        if (array_key_exists("authenticationStepRequirement", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationStepRequirement"], "Microsoft\Graph\Beta\Model\AuthenticationStepRequirement")) {
                return $this->_propDict["authenticationStepRequirement"];
            } else {
                $this->_propDict["authenticationStepRequirement"] = new AuthenticationStepRequirement($this->_propDict["authenticationStepRequirement"]);
                return $this->_propDict["authenticationStepRequirement"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationStepRequirement
    *
    * @param AuthenticationStepRequirement $val The value to assign to the authenticationStepRequirement
    *
    * @return AuthenticationDetail The AuthenticationDetail
    */
    public function setAuthenticationStepRequirement($val)
    {
        $this->_propDict["authenticationStepRequirement"] = $val;
         return $this;
    }
}
