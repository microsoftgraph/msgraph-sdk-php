<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallRecordingEventMessageDetail File
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
* CallRecordingEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallRecordingEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.callRecordingEventMessageDetail");
    }

    /**
    * Gets the callId
    *
    * @return string|null The callId
    */
    public function getCallId()
    {
        if (array_key_exists("callId", $this->_propDict)) {
            return $this->_propDict["callId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callId
    *
    * @param string $val The value of the callId
    *
    * @return CallRecordingEventMessageDetail
    */
    public function setCallId($val)
    {
        $this->_propDict["callId"] = $val;
        return $this;
    }
    /**
    * Gets the callRecordingDisplayName
    *
    * @return string|null The callRecordingDisplayName
    */
    public function getCallRecordingDisplayName()
    {
        if (array_key_exists("callRecordingDisplayName", $this->_propDict)) {
            return $this->_propDict["callRecordingDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callRecordingDisplayName
    *
    * @param string $val The value of the callRecordingDisplayName
    *
    * @return CallRecordingEventMessageDetail
    */
    public function setCallRecordingDisplayName($val)
    {
        $this->_propDict["callRecordingDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the callRecordingDuration
    *
    * @return Duration|null The callRecordingDuration
    */
    public function getCallRecordingDuration()
    {
        if (array_key_exists("callRecordingDuration", $this->_propDict)) {
            if (is_a($this->_propDict["callRecordingDuration"], "\Beta\Microsoft\Graph\Model\Duration") || is_null($this->_propDict["callRecordingDuration"])) {
                return $this->_propDict["callRecordingDuration"];
            } else {
                $this->_propDict["callRecordingDuration"] = new Duration($this->_propDict["callRecordingDuration"]);
                return $this->_propDict["callRecordingDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the callRecordingDuration
    *
    * @param Duration $val The value to assign to the callRecordingDuration
    *
    * @return CallRecordingEventMessageDetail The CallRecordingEventMessageDetail
    */
    public function setCallRecordingDuration($val)
    {
        $this->_propDict["callRecordingDuration"] = $val;
         return $this;
    }

    /**
    * Gets the callRecordingStatus
    *
    * @return CallRecordingStatus|null The callRecordingStatus
    */
    public function getCallRecordingStatus()
    {
        if (array_key_exists("callRecordingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["callRecordingStatus"], "\Beta\Microsoft\Graph\Model\CallRecordingStatus") || is_null($this->_propDict["callRecordingStatus"])) {
                return $this->_propDict["callRecordingStatus"];
            } else {
                $this->_propDict["callRecordingStatus"] = new CallRecordingStatus($this->_propDict["callRecordingStatus"]);
                return $this->_propDict["callRecordingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the callRecordingStatus
    *
    * @param CallRecordingStatus $val The value to assign to the callRecordingStatus
    *
    * @return CallRecordingEventMessageDetail The CallRecordingEventMessageDetail
    */
    public function setCallRecordingStatus($val)
    {
        $this->_propDict["callRecordingStatus"] = $val;
         return $this;
    }
    /**
    * Gets the callRecordingUrl
    *
    * @return string|null The callRecordingUrl
    */
    public function getCallRecordingUrl()
    {
        if (array_key_exists("callRecordingUrl", $this->_propDict)) {
            return $this->_propDict["callRecordingUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callRecordingUrl
    *
    * @param string $val The value of the callRecordingUrl
    *
    * @return CallRecordingEventMessageDetail
    */
    public function setCallRecordingUrl($val)
    {
        $this->_propDict["callRecordingUrl"] = $val;
        return $this;
    }

    /**
    * Gets the initiator
    *
    * @return IdentitySet|null The initiator
    */
    public function getInitiator()
    {
        if (array_key_exists("initiator", $this->_propDict)) {
            if (is_a($this->_propDict["initiator"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["initiator"])) {
                return $this->_propDict["initiator"];
            } else {
                $this->_propDict["initiator"] = new IdentitySet($this->_propDict["initiator"]);
                return $this->_propDict["initiator"];
            }
        }
        return null;
    }

    /**
    * Sets the initiator
    *
    * @param IdentitySet $val The value to assign to the initiator
    *
    * @return CallRecordingEventMessageDetail The CallRecordingEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }

    /**
    * Gets the meetingOrganizer
    *
    * @return IdentitySet|null The meetingOrganizer
    */
    public function getMeetingOrganizer()
    {
        if (array_key_exists("meetingOrganizer", $this->_propDict)) {
            if (is_a($this->_propDict["meetingOrganizer"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["meetingOrganizer"])) {
                return $this->_propDict["meetingOrganizer"];
            } else {
                $this->_propDict["meetingOrganizer"] = new IdentitySet($this->_propDict["meetingOrganizer"]);
                return $this->_propDict["meetingOrganizer"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingOrganizer
    *
    * @param IdentitySet $val The value to assign to the meetingOrganizer
    *
    * @return CallRecordingEventMessageDetail The CallRecordingEventMessageDetail
    */
    public function setMeetingOrganizer($val)
    {
        $this->_propDict["meetingOrganizer"] = $val;
         return $this;
    }
}
