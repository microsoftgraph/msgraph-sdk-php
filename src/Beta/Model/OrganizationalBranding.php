<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalBranding File
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
* OrganizationalBranding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OrganizationalBranding extends Entity
{
    /**
    * Gets the backgroundColor
    *
    * @return string The backgroundColor
    */
    public function getBackgroundColor()
    {
        if (array_key_exists("backgroundColor", $this->_propDict)) {
            return $this->_propDict["backgroundColor"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the backgroundColor
    *
    * @param string $val The backgroundColor
    *
    * @return OrganizationalBranding
    */
    public function setBackgroundColor($val)
    {
        $this->_propDict["backgroundColor"] = $val;
        return $this;
    }
    
    /**
    * Gets the backgroundImage
    *
    * @return \GuzzleHttp\Psr7\Stream The backgroundImage
    */
    public function getBackgroundImage()
    {
        if (array_key_exists("backgroundImage", $this->_propDict)) {
            if (is_a($this->_propDict["backgroundImage"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["backgroundImage"];
            } else {
                $this->_propDict["backgroundImage"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["backgroundImage"]);
                return $this->_propDict["backgroundImage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the backgroundImage
    *
    * @param \GuzzleHttp\Psr7\Stream $val The backgroundImage
    *
    * @return OrganizationalBranding
    */
    public function setBackgroundImage($val)
    {
        $this->_propDict["backgroundImage"] = $val;
        return $this;
    }
    
    /**
    * Gets the bannerLogo
    *
    * @return \GuzzleHttp\Psr7\Stream The bannerLogo
    */
    public function getBannerLogo()
    {
        if (array_key_exists("bannerLogo", $this->_propDict)) {
            if (is_a($this->_propDict["bannerLogo"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["bannerLogo"];
            } else {
                $this->_propDict["bannerLogo"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["bannerLogo"]);
                return $this->_propDict["bannerLogo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bannerLogo
    *
    * @param \GuzzleHttp\Psr7\Stream $val The bannerLogo
    *
    * @return OrganizationalBranding
    */
    public function setBannerLogo($val)
    {
        $this->_propDict["bannerLogo"] = $val;
        return $this;
    }
    
    /**
    * Gets the locale
    *
    * @return string The locale
    */
    public function getLocale()
    {
        if (array_key_exists("locale", $this->_propDict)) {
            return $this->_propDict["locale"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the locale
    *
    * @param string $val The locale
    *
    * @return OrganizationalBranding
    */
    public function setLocale($val)
    {
        $this->_propDict["locale"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInPageText
    *
    * @return string The signInPageText
    */
    public function getSignInPageText()
    {
        if (array_key_exists("signInPageText", $this->_propDict)) {
            return $this->_propDict["signInPageText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signInPageText
    *
    * @param string $val The signInPageText
    *
    * @return OrganizationalBranding
    */
    public function setSignInPageText($val)
    {
        $this->_propDict["signInPageText"] = $val;
        return $this;
    }
    
    /**
    * Gets the squareLogo
    *
    * @return \GuzzleHttp\Psr7\Stream The squareLogo
    */
    public function getSquareLogo()
    {
        if (array_key_exists("squareLogo", $this->_propDict)) {
            if (is_a($this->_propDict["squareLogo"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["squareLogo"];
            } else {
                $this->_propDict["squareLogo"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["squareLogo"]);
                return $this->_propDict["squareLogo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the squareLogo
    *
    * @param \GuzzleHttp\Psr7\Stream $val The squareLogo
    *
    * @return OrganizationalBranding
    */
    public function setSquareLogo($val)
    {
        $this->_propDict["squareLogo"] = $val;
        return $this;
    }
    
    /**
    * Gets the usernameHintText
    *
    * @return string The usernameHintText
    */
    public function getUsernameHintText()
    {
        if (array_key_exists("usernameHintText", $this->_propDict)) {
            return $this->_propDict["usernameHintText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usernameHintText
    *
    * @param string $val The usernameHintText
    *
    * @return OrganizationalBranding
    */
    public function setUsernameHintText($val)
    {
        $this->_propDict["usernameHintText"] = $val;
        return $this;
    }
    
}