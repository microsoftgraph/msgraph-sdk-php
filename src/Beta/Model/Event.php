<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Event File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* Event class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Event extends OutlookItem
{
    /**
    * Gets the originalStartTimeZone
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
    *
    * @return ResponseStatus The responseStatus
    */
    public function getResponseStatus()
    {
        if (array_key_exists("responseStatus", $this->_propDict)) {
            if (is_a($this->_propDict["responseStatus"], "Microsoft\Graph\Beta\Model\ResponseStatus")) {
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
    *
    * @return ItemBody The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "Microsoft\Graph\Beta\Model\ItemBody")) {
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
    *
    * @return Importance The importance
    */
    public function getImportance()
    {
        if (array_key_exists("importance", $this->_propDict)) {
            if (is_a($this->_propDict["importance"], "Microsoft\Graph\Beta\Model\Importance")) {
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
    *
    * @return Sensitivity The sensitivity
    */
    public function getSensitivity()
    {
        if (array_key_exists("sensitivity", $this->_propDict)) {
            if (is_a($this->_propDict["sensitivity"], "Microsoft\Graph\Beta\Model\Sensitivity")) {
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
    *
    * @return DateTimeTimeZone The start
    */
    public function getStart()
    {
        if (array_key_exists("start", $this->_propDict)) {
            if (is_a($this->_propDict["start"], "Microsoft\Graph\Beta\Model\DateTimeTimeZone")) {
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
    *
    * @return DateTimeTimeZone The end
    */
    public function getEnd()
    {
        if (array_key_exists("end", $this->_propDict)) {
            if (is_a($this->_propDict["end"], "Microsoft\Graph\Beta\Model\DateTimeTimeZone")) {
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
    *
    * @return Location The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "Microsoft\Graph\Beta\Model\Location")) {
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
    *
    * @return PatternedRecurrence The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "Microsoft\Graph\Beta\Model\PatternedRecurrence")) {
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
    *
    * @return FreeBusyStatus The showAs
    */
    public function getShowAs()
    {
        if (array_key_exists("showAs", $this->_propDict)) {
            if (is_a($this->_propDict["showAs"], "Microsoft\Graph\Beta\Model\FreeBusyStatus")) {
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
    *
    * @return EventType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Beta\Model\EventType")) {
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
    *
    * @return Recipient The organizer
    */
    public function getOrganizer()
    {
        if (array_key_exists("organizer", $this->_propDict)) {
            if (is_a($this->_propDict["organizer"], "Microsoft\Graph\Beta\Model\Recipient")) {
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
    * Gets the creationOptions
    *
    * @return EventCreationOptions The creationOptions
    */
    public function getCreationOptions()
    {
        if (array_key_exists("creationOptions", $this->_propDict)) {
            if (is_a($this->_propDict["creationOptions"], "Microsoft\Graph\Beta\Model\EventCreationOptions")) {
                return $this->_propDict["creationOptions"];
            } else {
                $this->_propDict["creationOptions"] = new EventCreationOptions($this->_propDict["creationOptions"]);
                return $this->_propDict["creationOptions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the creationOptions
    *
    * @param EventCreationOptions $val The creationOptions
    *
    * @return Event
    */
    public function setCreationOptions($val)
    {
        $this->_propDict["creationOptions"] = $val;
        return $this;
    }
    
    /**
    * Gets the calendar
    *
    * @return Calendar The calendar
    */
    public function getCalendar()
    {
        if (array_key_exists("calendar", $this->_propDict)) {
            if (is_a($this->_propDict["calendar"], "Microsoft\Graph\Beta\Model\Calendar")) {
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