<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServicePrincipalSignInActivity File
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
* ServicePrincipalSignInActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServicePrincipalSignInActivity extends Entity
{
    /**
    * Gets the appId
    * The application ID of the resource.
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * The application ID of the resource.
    *
    * @param string $val The appId
    *
    * @return ServicePrincipalSignInActivity
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }

    /**
    * Gets the applicationAuthenticationClientSignInActivity
    * The sign-in activity of the application in a app-only authentication flow (app-to-app tokens) where the application acts like a client.
    *
    * @return SignInActivity|null The applicationAuthenticationClientSignInActivity
    */
    public function getApplicationAuthenticationClientSignInActivity()
    {
        if (array_key_exists("applicationAuthenticationClientSignInActivity", $this->_propDict)) {
            if (is_a($this->_propDict["applicationAuthenticationClientSignInActivity"], "\Beta\Microsoft\Graph\Model\SignInActivity") || is_null($this->_propDict["applicationAuthenticationClientSignInActivity"])) {
                return $this->_propDict["applicationAuthenticationClientSignInActivity"];
            } else {
                $this->_propDict["applicationAuthenticationClientSignInActivity"] = new SignInActivity($this->_propDict["applicationAuthenticationClientSignInActivity"]);
                return $this->_propDict["applicationAuthenticationClientSignInActivity"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationAuthenticationClientSignInActivity
    * The sign-in activity of the application in a app-only authentication flow (app-to-app tokens) where the application acts like a client.
    *
    * @param SignInActivity $val The applicationAuthenticationClientSignInActivity
    *
    * @return ServicePrincipalSignInActivity
    */
    public function setApplicationAuthenticationClientSignInActivity($val)
    {
        $this->_propDict["applicationAuthenticationClientSignInActivity"] = $val;
        return $this;
    }

    /**
    * Gets the applicationAuthenticationResourceSignInActivity
    * The sign-in activity of the application in a app-only authentication flow (app-to-app tokens) where the application acts like a resource.
    *
    * @return SignInActivity|null The applicationAuthenticationResourceSignInActivity
    */
    public function getApplicationAuthenticationResourceSignInActivity()
    {
        if (array_key_exists("applicationAuthenticationResourceSignInActivity", $this->_propDict)) {
            if (is_a($this->_propDict["applicationAuthenticationResourceSignInActivity"], "\Beta\Microsoft\Graph\Model\SignInActivity") || is_null($this->_propDict["applicationAuthenticationResourceSignInActivity"])) {
                return $this->_propDict["applicationAuthenticationResourceSignInActivity"];
            } else {
                $this->_propDict["applicationAuthenticationResourceSignInActivity"] = new SignInActivity($this->_propDict["applicationAuthenticationResourceSignInActivity"]);
                return $this->_propDict["applicationAuthenticationResourceSignInActivity"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationAuthenticationResourceSignInActivity
    * The sign-in activity of the application in a app-only authentication flow (app-to-app tokens) where the application acts like a resource.
    *
    * @param SignInActivity $val The applicationAuthenticationResourceSignInActivity
    *
    * @return ServicePrincipalSignInActivity
    */
    public function setApplicationAuthenticationResourceSignInActivity($val)
    {
        $this->_propDict["applicationAuthenticationResourceSignInActivity"] = $val;
        return $this;
    }

    /**
    * Gets the delegatedClientSignInActivity
    * The sign-in activity of the application in a delegated flow (user sign-in) where the application acts like a client.
    *
    * @return SignInActivity|null The delegatedClientSignInActivity
    */
    public function getDelegatedClientSignInActivity()
    {
        if (array_key_exists("delegatedClientSignInActivity", $this->_propDict)) {
            if (is_a($this->_propDict["delegatedClientSignInActivity"], "\Beta\Microsoft\Graph\Model\SignInActivity") || is_null($this->_propDict["delegatedClientSignInActivity"])) {
                return $this->_propDict["delegatedClientSignInActivity"];
            } else {
                $this->_propDict["delegatedClientSignInActivity"] = new SignInActivity($this->_propDict["delegatedClientSignInActivity"]);
                return $this->_propDict["delegatedClientSignInActivity"];
            }
        }
        return null;
    }

    /**
    * Sets the delegatedClientSignInActivity
    * The sign-in activity of the application in a delegated flow (user sign-in) where the application acts like a client.
    *
    * @param SignInActivity $val The delegatedClientSignInActivity
    *
    * @return ServicePrincipalSignInActivity
    */
    public function setDelegatedClientSignInActivity($val)
    {
        $this->_propDict["delegatedClientSignInActivity"] = $val;
        return $this;
    }

    /**
    * Gets the delegatedResourceSignInActivity
    * The sign-in activity of the application in a delegated flow (user sign-in) where the application acts like a resource.
    *
    * @return SignInActivity|null The delegatedResourceSignInActivity
    */
    public function getDelegatedResourceSignInActivity()
    {
        if (array_key_exists("delegatedResourceSignInActivity", $this->_propDict)) {
            if (is_a($this->_propDict["delegatedResourceSignInActivity"], "\Beta\Microsoft\Graph\Model\SignInActivity") || is_null($this->_propDict["delegatedResourceSignInActivity"])) {
                return $this->_propDict["delegatedResourceSignInActivity"];
            } else {
                $this->_propDict["delegatedResourceSignInActivity"] = new SignInActivity($this->_propDict["delegatedResourceSignInActivity"]);
                return $this->_propDict["delegatedResourceSignInActivity"];
            }
        }
        return null;
    }

    /**
    * Sets the delegatedResourceSignInActivity
    * The sign-in activity of the application in a delegated flow (user sign-in) where the application acts like a resource.
    *
    * @param SignInActivity $val The delegatedResourceSignInActivity
    *
    * @return ServicePrincipalSignInActivity
    */
    public function setDelegatedResourceSignInActivity($val)
    {
        $this->_propDict["delegatedResourceSignInActivity"] = $val;
        return $this;
    }

    /**
    * Gets the lastSignInActivity
    * The most recent sign-in activity of the application across delegated or app-only flows where the application is used either as a client or resource.
    *
    * @return SignInActivity|null The lastSignInActivity
    */
    public function getLastSignInActivity()
    {
        if (array_key_exists("lastSignInActivity", $this->_propDict)) {
            if (is_a($this->_propDict["lastSignInActivity"], "\Beta\Microsoft\Graph\Model\SignInActivity") || is_null($this->_propDict["lastSignInActivity"])) {
                return $this->_propDict["lastSignInActivity"];
            } else {
                $this->_propDict["lastSignInActivity"] = new SignInActivity($this->_propDict["lastSignInActivity"]);
                return $this->_propDict["lastSignInActivity"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSignInActivity
    * The most recent sign-in activity of the application across delegated or app-only flows where the application is used either as a client or resource.
    *
    * @param SignInActivity $val The lastSignInActivity
    *
    * @return ServicePrincipalSignInActivity
    */
    public function setLastSignInActivity($val)
    {
        $this->_propDict["lastSignInActivity"] = $val;
        return $this;
    }

}
