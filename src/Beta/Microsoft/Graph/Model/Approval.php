<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Approval File
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
* Approval class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Approval extends Entity
{

     /** 
     * Gets the pendingSteps
     *
     * @return array The pendingSteps
     */
    public function getPendingSteps()
    {
        if (array_key_exists("pendingSteps", $this->_propDict)) {
           return $this->_propDict["pendingSteps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the pendingSteps
    *
    * @param ApprovalStep $val The pendingSteps
    *
    * @return Approval
    */
    public function setPendingSteps($val)
    {
		$this->_propDict["pendingSteps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the completedSteps
     *
     * @return array The completedSteps
     */
    public function getCompletedSteps()
    {
        if (array_key_exists("completedSteps", $this->_propDict)) {
           return $this->_propDict["completedSteps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the completedSteps
    *
    * @param ApprovalStep $val The completedSteps
    *
    * @return Approval
    */
    public function setCompletedSteps($val)
    {
		$this->_propDict["completedSteps"] = $val;
        return $this;
    }
    
}