<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerUser File
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
* PlannerUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerUser extends Entity
{

     /**
     * Gets the plans
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
     *
     * @return PlannerPlan[]|null The plans
     */
    public function getPlans()
    {
        if (array_key_exists('plans', $this->_propDict) && !is_null($this->_propDict['plans'])) {
            $plans = [];
            if (count($this->_propDict['plans']) > 0 && is_a($this->_propDict['plans'][0], 'PlannerPlan')) {
                return $this->_propDict['plans'];
            }
            foreach ($this->_propDict['plans'] as $singleValue) {
                $plans []= new PlannerPlan($singleValue);
            }
            $this->_propDict['plans'] = $plans;
            return $this->_propDict['plans'];
        }
        return null;
    }

    /**
    * Sets the plans
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
    *
    * @param PlannerPlan[] $val The plans
    *
    * @return PlannerUser
    */
    public function setPlans($val)
    {
        $this->_propDict["plans"] = $val;
        return $this;
    }


     /**
     * Gets the tasks
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
     *
     * @return PlannerTask[]|null The tasks
     */
    public function getTasks()
    {
        if (array_key_exists('tasks', $this->_propDict) && !is_null($this->_propDict['tasks'])) {
            $tasks = [];
            if (count($this->_propDict['tasks']) > 0 && is_a($this->_propDict['tasks'][0], 'PlannerTask')) {
                return $this->_propDict['tasks'];
            }
            foreach ($this->_propDict['tasks'] as $singleValue) {
                $tasks []= new PlannerTask($singleValue);
            }
            $this->_propDict['tasks'] = $tasks;
            return $this->_propDict['tasks'];
        }
        return null;
    }

    /**
    * Sets the tasks
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
    *
    * @param PlannerTask[] $val The tasks
    *
    * @return PlannerUser
    */
    public function setTasks($val)
    {
        $this->_propDict["tasks"] = $val;
        return $this;
    }

}
