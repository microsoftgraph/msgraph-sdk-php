<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

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
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the anchor property value. The anchor property
     * @return bool|null
    */
    public function getAnchor(): ?bool {
        return $this->getBackingStore()->get('anchor');
    }

    /**
     * Gets the apiExpressions property value. The apiExpressions property
     * @return array<StringKeyStringValuePair>|null
    */
    public function getApiExpressions(): ?array {
        return $this->getBackingStore()->get('apiExpressions');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the caseExact property value. The caseExact property
     * @return bool|null
    */
    public function getCaseExact(): ?bool {
        return $this->getBackingStore()->get('caseExact');
    }

    /**
     * Gets the defaultValue property value. The defaultValue property
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        return $this->getBackingStore()->get('defaultValue');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the flowNullValues property value. The flowNullValues property
     * @return bool|null
    */
    public function getFlowNullValues(): ?bool {
        return $this->getBackingStore()->get('flowNullValues');
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return array<AttributeDefinitionMetadataEntry>|null
    */
    public function getMetadata(): ?array {
        return $this->getBackingStore()->get('metadata');
    }

    /**
     * Gets the multivalued property value. The multivalued property
     * @return bool|null
    */
    public function getMultivalued(): ?bool {
        return $this->getBackingStore()->get('multivalued');
    }

    /**
     * Gets the mutability property value. The mutability property
     * @return Mutability|null
    */
    public function getMutability(): ?Mutability {
        return $this->getBackingStore()->get('mutability');
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the referencedObjects property value. The referencedObjects property
     * @return array<ReferencedObject>|null
    */
    public function getReferencedObjects(): ?array {
        return $this->getBackingStore()->get('referencedObjects');
    }

    /**
     * Gets the required property value. The required property
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->getBackingStore()->get('required');
    }

    /**
     * Gets the type property value. The type property
     * @return AttributeType|null
    */
    public function getType(): ?AttributeType {
        return $this->getBackingStore()->get('type');
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
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the anchor property value. The anchor property
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
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the caseExact property value. The caseExact property
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
     * Sets the flowNullValues property value. The flowNullValues property
     * @param bool|null $value Value to set for the flowNullValues property.
    */
    public function setFlowNullValues(?bool $value): void {
        $this->getBackingStore()->set('flowNullValues', $value);
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param array<AttributeDefinitionMetadataEntry>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value): void {
        $this->getBackingStore()->set('metadata', $value);
    }

    /**
     * Sets the multivalued property value. The multivalued property
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
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the referencedObjects property value. The referencedObjects property
     * @param array<ReferencedObject>|null $value Value to set for the referencedObjects property.
    */
    public function setReferencedObjects(?array $value): void {
        $this->getBackingStore()->set('referencedObjects', $value);
    }

    /**
     * Sets the required property value. The required property
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
