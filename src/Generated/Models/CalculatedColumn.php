<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CalculatedColumn implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new calculatedColumn and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalculatedColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalculatedColumn {
        return new CalculatedColumn();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'formula' => fn(ParseNode $n) => $o->setFormula($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'outputType' => fn(ParseNode $n) => $o->setOutputType($n->getStringValue()),
        ];
    }

    /**
     * Gets the format property value. For dateTime output types, the format of the value. Must be one of dateOnly or dateTime.
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->getBackingStore()->get('format');
    }

    /**
     * Gets the formula property value. The formula used to compute the value for this column.
     * @return string|null
    */
    public function getFormula(): ?string {
        return $this->getBackingStore()->get('formula');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the outputType property value. The output type used to format values in this column. Must be one of boolean, currency, dateTime, number, or text.
     * @return string|null
    */
    public function getOutputType(): ?string {
        return $this->getBackingStore()->get('outputType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeStringValue('formula', $this->getFormula());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('outputType', $this->getOutputType());
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
     * Sets the format property value. For dateTime output types, the format of the value. Must be one of dateOnly or dateTime.
     * @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the formula property value. The formula used to compute the value for this column.
     * @param string|null $value Value to set for the formula property.
    */
    public function setFormula(?string $value): void {
        $this->getBackingStore()->set('formula', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the outputType property value. The output type used to format values in this column. Must be one of boolean, currency, dateTime, number, or text.
     * @param string|null $value Value to set for the outputType property.
    */
    public function setOutputType(?string $value): void {
        $this->getBackingStore()->set('outputType', $value);
    }

}
