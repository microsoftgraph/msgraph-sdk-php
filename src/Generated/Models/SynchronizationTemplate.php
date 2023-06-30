<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SynchronizationTemplate extends Entity implements Parsable 
{
    /**
     * Instantiates a new synchronizationTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationTemplate {
        return new SynchronizationTemplate();
    }

    /**
     * Gets the applicationId property value. The applicationId property
     * @return string|null
    */
    public function getApplicationId(): ?string {
        $val = $this->getBackingStore()->get('applicationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationId'");
    }

    /**
     * Gets the default property value. The default property
     * @return bool|null
    */
    public function getDefault(): ?bool {
        $val = $this->getBackingStore()->get('escapedDefault');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedDefault'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the discoverable property value. The discoverable property
     * @return bool|null
    */
    public function getDiscoverable(): ?bool {
        $val = $this->getBackingStore()->get('discoverable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'discoverable'");
    }

    /**
     * Gets the factoryTag property value. The factoryTag property
     * @return string|null
    */
    public function getFactoryTag(): ?string {
        $val = $this->getBackingStore()->get('factoryTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'factoryTag'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationId' => fn(ParseNode $n) => $o->setApplicationId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'discoverable' => fn(ParseNode $n) => $o->setDiscoverable($n->getBooleanValue()),
            'default' => fn(ParseNode $n) => $o->setDefault($n->getBooleanValue()),
            'factoryTag' => fn(ParseNode $n) => $o->setFactoryTag($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getCollectionOfObjectValues([SynchronizationMetadataEntry::class, 'createFromDiscriminatorValue'])),
            'schema' => fn(ParseNode $n) => $o->setSchema($n->getObjectValue([SynchronizationSchema::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return array<SynchronizationMetadataEntry>|null
    */
    public function getMetadata(): ?array {
        $val = $this->getBackingStore()->get('metadata');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SynchronizationMetadataEntry::class);
            /** @var array<SynchronizationMetadataEntry>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metadata'");
    }

    /**
     * Gets the schema property value. The schema property
     * @return SynchronizationSchema|null
    */
    public function getSchema(): ?SynchronizationSchema {
        $val = $this->getBackingStore()->get('schema');
        if (is_null($val) || $val instanceof SynchronizationSchema) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schema'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('applicationId', $this->getApplicationId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('discoverable', $this->getDiscoverable());
        $writer->writeBooleanValue('default', $this->getDefault());
        $writer->writeStringValue('factoryTag', $this->getFactoryTag());
        $writer->writeCollectionOfObjectValues('metadata', $this->getMetadata());
        $writer->writeObjectValue('schema', $this->getSchema());
    }

    /**
     * Sets the applicationId property value. The applicationId property
     * @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value): void {
        $this->getBackingStore()->set('applicationId', $value);
    }

    /**
     * Sets the default property value. The default property
     * @param bool|null $value Value to set for the EscapedDefault property.
    */
    public function setDefault(?bool $value): void {
        $this->getBackingStore()->set('escapedDefault', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the discoverable property value. The discoverable property
     * @param bool|null $value Value to set for the discoverable property.
    */
    public function setDiscoverable(?bool $value): void {
        $this->getBackingStore()->set('discoverable', $value);
    }

    /**
     * Sets the factoryTag property value. The factoryTag property
     * @param string|null $value Value to set for the factoryTag property.
    */
    public function setFactoryTag(?string $value): void {
        $this->getBackingStore()->set('factoryTag', $value);
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param array<SynchronizationMetadataEntry>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value): void {
        $this->getBackingStore()->set('metadata', $value);
    }

    /**
     * Sets the schema property value. The schema property
     * @param SynchronizationSchema|null $value Value to set for the schema property.
    */
    public function setSchema(?SynchronizationSchema $value): void {
        $this->getBackingStore()->set('schema', $value);
    }

}
