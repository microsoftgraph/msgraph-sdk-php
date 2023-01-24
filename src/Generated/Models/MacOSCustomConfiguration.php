<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class MacOSCustomConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new MacOSCustomConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSCustomConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSCustomConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSCustomConfiguration {
        return new MacOSCustomConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'payload' => fn(ParseNode $n) => $o->setPayload($n->getBinaryContent()),
            'payloadFileName' => fn(ParseNode $n) => $o->setPayloadFileName($n->getStringValue()),
            'payloadName' => fn(ParseNode $n) => $o->setPayloadName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the payload property value. Payload. (UTF8 encoded byte array)
     * @return StreamInterface|null
    */
    public function getPayload(): ?StreamInterface {
        return $this->getBackingStore()->get('payload');
    }

    /**
     * Gets the payloadFileName property value. Payload file name (.mobileconfig
     * @return string|null
    */
    public function getPayloadFileName(): ?string {
        return $this->getBackingStore()->get('payloadFileName');
    }

    /**
     * Gets the payloadName property value. Name that is displayed to the user.
     * @return string|null
    */
    public function getPayloadName(): ?string {
        return $this->getBackingStore()->get('payloadName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('payload', $this->getPayload());
        $writer->writeStringValue('payloadFileName', $this->getPayloadFileName());
        $writer->writeStringValue('payloadName', $this->getPayloadName());
    }

    /**
     * Sets the payload property value. Payload. (UTF8 encoded byte array)
     * @param StreamInterface|null $value Value to set for the payload property.
    */
    public function setPayload(?StreamInterface $value): void {
        $this->getBackingStore()->set('payload', $value);
    }

    /**
     * Sets the payloadFileName property value. Payload file name (.mobileconfig
     * @param string|null $value Value to set for the payloadFileName property.
    */
    public function setPayloadFileName(?string $value): void {
        $this->getBackingStore()->set('payloadFileName', $value);
    }

    /**
     * Sets the payloadName property value. Name that is displayed to the user.
     * @param string|null $value Value to set for the payloadName property.
    */
    public function setPayloadName(?string $value): void {
        $this->getBackingStore()->set('payloadName', $value);
    }

}
