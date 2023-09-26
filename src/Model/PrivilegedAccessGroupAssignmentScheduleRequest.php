<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccessGroupAssignmentScheduleRequest File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* PrivilegedAccessGroupAssignmentScheduleRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccessGroupAssignmentScheduleRequest extends PrivilegedAccessScheduleRequest
{
    /**
    * Gets the accessId
    *
    * @return PrivilegedAccessGroupRelationships|null The accessId
    */
    public function getAccessId()
    {
        if (array_key_exists("accessId", $this->_propDict)) {
            if (is_a($this->_propDict["accessId"], "\Microsoft\Graph\Model\PrivilegedAccessGroupRelationships") || is_null($this->_propDict["accessId"])) {
                return $this->_propDict["accessId"];
            } else {
                $this->_propDict["accessId"] = new PrivilegedAccessGroupRelationships($this->_propDict["accessId"]);
                return $this->_propDict["accessId"];
            }
        }
        return null;
    }

    /**
    * Sets the accessId
    *
    * @param PrivilegedAccessGroupRelationships $val The accessId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setAccessId($val)
    {
        $this->_propDict["accessId"] = $val;
        return $this;
    }

    /**
    * Gets the groupId
    *
    * @return string|null The groupId
    */
    public function getGroupId()
    {
        if (array_key_exists("groupId", $this->_propDict)) {
            return $this->_propDict["groupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupId
    *
    * @param string $val The groupId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setGroupId($val)
    {
        $this->_propDict["groupId"] = $val;
        return $this;
    }

    /**
    * Gets the principalId
    *
    * @return string|null The principalId
    */
    public function getPrincipalId()
    {
        if (array_key_exists("principalId", $this->_propDict)) {
            return $this->_propDict["principalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the principalId
    *
    * @param string $val The principalId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }

    /**
    * Gets the targetScheduleId
    *
    * @return string|null The targetScheduleId
    */
    public function getTargetScheduleId()
    {
        if (array_key_exists("targetScheduleId", $this->_propDict)) {
            return $this->_propDict["targetScheduleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetScheduleId
    *
    * @param string $val The targetScheduleId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setTargetScheduleId($val)
    {
        $this->_propDict["targetScheduleId"] = $val;
        return $this;
    }

    /**
    * Gets the activatedUsing
    *
    * @return PrivilegedAccessGroupEligibilitySchedule|null The activatedUsing
    */
    public function getActivatedUsing()
    {
        if (array_key_exists("activatedUsing", $this->_propDict)) {
            if (is_a($this->_propDict["activatedUsing"], "\Microsoft\Graph\Model\PrivilegedAccessGroupEligibilitySchedule") || is_null($this->_propDict["activatedUsing"])) {
                return $this->_propDict["activatedUsing"];
            } else {
                $this->_propDict["activatedUsing"] = new PrivilegedAccessGroupEligibilitySchedule($this->_propDict["activatedUsing"]);
                return $this->_propDict["activatedUsing"];
            }
        }
        return null;
    }

    /**
    * Sets the activatedUsing
    *
    * @param PrivilegedAccessGroupEligibilitySchedule $val The activatedUsing
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setActivatedUsing($val)
    {
        $this->_propDict["activatedUsing"] = $val;
        return $this;
    }

    /**
    * Gets the group
    *
    * @return Group|null The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            if (is_a($this->_propDict["group"], "\Microsoft\Graph\Model\Group") || is_null($this->_propDict["group"])) {
                return $this->_propDict["group"];
            } else {
                $this->_propDict["group"] = new Group($this->_propDict["group"]);
                return $this->_propDict["group"];
            }
        }
        return null;
    }

    /**
    * Sets the group
    *
    * @param Group $val The group
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }

    /**
    * Gets the principal
    *
    * @return DirectoryObject|null The principal
    */
    public function getPrincipal()
    {
        if (array_key_exists("principal", $this->_propDict)) {
            if (is_a($this->_propDict["principal"], "\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["principal"])) {
                return $this->_propDict["principal"];
            } else {
                $this->_propDict["principal"] = new DirectoryObject($this->_propDict["principal"]);
                return $this->_propDict["principal"];
            }
        }
        return null;
    }

    /**
    * Sets the principal
    *
    * @param DirectoryObject $val The principal
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setPrincipal($val)
    {
        $this->_propDict["principal"] = $val;
        return $this;
    }

    /**
    * Gets the targetSchedule
    *
    * @return PrivilegedAccessGroupEligibilitySchedule|null The targetSchedule
    */
    public function getTargetSchedule()
    {
        if (array_key_exists("targetSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["targetSchedule"], "\Microsoft\Graph\Model\PrivilegedAccessGroupEligibilitySchedule") || is_null($this->_propDict["targetSchedule"])) {
                return $this->_propDict["targetSchedule"];
            } else {
                $this->_propDict["targetSchedule"] = new PrivilegedAccessGroupEligibilitySchedule($this->_propDict["targetSchedule"]);
                return $this->_propDict["targetSchedule"];
            }
        }
        return null;
    }

    /**
    * Sets the targetSchedule
    *
    * @param PrivilegedAccessGroupEligibilitySchedule $val The targetSchedule
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setTargetSchedule($val)
    {
        $this->_propDict["targetSchedule"] = $val;
        return $this;
    }

}
