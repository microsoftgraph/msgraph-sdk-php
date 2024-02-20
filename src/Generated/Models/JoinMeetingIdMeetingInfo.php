<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class JoinMeetingIdMeetingInfo extends MeetingInfo implements Parsable 
{
    /**
     * Instantiates a new JoinMeetingIdMeetingInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.joinMeetingIdMeetingInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return JoinMeetingIdMeetingInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): JoinMeetingIdMeetingInfo {
        return new JoinMeetingIdMeetingInfo();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'joinMeetingId' => fn(ParseNode $n) => $o->setJoinMeetingId($n->getStringValue()),
            'passcode' => fn(ParseNode $n) => $o->setPasscode($n->getStringValue()),
        ]);
    }

    /**
     * Gets the joinMeetingId property value. The ID used to join the meeting.
     * @return string|null
    */
    public function getJoinMeetingId(): ?string {
        $val = $this->getBackingStore()->get('joinMeetingId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinMeetingId'");
    }

    /**
     * Gets the passcode property value. The passcode used to join the meeting. Optional.
     * @return string|null
    */
    public function getPasscode(): ?string {
        $val = $this->getBackingStore()->get('passcode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('joinMeetingId', $this->getJoinMeetingId());
        $writer->writeStringValue('passcode', $this->getPasscode());
    }

    /**
     * Sets the joinMeetingId property value. The ID used to join the meeting.
     * @param string|null $value Value to set for the joinMeetingId property.
    */
    public function setJoinMeetingId(?string $value): void {
        $this->getBackingStore()->set('joinMeetingId', $value);
    }

    /**
     * Sets the passcode property value. The passcode used to join the meeting. Optional.
     * @param string|null $value Value to set for the passcode property.
    */
    public function setPasscode(?string $value): void {
        $this->getBackingStore()->set('passcode', $value);
    }

}
