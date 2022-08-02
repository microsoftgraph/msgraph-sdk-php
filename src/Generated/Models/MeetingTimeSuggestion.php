<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingTimeSuggestion implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<AttendeeAvailability>|null $attendeeAvailability An array that shows the availability status of each attendee for this meeting suggestion.
    */
    private ?array $attendeeAvailability = null;
    
    /**
     * @var float|null $confidence A percentage that represents the likelhood of all the attendees attending.
    */
    private ?float $confidence = null;
    
    /**
     * @var array<Location>|null $locations An array that specifies the name and geographic location of each meeting location for this meeting suggestion.
    */
    private ?array $locations = null;
    
    /**
     * @var TimeSlot|null $meetingTimeSlot A time period suggested for the meeting.
    */
    private ?TimeSlot $meetingTimeSlot = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $order Order of meeting time suggestions sorted by their computed confidence value from high to low, then by chronology if there are suggestions with the same confidence.
    */
    private ?int $order = null;
    
    /**
     * @var FreeBusyStatus|null $organizerAvailability Availability of the meeting organizer for this meeting suggestion. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
    */
    private ?FreeBusyStatus $organizerAvailability = null;
    
    /**
     * @var string|null $suggestionReason Reason for suggesting the meeting time.
    */
    private ?string $suggestionReason = null;
    
    /**
     * Instantiates a new meetingTimeSuggestion and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.meetingTimeSuggestion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingTimeSuggestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingTimeSuggestion {
        return new MeetingTimeSuggestion();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attendeeAvailability property value. An array that shows the availability status of each attendee for this meeting suggestion.
     * @return array<AttendeeAvailability>|null
    */
    public function getAttendeeAvailability(): ?array {
        return $this->attendeeAvailability;
    }

    /**
     * Gets the confidence property value. A percentage that represents the likelhood of all the attendees attending.
     * @return float|null
    */
    public function getConfidence(): ?float {
        return $this->confidence;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attendeeAvailability' => function (ParseNode $n) use ($o) { $o->setAttendeeAvailability($n->getCollectionOfObjectValues(array(AttendeeAvailability::class, 'createFromDiscriminatorValue'))); },
            'confidence' => function (ParseNode $n) use ($o) { $o->setConfidence($n->getFloatValue()); },
            'locations' => function (ParseNode $n) use ($o) { $o->setLocations($n->getCollectionOfObjectValues(array(Location::class, 'createFromDiscriminatorValue'))); },
            'meetingTimeSlot' => function (ParseNode $n) use ($o) { $o->setMeetingTimeSlot($n->getObjectValue(array(TimeSlot::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'order' => function (ParseNode $n) use ($o) { $o->setOrder($n->getIntegerValue()); },
            'organizerAvailability' => function (ParseNode $n) use ($o) { $o->setOrganizerAvailability($n->getEnumValue(FreeBusyStatus::class)); },
            'suggestionReason' => function (ParseNode $n) use ($o) { $o->setSuggestionReason($n->getStringValue()); },
        ];
    }

    /**
     * Gets the locations property value. An array that specifies the name and geographic location of each meeting location for this meeting suggestion.
     * @return array<Location>|null
    */
    public function getLocations(): ?array {
        return $this->locations;
    }

    /**
     * Gets the meetingTimeSlot property value. A time period suggested for the meeting.
     * @return TimeSlot|null
    */
    public function getMeetingTimeSlot(): ?TimeSlot {
        return $this->meetingTimeSlot;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the order property value. Order of meeting time suggestions sorted by their computed confidence value from high to low, then by chronology if there are suggestions with the same confidence.
     * @return int|null
    */
    public function getOrder(): ?int {
        return $this->order;
    }

    /**
     * Gets the organizerAvailability property value. Availability of the meeting organizer for this meeting suggestion. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     * @return FreeBusyStatus|null
    */
    public function getOrganizerAvailability(): ?FreeBusyStatus {
        return $this->organizerAvailability;
    }

    /**
     * Gets the suggestionReason property value. Reason for suggesting the meeting time.
     * @return string|null
    */
    public function getSuggestionReason(): ?string {
        return $this->suggestionReason;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attendeeAvailability', $this->attendeeAvailability);
        $writer->writeFloatValue('confidence', $this->confidence);
        $writer->writeCollectionOfObjectValues('locations', $this->locations);
        $writer->writeObjectValue('meetingTimeSlot', $this->meetingTimeSlot);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('order', $this->order);
        $writer->writeEnumValue('organizerAvailability', $this->organizerAvailability);
        $writer->writeStringValue('suggestionReason', $this->suggestionReason);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the attendeeAvailability property value. An array that shows the availability status of each attendee for this meeting suggestion.
     *  @param array<AttendeeAvailability>|null $value Value to set for the attendeeAvailability property.
    */
    public function setAttendeeAvailability(?array $value ): void {
        $this->attendeeAvailability = $value;
    }

    /**
     * Sets the confidence property value. A percentage that represents the likelhood of all the attendees attending.
     *  @param float|null $value Value to set for the confidence property.
    */
    public function setConfidence(?float $value ): void {
        $this->confidence = $value;
    }

    /**
     * Sets the locations property value. An array that specifies the name and geographic location of each meeting location for this meeting suggestion.
     *  @param array<Location>|null $value Value to set for the locations property.
    */
    public function setLocations(?array $value ): void {
        $this->locations = $value;
    }

    /**
     * Sets the meetingTimeSlot property value. A time period suggested for the meeting.
     *  @param TimeSlot|null $value Value to set for the meetingTimeSlot property.
    */
    public function setMeetingTimeSlot(?TimeSlot $value ): void {
        $this->meetingTimeSlot = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the order property value. Order of meeting time suggestions sorted by their computed confidence value from high to low, then by chronology if there are suggestions with the same confidence.
     *  @param int|null $value Value to set for the order property.
    */
    public function setOrder(?int $value ): void {
        $this->order = $value;
    }

    /**
     * Sets the organizerAvailability property value. Availability of the meeting organizer for this meeting suggestion. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     *  @param FreeBusyStatus|null $value Value to set for the organizerAvailability property.
    */
    public function setOrganizerAvailability(?FreeBusyStatus $value ): void {
        $this->organizerAvailability = $value;
    }

    /**
     * Sets the suggestionReason property value. Reason for suggesting the meeting time.
     *  @param string|null $value Value to set for the suggestionReason property.
    */
    public function setSuggestionReason(?string $value ): void {
        $this->suggestionReason = $value;
    }

}
