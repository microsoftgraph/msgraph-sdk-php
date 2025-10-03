<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WorkbookSortField implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WorkbookSortField and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookSortField
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookSortField {
        return new WorkbookSortField();
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
     * Gets the ascending property value. Represents whether the sorting is done in an ascending fashion.
     * @return bool|null
    */
    public function getAscending(): ?bool {
        $val = $this->getBackingStore()->get('ascending');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ascending'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the color property value. Represents the color that is the target of the condition if the sorting is on font or cell color.
     * @return string|null
    */
    public function getColor(): ?string {
        $val = $this->getBackingStore()->get('color');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'color'");
    }

    /**
     * Gets the dataOption property value. Represents additional sorting options for this field. The possible values are: Normal, TextAsNumber.
     * @return string|null
    */
    public function getDataOption(): ?string {
        $val = $this->getBackingStore()->get('dataOption');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataOption'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ascending' => fn(ParseNode $n) => $o->setAscending($n->getBooleanValue()),
            'color' => fn(ParseNode $n) => $o->setColor($n->getStringValue()),
            'dataOption' => fn(ParseNode $n) => $o->setDataOption($n->getStringValue()),
            'icon' => fn(ParseNode $n) => $o->setIcon($n->getObjectValue([WorkbookIcon::class, 'createFromDiscriminatorValue'])),
            'key' => fn(ParseNode $n) => $o->setKey($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sortOn' => fn(ParseNode $n) => $o->setSortOn($n->getStringValue()),
        ];
    }

    /**
     * Gets the icon property value. Represents the icon that is the target of the condition if the sorting is on the cell's icon.
     * @return WorkbookIcon|null
    */
    public function getIcon(): ?WorkbookIcon {
        $val = $this->getBackingStore()->get('icon');
        if (is_null($val) || $val instanceof WorkbookIcon) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'icon'");
    }

    /**
     * Gets the key property value. Represents the column (or row, depending on the sort orientation) that the condition is on. Represented as an offset from the first column (or row).
     * @return int|null
    */
    public function getKey(): ?int {
        $val = $this->getBackingStore()->get('key');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'key'");
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
     * Gets the sortOn property value. Represents the type of sorting of this condition. The possible values are: Value, CellColor, FontColor, Icon.
     * @return string|null
    */
    public function getSortOn(): ?string {
        $val = $this->getBackingStore()->get('sortOn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sortOn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('ascending', $this->getAscending());
        $writer->writeStringValue('color', $this->getColor());
        $writer->writeStringValue('dataOption', $this->getDataOption());
        $writer->writeObjectValue('icon', $this->getIcon());
        $writer->writeIntegerValue('key', $this->getKey());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sortOn', $this->getSortOn());
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
     * Sets the ascending property value. Represents whether the sorting is done in an ascending fashion.
     * @param bool|null $value Value to set for the ascending property.
    */
    public function setAscending(?bool $value): void {
        $this->getBackingStore()->set('ascending', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the color property value. Represents the color that is the target of the condition if the sorting is on font or cell color.
     * @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value): void {
        $this->getBackingStore()->set('color', $value);
    }

    /**
     * Sets the dataOption property value. Represents additional sorting options for this field. The possible values are: Normal, TextAsNumber.
     * @param string|null $value Value to set for the dataOption property.
    */
    public function setDataOption(?string $value): void {
        $this->getBackingStore()->set('dataOption', $value);
    }

    /**
     * Sets the icon property value. Represents the icon that is the target of the condition if the sorting is on the cell's icon.
     * @param WorkbookIcon|null $value Value to set for the icon property.
    */
    public function setIcon(?WorkbookIcon $value): void {
        $this->getBackingStore()->set('icon', $value);
    }

    /**
     * Sets the key property value. Represents the column (or row, depending on the sort orientation) that the condition is on. Represented as an offset from the first column (or row).
     * @param int|null $value Value to set for the key property.
    */
    public function setKey(?int $value): void {
        $this->getBackingStore()->set('key', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sortOn property value. Represents the type of sorting of this condition. The possible values are: Value, CellColor, FontColor, Icon.
     * @param string|null $value Value to set for the sortOn property.
    */
    public function setSortOn(?string $value): void {
        $this->getBackingStore()->set('sortOn', $value);
    }

}
