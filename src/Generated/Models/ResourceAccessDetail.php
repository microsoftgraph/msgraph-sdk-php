<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ResourceAccessDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ResourceAccessDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourceAccessDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResourceAccessDetail {
        return new ResourceAccessDetail();
    }

    /**
     * Gets the accessType property value. The accessType property
     * @return ResourceAccessType|null
    */
    public function getAccessType(): ?ResourceAccessType {
        $val = $this->getBackingStore()->get('accessType');
        if (is_null($val) || $val instanceof ResourceAccessType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessType'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessType' => fn(ParseNode $n) => $o->setAccessType($n->getEnumValue(ResourceAccessType::class)),
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getStringValue()),
            'isCrossPromptInjectionDetected' => fn(ParseNode $n) => $o->setIsCrossPromptInjectionDetected($n->getBooleanValue()),
            'labelId' => fn(ParseNode $n) => $o->setLabelId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ResourceAccessStatus::class)),
            'storageId' => fn(ParseNode $n) => $o->setStorageId($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the identifier property value. Unique identifier of the resource accessed.
     * @return string|null
    */
    public function getIdentifier(): ?string {
        $val = $this->getBackingStore()->get('identifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifier'");
    }

    /**
     * Gets the isCrossPromptInjectionDetected property value. Indicates whether cross-prompt injection was detected during the access attempt.
     * @return bool|null
    */
    public function getIsCrossPromptInjectionDetected(): ?bool {
        $val = $this->getBackingStore()->get('isCrossPromptInjectionDetected');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCrossPromptInjectionDetected'");
    }

    /**
     * Gets the labelId property value. Identifier for the sensitivity label applied to the resource, if any.
     * @return string|null
    */
    public function getLabelId(): ?string {
        $val = $this->getBackingStore()->get('labelId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'labelId'");
    }

    /**
     * Gets the name property value. Name of the resource accessed.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the status property value. The status property
     * @return ResourceAccessStatus|null
    */
    public function getStatus(): ?ResourceAccessStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ResourceAccessStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the storageId property value. Identifier for the resource in its native storage format. For SharePoint resources, this is the unique identifier of the list item.  For other resources, this is the name of the location, such as Box, Dropbox, Exchange, or Google Drive.
     * @return string|null
    */
    public function getStorageId(): ?string {
        $val = $this->getBackingStore()->get('storageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageId'");
    }

    /**
     * Gets the url property value. URL of the resource accessed.
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessType', $this->getAccessType());
        $writer->writeStringValue('identifier', $this->getIdentifier());
        $writer->writeBooleanValue('isCrossPromptInjectionDetected', $this->getIsCrossPromptInjectionDetected());
        $writer->writeStringValue('labelId', $this->getLabelId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('storageId', $this->getStorageId());
        $writer->writeStringValue('url', $this->getUrl());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessType property value. The accessType property
     * @param ResourceAccessType|null $value Value to set for the accessType property.
    */
    public function setAccessType(?ResourceAccessType $value): void {
        $this->getBackingStore()->set('accessType', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the identifier property value. Unique identifier of the resource accessed.
     * @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value): void {
        $this->getBackingStore()->set('identifier', $value);
    }

    /**
     * Sets the isCrossPromptInjectionDetected property value. Indicates whether cross-prompt injection was detected during the access attempt.
     * @param bool|null $value Value to set for the isCrossPromptInjectionDetected property.
    */
    public function setIsCrossPromptInjectionDetected(?bool $value): void {
        $this->getBackingStore()->set('isCrossPromptInjectionDetected', $value);
    }

    /**
     * Sets the labelId property value. Identifier for the sensitivity label applied to the resource, if any.
     * @param string|null $value Value to set for the labelId property.
    */
    public function setLabelId(?string $value): void {
        $this->getBackingStore()->set('labelId', $value);
    }

    /**
     * Sets the name property value. Name of the resource accessed.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param ResourceAccessStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ResourceAccessStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the storageId property value. Identifier for the resource in its native storage format. For SharePoint resources, this is the unique identifier of the list item.  For other resources, this is the name of the location, such as Box, Dropbox, Exchange, or Google Drive.
     * @param string|null $value Value to set for the storageId property.
    */
    public function setStorageId(?string $value): void {
        $this->getBackingStore()->set('storageId', $value);
    }

    /**
     * Sets the url property value. URL of the resource accessed.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
