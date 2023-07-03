<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TextColumn implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new textColumn and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TextColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TextColumn {
        return new TextColumn();
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
     * Gets the allowMultipleLines property value. Whether to allow multiple lines of text.
     * @return bool|null
    */
    public function getAllowMultipleLines(): ?bool {
        $val = $this->getBackingStore()->get('allowMultipleLines');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowMultipleLines'");
    }

    /**
     * Gets the appendChangesToExistingText property value. Whether updates to this column should replace existing text, or append to it.
     * @return bool|null
    */
    public function getAppendChangesToExistingText(): ?bool {
        $val = $this->getBackingStore()->get('appendChangesToExistingText');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appendChangesToExistingText'");
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
            'allowMultipleLines' => fn(ParseNode $n) => $o->setAllowMultipleLines($n->getBooleanValue()),
            'appendChangesToExistingText' => fn(ParseNode $n) => $o->setAppendChangesToExistingText($n->getBooleanValue()),
            'linesForEditing' => fn(ParseNode $n) => $o->setLinesForEditing($n->getIntegerValue()),
            'maxLength' => fn(ParseNode $n) => $o->setMaxLength($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'textType' => fn(ParseNode $n) => $o->setTextType($n->getStringValue()),
        ];
    }

    /**
     * Gets the linesForEditing property value. The size of the text box.
     * @return int|null
    */
    public function getLinesForEditing(): ?int {
        $val = $this->getBackingStore()->get('linesForEditing');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linesForEditing'");
    }

    /**
     * Gets the maxLength property value. The maximum number of characters for the value.
     * @return int|null
    */
    public function getMaxLength(): ?int {
        $val = $this->getBackingStore()->get('maxLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxLength'");
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
     * Gets the textType property value. The type of text being stored. Must be one of plain or richText
     * @return string|null
    */
    public function getTextType(): ?string {
        $val = $this->getBackingStore()->get('textType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'textType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowMultipleLines', $this->getAllowMultipleLines());
        $writer->writeBooleanValue('appendChangesToExistingText', $this->getAppendChangesToExistingText());
        $writer->writeIntegerValue('linesForEditing', $this->getLinesForEditing());
        $writer->writeIntegerValue('maxLength', $this->getMaxLength());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('textType', $this->getTextType());
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
     * Sets the allowMultipleLines property value. Whether to allow multiple lines of text.
     * @param bool|null $value Value to set for the allowMultipleLines property.
    */
    public function setAllowMultipleLines(?bool $value): void {
        $this->getBackingStore()->set('allowMultipleLines', $value);
    }

    /**
     * Sets the appendChangesToExistingText property value. Whether updates to this column should replace existing text, or append to it.
     * @param bool|null $value Value to set for the appendChangesToExistingText property.
    */
    public function setAppendChangesToExistingText(?bool $value): void {
        $this->getBackingStore()->set('appendChangesToExistingText', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the linesForEditing property value. The size of the text box.
     * @param int|null $value Value to set for the linesForEditing property.
    */
    public function setLinesForEditing(?int $value): void {
        $this->getBackingStore()->set('linesForEditing', $value);
    }

    /**
     * Sets the maxLength property value. The maximum number of characters for the value.
     * @param int|null $value Value to set for the maxLength property.
    */
    public function setMaxLength(?int $value): void {
        $this->getBackingStore()->set('maxLength', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the textType property value. The type of text being stored. Must be one of plain or richText
     * @param string|null $value Value to set for the textType property.
    */
    public function setTextType(?string $value): void {
        $this->getBackingStore()->set('textType', $value);
    }

}
