<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MessageTracingRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new MessageTracingRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageTracingRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageTracingRoot {
        return new MessageTracingRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'messageTraces' => fn(ParseNode $n) => $o->setMessageTraces($n->getCollectionOfObjectValues([ExchangeMessageTrace::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the messageTraces property value. Represents the trace information of messages that pass through Exchange Online organizations.
     * @return array<ExchangeMessageTrace>|null
    */
    public function getMessageTraces(): ?array {
        $val = $this->getBackingStore()->get('messageTraces');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExchangeMessageTrace::class);
            /** @var array<ExchangeMessageTrace>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageTraces'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('messageTraces', $this->getMessageTraces());
    }

    /**
     * Sets the messageTraces property value. Represents the trace information of messages that pass through Exchange Online organizations.
     * @param array<ExchangeMessageTrace>|null $value Value to set for the messageTraces property.
    */
    public function setMessageTraces(?array $value): void {
        $this->getBackingStore()->set('messageTraces', $value);
    }

}
