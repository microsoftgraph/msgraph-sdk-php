<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class BrowseQueryResponseItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new BrowseQueryResponseItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowseQueryResponseItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowseQueryResponseItem {
        return new BrowseQueryResponseItem();
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
            'itemKey' => fn(ParseNode $n) => $o->setItemKey($n->getStringValue()),
            'itemsCount' => fn(ParseNode $n) => $o->setItemsCount($n->getIntegerValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sizeInBytes' => fn(ParseNode $n) => $o->setSizeInBytes($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(BrowseQueryResponseItemType::class)),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemKey property value. The itemKey property
     * @return string|null
    */
    public function getItemKey(): ?string {
        $val = $this->getBackingStore()->get('itemKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemKey'");
    }

    /**
     * Gets the itemsCount property value. The itemsCount property
     * @return int|null
    */
    public function getItemsCount(): ?int {
        $val = $this->getBackingStore()->get('itemsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemsCount'");
    }

    /**
     * Gets the name property value. The name property
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
     * Gets the sizeInBytes property value. The sizeInBytes property
     * @return string|null
    */
    public function getSizeInBytes(): ?string {
        $val = $this->getBackingStore()->get('sizeInBytes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sizeInBytes'");
    }

    /**
     * Gets the type property value. The type property
     * @return BrowseQueryResponseItemType|null
    */
    public function getType(): ?BrowseQueryResponseItemType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof BrowseQueryResponseItemType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Gets the webUrl property value. The webUrl property
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('itemKey', $this->getItemKey());
        $writer->writeIntegerValue('itemsCount', $this->getItemsCount());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sizeInBytes', $this->getSizeInBytes());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
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
     * Sets the itemKey property value. The itemKey property
     * @param string|null $value Value to set for the itemKey property.
    */
    public function setItemKey(?string $value): void {
        $this->getBackingStore()->set('itemKey', $value);
    }

    /**
     * Sets the itemsCount property value. The itemsCount property
     * @param int|null $value Value to set for the itemsCount property.
    */
    public function setItemsCount(?int $value): void {
        $this->getBackingStore()->set('itemsCount', $value);
    }

    /**
     * Sets the name property value. The name property
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
     * Sets the sizeInBytes property value. The sizeInBytes property
     * @param string|null $value Value to set for the sizeInBytes property.
    */
    public function setSizeInBytes(?string $value): void {
        $this->getBackingStore()->set('sizeInBytes', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param BrowseQueryResponseItemType|null $value Value to set for the type property.
    */
    public function setType(?BrowseQueryResponseItemType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the webUrl property value. The webUrl property
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
