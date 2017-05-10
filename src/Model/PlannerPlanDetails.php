<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanDetails File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* PlannerPlanDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PlannerPlanDetails extends Entity
{
    /**
    * Gets the sharedWith
    *
    * @return PlannerUserIds The sharedWith
    */
    public function getSharedWith()
    {
        if (array_key_exists("sharedWith", $this->_propDict)) {
            if (is_a($this->_propDict["sharedWith"], "Microsoft\Graph\Model\PlannerUserIds")) {
                return $this->_propDict["sharedWith"];
            } else {
                $this->_propDict["sharedWith"] = new PlannerUserIds($this->_propDict["sharedWith"]);
                return $this->_propDict["sharedWith"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharedWith
    *
    * @param PlannerUserIds $val The sharedWith
    *
    * @return PlannerPlanDetails
    */
    public function setSharedWith($val)
    {
        $this->_propDict["sharedWith"] = $val;
        return $this;
    }
    
    /**
    * Gets the categoryDescriptions
    *
    * @return PlannerCategoryDescriptions The categoryDescriptions
    */
    public function getCategoryDescriptions()
    {
        if (array_key_exists("categoryDescriptions", $this->_propDict)) {
            if (is_a($this->_propDict["categoryDescriptions"], "Microsoft\Graph\Model\PlannerCategoryDescriptions")) {
                return $this->_propDict["categoryDescriptions"];
            } else {
                $this->_propDict["categoryDescriptions"] = new PlannerCategoryDescriptions($this->_propDict["categoryDescriptions"]);
                return $this->_propDict["categoryDescriptions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the categoryDescriptions
    *
    * @param PlannerCategoryDescriptions $val The categoryDescriptions
    *
    * @return PlannerPlanDetails
    */
    public function setCategoryDescriptions($val)
    {
        $this->_propDict["categoryDescriptions"] = $val;
        return $this;
    }
    
}