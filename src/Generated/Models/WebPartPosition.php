<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WebPartPosition implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WebPartPosition and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebPartPosition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebPartPosition {
        return new WebPartPosition();
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
     * Gets the columnId property value. The columnId property
     * @return float|null
    */
    public function getColumnId(): ?float {
        $val = $this->getBackingStore()->get('columnId');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columnId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'columnId' => fn(ParseNode $n) => $o->setColumnId($n->getFloatValue()),
            'horizontalSectionId' => fn(ParseNode $n) => $o->setHorizontalSectionId($n->getFloatValue()),
            'isInVerticalSection' => fn(ParseNode $n) => $o->setIsInVerticalSection($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'webPartIndex' => fn(ParseNode $n) => $o->setWebPartIndex($n->getFloatValue()),
        ];
    }

    /**
     * Gets the horizontalSectionId property value. The horizontalSectionId property
     * @return float|null
    */
    public function getHorizontalSectionId(): ?float {
        $val = $this->getBackingStore()->get('horizontalSectionId');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'horizontalSectionId'");
    }

    /**
     * Gets the isInVerticalSection property value. The isInVerticalSection property
     * @return bool|null
    */
    public function getIsInVerticalSection(): ?bool {
        $val = $this->getBackingStore()->get('isInVerticalSection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isInVerticalSection'");
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
     * Gets the webPartIndex property value. The webPartIndex property
     * @return float|null
    */
    public function getWebPartIndex(): ?float {
        $val = $this->getBackingStore()->get('webPartIndex');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webPartIndex'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('columnId', $this->getColumnId());
        $writer->writeFloatValue('horizontalSectionId', $this->getHorizontalSectionId());
        $writer->writeBooleanValue('isInVerticalSection', $this->getIsInVerticalSection());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeFloatValue('webPartIndex', $this->getWebPartIndex());
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
     * Sets the columnId property value. The columnId property
     * @param float|null $value Value to set for the columnId property.
    */
    public function setColumnId(?float $value): void {
        $this->getBackingStore()->set('columnId', $value);
    }

    /**
     * Sets the horizontalSectionId property value. The horizontalSectionId property
     * @param float|null $value Value to set for the horizontalSectionId property.
    */
    public function setHorizontalSectionId(?float $value): void {
        $this->getBackingStore()->set('horizontalSectionId', $value);
    }

    /**
     * Sets the isInVerticalSection property value. The isInVerticalSection property
     * @param bool|null $value Value to set for the isInVerticalSection property.
    */
    public function setIsInVerticalSection(?bool $value): void {
        $this->getBackingStore()->set('isInVerticalSection', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the webPartIndex property value. The webPartIndex property
     * @param float|null $value Value to set for the webPartIndex property.
    */
    public function setWebPartIndex(?float $value): void {
        $this->getBackingStore()->set('webPartIndex', $value);
    }

}
