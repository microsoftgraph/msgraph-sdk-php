<?php

namespace Microsoft\\Graph\\Generated\Models;

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
     * Instantiates a new CalculatedColumn and sets the default values.
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
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'formula' => fn(ParseNode $n) => $o->setFormula($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'outputType' => fn(ParseNode $n) => $o->setOutputType($n->getStringValue()),
        ];
    }

    /**
     * Gets the format property value. For dateTime output types, the format of the value. Possible values are: dateOnly or dateTime.
     * @return string|null
    */
    public function getFormat(): ?string {
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the formula property value. The formula used to compute the value for this column.
     * @return string|null
    */
    public function getFormula(): ?string {
        $val = $this->getBackingStore()->get('formula');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'formula'");
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
     * Gets the outputType property value. The output type used to format values in this column. Possible values are: boolean, currency, dateTime, number, or text.
     * @return string|null
    */
    public function getOutputType(): ?string {
        $val = $this->getBackingStore()->get('outputType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outputType'");
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
     * Sets the format property value. For dateTime output types, the format of the value. Possible values are: dateOnly or dateTime.
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the outputType property value. The output type used to format values in this column. Possible values are: boolean, currency, dateTime, number, or text.
     * @param string|null $value Value to set for the outputType property.
    */
    public function setOutputType(?string $value): void {
        $this->getBackingStore()->set('outputType', $value);
    }

}
