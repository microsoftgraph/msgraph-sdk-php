<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Event extends OutlookItem implements Parsable 
{
    /**
     * @var bool|null $allowNewTimeProposals true if the meeting organizer allows invitees to propose a new time when responding; otherwise, false. Optional. Default is true.
    */
    private ?bool $allowNewTimeProposals = null;
    
    /**
     * @var array<Attachment>|null $attachments The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
    */
    private ?array $attachments = null;
    
    /**
     * @var array<Attendee>|null $attendees The collection of attendees for the event.
    */
    private ?array $attendees = null;
    
    /**
     * @var ItemBody|null $body The body of the message associated with the event. It can be in HTML or text format.
    */
    private ?ItemBody $body = null;
    
    /**
     * @var string|null $bodyPreview The preview of the message associated with the event. It is in text format.
    */
    private ?string $bodyPreview = null;
    
    /**
     * @var Calendar|null $calendar The calendar that contains the event. Navigation property. Read-only.
    */
    private ?Calendar $calendar = null;
    
    /**
     * @var DateTimeTimeZone|null $end The date, time, and time zone that the event ends. By default, the end time is in UTC.
    */
    private ?DateTimeTimeZone $end = null;
    
    /**
     * @var array<Extension>|null $extensions The collection of open extensions defined for the event. Nullable.
    */
    private ?array $extensions = null;
    
    /**
     * @var bool|null $hasAttachments Set to true if the event has attachments.
    */
    private ?bool $hasAttachments = null;
    
    /**
     * @var bool|null $hideAttendees When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. Default is false.
    */
    private ?bool $hideAttendees = null;
    
    /**
     * @var string|null $iCalUId A unique identifier for an event across calendars. This ID is different for each occurrence in a recurring series. Read-only.
    */
    private ?string $iCalUId = null;
    
    /**
     * @var Importance|null $importance The importance property
    */
    private ?Importance $importance = null;
    
    /**
     * @var array<Event>|null $instances The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
    */
    private ?array $instances = null;
    
    /**
     * @var bool|null $isAllDay The isAllDay property
    */
    private ?bool $isAllDay = null;
    
    /**
     * @var bool|null $isCancelled The isCancelled property
    */
    private ?bool $isCancelled = null;
    
    /**
     * @var bool|null $isDraft The isDraft property
    */
    private ?bool $isDraft = null;
    
    /**
     * @var bool|null $isOnlineMeeting The isOnlineMeeting property
    */
    private ?bool $isOnlineMeeting = null;
    
    /**
     * @var bool|null $isOrganizer The isOrganizer property
    */
    private ?bool $isOrganizer = null;
    
    /**
     * @var bool|null $isReminderOn The isReminderOn property
    */
    private ?bool $isReminderOn = null;
    
    /**
     * @var Location|null $location The location property
    */
    private ?Location $location = null;
    
    /**
     * @var array<Location>|null $locations The locations property
    */
    private ?array $locations = null;
    
    /**
     * @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the event. Read-only. Nullable.
    */
    private ?array $multiValueExtendedProperties = null;
    
    /**
     * @var OnlineMeetingInfo|null $onlineMeeting The onlineMeeting property
    */
    private ?OnlineMeetingInfo $onlineMeeting = null;
    
    /**
     * @var OnlineMeetingProviderType|null $onlineMeetingProvider The onlineMeetingProvider property
    */
    private ?OnlineMeetingProviderType $onlineMeetingProvider = null;
    
    /**
     * @var string|null $onlineMeetingUrl The onlineMeetingUrl property
    */
    private ?string $onlineMeetingUrl = null;
    
    /**
     * @var Recipient|null $organizer The organizer property
    */
    private ?Recipient $organizer = null;
    
    /**
     * @var string|null $originalEndTimeZone The originalEndTimeZone property
    */
    private ?string $originalEndTimeZone = null;
    
    /**
     * @var DateTime|null $originalStart The originalStart property
    */
    private ?DateTime $originalStart = null;
    
    /**
     * @var string|null $originalStartTimeZone The originalStartTimeZone property
    */
    private ?string $originalStartTimeZone = null;
    
    /**
     * @var PatternedRecurrence|null $recurrence The recurrence property
    */
    private ?PatternedRecurrence $recurrence = null;
    
    /**
     * @var int|null $reminderMinutesBeforeStart The reminderMinutesBeforeStart property
    */
    private ?int $reminderMinutesBeforeStart = null;
    
    /**
     * @var bool|null $responseRequested The responseRequested property
    */
    private ?bool $responseRequested = null;
    
    /**
     * @var ResponseStatus|null $responseStatus The responseStatus property
    */
    private ?ResponseStatus $responseStatus = null;
    
    /**
     * @var Sensitivity|null $sensitivity The sensitivity property
    */
    private ?Sensitivity $sensitivity = null;
    
    /**
     * @var string|null $seriesMasterId The seriesMasterId property
    */
    private ?string $seriesMasterId = null;
    
    /**
     * @var FreeBusyStatus|null $showAs The showAs property
    */
    private ?FreeBusyStatus $showAs = null;
    
    /**
     * @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the event. Read-only. Nullable.
    */
    private ?array $singleValueExtendedProperties = null;
    
    /**
     * @var DateTimeTimeZone|null $start The start property
    */
    private ?DateTimeTimeZone $start = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * @var string|null $transactionId The transactionId property
    */
    private ?string $transactionId = null;
    
    /**
     * @var EventType|null $type The type property
    */
    private ?EventType $type = null;
    
    /**
     * @var string|null $webLink The webLink property
    */
    private ?string $webLink = null;
    
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
        return $this->allowNewTimeProposals;
    }

    /**
     * Gets the attachments property value. The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
     * @return array<Attachment>|null
    */
    public function getAttachments(): ?array {
        return $this->attachments;
    }

    /**
     * Gets the attendees property value. The collection of attendees for the event.
     * @return array<Attendee>|null
    */
    public function getAttendees(): ?array {
        return $this->attendees;
    }

    /**
     * Gets the body property value. The body of the message associated with the event. It can be in HTML or text format.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->body;
    }

    /**
     * Gets the bodyPreview property value. The preview of the message associated with the event. It is in text format.
     * @return string|null
    */
    public function getBodyPreview(): ?string {
        return $this->bodyPreview;
    }

    /**
     * Gets the calendar property value. The calendar that contains the event. Navigation property. Read-only.
     * @return Calendar|null
    */
    public function getCalendar(): ?Calendar {
        return $this->calendar;
    }

    /**
     * Gets the end property value. The date, time, and time zone that the event ends. By default, the end time is in UTC.
     * @return DateTimeTimeZone|null
    */
    public function getEnd(): ?DateTimeTimeZone {
        return $this->end;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the event. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowNewTimeProposals' => function (ParseNode $n) use ($o) { $o->setAllowNewTimeProposals($n->getBooleanValue()); },
            'attachments' => function (ParseNode $n) use ($o) { $o->setAttachments($n->getCollectionOfObjectValues(array(Attachment::class, 'createFromDiscriminatorValue'))); },
            'attendees' => function (ParseNode $n) use ($o) { $o->setAttendees($n->getCollectionOfObjectValues(array(Attendee::class, 'createFromDiscriminatorValue'))); },
            'body' => function (ParseNode $n) use ($o) { $o->setBody($n->getObjectValue(array(ItemBody::class, 'createFromDiscriminatorValue'))); },
            'bodyPreview' => function (ParseNode $n) use ($o) { $o->setBodyPreview($n->getStringValue()); },
            'calendar' => function (ParseNode $n) use ($o) { $o->setCalendar($n->getObjectValue(array(Calendar::class, 'createFromDiscriminatorValue'))); },
            'end' => function (ParseNode $n) use ($o) { $o->setEnd($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'extensions' => function (ParseNode $n) use ($o) { $o->setExtensions($n->getCollectionOfObjectValues(array(Extension::class, 'createFromDiscriminatorValue'))); },
            'hasAttachments' => function (ParseNode $n) use ($o) { $o->setHasAttachments($n->getBooleanValue()); },
            'hideAttendees' => function (ParseNode $n) use ($o) { $o->setHideAttendees($n->getBooleanValue()); },
            'iCalUId' => function (ParseNode $n) use ($o) { $o->setICalUId($n->getStringValue()); },
            'importance' => function (ParseNode $n) use ($o) { $o->setImportance($n->getEnumValue(Importance::class)); },
            'instances' => function (ParseNode $n) use ($o) { $o->setInstances($n->getCollectionOfObjectValues(array(Event::class, 'createFromDiscriminatorValue'))); },
            'isAllDay' => function (ParseNode $n) use ($o) { $o->setIsAllDay($n->getBooleanValue()); },
            'isCancelled' => function (ParseNode $n) use ($o) { $o->setIsCancelled($n->getBooleanValue()); },
            'isDraft' => function (ParseNode $n) use ($o) { $o->setIsDraft($n->getBooleanValue()); },
            'isOnlineMeeting' => function (ParseNode $n) use ($o) { $o->setIsOnlineMeeting($n->getBooleanValue()); },
            'isOrganizer' => function (ParseNode $n) use ($o) { $o->setIsOrganizer($n->getBooleanValue()); },
            'isReminderOn' => function (ParseNode $n) use ($o) { $o->setIsReminderOn($n->getBooleanValue()); },
            'location' => function (ParseNode $n) use ($o) { $o->setLocation($n->getObjectValue(array(Location::class, 'createFromDiscriminatorValue'))); },
            'locations' => function (ParseNode $n) use ($o) { $o->setLocations($n->getCollectionOfObjectValues(array(Location::class, 'createFromDiscriminatorValue'))); },
            'multiValueExtendedProperties' => function (ParseNode $n) use ($o) { $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues(array(MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'))); },
            'onlineMeeting' => function (ParseNode $n) use ($o) { $o->setOnlineMeeting($n->getObjectValue(array(OnlineMeetingInfo::class, 'createFromDiscriminatorValue'))); },
            'onlineMeetingProvider' => function (ParseNode $n) use ($o) { $o->setOnlineMeetingProvider($n->getEnumValue(OnlineMeetingProviderType::class)); },
            'onlineMeetingUrl' => function (ParseNode $n) use ($o) { $o->setOnlineMeetingUrl($n->getStringValue()); },
            'organizer' => function (ParseNode $n) use ($o) { $o->setOrganizer($n->getObjectValue(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'originalEndTimeZone' => function (ParseNode $n) use ($o) { $o->setOriginalEndTimeZone($n->getStringValue()); },
            'originalStart' => function (ParseNode $n) use ($o) { $o->setOriginalStart($n->getDateTimeValue()); },
            'originalStartTimeZone' => function (ParseNode $n) use ($o) { $o->setOriginalStartTimeZone($n->getStringValue()); },
            'recurrence' => function (ParseNode $n) use ($o) { $o->setRecurrence($n->getObjectValue(array(PatternedRecurrence::class, 'createFromDiscriminatorValue'))); },
            'reminderMinutesBeforeStart' => function (ParseNode $n) use ($o) { $o->setReminderMinutesBeforeStart($n->getIntegerValue()); },
            'responseRequested' => function (ParseNode $n) use ($o) { $o->setResponseRequested($n->getBooleanValue()); },
            'responseStatus' => function (ParseNode $n) use ($o) { $o->setResponseStatus($n->getObjectValue(array(ResponseStatus::class, 'createFromDiscriminatorValue'))); },
            'sensitivity' => function (ParseNode $n) use ($o) { $o->setSensitivity($n->getEnumValue(Sensitivity::class)); },
            'seriesMasterId' => function (ParseNode $n) use ($o) { $o->setSeriesMasterId($n->getStringValue()); },
            'showAs' => function (ParseNode $n) use ($o) { $o->setShowAs($n->getEnumValue(FreeBusyStatus::class)); },
            'singleValueExtendedProperties' => function (ParseNode $n) use ($o) { $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues(array(SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'))); },
            'start' => function (ParseNode $n) use ($o) { $o->setStart($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
            'transactionId' => function (ParseNode $n) use ($o) { $o->setTransactionId($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(EventType::class)); },
            'webLink' => function (ParseNode $n) use ($o) { $o->setWebLink($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the hasAttachments property value. Set to true if the event has attachments.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->hasAttachments;
    }

    /**
     * Gets the hideAttendees property value. When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. Default is false.
     * @return bool|null
    */
    public function getHideAttendees(): ?bool {
        return $this->hideAttendees;
    }

    /**
     * Gets the iCalUId property value. A unique identifier for an event across calendars. This ID is different for each occurrence in a recurring series. Read-only.
     * @return string|null
    */
    public function getICalUId(): ?string {
        return $this->iCalUId;
    }

    /**
     * Gets the importance property value. The importance property
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        return $this->importance;
    }

    /**
     * Gets the instances property value. The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
     * @return array<Event>|null
    */
    public function getInstances(): ?array {
        return $this->instances;
    }

    /**
     * Gets the isAllDay property value. The isAllDay property
     * @return bool|null
    */
    public function getIsAllDay(): ?bool {
        return $this->isAllDay;
    }

    /**
     * Gets the isCancelled property value. The isCancelled property
     * @return bool|null
    */
    public function getIsCancelled(): ?bool {
        return $this->isCancelled;
    }

    /**
     * Gets the isDraft property value. The isDraft property
     * @return bool|null
    */
    public function getIsDraft(): ?bool {
        return $this->isDraft;
    }

    /**
     * Gets the isOnlineMeeting property value. The isOnlineMeeting property
     * @return bool|null
    */
    public function getIsOnlineMeeting(): ?bool {
        return $this->isOnlineMeeting;
    }

    /**
     * Gets the isOrganizer property value. The isOrganizer property
     * @return bool|null
    */
    public function getIsOrganizer(): ?bool {
        return $this->isOrganizer;
    }

    /**
     * Gets the isReminderOn property value. The isReminderOn property
     * @return bool|null
    */
    public function getIsReminderOn(): ?bool {
        return $this->isReminderOn;
    }

    /**
     * Gets the location property value. The location property
     * @return Location|null
    */
    public function getLocation(): ?Location {
        return $this->location;
    }

    /**
     * Gets the locations property value. The locations property
     * @return array<Location>|null
    */
    public function getLocations(): ?array {
        return $this->locations;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the event. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the onlineMeeting property value. The onlineMeeting property
     * @return OnlineMeetingInfo|null
    */
    public function getOnlineMeeting(): ?OnlineMeetingInfo {
        return $this->onlineMeeting;
    }

    /**
     * Gets the onlineMeetingProvider property value. The onlineMeetingProvider property
     * @return OnlineMeetingProviderType|null
    */
    public function getOnlineMeetingProvider(): ?OnlineMeetingProviderType {
        return $this->onlineMeetingProvider;
    }

    /**
     * Gets the onlineMeetingUrl property value. The onlineMeetingUrl property
     * @return string|null
    */
    public function getOnlineMeetingUrl(): ?string {
        return $this->onlineMeetingUrl;
    }

    /**
     * Gets the organizer property value. The organizer property
     * @return Recipient|null
    */
    public function getOrganizer(): ?Recipient {
        return $this->organizer;
    }

    /**
     * Gets the originalEndTimeZone property value. The originalEndTimeZone property
     * @return string|null
    */
    public function getOriginalEndTimeZone(): ?string {
        return $this->originalEndTimeZone;
    }

    /**
     * Gets the originalStart property value. The originalStart property
     * @return DateTime|null
    */
    public function getOriginalStart(): ?DateTime {
        return $this->originalStart;
    }

    /**
     * Gets the originalStartTimeZone property value. The originalStartTimeZone property
     * @return string|null
    */
    public function getOriginalStartTimeZone(): ?string {
        return $this->originalStartTimeZone;
    }

    /**
     * Gets the recurrence property value. The recurrence property
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the reminderMinutesBeforeStart property value. The reminderMinutesBeforeStart property
     * @return int|null
    */
    public function getReminderMinutesBeforeStart(): ?int {
        return $this->reminderMinutesBeforeStart;
    }

    /**
     * Gets the responseRequested property value. The responseRequested property
     * @return bool|null
    */
    public function getResponseRequested(): ?bool {
        return $this->responseRequested;
    }

    /**
     * Gets the responseStatus property value. The responseStatus property
     * @return ResponseStatus|null
    */
    public function getResponseStatus(): ?ResponseStatus {
        return $this->responseStatus;
    }

    /**
     * Gets the sensitivity property value. The sensitivity property
     * @return Sensitivity|null
    */
    public function getSensitivity(): ?Sensitivity {
        return $this->sensitivity;
    }

    /**
     * Gets the seriesMasterId property value. The seriesMasterId property
     * @return string|null
    */
    public function getSeriesMasterId(): ?string {
        return $this->seriesMasterId;
    }

    /**
     * Gets the showAs property value. The showAs property
     * @return FreeBusyStatus|null
    */
    public function getShowAs(): ?FreeBusyStatus {
        return $this->showAs;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the event. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Gets the start property value. The start property
     * @return DateTimeTimeZone|null
    */
    public function getStart(): ?DateTimeTimeZone {
        return $this->start;
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the transactionId property value. The transactionId property
     * @return string|null
    */
    public function getTransactionId(): ?string {
        return $this->transactionId;
    }

    /**
     * Gets the type property value. The type property
     * @return EventType|null
    */
    public function getType(): ?EventType {
        return $this->type;
    }

    /**
     * Gets the webLink property value. The webLink property
     * @return string|null
    */
    public function getWebLink(): ?string {
        return $this->webLink;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowNewTimeProposals', $this->allowNewTimeProposals);
        $writer->writeCollectionOfObjectValues('attachments', $this->attachments);
        $writer->writeCollectionOfObjectValues('attendees', $this->attendees);
        $writer->writeObjectValue('body', $this->body);
        $writer->writeStringValue('bodyPreview', $this->bodyPreview);
        $writer->writeObjectValue('calendar', $this->calendar);
        $writer->writeObjectValue('end', $this->end);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeBooleanValue('hasAttachments', $this->hasAttachments);
        $writer->writeBooleanValue('hideAttendees', $this->hideAttendees);
        $writer->writeStringValue('iCalUId', $this->iCalUId);
        $writer->writeEnumValue('importance', $this->importance);
        $writer->writeCollectionOfObjectValues('instances', $this->instances);
        $writer->writeBooleanValue('isAllDay', $this->isAllDay);
        $writer->writeBooleanValue('isCancelled', $this->isCancelled);
        $writer->writeBooleanValue('isDraft', $this->isDraft);
        $writer->writeBooleanValue('isOnlineMeeting', $this->isOnlineMeeting);
        $writer->writeBooleanValue('isOrganizer', $this->isOrganizer);
        $writer->writeBooleanValue('isReminderOn', $this->isReminderOn);
        $writer->writeObjectValue('location', $this->location);
        $writer->writeCollectionOfObjectValues('locations', $this->locations);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeObjectValue('onlineMeeting', $this->onlineMeeting);
        $writer->writeEnumValue('onlineMeetingProvider', $this->onlineMeetingProvider);
        $writer->writeStringValue('onlineMeetingUrl', $this->onlineMeetingUrl);
        $writer->writeObjectValue('organizer', $this->organizer);
        $writer->writeStringValue('originalEndTimeZone', $this->originalEndTimeZone);
        $writer->writeDateTimeValue('originalStart', $this->originalStart);
        $writer->writeStringValue('originalStartTimeZone', $this->originalStartTimeZone);
        $writer->writeObjectValue('recurrence', $this->recurrence);
        $writer->writeIntegerValue('reminderMinutesBeforeStart', $this->reminderMinutesBeforeStart);
        $writer->writeBooleanValue('responseRequested', $this->responseRequested);
        $writer->writeObjectValue('responseStatus', $this->responseStatus);
        $writer->writeEnumValue('sensitivity', $this->sensitivity);
        $writer->writeStringValue('seriesMasterId', $this->seriesMasterId);
        $writer->writeEnumValue('showAs', $this->showAs);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
        $writer->writeObjectValue('start', $this->start);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeStringValue('transactionId', $this->transactionId);
        $writer->writeEnumValue('type', $this->type);
        $writer->writeStringValue('webLink', $this->webLink);
    }

    /**
     * Sets the allowNewTimeProposals property value. true if the meeting organizer allows invitees to propose a new time when responding; otherwise, false. Optional. Default is true.
     *  @param bool|null $value Value to set for the allowNewTimeProposals property.
    */
    public function setAllowNewTimeProposals(?bool $value ): void {
        $this->allowNewTimeProposals = $value;
    }

    /**
     * Sets the attachments property value. The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
     *  @param array<Attachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value ): void {
        $this->attachments = $value;
    }

    /**
     * Sets the attendees property value. The collection of attendees for the event.
     *  @param array<Attendee>|null $value Value to set for the attendees property.
    */
    public function setAttendees(?array $value ): void {
        $this->attendees = $value;
    }

    /**
     * Sets the body property value. The body of the message associated with the event. It can be in HTML or text format.
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value ): void {
        $this->body = $value;
    }

    /**
     * Sets the bodyPreview property value. The preview of the message associated with the event. It is in text format.
     *  @param string|null $value Value to set for the bodyPreview property.
    */
    public function setBodyPreview(?string $value ): void {
        $this->bodyPreview = $value;
    }

    /**
     * Sets the calendar property value. The calendar that contains the event. Navigation property. Read-only.
     *  @param Calendar|null $value Value to set for the calendar property.
    */
    public function setCalendar(?Calendar $value ): void {
        $this->calendar = $value;
    }

    /**
     * Sets the end property value. The date, time, and time zone that the event ends. By default, the end time is in UTC.
     *  @param DateTimeTimeZone|null $value Value to set for the end property.
    */
    public function setEnd(?DateTimeTimeZone $value ): void {
        $this->end = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the event. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the hasAttachments property value. Set to true if the event has attachments.
     *  @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value ): void {
        $this->hasAttachments = $value;
    }

    /**
     * Sets the hideAttendees property value. When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. Default is false.
     *  @param bool|null $value Value to set for the hideAttendees property.
    */
    public function setHideAttendees(?bool $value ): void {
        $this->hideAttendees = $value;
    }

    /**
     * Sets the iCalUId property value. A unique identifier for an event across calendars. This ID is different for each occurrence in a recurring series. Read-only.
     *  @param string|null $value Value to set for the iCalUId property.
    */
    public function setICalUId(?string $value ): void {
        $this->iCalUId = $value;
    }

    /**
     * Sets the importance property value. The importance property
     *  @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value ): void {
        $this->importance = $value;
    }

    /**
     * Sets the instances property value. The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
     *  @param array<Event>|null $value Value to set for the instances property.
    */
    public function setInstances(?array $value ): void {
        $this->instances = $value;
    }

    /**
     * Sets the isAllDay property value. The isAllDay property
     *  @param bool|null $value Value to set for the isAllDay property.
    */
    public function setIsAllDay(?bool $value ): void {
        $this->isAllDay = $value;
    }

    /**
     * Sets the isCancelled property value. The isCancelled property
     *  @param bool|null $value Value to set for the isCancelled property.
    */
    public function setIsCancelled(?bool $value ): void {
        $this->isCancelled = $value;
    }

    /**
     * Sets the isDraft property value. The isDraft property
     *  @param bool|null $value Value to set for the isDraft property.
    */
    public function setIsDraft(?bool $value ): void {
        $this->isDraft = $value;
    }

    /**
     * Sets the isOnlineMeeting property value. The isOnlineMeeting property
     *  @param bool|null $value Value to set for the isOnlineMeeting property.
    */
    public function setIsOnlineMeeting(?bool $value ): void {
        $this->isOnlineMeeting = $value;
    }

    /**
     * Sets the isOrganizer property value. The isOrganizer property
     *  @param bool|null $value Value to set for the isOrganizer property.
    */
    public function setIsOrganizer(?bool $value ): void {
        $this->isOrganizer = $value;
    }

    /**
     * Sets the isReminderOn property value. The isReminderOn property
     *  @param bool|null $value Value to set for the isReminderOn property.
    */
    public function setIsReminderOn(?bool $value ): void {
        $this->isReminderOn = $value;
    }

    /**
     * Sets the location property value. The location property
     *  @param Location|null $value Value to set for the location property.
    */
    public function setLocation(?Location $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the locations property value. The locations property
     *  @param array<Location>|null $value Value to set for the locations property.
    */
    public function setLocations(?array $value ): void {
        $this->locations = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the event. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the onlineMeeting property value. The onlineMeeting property
     *  @param OnlineMeetingInfo|null $value Value to set for the onlineMeeting property.
    */
    public function setOnlineMeeting(?OnlineMeetingInfo $value ): void {
        $this->onlineMeeting = $value;
    }

    /**
     * Sets the onlineMeetingProvider property value. The onlineMeetingProvider property
     *  @param OnlineMeetingProviderType|null $value Value to set for the onlineMeetingProvider property.
    */
    public function setOnlineMeetingProvider(?OnlineMeetingProviderType $value ): void {
        $this->onlineMeetingProvider = $value;
    }

    /**
     * Sets the onlineMeetingUrl property value. The onlineMeetingUrl property
     *  @param string|null $value Value to set for the onlineMeetingUrl property.
    */
    public function setOnlineMeetingUrl(?string $value ): void {
        $this->onlineMeetingUrl = $value;
    }

    /**
     * Sets the organizer property value. The organizer property
     *  @param Recipient|null $value Value to set for the organizer property.
    */
    public function setOrganizer(?Recipient $value ): void {
        $this->organizer = $value;
    }

    /**
     * Sets the originalEndTimeZone property value. The originalEndTimeZone property
     *  @param string|null $value Value to set for the originalEndTimeZone property.
    */
    public function setOriginalEndTimeZone(?string $value ): void {
        $this->originalEndTimeZone = $value;
    }

    /**
     * Sets the originalStart property value. The originalStart property
     *  @param DateTime|null $value Value to set for the originalStart property.
    */
    public function setOriginalStart(?DateTime $value ): void {
        $this->originalStart = $value;
    }

    /**
     * Sets the originalStartTimeZone property value. The originalStartTimeZone property
     *  @param string|null $value Value to set for the originalStartTimeZone property.
    */
    public function setOriginalStartTimeZone(?string $value ): void {
        $this->originalStartTimeZone = $value;
    }

    /**
     * Sets the recurrence property value. The recurrence property
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the reminderMinutesBeforeStart property value. The reminderMinutesBeforeStart property
     *  @param int|null $value Value to set for the reminderMinutesBeforeStart property.
    */
    public function setReminderMinutesBeforeStart(?int $value ): void {
        $this->reminderMinutesBeforeStart = $value;
    }

    /**
     * Sets the responseRequested property value. The responseRequested property
     *  @param bool|null $value Value to set for the responseRequested property.
    */
    public function setResponseRequested(?bool $value ): void {
        $this->responseRequested = $value;
    }

    /**
     * Sets the responseStatus property value. The responseStatus property
     *  @param ResponseStatus|null $value Value to set for the responseStatus property.
    */
    public function setResponseStatus(?ResponseStatus $value ): void {
        $this->responseStatus = $value;
    }

    /**
     * Sets the sensitivity property value. The sensitivity property
     *  @param Sensitivity|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?Sensitivity $value ): void {
        $this->sensitivity = $value;
    }

    /**
     * Sets the seriesMasterId property value. The seriesMasterId property
     *  @param string|null $value Value to set for the seriesMasterId property.
    */
    public function setSeriesMasterId(?string $value ): void {
        $this->seriesMasterId = $value;
    }

    /**
     * Sets the showAs property value. The showAs property
     *  @param FreeBusyStatus|null $value Value to set for the showAs property.
    */
    public function setShowAs(?FreeBusyStatus $value ): void {
        $this->showAs = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the event. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

    /**
     * Sets the start property value. The start property
     *  @param DateTimeTimeZone|null $value Value to set for the start property.
    */
    public function setStart(?DateTimeTimeZone $value ): void {
        $this->start = $value;
    }

    /**
     * Sets the subject property value. The subject property
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the transactionId property value. The transactionId property
     *  @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value ): void {
        $this->transactionId = $value;
    }

    /**
     * Sets the type property value. The type property
     *  @param EventType|null $value Value to set for the type property.
    */
    public function setType(?EventType $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the webLink property value. The webLink property
     *  @param string|null $value Value to set for the webLink property.
    */
    public function setWebLink(?string $value ): void {
        $this->webLink = $value;
    }

}
