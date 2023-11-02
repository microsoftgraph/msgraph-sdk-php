<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AttributeMappingSource implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new attributeMappingSource and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttributeMappingSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttributeMappingSource {
        return new AttributeMappingSource();
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
     * Gets the expression property value. Equivalent expression representation of this attributeMappingSource object.
     * @return string|null
    */
    public function getExpression(): ?string {
        $val = $this->getBackingStore()->get('expression');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expression'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expression' => fn(ParseNode $n) => $o->setExpression($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'parameters' => fn(ParseNode $n) => $o->setParameters($n->getCollectionOfObjectValues([StringKeyAttributeMappingSourceValuePair::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(AttributeMappingSourceType::class)),
        ];
    }

    /**
     * Gets the name property value. Name parameter of the mapping source. Depending on the type property value, this can be the name of the function, the name of the source attribute, or a constant value to be used.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
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
     * Gets the parameters property value. If this object represents a function, lists function parameters. Parameters consist of attributeMappingSource objects themselves, allowing for complex expressions. If type isn't Function, this property is null/empty array.
     * @return array<StringKeyAttributeMappingSourceValuePair>|null
    */
    public function getParameters(): ?array {
        $val = $this->getBackingStore()->get('parameters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, StringKeyAttributeMappingSourceValuePair::class);
            /** @var array<StringKeyAttributeMappingSourceValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parameters'");
    }

    /**
     * Gets the type property value. The type property
     * @return AttributeMappingSourceType|null
    */
    public function getType(): ?AttributeMappingSourceType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof AttributeMappingSourceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expression', $this->getExpression());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('parameters', $this->getParameters());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the expression property value. Equivalent expression representation of this attributeMappingSource object.
     * @param string|null $value Value to set for the expression property.
    */
    public function setExpression(?string $value): void {
        $this->getBackingStore()->set('expression', $value);
    }

    /**
     * Sets the name property value. Name parameter of the mapping source. Depending on the type property value, this can be the name of the function, the name of the source attribute, or a constant value to be used.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the parameters property value. If this object represents a function, lists function parameters. Parameters consist of attributeMappingSource objects themselves, allowing for complex expressions. If type isn't Function, this property is null/empty array.
     * @param array<StringKeyAttributeMappingSourceValuePair>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value): void {
        $this->getBackingStore()->set('parameters', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param AttributeMappingSourceType|null $value Value to set for the type property.
    */
    public function setType(?AttributeMappingSourceType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
