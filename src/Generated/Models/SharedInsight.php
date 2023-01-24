<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharedInsight extends Entity implements Parsable 
{
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
     * @return array<string, callable>
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
        return $this->getBackingStore()->get('lastShared');
    }

    /**
     * Gets the lastSharedMethod property value. The lastSharedMethod property
     * @return Entity|null
    */
    public function getLastSharedMethod(): ?Entity {
        return $this->getBackingStore()->get('lastSharedMethod');
    }

    /**
     * Gets the resource property value. Used for navigating to the item that was shared. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
     * @return Entity|null
    */
    public function getResource(): ?Entity {
        return $this->getBackingStore()->get('resource');
    }

    /**
     * Gets the resourceReference property value. Reference properties of the shared document, such as the url and type of the document. Read-only
     * @return ResourceReference|null
    */
    public function getResourceReference(): ?ResourceReference {
        return $this->getBackingStore()->get('resourceReference');
    }

    /**
     * Gets the resourceVisualization property value. Properties that you can use to visualize the document in your experience. Read-only
     * @return ResourceVisualization|null
    */
    public function getResourceVisualization(): ?ResourceVisualization {
        return $this->getBackingStore()->get('resourceVisualization');
    }

    /**
     * Gets the sharingHistory property value. The sharingHistory property
     * @return array<SharingDetail>|null
    */
    public function getSharingHistory(): ?array {
        return $this->getBackingStore()->get('sharingHistory');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('lastShared', $this->getLastShared());
        $writer->writeObjectValue('lastSharedMethod', $this->getLastSharedMethod());
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
