<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnInteractiveAuthFlowStartListener extends AuthenticationEventListener implements Parsable 
{
    /**
     * Instantiates a new OnInteractiveAuthFlowStartListener and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onInteractiveAuthFlowStartListener');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnInteractiveAuthFlowStartListener
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnInteractiveAuthFlowStartListener {
        return new OnInteractiveAuthFlowStartListener();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'handler' => fn(ParseNode $n) => $o->setHandler($n->getObjectValue([OnInteractiveAuthFlowStartHandler::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the handler property value. Required. Configuration for what to invoke if the event resolves to this listener. This lets us define potential handler configurations per-event.
     * @return OnInteractiveAuthFlowStartHandler|null
    */
    public function getHandler(): ?OnInteractiveAuthFlowStartHandler {
        $val = $this->getBackingStore()->get('handler');
        if (is_null($val) || $val instanceof OnInteractiveAuthFlowStartHandler) {
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
     * Sets the handler property value. Required. Configuration for what to invoke if the event resolves to this listener. This lets us define potential handler configurations per-event.
     * @param OnInteractiveAuthFlowStartHandler|null $value Value to set for the handler property.
    */
    public function setHandler(?OnInteractiveAuthFlowStartHandler $value): void {
        $this->getBackingStore()->set('handler', $value);
    }

}
