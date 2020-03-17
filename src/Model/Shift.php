<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Shift File
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
* Shift class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Shift extends ChangeTrackedEntity
{
    /**
    * Gets the sharedShift
    *
    * @return ShiftItem The sharedShift
    */
    public function getSharedShift()
    {
        if (array_key_exists("sharedShift", $this->_propDict)) {
            if (is_a($this->_propDict["sharedShift"], "Microsoft\Graph\Model\ShiftItem")) {
                return $this->_propDict["sharedShift"];
            } else {
                $this->_propDict["sharedShift"] = new ShiftItem($this->_propDict["sharedShift"]);
                return $this->_propDict["sharedShift"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharedShift
    *
    * @param ShiftItem $val The sharedShift
    *
    * @return Shift
    */
    public function setSharedShift($val)
    {
        $this->_propDict["sharedShift"] = $val;
        return $this;
    }
    
    /**
    * Gets the draftShift
    *
    * @return ShiftItem The draftShift
    */
    public function getDraftShift()
    {
        if (array_key_exists("draftShift", $this->_propDict)) {
            if (is_a($this->_propDict["draftShift"], "Microsoft\Graph\Model\ShiftItem")) {
                return $this->_propDict["draftShift"];
            } else {
                $this->_propDict["draftShift"] = new ShiftItem($this->_propDict["draftShift"]);
                return $this->_propDict["draftShift"];
            }
        }
        return null;
    }
    
    /**
    * Sets the draftShift
    *
    * @param ShiftItem $val The draftShift
    *
    * @return Shift
    */
    public function setDraftShift($val)
    {
        $this->_propDict["draftShift"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return Shift
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the schedulingGroupId
    *
    * @return string The schedulingGroupId
    */
    public function getSchedulingGroupId()
    {
        if (array_key_exists("schedulingGroupId", $this->_propDict)) {
            return $this->_propDict["schedulingGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the schedulingGroupId
    *
    * @param string $val The schedulingGroupId
    *
    * @return Shift
    */
    public function setSchedulingGroupId($val)
    {
        $this->_propDict["schedulingGroupId"] = $val;
        return $this;
    }
    
}