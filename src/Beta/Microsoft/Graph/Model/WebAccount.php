<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WebAccount File
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
* WebAccount class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WebAccount extends ItemFacet
{
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
    * @return WebAccount
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return WebAccount
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the service
    *
    * @return ServiceInformation The service
    */
    public function getService()
    {
        if (array_key_exists("service", $this->_propDict)) {
            if (is_a($this->_propDict["service"], "Beta\Microsoft\Graph\Model\ServiceInformation")) {
                return $this->_propDict["service"];
            } else {
                $this->_propDict["service"] = new ServiceInformation($this->_propDict["service"]);
                return $this->_propDict["service"];
            }
        }
        return null;
    }
    
    /**
    * Sets the service
    *
    * @param ServiceInformation $val The service
    *
    * @return WebAccount
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }
    
    /**
    * Gets the statusMessage
    *
    * @return string The statusMessage
    */
    public function getStatusMessage()
    {
        if (array_key_exists("statusMessage", $this->_propDict)) {
            return $this->_propDict["statusMessage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the statusMessage
    *
    * @param string $val The statusMessage
    *
    * @return WebAccount
    */
    public function setStatusMessage($val)
    {
        $this->_propDict["statusMessage"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webUrl
    *
    * @param string $val The webUrl
    *
    * @return WebAccount
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
}