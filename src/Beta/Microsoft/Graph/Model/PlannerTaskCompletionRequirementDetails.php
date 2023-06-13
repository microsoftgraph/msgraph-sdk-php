<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskCompletionRequirementDetails File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* PlannerTaskCompletionRequirementDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskCompletionRequirementDetails extends Entity
{

    /**
    * Gets the checklistRequirement
    * Information about the requirements for completing the checklist.
    *
    * @return PlannerChecklistRequirement|null The checklistRequirement
    */
    public function getChecklistRequirement()
    {
        if (array_key_exists("checklistRequirement", $this->_propDict)) {
            if (is_a($this->_propDict["checklistRequirement"], "\Beta\Microsoft\Graph\Model\PlannerChecklistRequirement") || is_null($this->_propDict["checklistRequirement"])) {
                return $this->_propDict["checklistRequirement"];
            } else {
                $this->_propDict["checklistRequirement"] = new PlannerChecklistRequirement($this->_propDict["checklistRequirement"]);
                return $this->_propDict["checklistRequirement"];
            }
        }
        return null;
    }

    /**
    * Sets the checklistRequirement
    * Information about the requirements for completing the checklist.
    *
    * @param PlannerChecklistRequirement $val The value to assign to the checklistRequirement
    *
    * @return PlannerTaskCompletionRequirementDetails The PlannerTaskCompletionRequirementDetails
    */
    public function setChecklistRequirement($val)
    {
        $this->_propDict["checklistRequirement"] = $val;
         return $this;
    }
}
