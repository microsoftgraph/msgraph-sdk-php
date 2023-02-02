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
     * Instantiates a new workbookFilterCriteria and sets the default values.
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the color property value. The color property
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->getBackingStore()->get('color');
    }

    /**
     * Gets the criterion1 property value. The criterion1 property
     * @return string|null
    */
    public function getCriterion1(): ?string {
        return $this->getBackingStore()->get('criterion1');
    }

    /**
     * Gets the criterion2 property value. The criterion2 property
     * @return string|null
    */
    public function getCriterion2(): ?string {
        return $this->getBackingStore()->get('criterion2');
    }

    /**
     * Gets the dynamicCriteria property value. The dynamicCriteria property
     * @return string|null
    */
    public function getDynamicCriteria(): ?string {
        return $this->getBackingStore()->get('dynamicCriteria');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
            'values' => fn(ParseNode $n) => $o->setValues($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the filterOn property value. The filterOn property
     * @return string|null
    */
    public function getFilterOn(): ?string {
        return $this->getBackingStore()->get('filterOn');
    }

    /**
     * Gets the icon property value. The icon property
     * @return WorkbookIcon|null
    */
    public function getIcon(): ?WorkbookIcon {
        return $this->getBackingStore()->get('icon');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the operator property value. The operator property
     * @return string|null
    */
    public function getOperator(): ?string {
        return $this->getBackingStore()->get('operator');
    }

    /**
     * Gets the values property value. The values property
     * @return Json|null
    */
    public function getValues(): ?Json {
        return $this->getBackingStore()->get('values');
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
        $writer->writeObjectValue('values', $this->getValues());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the color property value. The color property
     * @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value): void {
        $this->getBackingStore()->set('color', $value);
    }

    /**
     * Sets the criterion1 property value. The criterion1 property
     * @param string|null $value Value to set for the criterion1 property.
    */
    public function setCriterion1(?string $value): void {
        $this->getBackingStore()->set('criterion1', $value);
    }

    /**
     * Sets the criterion2 property value. The criterion2 property
     * @param string|null $value Value to set for the criterion2 property.
    */
    public function setCriterion2(?string $value): void {
        $this->getBackingStore()->set('criterion2', $value);
    }

    /**
     * Sets the dynamicCriteria property value. The dynamicCriteria property
     * @param string|null $value Value to set for the dynamicCriteria property.
    */
    public function setDynamicCriteria(?string $value): void {
        $this->getBackingStore()->set('dynamicCriteria', $value);
    }

    /**
     * Sets the filterOn property value. The filterOn property
     * @param string|null $value Value to set for the filterOn property.
    */
    public function setFilterOn(?string $value): void {
        $this->getBackingStore()->set('filterOn', $value);
    }

    /**
     * Sets the icon property value. The icon property
     * @param WorkbookIcon|null $value Value to set for the icon property.
    */
    public function setIcon(?WorkbookIcon $value): void {
        $this->getBackingStore()->set('icon', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operator property value. The operator property
     * @param string|null $value Value to set for the operator property.
    */
    public function setOperator(?string $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

    /**
     * Sets the values property value. The values property
     * @param Json|null $value Value to set for the values property.
    */
    public function setValues(?Json $value): void {
        $this->getBackingStore()->set('values', $value);
    }

}
