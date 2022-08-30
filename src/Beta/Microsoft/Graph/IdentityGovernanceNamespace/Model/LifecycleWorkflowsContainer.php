<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LifecycleWorkflowsContainer File
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
* LifecycleWorkflowsContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LifecycleWorkflowsContainer extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the customTaskExtensions
     *
     * @return array|null The customTaskExtensions
     */
    public function getCustomTaskExtensions()
    {
        if (array_key_exists("customTaskExtensions", $this->_propDict)) {
           return $this->_propDict["customTaskExtensions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customTaskExtensions
    *
    * @param CustomTaskExtension[] $val The customTaskExtensions
    *
    * @return LifecycleWorkflowsContainer
    */
    public function setCustomTaskExtensions($val)
    {
        $this->_propDict["customTaskExtensions"] = $val;
        return $this;
    }

    /**
    * Gets the deletedItems
    *
    * @return \Beta\Microsoft\Graph\Model\DeletedItemContainer|null The deletedItems
    */
    public function getDeletedItems()
    {
        if (array_key_exists("deletedItems", $this->_propDict)) {
            if (is_a($this->_propDict["deletedItems"], "\Beta\Microsoft\Graph\Model\DeletedItemContainer") || is_null($this->_propDict["deletedItems"])) {
                return $this->_propDict["deletedItems"];
            } else {
                $this->_propDict["deletedItems"] = new \Beta\Microsoft\Graph\Model\DeletedItemContainer($this->_propDict["deletedItems"]);
                return $this->_propDict["deletedItems"];
            }
        }
        return null;
    }

    /**
    * Sets the deletedItems
    *
    * @param \Beta\Microsoft\Graph\Model\DeletedItemContainer $val The deletedItems
    *
    * @return LifecycleWorkflowsContainer
    */
    public function setDeletedItems($val)
    {
        $this->_propDict["deletedItems"] = $val;
        return $this;
    }

    /**
    * Gets the settings
    *
    * @return LifecycleManagementSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\IdentityGovernance\Model\LifecycleManagementSettings") || is_null($this->_propDict["settings"])) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new LifecycleManagementSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }

    /**
    * Sets the settings
    *
    * @param LifecycleManagementSettings $val The settings
    *
    * @return LifecycleWorkflowsContainer
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }


     /**
     * Gets the taskDefinitions
     *
     * @return array|null The taskDefinitions
     */
    public function getTaskDefinitions()
    {
        if (array_key_exists("taskDefinitions", $this->_propDict)) {
           return $this->_propDict["taskDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the taskDefinitions
    *
    * @param TaskDefinition[] $val The taskDefinitions
    *
    * @return LifecycleWorkflowsContainer
    */
    public function setTaskDefinitions($val)
    {
        $this->_propDict["taskDefinitions"] = $val;
        return $this;
    }


     /**
     * Gets the workflows
     *
     * @return array|null The workflows
     */
    public function getWorkflows()
    {
        if (array_key_exists("workflows", $this->_propDict)) {
           return $this->_propDict["workflows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workflows
    *
    * @param Workflow[] $val The workflows
    *
    * @return LifecycleWorkflowsContainer
    */
    public function setWorkflows($val)
    {
        $this->_propDict["workflows"] = $val;
        return $this;
    }


     /**
     * Gets the workflowTemplates
     *
     * @return array|null The workflowTemplates
     */
    public function getWorkflowTemplates()
    {
        if (array_key_exists("workflowTemplates", $this->_propDict)) {
           return $this->_propDict["workflowTemplates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workflowTemplates
    *
    * @param WorkflowTemplate[] $val The workflowTemplates
    *
    * @return LifecycleWorkflowsContainer
    */
    public function setWorkflowTemplates($val)
    {
        $this->_propDict["workflowTemplates"] = $val;
        return $this;
    }

}
