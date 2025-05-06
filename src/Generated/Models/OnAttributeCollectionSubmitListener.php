<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnAttributeCollectionSubmitListener extends AuthenticationEventListener implements Parsable 
{
    /**
     * Instantiates a new OnAttributeCollectionSubmitListener and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onAttributeCollectionSubmitListener');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnAttributeCollectionSubmitListener
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnAttributeCollectionSubmitListener {
        return new OnAttributeCollectionSubmitListener();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'handler' => fn(ParseNode $n) => $o->setHandler($n->getObjectValue([OnAttributeCollectionSubmitHandler::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the handler property value. Configuration for what to invoke if the event resolves to this listener.
     * @return OnAttributeCollectionSubmitHandler|null
    */
    public function getHandler(): ?OnAttributeCollectionSubmitHandler {
        $val = $this->getBackingStore()->get('handler');
        if (is_null($val) || $val instanceof OnAttributeCollectionSubmitHandler) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'handler'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('handler', $this->getHandler());
    }

    /**
     * Sets the handler property value. Configuration for what to invoke if the event resolves to this listener.
     * @param OnAttributeCollectionSubmitHandler|null $value Value to set for the handler property.
    */
    public function setHandler(?OnAttributeCollectionSubmitHandler $value): void {
        $this->getBackingStore()->set('handler', $value);
    }

}
