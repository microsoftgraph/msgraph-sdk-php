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
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* OnPremisesPublishingProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OnPremisesPublishingProfile extends Entity
{
    /**
    * Gets the hybridAgentUpdaterConfiguration
    *
    * @return HybridAgentUpdaterConfiguration The hybridAgentUpdaterConfiguration
    */
    public function getHybridAgentUpdaterConfiguration()
    {
        if (array_key_exists("hybridAgentUpdaterConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["hybridAgentUpdaterConfiguration"], "Microsoft\Graph\Beta\Model\HybridAgentUpdaterConfiguration")) {
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
    
}