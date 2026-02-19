<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExchangeAdmin extends Entity implements Parsable 
{
    /**
     * Instantiates a new ExchangeAdmin and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExchangeAdmin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExchangeAdmin {
        return new ExchangeAdmin();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'tracing' => fn(ParseNode $n) => $o->setTracing($n->getObjectValue([MessageTracingRoot::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the tracing property value. Represents a container for administrative resources to trace messages.
     * @return MessageTracingRoot|null
    */
    public function getTracing(): ?MessageTracingRoot {
        $val = $this->getBackingStore()->get('tracing');
        if (is_null($val) || $val instanceof MessageTracingRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tracing'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('tracing', $this->getTracing());
    }

    /**
     * Sets the tracing property value. Represents a container for administrative resources to trace messages.
     * @param MessageTracingRoot|null $value Value to set for the tracing property.
    */
    public function setTracing(?MessageTracingRoot $value): void {
        $this->getBackingStore()->set('tracing', $value);
    }

}
