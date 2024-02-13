<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Event extends OutlookItem implements Parsable 
{
    /**
     * Instantiates a new Event and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.event');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Event
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Event {
        return new Event();
    }

    /**
     * Gets the allowNewTimeProposals property value. true if the meeting organizer allows invitees to propose a new time when responding; otherwise, false. Optional. Default is true.
     * @return bool|null
    */
    public function getAllowNewTimeProposals(): ?bool {
        $val = $this->getBackingStore()->get('allowNewTimeProposals');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowNewTimeProposals'");
    }

    /**
     * Gets the attachments property value. The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
     * @return array<Attachment>|null
    */
    public function getAttachments(): ?array {
        $val = $this->getBackingStore()->get('attachments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Attachment::class);
            /** @var array<Attachment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachments'");
    }

    /**
     * Gets the attendees property value. The collection of attendees for the event.
     * @return array<Attendee>|null
    */
    public function getAttendees(): ?array {
        $val = $this->getBackingStore()->get('attendees');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Attendee::class);
            /** @var array<Attendee>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attendees'");
    }

    /**
     * Gets the body property value. The body of the message associated with the event. It can be in HTML or text format.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        $val = $this->getBackingStore()->get('body');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'body'");
    }

    /**
     * Gets the bodyPreview property value. The preview of the message associated with the event. It is in text format.
     * @return string|null
    */
    public function getBodyPreview(): ?string {
        $val = $this->getBackingStore()->get('bodyPreview');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bodyPreview'");
    }

    /**
     * Gets the calendar property value. The calendar that contains the event. Navigation property. Read-only.
     * @return Calendar|null
    */
    public function getCalendar(): ?Calendar {
        $val = $this->getBackingStore()->get('calendar');
        if (is_null($val) || $val instanceof Calendar) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendar'");
    }

    /**
     * Gets the end property value. The date, time, and time zone that the event ends. By default, the end time is in UTC.
     * @return DateTimeTimeZone|null
    */
    public function getEnd(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('end');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'end'");
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the event. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        $val = $this->getBackingStore()->get('extensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Extension::class);
            /** @var array<Extension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowNewTimeProposals' => fn(ParseNode $n) => $o->setAllowNewTimeProposals($n->getBooleanValue()),
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([Attachment::class, 'createFromDiscriminatorValue'])),
            'attendees' => fn(ParseNode $n) => $o->setAttendees($n->getCollectionOfObjectValues([Attendee::class, 'createFromDiscriminatorValue'])),
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'bodyPreview' => fn(ParseNode $n) => $o->setBodyPreview($n->getStringValue()),
            'calendar' => fn(ParseNode $n) => $o->setCalendar($n->getObjectValue([Calendar::class, 'createFromDiscriminatorValue'])),
            'end' => fn(ParseNode $n) => $o->setEnd($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'hasAttachments' => fn(ParseNode $n) => $o->setHasAttachments($n->getBooleanValue()),
            'hideAttendees' => fn(ParseNode $n) => $o->setHideAttendees($n->getBooleanValue()),
            'iCalUId' => fn(ParseNode $n) => $o->setICalUId($n->getStringValue()),
            'importance' => fn(ParseNode $n) => $o->setImportance($n->getEnumValue(Importance::class)),
            'instances' => fn(ParseNode $n) => $o->setInstances($n->getCollectionOfObjectValues([Event::class, 'createFromDiscriminatorValue'])),
            'isAllDay' => fn(ParseNode $n) => $o->setIsAllDay($n->getBooleanValue()),
            'isCancelled' => fn(ParseNode $n) => $o->setIsCancelled($n->getBooleanValue()),
            'isDraft' => fn(ParseNode $n) => $o->setIsDraft($n->getBooleanValue()),
            'isOnlineMeeting' => fn(ParseNode $n) => $o->setIsOnlineMeeting($n->getBooleanValue()),
            'isOrganizer' => fn(ParseNode $n) => $o->setIsOrganizer($n->getBooleanValue()),
            'isReminderOn' => fn(ParseNode $n) => $o->setIsReminderOn($n->getBooleanValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([Location::class, 'createFromDiscriminatorValue'])),
            'locations' => fn(ParseNode $n) => $o->setLocations($n->getCollectionOfObjectValues([Location::class, 'createFromDiscriminatorValue'])),
            'multiValueExtendedProperties' => fn(ParseNode $n) => $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues([MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'onlineMeeting' => fn(ParseNode $n) => $o->setOnlineMeeting($n->getObjectValue([OnlineMeetingInfo::class, 'createFromDiscriminatorValue'])),
            'onlineMeetingProvider' => fn(ParseNode $n) => $o->setOnlineMeetingProvider($n->getEnumValue(OnlineMeetingProviderType::class)),
            'onlineMeetingUrl' => fn(ParseNode $n) => $o->setOnlineMeetingUrl($n->getStringValue()),
            'organizer' => fn(ParseNode $n) => $o->setOrganizer($n->getObjectValue([Recipient::class, 'createFromDiscriminatorValue'])),
            'originalEndTimeZone' => fn(ParseNode $n) => $o->setOriginalEndTimeZone($n->getStringValue()),
            'originalStart' => fn(ParseNode $n) => $o->setOriginalStart($n->getDateTimeValue()),
            'originalStartTimeZone' => fn(ParseNode $n) => $o->setOriginalStartTimeZone($n->getStringValue()),
            'recurrence' => fn(ParseNode $n) => $o->setRecurrence($n->getObjectValue([PatternedRecurrence::class, 'createFromDiscriminatorValue'])),
            'reminderMinutesBeforeStart' => fn(ParseNode $n) => $o->setReminderMinutesBeforeStart($n->getIntegerValue()),
            'responseRequested' => fn(ParseNode $n) => $o->setResponseRequested($n->getBooleanValue()),
            'responseStatus' => fn(ParseNode $n) => $o->setResponseStatus($n->getObjectValue([ResponseStatus::class, 'createFromDiscriminatorValue'])),
            'sensitivity' => fn(ParseNode $n) => $o->setSensitivity($n->getEnumValue(Sensitivity::class)),
            'seriesMasterId' => fn(ParseNode $n) => $o->setSeriesMasterId($n->getStringValue()),
            'showAs' => fn(ParseNode $n) => $o->setShowAs($n->getEnumValue(FreeBusyStatus::class)),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'start' => fn(ParseNode $n) => $o->setStart($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(EventType::class)),
            'webLink' => fn(ParseNode $n) => $o->setWebLink($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hasAttachments property value. Set to true if the event has attachments.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        $val = $this->getBackingStore()->get('hasAttachments');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasAttachments'");
    }

    /**
     * Gets the hideAttendees property value. When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. Default is false.
     * @return bool|null
    */
    public function getHideAttendees(): ?bool {
        $val = $this->getBackingStore()->get('hideAttendees');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideAttendees'");
    }

    /**
     * Gets the iCalUId property value. A unique identifier for an event across calendars. This ID is different for each occurrence in a recurring series. Read-only.
     * @return string|null
    */
    public function getICalUId(): ?string {
        $val = $this->getBackingStore()->get('iCalUId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCalUId'");
    }

    /**
     * Gets the importance property value. The importance property
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        $val = $this->getBackingStore()->get('importance');
        if (is_null($val) || $val instanceof Importance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importance'");
    }

    /**
     * Gets the instances property value. The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
     * @return array<Event>|null
    */
    public function getInstances(): ?array {
        $val = $this->getBackingStore()->get('instances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Event::class);
            /** @var array<Event>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'instances'");
    }

    /**
     * Gets the isAllDay property value. The isAllDay property
     * @return bool|null
    */
    public function getIsAllDay(): ?bool {
        $val = $this->getBackingStore()->get('isAllDay');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAllDay'");
    }

    /**
     * Gets the isCancelled property value. The isCancelled property
     * @return bool|null
    */
    public function getIsCancelled(): ?bool {
        $val = $this->getBackingStore()->get('isCancelled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCancelled'");
    }

    /**
     * Gets the isDraft property value. The isDraft property
     * @return bool|null
    */
    public function getIsDraft(): ?bool {
        $val = $this->getBackingStore()->get('isDraft');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDraft'");
    }

    /**
     * Gets the isOnlineMeeting property value. The isOnlineMeeting property
     * @return bool|null
    */
    public function getIsOnlineMeeting(): ?bool {
        $val = $this->getBackingStore()->get('isOnlineMeeting');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOnlineMeeting'");
    }

    /**
     * Gets the isOrganizer property value. The isOrganizer property
     * @return bool|null
    */
    public function getIsOrganizer(): ?bool {
        $val = $this->getBackingStore()->get('isOrganizer');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOrganizer'");
    }

    /**
     * Gets the isReminderOn property value. The isReminderOn property
     * @return bool|null
    */
    public function getIsReminderOn(): ?bool {
        $val = $this->getBackingStore()->get('isReminderOn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isReminderOn'");
    }

    /**
     * Gets the location property value. The location property
     * @return Location|null
    */
    public function getLocation(): ?Location {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || $val instanceof Location) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
    }

    /**
     * Gets the locations property value. The locations property
     * @return array<Location>|null
    */
    public function getLocations(): ?array {
        $val = $this->getBackingStore()->get('locations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Location::class);
            /** @var array<Location>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locations'");
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the event. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('multiValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MultiValueLegacyExtendedProperty::class);
            /** @var array<MultiValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiValueExtendedProperties'");
    }

    /**
     * Gets the onlineMeeting property value. The onlineMeeting property
     * @return OnlineMeetingInfo|null
    */
    public function getOnlineMeeting(): ?OnlineMeetingInfo {
        $val = $this->getBackingStore()->get('onlineMeeting');
        if (is_null($val) || $val instanceof OnlineMeetingInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlineMeeting'");
    }

    /**
     * Gets the onlineMeetingProvider property value. The onlineMeetingProvider property
     * @return OnlineMeetingProviderType|null
    */
    public function getOnlineMeetingProvider(): ?OnlineMeetingProviderType {
        $val = $this->getBackingStore()->get('onlineMeetingProvider');
        if (is_null($val) || $val instanceof OnlineMeetingProviderType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlineMeetingProvider'");
    }

    /**
     * Gets the onlineMeetingUrl property value. The onlineMeetingUrl property
     * @return string|null
    */
    public function getOnlineMeetingUrl(): ?string {
        $val = $this->getBackingStore()->get('onlineMeetingUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlineMeetingUrl'");
    }

    /**
     * Gets the organizer property value. The organizer property
     * @return Recipient|null
    */
    public function getOrganizer(): ?Recipient {
        $val = $this->getBackingStore()->get('organizer');
        if (is_null($val) || $val instanceof Recipient) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizer'");
    }

    /**
     * Gets the originalEndTimeZone property value. The originalEndTimeZone property
     * @return string|null
    */
    public function getOriginalEndTimeZone(): ?string {
        $val = $this->getBackingStore()->get('originalEndTimeZone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originalEndTimeZone'");
    }

    /**
     * Gets the originalStart property value. The originalStart property
     * @return DateTime|null
    */
    public function getOriginalStart(): ?DateTime {
        $val = $this->getBackingStore()->get('originalStart');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originalStart'");
    }

    /**
     * Gets the originalStartTimeZone property value. The originalStartTimeZone property
     * @return string|null
    */
    public function getOriginalStartTimeZone(): ?string {
        $val = $this->getBackingStore()->get('originalStartTimeZone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originalStartTimeZone'");
    }

    /**
     * Gets the recurrence property value. The recurrence property
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        $val = $this->getBackingStore()->get('recurrence');
        if (is_null($val) || $val instanceof PatternedRecurrence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrence'");
    }

    /**
     * Gets the reminderMinutesBeforeStart property value. The reminderMinutesBeforeStart property
     * @return int|null
    */
    public function getReminderMinutesBeforeStart(): ?int {
        $val = $this->getBackingStore()->get('reminderMinutesBeforeStart');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reminderMinutesBeforeStart'");
    }

    /**
     * Gets the responseRequested property value. The responseRequested property
     * @return bool|null
    */
    public function getResponseRequested(): ?bool {
        $val = $this->getBackingStore()->get('responseRequested');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responseRequested'");
    }

    /**
     * Gets the responseStatus property value. The responseStatus property
     * @return ResponseStatus|null
    */
    public function getResponseStatus(): ?ResponseStatus {
        $val = $this->getBackingStore()->get('responseStatus');
        if (is_null($val) || $val instanceof ResponseStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responseStatus'");
    }

    /**
     * Gets the sensitivity property value. The sensitivity property
     * @return Sensitivity|null
    */
    public function getSensitivity(): ?Sensitivity {
        $val = $this->getBackingStore()->get('sensitivity');
        if (is_null($val) || $val instanceof Sensitivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivity'");
    }

    /**
     * Gets the seriesMasterId property value. The seriesMasterId property
     * @return string|null
    */
    public function getSeriesMasterId(): ?string {
        $val = $this->getBackingStore()->get('seriesMasterId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'seriesMasterId'");
    }

    /**
     * Gets the showAs property value. The showAs property
     * @return FreeBusyStatus|null
    */
    public function getShowAs(): ?FreeBusyStatus {
        $val = $this->getBackingStore()->get('showAs');
        if (is_null($val) || $val instanceof FreeBusyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showAs'");
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the event. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('singleValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SingleValueLegacyExtendedProperty::class);
            /** @var array<SingleValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleValueExtendedProperties'");
    }

    /**
     * Gets the start property value. The start property
     * @return DateTimeTimeZone|null
    */
    public function getStart(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('start');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'start'");
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the transactionId property value. The transactionId property
     * @return string|null
    */
    public function getTransactionId(): ?string {
        $val = $this->getBackingStore()->get('transactionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transactionId'");
    }

    /**
     * Gets the type property value. The type property
     * @return EventType|null
    */
    public function getType(): ?EventType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof EventType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Gets the webLink property value. The webLink property
     * @return string|null
    */
    public function getWebLink(): ?string {
        $val = $this->getBackingStore()->get('webLink');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webLink'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowNewTimeProposals', $this->getAllowNewTimeProposals());
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeCollectionOfObjectValues('attendees', $this->getAttendees());
        $writer->writeObjectValue('body', $this->getBody());
        $writer->writeStringValue('bodyPreview', $this->getBodyPreview());
        $writer->writeObjectValue('calendar', $this->getCalendar());
        $writer->writeObjectValue('end', $this->getEnd());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeBooleanValue('hasAttachments', $this->getHasAttachments());
        $writer->writeBooleanValue('hideAttendees', $this->getHideAttendees());
        $writer->writeStringValue('iCalUId', $this->getICalUId());
        $writer->writeEnumValue('importance', $this->getImportance());
        $writer->writeCollectionOfObjectValues('instances', $this->getInstances());
        $writer->writeBooleanValue('isAllDay', $this->getIsAllDay());
        $writer->writeBooleanValue('isCancelled', $this->getIsCancelled());
        $writer->writeBooleanValue('isDraft', $this->getIsDraft());
        $writer->writeBooleanValue('isOnlineMeeting', $this->getIsOnlineMeeting());
        $writer->writeBooleanValue('isOrganizer', $this->getIsOrganizer());
        $writer->writeBooleanValue('isReminderOn', $this->getIsReminderOn());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeCollectionOfObjectValues('locations', $this->getLocations());
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->getMultiValueExtendedProperties());
        $writer->writeObjectValue('onlineMeeting', $this->getOnlineMeeting());
        $writer->writeEnumValue('onlineMeetingProvider', $this->getOnlineMeetingProvider());
        $writer->writeStringValue('onlineMeetingUrl', $this->getOnlineMeetingUrl());
        $writer->writeObjectValue('organizer', $this->getOrganizer());
        $writer->writeStringValue('originalEndTimeZone', $this->getOriginalEndTimeZone());
        $writer->writeDateTimeValue('originalStart', $this->getOriginalStart());
        $writer->writeStringValue('originalStartTimeZone', $this->getOriginalStartTimeZone());
        $writer->writeObjectValue('recurrence', $this->getRecurrence());
        $writer->writeIntegerValue('reminderMinutesBeforeStart', $this->getReminderMinutesBeforeStart());
        $writer->writeBooleanValue('responseRequested', $this->getResponseRequested());
        $writer->writeObjectValue('responseStatus', $this->getResponseStatus());
        $writer->writeEnumValue('sensitivity', $this->getSensitivity());
        $writer->writeStringValue('seriesMasterId', $this->getSeriesMasterId());
        $writer->writeEnumValue('showAs', $this->getShowAs());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
        $writer->writeObjectValue('start', $this->getStart());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeStringValue('webLink', $this->getWebLink());
    }

    /**
     * Sets the allowNewTimeProposals property value. true if the meeting organizer allows invitees to propose a new time when responding; otherwise, false. Optional. Default is true.
     * @param bool|null $value Value to set for the allowNewTimeProposals property.
    */
    public function setAllowNewTimeProposals(?bool $value): void {
        $this->getBackingStore()->set('allowNewTimeProposals', $value);
    }

    /**
     * Sets the attachments property value. The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
     * @param array<Attachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the attendees property value. The collection of attendees for the event.
     * @param array<Attendee>|null $value Value to set for the attendees property.
    */
    public function setAttendees(?array $value): void {
        $this->getBackingStore()->set('attendees', $value);
    }

    /**
     * Sets the body property value. The body of the message associated with the event. It can be in HTML or text format.
     * @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the bodyPreview property value. The preview of the message associated with the event. It is in text format.
     * @param string|null $value Value to set for the bodyPreview property.
    */
    public function setBodyPreview(?string $value): void {
        $this->getBackingStore()->set('bodyPreview', $value);
    }

    /**
     * Sets the calendar property value. The calendar that contains the event. Navigation property. Read-only.
     * @param Calendar|null $value Value to set for the calendar property.
    */
    public function setCalendar(?Calendar $value): void {
        $this->getBackingStore()->set('calendar', $value);
    }

    /**
     * Sets the end property value. The date, time, and time zone that the event ends. By default, the end time is in UTC.
     * @param DateTimeTimeZone|null $value Value to set for the end property.
    */
    public function setEnd(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('end', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the event. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the hasAttachments property value. Set to true if the event has attachments.
     * @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value): void {
        $this->getBackingStore()->set('hasAttachments', $value);
    }

    /**
     * Sets the hideAttendees property value. When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. Default is false.
     * @param bool|null $value Value to set for the hideAttendees property.
    */
    public function setHideAttendees(?bool $value): void {
        $this->getBackingStore()->set('hideAttendees', $value);
    }

    /**
     * Sets the iCalUId property value. A unique identifier for an event across calendars. This ID is different for each occurrence in a recurring series. Read-only.
     * @param string|null $value Value to set for the iCalUId property.
    */
    public function setICalUId(?string $value): void {
        $this->getBackingStore()->set('iCalUId', $value);
    }

    /**
     * Sets the importance property value. The importance property
     * @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value): void {
        $this->getBackingStore()->set('importance', $value);
    }

    /**
     * Sets the instances property value. The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
     * @param array<Event>|null $value Value to set for the instances property.
    */
    public function setInstances(?array $value): void {
        $this->getBackingStore()->set('instances', $value);
    }

    /**
     * Sets the isAllDay property value. The isAllDay property
     * @param bool|null $value Value to set for the isAllDay property.
    */
    public function setIsAllDay(?bool $value): void {
        $this->getBackingStore()->set('isAllDay', $value);
    }

    /**
     * Sets the isCancelled property value. The isCancelled property
     * @param bool|null $value Value to set for the isCancelled property.
    */
    public function setIsCancelled(?bool $value): void {
        $this->getBackingStore()->set('isCancelled', $value);
    }

    /**
     * Sets the isDraft property value. The isDraft property
     * @param bool|null $value Value to set for the isDraft property.
    */
    public function setIsDraft(?bool $value): void {
        $this->getBackingStore()->set('isDraft', $value);
    }

    /**
     * Sets the isOnlineMeeting property value. The isOnlineMeeting property
     * @param bool|null $value Value to set for the isOnlineMeeting property.
    */
    public function setIsOnlineMeeting(?bool $value): void {
        $this->getBackingStore()->set('isOnlineMeeting', $value);
    }

    /**
     * Sets the isOrganizer property value. The isOrganizer property
     * @param bool|null $value Value to set for the isOrganizer property.
    */
    public function setIsOrganizer(?bool $value): void {
        $this->getBackingStore()->set('isOrganizer', $value);
    }

    /**
     * Sets the isReminderOn property value. The isReminderOn property
     * @param bool|null $value Value to set for the isReminderOn property.
    */
    public function setIsReminderOn(?bool $value): void {
        $this->getBackingStore()->set('isReminderOn', $value);
    }

    /**
     * Sets the location property value. The location property
     * @param Location|null $value Value to set for the location property.
    */
    public function setLocation(?Location $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the locations property value. The locations property
     * @param array<Location>|null $value Value to set for the locations property.
    */
    public function setLocations(?array $value): void {
        $this->getBackingStore()->set('locations', $value);
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the event. Read-only. Nullable.
     * @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('multiValueExtendedProperties', $value);
    }

    /**
     * Sets the onlineMeeting property value. The onlineMeeting property
     * @param OnlineMeetingInfo|null $value Value to set for the onlineMeeting property.
    */
    public function setOnlineMeeting(?OnlineMeetingInfo $value): void {
        $this->getBackingStore()->set('onlineMeeting', $value);
    }

    /**
     * Sets the onlineMeetingProvider property value. The onlineMeetingProvider property
     * @param OnlineMeetingProviderType|null $value Value to set for the onlineMeetingProvider property.
    */
    public function setOnlineMeetingProvider(?OnlineMeetingProviderType $value): void {
        $this->getBackingStore()->set('onlineMeetingProvider', $value);
    }

    /**
     * Sets the onlineMeetingUrl property value. The onlineMeetingUrl property
     * @param string|null $value Value to set for the onlineMeetingUrl property.
    */
    public function setOnlineMeetingUrl(?string $value): void {
        $this->getBackingStore()->set('onlineMeetingUrl', $value);
    }

    /**
     * Sets the organizer property value. The organizer property
     * @param Recipient|null $value Value to set for the organizer property.
    */
    public function setOrganizer(?Recipient $value): void {
        $this->getBackingStore()->set('organizer', $value);
    }

    /**
     * Sets the originalEndTimeZone property value. The originalEndTimeZone property
     * @param string|null $value Value to set for the originalEndTimeZone property.
    */
    public function setOriginalEndTimeZone(?string $value): void {
        $this->getBackingStore()->set('originalEndTimeZone', $value);
    }

    /**
     * Sets the originalStart property value. The originalStart property
     * @param DateTime|null $value Value to set for the originalStart property.
    */
    public function setOriginalStart(?DateTime $value): void {
        $this->getBackingStore()->set('originalStart', $value);
    }

    /**
     * Sets the originalStartTimeZone property value. The originalStartTimeZone property
     * @param string|null $value Value to set for the originalStartTimeZone property.
    */
    public function setOriginalStartTimeZone(?string $value): void {
        $this->getBackingStore()->set('originalStartTimeZone', $value);
    }

    /**
     * Sets the recurrence property value. The recurrence property
     * @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value): void {
        $this->getBackingStore()->set('recurrence', $value);
    }

    /**
     * Sets the reminderMinutesBeforeStart property value. The reminderMinutesBeforeStart property
     * @param int|null $value Value to set for the reminderMinutesBeforeStart property.
    */
    public function setReminderMinutesBeforeStart(?int $value): void {
        $this->getBackingStore()->set('reminderMinutesBeforeStart', $value);
    }

    /**
     * Sets the responseRequested property value. The responseRequested property
     * @param bool|null $value Value to set for the responseRequested property.
    */
    public function setResponseRequested(?bool $value): void {
        $this->getBackingStore()->set('responseRequested', $value);
    }

    /**
     * Sets the responseStatus property value. The responseStatus property
     * @param ResponseStatus|null $value Value to set for the responseStatus property.
    */
    public function setResponseStatus(?ResponseStatus $value): void {
        $this->getBackingStore()->set('responseStatus', $value);
    }

    /**
     * Sets the sensitivity property value. The sensitivity property
     * @param Sensitivity|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?Sensitivity $value): void {
        $this->getBackingStore()->set('sensitivity', $value);
    }

    /**
     * Sets the seriesMasterId property value. The seriesMasterId property
     * @param string|null $value Value to set for the seriesMasterId property.
    */
    public function setSeriesMasterId(?string $value): void {
        $this->getBackingStore()->set('seriesMasterId', $value);
    }

    /**
     * Sets the showAs property value. The showAs property
     * @param FreeBusyStatus|null $value Value to set for the showAs property.
    */
    public function setShowAs(?FreeBusyStatus $value): void {
        $this->getBackingStore()->set('showAs', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the event. Read-only. Nullable.
     * @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

    /**
     * Sets the start property value. The start property
     * @param DateTimeTimeZone|null $value Value to set for the start property.
    */
    public function setStart(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('start', $value);
    }

    /**
     * Sets the subject property value. The subject property
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the transactionId property value. The transactionId property
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->getBackingStore()->set('transactionId', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param EventType|null $value Value to set for the type property.
    */
    public function setType(?EventType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the webLink property value. The webLink property
     * @param string|null $value Value to set for the webLink property.
    */
    public function setWebLink(?string $value): void {
        $this->getBackingStore()->set('webLink', $value);
    }

}
