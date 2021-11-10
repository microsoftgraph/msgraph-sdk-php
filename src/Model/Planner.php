<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Planner File
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
* Planner class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Planner extends Entity
{

     /**
     * Gets the buckets
    * Read-only. Nullable. Returns a collection of the specified buckets
     *
     * @return PlannerBucket[]|null The buckets
     */
    public function getBuckets()
    {
        if (array_key_exists('buckets', $this->_propDict) && !is_null($this->_propDict['buckets'])) {
            $buckets = [];
            if (count($this->_propDict['buckets']) > 0 && is_a($this->_propDict['buckets'][0], 'PlannerBucket')) {
                return $this->_propDict['buckets'];
            }
            foreach ($this->_propDict['buckets'] as $singleValue) {
                $buckets []= new PlannerBucket($singleValue);
            }
            $this->_propDict['buckets'] = $buckets;
            return $this->_propDict['buckets'];
        }
        return null;
    }

    /**
    * Sets the buckets
    * Read-only. Nullable. Returns a collection of the specified buckets
    *
    * @param PlannerBucket[] $val The buckets
    *
    * @return Planner
    */
    public function setBuckets($val)
    {
        $this->_propDict["buckets"] = $val;
        return $this;
    }


     /**
     * Gets the plans
    * Read-only. Nullable. Returns a collection of the specified plans
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
    * Read-only. Nullable. Returns a collection of the specified plans
    *
    * @param PlannerPlan[] $val The plans
    *
    * @return Planner
    */
    public function setPlans($val)
    {
        $this->_propDict["plans"] = $val;
        return $this;
    }


     /**
     * Gets the tasks
    * Read-only. Nullable. Returns a collection of the specified tasks
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
    * Read-only. Nullable. Returns a collection of the specified tasks
    *
    * @param PlannerTask[] $val The tasks
    *
    * @return Planner
    */
    public function setTasks($val)
    {
        $this->_propDict["tasks"] = $val;
        return $this;
    }

}
