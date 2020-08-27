<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesPublishingProfile File
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
* OnPremisesPublishingProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesPublishingProfile extends Entity
{
    /**
    * Gets the isEnabled
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    *
    * @param bool $val The isEnabled
    *
    * @return OnPremisesPublishingProfile
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hybridAgentUpdaterConfiguration
    *
    * @return HybridAgentUpdaterConfiguration The hybridAgentUpdaterConfiguration
    */
    public function getHybridAgentUpdaterConfiguration()
    {
        if (array_key_exists("hybridAgentUpdaterConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["hybridAgentUpdaterConfiguration"], "Beta\Microsoft\Graph\Model\HybridAgentUpdaterConfiguration")) {
                return $this->_propDict["hybridAgentUpdaterConfiguration"];
            } else {
                $this->_propDict["hybridAgentUpdaterConfiguration"] = new HybridAgentUpdaterConfiguration($this->_propDict["hybridAgentUpdaterConfiguration"]);
                return $this->_propDict["hybridAgentUpdaterConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the hybridAgentUpdaterConfiguration
    *
    * @param HybridAgentUpdaterConfiguration $val The hybridAgentUpdaterConfiguration
    *
    * @return OnPremisesPublishingProfile
    */
    public function setHybridAgentUpdaterConfiguration($val)
    {
        $this->_propDict["hybridAgentUpdaterConfiguration"] = $val;
        return $this;
    }
    

     /** 
     * Gets the agents
     *
     * @return array The agents
     */
    public function getAgents()
    {
        if (array_key_exists("agents", $this->_propDict)) {
           return $this->_propDict["agents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the agents
    *
    * @param OnPremisesAgent $val The agents
    *
    * @return OnPremisesPublishingProfile
    */
    public function setAgents($val)
    {
		$this->_propDict["agents"] = $val;
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
    * @return OnPremisesPublishingProfile
    */
    public function setAgentGroups($val)
    {
		$this->_propDict["agentGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the publishedResources
     *
     * @return array The publishedResources
     */
    public function getPublishedResources()
    {
        if (array_key_exists("publishedResources", $this->_propDict)) {
           return $this->_propDict["publishedResources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the publishedResources
    *
    * @param PublishedResource $val The publishedResources
    *
    * @return OnPremisesPublishingProfile
    */
    public function setPublishedResources($val)
    {
		$this->_propDict["publishedResources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the connectors
     *
     * @return array The connectors
     */
    public function getConnectors()
    {
        if (array_key_exists("connectors", $this->_propDict)) {
           return $this->_propDict["connectors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the connectors
    *
    * @param Connector $val The connectors
    *
    * @return OnPremisesPublishingProfile
    */
    public function setConnectors($val)
    {
		$this->_propDict["connectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the connectorGroups
     *
     * @return array The connectorGroups
     */
    public function getConnectorGroups()
    {
        if (array_key_exists("connectorGroups", $this->_propDict)) {
           return $this->_propDict["connectorGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the connectorGroups
    *
    * @param ConnectorGroup $val The connectorGroups
    *
    * @return OnPremisesPublishingProfile
    */
    public function setConnectorGroups($val)
    {
		$this->_propDict["connectorGroups"] = $val;
        return $this;
    }
    
}