<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerAssignedToTaskBoardTaskFormat File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* PlannerAssignedToTaskBoardTaskFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PlannerAssignedToTaskBoardTaskFormat extends Entity
{
    /**
    * Gets the unassignedOrderHint
    *
    * @return string The unassignedOrderHint
    */
    public function getUnassignedOrderHint()
    {
        if (array_key_exists("unassignedOrderHint", $this->_propDict)) {
            return $this->_propDict["unassignedOrderHint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unassignedOrderHint
    *
    * @param string $val The unassignedOrderHint
    *
    * @return PlannerAssignedToTaskBoardTaskFormat
    */
    public function setUnassignedOrderHint($val)
    {
        $this->_propDict["unassignedOrderHint"] = $val;
        return $this;
    }
    
    /**
    * Gets the orderHintsByAssignee
    *
    * @return PlannerOrderHintsByAssignee The orderHintsByAssignee
    */
    public function getOrderHintsByAssignee()
    {
        if (array_key_exists("orderHintsByAssignee", $this->_propDict)) {
            if (is_a($this->_propDict["orderHintsByAssignee"], "Microsoft\Graph\Model\PlannerOrderHintsByAssignee")) {
                return $this->_propDict["orderHintsByAssignee"];
            } else {
                $this->_propDict["orderHintsByAssignee"] = new PlannerOrderHintsByAssignee($this->_propDict["orderHintsByAssignee"]);
                return $this->_propDict["orderHintsByAssignee"];
            }
        }
        return null;
    }
    
    /**
    * Sets the orderHintsByAssignee
    *
    * @param PlannerOrderHintsByAssignee $val The orderHintsByAssignee
    *
    * @return PlannerAssignedToTaskBoardTaskFormat
    */
    public function setOrderHintsByAssignee($val)
    {
        $this->_propDict["orderHintsByAssignee"] = $val;
        return $this;
    }
    
}