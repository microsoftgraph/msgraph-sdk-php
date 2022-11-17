<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Shift extends ChangeTrackedEntity implements Parsable 
{
    /**
     * Instantiates a new shift and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.shift');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Shift
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Shift {
        return new Shift();
    }

    /**
     * Gets the draftShift property value. The draft version of this shift that is viewable by managers. Required.
     * @return ShiftItem|null
    */
    public function getDraftShift(): ?ShiftItem {
        return $this->getBackingStore()->get('draftShift');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'draftShift' => fn(ParseNode $n) => $o->setDraftShift($n->getObjectValue([ShiftItem::class, 'createFromDiscriminatorValue'])),
            'schedulingGroupId' => fn(ParseNode $n) => $o->setSchedulingGroupId($n->getStringValue()),
            'sharedShift' => fn(ParseNode $n) => $o->setSharedShift($n->getObjectValue([ShiftItem::class, 'createFromDiscriminatorValue'])),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the schedulingGroupId property value. ID of the scheduling group the shift is part of. Required.
     * @return string|null
    */
    public function getSchedulingGroupId(): ?string {
        return $this->getBackingStore()->get('schedulingGroupId');
    }

    /**
     * Gets the sharedShift property value. The shared version of this shift that is viewable by both employees and managers. Required.
     * @return ShiftItem|null
    */
    public function getSharedShift(): ?ShiftItem {
        return $this->getBackingStore()->get('sharedShift');
    }

    /**
     * Gets the userId property value. ID of the user assigned to the shift. Required.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('draftShift', $this->getDraftShift());
        $writer->writeStringValue('schedulingGroupId', $this->getSchedulingGroupId());
        $writer->writeObjectValue('sharedShift', $this->getSharedShift());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the draftShift property value. The draft version of this shift that is viewable by managers. Required.
     *  @param ShiftItem|null $value Value to set for the draftShift property.
    */
    public function setDraftShift(?ShiftItem $value): void {
        $this->getBackingStore()->set('draftShift', $value);
    }

    /**
     * Sets the schedulingGroupId property value. ID of the scheduling group the shift is part of. Required.
     *  @param string|null $value Value to set for the schedulingGroupId property.
    */
    public function setSchedulingGroupId(?string $value): void {
        $this->getBackingStore()->set('schedulingGroupId', $value);
    }

    /**
     * Sets the sharedShift property value. The shared version of this shift that is viewable by both employees and managers. Required.
     *  @param ShiftItem|null $value Value to set for the sharedShift property.
    */
    public function setSharedShift(?ShiftItem $value): void {
        $this->getBackingStore()->set('sharedShift', $value);
    }

    /**
     * Sets the userId property value. ID of the user assigned to the shift. Required.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
