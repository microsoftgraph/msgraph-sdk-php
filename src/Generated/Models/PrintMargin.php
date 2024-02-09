<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PrintMargin implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PrintMargin and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintMargin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintMargin {
        return new PrintMargin();
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
     * Gets the bottom property value. The margin in microns from the bottom edge.
     * @return int|null
    */
    public function getBottom(): ?int {
        $val = $this->getBackingStore()->get('bottom');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bottom'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bottom' => fn(ParseNode $n) => $o->setBottom($n->getIntegerValue()),
            'left' => fn(ParseNode $n) => $o->setLeft($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'right' => fn(ParseNode $n) => $o->setRight($n->getIntegerValue()),
            'top' => fn(ParseNode $n) => $o->setTop($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the left property value. The margin in microns from the left edge.
     * @return int|null
    */
    public function getLeft(): ?int {
        $val = $this->getBackingStore()->get('left');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'left'");
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
     * Gets the right property value. The margin in microns from the right edge.
     * @return int|null
    */
    public function getRight(): ?int {
        $val = $this->getBackingStore()->get('right');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'right'");
    }

    /**
     * Gets the top property value. The margin in microns from the top edge.
     * @return int|null
    */
    public function getTop(): ?int {
        $val = $this->getBackingStore()->get('top');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'top'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('bottom', $this->getBottom());
        $writer->writeIntegerValue('left', $this->getLeft());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('right', $this->getRight());
        $writer->writeIntegerValue('top', $this->getTop());
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
     * Sets the bottom property value. The margin in microns from the bottom edge.
     * @param int|null $value Value to set for the bottom property.
    */
    public function setBottom(?int $value): void {
        $this->getBackingStore()->set('bottom', $value);
    }

    /**
     * Sets the left property value. The margin in microns from the left edge.
     * @param int|null $value Value to set for the left property.
    */
    public function setLeft(?int $value): void {
        $this->getBackingStore()->set('left', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the right property value. The margin in microns from the right edge.
     * @param int|null $value Value to set for the right property.
    */
    public function setRight(?int $value): void {
        $this->getBackingStore()->set('right', $value);
    }

    /**
     * Sets the top property value. The margin in microns from the top edge.
     * @param int|null $value Value to set for the top property.
    */
    public function setTop(?int $value): void {
        $this->getBackingStore()->set('top', $value);
    }

}
