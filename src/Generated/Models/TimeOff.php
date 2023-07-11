<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeOff extends ChangeTrackedEntity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new timeOff and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.timeOff');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeOff
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeOff {
        return new TimeOff();
    }

    /**
     * Gets the draftTimeOff property value. The draft version of this timeOff that is viewable by managers. Required.
     * @return TimeOffItem|null
    */
    public function getDraftTimeOff(): ?TimeOffItem {
        $val = $this->getBackingStore()->get('draftTimeOff');
        if (is_null($val) || $val instanceof TimeOffItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'draftTimeOff'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'draftTimeOff' => fn(ParseNode $n) => $o->setDraftTimeOff($n->getObjectValue([TimeOffItem::class, 'createFromDiscriminatorValue'])),
            'sharedTimeOff' => fn(ParseNode $n) => $o->setSharedTimeOff($n->getObjectValue([TimeOffItem::class, 'createFromDiscriminatorValue'])),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the sharedTimeOff property value. The shared version of this timeOff that is viewable by both employees and managers. Required.
     * @return TimeOffItem|null
    */
    public function getSharedTimeOff(): ?TimeOffItem {
        $val = $this->getBackingStore()->get('sharedTimeOff');
        if (is_null($val) || $val instanceof TimeOffItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedTimeOff'");
    }

    /**
     * Gets the userId property value. ID of the user assigned to the timeOff. Required.
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
        $writer->writeObjectValue('draftTimeOff', $this->getDraftTimeOff());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('sharedTimeOff', $this->getSharedTimeOff());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the draftTimeOff property value. The draft version of this timeOff that is viewable by managers. Required.
     * @param TimeOffItem|null $value Value to set for the draftTimeOff property.
    */
    public function setDraftTimeOff(?TimeOffItem $value): void {
        $this->getBackingStore()->set('draftTimeOff', $value);
    }

    /**
     * Sets the sharedTimeOff property value. The shared version of this timeOff that is viewable by both employees and managers. Required.
     * @param TimeOffItem|null $value Value to set for the sharedTimeOff property.
    */
    public function setSharedTimeOff(?TimeOffItem $value): void {
        $this->getBackingStore()->set('sharedTimeOff', $value);
    }

    /**
     * Sets the userId property value. ID of the user assigned to the timeOff. Required.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
