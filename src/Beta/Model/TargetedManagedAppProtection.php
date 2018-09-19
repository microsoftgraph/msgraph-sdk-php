<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TargetedManagedAppProtection File
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
* TargetedManagedAppProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TargetedManagedAppProtection extends ManagedAppProtection
{
    /**
    * Gets the isAssigned
    *
    * @return bool The isAssigned
    */
    public function getIsAssigned()
    {
        if (array_key_exists("isAssigned", $this->_propDict)) {
            return $this->_propDict["isAssigned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAssigned
    *
    * @param bool $val The isAssigned
    *
    * @return TargetedManagedAppProtection
    */
    public function setIsAssigned($val)
    {
        $this->_propDict["isAssigned"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the targetedAppManagementLevels
    *
    * @return AppManagementLevel The targetedAppManagementLevels
    */
    public function getTargetedAppManagementLevels()
    {
        if (array_key_exists("targetedAppManagementLevels", $this->_propDict)) {
            if (is_a($this->_propDict["targetedAppManagementLevels"], "Microsoft\Graph\Beta\Model\AppManagementLevel")) {
                return $this->_propDict["targetedAppManagementLevels"];
            } else {
                $this->_propDict["targetedAppManagementLevels"] = new AppManagementLevel($this->_propDict["targetedAppManagementLevels"]);
                return $this->_propDict["targetedAppManagementLevels"];
            }
        }
        return null;
    }
    
    /**
    * Sets the targetedAppManagementLevels
    *
    * @param AppManagementLevel $val The targetedAppManagementLevels
    *
    * @return TargetedManagedAppProtection
    */
    public function setTargetedAppManagementLevels($val)
    {
        $this->_propDict["targetedAppManagementLevels"] = $val;
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
    * @param TargetedManagedAppPolicyAssignment $val The assignments
    *
    * @return TargetedManagedAppProtection
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}