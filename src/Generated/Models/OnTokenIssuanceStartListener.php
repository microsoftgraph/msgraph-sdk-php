<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnTokenIssuanceStartListener extends AuthenticationEventListener implements Parsable 
{
    /**
     * Instantiates a new OnTokenIssuanceStartListener and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onTokenIssuanceStartListener');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnTokenIssuanceStartListener
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnTokenIssuanceStartListener {
        return new OnTokenIssuanceStartListener();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'handler' => fn(ParseNode $n) => $o->setHandler($n->getObjectValue([OnTokenIssuanceStartHandler::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the handler property value. The handler to invoke when conditions are met for this onTokenIssuanceStartListener.
     * @return OnTokenIssuanceStartHandler|null
    */
    public function getHandler(): ?OnTokenIssuanceStartHandler {
        $val = $this->getBackingStore()->get('handler');
        if (is_null($val) || $val instanceof OnTokenIssuanceStartHandler) {
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
     * Sets the handler property value. The handler to invoke when conditions are met for this onTokenIssuanceStartListener.
     * @param OnTokenIssuanceStartHandler|null $value Value to set for the handler property.
    */
    public function setHandler(?OnTokenIssuanceStartHandler $value): void {
        $this->getBackingStore()->set('handler', $value);
    }

}
