<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenShift File
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
* OpenShift class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OpenShift extends ChangeTrackedEntity
{
    /**
    * Gets the sharedOpenShift
    *
    * @return OpenShiftItem The sharedOpenShift
    */
    public function getSharedOpenShift()
    {
        if (array_key_exists("sharedOpenShift", $this->_propDict)) {
            if (is_a($this->_propDict["sharedOpenShift"], "Microsoft\Graph\Beta\Model\OpenShiftItem")) {
                return $this->_propDict["sharedOpenShift"];
            } else {
                $this->_propDict["sharedOpenShift"] = new OpenShiftItem($this->_propDict["sharedOpenShift"]);
                return $this->_propDict["sharedOpenShift"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharedOpenShift
    *
    * @param OpenShiftItem $val The sharedOpenShift
    *
    * @return OpenShift
    */
    public function setSharedOpenShift($val)
    {
        $this->_propDict["sharedOpenShift"] = $val;
        return $this;
    }
    
    /**
    * Gets the draftOpenShift
    *
    * @return OpenShiftItem The draftOpenShift
    */
    public function getDraftOpenShift()
    {
        if (array_key_exists("draftOpenShift", $this->_propDict)) {
            if (is_a($this->_propDict["draftOpenShift"], "Microsoft\Graph\Beta\Model\OpenShiftItem")) {
                return $this->_propDict["draftOpenShift"];
            } else {
                $this->_propDict["draftOpenShift"] = new OpenShiftItem($this->_propDict["draftOpenShift"]);
                return $this->_propDict["draftOpenShift"];
            }
        }
        return null;
    }
    
    /**
    * Sets the draftOpenShift
    *
    * @param OpenShiftItem $val The draftOpenShift
    *
    * @return OpenShift
    */
    public function setDraftOpenShift($val)
    {
        $this->_propDict["draftOpenShift"] = $val;
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
    * @return OpenShift
    */
    public function setSchedulingGroupId($val)
    {
        $this->_propDict["schedulingGroupId"] = $val;
        return $this;
    }
    
}