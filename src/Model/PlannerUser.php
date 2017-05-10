<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerUser File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* PlannerUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PlannerUser extends Entity
{

     /** 
     * Gets the tasks
     *
     * @return array The tasks
     */
    public function getTasks()
    {
        if (array_key_exists("tasks", $this->_propDict)) {
           return $this->_propDict["tasks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tasks
    *
    * @param PlannerTask $val The tasks
    *
    * @return PlannerUser
    */
    public function setTasks($val)
    {
		$this->_propDict["tasks"] = $val;
        return $this;
    }
    

     /** 
     * Gets the plans
     *
     * @return array The plans
     */
    public function getPlans()
    {
        if (array_key_exists("plans", $this->_propDict)) {
           return $this->_propDict["plans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the plans
    *
    * @param PlannerPlan $val The plans
    *
    * @return PlannerUser
    */
    public function setPlans($val)
    {
		$this->_propDict["plans"] = $val;
        return $this;
    }
    
}