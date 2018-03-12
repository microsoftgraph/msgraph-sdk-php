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
namespace Microsoft\Graph\Beta\Model;

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
    * Gets the favoritePlanReferences
    *
    * @return PlannerFavoritePlanReferenceCollection The favoritePlanReferences
    */
    public function getFavoritePlanReferences()
    {
        if (array_key_exists("favoritePlanReferences", $this->_propDict)) {
            if (is_a($this->_propDict["favoritePlanReferences"], "Microsoft\Graph\Model\PlannerFavoritePlanReferenceCollection")) {
                return $this->_propDict["favoritePlanReferences"];
            } else {
                $this->_propDict["favoritePlanReferences"] = new PlannerFavoritePlanReferenceCollection($this->_propDict["favoritePlanReferences"]);
                return $this->_propDict["favoritePlanReferences"];
            }
        }
        return null;
    }
    
    /**
    * Sets the favoritePlanReferences
    *
    * @param PlannerFavoritePlanReferenceCollection $val The favoritePlanReferences
    *
    * @return PlannerUser
    */
    public function setFavoritePlanReferences($val)
    {
        $this->_propDict["favoritePlanReferences"] = $val;
        return $this;
    }
    
    /**
    * Gets the recentPlanReferences
    *
    * @return PlannerRecentPlanReferenceCollection The recentPlanReferences
    */
    public function getRecentPlanReferences()
    {
        if (array_key_exists("recentPlanReferences", $this->_propDict)) {
            if (is_a($this->_propDict["recentPlanReferences"], "Microsoft\Graph\Model\PlannerRecentPlanReferenceCollection")) {
                return $this->_propDict["recentPlanReferences"];
            } else {
                $this->_propDict["recentPlanReferences"] = new PlannerRecentPlanReferenceCollection($this->_propDict["recentPlanReferences"]);
                return $this->_propDict["recentPlanReferences"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recentPlanReferences
    *
    * @param PlannerRecentPlanReferenceCollection $val The recentPlanReferences
    *
    * @return PlannerUser
    */
    public function setRecentPlanReferences($val)
    {
        $this->_propDict["recentPlanReferences"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
    * Read-only. Nullable. Returns the plannerPlans shared with the user.
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
    * Read-only. Nullable. Returns the plannerPlans shared with the user.
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
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
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
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
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
    

     /** 
     * Gets the favoritePlans
     *
     * @return array The favoritePlans
     */
    public function getFavoritePlans()
    {
        if (array_key_exists("favoritePlans", $this->_propDict)) {
           return $this->_propDict["favoritePlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the favoritePlans
    *
    * @param PlannerPlan $val The favoritePlans
    *
    * @return PlannerUser
    */
    public function setFavoritePlans($val)
    {
		$this->_propDict["favoritePlans"] = $val;
        return $this;
    }
    

     /** 
     * Gets the recentPlans
     *
     * @return array The recentPlans
     */
    public function getRecentPlans()
    {
        if (array_key_exists("recentPlans", $this->_propDict)) {
           return $this->_propDict["recentPlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the recentPlans
    *
    * @param PlannerPlan $val The recentPlans
    *
    * @return PlannerUser
    */
    public function setRecentPlans($val)
    {
		$this->_propDict["recentPlans"] = $val;
        return $this;
    }
    
}