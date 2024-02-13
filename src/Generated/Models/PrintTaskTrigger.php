<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintTaskTrigger extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrintTaskTrigger and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintTaskTrigger
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintTaskTrigger {
        return new PrintTaskTrigger();
    }

    /**
     * Gets the definition property value. The definition property
     * @return PrintTaskDefinition|null
    */
    public function getDefinition(): ?PrintTaskDefinition {
        $val = $this->getBackingStore()->get('definition');
        if (is_null($val) || $val instanceof PrintTaskDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definition'");
    }

    /**
     * Gets the event property value. The event property
     * @return PrintEvent|null
    */
    public function getEvent(): ?PrintEvent {
        $val = $this->getBackingStore()->get('event');
        if (is_null($val) || $val instanceof PrintEvent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'event'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'definition' => fn(ParseNode $n) => $o->setDefinition($n->getObjectValue([PrintTaskDefinition::class, 'createFromDiscriminatorValue'])),
            'event' => fn(ParseNode $n) => $o->setEvent($n->getEnumValue(PrintEvent::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('definition', $this->getDefinition());
        $writer->writeEnumValue('event', $this->getEvent());
    }

    /**
     * Sets the definition property value. The definition property
     * @param PrintTaskDefinition|null $value Value to set for the definition property.
    */
    public function setDefinition(?PrintTaskDefinition $value): void {
        $this->getBackingStore()->set('definition', $value);
    }

    /**
     * Sets the event property value. The event property
     * @param PrintEvent|null $value Value to set for the event property.
    */
    public function setEvent(?PrintEvent $value): void {
        $this->getBackingStore()->set('event', $value);
    }

}
