<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WebApplication File
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
* WebApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WebApplication extends Entity
{
    /**
    * Gets the homePageUrl
    * Home page or landing page of the application.
    *
    * @return string|null The homePageUrl
    */
    public function getHomePageUrl()
    {
        if (array_key_exists("homePageUrl", $this->_propDict)) {
            return $this->_propDict["homePageUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the homePageUrl
    * Home page or landing page of the application.
    *
    * @param string $val The value of the homePageUrl
    *
    * @return WebApplication
    */
    public function setHomePageUrl($val)
    {
        $this->_propDict["homePageUrl"] = $val;
        return $this;
    }

    /**
    * Gets the implicitGrantSettings
    * Specifies whether this web application can request tokens using the OAuth 2.0 implicit flow.
    *
    * @return ImplicitGrantSettings|null The implicitGrantSettings
    */
    public function getImplicitGrantSettings()
    {
        if (array_key_exists("implicitGrantSettings", $this->_propDict)) {
            if (is_a($this->_propDict["implicitGrantSettings"], "\Beta\Microsoft\Graph\Model\ImplicitGrantSettings") || is_null($this->_propDict["implicitGrantSettings"])) {
                return $this->_propDict["implicitGrantSettings"];
            } else {
                $this->_propDict["implicitGrantSettings"] = new ImplicitGrantSettings($this->_propDict["implicitGrantSettings"]);
                return $this->_propDict["implicitGrantSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the implicitGrantSettings
    * Specifies whether this web application can request tokens using the OAuth 2.0 implicit flow.
    *
    * @param ImplicitGrantSettings $val The value to assign to the implicitGrantSettings
    *
    * @return WebApplication The WebApplication
    */
    public function setImplicitGrantSettings($val)
    {
        $this->_propDict["implicitGrantSettings"] = $val;
         return $this;
    }
    /**
    * Gets the logoutUrl
    * Specifies the URL that will be used by Microsoft's authorization service to logout an user using front-channel, back-channel or SAML logout protocols.
    *
    * @return string|null The logoutUrl
    */
    public function getLogoutUrl()
    {
        if (array_key_exists("logoutUrl", $this->_propDict)) {
            return $this->_propDict["logoutUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logoutUrl
    * Specifies the URL that will be used by Microsoft's authorization service to logout an user using front-channel, back-channel or SAML logout protocols.
    *
    * @param string $val The value of the logoutUrl
    *
    * @return WebApplication
    */
    public function setLogoutUrl($val)
    {
        $this->_propDict["logoutUrl"] = $val;
        return $this;
    }
    /**
    * Gets the oauth2AllowImplicitFlow
    *
    * @return bool|null The oauth2AllowImplicitFlow
    */
    public function getOauth2AllowImplicitFlow()
    {
        if (array_key_exists("oauth2AllowImplicitFlow", $this->_propDict)) {
            return $this->_propDict["oauth2AllowImplicitFlow"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oauth2AllowImplicitFlow
    *
    * @param bool $val The value of the oauth2AllowImplicitFlow
    *
    * @return WebApplication
    */
    public function setOauth2AllowImplicitFlow($val)
    {
        $this->_propDict["oauth2AllowImplicitFlow"] = $val;
        return $this;
    }
    /**
    * Gets the redirectUris
    * Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
    *
    * @return string|null The redirectUris
    */
    public function getRedirectUris()
    {
        if (array_key_exists("redirectUris", $this->_propDict)) {
            return $this->_propDict["redirectUris"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redirectUris
    * Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
    *
    * @param string $val The value of the redirectUris
    *
    * @return WebApplication
    */
    public function setRedirectUris($val)
    {
        $this->_propDict["redirectUris"] = $val;
        return $this;
    }

    /**
    * Gets the redirectUriSettings
    * Specifies the index of the URLs where user tokens are sent for sign-in. This is only valid for applications using SAML.
    *
    * @return RedirectUriSettings|null The redirectUriSettings
    */
    public function getRedirectUriSettings()
    {
        if (array_key_exists("redirectUriSettings", $this->_propDict)) {
            if (is_a($this->_propDict["redirectUriSettings"], "\Beta\Microsoft\Graph\Model\RedirectUriSettings") || is_null($this->_propDict["redirectUriSettings"])) {
                return $this->_propDict["redirectUriSettings"];
            } else {
                $this->_propDict["redirectUriSettings"] = new RedirectUriSettings($this->_propDict["redirectUriSettings"]);
                return $this->_propDict["redirectUriSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the redirectUriSettings
    * Specifies the index of the URLs where user tokens are sent for sign-in. This is only valid for applications using SAML.
    *
    * @param RedirectUriSettings $val The value to assign to the redirectUriSettings
    *
    * @return WebApplication The WebApplication
    */
    public function setRedirectUriSettings($val)
    {
        $this->_propDict["redirectUriSettings"] = $val;
         return $this;
    }
}
