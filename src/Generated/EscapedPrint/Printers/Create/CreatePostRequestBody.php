<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Printers\Create;

use Microsoft\Graph\Generated\Models\PrintCertificateSigningRequest;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CreatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new createPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreatePostRequestBody {
        return new CreatePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the certificateSigningRequest property value. The certificateSigningRequest property
     * @return PrintCertificateSigningRequest|null
    */
    public function getCertificateSigningRequest(): ?PrintCertificateSigningRequest {
        return $this->getBackingStore()->get('certificateSigningRequest');
    }

    /**
     * Gets the connectorId property value. The connectorId property
     * @return string|null
    */
    public function getConnectorId(): ?string {
        return $this->getBackingStore()->get('connectorId');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'certificateSigningRequest' => fn(ParseNode $n) => $o->setCertificateSigningRequest($n->getObjectValue([PrintCertificateSigningRequest::class, 'createFromDiscriminatorValue'])),
            'connectorId' => fn(ParseNode $n) => $o->setConnectorId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'hasPhysicalDevice' => fn(ParseNode $n) => $o->setHasPhysicalDevice($n->getBooleanValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'physicalDeviceId' => fn(ParseNode $n) => $o->setPhysicalDeviceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the hasPhysicalDevice property value. The hasPhysicalDevice property
     * @return bool|null
    */
    public function getHasPhysicalDevice(): ?bool {
        return $this->getBackingStore()->get('hasPhysicalDevice');
    }

    /**
     * Gets the manufacturer property value. The manufacturer property
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the model property value. The model property
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Gets the physicalDeviceId property value. The physicalDeviceId property
     * @return string|null
    */
    public function getPhysicalDeviceId(): ?string {
        return $this->getBackingStore()->get('physicalDeviceId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('certificateSigningRequest', $this->getCertificateSigningRequest());
        $writer->writeStringValue('connectorId', $this->getConnectorId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('hasPhysicalDevice', $this->getHasPhysicalDevice());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeStringValue('physicalDeviceId', $this->getPhysicalDeviceId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the certificateSigningRequest property value. The certificateSigningRequest property
     * @param PrintCertificateSigningRequest|null $value Value to set for the certificateSigningRequest property.
    */
    public function setCertificateSigningRequest(?PrintCertificateSigningRequest $value): void {
        $this->getBackingStore()->set('certificateSigningRequest', $value);
    }

    /**
     * Sets the connectorId property value. The connectorId property
     * @param string|null $value Value to set for the connectorId property.
    */
    public function setConnectorId(?string $value): void {
        $this->getBackingStore()->set('connectorId', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the hasPhysicalDevice property value. The hasPhysicalDevice property
     * @param bool|null $value Value to set for the hasPhysicalDevice property.
    */
    public function setHasPhysicalDevice(?bool $value): void {
        $this->getBackingStore()->set('hasPhysicalDevice', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacturer property
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. The model property
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the physicalDeviceId property value. The physicalDeviceId property
     * @param string|null $value Value to set for the physicalDeviceId property.
    */
    public function setPhysicalDeviceId(?string $value): void {
        $this->getBackingStore()->set('physicalDeviceId', $value);
    }

}
