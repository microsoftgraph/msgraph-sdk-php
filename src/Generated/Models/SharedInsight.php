<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SharedInsight extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new sharedInsight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedInsight {
        return new SharedInsight();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastShared' => fn(ParseNode $n) => $o->setLastShared($n->getObjectValue([SharingDetail::class, 'createFromDiscriminatorValue'])),
            'lastSharedMethod' => fn(ParseNode $n) => $o->setLastSharedMethod($n->getObjectValue([Entity::class, 'createFromDiscriminatorValue'])),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([Entity::class, 'createFromDiscriminatorValue'])),
            'resourceReference' => fn(ParseNode $n) => $o->setResourceReference($n->getObjectValue([ResourceReference::class, 'createFromDiscriminatorValue'])),
            'resourceVisualization' => fn(ParseNode $n) => $o->setResourceVisualization($n->getObjectValue([ResourceVisualization::class, 'createFromDiscriminatorValue'])),
            'sharingHistory' => fn(ParseNode $n) => $o->setSharingHistory($n->getCollectionOfObjectValues([SharingDetail::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastShared property value. Details about the shared item. Read only.
     * @return SharingDetail|null
    */
    public function getLastShared(): ?SharingDetail {
        $val = $this->getBackingStore()->get('lastShared');
        if (is_null($val) || $val instanceof SharingDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastShared'");
    }

    /**
     * Gets the lastSharedMethod property value. The lastSharedMethod property
     * @return Entity|null
    */
    public function getLastSharedMethod(): ?Entity {
        $val = $this->getBackingStore()->get('lastSharedMethod');
        if (is_null($val) || $val instanceof Entity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSharedMethod'");
    }

    /**
     * Gets the resource property value. Used for navigating to the item that was shared. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     * @return Entity|null
    */
    public function getResource(): ?Entity {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof Entity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Gets the resourceReference property value. Reference properties of the shared document, such as the url and type of the document. Read-only
     * @return ResourceReference|null
    */
    public function getResourceReference(): ?ResourceReference {
        $val = $this->getBackingStore()->get('resourceReference');
        if (is_null($val) || $val instanceof ResourceReference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceReference'");
    }

    /**
     * Gets the resourceVisualization property value. Properties that you can use to visualize the document in your experience. Read-only
     * @return ResourceVisualization|null
    */
    public function getResourceVisualization(): ?ResourceVisualization {
        $val = $this->getBackingStore()->get('resourceVisualization');
        if (is_null($val) || $val instanceof ResourceVisualization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceVisualization'");
    }

    /**
     * Gets the sharingHistory property value. The sharingHistory property
     * @return array<SharingDetail>|null
    */
    public function getSharingHistory(): ?array {
        $val = $this->getBackingStore()->get('sharingHistory');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharingDetail::class);
            /** @var array<SharingDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharingHistory'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('lastShared', $this->getLastShared());
        $writer->writeObjectValue('lastSharedMethod', $this->getLastSharedMethod());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('resource', $this->getResource());
        $writer->writeCollectionOfObjectValues('sharingHistory', $this->getSharingHistory());
    }

    /**
     * Sets the lastShared property value. Details about the shared item. Read only.
     * @param SharingDetail|null $value Value to set for the lastShared property.
    */
    public function setLastShared(?SharingDetail $value): void {
        $this->getBackingStore()->set('lastShared', $value);
    }

    /**
     * Sets the lastSharedMethod property value. The lastSharedMethod property
     * @param Entity|null $value Value to set for the lastSharedMethod property.
    */
    public function setLastSharedMethod(?Entity $value): void {
        $this->getBackingStore()->set('lastSharedMethod', $value);
    }

    /**
     * Sets the resource property value. Used for navigating to the item that was shared. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     * @param Entity|null $value Value to set for the resource property.
    */
    public function setResource(?Entity $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the resourceReference property value. Reference properties of the shared document, such as the url and type of the document. Read-only
     * @param ResourceReference|null $value Value to set for the resourceReference property.
    */
    public function setResourceReference(?ResourceReference $value): void {
        $this->getBackingStore()->set('resourceReference', $value);
    }

    /**
     * Sets the resourceVisualization property value. Properties that you can use to visualize the document in your experience. Read-only
     * @param ResourceVisualization|null $value Value to set for the resourceVisualization property.
    */
    public function setResourceVisualization(?ResourceVisualization $value): void {
        $this->getBackingStore()->set('resourceVisualization', $value);
    }

    /**
     * Sets the sharingHistory property value. The sharingHistory property
     * @param array<SharingDetail>|null $value Value to set for the sharingHistory property.
    */
    public function setSharingHistory(?array $value): void {
        $this->getBackingStore()->set('sharingHistory', $value);
    }

}
