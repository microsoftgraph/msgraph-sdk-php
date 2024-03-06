<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClientUserAgent extends UserAgent implements Parsable 
{
    /**
     * Instantiates a new ClientUserAgent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callRecords.clientUserAgent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClientUserAgent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClientUserAgent {
        return new ClientUserAgent();
    }

    /**
     * Gets the azureADAppId property value. The unique identifier of the Microsoft Entra application used by this endpoint.
     * @return string|null
    */
    public function getAzureADAppId(): ?string {
        $val = $this->getBackingStore()->get('azureADAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureADAppId'");
    }

    /**
     * Gets the communicationServiceId property value. Immutable resource identifier of the Azure Communication Service associated with this endpoint based on Communication Services APIs.
     * @return string|null
    */
    public function getCommunicationServiceId(): ?string {
        $val = $this->getBackingStore()->get('communicationServiceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'communicationServiceId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureADAppId' => fn(ParseNode $n) => $o->setAzureADAppId($n->getStringValue()),
            'communicationServiceId' => fn(ParseNode $n) => $o->setCommunicationServiceId($n->getStringValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(ClientPlatform::class)),
            'productFamily' => fn(ParseNode $n) => $o->setProductFamily($n->getEnumValue(ProductFamily::class)),
        ]);
    }

    /**
     * Gets the platform property value. The platform property
     * @return ClientPlatform|null
    */
    public function getPlatform(): ?ClientPlatform {
        $val = $this->getBackingStore()->get('platform');
        if (is_null($val) || $val instanceof ClientPlatform) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platform'");
    }

    /**
     * Gets the productFamily property value. The productFamily property
     * @return ProductFamily|null
    */
    public function getProductFamily(): ?ProductFamily {
        $val = $this->getBackingStore()->get('productFamily');
        if (is_null($val) || $val instanceof ProductFamily) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productFamily'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureADAppId', $this->getAzureADAppId());
        $writer->writeStringValue('communicationServiceId', $this->getCommunicationServiceId());
        $writer->writeEnumValue('platform', $this->getPlatform());
        $writer->writeEnumValue('productFamily', $this->getProductFamily());
    }

    /**
     * Sets the azureADAppId property value. The unique identifier of the Microsoft Entra application used by this endpoint.
     * @param string|null $value Value to set for the azureADAppId property.
    */
    public function setAzureADAppId(?string $value): void {
        $this->getBackingStore()->set('azureADAppId', $value);
    }

    /**
     * Sets the communicationServiceId property value. Immutable resource identifier of the Azure Communication Service associated with this endpoint based on Communication Services APIs.
     * @param string|null $value Value to set for the communicationServiceId property.
    */
    public function setCommunicationServiceId(?string $value): void {
        $this->getBackingStore()->set('communicationServiceId', $value);
    }

    /**
     * Sets the platform property value. The platform property
     * @param ClientPlatform|null $value Value to set for the platform property.
    */
    public function setPlatform(?ClientPlatform $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the productFamily property value. The productFamily property
     * @param ProductFamily|null $value Value to set for the productFamily property.
    */
    public function setProductFamily(?ProductFamily $value): void {
        $this->getBackingStore()->set('productFamily', $value);
    }

}
