<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeltaParticipants extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeltaParticipants and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeltaParticipants
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeltaParticipants {
        return new DeltaParticipants();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'participants' => fn(ParseNode $n) => $o->setParticipants($n->getCollectionOfObjectValues([Participant::class, 'createFromDiscriminatorValue'])),
            'sequenceNumber' => fn(ParseNode $n) => $o->setSequenceNumber($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the participants property value. The collection of participants that were updated since the last roster update.
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
     * Gets the sequenceNumber property value. The sequence number for the roster update that is used to identify the notification order.
     * @return int|null
    */
    public function getSequenceNumber(): ?int {
        $val = $this->getBackingStore()->get('sequenceNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sequenceNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('participants', $this->getParticipants());
        $writer->writeIntegerValue('sequenceNumber', $this->getSequenceNumber());
    }

    /**
     * Sets the participants property value. The collection of participants that were updated since the last roster update.
     * @param array<Participant>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value): void {
        $this->getBackingStore()->set('participants', $value);
    }

    /**
     * Sets the sequenceNumber property value. The sequence number for the roster update that is used to identify the notification order.
     * @param int|null $value Value to set for the sequenceNumber property.
    */
    public function setSequenceNumber(?int $value): void {
        $this->getBackingStore()->set('sequenceNumber', $value);
    }

}
