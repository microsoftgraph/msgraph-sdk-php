<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ObjectMapping implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ObjectMapping and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ObjectMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ObjectMapping {
        return new ObjectMapping();
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
     * Gets the attributeMappings property value. Attribute mappings define which attributes to map from the source object into the target object and how they should flow. A number of functions are available to support the transformation of the original source values.
     * @return array<AttributeMapping>|null
    */
    public function getAttributeMappings(): ?array {
        $val = $this->getBackingStore()->get('attributeMappings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttributeMapping::class);
            /** @var array<AttributeMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributeMappings'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the enabled property value. When true, this object mapping will be processed during synchronization. When false, this object mapping will be skipped.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        $val = $this->getBackingStore()->get('enabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attributeMappings' => fn(ParseNode $n) => $o->setAttributeMappings($n->getCollectionOfObjectValues([AttributeMapping::class, 'createFromDiscriminatorValue'])),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'flowTypes' => fn(ParseNode $n) => $o->setFlowTypes($n->getEnumValue(ObjectFlowTypes::class)),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getCollectionOfObjectValues([ObjectMappingMetadataEntry::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getObjectValue([Filter::class, 'createFromDiscriminatorValue'])),
            'sourceObjectName' => fn(ParseNode $n) => $o->setSourceObjectName($n->getStringValue()),
            'targetObjectName' => fn(ParseNode $n) => $o->setTargetObjectName($n->getStringValue()),
        ];
    }

    /**
     * Gets the flowTypes property value. The flowTypes property
     * @return ObjectFlowTypes|null
    */
    public function getFlowTypes(): ?ObjectFlowTypes {
        $val = $this->getBackingStore()->get('flowTypes');
        if (is_null($val) || $val instanceof ObjectFlowTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'flowTypes'");
    }

    /**
     * Gets the metadata property value. Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     * @return array<ObjectMappingMetadataEntry>|null
    */
    public function getMetadata(): ?array {
        $val = $this->getBackingStore()->get('metadata');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ObjectMappingMetadataEntry::class);
            /** @var array<ObjectMappingMetadataEntry>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metadata'");
    }

    /**
     * Gets the name property value. Human-friendly name of the object mapping.
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
     * Gets the scope property value. Defines a filter to be used when deciding whether a given object should be provisioned. For example, you might want to only provision users that are located in the US.
     * @return Filter|null
    */
    public function getScope(): ?Filter {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || $val instanceof Filter) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Gets the sourceObjectName property value. Name of the object in the source directory. Must match the object name from the source directory definition.
     * @return string|null
    */
    public function getSourceObjectName(): ?string {
        $val = $this->getBackingStore()->get('sourceObjectName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceObjectName'");
    }

    /**
     * Gets the targetObjectName property value. Name of the object in target directory. Must match the object name from the target directory definition.
     * @return string|null
    */
    public function getTargetObjectName(): ?string {
        $val = $this->getBackingStore()->get('targetObjectName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetObjectName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attributeMappings', $this->getAttributeMappings());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeEnumValue('flowTypes', $this->getFlowTypes());
        $writer->writeCollectionOfObjectValues('metadata', $this->getMetadata());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('scope', $this->getScope());
        $writer->writeStringValue('sourceObjectName', $this->getSourceObjectName());
        $writer->writeStringValue('targetObjectName', $this->getTargetObjectName());
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
     * Sets the attributeMappings property value. Attribute mappings define which attributes to map from the source object into the target object and how they should flow. A number of functions are available to support the transformation of the original source values.
     * @param array<AttributeMapping>|null $value Value to set for the attributeMappings property.
    */
    public function setAttributeMappings(?array $value): void {
        $this->getBackingStore()->set('attributeMappings', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the enabled property value. When true, this object mapping will be processed during synchronization. When false, this object mapping will be skipped.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the flowTypes property value. The flowTypes property
     * @param ObjectFlowTypes|null $value Value to set for the flowTypes property.
    */
    public function setFlowTypes(?ObjectFlowTypes $value): void {
        $this->getBackingStore()->set('flowTypes', $value);
    }

    /**
     * Sets the metadata property value. Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     * @param array<ObjectMappingMetadataEntry>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value): void {
        $this->getBackingStore()->set('metadata', $value);
    }

    /**
     * Sets the name property value. Human-friendly name of the object mapping.
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
     * Sets the scope property value. Defines a filter to be used when deciding whether a given object should be provisioned. For example, you might want to only provision users that are located in the US.
     * @param Filter|null $value Value to set for the scope property.
    */
    public function setScope(?Filter $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the sourceObjectName property value. Name of the object in the source directory. Must match the object name from the source directory definition.
     * @param string|null $value Value to set for the sourceObjectName property.
    */
    public function setSourceObjectName(?string $value): void {
        $this->getBackingStore()->set('sourceObjectName', $value);
    }

    /**
     * Sets the targetObjectName property value. Name of the object in target directory. Must match the object name from the target directory definition.
     * @param string|null $value Value to set for the targetObjectName property.
    */
    public function setTargetObjectName(?string $value): void {
        $this->getBackingStore()->set('targetObjectName', $value);
    }

}
