<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OpenShift extends ChangeTrackedEntity implements Parsable 
{
    /**
     * Instantiates a new OpenShift and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.openShift');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OpenShift
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OpenShift {
        return new OpenShift();
    }

    /**
     * Gets the draftOpenShift property value. Draft changes in the openShift are only visible to managers until they're shared.
     * @return OpenShiftItem|null
    */
    public function getDraftOpenShift(): ?OpenShiftItem {
        $val = $this->getBackingStore()->get('draftOpenShift');
        if (is_null($val) || $val instanceof OpenShiftItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'draftOpenShift'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'draftOpenShift' => fn(ParseNode $n) => $o->setDraftOpenShift($n->getObjectValue([OpenShiftItem::class, 'createFromDiscriminatorValue'])),
            'schedulingGroupId' => fn(ParseNode $n) => $o->setSchedulingGroupId($n->getStringValue()),
            'sharedOpenShift' => fn(ParseNode $n) => $o->setSharedOpenShift($n->getObjectValue([OpenShiftItem::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the schedulingGroupId property value. The ID of the schedulingGroup that contains the openShift.
     * @return string|null
    */
    public function getSchedulingGroupId(): ?string {
        $val = $this->getBackingStore()->get('schedulingGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedulingGroupId'");
    }

    /**
     * Gets the sharedOpenShift property value. The shared version of this openShift that is viewable by both employees and managers.
     * @return OpenShiftItem|null
    */
    public function getSharedOpenShift(): ?OpenShiftItem {
        $val = $this->getBackingStore()->get('sharedOpenShift');
        if (is_null($val) || $val instanceof OpenShiftItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedOpenShift'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('draftOpenShift', $this->getDraftOpenShift());
        $writer->writeStringValue('schedulingGroupId', $this->getSchedulingGroupId());
        $writer->writeObjectValue('sharedOpenShift', $this->getSharedOpenShift());
    }

    /**
     * Sets the draftOpenShift property value. Draft changes in the openShift are only visible to managers until they're shared.
     * @param OpenShiftItem|null $value Value to set for the draftOpenShift property.
    */
    public function setDraftOpenShift(?OpenShiftItem $value): void {
        $this->getBackingStore()->set('draftOpenShift', $value);
    }

    /**
     * Sets the schedulingGroupId property value. The ID of the schedulingGroup that contains the openShift.
     * @param string|null $value Value to set for the schedulingGroupId property.
    */
    public function setSchedulingGroupId(?string $value): void {
        $this->getBackingStore()->set('schedulingGroupId', $value);
    }

    /**
     * Sets the sharedOpenShift property value. The shared version of this openShift that is viewable by both employees and managers.
     * @param OpenShiftItem|null $value Value to set for the sharedOpenShift property.
    */
    public function setSharedOpenShift(?OpenShiftItem $value): void {
        $this->getBackingStore()->set('sharedOpenShift', $value);
    }

}
