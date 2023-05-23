<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ObjectMapping implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new objectMapping and sets the default values.
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the attributeMappings property value. The attributeMappings property
     * @return array<AttributeMapping>|null
    */
    public function getAttributeMappings(): ?array {
        return $this->getBackingStore()->get('attributeMappings');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the enabled property value. The enabled property
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->getBackingStore()->get('enabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->getBackingStore()->get('flowTypes');
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return array<ObjectMappingMetadataEntry>|null
    */
    public function getMetadata(): ?array {
        return $this->getBackingStore()->get('metadata');
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
     * Gets the scope property value. The scope property
     * @return Filter|null
    */
    public function getScope(): ?Filter {
        return $this->getBackingStore()->get('scope');
    }

    /**
     * Gets the sourceObjectName property value. The sourceObjectName property
     * @return string|null
    */
    public function getSourceObjectName(): ?string {
        return $this->getBackingStore()->get('sourceObjectName');
    }

    /**
     * Gets the targetObjectName property value. The targetObjectName property
     * @return string|null
    */
    public function getTargetObjectName(): ?string {
        return $this->getBackingStore()->get('targetObjectName');
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
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the attributeMappings property value. The attributeMappings property
     * @param array<AttributeMapping>|null $value Value to set for the attributeMappings property.
    */
    public function setAttributeMappings(?array $value): void {
        $this->getBackingStore()->set('attributeMappings', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the enabled property value. The enabled property
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
     * Sets the metadata property value. The metadata property
     * @param array<ObjectMappingMetadataEntry>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value): void {
        $this->getBackingStore()->set('metadata', $value);
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
     * Sets the scope property value. The scope property
     * @param Filter|null $value Value to set for the scope property.
    */
    public function setScope(?Filter $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the sourceObjectName property value. The sourceObjectName property
     * @param string|null $value Value to set for the sourceObjectName property.
    */
    public function setSourceObjectName(?string $value): void {
        $this->getBackingStore()->set('sourceObjectName', $value);
    }

    /**
     * Sets the targetObjectName property value. The targetObjectName property
     * @param string|null $value Value to set for the targetObjectName property.
    */
    public function setTargetObjectName(?string $value): void {
        $this->getBackingStore()->set('targetObjectName', $value);
    }

}
