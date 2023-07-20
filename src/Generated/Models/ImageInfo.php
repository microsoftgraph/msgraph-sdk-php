<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ImageInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new imageInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImageInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImageInfo {
        return new ImageInfo();
    }

    /**
     * Gets the addImageQuery property value. Optional; parameter used to indicate the server is able to render image dynamically in response to parameterization. For example – a high contrast image
     * @return bool|null
    */
    public function getAddImageQuery(): ?bool {
        $val = $this->getBackingStore()->get('addImageQuery');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addImageQuery'");
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the alternateText property value. Optional; alt-text accessible content for the image
     * @return string|null
    */
    public function getAlternateText(): ?string {
        $val = $this->getBackingStore()->get('alternateText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alternateText'");
    }

    /**
     * Gets the alternativeText property value. The alternativeText property
     * @return string|null
    */
    public function getAlternativeText(): ?string {
        $val = $this->getBackingStore()->get('alternativeText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alternativeText'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
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
            'addImageQuery' => fn(ParseNode $n) => $o->setAddImageQuery($n->getBooleanValue()),
            'alternateText' => fn(ParseNode $n) => $o->setAlternateText($n->getStringValue()),
            'alternativeText' => fn(ParseNode $n) => $o->setAlternativeText($n->getStringValue()),
            'iconUrl' => fn(ParseNode $n) => $o->setIconUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the iconUrl property value. Optional; URI that points to an icon which represents the application used to generate the activity
     * @return string|null
    */
    public function getIconUrl(): ?string {
        $val = $this->getBackingStore()->get('iconUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iconUrl'");
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
        $writer->writeBooleanValue('addImageQuery', $this->getAddImageQuery());
        $writer->writeStringValue('alternateText', $this->getAlternateText());
        $writer->writeStringValue('alternativeText', $this->getAlternativeText());
        $writer->writeStringValue('iconUrl', $this->getIconUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the addImageQuery property value. Optional; parameter used to indicate the server is able to render image dynamically in response to parameterization. For example – a high contrast image
     * @param bool|null $value Value to set for the addImageQuery property.
    */
    public function setAddImageQuery(?bool $value): void {
        $this->getBackingStore()->set('addImageQuery', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alternateText property value. Optional; alt-text accessible content for the image
     * @param string|null $value Value to set for the alternateText property.
    */
    public function setAlternateText(?string $value): void {
        $this->getBackingStore()->set('alternateText', $value);
    }

    /**
     * Sets the alternativeText property value. The alternativeText property
     * @param string|null $value Value to set for the alternativeText property.
    */
    public function setAlternativeText(?string $value): void {
        $this->getBackingStore()->set('alternativeText', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the iconUrl property value. Optional; URI that points to an icon which represents the application used to generate the activity
     * @param string|null $value Value to set for the iconUrl property.
    */
    public function setIconUrl(?string $value): void {
        $this->getBackingStore()->set('iconUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
