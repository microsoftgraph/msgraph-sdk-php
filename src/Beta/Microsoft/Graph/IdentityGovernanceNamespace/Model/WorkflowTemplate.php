<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkflowTemplate File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernance\Model;

/**
* WorkflowTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkflowTemplate extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the category
    *
    * @return LifecycleWorkflowCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\IdentityGovernance\Model\LifecycleWorkflowCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new LifecycleWorkflowCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    *
    * @param LifecycleWorkflowCategory $val The category
    *
    * @return WorkflowTemplate
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return WorkflowTemplate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    *
    * @return string|null The displayName
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
    * @return WorkflowTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the executionConditions
    *
    * @return WorkflowExecutionConditions|null The executionConditions
    */
    public function getExecutionConditions()
    {
        if (array_key_exists("executionConditions", $this->_propDict)) {
            if (is_a($this->_propDict["executionConditions"], "\Beta\Microsoft\Graph\IdentityGovernance\Model\WorkflowExecutionConditions") || is_null($this->_propDict["executionConditions"])) {
                return $this->_propDict["executionConditions"];
            } else {
                $this->_propDict["executionConditions"] = new WorkflowExecutionConditions($this->_propDict["executionConditions"]);
                return $this->_propDict["executionConditions"];
            }
        }
        return null;
    }

    /**
    * Sets the executionConditions
    *
    * @param WorkflowExecutionConditions $val The executionConditions
    *
    * @return WorkflowTemplate
    */
    public function setExecutionConditions($val)
    {
        $this->_propDict["executionConditions"] = $val;
        return $this;
    }


     /**
     * Gets the tasks
     *
     * @return array|null The tasks
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
    * @param Task[] $val The tasks
    *
    * @return WorkflowTemplate
    */
    public function setTasks($val)
    {
        $this->_propDict["tasks"] = $val;
        return $this;
    }

}
