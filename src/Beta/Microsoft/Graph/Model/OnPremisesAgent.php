<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesAgent File
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
* OnPremisesAgent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesAgent extends Entity
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
    * @return OnPremisesAgent
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
    * @return OnPremisesAgent
    */
    public function setMachineName($val)
    {
        $this->_propDict["machineName"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return AgentStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Beta\Microsoft\Graph\Model\AgentStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AgentStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param AgentStatus $val The status
    *
    * @return OnPremisesAgent
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the supportedPublishingTypes
     *
     * @return array The supportedPublishingTypes
     */
    public function getSupportedPublishingTypes()
    {
        if (array_key_exists("supportedPublishingTypes", $this->_propDict)) {
           return $this->_propDict["supportedPublishingTypes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the supportedPublishingTypes
    *
    * @param OnPremisesPublishingType $val The supportedPublishingTypes
    *
    * @return OnPremisesAgent
    */
    public function setSupportedPublishingTypes($val)
    {
		$this->_propDict["supportedPublishingTypes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the agentGroups
     *
     * @return array The agentGroups
     */
    public function getAgentGroups()
    {
        if (array_key_exists("agentGroups", $this->_propDict)) {
           return $this->_propDict["agentGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the agentGroups
    *
    * @param OnPremisesAgentGroup $val The agentGroups
    *
    * @return OnPremisesAgent
    */
    public function setAgentGroups($val)
    {
		$this->_propDict["agentGroups"] = $val;
        return $this;
    }
    
}