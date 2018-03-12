<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedRole File
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
* PrivilegedRole class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PrivilegedRole extends Entity
{
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return PrivilegedRole
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    *
    * @return PrivilegedRoleSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "Microsoft\Graph\Beta\Model\PrivilegedRoleSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new PrivilegedRoleSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    *
    * @param PrivilegedRoleSettings $val The settings
    *
    * @return PrivilegedRole
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    *
    * @param PrivilegedRoleAssignment $val The assignments
    *
    * @return PrivilegedRole
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the summary
    *
    * @return PrivilegedRoleSummary The summary
    */
    public function getSummary()
    {
        if (array_key_exists("summary", $this->_propDict)) {
            if (is_a($this->_propDict["summary"], "Microsoft\Graph\Beta\Model\PrivilegedRoleSummary")) {
                return $this->_propDict["summary"];
            } else {
                $this->_propDict["summary"] = new PrivilegedRoleSummary($this->_propDict["summary"]);
                return $this->_propDict["summary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the summary
    *
    * @param PrivilegedRoleSummary $val The summary
    *
    * @return PrivilegedRole
    */
    public function setSummary($val)
    {
        $this->_propDict["summary"] = $val;
        return $this;
    }
    
}