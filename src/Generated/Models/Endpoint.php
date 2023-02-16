<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Endpoint extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new endpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.endpoint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Endpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Endpoint {
        return new Endpoint();
    }

    /**
     * Gets the capability property value. The capability property
     * @return string|null
    */
    public function getCapability(): ?string {
        return $this->getBackingStore()->get('capability');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'capability' => fn(ParseNode $n) => $o->setCapability($n->getStringValue()),
            'providerId' => fn(ParseNode $n) => $o->setProviderId($n->getStringValue()),
            'providerName' => fn(ParseNode $n) => $o->setProviderName($n->getStringValue()),
            'providerResourceId' => fn(ParseNode $n) => $o->setProviderResourceId($n->getStringValue()),
            'uri' => fn(ParseNode $n) => $o->setUri($n->getStringValue()),
        ]);
    }

    /**
     * Gets the providerId property value. The providerId property
     * @return string|null
    */
    public function getProviderId(): ?string {
        return $this->getBackingStore()->get('providerId');
    }

    /**
     * Gets the providerName property value. The providerName property
     * @return string|null
    */
    public function getProviderName(): ?string {
        return $this->getBackingStore()->get('providerName');
    }

    /**
     * Gets the providerResourceId property value. The providerResourceId property
     * @return string|null
    */
    public function getProviderResourceId(): ?string {
        return $this->getBackingStore()->get('providerResourceId');
    }

    /**
     * Gets the uri property value. The uri property
     * @return string|null
    */
    public function getUri(): ?string {
        return $this->getBackingStore()->get('uri');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('capability', $this->getCapability());
        $writer->writeStringValue('providerId', $this->getProviderId());
        $writer->writeStringValue('providerName', $this->getProviderName());
        $writer->writeStringValue('providerResourceId', $this->getProviderResourceId());
        $writer->writeStringValue('uri', $this->getUri());
    }

    /**
     * Sets the capability property value. The capability property
     * @param string|null $value Value to set for the capability property.
    */
    public function setCapability(?string $value): void {
        $this->getBackingStore()->set('capability', $value);
    }

    /**
     * Sets the providerId property value. The providerId property
     * @param string|null $value Value to set for the providerId property.
    */
    public function setProviderId(?string $value): void {
        $this->getBackingStore()->set('providerId', $value);
    }

    /**
     * Sets the providerName property value. The providerName property
     * @param string|null $value Value to set for the providerName property.
    */
    public function setProviderName(?string $value): void {
        $this->getBackingStore()->set('providerName', $value);
    }

    /**
     * Sets the providerResourceId property value. The providerResourceId property
     * @param string|null $value Value to set for the providerResourceId property.
    */
    public function setProviderResourceId(?string $value): void {
        $this->getBackingStore()->set('providerResourceId', $value);
    }

    /**
     * Sets the uri property value. The uri property
     * @param string|null $value Value to set for the uri property.
    */
    public function setUri(?string $value): void {
        $this->getBackingStore()->set('uri', $value);
    }

}
