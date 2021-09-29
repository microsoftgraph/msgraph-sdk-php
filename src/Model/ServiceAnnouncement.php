<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceAnnouncement File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* ServiceAnnouncement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceAnnouncement extends Entity
{

     /** 
     * Gets the healthOverviews
    * A collection of service health information for tenant. This property is a contained navigation property, it is nullable and readonly.
     *
     * @return ServiceHealth[]|null The healthOverviews
     */
    public function getHealthOverviews()
    {
        if (array_key_exists('healthOverviews', $this->_propDict) && !is_null($this->_propDict['healthOverviews'])) {
            $healthOverviews = [];
            if (count($this->_propDict['healthOverviews']) > 0 && is_a($this->_propDict['healthOverviews'][0], 'ServiceHealth')) {
                return $this->_propDict['healthOverviews'];
            }
            foreach ($this->_propDict['healthOverviews'] as $singleValue) {
                $healthOverviews []= new ServiceHealth($singleValue);
            }
            $this->_propDict['healthOverviews'] = $healthOverviews;
            return $this->_propDict['healthOverviews'];
        }
        return null;
    }
    
    /** 
    * Sets the healthOverviews
    * A collection of service health information for tenant. This property is a contained navigation property, it is nullable and readonly.
    *
    * @param ServiceHealth[] $val The healthOverviews
    *
    * @return ServiceAnnouncement
    */
    public function setHealthOverviews($val)
    {
        $this->_propDict["healthOverviews"] = $val;
        return $this;
    }
    

     /** 
     * Gets the issues
    * A collection of service issues for tenant. This property is a contained navigation property, it is nullable and readonly.
     *
     * @return ServiceHealthIssue[]|null The issues
     */
    public function getIssues()
    {
        if (array_key_exists('issues', $this->_propDict) && !is_null($this->_propDict['issues'])) {
            $issues = [];
            if (count($this->_propDict['issues']) > 0 && is_a($this->_propDict['issues'][0], 'ServiceHealthIssue')) {
                return $this->_propDict['issues'];
            }
            foreach ($this->_propDict['issues'] as $singleValue) {
                $issues []= new ServiceHealthIssue($singleValue);
            }
            $this->_propDict['issues'] = $issues;
            return $this->_propDict['issues'];
        }
        return null;
    }
    
    /** 
    * Sets the issues
    * A collection of service issues for tenant. This property is a contained navigation property, it is nullable and readonly.
    *
    * @param ServiceHealthIssue[] $val The issues
    *
    * @return ServiceAnnouncement
    */
    public function setIssues($val)
    {
        $this->_propDict["issues"] = $val;
        return $this;
    }
    

     /** 
     * Gets the messages
    * A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly.
     *
     * @return ServiceUpdateMessage[]|null The messages
     */
    public function getMessages()
    {
        if (array_key_exists('messages', $this->_propDict) && !is_null($this->_propDict['messages'])) {
            $messages = [];
            if (count($this->_propDict['messages']) > 0 && is_a($this->_propDict['messages'][0], 'ServiceUpdateMessage')) {
                return $this->_propDict['messages'];
            }
            foreach ($this->_propDict['messages'] as $singleValue) {
                $messages []= new ServiceUpdateMessage($singleValue);
            }
            $this->_propDict['messages'] = $messages;
            return $this->_propDict['messages'];
        }
        return null;
    }
    
    /** 
    * Sets the messages
    * A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly.
    *
    * @param ServiceUpdateMessage[] $val The messages
    *
    * @return ServiceAnnouncement
    */
    public function setMessages($val)
    {
        $this->_propDict["messages"] = $val;
        return $this;
    }
    
}
