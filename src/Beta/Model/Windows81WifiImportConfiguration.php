<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows81WifiImportConfiguration File
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
* Windows81WifiImportConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Windows81WifiImportConfiguration extends DeviceConfiguration
{
    /**
    * Gets the payloadFileName
    *
    * @return string The payloadFileName
    */
    public function getPayloadFileName()
    {
        if (array_key_exists("payloadFileName", $this->_propDict)) {
            return $this->_propDict["payloadFileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payloadFileName
    *
    * @param string $val The payloadFileName
    *
    * @return Windows81WifiImportConfiguration
    */
    public function setPayloadFileName($val)
    {
        $this->_propDict["payloadFileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the profileName
    *
    * @return string The profileName
    */
    public function getProfileName()
    {
        if (array_key_exists("profileName", $this->_propDict)) {
            return $this->_propDict["profileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the profileName
    *
    * @param string $val The profileName
    *
    * @return Windows81WifiImportConfiguration
    */
    public function setProfileName($val)
    {
        $this->_propDict["profileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the payload
    *
    * @return \GuzzleHttp\Psr7\Stream The payload
    */
    public function getPayload()
    {
        if (array_key_exists("payload", $this->_propDict)) {
            if (is_a($this->_propDict["payload"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["payload"];
            } else {
                $this->_propDict["payload"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["payload"]);
                return $this->_propDict["payload"];
            }
        }
        return null;
    }
    
    /**
    * Sets the payload
    *
    * @param \GuzzleHttp\Psr7\Stream $val The payload
    *
    * @return Windows81WifiImportConfiguration
    */
    public function setPayload($val)
    {
        $this->_propDict["payload"] = $val;
        return $this;
    }
    
}