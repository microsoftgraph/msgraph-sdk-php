<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppDependency File
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
* MobileAppDependency class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppDependency extends MobileAppRelationship
{
    /**
    * Gets the dependencyType
    * The type of dependency relationship between the parent and child apps.
    *
    * @return MobileAppDependencyType The dependencyType
    */
    public function getDependencyType()
    {
        if (array_key_exists("dependencyType", $this->_propDict)) {
            if (is_a($this->_propDict["dependencyType"], "Beta\Microsoft\Graph\Model\MobileAppDependencyType")) {
                return $this->_propDict["dependencyType"];
            } else {
                $this->_propDict["dependencyType"] = new MobileAppDependencyType($this->_propDict["dependencyType"]);
                return $this->_propDict["dependencyType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dependencyType
    * The type of dependency relationship between the parent and child apps.
    *
    * @param MobileAppDependencyType $val The dependencyType
    *
    * @return MobileAppDependency
    */
    public function setDependencyType($val)
    {
        $this->_propDict["dependencyType"] = $val;
        return $this;
    }
    
    /**
    * Gets the dependentAppCount
    * The total number of dependencies the child app has.
    *
    * @return int The dependentAppCount
    */
    public function getDependentAppCount()
    {
        if (array_key_exists("dependentAppCount", $this->_propDict)) {
            return $this->_propDict["dependentAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dependentAppCount
    * The total number of dependencies the child app has.
    *
    * @param int $val The dependentAppCount
    *
    * @return MobileAppDependency
    */
    public function setDependentAppCount($val)
    {
        $this->_propDict["dependentAppCount"] = intval($val);
        return $this;
    }
    
}