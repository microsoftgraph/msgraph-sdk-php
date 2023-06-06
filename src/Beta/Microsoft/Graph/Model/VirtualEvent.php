<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEvent File
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
* VirtualEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEvent extends Entity
{
    /**
    * Gets the createdBy
    * Identity information of who created the virtual event. Inherited from virtualEvent.
    *
    * @return CommunicationsIdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\CommunicationsIdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new CommunicationsIdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Identity information of who created the virtual event. Inherited from virtualEvent.
    *
    * @param CommunicationsIdentitySet $val The createdBy
    *
    * @return VirtualEvent
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the virtual event.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Description of the virtual event.
    *
    * @param string $val The description
    *
    * @return VirtualEvent
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name of the virtual event
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display name of the virtual event
    *
    * @param string $val The displayName
    *
    * @return VirtualEvent
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    * End time of the virtual event.
    *
    * @return DateTimeTimeZone|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new DateTimeTimeZone($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * End time of the virtual event.
    *
    * @param DateTimeTimeZone $val The endDateTime
    *
    * @return VirtualEvent
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * Start time of the virtual event.
    *
    * @return DateTimeTimeZone|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new DateTimeTimeZone($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * Start time of the virtual event.
    *
    * @param DateTimeTimeZone $val The startDateTime
    *
    * @return VirtualEvent
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Status of the virtual event. The possible values are: draft, published, canceled, unknownFutureValue.
    *
    * @return VirtualEventStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\VirtualEventStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new VirtualEventStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Status of the virtual event. The possible values are: draft, published, canceled, unknownFutureValue.
    *
    * @param VirtualEventStatus $val The status
    *
    * @return VirtualEvent
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the presenters
    * Presenters' information of the virtual event.
     *
     * @return array|null The presenters
     */
    public function getPresenters()
    {
        if (array_key_exists("presenters", $this->_propDict)) {
           return $this->_propDict["presenters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the presenters
    * Presenters' information of the virtual event.
    *
    * @param VirtualEventPresenter[] $val The presenters
    *
    * @return VirtualEvent
    */
    public function setPresenters($val)
    {
        $this->_propDict["presenters"] = $val;
        return $this;
    }


     /**
     * Gets the sessions
    * Sessions of the virtual event.
     *
     * @return array|null The sessions
     */
    public function getSessions()
    {
        if (array_key_exists("sessions", $this->_propDict)) {
           return $this->_propDict["sessions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sessions
    * Sessions of the virtual event.
    *
    * @param VirtualEventSession[] $val The sessions
    *
    * @return VirtualEvent
    */
    public function setSessions($val)
    {
        $this->_propDict["sessions"] = $val;
        return $this;
    }

}
