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

class SynchronizationRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SynchronizationRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationRule {
        return new SynchronizationRule();
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
     * Gets the containerFilter property value. The containerFilter property
     * @return ContainerFilter|null
    */
    public function getContainerFilter(): ?ContainerFilter {
        $val = $this->getBackingStore()->get('containerFilter');
        if (is_null($val) || $val instanceof ContainerFilter) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerFilter'");
    }

    /**
     * Gets the editable property value. true if the synchronization rule can be customized; false if this rule is read-only and shouldn't be changed.
     * @return bool|null
    */
    public function getEditable(): ?bool {
        $val = $this->getBackingStore()->get('editable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'editable'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'containerFilter' => fn(ParseNode $n) => $o->setContainerFilter($n->getObjectValue([ContainerFilter::class, 'createFromDiscriminatorValue'])),
            'editable' => fn(ParseNode $n) => $o->setEditable($n->getBooleanValue()),
            'groupFilter' => fn(ParseNode $n) => $o->setGroupFilter($n->getObjectValue([GroupFilter::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getCollectionOfObjectValues([StringKeyStringValuePair::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'objectMappings' => fn(ParseNode $n) => $o->setObjectMappings($n->getCollectionOfObjectValues([ObjectMapping::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'sourceDirectoryName' => fn(ParseNode $n) => $o->setSourceDirectoryName($n->getStringValue()),
            'targetDirectoryName' => fn(ParseNode $n) => $o->setTargetDirectoryName($n->getStringValue()),
        ];
    }

    /**
     * Gets the groupFilter property value. The groupFilter property
     * @return GroupFilter|null
    */
    public function getGroupFilter(): ?GroupFilter {
        $val = $this->getBackingStore()->get('groupFilter');
        if (is_null($val) || $val instanceof GroupFilter) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupFilter'");
    }

    /**
     * Gets the id property value. Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API.
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the metadata property value. Additional extension properties. Unless instructed explicitly by the support team, metadata values shouldn't be changed.
     * @return array<StringKeyStringValuePair>|null
    */
    public function getMetadata(): ?array {
        $val = $this->getBackingStore()->get('metadata');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, StringKeyStringValuePair::class);
            /** @var array<StringKeyStringValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metadata'");
    }

    /**
     * Gets the name property value. Human-readable name of the synchronization rule. Not nullable.
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
     * Gets the objectMappings property value. Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized.
     * @return array<ObjectMapping>|null
    */
    public function getObjectMappings(): ?array {
        $val = $this->getBackingStore()->get('objectMappings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ObjectMapping::class);
            /** @var array<ObjectMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectMappings'");
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
     * Gets the priority property value. Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first.
     * @return int|null
    */
    public function getPriority(): ?int {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the sourceDirectoryName property value. Name of the source directory. Must match one of the directory definitions in synchronizationSchema.
     * @return string|null
    */
    public function getSourceDirectoryName(): ?string {
        $val = $this->getBackingStore()->get('sourceDirectoryName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceDirectoryName'");
    }

    /**
     * Gets the targetDirectoryName property value. Name of the target directory. Must match one of the directory definitions in synchronizationSchema.
     * @return string|null
    */
    public function getTargetDirectoryName(): ?string {
        $val = $this->getBackingStore()->get('targetDirectoryName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetDirectoryName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('containerFilter', $this->getContainerFilter());
        $writer->writeBooleanValue('editable', $this->getEditable());
        $writer->writeObjectValue('groupFilter', $this->getGroupFilter());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('metadata', $this->getMetadata());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('objectMappings', $this->getObjectMappings());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeStringValue('sourceDirectoryName', $this->getSourceDirectoryName());
        $writer->writeStringValue('targetDirectoryName', $this->getTargetDirectoryName());
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
     * Sets the containerFilter property value. The containerFilter property
     * @param ContainerFilter|null $value Value to set for the containerFilter property.
    */
    public function setContainerFilter(?ContainerFilter $value): void {
        $this->getBackingStore()->set('containerFilter', $value);
    }

    /**
     * Sets the editable property value. true if the synchronization rule can be customized; false if this rule is read-only and shouldn't be changed.
     * @param bool|null $value Value to set for the editable property.
    */
    public function setEditable(?bool $value): void {
        $this->getBackingStore()->set('editable', $value);
    }

    /**
     * Sets the groupFilter property value. The groupFilter property
     * @param GroupFilter|null $value Value to set for the groupFilter property.
    */
    public function setGroupFilter(?GroupFilter $value): void {
        $this->getBackingStore()->set('groupFilter', $value);
    }

    /**
     * Sets the id property value. Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the metadata property value. Additional extension properties. Unless instructed explicitly by the support team, metadata values shouldn't be changed.
     * @param array<StringKeyStringValuePair>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value): void {
        $this->getBackingStore()->set('metadata', $value);
    }

    /**
     * Sets the name property value. Human-readable name of the synchronization rule. Not nullable.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the objectMappings property value. Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized.
     * @param array<ObjectMapping>|null $value Value to set for the objectMappings property.
    */
    public function setObjectMappings(?array $value): void {
        $this->getBackingStore()->set('objectMappings', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the priority property value. Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the sourceDirectoryName property value. Name of the source directory. Must match one of the directory definitions in synchronizationSchema.
     * @param string|null $value Value to set for the sourceDirectoryName property.
    */
    public function setSourceDirectoryName(?string $value): void {
        $this->getBackingStore()->set('sourceDirectoryName', $value);
    }

    /**
     * Sets the targetDirectoryName property value. Name of the target directory. Must match one of the directory definitions in synchronizationSchema.
     * @param string|null $value Value to set for the targetDirectoryName property.
    */
    public function setTargetDirectoryName(?string $value): void {
        $this->getBackingStore()->set('targetDirectoryName', $value);
    }

}
