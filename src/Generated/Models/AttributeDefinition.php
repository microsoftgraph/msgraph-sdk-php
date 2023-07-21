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

class AttributeDefinition implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new attributeDefinition and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttributeDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttributeDefinition {
        return new AttributeDefinition();
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
     * Gets the anchor property value. true if the attribute should be used as the anchor for the object. Anchor attributes must have a unique value identifying an object, and must be immutable. Default is false. One, and only one, of the object's attributes must be designated as the anchor to support synchronization.
     * @return bool|null
    */
    public function getAnchor(): ?bool {
        $val = $this->getBackingStore()->get('anchor');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anchor'");
    }

    /**
     * Gets the apiExpressions property value. The apiExpressions property
     * @return array<StringKeyStringValuePair>|null
    */
    public function getApiExpressions(): ?array {
        $val = $this->getBackingStore()->get('apiExpressions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, StringKeyStringValuePair::class);
            /** @var array<StringKeyStringValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiExpressions'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the caseExact property value. true if value of this attribute should be treated as case-sensitive. This setting affects how the synchronization engine detects changes for the attribute.
     * @return bool|null
    */
    public function getCaseExact(): ?bool {
        $val = $this->getBackingStore()->get('caseExact');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'caseExact'");
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'anchor' => fn(ParseNode $n) => $o->setAnchor($n->getBooleanValue()),
            'apiExpressions' => fn(ParseNode $n) => $o->setApiExpressions($n->getCollectionOfObjectValues([StringKeyStringValuePair::class, 'createFromDiscriminatorValue'])),
            'caseExact' => fn(ParseNode $n) => $o->setCaseExact($n->getBooleanValue()),
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getStringValue()),
            'flowNullValues' => fn(ParseNode $n) => $o->setFlowNullValues($n->getBooleanValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getCollectionOfObjectValues([AttributeDefinitionMetadataEntry::class, 'createFromDiscriminatorValue'])),
            'multivalued' => fn(ParseNode $n) => $o->setMultivalued($n->getBooleanValue()),
            'mutability' => fn(ParseNode $n) => $o->setMutability($n->getEnumValue(Mutability::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'referencedObjects' => fn(ParseNode $n) => $o->setReferencedObjects($n->getCollectionOfObjectValues([ReferencedObject::class, 'createFromDiscriminatorValue'])),
            'required' => fn(ParseNode $n) => $o->setRequired($n->getBooleanValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(AttributeType::class)),
        ];
    }

    /**
     * Gets the flowNullValues property value. 'true' to allow null values for attributes.
     * @return bool|null
    */
    public function getFlowNullValues(): ?bool {
        $val = $this->getBackingStore()->get('flowNullValues');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'flowNullValues'");
    }

    /**
     * Gets the metadata property value. Metadata for the given object.
     * @return array<AttributeDefinitionMetadataEntry>|null
    */
    public function getMetadata(): ?array {
        $val = $this->getBackingStore()->get('metadata');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttributeDefinitionMetadataEntry::class);
            /** @var array<AttributeDefinitionMetadataEntry>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metadata'");
    }

    /**
     * Gets the multivalued property value. true if an attribute can have multiple values. Default is false.
     * @return bool|null
    */
    public function getMultivalued(): ?bool {
        $val = $this->getBackingStore()->get('multivalued');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multivalued'");
    }

    /**
     * Gets the mutability property value. The mutability property
     * @return Mutability|null
    */
    public function getMutability(): ?Mutability {
        $val = $this->getBackingStore()->get('mutability');
        if (is_null($val) || $val instanceof Mutability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mutability'");
    }

    /**
     * Gets the name property value. Name of the attribute. Must be unique within the object definition. Not nullable.
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
     * Gets the referencedObjects property value. For attributes with reference type, lists referenced objects (for example, the manager attribute would list User as the referenced object).
     * @return array<ReferencedObject>|null
    */
    public function getReferencedObjects(): ?array {
        $val = $this->getBackingStore()->get('referencedObjects');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ReferencedObject::class);
            /** @var array<ReferencedObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referencedObjects'");
    }

    /**
     * Gets the required property value. true if attribute is required. Object can not be created if any of the required attributes are missing. If during synchronization, the required attribute has no value, the default value will be used. If default the value was not set, synchronization will record an error.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        $val = $this->getBackingStore()->get('required');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'required'");
    }

    /**
     * Gets the type property value. The type property
     * @return AttributeType|null
    */
    public function getType(): ?AttributeType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof AttributeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('anchor', $this->getAnchor());
        $writer->writeCollectionOfObjectValues('apiExpressions', $this->getApiExpressions());
        $writer->writeBooleanValue('caseExact', $this->getCaseExact());
        $writer->writeStringValue('defaultValue', $this->getDefaultValue());
        $writer->writeBooleanValue('flowNullValues', $this->getFlowNullValues());
        $writer->writeCollectionOfObjectValues('metadata', $this->getMetadata());
        $writer->writeBooleanValue('multivalued', $this->getMultivalued());
        $writer->writeEnumValue('mutability', $this->getMutability());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('referencedObjects', $this->getReferencedObjects());
        $writer->writeBooleanValue('required', $this->getRequired());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the anchor property value. true if the attribute should be used as the anchor for the object. Anchor attributes must have a unique value identifying an object, and must be immutable. Default is false. One, and only one, of the object's attributes must be designated as the anchor to support synchronization.
     * @param bool|null $value Value to set for the anchor property.
    */
    public function setAnchor(?bool $value): void {
        $this->getBackingStore()->set('anchor', $value);
    }

    /**
     * Sets the apiExpressions property value. The apiExpressions property
     * @param array<StringKeyStringValuePair>|null $value Value to set for the apiExpressions property.
    */
    public function setApiExpressions(?array $value): void {
        $this->getBackingStore()->set('apiExpressions', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the caseExact property value. true if value of this attribute should be treated as case-sensitive. This setting affects how the synchronization engine detects changes for the attribute.
     * @param bool|null $value Value to set for the caseExact property.
    */
    public function setCaseExact(?bool $value): void {
        $this->getBackingStore()->set('caseExact', $value);
    }

    /**
     * Sets the defaultValue property value. The defaultValue property
     * @param string|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?string $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the flowNullValues property value. 'true' to allow null values for attributes.
     * @param bool|null $value Value to set for the flowNullValues property.
    */
    public function setFlowNullValues(?bool $value): void {
        $this->getBackingStore()->set('flowNullValues', $value);
    }

    /**
     * Sets the metadata property value. Metadata for the given object.
     * @param array<AttributeDefinitionMetadataEntry>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value): void {
        $this->getBackingStore()->set('metadata', $value);
    }

    /**
     * Sets the multivalued property value. true if an attribute can have multiple values. Default is false.
     * @param bool|null $value Value to set for the multivalued property.
    */
    public function setMultivalued(?bool $value): void {
        $this->getBackingStore()->set('multivalued', $value);
    }

    /**
     * Sets the mutability property value. The mutability property
     * @param Mutability|null $value Value to set for the mutability property.
    */
    public function setMutability(?Mutability $value): void {
        $this->getBackingStore()->set('mutability', $value);
    }

    /**
     * Sets the name property value. Name of the attribute. Must be unique within the object definition. Not nullable.
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
     * Sets the referencedObjects property value. For attributes with reference type, lists referenced objects (for example, the manager attribute would list User as the referenced object).
     * @param array<ReferencedObject>|null $value Value to set for the referencedObjects property.
    */
    public function setReferencedObjects(?array $value): void {
        $this->getBackingStore()->set('referencedObjects', $value);
    }

    /**
     * Sets the required property value. true if attribute is required. Object can not be created if any of the required attributes are missing. If during synchronization, the required attribute has no value, the default value will be used. If default the value was not set, synchronization will record an error.
     * @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value): void {
        $this->getBackingStore()->set('required', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param AttributeType|null $value Value to set for the type property.
    */
    public function setType(?AttributeType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
