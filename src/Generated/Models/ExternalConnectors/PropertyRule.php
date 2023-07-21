<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Generated\Models\BinaryOperator;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PropertyRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new propertyRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PropertyRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PropertyRule {
        return new PropertyRule();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operation' => fn(ParseNode $n) => $o->setOperation($n->getEnumValue(RuleOperation::class)),
            'property' => fn(ParseNode $n) => $o->setProperty($n->getStringValue()),
            'values' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setValues($val);
            },
            'valuesJoinedBy' => fn(ParseNode $n) => $o->setValuesJoinedBy($n->getEnumValue(BinaryOperator::class)),
        ];
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
     * Gets the operation property value. The operation property
     * @return RuleOperation|null
    */
    public function getOperation(): ?RuleOperation {
        $val = $this->getBackingStore()->get('operation');
        if (is_null($val) || $val instanceof RuleOperation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operation'");
    }

    /**
     * Gets the property property value. The property from the externalItem schema. Required.
     * @return string|null
    */
    public function getProperty(): ?string {
        $val = $this->getBackingStore()->get('property');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'property'");
    }

    /**
     * Gets the values property value. A collection with one or many strings. The specified string(s) will be matched with the specified property using the specified operation. Required.
     * @return array<string>|null
    */
    public function getValues(): ?array {
        $val = $this->getBackingStore()->get('values');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'values'");
    }

    /**
     * Gets the valuesJoinedBy property value. The valuesJoinedBy property
     * @return BinaryOperator|null
    */
    public function getValuesJoinedBy(): ?BinaryOperator {
        $val = $this->getBackingStore()->get('valuesJoinedBy');
        if (is_null($val) || $val instanceof BinaryOperator) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valuesJoinedBy'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('operation', $this->getOperation());
        $writer->writeStringValue('property', $this->getProperty());
        $writer->writeCollectionOfPrimitiveValues('values', $this->getValues());
        $writer->writeEnumValue('valuesJoinedBy', $this->getValuesJoinedBy());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operation property value. The operation property
     * @param RuleOperation|null $value Value to set for the operation property.
    */
    public function setOperation(?RuleOperation $value): void {
        $this->getBackingStore()->set('operation', $value);
    }

    /**
     * Sets the property property value. The property from the externalItem schema. Required.
     * @param string|null $value Value to set for the property property.
    */
    public function setProperty(?string $value): void {
        $this->getBackingStore()->set('property', $value);
    }

    /**
     * Sets the values property value. A collection with one or many strings. The specified string(s) will be matched with the specified property using the specified operation. Required.
     * @param array<string>|null $value Value to set for the values property.
    */
    public function setValues(?array $value): void {
        $this->getBackingStore()->set('values', $value);
    }

    /**
     * Sets the valuesJoinedBy property value. The valuesJoinedBy property
     * @param BinaryOperator|null $value Value to set for the valuesJoinedBy property.
    */
    public function setValuesJoinedBy(?BinaryOperator $value): void {
        $this->getBackingStore()->set('valuesJoinedBy', $value);
    }

}
