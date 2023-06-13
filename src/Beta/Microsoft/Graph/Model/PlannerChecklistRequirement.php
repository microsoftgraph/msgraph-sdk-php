<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerChecklistRequirement File
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
* PlannerChecklistRequirement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerChecklistRequirement extends Entity
{
    /**
    * Gets the requiredChecklistItemIds
    * A collection of required plannerChecklistItems identifiers to complete the plannerTask.
    *
    * @return string|null The requiredChecklistItemIds
    */
    public function getRequiredChecklistItemIds()
    {
        if (array_key_exists("requiredChecklistItemIds", $this->_propDict)) {
            return $this->_propDict["requiredChecklistItemIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requiredChecklistItemIds
    * A collection of required plannerChecklistItems identifiers to complete the plannerTask.
    *
    * @param string $val The value of the requiredChecklistItemIds
    *
    * @return PlannerChecklistRequirement
    */
    public function setRequiredChecklistItemIds($val)
    {
        $this->_propDict["requiredChecklistItemIds"] = $val;
        return $this;
    }
}
