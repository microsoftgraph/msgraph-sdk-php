<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AttributeMapping implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new attributeMapping and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttributeMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttributeMapping {
        return new AttributeMapping();
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
     * Gets the defaultValue property value. The defaultValue property
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        $val = $this->getBackingStore()->get('defaultValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultValue'");
    }

    /**
     * Gets the exportMissingReferences property value. The exportMissingReferences property
     * @return bool|null
    */
    public function getExportMissingReferences(): ?bool {
        $val = $this->getBackingStore()->get('exportMissingReferences');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportMissingReferences'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getStringValue()),
            'exportMissingReferences' => fn(ParseNode $n) => $o->setExportMissingReferences($n->getBooleanValue()),
            'flowBehavior' => fn(ParseNode $n) => $o->setFlowBehavior($n->getEnumValue(AttributeFlowBehavior::class)),
            'flowType' => fn(ParseNode $n) => $o->setFlowType($n->getEnumValue(AttributeFlowType::class)),
            'matchingPriority' => fn(ParseNode $n) => $o->setMatchingPriority($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getObjectValue([AttributeMappingSource::class, 'createFromDiscriminatorValue'])),
            'targetAttributeName' => fn(ParseNode $n) => $o->setTargetAttributeName($n->getStringValue()),
        ];
    }

    /**
     * Gets the flowBehavior property value. The flowBehavior property
     * @return AttributeFlowBehavior|null
    */
    public function getFlowBehavior(): ?AttributeFlowBehavior {
        $val = $this->getBackingStore()->get('flowBehavior');
        if (is_null($val) || $val instanceof AttributeFlowBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'flowBehavior'");
    }

    /**
     * Gets the flowType property value. The flowType property
     * @return AttributeFlowType|null
    */
    public function getFlowType(): ?AttributeFlowType {
        $val = $this->getBackingStore()->get('flowType');
        if (is_null($val) || $val instanceof AttributeFlowType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'flowType'");
    }

    /**
     * Gets the matchingPriority property value. The matchingPriority property
     * @return int|null
    */
    public function getMatchingPriority(): ?int {
        $val = $this->getBackingStore()->get('matchingPriority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchingPriority'");
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
     * Gets the source property value. The source property
     * @return AttributeMappingSource|null
    */
    public function getSource(): ?AttributeMappingSource {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof AttributeMappingSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the targetAttributeName property value. The targetAttributeName property
     * @return string|null
    */
    public function getTargetAttributeName(): ?string {
        $val = $this->getBackingStore()->get('targetAttributeName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetAttributeName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('defaultValue', $this->getDefaultValue());
        $writer->writeBooleanValue('exportMissingReferences', $this->getExportMissingReferences());
        $writer->writeEnumValue('flowBehavior', $this->getFlowBehavior());
        $writer->writeEnumValue('flowType', $this->getFlowType());
        $writer->writeIntegerValue('matchingPriority', $this->getMatchingPriority());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('source', $this->getSource());
        $writer->writeStringValue('targetAttributeName', $this->getTargetAttributeName());
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
     * Sets the defaultValue property value. The defaultValue property
     * @param string|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?string $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the exportMissingReferences property value. The exportMissingReferences property
     * @param bool|null $value Value to set for the exportMissingReferences property.
    */
    public function setExportMissingReferences(?bool $value): void {
        $this->getBackingStore()->set('exportMissingReferences', $value);
    }

    /**
     * Sets the flowBehavior property value. The flowBehavior property
     * @param AttributeFlowBehavior|null $value Value to set for the flowBehavior property.
    */
    public function setFlowBehavior(?AttributeFlowBehavior $value): void {
        $this->getBackingStore()->set('flowBehavior', $value);
    }

    /**
     * Sets the flowType property value. The flowType property
     * @param AttributeFlowType|null $value Value to set for the flowType property.
    */
    public function setFlowType(?AttributeFlowType $value): void {
        $this->getBackingStore()->set('flowType', $value);
    }

    /**
     * Sets the matchingPriority property value. The matchingPriority property
     * @param int|null $value Value to set for the matchingPriority property.
    */
    public function setMatchingPriority(?int $value): void {
        $this->getBackingStore()->set('matchingPriority', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the source property value. The source property
     * @param AttributeMappingSource|null $value Value to set for the source property.
    */
    public function setSource(?AttributeMappingSource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the targetAttributeName property value. The targetAttributeName property
     * @param string|null $value Value to set for the targetAttributeName property.
    */
    public function setTargetAttributeName(?string $value): void {
        $this->getBackingStore()->set('targetAttributeName', $value);
    }

}
