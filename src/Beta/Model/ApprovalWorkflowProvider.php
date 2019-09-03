<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApprovalWorkflowProvider File
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
* ApprovalWorkflowProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ApprovalWorkflowProvider extends Entity
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
    * @return ApprovalWorkflowProvider
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the businessFlows
     *
     * @return array The businessFlows
     */
    public function getBusinessFlows()
    {
        if (array_key_exists("businessFlows", $this->_propDict)) {
           return $this->_propDict["businessFlows"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the businessFlows
    *
    * @param BusinessFlow $val The businessFlows
    *
    * @return ApprovalWorkflowProvider
    */
    public function setBusinessFlows($val)
    {
		$this->_propDict["businessFlows"] = $val;
        return $this;
    }
    

     /** 
     * Gets the policyTemplates
     *
     * @return array The policyTemplates
     */
    public function getPolicyTemplates()
    {
        if (array_key_exists("policyTemplates", $this->_propDict)) {
           return $this->_propDict["policyTemplates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the policyTemplates
    *
    * @param GovernancePolicyTemplate $val The policyTemplates
    *
    * @return ApprovalWorkflowProvider
    */
    public function setPolicyTemplates($val)
    {
		$this->_propDict["policyTemplates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the requests
     *
     * @return array The requests
     */
    public function getRequests()
    {
        if (array_key_exists("requests", $this->_propDict)) {
           return $this->_propDict["requests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the requests
    *
    * @param Request $val The requests
    *
    * @return ApprovalWorkflowProvider
    */
    public function setRequests($val)
    {
		$this->_propDict["requests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the requestsAwaitingMyDecision
     *
     * @return array The requestsAwaitingMyDecision
     */
    public function getRequestsAwaitingMyDecision()
    {
        if (array_key_exists("requestsAwaitingMyDecision", $this->_propDict)) {
           return $this->_propDict["requestsAwaitingMyDecision"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the requestsAwaitingMyDecision
    *
    * @param Request $val The requestsAwaitingMyDecision
    *
    * @return ApprovalWorkflowProvider
    */
    public function setRequestsAwaitingMyDecision($val)
    {
		$this->_propDict["requestsAwaitingMyDecision"] = $val;
        return $this;
    }
    
}