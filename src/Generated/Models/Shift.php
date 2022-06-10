<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Shift extends ChangeTrackedEntity implements Parsable 
{
    /**
     * @var ShiftItem|null $draftShift The draft version of this shift that is viewable by managers. Required.
    */
    private ?ShiftItem $draftShift = null;
    
    /**
     * @var string|null $schedulingGroupId ID of the scheduling group the shift is part of. Required.
    */
    private ?string $schedulingGroupId = null;
    
    /**
     * @var ShiftItem|null $sharedShift The shared version of this shift that is viewable by both employees and managers. Required.
    */
    private ?ShiftItem $sharedShift = null;
    
    /**
     * @var string|null $userId ID of the user assigned to the shift. Required.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new Shift and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->draftShift;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'draftShift' => function (ParseNode $n) use ($o) { $o->setDraftShift($n->getObjectValue(array(ShiftItem::class, 'createFromDiscriminatorValue'))); },
            'schedulingGroupId' => function (ParseNode $n) use ($o) { $o->setSchedulingGroupId($n->getStringValue()); },
            'sharedShift' => function (ParseNode $n) use ($o) { $o->setSharedShift($n->getObjectValue(array(ShiftItem::class, 'createFromDiscriminatorValue'))); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the schedulingGroupId property value. ID of the scheduling group the shift is part of. Required.
     * @return string|null
    */
    public function getSchedulingGroupId(): ?string {
        return $this->schedulingGroupId;
    }

    /**
     * Gets the sharedShift property value. The shared version of this shift that is viewable by both employees and managers. Required.
     * @return ShiftItem|null
    */
    public function getSharedShift(): ?ShiftItem {
        return $this->sharedShift;
    }

    /**
     * Gets the userId property value. ID of the user assigned to the shift. Required.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('draftShift', $this->draftShift);
        $writer->writeStringValue('schedulingGroupId', $this->schedulingGroupId);
        $writer->writeObjectValue('sharedShift', $this->sharedShift);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the draftShift property value. The draft version of this shift that is viewable by managers. Required.
     *  @param ShiftItem|null $value Value to set for the draftShift property.
    */
    public function setDraftShift(?ShiftItem $value ): void {
        $this->draftShift = $value;
    }

    /**
     * Sets the schedulingGroupId property value. ID of the scheduling group the shift is part of. Required.
     *  @param string|null $value Value to set for the schedulingGroupId property.
    */
    public function setSchedulingGroupId(?string $value ): void {
        $this->schedulingGroupId = $value;
    }

    /**
     * Sets the sharedShift property value. The shared version of this shift that is viewable by both employees and managers. Required.
     *  @param ShiftItem|null $value Value to set for the sharedShift property.
    */
    public function setSharedShift(?ShiftItem $value ): void {
        $this->sharedShift = $value;
    }

    /**
     * Sets the userId property value. ID of the user assigned to the shift. Required.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
