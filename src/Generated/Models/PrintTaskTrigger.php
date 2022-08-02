<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintTaskTrigger extends Entity implements Parsable 
{
    /**
     * @var PrintTaskDefinition|null $definition The definition property
    */
    private ?PrintTaskDefinition $definition = null;
    
    /**
     * @var PrintEvent|null $event The event property
    */
    private ?PrintEvent $event = null;
    
    /**
     * Instantiates a new printTaskTrigger and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.printTaskTrigger');
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
        return $this->definition;
    }

    /**
     * Gets the event property value. The event property
     * @return PrintEvent|null
    */
    public function getEvent(): ?PrintEvent {
        return $this->event;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'definition' => function (ParseNode $n) use ($o) { $o->setDefinition($n->getObjectValue(array(PrintTaskDefinition::class, 'createFromDiscriminatorValue'))); },
            'event' => function (ParseNode $n) use ($o) { $o->setEvent($n->getEnumValue(PrintEvent::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('definition', $this->definition);
        $writer->writeEnumValue('event', $this->event);
    }

    /**
     * Sets the definition property value. The definition property
     *  @param PrintTaskDefinition|null $value Value to set for the definition property.
    */
    public function setDefinition(?PrintTaskDefinition $value ): void {
        $this->definition = $value;
    }

    /**
     * Sets the event property value. The event property
     *  @param PrintEvent|null $value Value to set for the event property.
    */
    public function setEvent(?PrintEvent $value ): void {
        $this->event = $value;
    }

}
