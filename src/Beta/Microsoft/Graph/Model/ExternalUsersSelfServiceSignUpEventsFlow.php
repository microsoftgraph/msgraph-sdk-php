<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalUsersSelfServiceSignUpEventsFlow File
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
* ExternalUsersSelfServiceSignUpEventsFlow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalUsersSelfServiceSignUpEventsFlow extends AuthenticationEventsFlow
{
    /**
    * Gets the onAttributeCollection
    * The configuration for what to invoke when attributes are ready to be collected from the user.
    *
    * @return OnAttributeCollectionHandler|null The onAttributeCollection
    */
    public function getOnAttributeCollection()
    {
        if (array_key_exists("onAttributeCollection", $this->_propDict)) {
            if (is_a($this->_propDict["onAttributeCollection"], "\Beta\Microsoft\Graph\Model\OnAttributeCollectionHandler") || is_null($this->_propDict["onAttributeCollection"])) {
                return $this->_propDict["onAttributeCollection"];
            } else {
                $this->_propDict["onAttributeCollection"] = new OnAttributeCollectionHandler($this->_propDict["onAttributeCollection"]);
                return $this->_propDict["onAttributeCollection"];
            }
        }
        return null;
    }

    /**
    * Sets the onAttributeCollection
    * The configuration for what to invoke when attributes are ready to be collected from the user.
    *
    * @param OnAttributeCollectionHandler $val The onAttributeCollection
    *
    * @return ExternalUsersSelfServiceSignUpEventsFlow
    */
    public function setOnAttributeCollection($val)
    {
        $this->_propDict["onAttributeCollection"] = $val;
        return $this;
    }

    /**
    * Gets the onAuthenticationMethodLoadStart
    * Required. The configuration for what to invoke when authentication methods are ready to be presented to the user. Must have at least one identity provider linked.
    *
    * @return OnAuthenticationMethodLoadStartHandler|null The onAuthenticationMethodLoadStart
    */
    public function getOnAuthenticationMethodLoadStart()
    {
        if (array_key_exists("onAuthenticationMethodLoadStart", $this->_propDict)) {
            if (is_a($this->_propDict["onAuthenticationMethodLoadStart"], "\Beta\Microsoft\Graph\Model\OnAuthenticationMethodLoadStartHandler") || is_null($this->_propDict["onAuthenticationMethodLoadStart"])) {
                return $this->_propDict["onAuthenticationMethodLoadStart"];
            } else {
                $this->_propDict["onAuthenticationMethodLoadStart"] = new OnAuthenticationMethodLoadStartHandler($this->_propDict["onAuthenticationMethodLoadStart"]);
                return $this->_propDict["onAuthenticationMethodLoadStart"];
            }
        }
        return null;
    }

    /**
    * Sets the onAuthenticationMethodLoadStart
    * Required. The configuration for what to invoke when authentication methods are ready to be presented to the user. Must have at least one identity provider linked.
    *
    * @param OnAuthenticationMethodLoadStartHandler $val The onAuthenticationMethodLoadStart
    *
    * @return ExternalUsersSelfServiceSignUpEventsFlow
    */
    public function setOnAuthenticationMethodLoadStart($val)
    {
        $this->_propDict["onAuthenticationMethodLoadStart"] = $val;
        return $this;
    }

    /**
    * Gets the onInteractiveAuthFlowStart
    * Required. The configuration for what to invoke when an authentication flow is ready to be initiated.
    *
    * @return OnInteractiveAuthFlowStartHandler|null The onInteractiveAuthFlowStart
    */
    public function getOnInteractiveAuthFlowStart()
    {
        if (array_key_exists("onInteractiveAuthFlowStart", $this->_propDict)) {
            if (is_a($this->_propDict["onInteractiveAuthFlowStart"], "\Beta\Microsoft\Graph\Model\OnInteractiveAuthFlowStartHandler") || is_null($this->_propDict["onInteractiveAuthFlowStart"])) {
                return $this->_propDict["onInteractiveAuthFlowStart"];
            } else {
                $this->_propDict["onInteractiveAuthFlowStart"] = new OnInteractiveAuthFlowStartHandler($this->_propDict["onInteractiveAuthFlowStart"]);
                return $this->_propDict["onInteractiveAuthFlowStart"];
            }
        }
        return null;
    }

    /**
    * Sets the onInteractiveAuthFlowStart
    * Required. The configuration for what to invoke when an authentication flow is ready to be initiated.
    *
    * @param OnInteractiveAuthFlowStartHandler $val The onInteractiveAuthFlowStart
    *
    * @return ExternalUsersSelfServiceSignUpEventsFlow
    */
    public function setOnInteractiveAuthFlowStart($val)
    {
        $this->_propDict["onInteractiveAuthFlowStart"] = $val;
        return $this;
    }

    /**
    * Gets the onUserCreateStart
    * The configuration for what to invoke during user creation.
    *
    * @return OnUserCreateStartHandler|null The onUserCreateStart
    */
    public function getOnUserCreateStart()
    {
        if (array_key_exists("onUserCreateStart", $this->_propDict)) {
            if (is_a($this->_propDict["onUserCreateStart"], "\Beta\Microsoft\Graph\Model\OnUserCreateStartHandler") || is_null($this->_propDict["onUserCreateStart"])) {
                return $this->_propDict["onUserCreateStart"];
            } else {
                $this->_propDict["onUserCreateStart"] = new OnUserCreateStartHandler($this->_propDict["onUserCreateStart"]);
                return $this->_propDict["onUserCreateStart"];
            }
        }
        return null;
    }

    /**
    * Sets the onUserCreateStart
    * The configuration for what to invoke during user creation.
    *
    * @param OnUserCreateStartHandler $val The onUserCreateStart
    *
    * @return ExternalUsersSelfServiceSignUpEventsFlow
    */
    public function setOnUserCreateStart($val)
    {
        $this->_propDict["onUserCreateStart"] = $val;
        return $this;
    }

}
