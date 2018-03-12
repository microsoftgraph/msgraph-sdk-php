<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsVpnConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* WindowsVpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsVpnConfiguration extends DeviceConfiguration
{
    /**
    * Gets the connectionName
    *
    * @return string The connectionName
    */
    public function getConnectionName()
    {
        if (array_key_exists("connectionName", $this->_propDict)) {
            return $this->_propDict["connectionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectionName
    *
    * @param string $val The connectionName
    *
    * @return WindowsVpnConfiguration
    */
    public function setConnectionName($val)
    {
        $this->_propDict["connectionName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the servers
     *
     * @return array The servers
     */
    public function getServers()
    {
        if (array_key_exists("servers", $this->_propDict)) {
           return $this->_propDict["servers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the servers
    *
    * @param VpnServer $val The servers
    *
    * @return WindowsVpnConfiguration
    */
    public function setServers($val)
    {
		$this->_propDict["servers"] = $val;
        return $this;
    }
    
    /**
    * Gets the customXml
    *
    * @return \GuzzleHttp\Psr7\Stream The customXml
    */
    public function getCustomXml()
    {
        if (array_key_exists("customXml", $this->_propDict)) {
            if (is_a($this->_propDict["customXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["customXml"];
            } else {
                $this->_propDict["customXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["customXml"]);
                return $this->_propDict["customXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the customXml
    *
    * @param \GuzzleHttp\Psr7\Stream $val The customXml
    *
    * @return WindowsVpnConfiguration
    */
    public function setCustomXml($val)
    {
        $this->_propDict["customXml"] = $val;
        return $this;
    }
    
}