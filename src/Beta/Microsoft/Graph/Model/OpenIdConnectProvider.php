<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenIdConnectProvider File
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
* OpenIdConnectProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OpenIdConnectProvider extends IdentityProvider
{
    /**
    * Gets the scope
    *
    * @return string The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            return $this->_propDict["scope"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scope
    *
    * @param string $val The scope
    *
    * @return OpenIdConnectProvider
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }
    
    /**
    * Gets the metadataUrl
    *
    * @return string The metadataUrl
    */
    public function getMetadataUrl()
    {
        if (array_key_exists("metadataUrl", $this->_propDict)) {
            return $this->_propDict["metadataUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the metadataUrl
    *
    * @param string $val The metadataUrl
    *
    * @return OpenIdConnectProvider
    */
    public function setMetadataUrl($val)
    {
        $this->_propDict["metadataUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the domainHint
    *
    * @return string The domainHint
    */
    public function getDomainHint()
    {
        if (array_key_exists("domainHint", $this->_propDict)) {
            return $this->_propDict["domainHint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the domainHint
    *
    * @param string $val The domainHint
    *
    * @return OpenIdConnectProvider
    */
    public function setDomainHint($val)
    {
        $this->_propDict["domainHint"] = $val;
        return $this;
    }
    
    /**
    * Gets the responseType
    *
    * @return OpenIdConnectResponseTypes The responseType
    */
    public function getResponseType()
    {
        if (array_key_exists("responseType", $this->_propDict)) {
            if (is_a($this->_propDict["responseType"], "Beta\Microsoft\Graph\Model\OpenIdConnectResponseTypes")) {
                return $this->_propDict["responseType"];
            } else {
                $this->_propDict["responseType"] = new OpenIdConnectResponseTypes($this->_propDict["responseType"]);
                return $this->_propDict["responseType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the responseType
    *
    * @param OpenIdConnectResponseTypes $val The responseType
    *
    * @return OpenIdConnectProvider
    */
    public function setResponseType($val)
    {
        $this->_propDict["responseType"] = $val;
        return $this;
    }
    
    /**
    * Gets the responseMode
    *
    * @return OpenIdConnectResponseMode The responseMode
    */
    public function getResponseMode()
    {
        if (array_key_exists("responseMode", $this->_propDict)) {
            if (is_a($this->_propDict["responseMode"], "Beta\Microsoft\Graph\Model\OpenIdConnectResponseMode")) {
                return $this->_propDict["responseMode"];
            } else {
                $this->_propDict["responseMode"] = new OpenIdConnectResponseMode($this->_propDict["responseMode"]);
                return $this->_propDict["responseMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the responseMode
    *
    * @param OpenIdConnectResponseMode $val The responseMode
    *
    * @return OpenIdConnectProvider
    */
    public function setResponseMode($val)
    {
        $this->_propDict["responseMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the claimsMapping
    *
    * @return ClaimsMapping The claimsMapping
    */
    public function getClaimsMapping()
    {
        if (array_key_exists("claimsMapping", $this->_propDict)) {
            if (is_a($this->_propDict["claimsMapping"], "Beta\Microsoft\Graph\Model\ClaimsMapping")) {
                return $this->_propDict["claimsMapping"];
            } else {
                $this->_propDict["claimsMapping"] = new ClaimsMapping($this->_propDict["claimsMapping"]);
                return $this->_propDict["claimsMapping"];
            }
        }
        return null;
    }
    
    /**
    * Sets the claimsMapping
    *
    * @param ClaimsMapping $val The claimsMapping
    *
    * @return OpenIdConnectProvider
    */
    public function setClaimsMapping($val)
    {
        $this->_propDict["claimsMapping"] = $val;
        return $this;
    }
    
}