<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WebApplication File
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
* WebApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WebApplication extends Entity
{
    /**
    * Gets the redirectUris
    *
    * @return string The redirectUris
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
    * Gets the oauth2AllowImplicitFlow
    *
    * @return bool The oauth2AllowImplicitFlow
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
    * Gets the logoutUrl
    *
    * @return string The logoutUrl
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
    * Gets the implicitGrantSettings
    *
    * @return ImplicitGrantSettings The implicitGrantSettings
    */
    public function getImplicitGrantSettings()
    {
        if (array_key_exists("implicitGrantSettings", $this->_propDict)) {
            if (is_a($this->_propDict["implicitGrantSettings"], "Microsoft\Graph\Beta\Model\ImplicitGrantSettings")) {
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
}
