<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TimeCard extends ChangeTrackedEntity implements Parsable 
{
    /**
     * Instantiates a new TimeCard and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.timeCard');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeCard
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeCard {
        return new TimeCard();
    }

    /**
     * Gets the breaks property value. The list of breaks associated with the timeCard.
     * @return array<TimeCardBreak>|null
    */
    public function getBreaks(): ?array {
        $val = $this->getBackingStore()->get('breaks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TimeCardBreak::class);
            /** @var array<TimeCardBreak>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'breaks'");
    }

    /**
     * Gets the clockInEvent property value. The clock-in event of the timeCard.
     * @return TimeCardEvent|null
    */
    public function getClockInEvent(): ?TimeCardEvent {
        $val = $this->getBackingStore()->get('clockInEvent');
        if (is_null($val) || $val instanceof TimeCardEvent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clockInEvent'");
    }

    /**
     * Gets the clockOutEvent property value. The clock-out event of the timeCard.
     * @return TimeCardEvent|null
    */
    public function getClockOutEvent(): ?TimeCardEvent {
        $val = $this->getBackingStore()->get('clockOutEvent');
        if (is_null($val) || $val instanceof TimeCardEvent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clockOutEvent'");
    }

    /**
     * Gets the confirmedBy property value. Indicates whether this timeCard entry is confirmed. The possible values are: none, user, manager, unknownFutureValue.
     * @return ConfirmedBy|null
    */
    public function getConfirmedBy(): ?ConfirmedBy {
        $val = $this->getBackingStore()->get('confirmedBy');
        if (is_null($val) || $val instanceof ConfirmedBy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'confirmedBy'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'breaks' => fn(ParseNode $n) => $o->setBreaks($n->getCollectionOfObjectValues([TimeCardBreak::class, 'createFromDiscriminatorValue'])),
            'clockInEvent' => fn(ParseNode $n) => $o->setClockInEvent($n->getObjectValue([TimeCardEvent::class, 'createFromDiscriminatorValue'])),
            'clockOutEvent' => fn(ParseNode $n) => $o->setClockOutEvent($n->getObjectValue([TimeCardEvent::class, 'createFromDiscriminatorValue'])),
            'confirmedBy' => fn(ParseNode $n) => $o->setConfirmedBy($n->getEnumValue(ConfirmedBy::class)),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'originalEntry' => fn(ParseNode $n) => $o->setOriginalEntry($n->getObjectValue([TimeCardEntry::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(TimeCardState::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the notes property value. Notes about the timeCard.
     * @return ItemBody|null
    */
    public function getNotes(): ?ItemBody {
        $val = $this->getBackingStore()->get('notes');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Gets the originalEntry property value. The original timeCardEntry of the timeCard before it was edited.
     * @return TimeCardEntry|null
    */
    public function getOriginalEntry(): ?TimeCardEntry {
        $val = $this->getBackingStore()->get('originalEntry');
        if (is_null($val) || $val instanceof TimeCardEntry) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originalEntry'");
    }

    /**
     * Gets the state property value. The current state of the timeCard during its life cycle. The possible values are: clockedIn, onBreak, clockedOut, unknownFutureValue.
     * @return TimeCardState|null
    */
    public function getState(): ?TimeCardState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof TimeCardState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the userId property value. User ID to which the timeCard belongs.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('breaks', $this->getBreaks());
        $writer->writeObjectValue('clockInEvent', $this->getClockInEvent());
        $writer->writeObjectValue('clockOutEvent', $this->getClockOutEvent());
        $writer->writeEnumValue('confirmedBy', $this->getConfirmedBy());
        $writer->writeObjectValue('notes', $this->getNotes());
        $writer->writeObjectValue('originalEntry', $this->getOriginalEntry());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the breaks property value. The list of breaks associated with the timeCard.
     * @param array<TimeCardBreak>|null $value Value to set for the breaks property.
    */
    public function setBreaks(?array $value): void {
        $this->getBackingStore()->set('breaks', $value);
    }

    /**
     * Sets the clockInEvent property value. The clock-in event of the timeCard.
     * @param TimeCardEvent|null $value Value to set for the clockInEvent property.
    */
    public function setClockInEvent(?TimeCardEvent $value): void {
        $this->getBackingStore()->set('clockInEvent', $value);
    }

    /**
     * Sets the clockOutEvent property value. The clock-out event of the timeCard.
     * @param TimeCardEvent|null $value Value to set for the clockOutEvent property.
    */
    public function setClockOutEvent(?TimeCardEvent $value): void {
        $this->getBackingStore()->set('clockOutEvent', $value);
    }

    /**
     * Sets the confirmedBy property value. Indicates whether this timeCard entry is confirmed. The possible values are: none, user, manager, unknownFutureValue.
     * @param ConfirmedBy|null $value Value to set for the confirmedBy property.
    */
    public function setConfirmedBy(?ConfirmedBy $value): void {
        $this->getBackingStore()->set('confirmedBy', $value);
    }

    /**
     * Sets the notes property value. Notes about the timeCard.
     * @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the originalEntry property value. The original timeCardEntry of the timeCard before it was edited.
     * @param TimeCardEntry|null $value Value to set for the originalEntry property.
    */
    public function setOriginalEntry(?TimeCardEntry $value): void {
        $this->getBackingStore()->set('originalEntry', $value);
    }

    /**
     * Sets the state property value. The current state of the timeCard during its life cycle. The possible values are: clockedIn, onBreak, clockedOut, unknownFutureValue.
     * @param TimeCardState|null $value Value to set for the state property.
    */
    public function setState(?TimeCardState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the userId property value. User ID to which the timeCard belongs.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
