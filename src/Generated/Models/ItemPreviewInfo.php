<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ItemPreviewInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ItemPreviewInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemPreviewInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemPreviewInfo {
        return new ItemPreviewInfo();
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
            'getUrl' => fn(ParseNode $n) => $o->setGetUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'postParameters' => fn(ParseNode $n) => $o->setPostParameters($n->getStringValue()),
            'postUrl' => fn(ParseNode $n) => $o->setPostUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the getUrl property value. The getUrl property
     * @return string|null
    */
    public function getGetUrl(): ?string {
        $val = $this->getBackingStore()->get('getUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'getUrl'");
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
     * Gets the postParameters property value. The postParameters property
     * @return string|null
    */
    public function getPostParameters(): ?string {
        $val = $this->getBackingStore()->get('postParameters');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postParameters'");
    }

    /**
     * Gets the postUrl property value. The postUrl property
     * @return string|null
    */
    public function getPostUrl(): ?string {
        $val = $this->getBackingStore()->get('postUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('getUrl', $this->getGetUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('postParameters', $this->getPostParameters());
        $writer->writeStringValue('postUrl', $this->getPostUrl());
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
     * Sets the getUrl property value. The getUrl property
     * @param string|null $value Value to set for the getUrl property.
    */
    public function setGetUrl(?string $value): void {
        $this->getBackingStore()->set('getUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the postParameters property value. The postParameters property
     * @param string|null $value Value to set for the postParameters property.
    */
    public function setPostParameters(?string $value): void {
        $this->getBackingStore()->set('postParameters', $value);
    }

    /**
     * Sets the postUrl property value. The postUrl property
     * @param string|null $value Value to set for the postUrl property.
    */
    public function setPostUrl(?string $value): void {
        $this->getBackingStore()->set('postUrl', $value);
    }

}
