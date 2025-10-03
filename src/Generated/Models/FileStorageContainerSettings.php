<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class FileStorageContainerSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new FileStorageContainerSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileStorageContainerSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileStorageContainerSettings {
        return new FileStorageContainerSettings();
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
            'isItemVersioningEnabled' => fn(ParseNode $n) => $o->setIsItemVersioningEnabled($n->getBooleanValue()),
            'isOcrEnabled' => fn(ParseNode $n) => $o->setIsOcrEnabled($n->getBooleanValue()),
            'itemMajorVersionLimit' => fn(ParseNode $n) => $o->setItemMajorVersionLimit($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isItemVersioningEnabled property value. Indicates whether versioning is enabled for items in the container. Optional. Read-write.
     * @return bool|null
    */
    public function getIsItemVersioningEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isItemVersioningEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isItemVersioningEnabled'");
    }

    /**
     * Gets the isOcrEnabled property value. Indicates whether Optical Character Recognition (OCR) is enabled for the container. The default value is false. When set to true, OCR extraction is performed for new and updated documents of supported document types, and the extracted fields in the metadata of the document enable end-user search and search-driven solutions. When set to false, existing OCR metadata is not impacted. Optional. Read-write.
     * @return bool|null
    */
    public function getIsOcrEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isOcrEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOcrEnabled'");
    }

    /**
     * Gets the itemMajorVersionLimit property value. The maximum major versions allowed for items in the container. Optional. Read-write.
     * @return int|null
    */
    public function getItemMajorVersionLimit(): ?int {
        $val = $this->getBackingStore()->get('itemMajorVersionLimit');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemMajorVersionLimit'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isItemVersioningEnabled', $this->getIsItemVersioningEnabled());
        $writer->writeBooleanValue('isOcrEnabled', $this->getIsOcrEnabled());
        $writer->writeIntegerValue('itemMajorVersionLimit', $this->getItemMajorVersionLimit());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
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
     * Sets the isItemVersioningEnabled property value. Indicates whether versioning is enabled for items in the container. Optional. Read-write.
     * @param bool|null $value Value to set for the isItemVersioningEnabled property.
    */
    public function setIsItemVersioningEnabled(?bool $value): void {
        $this->getBackingStore()->set('isItemVersioningEnabled', $value);
    }

    /**
     * Sets the isOcrEnabled property value. Indicates whether Optical Character Recognition (OCR) is enabled for the container. The default value is false. When set to true, OCR extraction is performed for new and updated documents of supported document types, and the extracted fields in the metadata of the document enable end-user search and search-driven solutions. When set to false, existing OCR metadata is not impacted. Optional. Read-write.
     * @param bool|null $value Value to set for the isOcrEnabled property.
    */
    public function setIsOcrEnabled(?bool $value): void {
        $this->getBackingStore()->set('isOcrEnabled', $value);
    }

    /**
     * Sets the itemMajorVersionLimit property value. The maximum major versions allowed for items in the container. Optional. Read-write.
     * @param int|null $value Value to set for the itemMajorVersionLimit property.
    */
    public function setItemMajorVersionLimit(?int $value): void {
        $this->getBackingStore()->set('itemMajorVersionLimit', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
