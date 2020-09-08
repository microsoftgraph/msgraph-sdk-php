<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PublishedResource File
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
* PublishedResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PublishedResource extends Entity
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
    * @return PublishedResource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the publishingType
    *
    * @return OnPremisesPublishingType The publishingType
    */
    public function getPublishingType()
    {
        if (array_key_exists("publishingType", $this->_propDict)) {
            if (is_a($this->_propDict["publishingType"], "Beta\Microsoft\Graph\Model\OnPremisesPublishingType")) {
                return $this->_propDict["publishingType"];
            } else {
                $this->_propDict["publishingType"] = new OnPremisesPublishingType($this->_propDict["publishingType"]);
                return $this->_propDict["publishingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishingType
    *
    * @param OnPremisesPublishingType $val The publishingType
    *
    * @return PublishedResource
    */
    public function setPublishingType($val)
    {
        $this->_propDict["publishingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceName
    *
    * @return string The resourceName
    */
    public function getResourceName()
    {
        if (array_key_exists("resourceName", $this->_propDict)) {
            return $this->_propDict["resourceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceName
    *
    * @param string $val The resourceName
    *
    * @return PublishedResource
    */
    public function setResourceName($val)
    {
        $this->_propDict["resourceName"] = $val;
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
    * @return PublishedResource
    */
    public function setAgentGroups($val)
    {
		$this->_propDict["agentGroups"] = $val;
        return $this;
    }
    
}