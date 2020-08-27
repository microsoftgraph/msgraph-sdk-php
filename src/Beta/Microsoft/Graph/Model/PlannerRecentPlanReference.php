<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerRecentPlanReference File
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
* PlannerRecentPlanReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerRecentPlanReference extends Entity
{

    /**
    * Gets the lastAccessedDateTime
    *
    * @return \DateTime The lastAccessedDateTime
    */
    public function getLastAccessedDateTime()
    {
        if (array_key_exists("lastAccessedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastAccessedDateTime"], "\DateTime")) {
                return $this->_propDict["lastAccessedDateTime"];
            } else {
                $this->_propDict["lastAccessedDateTime"] = new \DateTime($this->_propDict["lastAccessedDateTime"]);
                return $this->_propDict["lastAccessedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastAccessedDateTime
    *
    * @param \DateTime $val The value to assign to the lastAccessedDateTime
    *
    * @return PlannerRecentPlanReference The PlannerRecentPlanReference
    */
    public function setLastAccessedDateTime($val)
    {
        $this->_propDict["lastAccessedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the planTitle
    *
    * @return string The planTitle
    */
    public function getPlanTitle()
    {
        if (array_key_exists("planTitle", $this->_propDict)) {
            return $this->_propDict["planTitle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the planTitle
    *
    * @param string $val The value of the planTitle
    *
    * @return PlannerRecentPlanReference
    */
    public function setPlanTitle($val)
    {
        $this->_propDict["planTitle"] = $val;
        return $this;
    }
}
