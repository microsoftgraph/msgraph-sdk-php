<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmbeddedSIMActivationCodePool File
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
* EmbeddedSIMActivationCodePool class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EmbeddedSIMActivationCodePool extends Entity
{
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
    * @return EmbeddedSIMActivationCodePool
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    *
    * @return \DateTime The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the activationCodes
     *
     * @return array The activationCodes
     */
    public function getActivationCodes()
    {
        if (array_key_exists("activationCodes", $this->_propDict)) {
           return $this->_propDict["activationCodes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the activationCodes
    *
    * @param EmbeddedSIMActivationCode $val The activationCodes
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setActivationCodes($val)
    {
		$this->_propDict["activationCodes"] = $val;
        return $this;
    }
    
    /**
    * Gets the activationCodeCount
    *
    * @return int The activationCodeCount
    */
    public function getActivationCodeCount()
    {
        if (array_key_exists("activationCodeCount", $this->_propDict)) {
            return $this->_propDict["activationCodeCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activationCodeCount
    *
    * @param int $val The activationCodeCount
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setActivationCodeCount($val)
    {
        $this->_propDict["activationCodeCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the assignments
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    *
    * @param EmbeddedSIMActivationCodePoolAssignment $val The assignments
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStates
     *
     * @return array The deviceStates
     */
    public function getDeviceStates()
    {
        if (array_key_exists("deviceStates", $this->_propDict)) {
           return $this->_propDict["deviceStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStates
    *
    * @param EmbeddedSIMDeviceState $val The deviceStates
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setDeviceStates($val)
    {
		$this->_propDict["deviceStates"] = $val;
        return $this;
    }
    
}