<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Connector File
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
* Connector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Connector extends Entity
{
    /**
    * Gets the externalIp
    *
    * @return string The externalIp
    */
    public function getExternalIp()
    {
        if (array_key_exists("externalIp", $this->_propDict)) {
            return $this->_propDict["externalIp"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalIp
    *
    * @param string $val The externalIp
    *
    * @return Connector
    */
    public function setExternalIp($val)
    {
        $this->_propDict["externalIp"] = $val;
        return $this;
    }
    
    /**
    * Gets the machineName
    *
    * @return string The machineName
    */
    public function getMachineName()
    {
        if (array_key_exists("machineName", $this->_propDict)) {
            return $this->_propDict["machineName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the machineName
    *
    * @param string $val The machineName
    *
    * @return Connector
    */
    public function setMachineName($val)
    {
        $this->_propDict["machineName"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return ConnectorStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Beta\Microsoft\Graph\Model\ConnectorStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ConnectorStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param ConnectorStatus $val The status
    *
    * @return Connector
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the memberOf
     *
     * @return array The memberOf
     */
    public function getMemberOf()
    {
        if (array_key_exists("memberOf", $this->_propDict)) {
           return $this->_propDict["memberOf"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the memberOf
    *
    * @param ConnectorGroup $val The memberOf
    *
    * @return Connector
    */
    public function setMemberOf($val)
    {
		$this->_propDict["memberOf"] = $val;
        return $this;
    }
    
}