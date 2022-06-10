<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttendeeAvailability implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AttendeeBase|null $attendee The email address and type of attendee - whether it's a person or a resource, and whether required or optional if it's a person.
    */
    private ?AttendeeBase $attendee = null;
    
    /**
     * @var FreeBusyStatus|null $availability The availability status of the attendee. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
    */
    private ?FreeBusyStatus $availability = null;
    
    /**
     * Instantiates a new attendeeAvailability and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttendeeAvailability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttendeeAvailability {
        return new AttendeeAvailability();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attendee property value. The email address and type of attendee - whether it's a person or a resource, and whether required or optional if it's a person.
     * @return AttendeeBase|null
    */
    public function getAttendee(): ?AttendeeBase {
        return $this->attendee;
    }

    /**
     * Gets the availability property value. The availability status of the attendee. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     * @return FreeBusyStatus|null
    */
    public function getAvailability(): ?FreeBusyStatus {
        return $this->availability;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attendee' => function (ParseNode $n) use ($o) { $o->setAttendee($n->getObjectValue(array(AttendeeBase::class, 'createFromDiscriminatorValue'))); },
            'availability' => function (ParseNode $n) use ($o) { $o->setAvailability($n->getEnumValue(FreeBusyStatus::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attendee', $this->attendee);
        $writer->writeEnumValue('availability', $this->availability);
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
     * Sets the attendee property value. The email address and type of attendee - whether it's a person or a resource, and whether required or optional if it's a person.
     *  @param AttendeeBase|null $value Value to set for the attendee property.
    */
    public function setAttendee(?AttendeeBase $value ): void {
        $this->attendee = $value;
    }

    /**
     * Sets the availability property value. The availability status of the attendee. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     *  @param FreeBusyStatus|null $value Value to set for the availability property.
    */
    public function setAvailability(?FreeBusyStatus $value ): void {
        $this->availability = $value;
    }

}
