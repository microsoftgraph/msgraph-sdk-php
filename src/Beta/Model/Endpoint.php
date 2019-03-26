<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Endpoint File
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
* Endpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Endpoint extends DirectoryObject
{
    /**
    * Gets the capability
    *
    * @return string The capability
    */
    public function getCapability()
    {
        if (array_key_exists("capability", $this->_propDict)) {
            return $this->_propDict["capability"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the capability
    *
    * @param string $val The capability
    *
    * @return Endpoint
    */
    public function setCapability($val)
    {
        $this->_propDict["capability"] = $val;
        return $this;
    }
    
    /**
    * Gets the providerId
    *
    * @return string The providerId
    */
    public function getProviderId()
    {
        if (array_key_exists("providerId", $this->_propDict)) {
            return $this->_propDict["providerId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the providerId
    *
    * @param string $val The providerId
    *
    * @return Endpoint
    */
    public function setProviderId($val)
    {
        $this->_propDict["providerId"] = $val;
        return $this;
    }
    
    /**
    * Gets the providerName
    *
    * @return string The providerName
    */
    public function getProviderName()
    {
        if (array_key_exists("providerName", $this->_propDict)) {
            return $this->_propDict["providerName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the providerName
    *
    * @param string $val The providerName
    *
    * @return Endpoint
    */
    public function setProviderName($val)
    {
        $this->_propDict["providerName"] = $val;
        return $this;
    }
    
    /**
    * Gets the uri
    *
    * @return string The uri
    */
    public function getUri()
    {
        if (array_key_exists("uri", $this->_propDict)) {
            return $this->_propDict["uri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uri
    *
    * @param string $val The uri
    *
    * @return Endpoint
    */
    public function setUri($val)
    {
        $this->_propDict["uri"] = $val;
        return $this;
    }
    
    /**
    * Gets the providerResourceId
    *
    * @return string The providerResourceId
    */
    public function getProviderResourceId()
    {
        if (array_key_exists("providerResourceId", $this->_propDict)) {
            return $this->_propDict["providerResourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the providerResourceId
    *
    * @param string $val The providerResourceId
    *
    * @return Endpoint
    */
    public function setProviderResourceId($val)
    {
        $this->_propDict["providerResourceId"] = $val;
        return $this;
    }
    
}