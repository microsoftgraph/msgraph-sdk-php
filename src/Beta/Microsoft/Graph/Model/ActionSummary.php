<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActionSummary File
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
* ActionSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActionSummary extends Entity
{
    /**
    * Gets the assigned
    *
    * @return int|null The assigned
    */
    public function getAssigned()
    {
        if (array_key_exists("assigned", $this->_propDict)) {
            return $this->_propDict["assigned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assigned
    *
    * @param int $val The value of the assigned
    *
    * @return ActionSummary
    */
    public function setAssigned($val)
    {
        $this->_propDict["assigned"] = $val;
        return $this;
    }
    /**
    * Gets the available
    *
    * @return int|null The available
    */
    public function getAvailable()
    {
        if (array_key_exists("available", $this->_propDict)) {
            return $this->_propDict["available"];
        } else {
            return null;
        }
    }

    /**
    * Sets the available
    *
    * @param int $val The value of the available
    *
    * @return ActionSummary
    */
    public function setAvailable($val)
    {
        $this->_propDict["available"] = $val;
        return $this;
    }
    /**
    * Gets the exercised
    *
    * @return int|null The exercised
    */
    public function getExercised()
    {
        if (array_key_exists("exercised", $this->_propDict)) {
            return $this->_propDict["exercised"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exercised
    *
    * @param int $val The value of the exercised
    *
    * @return ActionSummary
    */
    public function setExercised($val)
    {
        $this->_propDict["exercised"] = $val;
        return $this;
    }
}
