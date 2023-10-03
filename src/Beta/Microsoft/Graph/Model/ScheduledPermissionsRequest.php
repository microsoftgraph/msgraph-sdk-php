<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScheduledPermissionsRequest File
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
* ScheduledPermissionsRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ScheduledPermissionsRequest extends Entity
{
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ScheduledPermissionsRequest
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the justification
    *
    * @return string|null The justification
    */
    public function getJustification()
    {
        if (array_key_exists("justification", $this->_propDict)) {
            return $this->_propDict["justification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the justification
    *
    * @param string $val The justification
    *
    * @return ScheduledPermissionsRequest
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }

    /**
    * Gets the notes
    *
    * @return string|null The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notes
    *
    * @param string $val The notes
    *
    * @return ScheduledPermissionsRequest
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }

    /**
    * Gets the requestedPermissions
    *
    * @return PermissionsDefinition|null The requestedPermissions
    */
    public function getRequestedPermissions()
    {
        if (array_key_exists("requestedPermissions", $this->_propDict)) {
            if (is_a($this->_propDict["requestedPermissions"], "\Beta\Microsoft\Graph\Model\PermissionsDefinition") || is_null($this->_propDict["requestedPermissions"])) {
                return $this->_propDict["requestedPermissions"];
            } else {
                $this->_propDict["requestedPermissions"] = new PermissionsDefinition($this->_propDict["requestedPermissions"]);
                return $this->_propDict["requestedPermissions"];
            }
        }
        return null;
    }

    /**
    * Sets the requestedPermissions
    *
    * @param PermissionsDefinition $val The requestedPermissions
    *
    * @return ScheduledPermissionsRequest
    */
    public function setRequestedPermissions($val)
    {
        $this->_propDict["requestedPermissions"] = $val;
        return $this;
    }

    /**
    * Gets the scheduleInfo
    *
    * @return RequestSchedule|null The scheduleInfo
    */
    public function getScheduleInfo()
    {
        if (array_key_exists("scheduleInfo", $this->_propDict)) {
            if (is_a($this->_propDict["scheduleInfo"], "\Beta\Microsoft\Graph\Model\RequestSchedule") || is_null($this->_propDict["scheduleInfo"])) {
                return $this->_propDict["scheduleInfo"];
            } else {
                $this->_propDict["scheduleInfo"] = new RequestSchedule($this->_propDict["scheduleInfo"]);
                return $this->_propDict["scheduleInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduleInfo
    *
    * @param RequestSchedule $val The scheduleInfo
    *
    * @return ScheduledPermissionsRequest
    */
    public function setScheduleInfo($val)
    {
        $this->_propDict["scheduleInfo"] = $val;
        return $this;
    }

    /**
    * Gets the statusDetail
    *
    * @return StatusDetail|null The statusDetail
    */
    public function getStatusDetail()
    {
        if (array_key_exists("statusDetail", $this->_propDict)) {
            if (is_a($this->_propDict["statusDetail"], "\Beta\Microsoft\Graph\Model\StatusDetail") || is_null($this->_propDict["statusDetail"])) {
                return $this->_propDict["statusDetail"];
            } else {
                $this->_propDict["statusDetail"] = new StatusDetail($this->_propDict["statusDetail"]);
                return $this->_propDict["statusDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the statusDetail
    *
    * @param StatusDetail $val The statusDetail
    *
    * @return ScheduledPermissionsRequest
    */
    public function setStatusDetail($val)
    {
        $this->_propDict["statusDetail"] = $val;
        return $this;
    }

    /**
    * Gets the ticketInfo
    *
    * @return TicketInfo|null The ticketInfo
    */
    public function getTicketInfo()
    {
        if (array_key_exists("ticketInfo", $this->_propDict)) {
            if (is_a($this->_propDict["ticketInfo"], "\Beta\Microsoft\Graph\Model\TicketInfo") || is_null($this->_propDict["ticketInfo"])) {
                return $this->_propDict["ticketInfo"];
            } else {
                $this->_propDict["ticketInfo"] = new TicketInfo($this->_propDict["ticketInfo"]);
                return $this->_propDict["ticketInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the ticketInfo
    *
    * @param TicketInfo $val The ticketInfo
    *
    * @return ScheduledPermissionsRequest
    */
    public function setTicketInfo($val)
    {
        $this->_propDict["ticketInfo"] = $val;
        return $this;
    }

}
