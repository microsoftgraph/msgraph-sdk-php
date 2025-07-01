<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CallEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new CallEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallEvent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.emergencyCallEvent': return new EmergencyCallEvent();
            }
        }
        return new CallEvent();
    }

    /**
     * Gets the callEventType property value. The callEventType property
     * @return CallEventType|null
    */
    public function getCallEventType(): ?CallEventType {
        $val = $this->getBackingStore()->get('callEventType');
        if (is_null($val) || $val instanceof CallEventType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callEventType'");
    }

    /**
     * Gets the eventDateTime property value. The eventDateTime property
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callEventType' => fn(ParseNode $n) => $o->setCallEventType($n->getEnumValue(CallEventType::class)),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            'participants' => fn(ParseNode $n) => $o->setParticipants($n->getCollectionOfObjectValues([Participant::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the participants property value. The participants property
     * @return array<Participant>|null
    */
    public function getParticipants(): ?array {
        $val = $this->getBackingStore()->get('participants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Participant::class);
            /** @var array<Participant>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'participants'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('callEventType', $this->getCallEventType());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeCollectionOfObjectValues('participants', $this->getParticipants());
    }

    /**
     * Sets the callEventType property value. The callEventType property
     * @param CallEventType|null $value Value to set for the callEventType property.
    */
    public function setCallEventType(?CallEventType $value): void {
        $this->getBackingStore()->set('callEventType', $value);
    }

    /**
     * Sets the eventDateTime property value. The eventDateTime property
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the participants property value. The participants property
     * @param array<Participant>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value): void {
        $this->getBackingStore()->set('participants', $value);
    }

}
