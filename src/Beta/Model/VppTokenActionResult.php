<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VppTokenActionResult File
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
* VppTokenActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class VppTokenActionResult extends Entity
{
    /**
    * Gets the actionName
    *
    * @return string The actionName
    */
    public function getActionName()
    {
        if (array_key_exists("actionName", $this->_propDict)) {
            return $this->_propDict["actionName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionName
    *
    * @param string $val The value of the actionName
    *
    * @return VppTokenActionResult
    */
    public function setActionName($val)
    {
        $this->_propDict["actionName"] = $val;
        return $this;
    }

    /**
    * Gets the actionState
    *
    * @return ActionState The actionState
    */
    public function getActionState()
    {
        if (array_key_exists("actionState", $this->_propDict)) {
            if (is_a($this->_propDict["actionState"], "Microsoft\Graph\Beta\Model\ActionState")) {
                return $this->_propDict["actionState"];
            } else {
                $this->_propDict["actionState"] = new ActionState($this->_propDict["actionState"]);
                return $this->_propDict["actionState"];
            }
        }
        return null;
    }

    /**
    * Sets the actionState
    *
    * @param ActionState $val The value to assign to the actionState
    *
    * @return VppTokenActionResult The VppTokenActionResult
    */
    public function setActionState($val)
    {
        $this->_propDict["actionState"] = $val;
         return $this;
    }

    /**
    * Gets the startDateTime
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return VppTokenActionResult The VppTokenActionResult
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    *
    * @return \DateTime The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    *
    * @param \DateTime $val The value to assign to the lastUpdatedDateTime
    *
    * @return VppTokenActionResult The VppTokenActionResult
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
         return $this;
    }
}
