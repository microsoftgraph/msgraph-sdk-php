<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WorkbookFilterCriteria implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WorkbookFilterCriteria and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookFilterCriteria
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookFilterCriteria {
        return new WorkbookFilterCriteria();
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
     * Gets the color property value. The color applied to the cell.
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
     * Gets the criterion1 property value. A custom criterion.
     * @return string|null
    */
    public function getCriterion1(): ?string {
        $val = $this->getBackingStore()->get('criterion1');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'criterion1'");
    }

    /**
     * Gets the criterion2 property value. A custom criterion.
     * @return string|null
    */
    public function getCriterion2(): ?string {
        $val = $this->getBackingStore()->get('criterion2');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'criterion2'");
    }

    /**
     * Gets the dynamicCriteria property value. A dynamic formula specified in a custom filter.
     * @return string|null
    */
    public function getDynamicCriteria(): ?string {
        $val = $this->getBackingStore()->get('dynamicCriteria');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dynamicCriteria'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'color' => fn(ParseNode $n) => $o->setColor($n->getStringValue()),
            'criterion1' => fn(ParseNode $n) => $o->setCriterion1($n->getStringValue()),
            'criterion2' => fn(ParseNode $n) => $o->setCriterion2($n->getStringValue()),
            'dynamicCriteria' => fn(ParseNode $n) => $o->setDynamicCriteria($n->getStringValue()),
            'filterOn' => fn(ParseNode $n) => $o->setFilterOn($n->getStringValue()),
            'icon' => fn(ParseNode $n) => $o->setIcon($n->getObjectValue([WorkbookIcon::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getStringValue()),
        ];
    }

    /**
     * Gets the filterOn property value. Indicates whether a filter is applied to a column.
     * @return string|null
    */
    public function getFilterOn(): ?string {
        $val = $this->getBackingStore()->get('filterOn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filterOn'");
    }

    /**
     * Gets the icon property value. An icon applied to a cell via conditional formatting.
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
     * Gets the operator property value. An operator in a cell; for example, =, >, <, <=, or <>.
     * @return string|null
    */
    public function getOperator(): ?string {
        $val = $this->getBackingStore()->get('operator');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operator'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('color', $this->getColor());
        $writer->writeStringValue('criterion1', $this->getCriterion1());
        $writer->writeStringValue('criterion2', $this->getCriterion2());
        $writer->writeStringValue('dynamicCriteria', $this->getDynamicCriteria());
        $writer->writeStringValue('filterOn', $this->getFilterOn());
        $writer->writeObjectValue('icon', $this->getIcon());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operator', $this->getOperator());
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
     * Sets the color property value. The color applied to the cell.
     * @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value): void {
        $this->getBackingStore()->set('color', $value);
    }

    /**
     * Sets the criterion1 property value. A custom criterion.
     * @param string|null $value Value to set for the criterion1 property.
    */
    public function setCriterion1(?string $value): void {
        $this->getBackingStore()->set('criterion1', $value);
    }

    /**
     * Sets the criterion2 property value. A custom criterion.
     * @param string|null $value Value to set for the criterion2 property.
    */
    public function setCriterion2(?string $value): void {
        $this->getBackingStore()->set('criterion2', $value);
    }

    /**
     * Sets the dynamicCriteria property value. A dynamic formula specified in a custom filter.
     * @param string|null $value Value to set for the dynamicCriteria property.
    */
    public function setDynamicCriteria(?string $value): void {
        $this->getBackingStore()->set('dynamicCriteria', $value);
    }

    /**
     * Sets the filterOn property value. Indicates whether a filter is applied to a column.
     * @param string|null $value Value to set for the filterOn property.
    */
    public function setFilterOn(?string $value): void {
        $this->getBackingStore()->set('filterOn', $value);
    }

    /**
     * Sets the icon property value. An icon applied to a cell via conditional formatting.
     * @param WorkbookIcon|null $value Value to set for the icon property.
    */
    public function setIcon(?WorkbookIcon $value): void {
        $this->getBackingStore()->set('icon', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operator property value. An operator in a cell; for example, =, >, <, <=, or <>.
     * @param string|null $value Value to set for the operator property.
    */
    public function setOperator(?string $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

}
