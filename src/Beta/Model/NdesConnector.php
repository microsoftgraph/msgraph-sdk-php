<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NdesConnector File
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
* NdesConnector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class NdesConnector extends Entity
{
    /**
    * Gets the lastConnectionDateTime
    *
    * @return \DateTime The lastConnectionDateTime
    */
    public function getLastConnectionDateTime()
    {
        if (array_key_exists("lastConnectionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastConnectionDateTime"], "\DateTime")) {
                return $this->_propDict["lastConnectionDateTime"];
            } else {
                $this->_propDict["lastConnectionDateTime"] = new \DateTime($this->_propDict["lastConnectionDateTime"]);
                return $this->_propDict["lastConnectionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastConnectionDateTime
    *
    * @param \DateTime $val The lastConnectionDateTime
    *
    * @return NdesConnector
    */
    public function setLastConnectionDateTime($val)
    {
        $this->_propDict["lastConnectionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return NdesConnectorState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Model\NdesConnectorState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new NdesConnectorState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param NdesConnectorState $val The state
    *
    * @return NdesConnector
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return NdesConnector
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
}