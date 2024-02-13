<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Presence extends Entity implements Parsable 
{
    /**
     * Instantiates a new Presence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Presence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Presence {
        return new Presence();
    }

    /**
     * Gets the activity property value. The supplemental information to a user's availability. Possible values are Available, Away, BeRightBack, Busy, DoNotDisturb, InACall, InAConferenceCall, Inactive, InAMeeting, Offline, OffWork, OutOfOffice, PresenceUnknown, Presenting, UrgentInterruptionsOnly.
     * @return string|null
    */
    public function getActivity(): ?string {
        $val = $this->getBackingStore()->get('activity');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activity'");
    }

    /**
     * Gets the availability property value. The base presence information for a user. Possible values are Available, AvailableIdle,  Away, BeRightBack, Busy, BusyIdle, DoNotDisturb, Offline, PresenceUnknown
     * @return string|null
    */
    public function getAvailability(): ?string {
        $val = $this->getBackingStore()->get('availability');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availability'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getStringValue()),
            'availability' => fn(ParseNode $n) => $o->setAvailability($n->getStringValue()),
            'statusMessage' => fn(ParseNode $n) => $o->setStatusMessage($n->getObjectValue([PresenceStatusMessage::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the statusMessage property value. The presence status message of a user.
     * @return PresenceStatusMessage|null
    */
    public function getStatusMessage(): ?PresenceStatusMessage {
        $val = $this->getBackingStore()->get('statusMessage');
        if (is_null($val) || $val instanceof PresenceStatusMessage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusMessage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activity', $this->getActivity());
        $writer->writeStringValue('availability', $this->getAvailability());
        $writer->writeObjectValue('statusMessage', $this->getStatusMessage());
    }

    /**
     * Sets the activity property value. The supplemental information to a user's availability. Possible values are Available, Away, BeRightBack, Busy, DoNotDisturb, InACall, InAConferenceCall, Inactive, InAMeeting, Offline, OffWork, OutOfOffice, PresenceUnknown, Presenting, UrgentInterruptionsOnly.
     * @param string|null $value Value to set for the activity property.
    */
    public function setActivity(?string $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the availability property value. The base presence information for a user. Possible values are Available, AvailableIdle,  Away, BeRightBack, Busy, BusyIdle, DoNotDisturb, Offline, PresenceUnknown
     * @param string|null $value Value to set for the availability property.
    */
    public function setAvailability(?string $value): void {
        $this->getBackingStore()->set('availability', $value);
    }

    /**
     * Sets the statusMessage property value. The presence status message of a user.
     * @param PresenceStatusMessage|null $value Value to set for the statusMessage property.
    */
    public function setStatusMessage(?PresenceStatusMessage $value): void {
        $this->getBackingStore()->set('statusMessage', $value);
    }

}
