<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutlookUser File
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
* OutlookUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class OutlookUser extends Entity
{

     /** 
     * Gets the masterCategories
     *
     * @return array The masterCategories
     */
    public function getMasterCategories()
    {
        if (array_key_exists("masterCategories", $this->_propDict)) {
           return $this->_propDict["masterCategories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the masterCategories
    *
    * @param OutlookCategory $val The masterCategories
    *
    * @return OutlookUser
    */
    public function setMasterCategories($val)
    {
		$this->_propDict["masterCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taskGroups
     *
     * @return array The taskGroups
     */
    public function getTaskGroups()
    {
        if (array_key_exists("taskGroups", $this->_propDict)) {
           return $this->_propDict["taskGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the taskGroups
    *
    * @param OutlookTaskGroup $val The taskGroups
    *
    * @return OutlookUser
    */
    public function setTaskGroups($val)
    {
		$this->_propDict["taskGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taskFolders
     *
     * @return array The taskFolders
     */
    public function getTaskFolders()
    {
        if (array_key_exists("taskFolders", $this->_propDict)) {
           return $this->_propDict["taskFolders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the taskFolders
    *
    * @param OutlookTaskFolder $val The taskFolders
    *
    * @return OutlookUser
    */
    public function setTaskFolders($val)
    {
		$this->_propDict["taskFolders"] = $val;
        return $this;
    }
    

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
    * @param OutlookTask $val The tasks
    *
    * @return OutlookUser
    */
    public function setTasks($val)
    {
		$this->_propDict["tasks"] = $val;
        return $this;
    }
    
}