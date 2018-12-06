<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Event File
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
* Event class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Event extends OutlookItem
{
    /**
    * Gets the originalStartTimeZone
    * The start time zone that was set when the event was created. A value of tzone://Microsoft/Custom indicates that a legacy custom time zone was set in desktop Outlook.
    *
    * @return string The originalStartTimeZone
    */
    public function getOriginalStartTimeZone()
    {
        if (array_key_exists("originalStartTimeZone", $this->_propDict)) {
            return $this->_propDict["originalStartTimeZone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the originalStartTimeZone
    * The start time zone that was set when the event was created. A value of tzone://Microsoft/Custom indicates that a legacy custom time zone was set in desktop Outlook.
    *
    * @param string $val The originalStartTimeZone
    *
    * @return Event
    */
    public function setOriginalStartTimeZone($val)
    {
        $this->_propDict["originalStartTimeZone"] = $val;
        return $this;
    }
    
    /**
    * Gets the originalEndTimeZone
    * The end time zone that was set when the event was created. A value of tzone://Microsoft/Custom indicates that a legacy custom time zone was set in desktop Outlook.
    *
    * @return string The originalEndTimeZone
    */
    public function getOriginalEndTimeZone()
    {
        if (array_key_exists("originalEndTimeZone", $this->_propDict)) {
            return $this->_propDict["originalEndTimeZone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the originalEndTimeZone
    * The end time zone that was set when the event was created. A value of tzone://Microsoft/Custom indicates that a legacy custom time zone was set in desktop Outlook.
    *
    * @param string $val The originalEndTimeZone
    *
    * @return Event
    */
    public function setOriginalEndTimeZone($val)
    {
        $this->_propDict["originalEndTimeZone"] = $val;
        return $this;
    }
    
    /**
    * Gets the responseStatus
    * Indicates the type of response sent in response to an event message.
    *
    * @return ResponseStatus The responseStatus
    */
    public function getResponseStatus()
    {
        if (array_key_exists("responseStatus", $this->_propDict)) {
            if (is_a($this->_propDict["responseStatus"], "Microsoft\Graph\Model\ResponseStatus")) {
                return $this->_propDict["responseStatus"];
            } else {
                $this->_propDict["responseStatus"] = new ResponseStatus($this->_propDict["responseStatus"]);
                return $this->_propDict["responseStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the responseStatus
    * Indicates the type of response sent in response to an event message.
    *
    * @param ResponseStatus $val The responseStatus
    *
    * @return Event
    */
    public function setResponseStatus($val)
    {
        $this->_propDict["responseStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the iCalUId
    * A unique identifier that is shared by all instances of an event across different calendars. Read-only.
    *
    * @return string The iCalUId
    */
    public function getICalUId()
    {
        if (array_key_exists("iCalUId", $this->_propDict)) {
            return $this->_propDict["iCalUId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCalUId
    * A unique identifier that is shared by all instances of an event across different calendars. Read-only.
    *
    * @param string $val The iCalUId
    *
    * @return Event
    */
    public function setICalUId($val)
    {
        $this->_propDict["iCalUId"] = $val;
        return $this;
    }
    
    /**
    * Gets the reminderMinutesBeforeStart
    * The number of minutes before the event start time that the reminder alert occurs.
    *
    * @return int The reminderMinutesBeforeStart
    */
    public function getReminderMinutesBeforeStart()
    {
        if (array_key_exists("reminderMinutesBeforeStart", $this->_propDict)) {
            return $this->_propDict["reminderMinutesBeforeStart"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reminderMinutesBeforeStart
    * The number of minutes before the event start time that the reminder alert occurs.
    *
    * @param int $val The reminderMinutesBeforeStart
    *
    * @return Event
    */
    public function setReminderMinutesBeforeStart($val)
    {
        $this->_propDict["reminderMinutesBeforeStart"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the isReminderOn
    * Set to true if an alert is set to remind the user of the event.
    *
    * @return bool The isReminderOn
    */
    public function getIsReminderOn()
    {
        if (array_key_exists("isReminderOn", $this->_propDict)) {
            return $this->_propDict["isReminderOn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isReminderOn
    * Set to true if an alert is set to remind the user of the event.
    *
    * @param bool $val The isReminderOn
    *
    * @return Event
    */
    public function setIsReminderOn($val)
    {
        $this->_propDict["isReminderOn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasAttachments
    * Set to true if the event has attachments.
    *
    * @return bool The hasAttachments
    */
    public function getHasAttachments()
    {
        if (array_key_exists("hasAttachments", $this->_propDict)) {
            return $this->_propDict["hasAttachments"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasAttachments
    * Set to true if the event has attachments.
    *
    * @param bool $val The hasAttachments
    *
    * @return Event
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the subject
    * The text of the event's subject line.
    *
    * @return string The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subject
    * The text of the event's subject line.
    *
    * @param string $val The subject
    *
    * @return Event
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    
    /**
    * Gets the body
    * The body of the message associated with the event. It can be in HTML or text format.
    *
    * @return ItemBody The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "Microsoft\Graph\Model\ItemBody")) {
                return $this->_propDict["body"];
            } else {
                $this->_propDict["body"] = new ItemBody($this->_propDict["body"]);
                return $this->_propDict["body"];
            }
        }
        return null;
    }
    
    /**
    * Sets the body
    * The body of the message associated with the event. It can be in HTML or text format.
    *
    * @param ItemBody $val The body
    *
    * @return Event
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }
    
    /**
    * Gets the bodyPreview
    * The preview of the message associated with the event. It is in text format.
    *
    * @return string The bodyPreview
    */
    public function getBodyPreview()
    {
        if (array_key_exists("bodyPreview", $this->_propDict)) {
            return $this->_propDict["bodyPreview"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bodyPreview
    * The preview of the message associated with the event. It is in text format.
    *
    * @param string $val The bodyPreview
    *
    * @return Event
    */
    public function setBodyPreview($val)
    {
        $this->_propDict["bodyPreview"] = $val;
        return $this;
    }
    
    /**
    * Gets the importance
    * The importance of the event. The possible values are: low, normal, high.
    *
    * @return Importance The importance
    */
    public function getImportance()
    {
        if (array_key_exists("importance", $this->_propDict)) {
            if (is_a($this->_propDict["importance"], "Microsoft\Graph\Model\Importance")) {
                return $this->_propDict["importance"];
            } else {
                $this->_propDict["importance"] = new Importance($this->_propDict["importance"]);
                return $this->_propDict["importance"];
            }
        }
        return null;
    }
    
    /**
    * Sets the importance
    * The importance of the event. The possible values are: low, normal, high.
    *
    * @param Importance $val The importance
    *
    * @return Event
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
        return $this;
    }
    
    /**
    * Gets the sensitivity
    * The possible values are: normal, personal, private, confidential.
    *
    * @return Sensitivity The sensitivity
    */
    public function getSensitivity()
    {
        if (array_key_exists("sensitivity", $this->_propDict)) {
            if (is_a($this->_propDict["sensitivity"], "Microsoft\Graph\Model\Sensitivity")) {
                return $this->_propDict["sensitivity"];
            } else {
                $this->_propDict["sensitivity"] = new Sensitivity($this->_propDict["sensitivity"]);
                return $this->_propDict["sensitivity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sensitivity
    * The possible values are: normal, personal, private, confidential.
    *
    * @param Sensitivity $val The sensitivity
    *
    * @return Event
    */
    public function setSensitivity($val)
    {
        $this->_propDict["sensitivity"] = $val;
        return $this;
    }
    
    /**
    * Gets the start
    * The date, time, and time zone that the event starts.
    *
    * @return DateTimeTimeZone The start
    */
    public function getStart()
    {
        if (array_key_exists("start", $this->_propDict)) {
            if (is_a($this->_propDict["start"], "Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["start"];
            } else {
                $this->_propDict["start"] = new DateTimeTimeZone($this->_propDict["start"]);
                return $this->_propDict["start"];
            }
        }
        return null;
    }
    
    /**
    * Sets the start
    * The date, time, and time zone that the event starts.
    *
    * @param DateTimeTimeZone $val The start
    *
    * @return Event
    */
    public function setStart($val)
    {
        $this->_propDict["start"] = $val;
        return $this;
    }
    
    /**
    * Gets the originalStart
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'
    *
    * @return \DateTime The originalStart
    */
    public function getOriginalStart()
    {
        if (array_key_exists("originalStart", $this->_propDict)) {
            if (is_a($this->_propDict["originalStart"], "\DateTime")) {
                return $this->_propDict["originalStart"];
            } else {
                $this->_propDict["originalStart"] = new \DateTime($this->_propDict["originalStart"]);
                return $this->_propDict["originalStart"];
            }
        }
        return null;
    }
    
    /**
    * Sets the originalStart
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'
    *
    * @param \DateTime $val The originalStart
    *
    * @return Event
    */
    public function setOriginalStart($val)
    {
        $this->_propDict["originalStart"] = $val;
        return $this;
    }
    
    /**
    * Gets the end
    * The date, time, and time zone that the event ends.
    *
    * @return DateTimeTimeZone The end
    */
    public function getEnd()
    {
        if (array_key_exists("end", $this->_propDict)) {
            if (is_a($this->_propDict["end"], "Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["end"];
            } else {
                $this->_propDict["end"] = new DateTimeTimeZone($this->_propDict["end"]);
                return $this->_propDict["end"];
            }
        }
        return null;
    }
    
    /**
    * Sets the end
    * The date, time, and time zone that the event ends.
    *
    * @param DateTimeTimeZone $val The end
    *
    * @return Event
    */
    public function setEnd($val)
    {
        $this->_propDict["end"] = $val;
        return $this;
    }
    
    /**
    * Gets the location
    * The location of the event.
    *
    * @return Location The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "Microsoft\Graph\Model\Location")) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new Location($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }
    
    /**
    * Sets the location
    * The location of the event.
    *
    * @param Location $val The location
    *
    * @return Event
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    

     /** 
     * Gets the locations
    * The locations where the event is held or attended from. The location and locations properties always correspond with each other. If you update the location property, any prior locations in the locations collection would be removed and replaced by the new location value.
     *
     * @return array The locations
     */
    public function getLocations()
    {
        if (array_key_exists("locations", $this->_propDict)) {
           return $this->_propDict["locations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the locations
    * The locations where the event is held or attended from. The location and locations properties always correspond with each other. If you update the location property, any prior locations in the locations collection would be removed and replaced by the new location value.
    *
    * @param Location $val The locations
    *
    * @return Event
    */
    public function setLocations($val)
    {
		$this->_propDict["locations"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAllDay
    * Set to true if the event lasts all day.
    *
    * @return bool The isAllDay
    */
    public function getIsAllDay()
    {
        if (array_key_exists("isAllDay", $this->_propDict)) {
            return $this->_propDict["isAllDay"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAllDay
    * Set to true if the event lasts all day.
    *
    * @param bool $val The isAllDay
    *
    * @return Event
    */
    public function setIsAllDay($val)
    {
        $this->_propDict["isAllDay"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isCancelled
    * Set to true if the event has been canceled.
    *
    * @return bool The isCancelled
    */
    public function getIsCancelled()
    {
        if (array_key_exists("isCancelled", $this->_propDict)) {
            return $this->_propDict["isCancelled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isCancelled
    * Set to true if the event has been canceled.
    *
    * @param bool $val The isCancelled
    *
    * @return Event
    */
    public function setIsCancelled($val)
    {
        $this->_propDict["isCancelled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isOrganizer
    * Set to true if the message sender is also the organizer.
    *
    * @return bool The isOrganizer
    */
    public function getIsOrganizer()
    {
        if (array_key_exists("isOrganizer", $this->_propDict)) {
            return $this->_propDict["isOrganizer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isOrganizer
    * Set to true if the message sender is also the organizer.
    *
    * @param bool $val The isOrganizer
    *
    * @return Event
    */
    public function setIsOrganizer($val)
    {
        $this->_propDict["isOrganizer"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the recurrence
    * The recurrence pattern for the event.
    *
    * @return PatternedRecurrence The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "Microsoft\Graph\Model\PatternedRecurrence")) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new PatternedRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recurrence
    * The recurrence pattern for the event.
    *
    * @param PatternedRecurrence $val The recurrence
    *
    * @return Event
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
        return $this;
    }
    
    /**
    * Gets the responseRequested
    * Set to true if the sender would like a response when the event is accepted or declined.
    *
    * @return bool The responseRequested
    */
    public function getResponseRequested()
    {
        if (array_key_exists("responseRequested", $this->_propDict)) {
            return $this->_propDict["responseRequested"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the responseRequested
    * Set to true if the sender would like a response when the event is accepted or declined.
    *
    * @param bool $val The responseRequested
    *
    * @return Event
    */
    public function setResponseRequested($val)
    {
        $this->_propDict["responseRequested"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the seriesMasterId
    * The ID for the recurring series master item, if this event is part of a recurring series.
    *
    * @return string The seriesMasterId
    */
    public function getSeriesMasterId()
    {
        if (array_key_exists("seriesMasterId", $this->_propDict)) {
            return $this->_propDict["seriesMasterId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the seriesMasterId
    * The ID for the recurring series master item, if this event is part of a recurring series.
    *
    * @param string $val The seriesMasterId
    *
    * @return Event
    */
    public function setSeriesMasterId($val)
    {
        $this->_propDict["seriesMasterId"] = $val;
        return $this;
    }
    
    /**
    * Gets the showAs
    * The status to show. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
    *
    * @return FreeBusyStatus The showAs
    */
    public function getShowAs()
    {
        if (array_key_exists("showAs", $this->_propDict)) {
            if (is_a($this->_propDict["showAs"], "Microsoft\Graph\Model\FreeBusyStatus")) {
                return $this->_propDict["showAs"];
            } else {
                $this->_propDict["showAs"] = new FreeBusyStatus($this->_propDict["showAs"]);
                return $this->_propDict["showAs"];
            }
        }
        return null;
    }
    
    /**
    * Sets the showAs
    * The status to show. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
    *
    * @param FreeBusyStatus $val The showAs
    *
    * @return Event
    */
    public function setShowAs($val)
    {
        $this->_propDict["showAs"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    * The event type. The possible values are: singleInstance, occurrence, exception, seriesMaster. Read-only.
    *
    * @return EventType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Model\EventType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new EventType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }
    
    /**
    * Sets the type
    * The event type. The possible values are: singleInstance, occurrence, exception, seriesMaster. Read-only.
    *
    * @param EventType $val The type
    *
    * @return Event
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    

     /** 
     * Gets the attendees
    * The collection of attendees for the event.
     *
     * @return array The attendees
     */
    public function getAttendees()
    {
        if (array_key_exists("attendees", $this->_propDict)) {
           return $this->_propDict["attendees"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the attendees
    * The collection of attendees for the event.
    *
    * @param Attendee $val The attendees
    *
    * @return Event
    */
    public function setAttendees($val)
    {
		$this->_propDict["attendees"] = $val;
        return $this;
    }
    
    /**
    * Gets the organizer
    * The organizer of the event.
    *
    * @return Recipient The organizer
    */
    public function getOrganizer()
    {
        if (array_key_exists("organizer", $this->_propDict)) {
            if (is_a($this->_propDict["organizer"], "Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["organizer"];
            } else {
                $this->_propDict["organizer"] = new Recipient($this->_propDict["organizer"]);
                return $this->_propDict["organizer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the organizer
    * The organizer of the event.
    *
    * @param Recipient $val The organizer
    *
    * @return Event
    */
    public function setOrganizer($val)
    {
        $this->_propDict["organizer"] = $val;
        return $this;
    }
    
    /**
    * Gets the webLink
    * The URL to open the event in Outlook Web App.The event will open in the browser if you are logged in to your mailbox via Outlook Web App. You will be prompted to login if you are not already logged in with the browser.This URL can be accessed from within an iFrame.
    *
    * @return string The webLink
    */
    public function getWebLink()
    {
        if (array_key_exists("webLink", $this->_propDict)) {
            return $this->_propDict["webLink"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webLink
    * The URL to open the event in Outlook Web App.The event will open in the browser if you are logged in to your mailbox via Outlook Web App. You will be prompted to login if you are not already logged in with the browser.This URL can be accessed from within an iFrame.
    *
    * @param string $val The webLink
    *
    * @return Event
    */
    public function setWebLink($val)
    {
        $this->_propDict["webLink"] = $val;
        return $this;
    }
    
    /**
    * Gets the onlineMeetingUrl
    * A URL for an online meeting. The property is set only when an organizer specifies an event as an online meeting such as a Skype meeting. Read-only.
    *
    * @return string The onlineMeetingUrl
    */
    public function getOnlineMeetingUrl()
    {
        if (array_key_exists("onlineMeetingUrl", $this->_propDict)) {
            return $this->_propDict["onlineMeetingUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onlineMeetingUrl
    * A URL for an online meeting. The property is set only when an organizer specifies an event as an online meeting such as a Skype meeting. Read-only.
    *
    * @param string $val The onlineMeetingUrl
    *
    * @return Event
    */
    public function setOnlineMeetingUrl($val)
    {
        $this->_propDict["onlineMeetingUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the calendar
    * The calendar that contains the event. Navigation property. Read-only.
    *
    * @return Calendar The calendar
    */
    public function getCalendar()
    {
        if (array_key_exists("calendar", $this->_propDict)) {
            if (is_a($this->_propDict["calendar"], "Microsoft\Graph\Model\Calendar")) {
                return $this->_propDict["calendar"];
            } else {
                $this->_propDict["calendar"] = new Calendar($this->_propDict["calendar"]);
                return $this->_propDict["calendar"];
            }
        }
        return null;
    }
    
    /**
    * Sets the calendar
    * The calendar that contains the event. Navigation property. Read-only.
    *
    * @param Calendar $val The calendar
    *
    * @return Event
    */
    public function setCalendar($val)
    {
        $this->_propDict["calendar"] = $val;
        return $this;
    }
    

     /** 
     * Gets the instances
    * The instances of the event. Navigation property. Read-only. Nullable.
     *
     * @return array The instances
     */
    public function getInstances()
    {
        if (array_key_exists("instances", $this->_propDict)) {
           return $this->_propDict["instances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the instances
    * The instances of the event. Navigation property. Read-only. Nullable.
    *
    * @param Event $val The instances
    *
    * @return Event
    */
    public function setInstances($val)
    {
		$this->_propDict["instances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensions
    * The collection of open extensions defined for the event. Read-only. Nullable.
     *
     * @return array The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensions
    * The collection of open extensions defined for the event. Read-only. Nullable.
    *
    * @param Extension $val The extensions
    *
    * @return Event
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the attachments
    * The collection of fileAttachment and itemAttachment attachments for the event. Navigation property. Read-only. Nullable.
     *
     * @return array The attachments
     */
    public function getAttachments()
    {
        if (array_key_exists("attachments", $this->_propDict)) {
           return $this->_propDict["attachments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the attachments
    * The collection of fileAttachment and itemAttachment attachments for the event. Navigation property. Read-only. Nullable.
    *
    * @param Attachment $val The attachments
    *
    * @return Event
    */
    public function setAttachments($val)
    {
		$this->_propDict["attachments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the event. Read-only. Nullable.
     *
     * @return array The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the event. Read-only. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty $val The singleValueExtendedProperties
    *
    * @return Event
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the event. Read-only. Nullable.
     *
     * @return array The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the event. Read-only. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty $val The multiValueExtendedProperties
    *
    * @return Event
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    
}