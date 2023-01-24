<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PlannerCategoryDescriptions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new plannerCategoryDescriptions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerCategoryDescriptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerCategoryDescriptions {
        return new PlannerCategoryDescriptions();
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
     * Gets the category1 property value. The label associated with Category 1
     * @return string|null
    */
    public function getCategory1(): ?string {
        return $this->getBackingStore()->get('category1');
    }

    /**
     * Gets the category10 property value. The label associated with Category 10
     * @return string|null
    */
    public function getCategory10(): ?string {
        return $this->getBackingStore()->get('category10');
    }

    /**
     * Gets the category11 property value. The label associated with Category 11
     * @return string|null
    */
    public function getCategory11(): ?string {
        return $this->getBackingStore()->get('category11');
    }

    /**
     * Gets the category12 property value. The label associated with Category 12
     * @return string|null
    */
    public function getCategory12(): ?string {
        return $this->getBackingStore()->get('category12');
    }

    /**
     * Gets the category13 property value. The label associated with Category 13
     * @return string|null
    */
    public function getCategory13(): ?string {
        return $this->getBackingStore()->get('category13');
    }

    /**
     * Gets the category14 property value. The label associated with Category 14
     * @return string|null
    */
    public function getCategory14(): ?string {
        return $this->getBackingStore()->get('category14');
    }

    /**
     * Gets the category15 property value. The label associated with Category 15
     * @return string|null
    */
    public function getCategory15(): ?string {
        return $this->getBackingStore()->get('category15');
    }

    /**
     * Gets the category16 property value. The label associated with Category 16
     * @return string|null
    */
    public function getCategory16(): ?string {
        return $this->getBackingStore()->get('category16');
    }

    /**
     * Gets the category17 property value. The label associated with Category 17
     * @return string|null
    */
    public function getCategory17(): ?string {
        return $this->getBackingStore()->get('category17');
    }

    /**
     * Gets the category18 property value. The label associated with Category 18
     * @return string|null
    */
    public function getCategory18(): ?string {
        return $this->getBackingStore()->get('category18');
    }

    /**
     * Gets the category19 property value. The label associated with Category 19
     * @return string|null
    */
    public function getCategory19(): ?string {
        return $this->getBackingStore()->get('category19');
    }

    /**
     * Gets the category2 property value. The label associated with Category 2
     * @return string|null
    */
    public function getCategory2(): ?string {
        return $this->getBackingStore()->get('category2');
    }

    /**
     * Gets the category20 property value. The label associated with Category 20
     * @return string|null
    */
    public function getCategory20(): ?string {
        return $this->getBackingStore()->get('category20');
    }

    /**
     * Gets the category21 property value. The label associated with Category 21
     * @return string|null
    */
    public function getCategory21(): ?string {
        return $this->getBackingStore()->get('category21');
    }

    /**
     * Gets the category22 property value. The label associated with Category 22
     * @return string|null
    */
    public function getCategory22(): ?string {
        return $this->getBackingStore()->get('category22');
    }

    /**
     * Gets the category23 property value. The label associated with Category 23
     * @return string|null
    */
    public function getCategory23(): ?string {
        return $this->getBackingStore()->get('category23');
    }

    /**
     * Gets the category24 property value. The label associated with Category 24
     * @return string|null
    */
    public function getCategory24(): ?string {
        return $this->getBackingStore()->get('category24');
    }

    /**
     * Gets the category25 property value. The label associated with Category 25
     * @return string|null
    */
    public function getCategory25(): ?string {
        return $this->getBackingStore()->get('category25');
    }

    /**
     * Gets the category3 property value. The label associated with Category 3
     * @return string|null
    */
    public function getCategory3(): ?string {
        return $this->getBackingStore()->get('category3');
    }

    /**
     * Gets the category4 property value. The label associated with Category 4
     * @return string|null
    */
    public function getCategory4(): ?string {
        return $this->getBackingStore()->get('category4');
    }

    /**
     * Gets the category5 property value. The label associated with Category 5
     * @return string|null
    */
    public function getCategory5(): ?string {
        return $this->getBackingStore()->get('category5');
    }

    /**
     * Gets the category6 property value. The label associated with Category 6
     * @return string|null
    */
    public function getCategory6(): ?string {
        return $this->getBackingStore()->get('category6');
    }

    /**
     * Gets the category7 property value. The label associated with Category 7
     * @return string|null
    */
    public function getCategory7(): ?string {
        return $this->getBackingStore()->get('category7');
    }

    /**
     * Gets the category8 property value. The label associated with Category 8
     * @return string|null
    */
    public function getCategory8(): ?string {
        return $this->getBackingStore()->get('category8');
    }

    /**
     * Gets the category9 property value. The label associated with Category 9
     * @return string|null
    */
    public function getCategory9(): ?string {
        return $this->getBackingStore()->get('category9');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category1' => fn(ParseNode $n) => $o->setCategory1($n->getStringValue()),
            'category10' => fn(ParseNode $n) => $o->setCategory10($n->getStringValue()),
            'category11' => fn(ParseNode $n) => $o->setCategory11($n->getStringValue()),
            'category12' => fn(ParseNode $n) => $o->setCategory12($n->getStringValue()),
            'category13' => fn(ParseNode $n) => $o->setCategory13($n->getStringValue()),
            'category14' => fn(ParseNode $n) => $o->setCategory14($n->getStringValue()),
            'category15' => fn(ParseNode $n) => $o->setCategory15($n->getStringValue()),
            'category16' => fn(ParseNode $n) => $o->setCategory16($n->getStringValue()),
            'category17' => fn(ParseNode $n) => $o->setCategory17($n->getStringValue()),
            'category18' => fn(ParseNode $n) => $o->setCategory18($n->getStringValue()),
            'category19' => fn(ParseNode $n) => $o->setCategory19($n->getStringValue()),
            'category2' => fn(ParseNode $n) => $o->setCategory2($n->getStringValue()),
            'category20' => fn(ParseNode $n) => $o->setCategory20($n->getStringValue()),
            'category21' => fn(ParseNode $n) => $o->setCategory21($n->getStringValue()),
            'category22' => fn(ParseNode $n) => $o->setCategory22($n->getStringValue()),
            'category23' => fn(ParseNode $n) => $o->setCategory23($n->getStringValue()),
            'category24' => fn(ParseNode $n) => $o->setCategory24($n->getStringValue()),
            'category25' => fn(ParseNode $n) => $o->setCategory25($n->getStringValue()),
            'category3' => fn(ParseNode $n) => $o->setCategory3($n->getStringValue()),
            'category4' => fn(ParseNode $n) => $o->setCategory4($n->getStringValue()),
            'category5' => fn(ParseNode $n) => $o->setCategory5($n->getStringValue()),
            'category6' => fn(ParseNode $n) => $o->setCategory6($n->getStringValue()),
            'category7' => fn(ParseNode $n) => $o->setCategory7($n->getStringValue()),
            'category8' => fn(ParseNode $n) => $o->setCategory8($n->getStringValue()),
            'category9' => fn(ParseNode $n) => $o->setCategory9($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category1', $this->getCategory1());
        $writer->writeStringValue('category10', $this->getCategory10());
        $writer->writeStringValue('category11', $this->getCategory11());
        $writer->writeStringValue('category12', $this->getCategory12());
        $writer->writeStringValue('category13', $this->getCategory13());
        $writer->writeStringValue('category14', $this->getCategory14());
        $writer->writeStringValue('category15', $this->getCategory15());
        $writer->writeStringValue('category16', $this->getCategory16());
        $writer->writeStringValue('category17', $this->getCategory17());
        $writer->writeStringValue('category18', $this->getCategory18());
        $writer->writeStringValue('category19', $this->getCategory19());
        $writer->writeStringValue('category2', $this->getCategory2());
        $writer->writeStringValue('category20', $this->getCategory20());
        $writer->writeStringValue('category21', $this->getCategory21());
        $writer->writeStringValue('category22', $this->getCategory22());
        $writer->writeStringValue('category23', $this->getCategory23());
        $writer->writeStringValue('category24', $this->getCategory24());
        $writer->writeStringValue('category25', $this->getCategory25());
        $writer->writeStringValue('category3', $this->getCategory3());
        $writer->writeStringValue('category4', $this->getCategory4());
        $writer->writeStringValue('category5', $this->getCategory5());
        $writer->writeStringValue('category6', $this->getCategory6());
        $writer->writeStringValue('category7', $this->getCategory7());
        $writer->writeStringValue('category8', $this->getCategory8());
        $writer->writeStringValue('category9', $this->getCategory9());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the category1 property value. The label associated with Category 1
     * @param string|null $value Value to set for the category1 property.
    */
    public function setCategory1(?string $value): void {
        $this->getBackingStore()->set('category1', $value);
    }

    /**
     * Sets the category10 property value. The label associated with Category 10
     * @param string|null $value Value to set for the category10 property.
    */
    public function setCategory10(?string $value): void {
        $this->getBackingStore()->set('category10', $value);
    }

    /**
     * Sets the category11 property value. The label associated with Category 11
     * @param string|null $value Value to set for the category11 property.
    */
    public function setCategory11(?string $value): void {
        $this->getBackingStore()->set('category11', $value);
    }

    /**
     * Sets the category12 property value. The label associated with Category 12
     * @param string|null $value Value to set for the category12 property.
    */
    public function setCategory12(?string $value): void {
        $this->getBackingStore()->set('category12', $value);
    }

    /**
     * Sets the category13 property value. The label associated with Category 13
     * @param string|null $value Value to set for the category13 property.
    */
    public function setCategory13(?string $value): void {
        $this->getBackingStore()->set('category13', $value);
    }

    /**
     * Sets the category14 property value. The label associated with Category 14
     * @param string|null $value Value to set for the category14 property.
    */
    public function setCategory14(?string $value): void {
        $this->getBackingStore()->set('category14', $value);
    }

    /**
     * Sets the category15 property value. The label associated with Category 15
     * @param string|null $value Value to set for the category15 property.
    */
    public function setCategory15(?string $value): void {
        $this->getBackingStore()->set('category15', $value);
    }

    /**
     * Sets the category16 property value. The label associated with Category 16
     * @param string|null $value Value to set for the category16 property.
    */
    public function setCategory16(?string $value): void {
        $this->getBackingStore()->set('category16', $value);
    }

    /**
     * Sets the category17 property value. The label associated with Category 17
     * @param string|null $value Value to set for the category17 property.
    */
    public function setCategory17(?string $value): void {
        $this->getBackingStore()->set('category17', $value);
    }

    /**
     * Sets the category18 property value. The label associated with Category 18
     * @param string|null $value Value to set for the category18 property.
    */
    public function setCategory18(?string $value): void {
        $this->getBackingStore()->set('category18', $value);
    }

    /**
     * Sets the category19 property value. The label associated with Category 19
     * @param string|null $value Value to set for the category19 property.
    */
    public function setCategory19(?string $value): void {
        $this->getBackingStore()->set('category19', $value);
    }

    /**
     * Sets the category2 property value. The label associated with Category 2
     * @param string|null $value Value to set for the category2 property.
    */
    public function setCategory2(?string $value): void {
        $this->getBackingStore()->set('category2', $value);
    }

    /**
     * Sets the category20 property value. The label associated with Category 20
     * @param string|null $value Value to set for the category20 property.
    */
    public function setCategory20(?string $value): void {
        $this->getBackingStore()->set('category20', $value);
    }

    /**
     * Sets the category21 property value. The label associated with Category 21
     * @param string|null $value Value to set for the category21 property.
    */
    public function setCategory21(?string $value): void {
        $this->getBackingStore()->set('category21', $value);
    }

    /**
     * Sets the category22 property value. The label associated with Category 22
     * @param string|null $value Value to set for the category22 property.
    */
    public function setCategory22(?string $value): void {
        $this->getBackingStore()->set('category22', $value);
    }

    /**
     * Sets the category23 property value. The label associated with Category 23
     * @param string|null $value Value to set for the category23 property.
    */
    public function setCategory23(?string $value): void {
        $this->getBackingStore()->set('category23', $value);
    }

    /**
     * Sets the category24 property value. The label associated with Category 24
     * @param string|null $value Value to set for the category24 property.
    */
    public function setCategory24(?string $value): void {
        $this->getBackingStore()->set('category24', $value);
    }

    /**
     * Sets the category25 property value. The label associated with Category 25
     * @param string|null $value Value to set for the category25 property.
    */
    public function setCategory25(?string $value): void {
        $this->getBackingStore()->set('category25', $value);
    }

    /**
     * Sets the category3 property value. The label associated with Category 3
     * @param string|null $value Value to set for the category3 property.
    */
    public function setCategory3(?string $value): void {
        $this->getBackingStore()->set('category3', $value);
    }

    /**
     * Sets the category4 property value. The label associated with Category 4
     * @param string|null $value Value to set for the category4 property.
    */
    public function setCategory4(?string $value): void {
        $this->getBackingStore()->set('category4', $value);
    }

    /**
     * Sets the category5 property value. The label associated with Category 5
     * @param string|null $value Value to set for the category5 property.
    */
    public function setCategory5(?string $value): void {
        $this->getBackingStore()->set('category5', $value);
    }

    /**
     * Sets the category6 property value. The label associated with Category 6
     * @param string|null $value Value to set for the category6 property.
    */
    public function setCategory6(?string $value): void {
        $this->getBackingStore()->set('category6', $value);
    }

    /**
     * Sets the category7 property value. The label associated with Category 7
     * @param string|null $value Value to set for the category7 property.
    */
    public function setCategory7(?string $value): void {
        $this->getBackingStore()->set('category7', $value);
    }

    /**
     * Sets the category8 property value. The label associated with Category 8
     * @param string|null $value Value to set for the category8 property.
    */
    public function setCategory8(?string $value): void {
        $this->getBackingStore()->set('category8', $value);
    }

    /**
     * Sets the category9 property value. The label associated with Category 9
     * @param string|null $value Value to set for the category9 property.
    */
    public function setCategory9(?string $value): void {
        $this->getBackingStore()->set('category9', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
